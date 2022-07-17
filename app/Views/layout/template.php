<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= $title; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My Css -->
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <script type='text/javascript'>
    </script>
</head>

<body>
    <div id="container">
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png" alt="" height="50px" width="90px" align="right">
            <h3>Sistem Antrian Tiket Kereta</h3>
        </header>
        <?= $this->include('layout/navbar'); ?>
        
        <?= $this->renderSection('content'); ?>
        <center>
        <footer>
            <p>&copy; PT KERETA API (PERSERO) - © Copyright 2022. All Rights Reserved.</p>
        </footer></center>
        
    </div>
</body>

</html>