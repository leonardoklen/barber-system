import {Enums} from '/assets/js/Enums.js';

export class SchedulingController {
    async post(schedulingEntity){
        if(typeof schedulingEntity !== 'SchedulingEntity') {
            throw 'O método "post" espera receber um parâmetro do tipo "SchedulingEntity"';
        }

        let schedules = {};
        await $.ajax({
            url : `${Enums.Url}api/schedule?date=${date}`,
            type : 'get'      
       })
       .done(function(response){
            schedules = response;
       })
    
       return schedules;
    }
}