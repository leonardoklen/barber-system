@include('components.website.head')

<link href="assets/css/pages/website/home/index.css" rel="stylesheet" type="text/css"/>

<div class="container align-self-center mt-3">
    <div class="text-center mb-3">
        <img class="img-fluid img-width" src="assets/img/logo.jfif" alt="">
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