<?php
header('Content-Type: text:html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
session_start();

if (!isset($_SESSION['session_username']))
{
    header('location:login.php');
}
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
                        <span class="username"><?php echo $_SESSION['session_id'];?></span>
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
        <?php include 'menu.php';?>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i>Пользователи</h3>
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
                            <h2><i class="fa fa-flag-o red"></i><strong>Все пользователи</strong></h2>

                        </div>
                        <div class="panel-body">
                            <table class="table bootstrap-datatable countries">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>Имя</th>
                                    <th>Логин</th>
                                    <th>Статус</th>
                                    <th><i class="icon_cogs"></i>Действия </th>
                                    <th>
                                        <a class="btn btn-success" data-toggle="modal" href="#insertModal"><i class="icon_plus_alt2 "></i></a>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $result = $DB->query("SELECT * FROM vizitka_usertbl");
                                $i = 0;
                                foreach ($result as $row):
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php echo $row['username'];?></td>
                                        <td><?php echo $row['full_name'];?></td>
                                        <td><?php echo setLevel($row['user_level']);?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>&dbname=vizitka_usertbl&url=user.php&row=id"><i class="icon_close_alt2"></i></a>
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
            <div class="modal fade" id="insertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Добавить</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12 portlets">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="padd">

                                                <div class="form quick-post">
                                                    <!-- Edit profile form (not working)-->
                                                    <form class="form-horizontal" method="post" action="insert_user.php">
                                                        <!-- Title -->
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2" for="title">Имя</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" name="name" class="form-control" id="title">
                                                            </div>
                                                        </div>
                                                        <!-- Cateogry -->
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Логин</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" name="login" class="form-control" id="tags">
                                                            </div>
                                                        </div>
                                                        <!-- Tags -->
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2" for="tags">Пароль</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" name="password" class="form-control" id="tags">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2" for="tags">Роль</label>
                                                            <div class="col-lg-10">
                                                                <select class="form-control " name="user_level">
                                                                    <option value="">- Выбрать роль -</option>
                                                                    <option value="1">Администратор</option>
                                                                    <option value="2">Модератор</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <!-- Buttons -->
                                                        <div class="form-group">
                                                            <!-- Buttons -->
                                                            <div class="col-lg-offset-2 col-lg-9">
                                                                <button type="submit" name="user_save" class="btn btn-success">Сохранить</button>
                                                                <button type="reset"  data-dismiss="modal" class="btn btn-default btn btn-danger">Отменить</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="widget-foot">
                                                <!-- Footer goes here -->
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
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


