@include('components.website.head')

<div class="container align-self-center mt-3">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center mb-3">Agendar um Horário</h3>
            <div class="card shadow">
                <form id="formSchedule" class="mt-4 mb-4 ms-4 me-4">
                    <div class="form-row mb-3">
                        <div class="form-group col-md-12 mb-3">
                            <label for="dateTime" class="mb-2">Data e Hora</label>
                            <select id="dateTime" class="form-control bg-light" required>
                                <option value="" id="optionDateTimeDefault" disabled hidden>Selecione um horário</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="service" class="mb-2">Serviço</label>
                            <select id="service" class="form-control bg-light" required>
                                <option value="" selected disabled>Selecione um serviço</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="name" class="mb-2">Nome</label>
                            <input type="text" class="form-control bg-light" id="name" placeholder="Digite seu nome" required>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="phone" class="mb-2">Telefone</label>
                            <input type="text" class="form-control bg-light" id="phone" placeholder="Digite seu telefone" required>
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-end">
                        <button class="btn btn-dark" id="btnSchedule" type="button">Agendar</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

<div id="modalSuccess" class="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-info-circle"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success mb-0" role="alert">
                    Agendamento realizado com sucesso!
                </div>
            </div>
            <div class="modal-footer">
                <button id="btnOkModal" type="button" class="btn btn-dark" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

@include('components.website.footer')

<script src="assets/js/pages/website/schedule/index.js" type="module"></script>