import {Schedules} from '/assets/js/api/Schedules.js';

const urlParams = new URLSearchParams(window.location.search);
const date = urlParams.get('data') ?? null;
const time = urlParams.get('horario') ?? null;

$(document).ready(function(){
    if(date){
        fillDateTime();
    }
});

async function fillDateTime(){
    let schedules = await new Schedules().get(date);
    let dateTime = document.getElementById('dateTime');
    let optionDateTimeDefault = document.getElementById('optionDateTimeDefault');

    if(!time) {
        optionDateTimeDefault.removeAttribute('hidden');
        optionDateTimeDefault.setAttribute('selected', '');
    }
    
    Object.keys(schedules).forEach((index) => {
        let schedule = schedules[index].schedule;
        let status = schedules[index].status;
        let option = document.createElement('option');
        let contentOption = document.createTextNode(`${date} às ${schedule}`);

        if(!status){
            contentOption = document.createTextNode(`${date} às ${schedule} - Indisponível`); 
            option.setAttribute('disabled', '');       
            
            if(schedule === time) {
                optionDateTimeDefault.removeAttribute('hidden');
                optionDateTimeDefault.setAttribute('selected', '');
            }
        }

        if(status && schedule === time){
            option.setAttribute('selected', '');
        }

        option.appendChild(contentOption);
        dateTime.appendChild(option);
    })
}