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
                'id_service': schedulingDTO.getIdService(),
                'name': schedulingDTO.getName(),
                'phone': schedulingDTO.getPhone()
            },
        }).fail(function () {
            alert('Erro ao agendar horário.');
        });
    }

    async get(id = null) {
        let schedules = {};
        let url = id ? `${Enums.Url}api/scheduling/${id}` : `${Enums.Url}api/scheduling`;

        await $.ajax({
            url: url,
            type: 'get',
        }).done(function (response) {
            schedules = response;
        });

        return schedules;
    }

    async getPerDate(date) {
        let schedules = {};
        let url =`${Enums.Url}api/scheduling/per-date/${date}`;

        await $.ajax({
            url: url,
            type: 'get',
        }).done(function (response) {
            schedules = response;
        });

        return schedules;
    }

    async delete(id) {
        await $.ajax({
            url: `${Enums.Url}api/scheduling/${id}`,
            type: 'delete',
        }).fail(function () {
            alert('Erro ao excluir agendamento.');
        });
    }
}