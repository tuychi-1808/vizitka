<?php
session_start();
header("Content-Type: text/html; charset-=utf-8");
require('../cndata/cnct.php');
require ('../main_classes.php');
error_reporting(E_ALL);
ini_set('display_errors',1);

if (isset($_POST['save'])){
    if (empty($_POST['username']) || empty($_POST['password']))
    {
        $message = "<label>Запольните все поля!!!</label>";
    }
    else{
        $query ="SELECT * FROM vizitka_usertbl WHERE username = :username AND password = :password";
        $stmt = $conn->prepare($query);
        $stmt->execute(
            array(
                'username' =>clean($_POST['username']),
                'password'=>sha1($_POST['password'])
            )
        );
        $count = $stmt->rowCount();
        if ($count > 0)
        {
            $_SESSION['session_username'] = $_POST['username'];
            $username = $_POST['username'];
            $sessionIdQuery = $conn->prepare("SELECT full_name FROM vizitka_usertbl WHERE username = :username");
            $sessionIdQuery->execute(array('username'=>$username));
            foreach ($sessionIdQuery as $row):
                $clientId = $row['full_name'];
            endforeach;
            $_SESSION['session_id'] = $clientId;
            header( "location:index.php");
        }else{
            $message = "<label>Неправильный парол или логин!!!</label>";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title><?php echo showTitle() ; ?></title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img-body">

    <div class="container">

      <form class="login-form" action="" method="post">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <?php
            if (isset($message))
            {
                echo '<label class="text-danger">' . $message . '</label>';
            }
            ?>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" name="username" placeholder="Логин" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Пароль">
            </div>
            <button class="btn btn-primary btn-lg btn-block" name="save" type="submit">Войти</button>
            <a href="sign_up.php" class="btn btn-default btn-lg btn-block">Зарегистрероваться</a>
        </div>
      </form>

    </div>


  </body>
</html>
