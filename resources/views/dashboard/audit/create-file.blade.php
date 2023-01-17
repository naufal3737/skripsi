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
                <form role="form" action="{{route('dashboard.audit.file.put', $audit)}}" method="POST" class="text-start" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="audit_id" id="audit_id" value="{{$audit->id}}">
                    <div class="container border border-primary rounded my-2">
                        <div class="form-group">
                            <h3>Input Berkas</h3>
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <tr>
                                    <th>Input Berkas</th>
                                    <th class="col-1">Action</th>
                                </tr>
                                <tr>
                                    <td><input type="file" name="filenames[0]" class="form-control"/>
                                    </td>
                                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-success btn-success">Tambah Berkas Baru</button></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-20 my-4 mb-2">Upload Berkas</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
      var i = 0;
      $("#dynamic-ar").click(function () {
          ++i;
          $("#dynamicAddRemove").append('<tr><td><input type="file" name="filenames[' + i +
              ']" class="form-control" /></td><td><button type="button" class="btn btn-outline-danger btn-danger remove-input-field">Hapus</button></td></tr>'
              );
      });
      $(document).on('click', '.remove-input-field', function () {
          $(this).parents('tr').remove();
      });
  </script>
  @endsection
