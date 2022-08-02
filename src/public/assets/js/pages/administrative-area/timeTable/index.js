import {
    Enums
} from '/assets/js/Enums.js';

$(document).ready(async function () {
    $('#inputDate').val(getDate())

    eventFilterBtn();
    await buildTable(getDate());
    eventBtnDelete();
    eventBtnCloseModal();
    eventBtnConfirm();

});

function getDate() {
    let date = new Date();
    let day = date.getDate().toString();
    let dayFormatted = (day.length == 1) ? '0' + day : day;
    let month = (date.getMonth() + 1).toString();
    let monthFormatted = (month.length == 1) ? '0' + month : month;
    let year = date.getFullYear();

    return `${year}-${monthFormatted}-${dayFormatted}`;
}

async function getFilledSchedules() {
    let result;

    await $.ajax({
            url: `${Enums.Url}api/scheduling/`,
            type: 'get'
        })
        .done(function (response) {
            result = response;
        })

    return result;
}

async function filterData(date) {
    let data = await getFilledSchedules();

    let filter = await data.filter(object => {
        return object.date_time.substring(0, 10) == date;
    })

    return filter;
}

async function buildTable(date) {
    let data = await filterData(date);

    $('form').after('<table class="table table-hover table-sm"></table>');
    $('table').append('<thead></thead>');
    $('thead').append('<tr></tr>');
    $('tr').append('<th scope="col"><small>Horário</small></th>');
    $('tr').append('<th scope="col"><small>Nome</small></th>');
    $('tr').append('<th scope="col"><small>Serviço</small></th>');
    $('tr').append('<th scope="col"><small>Telefone</small></th>');
    $('tr').append('<th scope="col"><small>Ação</small></th>');
    $('thead').after('<tbody></tbody>');
    await data.forEach(function (element, index) {
        $('tbody').append(`<tr id="lineBody${index}"></tr>`);
        $(`#lineBody${index}`).append(`<td><small>${element['date_time'].substring(11, 16)}</small></td>`);
        $(`#lineBody${index}`).append(`<td><small>${element['name']}</small></td>`);
        $(`#lineBody${index}`).append(`<td><small>${element['service']}</small></td>`);
        $(`#lineBody${index}`).append(`<td><small>${element['phone']}</small></td>`);
        $(`#lineBody${index}`).append(`<td><button value="${element['id']}" class="btn btn-sm btn-danger btnDelete" data-bs-toggle="modal" data-bs-target="#exampleModal" data-name="${element['name']}">Excluir</td>`);
    })
}

function insertIDModal(id, name) {
    $('#modalBody').append(`<p class="pModal"> Deseja realmente excluir o agendamento de <strong>${name}</strong>?</p>`);
    // $('#modalBody').append(`<input type="text" value="${id}" id="inputID" hidden>`);
    $('.btnConfirm').val(id);
}

function removeIDModal() {
    $('.pModal').remove();
    $('#inputID').remove();
}

function eventBtnDelete() {
    $('.btnDelete').on('click', function (element) {
        insertIDModal(element.target.value, element.target.dataset.name);
    });
}

function eventFilterBtn() {
    $('#filterBtn').on('click', async function () {
        $('table').remove();
        await buildTable($('#inputDate').val());
        eventBtnDelete();
    });

}

function eventBtnCloseModal() {
    $('.btnCloseModal').on('click', function () {
        removeIDModal();
    })
}

async function deleteScheduling(id) {
    let result;

    await $.ajax({
            url: `${Enums.Url}api/scheduling/${id}`,
            type: 'delete'
        })
        .done(function (response) {
            result = response;
        })

    return result;
}

function eventBtnConfirm() {
    $('.btnConfirm').on('click', async function (element) {
        await deleteScheduling(element.target.value);
       document.location.reload();
    });

}