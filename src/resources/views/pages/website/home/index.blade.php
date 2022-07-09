@include('components.website.head')

<div class="container align-self-center mt-3 mb-3">
    <div class="card shadow mb-5">
        <table class="table table-striped mb-0">
            <thead>
                <td colspan="3">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold">Agenda</div>
                        <div class="fst-italic" id="dataAgenda"></div>
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
                        <button class="btn btn-sm btn-sm btn-warning" onclick="agendar('08:00')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('08:40')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('09:20')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('10:00')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('10:40')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('11:20')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('12:00')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('12:40')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('13:20')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('16:00')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('16:40')">Agendar</button>
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
                        <button class="btn btn-sm btn-warning" onclick="agendar('17:20')">Agendar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@include('components.website.btn-whatsapp')

@include('components.website.footer')

<script src="assets/js/pages/website/home/index.js"></script>