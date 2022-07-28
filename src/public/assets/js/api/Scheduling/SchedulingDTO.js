export class SchedulingDTO {
    dateTime;
    idService;
    name;
    phone;

    constructor(data) {
        this.#populateScheduling(data);
    }

    #populateScheduling(data) {
        this.dateTime = data.dateTime;
        this.idService = data.idService;
        this.name = data.name;
        this.phone = data.phone;
    }

    getDateTime() {
        return this.dateTime;
    }

    getIdService() {
        return this.idService;
    }

    getName() {
        return this.name;
    }

    getPhone() {
        return this.phone;
    }
}