
<script src="<?php echo asset('anchor/views/assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/jqueryvalidation/jquery.validate.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/js/jqueryvalidation/localization/messages_es_PE.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('anchor/views/assets/tinymce/js/tinymce/tinymce.min.js'); ?>"></script>
<script src="<?php echo asset('anchor/views/assets/js/default.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {

        tinymce.init({
            selector: 'textarea#field-3',
            language: 'es',
            theme: 'modern',
            relative_urls: true,
            plugins: [
                'moxiemanager advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
        $('#form_nuevo').validate();

    });
</script>