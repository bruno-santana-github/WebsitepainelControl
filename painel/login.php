<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/login.css" rel="stylesheet">
        <title>Página de Login</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="box-login">
        <?php
                if(isset($_POST['acao'])){
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios` WHERE user = ? AND password = ?");
                    $sql->execute(array($user,$password));
                    if($sql->rowCount() == 1) {
                        $info = $sql->fetch();
                        //logamos com sucesso!
                        $_SESSION['login'] = true;
					    $_SESSION['user'] = $user;
					    $_SESSION['password'] = $password;
                       
                        header('Location: '.INCLUDE_PATH_PAINEL);
                        die();
                    }else {
                        //falhou!
                        echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário ou senha incorretos!</div>';
                    }
               
                }
                
            ?>
            <h1>Efetue o Login</h1>
            <form method="post">
                <input type="text" name="user" placeholder="Login.." required>
                <input type="password" name="password" placeholder="Senha...">
                <div class="form-group-login left">
                    <input type="submit" name="acao" value="Logar!">
                </div><!---form-group-login-->
                <div class="form-group-login">
                    <label>Lembra-me</label>
                    <input type="checkbox" name="lambrar">
                </div><!---form-group-login-->
                <div class="form-group-login">
                    <a href="<?php INCLUDE_PATH;?>../index.php">Home</a>
                </div><!---form-group-login-->
            </form>
        </div><!---box-login--->


    </body>
</html>