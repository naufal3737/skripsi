@extends('layout.main')
@section('container')
<div class="container-fluid">
<div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="row bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="col text-white text-capitalize ps-3">User Table</h6>
            <a class="col-1 btn bg-light mb-0 me-3" href="javascript:history.back();"><i class="material-icons text-sm">arrow_back</i>&nbsp;&nbsp;Back</a>
          </div>
    </div>
    <div class="card-body px-0 pb-2">
            <div class="container w-40 border border-radius-5px">
                <div class="">
                  <div class="card card-plain">
                    <div class="card-header">
                      <h4 class="font-weight-bolder">Add New User</h4>
                      <p class="mb-0">Please fill these form correctly</p>
                    </div>
                    <div class="card-body" style="background: #FFFFFF">
                      <form role="form" action="{{ route('dashboard.user.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Name</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required>
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required>
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <!--<div class="input-group input-group-outline mb-3">-->
                        <!--  <label class="form-label">Confirm Password</label>-->
                        <!--  <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" required>-->
                        <!--  @error('password_confirmation')-->
                        <!--    <span class="invalid-feedback" role="alert">-->
                        <!--        <strong>{{ $message }}</strong>-->
                        <!--    </span>-->
                        <!--@enderror-->
                        <!--</div>-->
                        <div class="input-group input-group-outline mb-3">
                            <select class="form-control @error('role') is-invalid @enderror" name="role" id="role" required>
                                <option selected>Select Role</option>
                                <option value="asesor">Asesor</option>
                                <option value="auditee">Auditee</option>
                                <option value="decision maker">Decision Maker</option>
                            </select>
                            @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- <div class="form-check form-check-info text-start ps-0">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                          <label class="form-check-label" for="flexCheckDefault">
                            I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                          </label>
                        </div> --}}
                        <div class="text-center">
                          <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Add New User</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
    </div>
  </div>
</div>

@endsection

