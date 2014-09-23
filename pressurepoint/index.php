<!DOCTYPE html>
<html>
        <head>
                <title>Pressure Point: Home</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <!--Bootstrap Files-->
                <link href = "css/bootstrap.min.css" rel = "stylesheet">
                <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src = "js/bootstrap.js"></script>



                <!--Other Files-->
                <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
                

                <!--My Loading Scripts-->

                <?php
                define('WP_USE_THEMES', false);
                require('webadmin/wp-load.php'); 
                query_posts('showposts=1');
                ?>

                <!--My External Scripts-->       

                <link href = "css/Styles.css" rel = "stylesheet">

        </head>

        <body>

        		<!-- Image Header-->
        		<div class = "container">
	        		<div class="masthead">
	        			&nbsp;
					</div>
				</div>
        		<!--/Image Header-->


                <!--Start of Top Navbar-->
				<div class="navbar navbar-new" role="navigation">

                        <div class = "container">
                               
                            <ul class = "nav navbar-nav navbar-center">

                                <li><a href="#">HOME</a></li>
                                <li><a href="treatments.html">TREATMENTS</a></li>
                                <li><a href="booking.html">BOOKING</a></li>
                                <li><a href="contact.html">CONTACT US</a></li>

                            </ul>
                                                              
                        </div>
                </div>
                <!--End of Top Navbar-->

                <div class = "container" id = "bodyContainer">

                    <div class = "row">

                        <div class = "col-lg-1">
                        </div>


                        <div class = "col-lg-10">

                            <div class = "panel panel-new">

                                <div class = "row">

                                    <div class = "col-lg-4">

                                        <div align = "center">

                                            <img src="images/who.png" alt="..." class="img-circle img-whowhatwhere">

                                            <h2>Who?</h2>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                        </div>

                                    </div>

                                    <div class = "col-lg-4">

                                        <div align = "center">

                                            <img src="images/what.png" alt="..." class="img-circle img-whowhatwhere">

                                            <h2>What?</h2>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                        </div>

                                    </div>

                                    <div class = "col-lg-4">
                                        <div align = "center">

                                            <img src="images/where.png" alt="..." class="img-circle img-whowhatwhere">

                                            <h2>Where?</h2>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                                        </div>
                                    </div>

                                </div>

                            </div>

                            
                            <?php while (have_posts()): the_post(); ?>
                            <div class ="panel panel-default">

                                <div class = "panel-heading">

                                    <h1>Current Offer</h1>
                    
                                </div>

                                <div class = "panel-body">
                                    <h2><?php the_title();
                                    echo("test"); ?></h2>     

                                    <p><?php the_content(); ?></p>
                                    <?php endwhile; ?>

                                </div>

                            </div>  

                        </div>

                    </div>
                </div>
            </div>

            <div class = "navbar navbar-new navbar-fixed-bottom">

                <div class = "container">

                    <p class = "navbar-text pull-left"> Pressure Point&copy; 2014. All right reserved. Design by Thomas Frow&copy; 2014.</p>

                </div>
            </div>
               
        </body>
</html>