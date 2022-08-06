import { Enums } from '/assets/js/Enums.js';


$(document).ready(function () {
    sessionDestroy();

    $('#btnLogin').on('click', function () {
        login();
    });
});

async function login() {

    let email = $('#emailLogin').val();
    let password = $('#passwordLogin').val();

    loginIsValid(email, password) ? await callAPI(email, password) ? window.location.href = `${Enums.Url}admin/agendamentos` : showAlert('danger', 'Usuário ou senha incorretos!') : showAlert('warning', 'Preencha todos os campos!');

}

function loginIsValid(email, password) {
    return (email === "" || password === "") ? false : true
}

function showAlert(typeAlert, text) {
    if ($('.alert-warning').length == 0) {
        $('h1').after(`<div class='alert alert-${typeAlert} fade show' role='alert'>${text}</div>`);
        setTimeout(function () {
            $(".alert").fadeOut('slow', function () {
                $(this).alert('close');
            });
        }, 2000);
    }
}

async function callAPI(email, password) {
    let authorized;

    await $.ajax({
            url: `${Enums.Url}api/user/login?email=${email}&password=${password}`,
            type: 'get'
        })
        .done(function (response) {
            authorized = response.message;
        })
        .catch(function (jqXHR) {
            authorized = jqXHR.responseJSON.message;
        })

    return authorized;
}

async function sessionDestroy() {
    await $.ajax({
        url: `${Enums.Url}api/user/sessionDestroy`,
        type: 'get'
    })
    .done(function (response) {
    })
    .catch(function (jqXHR) {
    })
}
