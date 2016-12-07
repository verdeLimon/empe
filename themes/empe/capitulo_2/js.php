<script>var base = '<?php echo base_url(); ?>';</script>
<script src="<?php echo theme_url('/assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo asset_url('/js/knockoutjs/knockout-3.4.1.debug.js'); ?>"></script>
<script src="<?php echo asset_url('/js/knockoutjs/knockout.mapping-latest.debug.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/js/models/model.js'); ?>"></script>

<!-- jqxwidget chart -->
<script src="<?php echo theme_url('/assets/jqwidgets/jqxcore.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/jqwidgets/jqxdraw.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/jqwidgets/jqxchart.core.js'); ?>"></script>
<script src="<?php echo theme_url('/assets/jqwidgets/jqxdata.js'); ?>"></script>
<!-- /jqxwidget chart -->
<script src="<?php echo theme_url('/assets/js/scripts.js'); ?>"></script>

<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function () {
        $.getJSON(base + "ubicacion", function (data) {
            var viewModel = new ViewModel(data);
            //ko.applyBindings( viewModel2);
            ko.applyBindings(viewModel);
        });
        var source =
                {
                    datatype: "json",
                    datafields: [
                        {name: 'formalizacion'},
                        {name: 'total'}
                    ],
                    url: base + 'jsong'
                };
        var dataAdapter = new $.jqx.dataAdapter(source, {
            async: false,
            autoBind: true,
            loadError: function (xhr, status, error) {
                alert('Error cargando "' + source.url + '" : ' + error);
            }
        });
        // prepare jqxChart settings
        var settings = {
            title: "abc",
            description: "(wikipedia.org)",
            enableAnimations: true,
            showLegend: true,
            showBorderLine: true,
//            legendLayout: {left: 700, top: 160, width: 300, height: 200, flow: 'vertical'},
//            padding: {left: 5, top: 5, right: 5, bottom: 5},
//            titlePadding: {left: 0, top: 0, right: 0, bottom: 10},
            source: dataAdapter,
            colorScheme: 'scheme03',
            seriesGroups: [{
                    type: 'pie',
                    showLabels: true,
                    series: [{
                            dataField: 'total',
                            displayText: 'formalizacion',
                            labelRadius: 170,
                            initialAngle: 15,
                            radius: 145,
                            centerOffset: 0,
                            formatFunction: function (value) {
                                if (isNaN(value))
                                    return value;
                                return parseFloat(value) + '%';
                            }, colorFunction: function (value, itemIndex, serie, group) {
                                switch (itemIndex) {
                                    case 0:
                                        return '#FF0000';
                                        break;
                                    case 1:
                                        return '#008000';
                                        break;
                                    case 2:
                                        return '#008000';
                                        break;
                                }
                                //return (value < 40) ? '#CC1133' : '#55CC55';
                            }
                        }]
                }]
        };
        // setup the chart
        $('#chartContainer').jqxChart(settings);
    });
    //]]>
</script>