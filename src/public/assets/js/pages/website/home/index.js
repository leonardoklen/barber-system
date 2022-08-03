import { Enums } from '/assets/js/Enums.js';
import { SchedulesController } from '../../../api/Schedules/SchedulesController.js';

$(document).ready(function () {
    window.redirectSchedule = redirectSchedule;

    fillDateSchedule();
    fillSchedules();

    document.getElementById('btnNextDate').addEventListener('click', setNextDate);
    document.getElementById('btnPreviousDate').addEventListener('click', setPreviousDate);
});

function fillDateSchedule(date = null) {
    let fullDate = date ? date : new Date(Date.now());

    let daysOfTheWeek = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
    let day = daysOfTheWeek[fullDate.getDay()];

    document.getElementById('dateSchedule').innerHTML = `${day} ${fullDate.toLocaleDateString()}`;
}

async function fillSchedules() {
    showSpinner();

    monitorButtonPreviousDate();

    let date = document.getElementById('dateSchedule').innerHTML.split(" ")[1];
    let schedules = await new SchedulesController().get(date);

    let schedulesIsEmpty = Object.keys(schedules).length === 0;
    if(schedulesIsEmpty){
        let tr = document.createElement('tr');
        let td = document.createElement('td');
        let icon = document.createElement('icon');

        let content = document.createTextNode(' Não há horários disponíveis para esse dia.')

        td.setAttribute('colspan', 3);
        td.setAttribute('class', 'text-center');
        icon.setAttribute('class', 'bi bi-info-circle');

        td.appendChild(icon);
        td.appendChild(content);
        tr.appendChild(td);
        
        document.getElementById('tbodySchedule').appendChild(tr);

        hideSpinner();

        return;
    }

    Object.keys(schedules).forEach((index) => {
        let schedule = schedules[index].schedule;
        let status = schedules[index].status ? 'Disponível' : 'Indisponível';
        let colorTextStatus = schedules[index].status ? 'text-success' : 'text-danger';

        let tr = document.createElement('tr');
        let tdSchedule = document.createElement('td');
        let tdStatus = document.createElement('td');
        let tdAction = document.createElement('td');
        let divSchedule = document.createElement('div');
        let divStatus = document.createElement('div');
        let buttonAction = document.createElement('button');

        let contentSchedule = document.createTextNode(schedule);
        let contentStatus = document.createTextNode(status);
        let contentAction = document.createTextNode('Agendar');

        tdSchedule.setAttribute('class', 'align-middle');
        tdSchedule.setAttribute('width', '20%');
        tdStatus.setAttribute('class', 'align-middle');
        tdStatus.setAttribute('width', '60%');
        tdAction.setAttribute('class', 'text-center');
        tdAction.setAttribute('width', '20%');
        divSchedule.setAttribute('class', 'text-center');
        divStatus.setAttribute('class', colorTextStatus);
        buttonAction.setAttribute('class', 'btn btn-sm btn-sm btn-dark');
        buttonAction.setAttribute('onclick', `window.redirectSchedule("${schedule}")`);

        divSchedule.appendChild(contentSchedule);
        divStatus.appendChild(contentStatus);
        buttonAction.appendChild(contentAction);

        tdSchedule.appendChild(divSchedule);
        tdStatus.appendChild(divStatus);
        if (schedules[index].status) tdAction.appendChild(buttonAction);

        tr.appendChild(tdSchedule);
        tr.appendChild(tdStatus);
        tr.appendChild(tdAction);

        document.getElementById('tbodySchedule').appendChild(tr);
    })

    hideSpinner();
}

export function redirectSchedule(time) {
    let date = document.getElementById('dateSchedule').innerHTML.split(" ")[1];
    window.location.href = `${Enums.Url}agendar?data=${date}&horario=${time}`;
}

async function setNextDate() {
    disableButtons();

    await fillDateSchedule(getNextDate());

    document.getElementById('tbodySchedule').innerHTML = '';

    await fillSchedules();

    activateButtons();
}

function getNextDate() {
    let dateSchedule = document.getElementById('dateSchedule').innerHTML.split(" ")[1];
    let dateScheduleFormated = dateSchedule.split('/').reverse().join('-');

    let date = new Date(dateScheduleFormated);
    date.setDate(date.getDate() + 2);

    return date;
}

async function setPreviousDate() {
    disableButtons();

    await fillDateSchedule(getPreviousDate());

    document.getElementById('tbodySchedule').innerHTML = '';

    await fillSchedules();

    activateButtons();
}

function getPreviousDate() {
    let dateSchedule = document.getElementById('dateSchedule').innerHTML.split(" ")[1];
    let dateScheduleFormated = dateSchedule.split('/').reverse().join('-');

    let date = new Date(dateScheduleFormated);
    date.setDate(date.getDate());

    return date;
}

function activateButtons() {
    document.getElementById('btnNextDate').removeAttribute('disabled');
    document.getElementById('btnPreviousDate').removeAttribute('disabled');
}

function disableButtons(id) {
    document.getElementById('btnNextDate').setAttribute('disabled', true);
    document.getElementById('btnPreviousDate').setAttribute('disabled', true);
}

function showSpinner() {
    document.getElementById('spinner').classList.remove("d-none");
    document.getElementById('spinner').classList.add("d-block");
}

function hideSpinner() {
    document.getElementById('spinner').classList.remove("d-block");
    document.getElementById('spinner').classList.add("d-none");
}

function monitorButtonPreviousDate() {
    let btnPreviousDate = document.getElementById('btnPreviousDate');

    let dateSchedule = document.getElementById('dateSchedule').innerHTML.split(" ")[1];
    let dateScheduleFormated = dateSchedule.split('/').reverse().join('-');

    dateSchedule = new Date(dateScheduleFormated);
    dateSchedule.setDate(dateSchedule.getDate() + 1);

    let today = new Date(Date.now());

    if (dateSchedule.getDate() <= today.getDate() && dateSchedule.getMonth() <= today.getMonth() && dateSchedule.getYear() <= today.getYear()) {
        btnPreviousDate.classList.add("d-none");
        btnPreviousDate.classList.remove("d-block");
    } else {
        btnPreviousDate.classList.add("d-block");
        btnPreviousDate.classList.remove("d-none");
    }
}
