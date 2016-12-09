
<script src="<?php echo asset('anchor/views/assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/jqueryvalidation/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/datatables/js/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/knockoutjs/knockout-3.4.1.debug.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/default.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {

        $('#paginas').DataTable({
            //"pageLength": 5,
            //"dom": '<"pull-left"f><"pull-right"l>tip',
            "ordering": false,
//            responsive: true,
//            "columnDefs": [
//                {"width": "90px", "targets": 0},
//                {"width": "90px", "targets": 4}
//            ],

            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
            }
        });
        function ViewModel() {
            var self = this;
            self.dummy = function () {
                alert("dummy");
            }
        }
        var vm = new ViewModel();
        ko.applyBindings(vm);
    });
</script>




