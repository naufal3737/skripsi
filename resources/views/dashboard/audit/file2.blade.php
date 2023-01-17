@extends('layout.main')

@section('container')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="row bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="col text-white text-capitalize ps-3">Audit pada tanggal {{date('d-m-Y', strtotime($audit->created_at))}}</h6>
                </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-4">Nama File</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-2 text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach (($audit->files) as $file)
                    <tr>
                        <td>
                          <p class="text-xs font-weight-bold mb-0 text-center">{{$loop->iteration}}</p>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://cdn.pixabay.com/photo/2017/03/08/21/20/pdf-2127829_960_720.png" class="avatar avatar-sm me-3 border-radius-lg" alt="audit1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$file}}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-primary text-primary text-gradient px-3 mb-0" href="{{route('dashboard.audit.file.view', ['file' => $file, 'audit' => $audit])}}">Lihat Berkas</a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
