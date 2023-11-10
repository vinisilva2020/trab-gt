

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>
</head>
<body>
<section class="body">
    <div class="container">
        <div class="login-box">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <span class="logo-font">Controle </span>de Vendas
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h2 class="header-title">Login</h2>
                    <form method= "POST" action = "model/login.php"  class="login-form">
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="text" name="email" class="form-control" placeholder="Digite seu email">
                        </div>
                        <div class="form-group">
                            <label for="">Senha:</label>
                            <input type="Password" name="senha" class="form-control" placeholder="Digite sua senha">
                        </div>
                        <div>
                            <button type="submit" name="login" class="btn btn-primary">Enviar</button>
                        </div>
<?php
session_start();
if (isset($_SESSION['alert']) AND $_SESSION['alert'] != "" && isset($_SESSION['msg']) AND $_SESSION['msg'] != "") {
    ?>
<div class="alert <?php echo $_SESSION['alert']; ?> alert-dismissible fade show" role="alert">
<strong>Ola usuário!</strong><?php echo $_SESSION['msg'] ?>.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php }
unset($_SESSION['alert']);
unset($_SESSION['msg']);
?>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>