@extends('layout.main')

@section('container')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="row bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="col text-white text-capitalize ps-3">Hasil Audit</h6>
                </div>
          </div>
          <div class="card-body px-0 pb-2">

            @if ($audit->level == 0 || $audit->level == null || $audit->level == -1)
            <h6 class="text-capitalize ps-3 float-right text-center">Audit tidak lulus skala pengukuran level 0</h6>
            <div class="row">
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Hasil Level 1</h6>
                    <div class="table-responsive p-0 border border-primary rounded mx-1">
                        <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Audit</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Jumlah Pertanyaan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Hasil</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Skala Pengukuran</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($risk_managements as $process)

                                <tr>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0 text-center">{{$loop->iteration}}</p>
                                    </td>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      {{-- <div>
                                        <img src="https://cdn.pixabay.com/photo/2018/10/10/14/44/audit-3737447_960_720.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="audit1">
                                      </div> --}}
                                      <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$process->process_name}}</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0 text-center">{{count($process->question->whereIn('level','1'))}}</p>
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['1'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            <p class="text-xs font-weight-bold mb-0">{{$result = $calculation}}%</p>
                                        @endif
                                    @endforeach
                                  </td>
                                  <td class="text-center">


                                    @if ($result >= 80)
                                    <p class="text-xs font-weight-bold mb-0">Fully Achieved (Lulus)</p>
                                    @elseif ($result < 80 and $result >= 50)
                                    <p class="text-xs font-weight-bold mb-0">Largely Achieved (Lulus)</p>
                                    @elseif ($result < 50 and $result >= 15)
                                    <p class="text-xs font-weight-bold mb-0">Partially Achieved (Tidak Lulus)</p>
                                    @else
                                    <p class="text-xs font-weight-bold mb-0">Not Achieved (Tidak Lulus)</p>
                                    @endif
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Rekomendasi</h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($risk_managements as $category)
                        <h6 class="font-weight-bold mb-0 mx-2">{{$category->process_name}}</h6>
                            @foreach ($failedQuestions->whereIn('level', [1]) as $failedQuestion)
                            @if ($category->process_name == $failedQuestion->question->risk_management->process_name)
                            <li class="list-group-item text-xs font-weight-bold mb-0 ">{{$failedQuestion->question->recomendation}}</li>
                            @endif
                            @endforeach
                            <hr class="border border-primary mx-2">
                        @endforeach
                    </ul>
                </div>
            </div>

            <hr class="border border-primary mx-2">
            @endif

            @if ($audit->level >= 1)
            <div class="row">
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Hasil Level 1</h6>
                    <div class="table-responsive p-0 border border-primary rounded mx-1">
                        <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Audit</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Jumlah Pertanyaan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Hasil</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Skala Pengukuran</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($risk_managements as $process)

                                <tr>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0 text-center">{{$loop->iteration}}</p>
                                    </td>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      {{-- <div>
                                        <img src="https://cdn.pixabay.com/photo/2018/10/10/14/44/audit-3737447_960_720.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="audit1">
                                      </div> --}}
                                      <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$process->process_name}}</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0 text-center">{{count($process->question->whereIn('level','1'))}}</p>
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['1'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            <p class="text-xs font-weight-bold mb-0">{{$result = $calculation}}%</p>
                                        @endif
                                    @endforeach
                                  </td>
                                  <td class="text-center">


                                    @if ($result >= 80)
                                    <p class="text-xs font-weight-bold mb-0">Fully Achieved (Lulus)</p>
                                    @elseif ($result < 80 and $result >= 50)
                                    <p class="text-xs font-weight-bold mb-0">Largely Achieved (Lulus)</p>
                                    @elseif ($result < 50 and $result >= 15)
                                    <p class="text-xs font-weight-bold mb-0">Partially Achieved (Tidak Lulus)</p>
                                    @else
                                    <p class="text-xs font-weight-bold mb-0">Not Achieved (Tidak Lulus)</p>
                                    @endif
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Rekomendasi</h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($risk_managements as $category)
                        <h6 class="font-weight-bold mb-0 ">{{$category->process_name}}</h6>
                            @foreach ($failedQuestions->whereIn('level', [2]) as $failedQuestion)
                            @if ($category->process_name == $failedQuestion->question->risk_management->process_name)
                            <li class="list-group-item text-xs font-weight-bold mb-0 ">{{$failedQuestion->question->recomendation}}</li>
                            @endif
                            @endforeach
                            <hr class="border border-primary mx-2">
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr class="border border-primary mx-2">

            @endif

            @if ($audit->level >= 1)
            <div class="row my-2">
                <div class="col text-center">
                    <h6>Hasil Level 2</h6>
                    <div class="table-responsive p-0 border border-primary rounded mx-1">
                        <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Audit</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Jumlah Pertanyaan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Hasil</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Skala Pengukuran</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($risk_managements as $process)

                                <tr>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0 text-center">{{$loop->iteration}}</p>
                                    </td>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      {{-- <div>
                                        <img src="https://cdn.pixabay.com/photo/2018/10/10/14/44/audit-3737447_960_720.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="audit1">
                                      </div> --}}
                                      <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$process->process_name}}</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">{{count($process->question->whereIn('level', '2'))}}</p>
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['2'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            <p class="text-xs font-weight-bold mb-0">{{$calculation}}%</p>
                                        @endif
                                    @endforeach
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['2'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            @if ($calculation >= 80)
                                            <p class="text-xs font-weight-bold mb-0">Fully Achieved (Lulus)</p>
                                            @elseif ($calculation < 80 and $calculation >= 50)
                                            <p class="text-xs font-weight-bold mb-0">Largely Achieved (Tidak Lulus)</p>
                                            @elseif ($calculation < 50 and $calculation >= 15)
                                            <p class="text-xs font-weight-bold mb-0">Partially Achieved (Tidak Lulus)</p>
                                            @else
                                            <p class="text-xs font-weight-bold mb-0">Not Achieved (Tidak Lulus)</p>
                                            @endif
                                        @endif
                                    @endforeach
                                  </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Rekomendasi</h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($risk_managements as $category)
                        <h6 class="font-weight-bold mb-0 ">{{$category->process_name}}</h6>
                            @foreach ($failedQuestions->whereIn('level', [2]) as $failedQuestion)
                            @if ($category->process_name == $failedQuestion->question->risk_management->process_name)
                            <li class="list-group-item text-xs font-weight-bold mb-0 ">{{$failedQuestion->question->recomendation}}</li>
                            @endif
                            @endforeach
                            <hr class="border border-primary mx-2">
                        @endforeach

                    </ul>
                </div>
            </div>
            <hr class="border border-primary mx-2">
            @endif

            @if ($audit->level >= 2)
            <div class="row my-2">
                <div class="col text-center">
                    <h6>Hasil Level 3</h6>
                    <div class="table-responsive p-0 border border-primary rounded mx-1">
                        <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Audit</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Jumlah Pertanyaan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Hasil</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Skala Pengukuran</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($risk_managements as $process)

                                <tr>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0 text-center">{{$loop->iteration}}</p>
                                    </td>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      {{-- <div>
                                        <img src="https://cdn.pixabay.com/photo/2018/10/10/14/44/audit-3737447_960_720.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="audit1">
                                      </div> --}}
                                      <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$process->process_name}}</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">{{count($process->question->whereIn('level', '3'))}}</p>
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['3'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            <p class="text-xs font-weight-bold mb-0">{{$calculation}}%</p>
                                        @endif
                                    @endforeach
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['3'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            @if ($calculation >= 80)
                                            <p class="text-xs font-weight-bold mb-0">Fully Achieved (Lulus)</p>
                                            @elseif ($calculation < 80 and $calculation >= 50)
                                            <p class="text-xs font-weight-bold mb-0">Largely Achieved (Lulus)</p>
                                            @elseif ($calculation < 50 and $calculation >= 15)
                                            <p class="text-xs font-weight-bold mb-0">Partially Achieved (Tidak Lulus)</p>
                                            @else
                                            <p class="text-xs font-weight-bold mb-0">Not Achieved (Tidak Lulus)</p>
                                            @endif
                                        @endif
                                    @endforeach
                                  </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Rekomendasi</h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($risk_managements as $category)
                        <h6 class="font-weight-bold mb-0 mx-2">{{$category->process_name}}</h6>
                            @foreach ($failedQuestions->whereIn('level', [3]) as $failedQuestion)
                            @if ($category->process_name == $failedQuestion->question->risk_management->process_name)
                            <li class="list-group-item text-xs font-weight-bold mb-0 ">{{$failedQuestion->question->recomendation}}</li>
                            @endif
                            @endforeach
                            <hr class="border border-primary mx-2">
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr class="border border-primary mx-2">
            @endif

            @if ($audit->level >= 3)
            <div class="row my-2">
                <div class="col text-center">
                    <h6>Hasil Level 4</h6>
                    <div class="table-responsive p-0 border border-primary rounded mx-1">
                        <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Audit</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Jumlah Pertanyaan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Hasil</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Skala Pengukuran</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($risk_managements as $process)

                                <tr>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0 text-center">{{$loop->iteration}}</p>
                                    </td>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      {{-- <div>
                                        <img src="https://cdn.pixabay.com/photo/2018/10/10/14/44/audit-3737447_960_720.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="audit1">
                                      </div> --}}
                                      <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$process->process_name}}</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">{{count($process->question->whereIn('level', '4'))}}</p>
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['4'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            <p class="text-xs font-weight-bold mb-0">{{$calculation}}%</p>
                                        @endif
                                    @endforeach
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['4'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            @if ($calculation >= 80)
                                            <p class="text-xs font-weight-bold mb-0">Fully Achieved (Lulus)</p>
                                            @elseif ($calculation < 80 and $calculation >= 50)
                                            <p class="text-xs font-weight-bold mb-0">Largely Achieved (Lulus)</p>
                                            @elseif ($calculation < 50 and $calculation >= 15)
                                            <p class="text-xs font-weight-bold mb-0">Partially Achieved (Tidak Lulus)</p>
                                            @else
                                            <p class="text-xs font-weight-bold mb-0">Not Achieved (Tidak Lulus)</p>
                                            @endif
                                        @endif
                                    @endforeach
                                  </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Rekomendasi</h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($risk_managements as $category)
                        <h6 class="font-weight-bold mb-0 mx-2">{{$category->process_name}}</h6>
                            @foreach ($failedQuestions->whereIn('level', [4]) as $failedQuestion)
                            @if ($category->process_name == $failedQuestion->question->risk_management->process_name)
                            <li class="list-group-item text-xs font-weight-bold mb-0 ">{{$failedQuestion->question->recomendation}}</li>
                            @endif
                            @endforeach
                            <hr class="border border-primary mx-2">
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr class="border border-primary mx-2">
            @endif

            @if ($audit->level >= 4)
            <div class="row my-2">
                <div class="col text-center">
                    <h6>Hasil Level 5</h6>
                    <div class="table-responsive p-0 border border-primary rounded mx-1">
                        <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Audit</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Jumlah Pertanyaan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Hasil</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Skala Pengukuran</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($risk_managements as $process)

                                <tr>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0 text-center">{{$loop->iteration}}</p>
                                    </td>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      {{-- <div>
                                        <img src="https://cdn.pixabay.com/photo/2018/10/10/14/44/audit-3737447_960_720.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="audit1">
                                      </div> --}}
                                      <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$process->process_name}}</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <p class="text-xs font-weight-bold mb-0">{{count($process->question->whereIn('level', '5'))}}</p>
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['5'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            <p class="text-xs font-weight-bold mb-0">{{$calculation}}%</p>
                                        @endif
                                    @endforeach
                                  </td>
                                  <td class="text-center">
                                    @foreach ($calculations['5'] as $key => $calculation)
                                        @if ($key == $process->process_name)
                                            @if ($calculation >= 80)
                                            <p class="text-xs font-weight-bold mb-0">Fully Achieved (Lulus)</p>
                                            @elseif ($calculation < 80 and $calculation >= 50)
                                            <p class="text-xs font-weight-bold mb-0">Largely Achieved (Lulus)</p>
                                            @elseif ($calculation < 50 and $calculation >= 15)
                                            <p class="text-xs font-weight-bold mb-0">Partially Achieved (Tidak Lulus)</p>
                                            @else
                                            <p class="text-xs font-weight-bold mb-0">Not Achieved (Tidak Lulus)</p>
                                            @endif
                                        @endif
                                    @endforeach
                                  </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Rekomendasi</h6>
                    <ul class="list-group list-group-flush">
                        @foreach ($risk_managements as $category)
                        <h6 class="font-weight-bold mb-0">{{$category->process_name}}</h6>
                            @foreach ($failedQuestions->whereIn('level', [5]) as $failedQuestion)
                            @if ($category->process_name == $failedQuestion->question->risk_management->process_name)
                            <li class="list-group-item text-xs font-weight-bold mb-0 ">{{$failedQuestion->question->recomendation}}</li>
                            @endif
                            @endforeach
                        <hr class="border border-primary mx-2">
                        @endforeach
                    </ul>
                </div>
            </div>
            <hr class="border border-primary mx-2">
            @endif

            {{-- Analisis Gap --}}
            <div class="row">
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Analisis GAP</h6>
                    <div class="table-responsive p-0 border border-primary rounded mx-1">
                        <table class="table align-items-center mb-0">
                            <thead>
                              <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Nama Proses</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1">Level saat ini</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">Harapan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-1 text-center">GAP</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($risk_managements as $process)

                                <tr>
                                    <td>
                                      <p class="text-xs font-weight-bold mb-0 text-center">{{$loop->iteration}}</p>
                                    </td>
                                  <td>
                                    <div class="d-flex px-2 py-1">
                                      {{-- <div>
                                        <img src="https://cdn.pixabay.com/photo/2018/10/10/14/44/audit-3737447_960_720.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="audit1">
                                      </div> --}}
                                      <div class="d-flex flex-column justify-content-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$process->process_name}}</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    @foreach ($audit->passed_process as $level => $passedProcessArr)
                                        @foreach ($passedProcessArr as $passedProcess)
                                            @if ($passedProcess == strtolower(str_replace(' ', '_', $process->process_name)))
                                                <div hidden>{{$newLevel = $level}}</div>
                                                <p class="text-xs font-weight-bold mb-0 text-center">{{$newLevel}}</p>
                                            @endif
                                        @endforeach
                                    @endforeach
                                  </td>
                                  <td class="text-center">
                                    @if ($newLevel < 5)
                                    <p class="text-xs font-weight-bold mb-0">{{$hopeLevel =  $newLevel + 1}}</p>
                                    @else
                                    <p class="text-xs font-weight-bold mb-0">{{$hopeLevel =  $newLevel}}</p>
                                    @endif
                                  </td>
                                  <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$newLevel - $hopeLevel}}</p>
                                  </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <h6 class="text-capitalize ps-3 float-right text-center">Deskripsi Analisis Gap</h6>
                    <p class="text-s font-weight-bold mb-0 text-justify mx-2">Analisis Gap dimaknai sebagai sebuah perbandingan antara kinerja aktual yang ada pada saat ini dengan kinerja potensial yang diharapkan. Dengan kata lain, Analisis Gap merupakan suatu metode yang diciptakan untuk mengidentifikasi apakah suatu sistem yang berlangsung di suatu perusahaan atau bisnis pada saat ini sudah memenuhi target atau belum.</p>
                </div>
            </div>
            <hr class="border border-primary mx-2">
          </div>
        </div>
      </div>

    </div>

  </div>

  @endsection
