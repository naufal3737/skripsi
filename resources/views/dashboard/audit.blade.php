@extends('layout.main')

@section('container')

<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
      <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <h3 class="mb-4 text-secondary">Kuisioner Tata Kelola</h3>
        <span class="text-center text-xs font-weight-bold pb-2">Progress - 60%</span>
        <div class="align-items-center justify-content-center">
            <div>
              <div class="progress">
                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
              </div>
            </div>
        </div>
            <form role="form" action="" method="POST" class="text-start">
                @csrf
              <div class="input-group input-group-outline my-3">
                <label class="form-label">Apakah penentuan tingkat otoritas sudah sesuai dengan manajemen organisasi pengembangan perangkat lunak?</label>
                <input type="text" class="form-control @error('q1') is-invalid @enderror" name="q1" id="q1" required>
                @error('q1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group input-group-outline my-3">
                <label class="form-label">Apakah ada dokumen mengenai tingkat otoritas atau penentuan wewenang?</label>
                <input type="text" class="form-control @error('q1') is-invalid @enderror" name="q1" id="q1" required>
                @error('q1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group input-group-outline my-3">
                <label class="form-label">Apakah penentuan tugas dan tanggung jawab sudah sesuai dengan manajemen pengembangan perangkat lunak?</label>
                <input type="text" class="form-control @error('q1') is-invalid @enderror" name="q1" id="q1" required>
                @error('q1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group input-group-outline my-3">
                <label class="form-label">Apakah ada dokumen yang mengatur tentang tugas dan tanggung jawab?</label>
                <input type="text" class="form-control @error('q1') is-invalid @enderror" name="q1" id="q1" required>
                @error('q1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Next</button>
              </div>
            </form>

    </div>
  </div>
@endsection
