<?php
header('Content-Type: text:html; charset=utf-8');
date_default_timezone_set('Europe/Moscow');
session_start();

if (!isset($_SESSION['session_username']))
{
    header('location:login.php');
}
require ('../development_mode_control.php');



if (isset($_POST['pr_sample_save'])){
    $title = $_POST['title'];
    $text = $_POST['text'];

    $file =$_FILES['image']['tmp_name'];
    $image =addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name =addslashes($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);
    $location = "images/".$_FILES['image']['name'];


    if ($DB->query("INSERT INTO product_sample (id, location, title, text ) VALUES (?,?,?,?)",
        array(null,$location, $title, $text)));
    {
        echo "Succes";
        header('location:product_sample.php');
    }
}
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
        <?php include 'adminmenu.php';?>
    </aside>
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i>Добавить</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">На главную</a></li>
                        <li><i class="fa fa-laptop"></i>Персональный кабинет</li>
                    </ol>
                </div>
            </div>
            <!-- Today status end -->
            <!-- Start insertModal-->
            <div class="row">
                <div class="col-md-12 portlets">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="padd">
                                <div class="form quick-post">
                                    <!-- Edit profile form (not working)-->
                                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                            <!-- Title -->
                                            <div class="form-group">
                                                <label class="control-label col-lg-2" for="title">Фото</label>
                                                <div class="col-lg-10">
                                                    <input type="file" name="image"  class="form-control" id="title">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-2" for="title">Заголовка</label>
                                                <div class="col-lg-10">
                                                    <input type="text" name="title" class="form-control" id="title">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-2" for="editor1" >Описание товара</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" id="editor1"   name="text"></textarea>
                                                </div>
                                            </div>

                                            <!-- Buttons -->
                                            <div class="form-group">
                                                <!-- Buttons -->
                                                <div class="col-lg-offset-2 col-lg-9">
                                                    <button type="submit" name="pr_sample_save" class="btn btn-success">Сохранить</button>
                                                    <a type="reset"  href="product_sample.php" class="btn btn-default btn btn-danger">Назад</a>>
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





