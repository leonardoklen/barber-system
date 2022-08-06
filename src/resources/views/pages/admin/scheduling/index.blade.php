@include('components.admin.head')

<h1 class="display-5 mt-3 mb-4" id="titleTable">Tabela de Horários</h1>

<form id="formHorarios" class="row g-3">
    <div class="col-auto">
        <input type="date" class="form-control" id="inputDate">
    </div>
    <div class="col-auto">
        <a class="btn btn-primary mb-3" id="filterBtn">Filtrar</a>
    </div>
</form>

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
</body>

@include('components.admin.footer')

<script src="../assets/js/pages/admin/scheduling/index.js" type="module"></script>