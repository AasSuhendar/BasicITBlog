<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Panel</title>

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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url() ?>auth/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>panel/"><i class="fa fa-fw fa-dashboard"></i> Panel User</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-desktop"></i> Manage Post <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>">View Website</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>panel/createPost">Create New Post</a>
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
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">6</div>
                                        <div>Komentar terbaru</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>Posting Terpopuler</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Lihat</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <?php if ($this->session->flashdata('message')) {
                                      echo $this->session->flashdata('message');
                                    }
                                  ?>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Daftar Posting</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive" id="">
                                    <table class="table table-striped table-bordered table-hover table-full-width">
                                        <tr>
                                            <td>No</td>
                                            <td>Title</td>
                                            <td>Content</td>
                                            <td>Action</td>
                                        </tr>
                                        <?php $i=1; ?>
                                        <?php foreach ($posting as $post): ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $post->title; ?></td>
                                            <td><?php echo $post->content; ?></td>
                                            <td>
                                                <div class="button-group">
                                                    <a class="open-editPosting btn btn-xs btn-info" href="" data-target="#editPosting" data-toggle="modal" 
                                                    data-id="<?php echo $post->id_posting; ?>"
                                                    data-title="<?php echo $post->title; ?>"
                                                    data-content="<?php echo $post->content; ?>"
                                                    data-usernya="<?php echo $post->author; ?>"
                                                    ><i class="fa fa-pencil"></i> Edit</a>

                                                    <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>panel/delete_process?id_posting=<?php echo $post->id_posting; ?>" >
                                                    <i class="fa fa-trash-o"></i> Delete Target</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="modal fade" id="editPosting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                <form role="form" class="form-horizontal" action="<?php echo base_url(); ?>panel/edit_process" method="post" id="modalTargetF">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="exampleModalLabel">Form Edit Target Fungsionalitas Aplikasi</h4>
                                  </div>
                                  <div class="modal-body">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="form-field-3">
                                                    Post Title<span class="symbol required"></span>
                                                </label>
                                                <div class="col-sm-9">
                                                    <span class="input-icon">
                                                        <input type="text" placeholder="Title Post" name="title" id="title" class="form-control" value=""  required="required">
                                                        </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label" for="form-field-3">
                                                    Post Content <span class="symbol required"></span>
                                                </label>
                                                <div class="col-sm-9">
                                                    <span class="input-icon">
                                                        <textarea class="col-sm-12" name="content" id="content"> </textarea>
                                                        </span>
                                                </div>
                                            </div>  
                                            <input type="hidden" name="id_posting" id="id_posting" value=""/>
                                            <input type="hidden" name="author" id="author" value=""/> 
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                        </div>
              

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
    
    <script type="text/javascript">
            $(document).on("click", ".open-editPosting", function () {
                var id_posting      = $(this).data('id');
                var title           = $(this).data('title');
                var content         = $(this).data('content');
                var author          = $(this).data('usernya');
                $(".modal-body #id_posting").val(id_posting);
                $(".modal-body #title").val(title);
                $(".modal-body #content").val(content);
                $(".modal-body #author").val(author);
        });
        </script>
</body>

</html>
