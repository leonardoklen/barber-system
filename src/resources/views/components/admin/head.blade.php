<!DOCTYPE html>
<html lang="pt-BR">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

</head>

@php
    use App\Http\Controllers\UserController;
    UserController::checkIfSessionExists($_SERVER['REQUEST_URI']);
@endphp