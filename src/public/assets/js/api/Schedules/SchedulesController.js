import {Enums} from '/assets/js/Enums.js';

export class SchedulesController {
    async get(date){
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