<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{{ URL::to('/admin-assets') }}/">
        <meta charset="utf-8">
        <title>Web Administration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="css/opensans.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/pages/dashboard.css" rel="stylesheet">
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span><span class="icon-bar"></span> <span class="icon-bar"></span> </a><a class="brand" href="index.html">Web Administration</a>
                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="icon-cog"></i> Account <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:;">Settings</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Help</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!-- /container -->
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="subnavbar">
            <div class="subnavbar-inner">
                <div class="container">
                    <ul class="mainnav">
                        <li class="active">
                            <a href="{{URL::to('admin/home/dashboard')}}"><i class="icon-dashboard"></i><span>Dashboard</span> </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-file"></i> <span>Blogs</span> <b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{URL::to('admin/kategori')}}">Kategori Manager</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('admin/artikel')}}">Artikel Manager</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="reports.html"><i class="icon-list-alt"></i><span>Reports</span> </a>
                        </li>
                        <li>
                            <a href="guidely.html"><i class="icon-facetime-video"></i><span>App Tour</span> </a>
                        </li>
                        <li>
                            <a href="charts.html"><i class="icon-bar-chart"></i><span>Charts</span> </a>
                        </li>
                        <li>
                            <a href="shortcodes.html"><i class="icon-code"></i><span>Shortcodes</span> </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Pricing Plans</a>
                                </li>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="signup.html">Signup</a>
                                </li>
                                <li>
                                    <a href="error.html">404</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /container -->
            </div>
            <!-- /subnavbar-inner -->
        </div>
        <!-- /subnavbar -->
        <div id="loader" ></div>
        <div class="main">
            @yield('main_content')
            <!-- /main-inner -->
        </div>
        <!-- /main -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.7.2.min.js"></script>
        <script src="js/excanvas.min.js"></script>
        <script src="js/chart.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js"></script>
        <script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
        <script src="js/base.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/notify.min.js"></script>
        <script src="js/jquery.noty.packaged.min.js"></script>
        <script src="js/jquery.dataTables.js"></script>
        <link href="css/DT_bootstrap.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
            
                function getLoader(){
                  return '<div style="text-align:center;" ><img src="{{URL::to('admin-assets/img/loaders/loading36.gif')}}"/></div>';
                };
                
                $(document).ready(function(){
                   /**
                    * Datatable init
                    */
                   
                });
            
        </script>
        <script src="js/navigation.js"></script>
        
    </body>
</html>
