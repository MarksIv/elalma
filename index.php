<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <!-- Define Charset -->
    <meta charset="utf-8" />

    <!-- Page Title -->
    <title>El Alma Music Band</title>

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Description and Author -->
    <meta name="description" content="content description">
    <meta name="author" content="CoralixThemes">

    <!--[if lt IE 9]> HTML5Shiv
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


    <!-- Stylesheet
    ===================================================================================================  -->

	<!-- Bootstrap -->
	<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
    
    <!-- Font icons -->    
    <link href="font/fontello.css" rel="stylesheet" >
    <!--[if IE 7]>
    <link href="font/fontello-ie7.css" rel="stylesheet" ><![endif]-->

	<!-- Custom Template Styles -->
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="css/color/cream.css" rel="stylesheet" media="screen">

	<!-- Media Queries -->
    <link href="css/media-queries.css" rel="stylesheet" media="screen">

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <script src="js/modernizr.custom.js"></script>

    <?php
    require "database/database.php";
    setcookie('lang', $_GET['lang']);
    setcookie('name', $_GET['name']);
    $connection = createDbConnection();
    ?>
</head>


<body>

 <!-- Main Menu -->
  <nav class="navbar navbar-default navbar-fixed-top animated fadeInDown delay2" role="navigation" style="opacity: 1;">
       <div class="container">
		        <div class="navbar-header" style="height: 75px;">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>

                  <img src="img/main-logo-1.png"  alt="logo brand" style="
	display: inline-block;
	margin-top: 0;
    margin-left: 0;
	height: 90px;
                  ">
                  <a href="#"></a>
		        </div>
		        <div class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#menu-home">Home</a></li>
		            <li><a href="#menu-band">About</a></li>
		            <li><a href="#menu-discography">Repertoire</a></li>
		            <li><a href="#menu-gallery">Photos</a></li>
		            <!-- <li><a href="#menu-tour">Tickets</a></li> -->
		            <li><a href="#menu-videos">Videos</a></li>
		            <li><a href="#menu-events">Events</a></li>
		            <!-- <li><a href="http://themeforest.net/user/coralixthemes" class="external">Store</a></li> -->
                    <li><a href="#contacts">contacts</a></li>
		          </ul>
		        </div><!--/.nav-collapse -->
		      </div>
      </nav>
      <!-- End Main Menu -->
    
    <!-- Modal -->
        <!-- <div class="modal fade" id="register_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Contact Us</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" id="register" action="registration.php" method="post" accept-charset="utf-8">
                            <div class="form-group">
                              <label class="no">Name</label>
                              <input type="text" class="form-control" placeholder="Name" name="name"/>
                            </div>
                            <div class="form-group">
                              <label class="no">Email</label>
                              <input type="email" class="form-control" placeholder="E-mail" name="email"/>
                            </div>
                            <div class="form-group">
                              <label class="no">Your Message</label>
                              <input type="text" class="form-control message" placeholder="Your Message" name="phone">
                            </div>
                            <button type="submit" class="btn btn-default send">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end Modal -->

    

    
    <!-- Header Section -->
    <header class="generic parallax-bg1 parallax clearfix" id="menu-home">
        <div class="container">
            <div class="row flexheader">            
                    <ul class="slides">
                        <li class="col-sm-12 item-caption">
                			<h1>Concert at <a href="https://www.facebook.com/DOMADARZS/" class="no-highlight">Doma dārzs</a></h1>
                			<h2>Saturday July 1, 2023 at 19:00 <a href="https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462"
                                class="no-highlight">Doma laukums</a> / Rīga</h2>
                		</li>
                        <li class="col-sm-12 item-caption">
                			<h1>Concert at <a href="https://www.facebook.com/DOMADARZS/" class="no-highlight">Doma dārzs</a></h1>
                			<h2>Saturday July 8, 2023 at 19:00 <a href="https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462"
                                class="no-highlight">Doma laukums</a> / Rīga</h2>
                		</li>                 
                        <!-- <li class="col-sm-12 item-caption">
                			<h1>Concert at <a href="https://www.facebook.com/TheStageBy2MB" class="no-highlight">THE STAGE BY TWO MORE BEERS</a></h1>
                			<h2>Thursday June 22, 2023 <a href="https://www.google.com/maps?output=search&q=ka%C4%BC%C4%B7u+iela+17&entry=mc&sa=X&ved=2ahUKEwilsJnQ_cn_AhXCmYsKHdliDNMQ0pQJegQIDBAB"
                                class="no-highlight">Kaļķu 17</a> / Rīga</h2>
                		</li> -->
                    </ul>                
            </div>
        </div>
    </header>
    <!-- End Header Section -->


    <!-- Band Members Section -->
    <section class="band generic" id="menu-band"> 
        <div class="container">
            <!-- Title -->
            <div class="row text-center title">
                <h1>About <small>Band</small></h1>
            </div>
            <!-- End Title -->  

            <div class="row text-center">
                <p class="description-paragraph">   The cover band El Alma is a fantastic choice for those who appreciate not only a specific style in music. 
                    The group's goal is to create the widest range of sound by incorporating various styles into their repertoire. 
                    Rhythms of flamenco rumba, infused with the passion and magic of Spain, intertwine with the energy of rock and roll 
                    and the genuine joy of pop music, creating an unparalleled sonic journey.
                </p>
                <p class="description-paragraph">
                    El Alma, which translates from Spanish as "The Soul"! Therefore, everything done with El Alma is done with soul! 
                </p>
                <p class="description-paragraph">
                    At any of your events, the band will become the soul of your company! Their performances in restaurants, weddings, 
                    anniversaries, and corporate events are always memorable and leave a lasting impression! We will find the key to your heart, 
                    to your soul, so that you can derive pleasure from the sounds of music!
                </p>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="ch-item ch-img-1">
                        <div class="ch-info">
                            <div class="member text-center">
                                <h3>Viktors Bernāns</h3>
                                <p>Vocal<br>Acoustic Guitar</p>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="text-center">to be updaited</p> -->
                    <!-- <ul class="social">
                        <li>
                            <a href="#" class="tooltip_hover" title="Lastfm" data-placement="bottom">
                                <i class="icon-lastfm-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Linkedin" data-placement="bottom">
                                <i class="icon-linkedin-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Twitter" data-placement="bottom">
                                <i class="icon-twitter-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Pinterest" data-placement="bottom">
                                <i class="icon-pinterest-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="RSS" data-placement="bottom">
                                <i class="icon-rss"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Flickr" data-placement="bottom">
                                <i class="icon-flickr-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Google +" data-placement="bottom">
                                <i class="icon-gplus-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Facebook" data-placement="bottom">
                                <i class="icon-facebook-circled"></i>
                            </a>
                        </li>
                    </ul>                   -->
                </div>

                <div class="col-md-3">
                    <div class="ch-item ch-img-2">
                        <div class="ch-info">
                            <div class="member text-center">
                                <h3>Eugene Ko</h3>
                                <p>Lead guitar</p>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus semper odio id nulla facilisis pretium. Sed ut mi nec nisi cursus dictum vitae in enim.</p> -->
                    <!-- <ul class="social">
                        <li>
                            <a href="#" class="tooltip_hover" title="Lastfm" data-placement="bottom">
                                <i class="icon-lastfm-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Linkedin" data-placement="bottom">
                                <i class="icon-linkedin-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Twitter" data-placement="bottom">
                                <i class="icon-twitter-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Pinterest" data-placement="bottom">
                                <i class="icon-pinterest-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="RSS" data-placement="bottom">
                                <i class="icon-rss"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Flickr" data-placement="bottom">
                                <i class="icon-flickr-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Google +" data-placement="bottom">
                                <i class="icon-gplus-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Facebook" data-placement="bottom">
                                <i class="icon-facebook-circled"></i>
                            </a>
                        </li>
                    </ul>  -->
                </div>

                <div class="col-md-3">
                    <div class="ch-item ch-img-3">
                        <div class="ch-info">
                            <div class="member text-center">
                                <h3>Antons Gella</h3>
                                <p>Drums</p>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus semper odio id nulla facilisis pretium. Sed ut mi nec nisi cursus dictum vitae in enim.</p> -->
                    <!-- <ul class="social">
                        <li>
                            <a href="#" class="tooltip_hover" title="Lastfm" data-placement="bottom">
                                <i class="icon-lastfm-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Linkedin" data-placement="bottom">
                                <i class="icon-linkedin-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Twitter" data-placement="bottom">
                                <i class="icon-twitter-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Pinterest" data-placement="bottom">
                                <i class="icon-pinterest-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="RSS" data-placement="bottom">
                                <i class="icon-rss"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Flickr" data-placement="bottom">
                                <i class="icon-flickr-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Google +" data-placement="bottom">
                                <i class="icon-gplus-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Facebook" data-placement="bottom">
                                <i class="icon-facebook-circled"></i>
                            </a>
                        </li>
                    </ul>  -->
                </div>

                <div class="col-md-3">
                    <div class="ch-item ch-img-4">
                        <div class="ch-info">
                            <div class="member text-center">
                                <h3>Marks Ivanovs</h3>
                                <p>Bass</p>
                            </div>
                        </div>
                    </div>
                    <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus semper odio id nulla facilisis pretium. Sed ut mi nec nisi cursus dictum vitae in enim.</p> -->
                    <!-- <ul class="social">
                        <li>
                            <a href="#" class="tooltip_hover" title="Lastfm" data-placement="bottom">
                                <i class="icon-lastfm-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Linkedin" data-placement="bottom">
                                <i class="icon-linkedin-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Twitter" data-placement="bottom">
                                <i class="icon-twitter-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Pinterest" data-placement="bottom">
                                <i class="icon-pinterest-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="RSS" data-placement="bottom">
                                <i class="icon-rss"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Flickr" data-placement="bottom">
                                <i class="icon-flickr-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Google +" data-placement="bottom">
                                <i class="icon-gplus-circled"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="tooltip_hover" title="Facebook" data-placement="bottom">
                                <i class="icon-facebook-circled"></i>
                            </a>
                        </li>
                    </ul>  -->
                </div>
           </div>
        </div>
    </section>
    <!-- End Band Members Section -->

        <!-- Discography Section -->
        <section class="discography generic" id="menu-discography">
            <div class="container">
           
                <!-- Title -->
                <div class="row text-center title">
                    <h1>Our <small>Repertoire</small></h1>
                    <p class="custom-paragraph">Here, you can choose a song for us to play.<br>Contact us during our break, and we will be happy to play it for you!</p><br>
                </div>
                <br>
                <!-- End Title -->  
    
                <!-- Accordion -->
                <div class="accordion" id="accordion-disco">
                    <!-- Accordion item 1 -->
                    <div class="accordion-group">
                        <div class="accordion-heading" style="height: 20px;">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-disco" href="#collapseOne-spanish">                           
                                <img src="img/plus-icon.png" alt="icon">
                                 Spanish music
                            </a>
                        </div>
                        <div id="collapseOne-spanish" class="accordion-body collapse in">
                            <!--Inner info -->
                            <div class="accordion-inner">
                                <div class="row">
                                    
                                    <!-- <div class="col-md-3">
                                            <figure>
                                                <img src="" alt="image">image to be added
                                            </figure>
                                        </a> 
                                    </div> -->
                                    <div class="col-md-2">
                                        <!-- <h3>Songs:</h3> -->
                                        <ol>
                                        <?php
                                            $query = "SELECT * FROM songs WHERE genre = 'Spanish'";
                                            $result = mysqli_query($connection, $query);

                                            if ($result) {
                                                $i = 1;
                                                echo '<table class="big-table">';
                                                echo '<tr><th></th><th>Song</th><th>Artist</th></tr>';

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<tr>';
                                                    echo '<td>'.$i.'</td>';
                                                    echo '<td>' . $row['song'] . '</td>';
                                                    echo '<td>' . $row['artist'] . '</td>';
                                                    echo '</tr>';
                                                    $i++;
                                                }
                                                echo '</table>';
                                            } else {
                                                echo 'Error: ' . mysqli_error($connection);
                                            }
                                            ?>
                                        </ol>
                                    </div> 
                                </div>
                                
                            </div>
                            <!--Inner info -->
                        </div>
                    </div>
                    <!-- End Accordion item 1 -->
                      <!-- Accordion item 2 -->
                      <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-disco" href="#collapseOne-rock">                           
                                <img src="img/plus-icon.png" alt="icon">
                                Rock 'n' Roll
                            </a>
                        </div>
                        <div id="collapseOne-rock" class="accordion-body collapse in">
                            <!--Inner info -->
                            <div class="accordion-inner">
                                <div class="row">
                                    
                                    <!-- <div class="col-md-3">
                                            <figure>
                                                <img src="" alt="image">image to be added
                                            </figure>
                                        </a> 
                                    </div> -->
                                    <div class="col-md-2">
                                        <!-- <h3>Songs:</h3> -->
                                        <ol>
                                        <?php
                                            $query = "SELECT * FROM songs WHERE genre = 'Rock-n-Roll'";
                                            $result = mysqli_query($connection, $query);

                                            if ($result) {
                                                $i = 1;
                                                echo '<table class="big-table">';
                                                echo '<tr><th></th><th>Song</th><th>Artist</th></tr>';

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<tr>';
                                                    echo '<td>'.$i.'</td>';
                                                    echo '<td>' . $row['song'] . '</td>';
                                                    echo '<td>' . $row['artist'] . '</td>';
                                                    echo '</tr>';
                                                    $i++;
                                                }
                                                echo '</table>';
                                            } else {
                                                echo 'Error: ' . mysqli_error($connection);
                                            }
                                            ?>
                                        </ol>
                                    </div> 
                                </div>
                                
                            </div>
                            <!--Inner info -->
                        </div>
                    </div>
                    <!-- End Accordion item 2 -->  
                    <!-- Accordion item 3 -->
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-disco" href="#collapseOne-pop">                           
                                <img src="img/plus-icon.png" alt="icon">
                                 Popular hits
                            </a>
                        </div>
                        <div id="collapseOne-pop" class="accordion-body collapse in">
                            <!--Inner info -->
                            <div class="accordion-inner">
                                <div class="row">
                                    
                                    <!-- <div class="col-md-3">
                                            <figure>
                                                <img src="" alt="image">image to be added
                                            </figure>
                                        </a> 
                                    </div> -->
                                    <div class="col-md-2">
                                        <!-- <h3>Songs:</h3> -->
                                        <ol>
                                            <?php
                                            $query = "SELECT * FROM songs WHERE genre = 'Pop'";
                                            $result = mysqli_query($connection, $query);

                                            if ($result) {
                                                $i = 1;
                                                echo '<table class="big-table">';
                                                echo '<tr><th></th><th>Song</th><th>Artist</th></tr>';

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo '<tr>';
                                                    echo '<td>'.$i.'</td>';
                                                    echo '<td>' . $row['song'] . '</td>';
                                                    echo '<td>' . $row['artist'] . '</td>';
                                                    echo '</tr>';
                                                    $i++;
                                                }
                                                echo '</table>';
                                            } else {
                                                echo 'Error: ' . mysqli_error($connection);
                                            }
                                            ?>
                                        </ol>
                                    </div> 
                                </div>
                                
                            </div>
                            <!--Inner info -->
                        </div>
                    </div>
                    <!-- End Accordion item 3 -->                        
                </div>
                <!-- End Accordion -->
            </div>
        </section>
        <!-- Discography Section -->


	<!-- Logos Section -->
	<!-- <section class="parallax-bg2 parallax clearfix logos">
    	<div class="container">
        	<div class="row">
                <ul id="bx-pager">
    				<li class="col-sm-3">
                        <a href="#" class="tooltip_hover" title="We are at Spotify" data-placement="bottom"><img src="img/logos/logo1.png" alt="logo"></a>
                    </li>
    				<li class="col-sm-3">
                        <a href="#" class="tooltip_hover" title="Youtube Channel" data-placement="bottom"><img src="img/logos/logo2.png" alt="logo"></a>
                    </li>
    				<li class="col-sm-3">
                        <a href="#" class="tooltip_hover" title="Mixcloud Listen the best" data-placement="bottom"><img src="img/logos/logo3.png" alt="logo"></a>
                    </li>
    				<li class="col-sm-3">
                        <a href="#" class="tooltip_hover" title="SoundCloud Share Your Sounds" data-placement="bottom"><img src="img/logos/logo4.png" alt="logo"></a>
                    </li>
				</ul>
            </div>
        </div>
    </section> -->
	<!-- End Logos Section -->


    <!-- Gallery Section -->
    <section class="gallery generic" id="menu-gallery">
        <div class="container">       
        
            <!-- Title -->
            <div class="row text-center title">
                <h1>Check <small>our</small> photos</h1>
                <p>to be added</p>
            </div>
            <!-- End Title -->  
        
            <!-- <div class="row">  

                <div class="col-md-4">
                    <a href="img/gallery/01.jpg" class="lightbox_image port-item">
                        <span class="hovers"> <i class="icon-plus-circled"></i> </span>
                        <img src="img/gallery/01.jpg" alt="image">
                    </a>
                    <div class="imageinfo">
                        <h2 class="text-center"><a href="img/gallery/01.jpg" class="lightbox_image"> SATURDAY NIGHT LIVE </a></h2>
                        <p class="text-center">Etiam porta sem malesuada magna</p>
                    </div>
                </div>
            
                <div class="col-md-4">
                    <a href="img/gallery/02.jpg" class="lightbox_image port-item">
                        <span class="hovers"> <i class="icon-plus-circled"></i> </span>
                        <img src="img/gallery/02.jpg" alt="image">
                    </a>
                    <div class="imageinfo">
                        <h2 class="text-center"><a href="img/gallery/02.jpg" class="lightbox_image"> MTV WORLD </a></h2>
                        <p class="text-center">Etiam porta sem malesuada magna</p>
                    </div>
                </div>
            
            
                <div class="col-md-4">
                    <a href="img/gallery/03.jpg" class="lightbox_image port-item" title="Image description">
                        <span class="hovers"> <i class="icon-plus-circled"></i> </span>
                        <img src="img/gallery/03.jpg" alt="image">
                    </a>
                    <div class="imageinfo">
                        <h2 class="text-center"><a href="img/gallery/03.jpg" class="lightbox_image" title="Image description"> SATURDAY NIGHT LIVE </a></h2>
                        <p class="text-center">Etiam porta sem malesuada magna</p>
                    </div>
                </div>
           </div> -->
        </div>
    </section>
    <!-- End Gallery Section -->


	<section class="tour generic" id="menu-tour" hidden>
        <div class="container">
    
            <!-- Title -->
            <div class="row text-center title">
                <h1>WORLDWIDE <small>Tour</small> Table</h1>
            </div>
            <!-- End Title -->      
        
        	<div class="row">
            	<div class="col-md-12">
                	<ul class="pricing-table">
                    	<li class="header"> <h2>DATE </h2></li>
                        <li><i class="icon-calendar"></i>08/01/2013</li>
                        <li><i class="icon-calendar"></i>15/01/2013</li>
                        <li><i class="icon-calendar"></i>13/02/2013</li>
                        <li><i class="icon-calendar"></i>06/03/2013</li>
                        <li><i class="icon-calendar"></i>08/05/2013</li>
                        <li><i class="icon-calendar"></i>13/07/2013</li>
                        <li><i class="icon-calendar"></i>01/08/2013</li>
                        <li><i class="icon-calendar"></i>25/09/2013</li>
                    </ul>
                    <ul class="pricing-table">
                    	<li class="header"> <h2>Venue </h2></li>
                    	<li><i class="icon-video"></i>House of Blues</li>
                        <li><i class="icon-video"></i>Florida Events Center</li>
                        <li><i class="icon-video"></i>House of Blues</li>
                        <li><i class="icon-video"></i>Bethlehem Events Center</li>
                        <li><i class="icon-video"></i>Township Auditorium</li>
                        <li><i class="icon-video"></i>Club Galaxy Center</li>
                        <li><i class="icon-video"></i>Bethlehem Events Center</li>
                        <li><i class="icon-video"></i>Township Auditorium</li>
                    </ul>
                    <ul class="pricing-table">
                    	<li class="header"> <h2>LOCATION </h2></li>
                    	<li><i class="icon-location"></i>Atlantic City , NJ</li>
                        <li><i class="icon-location"></i>Sayreville , NJ</li>
                        <li><i class="icon-location"></i>Bethlehem , PA</li>
                        <li><i class="icon-location"></i>Bethlehem , PA</li>
                        <li><i class="icon-location"></i>Columbia , SC</li>
                        <li><i class="icon-location"></i>Bethlehem , PA</li>
                        <li><i class="icon-location"></i>Bethlehem , PA</li>
                        <li><i class="icon-location"></i>Sunrise , FL</li>
                    </ul>
                    <ul class="pricing-table">
                    	<li class="header"> <h2>TICKETS </h2></li>
                    	<li> <a href="#myModalticket" data-toggle="modal" class="activated"><i class="icon-basket"></i>Buy Tickets </a></li>
                        <li> <a href="#myModalticket" data-toggle="modal" class="activated"><i class="icon-basket"></i>Buy Tickets </a></li>
                        <li> <a href="#myModalticket" data-toggle="modal" class="activated"><i class="icon-basket"></i>Buy Tickets </a></li>
                        <li> <a href="#myModalticket" data-toggle="modal" class="activated"><i class="icon-basket"></i>Buy Tickets </a></li>
                        <li> <a href="#myModalticket" data-toggle="modal" class="activated"><i class="icon-basket"></i>Buy Tickets </a></li>
                        <li> <a href="#myModalticket" data-toggle="modal"><i class="icon-basket"></i>Sold Out </a></li>
                        <li> <a href="#myModalticket" data-toggle="modal"><i class="icon-basket"></i>Sold Out </a></li>
                        <li> <a href="#myModalticket" data-toggle="modal"><i class="icon-basket"></i>Sold Out </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- Ticket Modal -->
    <div id="myModalticket" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Buy Ticket Now</h3>
        </div>
        <div class="modal-body text-center">
            <p>Buy the theme now and get free support and free update!</p>
            <img src="img/payment.png" alt="payment">
        </div>
        <div class="modal-footer"></div>
    </div>
    
    

	<!-- Video / Accordion Section -->
	<section class="parallax-bg3 parallax clearfix extra generic" hidden>
    	<div class="container">
        	<div class="row">
				    <div class="col-md-6 pull-right">
                        <!-- Accordion -->
                        <div class="accordion" id="accordion">
                            
                            <!-- Accordion item 1 -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <img src="img/plus-icon.png" alt="icon">Living Things - Released: 2013
                                    </a>
                                </div>
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <!--Inner info -->
                                    <div class="accordion-inner">
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <ol>
                                                <li>Rolling In The Deep</li>
                                                <li>Rumour Has It</li>
                                                <li>Turning Tables</li>
                                                <li>Turning Tables</li>
                                                <li>Don’t You Remember</li>
                                                <li>He Won’t Go</li>
                                                <li>He Won’t Go</li>
                                                <li>One and Only</li>
                                            </ol>

                                            </div>
                                            <div class="span6">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                </p>
                                                <p>Download the album from <a href="#"> iTunes </a></p>
                                                <p>Download the album from <a href="#"> Soundcloud </a></p>
                                                <p>Order the album from <a href="#"> Amazon</a ></p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--Inner info -->
                                </div>
                            </div>
                            <!-- End Accordion item 1 -->

                            <!-- Accordion item 2 -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        <img src="img/plus-icon.png" alt="icon"> Living Things - Released: 2009
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <!--Inner info -->
                                    <div class="accordion-inner">
                                        <div class="row-fluid">
                                            <div class="span6">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                </p>
                                                <p>Download the album from <a href="#"> iTunes </a></p>
                                                <p>Download the album from <a href="#"> Soundcloud </a></p>
                                                <p>Order the album from <a href="#"> Amazon</a ></p>
                                            </div>
                                            <div class="span6">
                                                <ol>
                                                    <li>Rolling In The Deep</li>
                                                    <li>Rumour Has It</li>
                                                    <li>Turning Tables</li>
                                                    <li>Turning Tables</li>
                                                    <li>Don’t You Remember</li>
                                                    <li>He Won’t Go</li>
                                                    <li>He Won’t Go</li>
                                                    <li>One and Only</li>
                                                </ol>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--Inner info -->
                                </div>
                            </div>
                            <!-- End Accordion item 2 -->

                            <!-- Accordion item 3 -->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        <img src="img/plus-icon.png" alt="icon"> Living Things - Released: 2009
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <!--Inner info -->
                                    <div class="accordion-inner">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                </p>
                                                <p>Download the album from <a href="#"> iTunes </a></p>
                                                <p>Download the album from <a href="#"> Soundcloud </a></p>
                                                <p>Order the album from <a href="#"> Amazon</a ></p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--Inner info -->
                                </div>
                            </div>
                            <!-- End Accordion item 3 -->

                        </div>
                        <!-- End Accordion -->
                    </div>

                    <div class="col-md-6">
                        <div class="video">
                            <iframe height="335" src="http://player.vimeo.com/video/38101676?title=0&amp;byline=0&amp;portrait=0&amp;color=4584be"></iframe>
                        </div>
                    </div>
            </div>

        </div>
    </section>
	<!-- End Video / Accordion Section -->


	<!-- Videos Section -->
	<section class="videos generic" id="menu-videos">
        <div class="container">
    
            <!-- Title -->
            <div class="row text-center title">
                <h1>Enjoy <small>the band</small> videos </h1>
                <p>to be added</p>
            </div>
            <!-- End Title --> 

            <div class="row">
                <div id="myCarousel" class="carousel slide col-md-12">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    
                    <!-- <div class="active item row">
                        <div class="col-md-3">
                          <a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="iframe">
                            <img src="img/videos/01.jpg" alt="image">
                            <span> <i class="icon-play"></i> </span>
                          </a>  
                        </div>
                        <div class="col-md-3">
                          <a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="iframe">
                            <img src="img/videos/01.jpg" alt="image">
                            <span> <i class="icon-play"></i> </span>
                            </a>  
                        </div>
                        <div class="col-md-3">
                          <a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="iframe">
                            <img src="img/videos/01.jpg" alt="image">
                            <span> <i class="icon-play"></i> </span>
                            </a>  
                        </div>
                        <div class="col-md-3">
                          <a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="iframe">
                            <img src="img/videos/01.jpg" alt="image">
                            <span> <i class="icon-play"></i> </span>
                            </a>  
                        </div>
                        
                    </div>

                    <div class="item row">
                        <div class="col-md-3">
                          <a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="iframe">
                            <img src="img/videos/01.jpg" alt="image">
                            <span> <i class="icon-play"></i> </span>
                            </a>  
                        </div>
                        <div class="col-md-3">
                          <a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="iframe">
                            <img src="img/videos/01.jpg" alt="image">
                            <span> <i class="icon-play"></i> </span>
                            </a>  
                        </div>
                        <div class="col-md-3">
                          <a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="iframe">
                            <img src="img/videos/01.jpg" alt="image">
                            <span> <i class="icon-play"></i> </span>
                            </a>  
                        </div>
                        <div class="col-md-3">
                          <a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="iframe">
                            <img src="img/videos/01.jpg" alt="image">
                            <span> <i class="icon-play"></i> </span>
                            </a>  
                        </div>
                        
                    </div> -->

                  </div>
                  <!-- Carousel nav -->
                  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
            </div>
        </div>
    </section>
	<!-- End Videos Section -->


	<!-- twitter Section -->
	<section class="parallax-bg4 parallax clearfix twitter" id="menu-events">
        <div class="container">
            <!-- Title -->
            <div class="row text-center title">
                <h1>Upcoming <small>events</small></h1>
            </div>
            <!-- <div class="row text-center title">
                <h1>Blog <small> stay up to </small> date</h1>
            </div>             -->
            <!-- End Title -->   

            <div class="row">       
            	<!-- <div class="col-md-9">  
                    <h2>Latest News</h2>  
                    
                    <div class="row"> 
                        <article class="post col-md-6">
                            <figure>
                                <img src="img/blog/blog-01.jpg" alt="image" />
                            </figure>
                            <h3><a href="#"> Dreaming With Us All Night </a></h3>
                            <div class="post-meta">
                                <a href="#" title="Posts by author"><i class="icon-user"></i> Author</a>
                                <a href="#" title="Posts by author"><i class="icon-clock"></i> Feb 19, 2013</a>
                                <a href="#" title="Posts by author"><i class="icon-doc-text"></i> Image, Music</a>
                                <a href="#" title="Posts by author"><i class="icon-comment"></i> 5 Comments</a>
                            </div>
                            <p>Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam aliquam quaerat voluptatemem ipsum dolor...                                                                                                    
                            </p>
                        </article>
        
                        <article class="post col-md-6">
                            <figure>
                                <img src="img/blog/blog-01.jpg" alt="image" />
                            </figure>
                            <h3><a href="#"> Dreaming With Us All Night </a></h3>
                            <div class="post-meta">
                                <a href="#" title="Posts by author"><i class="icon-user"></i> Author</a>
                                <a href="#" title="Posts by author"><i class="icon-clock"></i> Feb 19, 2013</a>
                                <a href="#" title="Posts by author"><i class="icon-doc-text"></i> Post, Party</a>
                                <a href="#" title="Posts by author"><i class="icon-comment"></i> 5 Comments</a>
                            </div>
                            <p>Consectetur adipisci. Belit, sed quia non numqexercitationem ullam. Corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit 
                            Fusce euismod consequat ante. Lorem ipsum dolor...                                                                                                    
                            </p>
                        </article>
                    </div>
                        
                    <div class="row"> 
                        <article class="post col-md-6">
                            <iframe height="166" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F108238606&amp;color=000000&amp;auto_play=false&amp;show_artwork=true"></iframe>
                            <h3><a href="#"> Dreaming With Us All Night </a></h3>
                            <div class="post-meta">
                                <a href="#" title="Posts by author"><i class="icon-user"></i> Author</a>
                                <a href="#" title="Posts by author"><i class="icon-clock"></i> Feb 19, 2013</a>
                                <a href="#" title="Posts by author"><i class="icon-doc-text"></i> Image, Music</a>
                                <a href="#" title="Posts by author"><i class="icon-comment"></i> 5 Comments</a>
                            </div>
                            <p>Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam aliquam quaerat voluptatemem ipsum dolor...                                                                                                    
                            </p>
                        </article>
        
                        <article class="post col-md-6">
                            <iframe height="166" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F108238606&amp;color=000000&amp;auto_play=false&amp;show_artwork=true"></iframe>
                            <h3><a href="#"> Dreaming With Us All Night </a></h3>
                            <div class="post-meta">
                                <a href="#" title="Posts by author"><i class="icon-user"></i> Author</a>
                                <a href="#" title="Posts by author"><i class="icon-clock"></i> Feb 19, 2013</a>
                                <a href="#" title="Posts by author"><i class="icon-doc-text"></i> Post, Party</a>
                                <a href="#" title="Posts by author"><i class="icon-comment"></i> 5 Comments</a>
                            </div>
                            <p>Consectetur adipisci. Belit, sed quia non numqexercitationem ullam. Corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit 
                            Fusce euismod consequat ante. Lorem ipsum dolor...                                                                                                    
                            </p>
                        </article>
                    </div> -->

                    <!-- <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn ctablog"> Read all the news at our Blog </a>
                        </div>
                    </div>
                </div>   -->
                 <br>  
                <div class="col-md-10">
                    <!-- <h2>Upcoming events</h2> -->
                    <ul class="tour-dates">
                        
                        <!-- <li class="einfo col-md-10">                      
                            <div class="post-date">22 Jun</div>
                            <div class="post-meta-more">
                                <h3>THE STAGE BY TWO MORE BEERS</h3>
                                <p><a href="https://www.google.com/maps?output=search&q=ka%C4%BC%C4%B7u+iela+17&entry=mc&sa=X&ved=2ahUKEwilsJnQ_cn_AhXCmYsKHdliDNMQ0pQJegQIDBAB"
                                    class="no-highlight">Kaļķu 17, Rīga</a> </p>
                                <a href="https://www.facebook.com/TheStageBy2MB" data-toggle="modal" class="btn"><i></i>More info </a>
                            </div>
                        </li> -->
                        
                        <li class="einfo col-md-10">                      
                            <div class="post-date">1 Jul 19:00</div>
                            <div class="post-meta-more">
                                <h3>Doma dārzs</h3>
                                <p><a href="https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462"
                                    class="no-highlight">Doma laukums, Rīga</a></p>
                                <a href="https://www.facebook.com/DOMADARZS/" data-toggle="modal" class="btn"><i></i>More info </a>
                            </div>
                        </li>
                        <li class="einfo col-md-10">                      
                            <div class="post-date">8 Jul 19:00</div>
                            <div class="post-meta-more">
                                <h3>Doma dārzs</h3>
                                <p><a href="https://www.google.com/maps/dir/?api=1&destination=56.949409719132%2C24.106149673462"
                                    class="no-highlight">Doma laukums, Rīga</a></p>
                                <a href="https://www.facebook.com/DOMADARZS/" data-toggle="modal" class="btn"><i></i>More info </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>             
        </div>
    	<!-- <div class="container">
            <div class="row text-center title">
                <h1>Contacts</h1>
            </div>
        	<div class="row text-center" >
                <i class="icon-twitter icon-2x" ></i>
                <h3 class="username" ></h3>
                <p class="tweet twitterfeed">                    
                </p>
                <p class="date"></p>
            </div>
        </div> -->
    </section>
	<!-- End twitter Section -->

    
    <footer>
        <div class="container" id="contacts">
            <div class="row text-center title">
                <h1>Contacts</h1>
            </div><br><br><br>
        	<div class="row">
            	<div class="col-md-3" >
                	<i class="icon-mobile"></i>
                    <p>+371 29 104 420</p>
                </div>
                <div class="col-md-3">
                	<i class="icon-mail"></i>
                    <p>vidizain@inbox.lv</p>
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-12 copyright">
            		<h6>©2013 Monkey Music Band. All rights reserved.</h6>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" class="scrollup"><i class="icon-up-open"></i></a>         


	<!-- ======================= JQuery libs =========================== -->
        <script type="text/javascript" src="js/jquery.1.8.2.js"></script>      
        <!-- Bootstrap -->
        <script src="js/bootstrap/bootstrap.js" type="text/javascript"></script>

		<!-- Parallax -->
		<script src="js/parallax.js" type="text/javascript"></script>
        
        <!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        
        <!-- Twitter -->    
        <script src="twitter/jquery.tweet.min.js" type="text/javascript"></script> 
        
        <!--Scroll To-->         
        <script src="js/nav/jquery.scrollTo.js"></script> 
        <script src="js/nav/jquery.nav.js"></script> 

         <!-- Gmaps -->
        <script src="http://maps.google.com/maps/api/js?sensor=true" ></script>
        <script src="js/gmaps.js" ></script>

        <!-- Fancybox lightbox -->
        <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>

        <!-- Video Responsive-->
        <script src="js/jquery.fitvids.min.js" type="text/javascript"></script>
        <script src="js/jquery.placeholder.min.js" type="text/javascript"></script>

        <!-- Custom -->
        <script type="text/javascript" src="js/jquery-func.js"></script>
	<!-- ======================= End JQuery libs ======================= -->
	    
    
    


</body>
</html>