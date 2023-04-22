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
                            <span class="username">Admin</span>
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
					<h3 class="page-header"><i class="fa fa-laptop"></i> Главная</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="../index.php" target="_blank">На главную</a></li>
						<li><i class="fa fa-laptop"></i>Персональный кабинет</li>
					</ol>
				</div>
			</div>
              
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-cloud-download"></i>
						<div class="count">6.674</div>
						<div class="title">Количество товаров</div>
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-shopping-cart"></i>
						<div class="count">7.538</div>
						<div class="title">Продажи</div>
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-thumbs-o-up"></i>
						<div class="count">4.362</div>
						<div class="title">Заказы</div>
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box green-bg">
						<i class="fa fa-cubes"></i>
						<div class="count">1.426</div>
						<div class="title">Склад</div>
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div><!--/.row-->
		

		  
		  <!-- Today status end -->
			
              
				
			<div class="row">
               	
				<div class="col-lg-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-flag-o red"></i><strong>Последние заказы</strong></h2>

						</div>
						<div class="panel-body">
							<table class="table bootstrap-datatable countries">
								<thead>
									<tr>
										<th>№</th>
										<th>Товар</th>
										<th>Количество</th>
                                        <th>Стоимость</th>
                                        <th>Дата и время</th>
										<th>ФИО клиента</th>
										<th>Номер телефона</th>
										<th>Адрес</th>
										<th>Действия</th>
									</tr>
								</thead>   
								<tbody>
									<tr>
										<td>1</td>
										<td>Цемент</td>
										<td>25 т</td>
										<td>1521000 сум</td>
										<td>1521000 сум</td>
										<td>1521000 сум</td>
										<td>1521000 сум</td>
										<td>1521000 сум</td>
										<td></td>

									</tr>
									</tbody>
							</table>
						</div>
	
					</div>	

				</div><!--/col-->

					
				</div><!--/col-->
              <div class="row">

                  <div class="col-lg-12 col-md-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <h2><i class="fa fa-flag-o red"></i><strong>Новые клиенты</strong></h2>

                          </div>
                          <div class="panel-body">
                              <table class="table bootstrap-datatable countries">
                                  <thead>
                                  <tr>
                                      <th>№</th>
                                      <th>ФИО</th>
                                      <th>Номер телефона</th>
                                      <th>Адрес</th>
                                      <th>Дата регистрации</th>
                                      <th>Действия</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td>Цемент</td>
                                      <td>25 т</td>
                                      <td>1521000 сум</td>
                                      <td>1521000 сум</td>


                                  </tr>
                                  </tbody>
                              </table>
                          </div>

                      </div>

                  </div><!--/col-->


              </div><!--/col-->

				
              </div>
        <div class="row">
            <div class="col-md-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Быстрое добавление товара</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">

                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Title</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="title">
                                            </div>
                                          </div>
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Content</label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" id="content"></textarea>
                                            </div>
                                          </div>
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Category</label>
                                            <div class="col-lg-10">
                                                <select class="form-control">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>
                                            </div>
                                          </div>
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Tags</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="tags">
                                            </div>
                                          </div>

                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" class="btn btn-primary">Publish</button>
												<button type="submit" class="btn btn-danger">Save Draft</button>
												<button type="reset" class="btn btn-default">Reset</button>
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
