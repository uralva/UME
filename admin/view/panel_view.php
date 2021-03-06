<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UMS</title>
  <link href="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/bootstrap-sweetalert/lib/sweet-alert.css'); ?>" rel="stylesheet">
  <link href="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo ($_SESSION['BASE_DIR_FRONTEND']. '/resources/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css'); ?>" rel="stylesheet"> 
  <link href="<?php echo ($_SESSION['BASE_DIR_FRONTEND']. '/assets/css/app.css'); ?>" rel="stylesheet">    
  
  </head>
  <body>
    <header id="header" class="clearfix" data-current-skin="blue">
      <ul class="header-inner">
        <li id="menu-trigger" data-trigger="#sidebar">
          <div class="line-wrap">
          <div class="line top"></div>
          <div class="line center"></div>
          <div class="line bottom"></div>
          </div>
        </li>
        <li class="logo hidden-xs">
          <a href="index.html">UMS</a>
        </li>
        <li class="pull-right">
          <ul class="top-menu">
            <li id="toggle-width">
              <div class="toggle-switch">
                <input id="tw-switch" type="checkbox" hidden="hidden">
                <label for="tw-switch" class="ts-helper"></label>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <section id="main" data-layout="layout-1">
      <aside id="sidebar" class="sidebar c-overflow">
        <div class="profile-menu">
          <a href="">
            <div class="profile-pic">
              <img src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/assets/img/profile-pics/1.jpg'); ?>" alt="">
            </div>
          </a>
        </div>
        <ul class="main-menu">
          <?php 
            foreach(self::$USER_ACCESS[0] as $Department){
              switch($Department){
                case 1:
                  require_once($_SESSION['BASE_DIR_BACKEND'].'/view/include/Administracion/departament.php');
                break;
                
                case 2:
                  require_once($_SESSION['BASE_DIR_BACKEND'].'/view/include/Medicos/departament.php');
                break;

                case 3:
                  require_once($_SESSION['BASE_DIR_BACKEND'].'/view/include/Secretaria/departament.php');
                break;
              }
            } 
          ?>
        </ul>
      </aside>
      <section id="content">
        <div class="container">
            <h1>UMS Dashboard</h1>
        </div>
      </section>
    </section>
    <footer id="footer">
    <p>Copyright &copy; 2016 Tu papa (͡° ͜ʖ ͡°)</p>
    </footer>     
    <div class="page-loader">
      <div class="preloader pls-blue">
        <svg class="pl-circular" viewBox="25 25 50 50">
          <circle class="plc-path" cx="50" cy="50" r="20" />
        </svg>
        <p>Please wait...</p>
      </div>
    </div>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/flot/jquery.flot.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/flot/jquery.flot.resize.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/flot.curvedlines/curvedLines.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/sparklines/jquery.sparkline.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/moment/min/moment.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/fullcalendar/dist/fullcalendar.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/simpleWeather/jquery.simpleWeather.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/Waves/dist/waves.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bootstrap-growl/bootstrap-growl.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/resources/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/assets/js/flot-charts/curved-line-chart.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/assets/js/flot-charts/line-chart.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/assets/js/charts.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/assets/js/functions.js'); ?>"></script>
    <script src="<?php echo ($_SESSION['BASE_DIR_FRONTEND'].'/assets/js/sha.js'); ?>"></script>
  </body>
</html>