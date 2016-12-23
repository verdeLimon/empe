ko.bindingHandlers.treetable = {
    update: function (element, valueAccessor, allBindingsAccessor) {
        var dependency = ko.utils.unwrapObservable(valueAccessor()),
                options = ko.toJS(allBindingsAccessor().treeOptions || {});
        setTimeout(function () {
            $(element).treetable(options, true);
        }, 0);
    }
};

