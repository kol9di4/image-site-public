<!-- Modal Login -->
<div class="modal fade" id="logInModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="form-signin modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: auto;"></button>
            <form class="log">
                <h1 class="h3 mb-5 fw-normal">Пожалуйста войдите в аккаунт</h1>
                <div class="form-floating">
                    <input type="text" name="login" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Login</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Войти</button>
            </form>
        </div>
    </div>
  </div>
  <!-- Modal Register -->
  <div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="form-signin modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: auto;"></button>
            <form class="reg">
                <h1 class="h3 mb-5 fw-normal">Пожалуйста зарегистрируйтесь</h1>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email адрес</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="login" class="form-control" id="floatingInput" placeholder="admin">
                    <label for="floatingInput">Логин</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Пароль</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password-confirm" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Подтвердите пароль</label>
                </div>
                <div class="h6 text-danger"></div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Регистрация</button>
            </form>
        </div>
    </div>
  </div>
<!-- Modal End -->
    <nav class="navbar navbar-expand-lg navbar-light py-4" style="background-color: rgb(246, 245, 255);">
        <div class="container" style="justify-content: flex-end;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc" aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="nav_lc">
                <div><a class="btn btn-outline-secondary me-2" href="#"  data-bs-toggle="modal" data-bs-target="#logInModal">Sign In</a>
                <a class="btn btn-primary" href="#"  data-bs-toggle="modal" data-bs-target="#regModal">Sign Up</a></div>
            </div>
        </div>
    </nav>