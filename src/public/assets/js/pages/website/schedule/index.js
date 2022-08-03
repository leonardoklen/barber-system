import {Enums} from '/assets/js/Enums.js';
import { ServicesController } from '../../../api/Services/ServicesController.js';
import { SchedulesController } from '../../../api/Schedules/SchedulesController.js';
import { SchedulingController } from '../../../api/Scheduling/SchedulingController.js';
import { SchedulingDTO } from '../../../api/Scheduling/SchedulingDTO.js';

const urlParams = new URLSearchParams(window.location.search);
const date = urlParams.get('data') ?? null;
const time = urlParams.get('horario') ?? null;

const schedulesApi = new SchedulesController();
const servicesApi = new ServicesController();
const schedulingApi = new SchedulingController();

$(document).ready(function () {
    if (date) {
        fillDateTime();
        fillService();
        setMaskPhone();
    }    

    document.getElementById('btnSchedule').addEventListener('click', toSchedule);   
    document.getElementById('btnOkModal').addEventListener('click', redirectHome); 
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
        },
        clearIfNotMatch: true
    };

    $('#phone').mask(maskBehavior, options);
}

async function toSchedule(){    
    const formSchedule = document.getElementById('formSchedule'); 

    if(!formSchedule.checkValidity()){
        formSchedule.reportValidity();
        return;
    }

    activateLoadingBtnSchedule();

    await schedulingApi.post(
        new SchedulingDTO({
            'dateTime': document.getElementById('dateTime').value,
            'idService': document.getElementById('service').value,
            'name': document.getElementById('name').value,
            'phone': document.getElementById('phone').value
        })
    );
    
    disableLoadingBtnSchedule();

    $('#modalSuccess').modal('show'); 
}

function activateLoadingBtnSchedule(){
    document.getElementById('btnSchedule').innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Carregando...';
}

function disableLoadingBtnSchedule(){
    document.getElementById('btnSchedule').innerHTML = 'Agendar';
}

function redirectHome(){
    window.location.href = Enums.Url
}