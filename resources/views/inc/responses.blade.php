    @include('inc.style')
    @include('inc.scripts')

    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#responces">
        Launch demo modal
      </button> --}}


    <div class="modal fade" id="responses" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content" style="background-color: #F2F2F2; border-radius: .9rem">
            <div class="modal-header justify-content-center border-0 my-3">
              <h2 class="modal-title" style="font-family: 'Montserrat', sans-serif; font-size: 37px!important; line-height: 114px">Відгуки наших друзів</h2>
             </div>
            <div class="modal-body" style="font-family: 'Montserrat', sans-serif; font-size: 20px!important; line-height: 30px">
                <div class="container-fluid">
                    @foreach ($responses as $response)
                    <div class="row">
                        <div class="col-3">
                            <img src="/author_avatar_url/{{$response->author_avatar_url}}" width="200" height="200" alt="foto" data-holder-rendered="true" class="rounded-circle">
                        </div>
                        <div class="col-9">
                            <h3>{{$response->author_name}}</h3>
                            <h3 style="color: #FF931E">{{$response->event->enterprise->name}}, {{$response->event->name}}, {{date("F j, Y", strtotime($response->date))}} </h3>
                            <p>{{$response->text}}</p>
                        </div>
                    </div>
                    <div class="row border-bottom border-warning my-3"></div>
                    @endforeach

            </div>
        </div>

            <div class="modal-footer"></div>
          </div>
        </div>
      </div>
