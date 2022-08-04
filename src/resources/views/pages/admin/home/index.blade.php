@extends('components.admin.head')
@section('title', 'Início')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('components.admin.menu')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    @php
                                        session_start();
                                        echo $_SESSION['userName']
                                    @endphp
                                </span>
                                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/entrar">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="mt-1 mb-4 text-center">

                        <h1 class="display-5 mt-3 mb-4" id="titleTable">Tabela de Horários</h1>

                        <form class="row g-3">
                            <div class="col-auto">
                                <input type="date" class="form-control" id="inputDate">
                            </div>
                            <div class="col-auto">
                                <a class="btn btn-primary mb-3" id="filterBtn">Filtrar</a>
                            </div>
                        </form>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('components.admin.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal Delete Schedule-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmar</h5>
                </div>
                <div class="modal-body" id="modalBody">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btnCloseModal" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-danger btnConfirm">Excluir</button>
                </div>
            </div>
        </div>
    </div>

    @include('components.admin.scripts')
</body>

<script src="assets/js/pages/admin/home/index.js" type="module"></script>