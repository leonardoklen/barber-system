import {Enums} from '/assets/js/api/Enums.js';

export class Schedules {
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