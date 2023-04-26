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



    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="units.php">
                        <i class="icon_house_alt"></i>
                        <span>Вернуться</span>
                    </a>
                </li>
            </ul>
            <!--sidebar end-->
        </div>
    </aside>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i>Изменить</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">На главную</a></li>
                        <li><i class="fa fa-laptop"></i>Персональный кабинет</li>
                    </ol>
                </div>
            </div>
            <?php

            $id = $_GET['id'];
            $image_nav = $_GET['image'];


            if (isset($_POST['navsled_edit']))
            {
                $title = $_POST['title'];
                $text = $_POST['text'];

                if (!empty($_FILES['image']['tmp_name'])) {
                    $file = $_FILES['image']['tmp_name'];
                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $uniquenumber = rand(1111, 9999);
                    $uniquestring = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
                    $somestring = uniqid();
                    $image_namefinal = md5($somestring . $uniquestring . $uniquenumber);
                    $image_name = $image_namefinal . ($_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image_name);
                    $location = "images/" . $image_name;
                }
                else
                {
                    $location = '';
                }

                $navsled_row = $_POST['navsled_row'];

                unlink($image_nav);
                $DB->query("UPDATE nav_slider SET location = ?, title = ?, text = ? WHERE id = ?",
                    array("$location", "$title", "$text", "$navsled_row"));
                echo "Succes edit";
                header('location:nav_slider.php');
            }

            ?>
            <!-- Today status end -->
            <!-- Start insertModal-->
            <div class="row">
                <div class="col-md-12 portlets">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="padd">

                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                    <?php $result = $DB->query("SELECT * FROM nav_slider WHERE id=?",array("$id"));
                                    foreach ($result as $row):
                                        ?>
                                        <form class="form-horizontal" method="post" enctype="multipart/form-data">

                                            <!-- Title -->
                                            <div class="form-group">
                                                <label class="control-label col-lg-2" for="title">Фото</label>
                                                <div class="col-lg-10">
                                                    <input type="file" name="image" accept="image/*"  class="form-control" id="title">
                                                    <img style="margin-top: 10px" src="<?php echo $row['location']?>" height="50" width="50"  alt="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-2" for="title">Заголовка</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="title" value="<?php echo $row['title']?>" class="form-control" id="title">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-2" for="title">Текст</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="text" value="<?php echo $row['text']?>"  class="form-control" id="title">
                                                </div>
                                            </div>
                                            <input type="hidden" name="navsled_row" value="<?php echo $row['id']?>">
                                            <!-- Buttons -->
                                            <div class="form-group">
                                                <!-- Buttons -->
                                                <div class="col-lg-offset-2 col-lg-9">
                                                    <button type="submit" name="navsled_edit" class="btn btn-success">Сохранить</button>
                                                    <a type="reset"  href="nav_slider.php" class="btn btn-default btn btn-danger">Назад</a>>
                                                </div>
                                            </div>
                                        </form>
                                    <?php endforeach;?>
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


