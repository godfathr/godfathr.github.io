<?php 

// $servername = "localhost";
// $username = "godfathrAdmin";
// $password = "cc6JrvVQ7JCt68N8";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";

// $sql = "INSERT INTO godfathrmain.test (String)
//--  VALUES ('MIKAL')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

?>

<!DOCTYPE html>
<html>

    <head>
        <title>QD</title>
        <?php include_once("/includes/head.php") ?>
    </head>

    <body data-spy="scroll" data-offset="40" data-target="#scrollNav">
        <?php 

$path = getenv('APP_ROOT_PATH') . '/portfolio';
echo($path);


?>

        <div id="top" class="jumbotron">
            <header>
                <div class="header-content">
                    <div class="header-content-inner">
                        <div class="text-center">
                            <h1 id="homeHeading">Just Some Dev Things</h1>
                            <p>Full stack ASP.NET web development for business tools, ecommerce and personal portfolios.
                            </p>

                        </div>
                    </div>
                </div>
            </header>
            <nav class="navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#scrollNav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a class="navbar-brand" href="#myPage">Logo</a>-->
                    </div>
                    <div class="collapse navbar-collapse" id="scrollNav">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#top" class="page-scroll">HOME</a>
                            </li>
                            <li>
                                <a href="#snippets" class="page-scroll">TUTORIALS</a>
                            </li>
                            <li>
                                <a href="#knowMe" class="page-scroll">GET TO KNOW ME</a>
                            </li>
                            <li>
                                <a href="#findMe" class="page-scroll">FIND ME</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <span id="snippets"></span>
        <div id="snippetsDiv" class="container-fluid text-center">
            <div class="container">
                <div class="row">
                    <h2 class="lightHeading">Snippets, Tutorials and Lessons Learned</h2>
                    <hr />

                    <div class="row slideanim slide">
                        <div class="col-xs-6 col-sm-4 col-md-2 topicContainer">
                            <h3 class="topic">ASP.NET</h3>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 topicContainer">
                            <h3 class="topic">C#</h3>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 topicContainer">
                            <h3 class="topic">jQuery</h3>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 topicContainer">
                            <h3 class="topic">JavaScript</h3>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 topicContainer">
                            <h3 class="topic">SQL/SSRS</h3>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 topicContainer">
                            <h3 class="topic">PHP</h3>
                        </div>
                        <!--<div class="col-md-12">
                        <h2 ><a href="/tutorials/" >See All <span class="glyphicon glyphicon-arrow-right"></span></a></h3>
                    </div>-->
                    </div>
                </div>
            </div><!-- END Container-->
        </div><!-- END Fluid Container-->
        <span id="knowMe"></span>
        <div class="container-fluid text-center contentAlt">
            <div class="row">
                <div class="col-md-12">
                    <h1>Get to Know Me</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3><span class="glyphicon glyphicon-book"></span> The nutshell</h3>
                                </div>
                                <div class="panel-body">
                                    <ul>
                                        <li>
                                            ASP.NET
                                        </li>
                                        <li>
                                            C#
                                        </li>
                                        <li>
                                            Entity Framework
                                        </li>
                                        <li>
                                            MS SQL/TSQL
                                        </li>
                                        <li>
                                            HTML & CSS
                                        </li>
                                        <li>
                                            JavaScript & jQuery
                                        </li>
                                        <li>
                                            PHP
                                        </li>
                                    </ul>
                                    <div class="btn btn-success" id="btnNutshell">
                                        See more
                                    </div>
                                    <p id="moreNutshell">
                                        My interest in development lives in every layer of the .NET stack. From Web
                                        Forms to WPF to MVC, my desire is to create unique and intuitive applications
                                        for
                                        small business, enterprises and individuals. I am self taught and remain current
                                        with industry standards in modern tools, platforms, frameworks and methods.
                                        I develop using ASP.NET with C#, Entity Framework, SQL, HTML, CSS, JavaScript
                                        and jQuery and dabble with PHP.
                                    </p>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3><span class="glyphicon glyphicon-ok"></span> But really...</h3>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        My passion lies in back end development and reaches into the front end where I
                                        enjoy creating custom eye catching user interfaces.
                                    </p>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3><span class="glyphicon glyphicon-briefcase"></span> Mobility is key</h3>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        In 2016, over 50% of the use of the web was from mobile devices.
                                        I believe non-responsive applications are the mark of a lazy developer. I
                                        bootstrap or create custom responsive frameworks for my work.
                                        While in the enterprise world, I understand that are justifications for
                                        non-responsive sites in large enterprise
                                        applications, however, I see this need as a dying flame.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3><span class="glyphicon glyphicon-saved"></span> I've got your back</h3>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        While my prodcuts looks pretty and function well, I never treat application
                                        security as an afterthought. I always place a very
                                        large emphasis on keeping data safe. Wherever possible, I use security
                                        frameworks that are mature and have been tested over time.
                                        I most enjoy using the .NET Identity Framework as it is versatile, supports
                                        Single Sign On and is extensible and customizable.
                                    </p>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3><span class="glyphicon glyphicon-list"></span> Variety is the spice of life</h3>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        My dream job, though, is working for a small consulting company that provides
                                        web development services for many businesses.
                                    </p>
                                </div>
                            </div>
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3><span class="glyphicon glyphicon-eye-open"></span> Dreaming big</h3>
                                </div>
                                <div class="panel-body">
                                    <p>
                                        If I never had to work another day in my life, I'd spend my time writing web
                                        applications that enable sharing research.
                                        Particularly for research scientists and mathematicians. We open source code,
                                        why not all other technical knowledge!?
                                        I'd also like to construct a social network exclusivley where veterans can
                                        interact and keep their stories for posterity.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <span id="findMe"></span>
        <div id="findMeDiv" class="container-fluid text-center">
            <div class="container">
                <div class="row">
                    <h2 class="lightHeading">Find Me</h2>
                    <hr />
                    <div class="row slideanim slide">
                        <div class="col-xs-6 col-sm-6 col-md-6 topicContainer">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>Stack Overflow</h4>
                                </div>
                                <div class="panel-body">
                                    <a href="http://stackoverflow.com/users/7109850/godfathr" target="_blank">
                                        <img src="http://stackoverflow.com/users/flair/7109850.png?theme=dark"
                                            width="208" height="58"
                                            alt="profile for godfathr at Stack Overflow, Q&amp;A for professional and enthusiast programmers"
                                            title="profile for godfathr at Stack Overflow, Q&amp;A for professional and enthusiast programmers">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 topicContainer">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4>LinkedIn</h4>
                                </div>
                                <div class="panel-body">
                                    <a href="https://www.linkedin.com/pub/mikal-grant/26/634/93b" target="_blank">
                                        <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_myprofile_160x33.png"
                                            width="160" height="33" border="0"
                                            alt="View Mikal Grant's profile on LinkedIn">
                                    </a>
                                    <!--<img src="../assets/images/Octocat58.png" />-->
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-xs-6 col-sm-4 col-md-4 topicContainer">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4>VisualStudio.com</h4>
                            </div>
                            <div class="panel-body" style="background-color:white;">
                                <img src="../assets/images/Visual_Studio_2012_logo_and_wordmark.svg.png" width="100"/>
                            </div>
                        </div>
                    </div>-->
                    </div>
                </div>
            </div><!-- END Container-->
        </div><!-- END Fluid Container-->

        <footer class="container-fluid footer text-center">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; 2017</p>
                    <p>Image Credits | Image Credits | Image Credits | Image Credits</p>
                </div>
            </div>
        </footer>
        <script>
        $(document).ready(function() {
            // Add scrollspy to <body>
            $('body').scrollspy({
                target: "#scrollNav",
                offset: 60
            });

            // Add smooth scrolling on all links inside the navbar
            $("#scrollNav a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 500, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });

        $('.container .body-content').scrollspy({
            target: "#scrollNav",
            offset: 60
        });

        $('#btnNutshell').click(function() {
            $('#moreNutshell').toggle(200);
            //$('#btnNutshell').html('See less');
        });
        </script>
    </body>

</html>