<?php
header('Content-Type: text:html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
/*if (!isset($_SESSION['session_username']))
{
    header('location:login.php');
}*/
require ('../development_mode_control.php');
?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once 'headscripts.php' ; ?>
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.php" class="logo">Панель <span class="lite">Управления</span></a>
        <!--logo end-->



        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                        <span class="username"><!--$_SESSION['session_id']-->></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li class="eborder-top">
                            <a href="#"><i class="icon_profile"></i> Изменить пароль</a>
                        </li>

                        <li>
                            <a href="logout.php"><i class="icon_key_alt"></i> Выйти</a>
                        </li>

                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <?php include 'adminmenu.php';?>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i>Все данные по второй зоголовки</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">На главную</a></li>
                        <li><i class="fa fa-laptop"></i>Персональный кабинет</li>
                    </ol>
                </div>
            </div>

            <!-- Today status end -->
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-flag-o red"></i><strong>Все данные</strong></h2>

                        </div>
                        <div class="panel-body">
                            <table class="table bootstrap-datatable countries">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Фото</th>
                                    <th>Заголовка</th>
                                    <th>Описание</th>
                                    <th><i class="icon_cogs"></i>Действия </th>
                                    <th>
                                        <a class="btn btn-success" href="insert_product_sample.php">Добавить</i></a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $result = $DB->query("SELECT * FROM product_sample");
                                $i=0 ;
                                foreach ($result as $row):
                                    $i++ ;
                                    ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td>
                                            <img src=" <?php echo $row['location'];?>" width="50" height="50" alt="">
                                        </td>
                                        <td><?php echo $row['title'];?></td>
                                        <td><?php echo $row['text'];?></td>
                                        <td> <div class="btn-group">
                                                <a class="btn btn-primary" href="edit_product_sample.php?image=<?php echo $row['location'];?>&id=<?php echo $row['id'];?>">Изменить</i></a>
                                                <a class="btn btn-danger" style="margin-top: 5px;" href="delete.php?id=<?php echo $row['id'];?>&dbname=product_sample&url=product_sample.php&row=id">Удалить</i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div><!--/col-->


            </div><!--/col-->
            <!-- Start insertModal-->

            <!-- End insertModal-->
            </div>

            <!-- project team & activity end -->

        </section>
    </section>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<?php include_once 'scripts.php' ; ?>

</body>
</html>


