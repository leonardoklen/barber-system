import {Enums} from '/assets/js/Enums.js';

export class Services {
    async get(){
        let services = {};
        await $.ajax({
            url : `${Enums.Url}api/services`,
            type : 'get'      
       })
       .done(function(response){
            services = response;
       })
    
       return services;
    }
}