const getUrl = window.location;
const baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

$(document).ready(function(){
    preencherDataAgenda();
    fillSchedules();
    
});

function preencherDataAgenda(){
    let hoje = new Date(Date.now());
    let data = hoje.toLocaleDateString();

    let diasDaSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
    let dia = diasDaSemana[hoje.getDay()];

    document.getElementById('dateSchedule').innerHTML = `${dia} ${data}`;
}

function agendar(horario){
    window.location.href = `${baseUrl}agendar`;
}

async function fillSchedules(){
    let date = document.getElementById('dateSchedule').innerHTML.split(" ")[1];
    let schedules = await getSchedules(date);

    Object.keys(schedules).forEach((index) => {
        let schedule = schedules[index].schedule;
        let status = schedules[index].status ? 'Disponível' : 'Ocupado';
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
        buttonAction.setAttribute('class', 'btn btn-sm btn-sm btn-warning');
        buttonAction.setAttribute('onclick', `agendar(${schedule})`);

        divSchedule.appendChild(contentSchedule);
        divStatus.appendChild(contentStatus);
        buttonAction.appendChild(contentAction);

        tdSchedule.appendChild(divSchedule);
        tdStatus.appendChild(divStatus);
        tdAction.appendChild(buttonAction);
        
        tr.appendChild(tdSchedule);
        tr.appendChild(tdStatus);
        tr.appendChild(tdAction);

        document.getElementById('tbodySchedule').appendChild(tr);
    })
    
}

async function getSchedules(date){
    let schedules = {};
    await $.ajax({
        url : `${baseUrl}api/schedule?date=${date}`,
        type : 'get'      
   })
   .done(function(response){
        schedules = response;
   })

   return schedules;
}