<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
        <!-- Page Title -->

        <!-- Responsive Enabler -->
	    <meta name="viewport" width="device-width" initial-scale="1.0">
        <!-- SEO -->
	    <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon -->
        <!-- <link rel="shortcut icon" href="img/favicon.png"/> -->
        <!-- Stylesheets -->
        <!-- HTML5 shim and Respond.js IE8 support of HMTL5 elements and media queries -->
	   <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        {{ HTML::style('css/reset.css') }}
        {{ HTML:: style('css/style.css') }}
	</head>
    <!-- Start body -->
	<body>
        <!-- Navigation and Branding -->
        <header id="mainHeader" role="banner">
            <div id="logo"></div>
            <h1>Nairobi Blooms</h1>
            <p>delivering beauty</p>
            <nav id="mainNav">
                <h2>
                    <ul  >
                        <li><h2>{{ HTML::link('/','Home') }}</h2></li>
                        <li><h2>{{ HTML::link('#','ABout') }}</h2></li>
                        <li><h2>{{ HTML::link('#','Blog') }}</h2></li>
                        <li><h2>{{ HTML::link('#','Checkout') }}</h2></li>
                    </ul>
                </h2>
            </nav>
        </header>
        <section id="hero">
            @yield('hero section')
        </section>

        <!-- Main Section -->
        <main id="nairobiBlooms" role="main">
            @yield('content')
        </main>

        <aside id="specials" role="complementary">
            <h2>Bouquet Specials</h2>
        </aside>

        <footer id="pageFooter" role="contentinfo">
            <!-- Footer Section -->
            <!-- Customer Review & Testimonials -->
            <!-- Copyright and Privacy details -->
        </footer>
    </body>
</html>
