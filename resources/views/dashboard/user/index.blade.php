@extends('layout.main')

@section('container')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="row bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="col text-white text-capitalize ps-3">User Table</h6>
                  <a class="col-2 btn bg-gradient-dark mb-0 me-3" href="{{route('dashboard.user.create')}}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add User</a>
                </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-4">User</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-2 text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>
                          <p class="text-xs font-weight-bold mb-0 text-center">{{$users->firstItem() + $loop->index}}</p>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://cdn.pixabay.com/photo/2017/03/21/02/00/user-2160923_960_720.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{Str::ucfirst($user->roles->pluck('name')[0])}}</p>
                      </td>
                      <td class="text-center">
                            <form action="{{route('dashboard.user.destroy',$user)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger text-danger text-gradient px-3 mb-0" onclick="return confirm('Are you sure want to delete this user?')"><i class="material-icons text-sm me-2">delete</i>Delete</button>
                            </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
                <div class="pagination-wrapper float-end me-4">
                    {{ $users->links() }}
                </div>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  @endsection
