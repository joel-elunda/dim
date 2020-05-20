<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/admin/plugins/images/favicon.png');?>">
    <title>Pixel Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('assets/admin/bootstrap/dist/css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?=base_url('assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css');?>" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="<?=base_url('assets/admin/css/animate.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('assets/admin/css/style.css');?>" rel="stylesheet">
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (blue.css) for this starter
          page. However, you can choose any other skin from folder css / colors .
-->
    <link href="<?=base_url('assets/admin/css/colors/blue-dark.css');?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="index.html"><b><img src="<?=base_url('assets/admin/plugins/images/pixeladmin-logo.png');?>" alt="home" /></b><span class="hidden-xs"><img src="<?=base_url('assets/admin/plugins/images/pixeladmin-text.png');?>" alt="home" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?=base_url('assets/admin/plugins/images/users/varun.jpg');?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Jhon Doe</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="<?=site_url('admin');?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/release');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Réalisation</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/actu');?>" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Actualité</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/profile');?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Profile Admin</span></a>
                    </li>
                    <li>
                        <a href="<?=site_url('admin/basic_table');?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i><span class="hide-menu">Utilisateur</span></a>
                    </li>
                    <li>
                        <!-- <a href="<?=site_url('admin/fontawesome');?>" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i><span class="hide-menu">Icons</span></a> -->
                    </li>
                    <li>
                        <!-- <a href="<?=site_url('admin/map_google');?>" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i><span class="hide-menu">Google Map</span></a>     -->
                    </li>
                  
                    <li>
                        <!-- <a href="<?=site_url('admin/error');?>" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i><span class="hide-menu">Error 404</span></a> -->
                    </li>
                </ul>
                <div class="center p-20">
                    <span class="hide-menu"><a href="http://wrappixel.com/templates/pixeladmin/" target="_blank" class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Upgrade to Pro</a></span>
                </div>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Publier une actualité </h4> </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Publier une actualité</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">



                    
                    <div class="col-md-4 col-xs-12">
                                <div class="white-box">
                                <!-- action="<?=site_url('admin/ajax_upload');?>" -->
                                    <form  id="upload_form" method="post" enctype="multipart/form-data">
                                        <input type="file" name="image_file" id="image_file">
                                        <br>
                                        <input type="submit" value="Charger l'image" name="upload" id="upload" class="btn">
                                    </form>
                                    <br><br>
                                    <div id="uploaded_image">

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-xs-12">
                                <div class="white-box">
                                    <form method="POST" action="<?=site_url('admin/upload_release');?>" class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label class="col-md-12">Titre de l'image</label>
                                            <div class="col-md-12">
                                                <input type="text" value="<?=set_value('titre');?>" name="titre" class="form-control form-control-line"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-description" class="col-md-12">Description de l'image</label>
                                            <div class="col-md-12">
                                                <input type="text"  value="<?=set_value('description');?>"  class="form-control form-control-line" name="description" id="example-description"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Date de l'evenement</label>
                                            <div class="col-md-12">
                                                <input type="date"  name="date" value="<?=set_value('date');?>" class="form-control form-control-line"> </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Publier</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?=base_url('assets/admin/plugins/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('assets/admin/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?=base_url('assets/admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js');?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?=base_url('assets/admin/js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?=base_url('assets/admin/js/waves.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url('assets/admin/js/custom.min.js');?>"></script>
</body>

</html>
