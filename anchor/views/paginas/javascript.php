<script src="<?php echo asset('anchor/views/assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/datatables/js/dataTables.bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
    $(function () {
        $('#paginas').DataTable({
            //"pageLength": 5,
            "dom": '<"wrapper"flipt>',
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
            }
        });
    });
</script>




