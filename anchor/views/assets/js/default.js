$(document).ajaxStart(function () {
    $('div.oe-view-manager').block({
        message: '<i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i><span>Procesando...</span>',
//        centerY: 0,
//        css: {top: '2px'}
    });
}).ajaxStop(function () {
    $('div.oe-view-manager').unblock();
});
$(function () {
    /*botstrap tooltip*/
    $('[data-toggle="tooltip"]').tooltip();
    /*jqueryvalidator bootstrap compatible*/
    $.validator.setDefaults({
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

});
/*noty*/
function noty2(text, type) {
    $("div.oe-control-panel").noty({
        text: text,
        type: type,
        layout: 'topCenter',
        theme: 'defaultTheme',
        timeout: 3000,
        modal: true
    });
}