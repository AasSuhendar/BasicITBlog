<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url(); ?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Panel User</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Komentar Terbaru <span class="label label-default">2</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        <a href="<?php echo base_url(); ?>panel/"><i class="fa fa-fw fa-dashboard"></i> Panel User</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Manage Post <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse active-open">
                            <li>
                                <a href="#">List Post</a>
                            </li>
                            <li class="active">
                                <a href="#">Create New Post</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Panel User <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Panel
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Create New Post</h3>
                            </div>
                            <div class="panel-body">
                                <?php if ($this->session->flashdata('message')) {
                                      echo $this->session->flashdata('message');
                                    }
                                  ?>
                                <div id="">
                                    <form role="form" class="form-horizontal" action="<?php echo base_url() ?>panel/post_process" method="post">
                                            <div class="form-group" id="fmbbt">
                                                <label class="col-sm-2 control-label" for="form-field-3">
                                                    Post Title<span class="symbol required"></span>
                                                </label>
                                                <div class="col-sm-9">
                                                    <span class="input-icon">
                                                        <input type="text" placeholder="Title Post" name="title" id="title" class="form-control" value=""  required="required">
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="form-group" id="fmbbt">
                                                <label class="col-sm-2 control-label" for="form-field-3">
                                                    Post Content <span class="symbol required"></span>
                                                </label>
                                                <div class="col-sm-9">
                                                    <span class="input-icon">
                                                        <textarea class="col-sm-12" name="content" id="content"> </textarea>
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="form-group has-success" id="btnbbt">
                                                <label class="col-sm-2 control-label" for="form-field-3" >
                                                    
                                                </label>
                                                <div class="col-sm-9">
                                                <button type="submit" name="submit" id="btn" name="btn" class="btn btn-primary">Simpan</button>
                                                    <!-- <input type="submit"  class="form-control"> -->
                                                </div>
                                            </div>
                                            <input type="hidden" name="id_post" value=""/>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                

              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>
