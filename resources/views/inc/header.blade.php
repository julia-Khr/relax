<header>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <div class="row align-items-center" style="width:100%">
                <div class="col-lg-2 col-md-2 col-sm-12 col-12 d-flex flex-row-reverse justify-content-between">
                    <a href="" class="navbar-brand pt-0 mt-0 ms-0 mb-0 logo"></a>
                    <button class="navbar-toggler burger" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false">
                    </button>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav container d-flex flex-column flex-md-row justify-content-between">
                            <li class="nav-item">
                                <a href="" class="nav-link">Головна</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Подорожі</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Історія подій</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Відгуки</a>
                            </li>
                            <li class="nav-item d-none d-sm-none d-md-block d-xxl-block d-xl-block d-lg-block">
                                <a href="" class="nav-link ">Контакти</a>
                            </li>
                            <li class="nav-item d-xxl-none d-xl-none d-lg-none d-md-none ">
                                <a href="" class="nav-link">Наші переваги</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<script>
    const burgerBtn = document.querySelector('.navbar-toggler')

    burgerBtn.addEventListener('click', (e) => {
        document.body.classList.toggle('opened');
        burgerBtn.classList.add('arrow');
    })

    burgerBtn.addEventListener('click', (e) => {
        const navbar_is_active = document.body.classList.contains('opened');
        if (!navbar_is_active) {
            burgerBtn.classList.remove('arrow');
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<<<<<<< HEAD

=======
>>>>>>> 4e2d1b08f644984941092a3b9dd04ff20ffee634
