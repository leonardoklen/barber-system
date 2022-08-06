@include('components.admin.head')

<h1 class="text-dark-blue mb-4">Agendamentos</h1>

<form class="row mb-4">
    <div class="col-12 col-sm-6 col-md-3 col-xl-2 mt-2">
        <input type="date" class="form-control" id="inputDate">
    </div>
    <div class="col-12 col-sm-4 col-md-2 col-xl-2 mt-2">
        <button class="btn btn-dark-blue w-100 mb-3" id="btnFilter">Filtrar</button>
    </div>
</form>

<table class="table table-striped border"></table>

<div class="modal" id="modalConfirm" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <i class="bi bi-exclamation-triangle-fill text-warning"></i>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir esse agendamento? Essa ação não poderá ser revertida.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="btnDelete" onclick="window.deleteScheduling()">Excluir</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>                
            </div>
        </div>
    </div>
</div>
</body>

@include('components.admin.footer')

<script src="../assets/js/pages/admin/scheduling/index.js" type="module"></script>