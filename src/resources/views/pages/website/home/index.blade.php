@php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Barber System - Website</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="assets/css/website.css" rel="stylesheet" />
</head>

<body>

    <div class="container align-self-center mt-3 mb-3">
        <div class="card shadow mb-5">
            <table class="table table-striped mb-0">
                <thead>
                    <td colspan="3">
                        <div class="d-flex justify-content-between">
                            <div class="fw-bold">Agenda</div>
                            <div class="fst-italic">@php echo strftime('%A', strtotime('today')) . ' ' . date('d/m/Y'); @endphp</div>
                        </div>
                    </td>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">08:00</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">08:40</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">09:20</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">10:00</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">10:40</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">11:20</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">12:00</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">12:40</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">13:20</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">16:00</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">16:40</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle" width="20%">
                            <div class="text-center">17:20</div>
                        </td>
                        <td class="align-middle" width="60%">
                            <div class="text-success">Disponível</div>
                        </td>
                        <td class="text-center" width="20%">
                            <button class="btn btn-sm btn-warning">Agendar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <form class="mt-4 mb-4 ms-4 me-4">

                        <div class="form-row mb-3">
                            <div class="form-group col-md-12 mb-3">
                                <label for="data" class="mb-2">Data</label>
                                <input type="date" class="form-control fw-bold bg-light" id="data" required>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="form-group col-md-12 mb-3">
                                <label for="horario" class="mb-2">Horário</label>
                                <select id="horario" class="form-control fw-bold bg-light">
                                    <option selected disabled>Selecione um horário</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="form-group col-md-12">
                                <label for="servico" class="mb-2">Serviço</label>
                                <select id="servico" class="form-control fw-bold bg-light">
                                    <option selected disabled>Selecione um serviço</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="form-group col-md-12">
                                <label for="nome" class="mb-2">Nome</label>
                                <input type="text" class="form-control fw-bold bg-light" id="nome" placeholder="Digite seu nome" required>
                            </div>
                        </div>

                        <div class="form-row mb-3">
                            <div class="form-group col-md-12">
                                <label for="telefone" class="mb-2">Telefone</label>
                                <input type="text" class="form-control fw-bold bg-light" id="telefone" placeholder="Digite seu telefone" required>
                            </div>
                        </div>

                        <div class="form-group d-flex justify-content-end">
                            <button class="btn btn-sm btn-warning" type="submit">Agendar</button>
                        </div>
                </div>
                </form>
            </div>
        </div>

    </div>

    <a class="shadow" href="https://wa.me/5544999096053?text=Me%20ajude!%20O%20Barber%20System%20me%20trouxe%20aqui.%20" id="btnWhatsapp" target="_blank">
        <i class="fa-brands fa-whatsapp" id="iconWhatsapp"></i>
    </a>

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="assets/js/pages/website/script.js"></script>

</body>

</html>