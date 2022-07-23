@include('components.website.head')

<div class="container align-self-center mt-3 mb-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <form class="mt-4 mb-4 ms-4 me-4">

                    <div class="form-row mb-3">
                        <div class="form-group col-md-12 mb-3">
                            <label for="dateTime" class="mb-2">Data e Hora</label>
                            <select id="dateTime" class="form-control bg-light" required>
                                <option id="optionDateTimeDefault" disabled hidden>Selecione um horário</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="form-group col-md-12">
                            <label for="service" class="mb-2">Serviço</label>
                            <select id="service" class="form-control bg-light" required>
                                <option selected disabled>Selecione um serviço</option>
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
                        <button class="btn btn-primary" id="btnSchedule" type="button">Agendar</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

@include('components.website.btn-whatsapp')

@include('components.website.footer')

<script src="assets/js/pages/website/schedule/index.js" type="module"></script>