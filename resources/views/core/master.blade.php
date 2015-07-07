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
                    <!-- <a class="" href="index.html"><img src="img/logo2.png" alt="Riley Logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/listing">Owners and Managers</a></li>
                        <!-- <li><a href="photography.html">Schedule Professional Photography</a></li> -->
                        <li><a href="/feedback">Give Feedback to Riley</a></li>
                        <!--
                        <li><a href="payment.html">Management Companies</a></li>
                        -->
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