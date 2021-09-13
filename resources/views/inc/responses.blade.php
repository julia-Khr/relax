
    <div class="modal fade modal-top" id="responses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content" id=hide style="background-color: #F2F2F2; border-radius: .9rem">
            <div class="modal-header justify-content-center border-0 my-3">
              <h2 class="modal-title modal-response-title">Відгуки наших друзів</h2>
             </div>
            <div class="modal-body" style="font-family: 'Montserrat', sans-serif; font-size: 20px!important; line-height: 30px">
                <div class="container-fluid space">
                    @php
                    $responses_count = $responses->count();
                  @endphp
                        @foreach($responses as $key => $response)



                            <div class="row d-flex flex-xl-row">
                                <div class="col-4 d-flex justify-content-center">
                                    <img src="/author_avatar_url/{{$response->author_avatar_url}}" width="200" height="200" alt="foto" data-holder-rendered="true" class="rounded-circle">
                                </div>
                                <div class="col-8">
                                    <h3>{{$response->author_name}}</h3>
                                    <h3 style="color: #FF931E">{{$response->event->enterprise->name}}, {{$response->event->name}}, {{date("F j, Y", strtotime($response->date))}} </h3>
                                    <p>{{$response->text}}</p>
                                </div>
                            </div>

                            @if ($key + 1 != $responses_count)
                            <div class="row yellow-line border-bottom border-warning my-3"></div>
                            @endif


                        @endforeach

                </div>

                <div class="container-fluid none">
                    <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($responses as $response)

                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">

                                <div class="row d-flex flex-column flex-xl-row align-content-center">
                                    <div class="col d-flex justify-content-center">
                                        <img src="/author_avatar_url/{{$response->author_avatar_url}}" width="200" height="200" alt="foto" data-holder-rendered="true" class="rounded-circle">
                                    </div>
                                    <div class="col">
                                        <h3>{{$response->author_name}}</h3>
                                        <h3 style="color: #FF931E">{{$response->event->enterprise->name}}, {{$response->event->name}}, {{date("F j, Y", strtotime($response->date))}} </h3>
                                        <p>{{$response->text}}</p>
                                    </div>
                                </div>

                                {{-- <div class="row border-bottom border-warning my-3"></div> --}}
                            </div>

                            @endforeach
                    </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                        </div>
                </div>
             </div>
           </div>
        </div>
      </div>

<script>



</script>
