@extends('layout.main')

@section('container')

<div class="container-fluid ">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
      <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
      <div class="row gx-4 mb-2">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="https://cdn.pixabay.com/photo/2017/03/21/02/00/user-2160923_960_720.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
                {{ Auth::user()->name }}
            </h5>
            <p class="mb-0 font-weight-normal text-sm">
                {{Str::ucfirst(Auth::user()->roles->pluck('name')[0])}}
            </p>
          </div>
        </div>

      </div>
      <div class="row">
        <p class=" text-bold">Hallo {{ Auth::user()->name }}, selamat datang di Sistem Informasi Audit Manajemen Risiko Pengembangan Perangkat Lunak.</p>
        </div>
    </div>
  </div>
@endsection
