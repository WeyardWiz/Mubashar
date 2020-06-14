<!DOCTYPE HTML>
<html>
<head>
    <title>Mubashar - Your OneStop News</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="public/css/main.css"/>
    <link rel="stylesheet" href="public/css/custom.css"/>
    <link rel="stylesheet" href="public/css/jquery.typeahead.min.css"/>
    <noscript>
        <link rel="stylesheet" href="public/css/noscript.css"/>
    </noscript>
</head>
<body class="is-loading">


<!-- Wrapper -->
<div id="wrapper" class="fade-in">

				<!-- font awesome https://fontawesome.com/ -->
    <a href="" class="button icon solo fa fa-arrow-up" id="btnGoTop"></a>
    <!-- Intro -->
    <div id="intro">
        <h1>This is<br/>
            Mubashar</h1>
        <ul class="actions">
            <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="#" class="logo">Mubashar</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            <li class="active"><a href="#">This is Mubashar</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">
        <section>
            <div>
                <div class="typeahead__container">
                    <div class="typeahead__field">
                        <span class="typeahead__query">
                            <input type="search" id="countriesList" class="js-typeahead"
                                   placeholder="Type a country name" autocomplete="off"/>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Posts -->
        <div class="selectedCountry"></div>
        <section class="posts">
        </section>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <section>
            <section class="alt">
                <h3>University of Michigan</h3>
                <p>4901 Evergreen Rd<br/>
                   Dearborn, MI 48128</p>
            </section>
            <section>
                <h3>Phone</h3>
                <p><a href="#">(313) 593-5000</a></p>
            </section>
        </section>
        <section class="split contact">
            <section>
                <h3>Email</h3>
                <p><a href="#">nasserh@umich.edu</a></p>
            </section>
        </section>
    </footer>

    <!-- Copyright -->
    <div id="copyright">
        <ul>
            <li>&copy; MUBASHAR, Powered by <a href="https://newsapi.org">NewsAPI.org</a></li>
        </ul>
    </div>
</div>

<!-- Scripts -->
<script src="public/js/jquery.min.js"></script>
<script src="public/js/jquery.typeahead.min.js"></script>
<script src="public/js/jquery.scrollex.min.js"></script>
<script src="public/js/jquery.scrolly.min.js"></script>
<script src="public/js/skel.min.js"></script>
<script src="public/js/util.js"></script>
<script src="public/js/main.js"></script>
<script src="public/js/apisConsume.js"></script>
</body>
</html>