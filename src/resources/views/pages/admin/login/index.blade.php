@php
    use App\Http\Controllers\UserController;
    UserController::checkIfSessionExists($_SERVER['REQUEST_URI']);
@endphp

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Barber System</title>

    <link rel="icon" href="../../../../../assets/img/img-logo.PNG">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">

    <link href="../assets/css/pages/admin/login/index.css" rel="stylesheet" type="text/css"/>
</head>

<body class="vh-100">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="d-flex justify-content-center border-0 shadow-lg">
                    <div id="divCard" class="p-5">                                    
                        <div class="text-center mb-4">
                            <h4>Barber System</h4>
                        </div>
                        <form class="user">
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" id="emailLogin" aria-describedby="emailHelp" placeholder="E-mail">
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" class="form-control" id="passwordLogin" placeholder="Senha">
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <input type="checkbox" class="form-check-input" id="customCheck">
                                    <label class="form-check-label" for="customCheck">Lembrar-me</label>
                                </div>
                                <div>
                                    <a class="link-secondary fst-italic" href="/admin/esqueceu-senha">Recuperar senha</a>
                                 </div>   
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="button" id="btnLogin" class="btn btn-primary btn-user btn-block">
                                    Entrar
                                </button>
                            </div>
                        </form>                                                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="../assets/js/pages/admin/login/index.js" type="module"></script>

</html>