<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/stylelogin.css');?>">
</head>
<body>
    <div class="form">
        
           
            <center>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg/2560px-Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg.png" alt="" height="200px" widht="200px" srcset="">
        </center>
                <center><p><h1>LOGIN SISTEM  KAI</h1></p></center>
                <?php if(session()->getFlashdata('flash_msg')):?>
    <div class="alert alert-danger"><?=
         session()->getFlashdata('flash_msg') ?>
         </div>
        <?php endif;?>
   
                <form action="/pages/daftar" method="post" name="login">
                    
                    <center>
                        <input type="text" name="username" placeholder="Username" required />
                    </center>
                    <center><input type="password" name="password" placeholder="Password" required /></center>
                        <input name="submit" type="submit" value="Login" />
                </form>
               

        </div><br><br><br><br><br><br><br>
        <center>
        <footer>
            <p>&copy; Satuan Tugas Penanganan COVID-19 - © Copyright 2021. All Rights Reserved.</p>
        </footer></center>
    </body>
</html>


