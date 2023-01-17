@extends('layout.main')

@section('container')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="row bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="col text-white text-capitalize ps-3">Audit Table</h6>
                </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-4">Audit</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($audits as $audit)
                    <tr>
                        <td>
                          <p class="text-xs font-weight-bold mb-0 text-center">{{$audits->firstItem() + $loop->index}}</p>
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
                      <td class="text-center">
                        @if ($audit->validated == 'true')
                        <form action="{{route('dashboard.validate.unvalidateFile',$audit)}}" method="POST">
                            @csrf
                            @method('POST')
                            <button class="btn btn-success text-success text-gradient px-3 mb-0" onclick="return confirm('Apakah yakin untuk menghapus validasi terhadap audit ini?')" {{$audit->progress == 'end' ? 'disabled' : ''}}><i class="material-icons text-sm me-2">check</i>{{$audit->progress == 'end' ? 'Audit telah selesai' : 'Tervalidasi'}}</button>
                        </form>
                        @else
                        <form action="{{route('dashboard.validate.validateFile',$audit)}}" method="POST">
                            @csrf
                            @method('POST')
                            <button class="btn btn-danger text-danger text-gradient px-3 mb-0" onclick="return confirm('Apakah yakin untuk memvalidasi audit ini? \nPastikan bahwa audit ini sesuai dengan berkas yang telah diberikan.')" {{$audit->progress == 'end' ? 'disabled' : ''}}><i class="material-icons text-sm me-2">close</i>{{$audit->progress == 'end' ? 'Audit telah selesai' : 'Belum tervalidasi'}}</button>
                        </form>
                        @endif
                      </td>
                      <td class="text-center">
                        @if ($audit->files)
                        <a class="btn btn-info text-info text-gradient" href="{{route('dashboard.validate.file', $audit)}}"><i class="material-icons text-sm me-2">description</i>Lihat Berkas</a>
                        @endif
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
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0w;
          var audit_id = $(this).data('id');

          $.ajax({
              type: "GET",
              dataType: "json",
              url: route('dashboard.changeValidateStatus'),
              data: {'status': status, 'audit_id': audit_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script> --}}
  @endsection
