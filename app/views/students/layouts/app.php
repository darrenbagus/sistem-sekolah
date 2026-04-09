<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR SISWA</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="min-h-screen flex flex-col bg-gray-100">
    <!-- Header Start -->
   <?php require_once 'app/views/layouts/partials/header.php'; ?>
    <!-- Header end -->


    <main class="container mx-auto grow mt-8 space-y-4 ">
        <?php require_once $content; ?>        
    </main>





    <?php require_once 'app/views/layouts/partials/footer.php'; ?>







</body>
</html>