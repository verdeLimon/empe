/*
 * @param {type} string
 * @param {type} date
 * @returns format datetime like DD-MM-YYYY HH:mm:ss to DD-MM-YYYY:
 *//* global moment */

//function formatDMY(date) {
//    var m = moment(date, 'DD-MM-YYYY HH:mm:ss');
//    return (m.isValid()) ? m.format('DD-MM-YYYY') : '';
//}
/*
 * @param {type} string
 * @param {type} datee
 * @returns For checking if a string is blank, null or undefined I use:
 */
function isBlank(str) {
    return (!str || /^\s*$/.test(str));
}

function datediffnow(datep, dias) {
    var planificado = moment(datep, 'DD-MM-YYYY HH:mm:ss');//planificado
    var vence = planificado.add(dias, 'days');//agregamos # dias
    var hoy = moment();
    return vence.diff(hoy, 'd').toString();
//    console.log(dateB);
//    console.log(dateC);
}
/*
 * @param {type} planificado
 * @param {type} ejecutado
 * @returns {diference of two dates in days}
 * require moment.js
 */
function datediff(datep, datee) {
    var dateB = moment(datep, 'DD-MM-YYYY');
    var dateC = moment(datee, 'DD-MM-YYYY');
    return dateB.diff(dateC, 'days').toString();
}
/*
 * @returns {rendimiento}
 */
function rendimiento(planificado, ejecutado) {
    var r = round2dec((parseInt(ejecutado, 10) * 100) / parseInt(planificado, 10));
    return (isNaN(r) || !isFinite(r)) ? 0 : r.toString();
}
/*
 * @param {number}
 * @param {type}
 * @returns {round a number byt two deicimal cipher}
 */
function round2dec(num) {
    return Math.round(num * 100) / 100;
}//{"id":9,"fechap":"12-04-2015","fechap_e":null,"actividad":3}
$(document).ready(function () {
    $('#midCol').affix({
        offset: {
            top: 230,
            bottom: 100
        }
    });
});