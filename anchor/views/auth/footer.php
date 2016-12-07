
<?php if (Auth::user()): ?>
    <footer class="wrap bottom">
        <small><?php echo __('global.powered_by_anchor', VERSION); ?></small>
        <em><?php echo __('global.make_blogging_beautiful'); ?></em>
    </footer>

    <script>
        // Confirm any deletions
        $('.delete').on('click', function () {
            return confirm('<?php echo __('global.confirm_delete'); ?>');
        });
    </script>
<?php endif; ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php echo asset('anchor/views/assets/tinymce/js/tinymce/tinymce.min.js'); ?>"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        language: 'es',
        theme: 'modern',
        relative_urls: true,
        plugins: [
            'moxiemanager advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
        image_advtab: true
    });
    tinymce.init({
        selector: 'textarea',
        language: 'es',
        plugins: 'moxiecut'
    });
</script>
</body>
</html>