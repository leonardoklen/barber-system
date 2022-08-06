import { SchedulingController } from '../../../api/Scheduling/SchedulingController.js';

const schedulingApi = new SchedulingController();

$(document).ready(async function () {
    window.openModalDeleteScheduling = openModalDeleteScheduling;
    window.deleteScheduling = deleteScheduling;

    activateLoadingBtnFilter();

    let today = getToday();

    document.getElementById('inputDate').value = today;

    let schedulings = await schedulingApi.getPerDate(today);

    let columns = getObjectColumns();
    let rows = createObjectRows(schedulings);    

    createFooTable(columns, rows);

    disableLoadingBtnFilter();

    document.getElementById('btnFilter').addEventListener('click', updateTable);   
});

function createObjectRows(schedulings){    
    let rows = [];

    Object.keys(schedulings).forEach((index) => {
        let id = schedulings[index].id;
        let schedule = schedulings[index].date_time.split(" ")[1];
        schedule = schedule.substring(0, schedule.length - 3)
        let name = schedulings[index].name;
        let service = schedulings[index].service;
        let phone = schedulings[index].phone;

        rows.push({
            "options": {
                "classes": "align-middle"
            },
            "value": {           
                "schedule": schedule, 
                "name": name, 
                "service": service, 
                "phone": phone, 
                "action": `<button class="btn btn-sm btn-danger" onclick=window.openModalDeleteScheduling(${id})>Excluir</button>`
            }
        }); 
    })

    return rows;
}

function getToday(){
    let today = new Date();
    let d = String(today.getDate()).padStart(2, '0');
    let m = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    let Y = today.getFullYear();

    return `${Y}-${m}-${d}`;
}

function getObjectColumns(){
    return [     
        {
            "classes": "text-center", 
            "name": "schedule", 
            "title": "Horário"
        },
        {
            "name": "name", 
            "title": "Nome" 
        },
        { 
            "name": "service", 
            "title": "Serviço", 
            "breakpoints": "xs" 
        },
        { 
            "name": "phone", 
            "title": "Telefone", 
            "breakpoints": "xs" 
        },
        { 
            "classes": "text-center", 
            "name": "action", 
            "title": "Ação" 
        },
    ];
}

async function updateTable(){
    activateLoadingBtnFilter();

    let date = document.getElementById('inputDate').value;

    if(!date){
        alert('Digite uma data.')
    }

    let schedulings = await schedulingApi.getPerDate(date);

    let columns = getObjectColumns();
    let rows = createObjectRows(schedulings); 

    createFooTable(columns, rows);

    disableLoadingBtnFilter();
}

function createFooTable(columns, rows){
    $('.table').html('');
    $('.table').footable(
        {
            "columns": columns,
            "rows": rows,
            "empty": "Nenhum agendamento encontrado."
        }
    );
}

function openModalDeleteScheduling(id){
    document.getElementById('btnDelete').setAttribute('data-id-scheduling', id);

    $('#modalConfirm').modal('show');
}

async function deleteScheduling(){
    let id = document.getElementById('btnDelete').getAttribute('data-id-scheduling');

    if(!id){
        $('#modalConfirm').modal('toggle'); 
        return;
    }

    await schedulingApi.delete(id);

    updateTable();

    $('#modalConfirm').modal('toggle'); 
}

function activateLoadingBtnFilter(){
    let btnFilter = document.getElementById('btnFilter');

    btnFilter.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...';
    btnFilter.setAttribute('disabled', true);
}

function disableLoadingBtnFilter(){
    let btnFilter = document.getElementById('btnFilter');
    
    btnFilter.innerHTML = 'Filtrar';
    btnFilter.removeAttribute('disabled');
}