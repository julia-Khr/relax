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
              <div class="row">
                <div class="col-4">
                    <img src="img/foto1.jpg" width="200" height="200" alt="foto" data-holder-rendered="true" class="rounded-circle">
                </div>
                <div class="col-8">
                    <h3 class="my-3">Прядун Юлія</h3>
                    <h3 class="my-3" style="color: #FF931E">IT Bike “Великий старт 2020” 2-4 квітня </h3>
                    <p>В перше спробувала велозаїзд, ні разу не пошкодувала.
                        Відкрила для себе багато чудових краєвидів. Заїзд пройшов неймовірно.
                        Усе організовано дуже чудово, усе врахували.
                        Дякую усім організаторам ♥️
                        З радістю подорожуватиму з вами ще 😊</p>
                </div>
              </div>
              <div class="row border-bottom border-warning my-3"></div>
              <div class="row">
                <div class="col-4">
                    <img src="img/foto1.jpg" width="200" height="200" alt="foto" data-holder-rendered="true" class="rounded-circle">
                </div>
                <div class="col-8">
                    <h3>Прядун Юлія</h3>
                    <h3>IT Bike “Великий старт 2020” 2-4 квітня </h3>
                    <p>В перше спробувала велозаїзд, ні разу не пошкодувала.
                        Відкрила для себе багато чудових краєвидів. Заїзд пройшов неймовірно.
                        Усе організовано дуже чудово, усе врахували.
                        Дякую усім організаторам ♥️
                        З радістю подорожуватиму з вами ще 😊</p>
                </div>
              </div>
              <div class="row border-bottom border-warning my-3"></div>
            </div>
        </div>

            <div class="modal-footer"></div>
          </div>
        </div>
      </div>
