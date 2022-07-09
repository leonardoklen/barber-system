const getUrl = window.location;
const baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

$(document).ready(function(){
    preencherDataAgenda();
});

function preencherDataAgenda(){
    let hoje = new Date(Date.now());
    let data = hoje.toLocaleDateString();

    let diasDaSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
    let dia = diasDaSemana[hoje.getDay()];

    $('#dataAgenda').html(`${dia} ${data}`);
}

function agendar(horario){
    window.location.href = `${baseUrl}agendar`;
}