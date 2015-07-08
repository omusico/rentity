<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description"
          content="Riley is 100% free for apartment seekers. There are zero hidden fees, markups, or service costs.">
    <meta name="author" content="Rentity.co">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('header')
    <!-- TITLE -->
    <title>TextRiley | {{ isset($title) ? $title : 'Home' }}</title>

    <!-- BOOTSTRAP -->
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    <!-- ANIMATE CSS -->
    {!! Html::style('assets/css/animate.css') !!}

    <!-- FONT-AWESOME -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- MAIN STYLE -->
    {!! Html::style('assets/css/main.css') !!}

    <!-- MODERNIZR -->
    {!! Html::script('assets/vendors/modernizr-2.8.3-respond-1.4.2.min.js') !!}



</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Riley</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/listing">Owners and Managers</a></li>
                        <li><a href="/feedback">Give Feedback to Riley</a></li>
                        @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                        @else
                        <li><a href="/dashboard">Dashboard</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
</header>
@yield('content')
<footer>
    <div class="menu">
        <a href="mailto:daniel@rentity.co">Press</a> /
        <a href="contact.html">Contact us</a>
    </div>
    <div class="social">
        <a href="https://www.facebook.com/rentity?fref=ts" target="_blank"><span
                class="fa fa-facebook fa-2x"></span></a>
        <a href="https://twitter.com/TextRileyNow" target="_blank"><span class="fa fa-twitter fa-2x"></span></a>
    </div>

</footer>


<!--- LOGIN MODAL -->

<div class="modal fade" role="dialog" id="login">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">

                <!-- Modal Title -->
                <h2>Welcome Back</h2>
            </div>

            <!-- Modal Content -->
            <div class="modal-body">
                <form class="form-horizontal" id="LoginForm">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="col-md-12">
                                    <label for="email">Email Address</label>
                                    <input name="email" class="form-control" id="email"
                                           placeholder="Your Email Address"
                                           type="email" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <input name="password" class="form-control" id="password"
                                           placeholder="Your Password"
                                           type="password" required>
                                </div>
                            </div>
                        </div>
                    <div class="alert alert-danger errors"></div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <span class="fa fa-sign-in"></span> Login
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <span class="fa fa-close"></span> Close
                        </button>

                    </div>

                </form>
                <div class="text-center"><a href="#">Forgotten Credential</a> | <a href="#">Contact Us</a></div>
            </div>

        </div>
    </div>
</div>
<!-- SCRIPTS -->

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-64253681-1', 'auto');
    ga('send', 'pageview');

</script>
{!! Html::script('assets/vendors/jquery-1.11.2.min.js') !!}
{!! Html::script('assets/vendors/bootstrap.min.js') !!}
{!! Html::script('assets/vendors/waypoints.min.js') !!}
{!! Html::script('assets/js/main.js') !!}
</body>
</html>
<!--
Client: textriley.com
Developer: Jeffrey Valdhueza (www.dyeprey.com)
-->