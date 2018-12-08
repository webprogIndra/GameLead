<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Invest Register Form Flat Responsive Widget Template :: w3layouts</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Invest Register Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //fonts -->
    <!-- Font-Awesome-File -->
    <link rel="stylesheet" href="css/fontawesome-all.css" type="text/css" media="all">
</head>

<body>
    <h1 class="title-agile text-center">Invest Register form</h1>
    <div class="content-w3ls">
        <div class="agileits-grid">
            <div class="content-top-agile">
                <h2>Register Your Account</h2>
            </div>
            <div class="content-bottom">
                <form action="#" method="post">
				<i class="fab fa-centercode"></i>
                    <div class="field_w3ls">
                        <div class="field-group">
                            <input name="text1" id="text1" type="text" value="" placeholder="Username" required>
                        </div>
                        <div class="field-group">
                            <input name="email" id="email" type="email" value="" placeholder="Email" required>
                        </div>
                        <div class="field-group">
                            <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="Password">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                    </div>
                    <div class="wthree-field">
                        <input id="saveForm" name="saveForm" type="submit" value="Get Started" />
                    </div>
					<p class="signin">or sign up with <a href="#">facebook</a></p>
					<p class="terms">By signing up, you accept our <a href="#">Terms of use</a> and <a href="#">Privicy policy</a> </p>
                </form>
            </div>
            <!-- //content bottom -->
        </div>
    </div>
    <div class="copyright text-center">
        <p>© 2018 Invest Register Form. All rights reserved | Design by
            <a href="http://w3layouts.com">W3layouts</a>
        </p>
    </div>
    <!--//copyright-->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- script for show password -->
    <script>
        $(".toggle-password").click(function () {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <!-- /script for show password -->

</body>
<!-- //Body -->

</html>
