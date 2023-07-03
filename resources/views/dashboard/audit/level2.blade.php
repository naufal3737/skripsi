@extends('layout.main')

@section('container')

<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
      <span class="mask  bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <h3 class="mb-4 text-secondary">Kuisioner Tata Kelola</h3>
        <span class="text-center font-weight-bold pb-2">Progress - Level 2</span>
        <div class="align-items-center justify-content-center my-3">
            <div>
              <div class="progress">
                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
              </div>
            </div>
        </div>
            <form role="form" action="{{route('dashboard.audit.level.store')}}" method="POST" class="text-start" enctype="multipart/form-data" name="myForm">
                @csrf
                @method('POST')
                @foreach ($process_id as $id)
                <input type="hidden" id="questionIdArr" name="questionIdArr[]" value="{{$id}}">
                @endforeach
                <input type="hidden" id="id" name="id" value="{{$audit->id}}">
                @foreach ($questions as $question)
                <div class="container border border-primary rounded my-2">
                    <div class="form-group" onchange="test({{$question->id}})" id="{{$question->id}}">
                      <label class="form-label">{{$loop->iteration.'. '  .$question->question}}</label>
                        <div class="form-check">
                          <input class="form-check-input @error(strtolower($question->risk_management->process_name).'-'.$question->id) is-invalid @enderror" type="radio"
                          name="{{strtolower($question->risk_management->process_name)}}-{{$question->id}}" id="{{'answerYes_'.$question->id}}" value="true" onchange="test2({{$question->id}})">
                          <label class="form-check-label" for="answerYes">
                            Ya
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input @error(strtolower($question->risk_management->process_name).'-'.$question->id) is-invalid @enderror" type="radio"
                          name="{{strtolower($question->risk_management->process_name)}}-{{$question->id}}" id="{{'answerNo_'.$question->id}}" value="false" onchange="test2({{$question->id}})">
                          <label class="form-check-label" for="answerNo">
                            Tidak
                          </label>
                        </div>
                      @error(strtolower($question->risk_management->process_name).'-'.$question->id)
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    @if ($question->type == 'document')
                    <div class="border border-primary rounded my-2" id="{{'fileForm_'.$question->id}}" hidden>
                        <input type="file" name="filenames[{{$question->id}}]" id="{{'fileInput_'.$question->id}}" class="form-control" required disabled/>
                    </div>
                    @endif
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
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Next</button>
              </div>
            </form>

    </div>
  </div>
<script>
    function test2(id) {

        if (document.getElementById('answerYes_' + id).checked == true) {
            document.getElementById('fileForm_' + id).hidden = false;
            document.getElementById('fileInput_' + id).disabled = false;
        }

        if (document.getElementById('answerNo_' + id).checked == true) {
          document.getElementById('fileForm_' + id).hidden = true;
          document.getElementById('fileInput_' + id).disabled = true;
        }
    }
</script>
@endsection
