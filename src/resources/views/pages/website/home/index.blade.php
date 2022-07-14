@include('components.website.head')

<div class="container align-self-center mt-3 mb-3">
    <div class="card shadow mb-5">
        <table class="table table-striped mb-0">
            <thead>
                <td colspan="3">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold">Agenda</div>
                        <div class="fst-italic" id="dateSchedule"></div>
                    </div>
                </td>
            </thead>
            <tbody id="tbodySchedule">
            </tbody>
        </table>
    </div>
</div>

@include('components.website.btn-whatsapp')

@include('components.website.footer')

<script src="assets/js/pages/website/home/index.js"></script>