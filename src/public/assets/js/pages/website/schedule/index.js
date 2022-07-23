import { Services } from '../../../api/Services/ServicesController.js';
import { Schedules } from '../../../api/Schedules/SchedulesController.js';

const urlParams = new URLSearchParams(window.location.search);
const date = urlParams.get('data') ?? null;
const time = urlParams.get('horario') ?? null;

let schedulesApi = new Schedules();
let servicesApi = new Services();

$(document).ready(function () {
    if (date) {
        fillDateTime();
        fillService();
        setMaskPhone();
    }

    document.getElementById('btnSchedule').addEventListener('click', schedule());
});

async function fillDateTime() {
    let schedules = await schedulesApi.get(date);
    let dateTime = document.getElementById('dateTime');
    let optionDateTimeDefault = document.getElementById('optionDateTimeDefault');

    if (!time) {
        optionDateTimeDefault.removeAttribute('hidden');
        optionDateTimeDefault.setAttribute('selected', '');
    }

    Object.keys(schedules).forEach((index) => {
        let schedule = schedules[index].schedule;
        let status = schedules[index].status;

        let option = document.createElement('option');
        let contentOption = document.createTextNode(`${date} às ${schedule} - Disponível`);

        if (!status) {
            contentOption = document.createTextNode(`${date} às ${schedule} - Indisponível`);
            option.setAttribute('disabled', '');

            if (schedule === time) {
                optionDateTimeDefault.removeAttribute('hidden');
                optionDateTimeDefault.setAttribute('selected', '');
            }
        }

        if (status && schedule === time) {
            option.setAttribute('selected', '');
        }

        option.value = `${date} ${schedule}`;

        option.appendChild(contentOption);
        dateTime.appendChild(option);
    })
}

async function fillService() {
    let services = await servicesApi.get();
    let service = document.getElementById('service');

    Object.keys(services).forEach((index) => {
        let id = services[index].id;
        let description = services[index].description;
        let status = services[index].status;

        if (status) {
            let option = document.createElement('option');
            let contentOption = document.createTextNode(description);

            option.value = id;

            option.appendChild(contentOption);
            service.appendChild(option);
        }
    })
}

function setMaskPhone() {
    let maskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    };

    let options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(maskBehavior.apply({}, arguments), options);
        }
    };

    $('#phone').mask(maskBehavior, options);
}

function schedule(){

}