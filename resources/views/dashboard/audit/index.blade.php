@extends('layout.main')

@section('container')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="row bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="col text-white text-capitalize ps-3">Audit Table</h6>
                  <a class="col-2 btn bg-gradient-dark mb-0 me-3" href="{{route('dashboard.audit.level1')}}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Create New Audit</a>
                </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-2">Audit</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-3">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Lanjut</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($audits as $audit)
                    <tr>
                        <td>
                          <p class="text-xs font-weight-bold mb-0 text-center">{{$loop->iteration}}</p>
                        </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="https://cdn.pixabay.com/photo/2018/10/10/14/44/audit-3737447_960_720.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="audit1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Audit pada tanggal {{date('d-m-Y', strtotime($audit->created_at))}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$audit->progress}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        @if ($audit->progress == 'end')
                            <p class="text-xs font-weight-bold mb-0">Audit telah selesai</p>
                        @else
                            @if ($audit->validated == 'true')
                            <p class="text-xs font-weight-bold mb-0">Dapat melanjutkan level</p>
                            @else
                            <p class="text-xs font-weight-bold mb-0">Menunggu validasi</p>
                            @endif
                        @endif
                      </td>
                      <td class="text-center">
                        @if ($audit->progress == 'end')
                            <a class="btn btn-info text-info text-gradient px-3 mb-0"" href="{{route('dashboard.audit.output', $audit->id)}}"><i class="material-icons text-sm me-2">reviews</i>Lihat Hasil</a>
                        @else
                            @if ($audit->validated == 'true')
                                <a class="btn btn-success text-success text-gradient px-3 mb-0"" href="{{route('dashboard.audit.level2')}}"><i class="material-icons text-sm me-2">check</i>Lanjut</a>
                            @else
                            <button class="btn btn-danger text-danger text-gradient px-3 mb-0" disabled><i class="material-icons text-sm me-2">close</i>Menunggu Validasi</button>
                            @endif
                        @endif
                      </td>
                      <td class="text-center">
                            <form action="{{route('dashboard.audit.destroy',$audit)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger text-danger text-gradient px-3 mb-0" onclick="return confirm('Apakah yakin untuk menghapus audit ini? \nAudit yang dihapus tidak akan dapat dikembalikan dan akan kehilangan semua progress.')"><i class="material-icons text-sm me-2">delete</i>Delete</button>
                            </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
                <div class="pagination-wrapper float-end me-4">
                    {{ $audits->links() }}
                </div>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
