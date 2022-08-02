@include('components.website.head')

<div class="container align-self-center mb-3 bg-light">
    <div class="text-center">
        <img class="w-50 h-50 mt-3 mb-3" src="assets/img/logo.jfif" alt="">
    </div>
    <div class="card shadow mb-3">
        <table class="table table-striped mb-0">
            <thead>
                <td colspan="3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <button type="button" class="btn btn-sm btn-dark d-none" id="btnPreviousDate"><</button>
                        </div>
                        <div class="fst-italic fw-bold" id="dateSchedule"></div>
                        <div>
                            <button type="button" class="btn btn-sm btn-dark" id="btnNextDate">></button>
                        </div>
                    </div>
                </td>
            </thead>
            <tbody id="tbodySchedule">
            </tbody>
        </table>
    </div>
</div>

<div class="text-center d-none" id="spinner">
    <div class="spinner-border text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

@include('components.website.footer')

<script src="assets/js/pages/website/home/index.js" type="module"></script>