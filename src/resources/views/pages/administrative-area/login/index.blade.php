@extends('components.head')
@section('title', 'Entrar')

<body class="bg-gradient-light">

    <div class="container h-100">

        <div class="row justify-content-center h-100 align-items-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <br><br><br>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bem-vindo de volta!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="emailLogin" aria-describedby="emailHelp" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="passwordLogin" placeholder="Senha">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Lembrar-me</label>
                                            </div>
                                        </div>
                                        <a type="none" id="btnLogin" class="btn btn-primary btn-user btn-block">
                                            Entrar
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="esqueceu-senha">Esqueceu sua senha?</a>
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

@extends('components.footer')

<script src="assets/js/pages/login/index.js" type="module"></script>