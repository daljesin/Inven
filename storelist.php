<?php include("include/css.php");?>
    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN CONTAINER -->
        <div class="wrapper">
            <!-- BEGIN HEADER -->
             <?php include("include/header.php");?>
            <!-- END HEADER -->
            <div class="container-fluid">
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
                    <div class="breadcrumbs">
                        <h1>Colreorder Extension</h1>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                            </li>
                            <li class="active">Datatables</li>
                        </ol>
                        <!-- Sidebar Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".page-sidebar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                        <!-- Sidebar Toggle Button -->
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
                    <div class="page-content-container">
                        <div class="page-content-row">
                            <!-- BEGIN PAGE SIDEBAR -->
                            <div class="page-sidebar">
                                <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <ul class="nav navbar-nav margin-bottom-35">
                                        <li class="active">
                                            <a href="index.html">
                                                <i class="icon-home"></i> Home </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-note "></i> Reports </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> User Activity </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-basket "></i> Marketplace </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-bell"></i> Templates </a>
                                        </li>
                                    </ul>
                                    <h3>Quick Actions</h3>
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="#">
                                                <i class="icon-envelope "></i> Inbox
                                                <label class="label label-danger">New</label>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-paper-clip "></i> Task </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-star"></i> Projects </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-pin"></i> Events
                                                <span class="badge badge-success">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- END PAGE SIDEBAR -->
                            <div class="page-content-col">
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                     
                                        <div class="portlet box blue-hoki">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-globe"></i>Column Reordering </div>
                                                <div class="tools"> </div>
                                            </div>
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                    <thead>
                                                        <tr>
                                                            <th> Rendering engine </th>
                                                            <th> Browser </th>
                                                            <th> Platform(s) </th>
                                                            <th> Engine version </th>
                                                            <th> CSS grade </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 4.0 </td>
                                                            <td> Win 95+ </td>
                                                            <td> 4 </td>
                                                            <td> X </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 5.0 </td>
                                                            <td> Win 95+ </td>
                                                            <td> 5 </td>
                                                            <td> C </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 5.5 </td>
                                                            <td> Win 95+ </td>
                                                            <td> 5.5 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 6 </td>
                                                            <td> Win 98+ </td>
                                                            <td> 6 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> Internet Explorer 7 </td>
                                                            <td> Win XP SP2+ </td>
                                                            <td> 7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Trident </td>
                                                            <td> AOL browser (AOL desktop) </td>
                                                            <td> Win XP </td>
                                                            <td> 6 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 1.0 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 1.5 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 2.0 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Firefox 3.0 </td>
                                                            <td> Win 2k+ / OSX.3+ </td>
                                                            <td> 1.9 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Camino 1.0 </td>
                                                            <td> OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Camino 1.5 </td>
                                                            <td> OSX.3+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Netscape 7.2 </td>
                                                            <td> Win 95+ / Mac OS 8.6-9.2 </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Netscape Browser 8 </td>
                                                            <td> Win 98SE+ </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Netscape Navigator 9 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.0 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.1 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.2 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.2 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.3 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.3 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.4 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.4 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.5 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.5 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.6 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> 1.6 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.7 </td>
                                                            <td> Win 98+ / OSX.1+ </td>
                                                            <td> 1.7 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Mozilla 1.8 </td>
                                                            <td> Win 98+ / OSX.1+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Seamonkey 1.1 </td>
                                                            <td> Win 98+ / OSX.2+ </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Gecko </td>
                                                            <td> Epiphany 2.20 </td>
                                                            <td> Gnome </td>
                                                            <td> 1.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 1.2 </td>
                                                            <td> OSX.3 </td>
                                                            <td> 125.5 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 1.3 </td>
                                                            <td> OSX.3 </td>
                                                            <td> 312.8 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 2.0 </td>
                                                            <td> OSX.4+ </td>
                                                            <td> 419.3 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> Safari 3.0 </td>
                                                            <td> OSX.4+ </td>
                                                            <td> 522.1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> OmniWeb 5.5 </td>
                                                            <td> OSX.4+ </td>
                                                            <td> 420 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> iPod Touch / iPhone </td>
                                                            <td> iPod </td>
                                                            <td> 420.1 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Webkit </td>
                                                            <td> S60 </td>
                                                            <td> S60 </td>
                                                            <td> 413 </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 7.0 </td>
                                                            <td> Win 95+ / OSX.1+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 7.5 </td>
                                                            <td> Win 95+ / OSX.2+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 8.0 </td>
                                                            <td> Win 95+ / OSX.2+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 8.5 </td>
                                                            <td> Win 95+ / OSX.2+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 9.0 </td>
                                                            <td> Win 95+ / OSX.3+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 9.2 </td>
                                                            <td> Win 88+ / OSX.3+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera 9.5 </td>
                                                            <td> Win 88+ / OSX.3+ </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Opera for Wii </td>
                                                            <td> Wii </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Nokia N800 </td>
                                                            <td> N800 </td>
                                                            <td> - </td>
                                                            <td> A </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Presto </td>
                                                            <td> Nintendo DS browser </td>
                                                            <td> Nintendo DS </td>
                                                            <td> 8.5 </td>
                                                            <td> C/A
                                                                <sup>1</sup>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END EXAMPLE TABLE PORTLET-->
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR CONTENT LAYOUT -->
                </div>
                <!-- BEGIN FOOTER -->
                 <?php include("include/footer.php");?>
				  <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="assets/pages/scripts/table-datatables-colreorder.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout5/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->