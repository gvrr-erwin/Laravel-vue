<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Vue CRUD Application</title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    </head>
    <body>
        <div id="app">
        </div>
        <script>
           window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </body>
</html>
<?php /**PATH /Users/erwin_1/Desktop/laravelpro/newlaravue/resources/views/welcome.blade.php ENDPATH**/ ?>