

function ViewModel(data) {
    var self = this;
    self.ubicaciones = ko.mapping.fromJS(data);
    self.lugarSeleccionado = ko.observable();
    self.distritoSeleccionado = ko.observable();

    self.lugarSeleccionado.subscribe(function () {
        alert(ko.toJSON(self.lugarSeleccionado().idprovincia));
    });
    self.distritoSeleccionado.subscribe(function () {
        if (!isBlank(self.distritoSeleccionado())) {
            alert(ko.toJSON(self.distritoSeleccionado().idubicacion))
        }
    });
    self.reload = function () {
        $.getJSON(base + "ubicacion", function (data) {
            ko.mapping.fromJS(data, {}, self.ubicaciones);
            //ko.mapping.fromJS(allData, mapping,self.meetings);
        });
    };
}




