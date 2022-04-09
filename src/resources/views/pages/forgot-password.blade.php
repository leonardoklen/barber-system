<!DOCTYPE html>
<html lang="pt-br" class="login-height">

@extends('components.head')
@section('title', 'Recuperar Senha')

<body class="bg-gradient-light">

    <div class="container h-100">

        <div class="row justify-content-center h-100 align-items-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <br><br><br>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Esqueceu sua senha?</h1>
                                        <p class="mb-4">Nós entendemos, coisas acontecem. Basta digitar seu endereço de e-mail abaixo
                                            e nós lhe enviaremos um link para redefinir sua senha!</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Digite seu endereço de e-mail">
                                        </div>
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Redefinir Senha
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="entrar">Já tem conta? Conecte-se!</a>
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

</html>