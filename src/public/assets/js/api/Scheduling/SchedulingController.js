import { SchedulingDTO } from './SchedulingDTO.js';
import { Enums } from '/assets/js/Enums.js';

export class SchedulingController {

    /**
     * 
     * @param {SchedulingDTO} schedulingDTO 
     * @returns 
     */
    async post(schedulingDTO) {
        await $.ajax({
            url: `${Enums.Url}api/scheduling`,
            type: 'post',
            data: {
                'date_time': schedulingDTO.getDateTime(),
                'service': schedulingDTO.getIdService(),
                'name': schedulingDTO.getName(),
                'phone': schedulingDTO.getPhone()
            },
        }).fail(function () {
            alert('Erro ao agendar horário.');
        });
    }
}