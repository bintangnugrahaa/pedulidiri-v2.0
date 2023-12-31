<?php
	if (!isset($_SESSION)) {
		session_start();	
	}

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: index.php');
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UKK - RPL SMK TI DWIGUNA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <!-- Google fonts - Popppins for copy-->
    <link href="css/font.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.default.c1992928.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.0a822280.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
  </head>
  <body>
    <!--HEADER (BAGIAN ATAS)-->
    <header class="header mb-2">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow ">
        <a class="sidebar-toggler text-gray-500 me-4 me-lg-5 lead">
          <img class="avatar avatar-sm p-7 me-2" src="img/favicon.png" >PEDULI DIRI
        </a>
        <ul class="ms-auto d-flex align-items-center list-unstyled mb-0">
          <li class="nav-item dropdown ms-auto">
            <a class="nav-link pe-0" id="userInfo" href="#" 
             data-bs-toggle="dropdown">
             <img class="avatar p-1" src="img/avatar-6.jpg" alt="Jason Doe">
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated" aria-labelledby="userInfo">
              <div class="dropdown-header text-gray-700">
                <h6 class="text-uppercase font-weight-bold"><?php echo $_SESSION['nama']; ?></h6><small>User</small>
              </div>
              <div class="dropdown-divider"></div><a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>

     <!--MENU BAR-->
     <div id="menubar">
       <div class="d-flex py-9 align-items-stretch">
            <a class="sidebar-link text-muted" href="#home" onclick="tampil_home();">
              <svg class="svg-icon svg-icon-md me-2">
                <use xlink:href="orion-svg-sprite.57a86639.svg#real-estate-1"> </use>
              </svg> 
              <span class="sidebar-link-title">Home</span>             
            </a>
       
            <a class="sidebar-link text-muted" href="#data" onclick="tampil_input_data()">
              <svg class="svg-icon svg-icon-md me-2">
                <use xlink:href="orion-svg-sprite.57a86639.svg#file-storage-1"> </use>
              </svg>
              <span class="sidebar-link-title">Data</span> 
            </a>

            <a class="sidebar-link text-muted" href="#catatan" onclick="tampil_catatan()">
              <svg class="svg-icon svg-icon-md me-2">
                <use xlink:href="orion-svg-sprite.57a86639.svg#paper-stack-1"> </use>
              </svg>         
              <span class="sidebar-link-title">Catatan</span> 
            </a>
        </div>
      </div>
    <!--PAGE BODY-->
    <div class="page-holder bg-gray-100">
      <div class="container-fluid px-lg-4 px-xl-5">

      <!--PAGE HOME--> 
      <!--PAGE LOGIN REGISTER--> 
      <!--PAGE CATATAN PERJALANAN--> 
      <!--PAGE DATA PERJALANAN-->
       <div id="data_tampil">

       </div>
            
    
      </div>

      <!--FOOTER (BAGIAN BAWAH)-->
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-center text-md-start fw-bold">
                <p class="mb-2 mb-md-0 fw-bold">UKK RPL SMK TI DWIGUNA &copy; 2022</p>
              </div>
              <div class="col-md-6 text-center text-md-end text-gray-900">
                <p class="mb-0">Muhammad Bintang Nugraha</p>
              </div>
            </div>
          </div>
        </footer>
    </div>

    <!-- JavaScript files-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <script type="text/javascript">
     
     $(document).ready(function() {
        /*KONDISI SAAT PERTAMA APLIKASI BERJALAN*/
        /* PANGGIL FUNGSI LOGIN REGISTER */
        tampil_home();
        $("#menubar").show();
     });

      /* FUNGSI TAMPILKAN HOME*/
      function tampil_home()
      {
        $.ajax({
          url:"page/home_page.php",
          method:"GET",
          data:{},
          success:function(data)
          {
            /*Tampilkan Data Home berdasarkan nama ID (#) DIV*/
            $("#data_tampil").html(data).refresh;
          }
        });
      }

      /* FUNGSI TAMPILKAN CATATAN PERJALANAN*/
      function tampil_catatan()
      {
        $.ajax({
          url:"page/catatan.php",
          method:"GET",
          data:{},
          success:function(data)
          {
            /*Tampilkan Data Home berdasarkan nama ID (#) DIV*/
            $("#data_tampil").html(data).refresh;
          }
        });
       }

      /* FUNGSI TAMPILKAN INPUT DATA*/
      function tampil_input_data()
      {
        $.ajax({
          url:"page/input_data.php",
          method:"GET",
          data:{},
          success:function(data)
          {
            /*Tampilkan Data Home berdasarkan nama ID (#) DIV*/
            $("#data_tampil").html(data).refresh;
          }
        });
       }

    </script>

    <link rel="stylesheet" href="css/all.css">
  </body>

</html>