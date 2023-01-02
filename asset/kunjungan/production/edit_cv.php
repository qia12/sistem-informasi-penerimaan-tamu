<?php
$hostname="localhost";
$db="db_visitor";
$Username="root";
$Password="";

$conn = new PDO("mysql:host=$hostname;dbname=$db",$Username,$Password);

$NoKonfirmasi = $_GET['id'];
// construct the delete statement
$sql = 'SELECT * FROM confirm_visit
        WHERE NoKonfirmasi =  "'.$NoKonfirmasi.'"';

// prepare the statement for execution
$result = $conn->prepare($sql);
// $result->bindParam(':NoKonfirmasi', $NoKonfirmasi, PDO::PARAM_INT);

//var_dump($result);

// execute the statement
$result->execute();
$row=$result->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta http-equiv="refresh" content="10"-->

    <title>Kunjungan </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0; padding-left:5px;">
                        <a href="" class="site_title"> <img src="../asset/images/logo2jadi.png">
                            <span> HRIS V.2.0. </span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="../asset/images/profil.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Administrator</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index.html">Dashboard</a></li>
                                        <li><a href="index2.html">Dashboard2</a></li>
                                        <li><a href="index3.html">Dashboard3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a style="width:100%" data-toggle="tooltip" data-placement="top" title="Logout"
                            href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <style type="text/css">
                .icon {
                    padding: 10px;
                }

                .nav_menu {
                    background-color: #dd4a39 !important;
                }

                .nav_title {
                    background-color: #dd4a39 !important;
                }

                .left_col {
                    background-color: #1E282C !important;
                }

                .sidebar-footer a {
                    background-color: #1E282C !important;

                }

                td {
                    padding: 10px !important;
                }

                .site_title {
                    color: #ffffff;
                    font-weight: bold;
                }

                .btn {
                    margin: 2px !important;
                }
            </style>
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars" style="color:#fff"></i></a><a
                            style="color: #82ccdd;font-size: 13px;font-weight: bolder;"></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="../asset/images/profil.png" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right">
                                    <a class="dropdown-item" href="javascript:;" href="login.html">
                                        <i class="fa fa-sign-out pull-right"></i> Log Out</a></a>
                                </div>
                            </li>
                            <li class="">
                                <a href="" class="fa fa-search fa-2x"></a>
                            </li>

                        </ul>
                        </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row  top_tiles">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="x_title">
                                    <h2 style="font-size: 20px"><i class="fa fa-check-circle"></i> Edit Data Konfirmasi</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <!-- Content Wrapper. Contains page content -->
                                    <style type="text/css">
                                        #konfirmasi {
                                            font-family: Arial, Helvetica, sans-serif;
                                            border-collapse: collapse;
                                            width: 100%;
                                        }

                                        #konfirmasi th {
                                            padding-top: 12px;
                                            padding-bottom: 12px;
                                            text-align: left;
                                            background-color: #dd4a39;
                                            color: white;
                                        }
                                    </style>
                                    <div class="content-wrapper">
                                        <section class="content">
                                            <div class="x_content">
                                                <br />
                                                <form method="post" action="save_cv.php" id="demo-form2" data-parsley-validate
                                                    class="form-horizontal form-label-left">

                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                            for="NoKonfirmasi" >No Konfirmasi
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 ">
                                                            <input type="hidden" name="NoKonfirmasi" value="<?= $row->NoKonfirmasi; ?>"
                                                            class="form-control">

                                                            <input type="text" name="NoKonfirmasi" required value="<?= $row->NoKonfirmasi; ?>" readonly
                                                                class="form-control ">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label
                                                            class="col-form-label col-md-3 col-sm-3 label-align">Persetujuan</label>
                                                        <div class="col-md-6 col-sm-6 ">
                                                            <div id="Persetujuan" class="btn-group" data-toggle="buttons">
                                                                <label class="btn btn-primary"
                                                                    data-toggle-class="btn-primary"
                                                                    data-toggle-passive-class="btn-default" for="Persetujuan">
                                                                    <input type="radio" name="Persetujuan" id="psj1" value="ya"  
                                                                        class="join-btn"> &nbsp; Ya &nbsp;
                                                                </label>
                                                                <label class="btn btn-danger"
                                                                    data-toggle-class="btn-danger"
                                                                    data-toggle-passive-class="btn-default" for="Persetujuan">
                                                                    <input type="radio" name="Persetujuan" id="psj2" value="tidak"
                                                                        class="join-btn"> Tidak
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                            for="last-name">Keterangan <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 ">
                                                            <input type="text" id="ket" name="Keterangan"
                                                                value="<?= $row->Keterangan; ?>" required="required" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                            for="last-name">NIP <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 ">
                                                            <label type="text" id="nip" name="NIP" value="<?= $row->NIP; ?>" 
                                                                readonly class="form-control"></label>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal 
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 ">
                                                            <label id="birthday" class="date-picker form-control" name="Tanggal"
                                                             type="text" readonly value="<?= $row->Tanggal; ?>"></label>
                                                                
                                                        </div>
                                                    </div>
                                                    <div class="ln_solid"></div>
                                                    <div class="item form-group">
                                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                                        <a href="data_konfirmasi.php?>">
                                                        <button class="btn btn-primary" type="button">Cancel</button>
                                                        <button type="submit" class="btn btn-success">Submit</button>      
                                                        </div>
                                                    
                                                    </div>

                                                </form>
                                            </div>

                                            <!-- /.row -->
                                        </section>
                                        <!-- /.content -->
                                    </div>
                                    <!-- /.content-wrapper -->

                                    <!-- Javascript Datatable -->
                                    <script type="text/javascript">

                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    © 2019 HRIS V.2.0. - PT Bakrie Pipe Industries
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
</body>

</html>