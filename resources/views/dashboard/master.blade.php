<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Riley is 100% free for apartment seekers. There are zero hidden fees, markups, or service costs.">
    <meta name="author" content="Rentity.co">
    <meta name="keyword" content="">

    <title>TextRiley | {{ isset($title) ? $title : 'Dashboard'  }}</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('assets/css/bootstrap.css') !!}

    <!-- external css -->
    {!! Html::style('assets/css/font-awesome.css') !!}
    {!! Html::style('assets/dashboard/css/zabuto_calendar.css') !!}
    {!! Html::style('assets/dashboard/js/gritter/css/jquery.gritter.css') !!}
    {!! Html::style('assets/dashboard/lineicons/style.css') !!}

    @yield('load_to_header')
    <!-- Dashboard Style -->
    {!! Html::style('assets/dashboard/css/style.css') !!}
    {!! Html::style('assets/dashboard/css/style-responsive.css') !!}
    {!! Html::style('assets/dashboard/js/chart-master/Chart.js') !!}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="/" class="logo"><b>TextRiley</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">DashGum Admin Panel</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/assets/dashboard/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                      <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                          Hi mate, how is everything?
                                      </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/assets/dashboard/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                      <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                       Hi, I need your help with this.
                                      </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/assets/dashboard/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                      <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                          Love your new Dashboard.
                                      </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="/assets/dashboard/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                      <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                          Please, answer asap.
                                      </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="/logout">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered">
                        <a href="profile.html">
                        {!! Html::image('assets/dashboard/img/ui-sam.jpg', '', ['class' => 'img-circle', 'width' => '60px']) !!}
                        </a>
                    </p>
                    <h5 class="centered">{{ Auth::user()->lastName }}, {{ Auth::user()->firstName }}</h5>

                    <li class="mt">
                        <a class="active" href="/dashboard">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            <span>My Listing</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/dashboard/listing">Listings</a></li>
                            <li><a href="/dashboard/listing/create">Add Listing</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="/dashboard/applicants">
                            <i class="fa fa-cogs"></i>
                            <span>My Applicants</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-search"></i>
                            <span>Search for renters</span>
                        </a>

                    </li>
                    <li class="sub-menu">
                        <a href="/dashboard/profile">
                            <i class="fa fa-book"></i>
                            <span>My Profile</span>
                        </a>
                    </li>


                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->

        <section id="main-content">
            <section class="wrapper">
                @yield('content');
            </section>
        </section>

        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2015 - TextRiley
                <a href="index.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- JAVASCRIPTS -->

    {!! Html::script('assets/vendors/jquery-2.1.4.min.js') !!}
    {!! Html::script('assets/dashboard/js/bootstrap.min.js') !!}
    {!! Html::script('assets/dashboard/js/jquery.dcjqaccordion.2.7.js') !!}
    {!! Html::script('assets/dashboard/js/jquery.scrollTo.min.js') !!}
    {!! Html::script('assets/dashboard/js/jquery.nicescroll.js') !!}
    {!! Html::script('assets/dashboard/js/jquery.sparkline.js') !!}


    <!-- load from blade -->
    @yield('load_to_footer')


    <!--common script for all pages-->
    {!! Html::script('assets/dashboard/js/common-scripts.js') !!}

    {!! Html::script('assets/dashboard/js/gritter/js/jquery.gritter.js') !!}}
    {!! Html::script('assets/dashboard/js/gritter-conf.js') !!}

    <!--script for this page-->
    {!! Html::script('assets/dashboard/js/sparkline-chart.js') !!}
    {!! Html::script('assets/dashboard/js/zabuto_calendar.js') !!}


    <!--
    <script type="text/javascript">
        $(document).ready(function() {
            var unique_id = $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'Welcome to Dashgum!',
                // (string | mandatory) the text inside the notification
                text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
                // (string | optional) the image to display on the left
                image: 'assets/dashboard/img/ui-sam.jpg',
                // (bool | optional) if you want it to fade out on its own or just sit there
                sticky: true,
                // (int | optional) the time you want it to be alive for before fading out
                time: '',
                // (string | optional) the class name you want to apply to that specific message
                class_name: 'my-sticky-class'
            });

            return false;
        });
    </script>
    -->
    <script type="application/javascript">
        $(document).ready(function() {
            $("#date-popover").popover({
                html: true,
                trigger: "manual"
            });
            $("#date-popover").hide();
            $("#date-popover").click(function(e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function() {
                    return myDateFunction(this.id, false);
                },
                action_nav: function() {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [{
                    type: "text",
                    label: "Special event",
                    badge: "00"
                }, {
                    type: "block",
                    label: "Regular event",
                }]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

<!-- LOADING MODAL -->
<div class="modal fade" role="dialog" id="loading">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Loading</h1>
            </div>
            <div class="modal-body text-center">
                {!! Html::image('images/loader.gif') !!}
            </div>
        </div>
    </div>
</div>
<!-- END LOADING MODAL -->

</body>

</html>