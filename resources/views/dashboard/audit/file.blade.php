@extends('layout.main')

@section('container')

<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
      <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <h3 class="mb-4 text-secondary">Cek validasi quisioner lewat dokumen</h3>
        <span class="text-center font-weight-bold pb-2"></span>
                @foreach ($questions->whereNotIn('id', $failedQuestionsId) as $question)
                <div class="container border border-primary rounded my-2">
                    <div class="form-group">
                      <label class="form-label">{{$question->question}}</label>
                        <div class="form-check">
                          <input class="form-check-input @error(strtolower($question->risk_management->process_name).'-'.$question->id) is-invalid @enderror" type="radio" name="{{strtolower($question->risk_management->process_name)}}-{{$question->id}}" id="answerYes" value="true" checked>
                          <label class="form-check-label" for="answerYes">
                            Ya
                          </label>
                        </div>
                        {{-- <div class="form-check">
                          <input class="form-check-input @error(strtolower($question->risk_management->process_name).'-'.$question->id) is-invalid @enderror" type="radio" name="{{strtolower($question->risk_management->process_name)}}-{{$question->id}}" id="answerNo" value="false">
                          <label class="form-check-label" for="answerNo">
                            Tidak
                          </label>
                        </div> --}}
                      @error(strtolower($question->risk_management->process_name).'-'.$question->id)
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    @foreach ($files as $fileQuestionId => $file)
                    @if ($question->id == $fileQuestionId)
                        <a class="btn btn-primary text-primary text-gradient px-3 mb-3" href="{{route('dashboard.validate.file.view', ['file' => $file, 'audit' => $audit])}}">Lihat Berkas</a>
                    @endif
                    @endforeach
                </div>
                @endforeach
                {{-- <div class="container border border-primary rounded my-2">
                    <div class="form-group">
                        <h3>Input Berkas</h3>
                        <table class="table table-bordered" id="dynamicAddRemove">
                            <tr>
                                <th>Input Berkas</th>
                                <th class="col-1">Action</th>
                            </tr>
                            <tr>
                                <td><input type="file" name="filenames[0]" class="form-control" required/>
                                </td>
                                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-success btn-success">Tambah Berkas Baru</button></td>
                            </tr>
                        </table>
                    </div>
                </div> --}}

    </div>
  </div>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
</script> --}}
@endsection
