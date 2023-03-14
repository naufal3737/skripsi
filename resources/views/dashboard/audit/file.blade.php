@extends('layout.main')

@section('container')

<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
      <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <h3 class="mb-4 text-secondary">Cek validasi quisioner lewat dokumen</h3>
        <span class="text-center font-weight-bold pb-2"></span>
                {{-- @foreach ($questions->whereNotIn('id', $failedQuestionsId) as $question) --}}
                @foreach ($questions as $question)
                @foreach ($files as $fileQuestionId => $file)

                @php
                    $raw_data = $audit->raw_data
                @endphp

                @foreach ($raw_data->{'level_'.$audit->level} as $key => $value)

                @php
                (list($process_name, $question_id) = explode('-', $key))
                @endphp
                {{-- {{$key}} {{$value}}
                <br>
                {{dd($audit->raw_data)}} --}}
                @if ($question->id == $fileQuestionId && $question->id == $question_id)


                <div class="container border border-primary rounded my-2">
                    <div class="form-group">
                      <label class="form-label">{{$question->question}}</label>
                        <div class="form-check">
                          <input class="form-check-input @error(strtolower($question->risk_management->process_name).'-'.$question->id) is-invalid @enderror" type="radio" name="{{strtolower($question->risk_management->process_name)}}-{{$question->id}}" id="answerYes" value="true" disabled {{($value == 'true') ? 'checked' : ''}}>
                          <label class="form-check-label" for="answerYes">
                            Ya
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input @error(strtolower($question->risk_management->process_name).'-'.$question->id) is-invalid @enderror" type="radio" name="{{strtolower($question->risk_management->process_name)}}-{{$question->id}}" id="answerNo" value="false" disabled {{($value == 'false') ? 'checked' : ''}}>
                          <label class="form-check-label" for="answerNo">
                            No
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
                    {{-- @foreach ($files as $fileQuestionId => $file) --}}

                    <div class="row">
                        <a class="col btn btn-info text-info text-gradient px-3 mb-3 mx-4" href="{{route('dashboard.validate.file.view', ['file' => $file, 'audit' => $audit])}}">Lihat Berkas</a>
                        <div class="col"></div>
                        <div class="col"></div>
                        @if ($question->id == $fileQuestionId)
                            <form  class="col" action="{{route('dashboard.validate.validateFile', [ 'audit_id' => $audit->id, 'question_id' => $question->id])}}" method="POST">
                                @csrf
                                @method('POST')

                                @if ($value == 'true')
                                <button class=" btn btn-primary text-primary text-gradient px-3 mb-3 mx-4" onclick="return confirm('Apakah yakin untuk memvalidasi audit ini? \nPastikan bahwa audit ini sesuai dengan berkas yang telah diberikan.')"><i class="material-icons text-sm me-2">close</i>Tolak Berkas</button>
                                @else
                                <button class=" btn btn-success text-success text-gradient px-3 mb-3 mx-4" onclick="return confirm('Apakah yakin untuk memvalidasi audit ini? \nPastikan bahwa audit ini sesuai dengan berkas yang telah diberikan.')"><i class="material-icons text-sm me-2">check</i>Terima Berkas</button>
                                @endif

                            </form>
                            {{-- <a class="col btn btn-primary text-primary text-gradient px-3 mb-3 mx-4" href="{{route('dashboard.validate.validateFile', [ 'audit' => $audit, 'question_id' => $question->id])}}">Tolak Berkas</a> --}}
                        @endif
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
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
