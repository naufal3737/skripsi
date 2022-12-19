@extends('layout.main')

@section('container')

<div class="container-fluid px-2 px-md-4">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
      <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <h3 class="mb-4 text-secondary">Kuisioner Tata Kelola</h3>
        <span class="text-center font-weight-bold pb-2">Progress - Level 1</span>
        <div class="align-items-center justify-content-center my-3">
            <div>
              <div class="progress">
                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
              </div>
            </div>
        </div>
            <form role="form" action="{{route('dashboard.audit.level1.store')}}" method="POST" class="text-start">
                @csrf
                @method('POST')
                @foreach ($questions as $question)
                <div class="container border border-primary rounded my-2">
                    <div class="form-group">
                      <label class="form-label">{{$loop->iteration.'. '  .$question->question}}</label>
                        <div class="form-check">
                          <input class="form-check-input @error(strtolower($question->risk_management->process_name).'-'.$question->id) is-invalid @enderror" type="radio" name="{{strtolower($question->risk_management->process_name)}}-{{$question->id}}" id="answerYes" value="true">
                          <label class="form-check-label" for="answerYes">
                            Ya
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input @error(strtolower($question->risk_management->process_name).'-'.$question->id) is-invalid @enderror" type="radio" name="{{strtolower($question->risk_management->process_name)}}-{{$question->id}}" id="answerNo" value="false">
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
                </div>
                @endforeach
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Next</button>
              </div>
            </form>

    </div>
  </div>
@endsection
