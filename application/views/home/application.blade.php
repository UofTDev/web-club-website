<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>
    <title>UofT Developers</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/application.css" media="screen" />
</head>
<body>

    <nav class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="/">U<span class="of-smaller">of</span>T <span class="dev-box">Dev</span> </a>
                <ul class="nav">
                   
                    <li <?php echo URI::is('*about*') ? 'class="active"' : '' ?>><a href="/about">About</a></li>
                    <li <?php echo URI::is('*join*') ? 'class="active"' : '' ?>><a href="/join">Join</a></li>
                    <li <?php echo URI::is('*portfolio*') ? 'class="active"' : '' ?>><a href="/portfolio">Portfolio</a></li>
                    <li <?php echo URI::is('*resources*') ? 'class="active"' : '' ?>><a href="/resources">Resources</a></li>
                    <li <?php echo URI::is('*sponsors*') ? 'class="active"' : '' ?>><a href="/sponsors">Sponsors</a></li>
                    <li <?php echo URI::is('*execs*') ? 'class="active"' : '' ?>><a href="/execs">The Team</a></li>
                    <li <?php echo URI::is('*contact*') ? 'class="active"' : '' ?>><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
    <div class="contents">
        @include('plugins.status')
        @yield('content')
    </div>
    </div>
    
    <footer>
        <div class="container">
            <a class="dev-logo" href="/">U<span class="of-smaller">of</span>T <span class="dev-box white">Dev</span> </a>
            <ul class="footer-links">
                <li><a href="http://www.facebook.com/groups/UofTDev/">Facebook</a></li>
                <li><a href="https://github.com/UofTDev">GitHub</a></li>
                <li><a href="https://twitter.com/uoftdev">Twitter</a></li>
                <li><a href="http://www.youtube.com/uoftdevelopers">Youtube</a></li>
            </ul>
        </div>
    </footer>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/application.js"></script>
</body>
</html>
