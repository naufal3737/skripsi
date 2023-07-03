<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Calculation;
use App\Models\FailedQuestion;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('can:user management');
    }

    public function index()
    {
        $users = User::where('id', '!=', Auth::id())->paginate(10);
        // $users = User::with('roles')->get();
        return view('dashboard.user.index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'role' => ['required'],
            'password' => ['required'],
        ]);

        $role = $request['role'];

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);


        $user->assignRole($role);

        return redirect('/dashboard/user-management')->with('success', 'User successfully has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function show(User $user)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\User  $user
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(User $user)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\User  $user
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, User $user)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $audits = Audit::where('user_id', $user->id)->get();
        foreach ($audits as $audit){
            
            if ($audit->files != null){
                foreach ($audit->files as $file){
                    $path = 'files/'.$file;
                    File::delete($path);
                }
            }
            $calculation = Calculation::where('audit_id', $audit->id)->delete();
            $failedQuestion = FailedQuestion::where('audit_id', $audit->id)->delete();
            $audit->delete();
        }
        $user->delete();

        return redirect('/dashboard/user-management')->with('success', 'User has been deleted');
    }
}
