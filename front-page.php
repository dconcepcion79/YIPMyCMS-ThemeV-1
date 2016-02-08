<?php
/*
Template Name: Home
*/
get_header();
?>
 <!-- Intro Section -->
        <section id="home" class="slider-section">
            <div class="overlay">
                <video class="text-center" muted autoplay loop poster="<?php echo get_template_directory_uri().'/assets/videos/Explore-HD.png'?>" >
                    <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
                    <source type="video/webm" src="<?php echo get_template_directory_uri().'/assets/videos/Explore-HD.webm' ?>">
                    <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                    <source type="video/mp4" src="<?php echo get_template_directory_uri().'/assets/videos/Explore-HD.mp4' ?>">
                    <?php _e('Your browser does not support the video tag.','yiptv'); ?>
                </video>

                <div class="carousel-caption">
                    <h1><?php _e('WATCH <span>LIVE TV FROM AROUND THE WORLD','yiptv'); ?></span></h1>
                    <p><?php _e('Includes 17 high-Quality Channels-No Credit Card Required','yiptv'); ?></p>
                    <a class="btn page-scroll" href="#"><?php _e('JOIN FREE','yiptv'); ?></a>
                </div>

            </div>
        </section> <!-- /#home -->


        <!-- Creative Section -->
        <section class="creative-section">
            <div class="container">
                <div class="service-tab">
                  <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active col-xs-3">
                            <a href="#web-design" role="tab" data-toggle="tab">
                                <i class="flaticon-computer236"></i>
                                <span><?php _e('Watch Free Live TV Channels','yiptv'); ?></span>
                            </a>
                        </li>

                        <li class="col-xs-3">
                            <a href="#apps-design" role="tab" data-toggle="tab">
                                <i class="flaticon-technology25"></i>
                                <span><?php _e('Premium Membership','yiptv'); ?></span>
                            </a>
                        </li>

                        <li class="col-xs-3">
                            <a href="#game-design" role="tab" data-toggle="tab">
                                <i class="flaticon-game84"></i>
                                <span><?php _e('Login/Watch Now','yiptv'); ?></span>
                            </a>
                        </li>

                        <li class="col-xs-3">
                            <a href="#creative-ideas" role="tab" data-toggle="tab">
                                <i class="flaticon-light110"></i>
                                <span><?php _e('Join Free','yiptv'); ?></span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- tab content for web design -->
                        <div class="row tab-pane fade in active" id="web-design">
                            <div class="col-sm-6">
                                <h2><?php _e('Free Membership','yiptv'); ?></h2>
                                <p><?php _e('No credit card required! just entere your email and add a password: View 17 Live
                                international <strong>Channels</strong> Plus 9 free additonal premium <strong>Channels</strong>
                                for the first 7 days. Watch up to two devices','yiptv'); ?></p>
                                <a href="#" class="btn btn-primary"><i class="fa fa-long-arrow-right"></i><?php _e('Join Today!','yiptv'); ?></a>
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="mac-screenshot">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri().'/assets/images/homepagebanner1.png' ?>" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- tab content for application design -->
                        <div class="row tab-pane fade" id="apps-design">
                            <div class="col-sm-6">
                                <h2><?php _e('All Memberships Include:','yiptv'); ?></h2>
                                <p><?php _e('High quality video | Contract? Never? | Start watching right away (no extra gadgets )
                                Free Android & iTunes apps | Unlimited viewing-watch as much as you like | Great
                                customer care! Call us: 855-919-4788','yiptv'); ?></p>
                                <a href="#" class="btn btn-primary"><i class="fa fa-long-arrow-right"></i><?php _e('Join Today!','yiptv'); ?></a>
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="mac-screenshot">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri().'/assets/images/premium.png' ?>" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- tab content for game design -->
                        <div class="row tab-pane fade" id="game-design">
                            <div class="col-sm-6">
                                <h2><?php _e('Free Live TV? How Does That Work?','yiptv'); ?></h2>
                                <p><?php _e("Yip TV's stream uses the Internet and works on broadband, Wi-Fi, 3G, 4G and LTE connections
                                to deliver internation television, here in the U.S. We offer LIVE TV in Spanish and English on 
                                more than <strong>70 international channels</strong> that include sports, movies news and 
                                entertainment. With our free TV app and your Internet connetion, you are on your way to LIVE internet
                                TV experience that goes whereever you go. You can even pause LIVE TV an miss nothing because YipTV
                                is doing the streaming!","yiptv"); ?></p>
                                <a href="#" class="btn btn-primary"><i class="fa fa-long-arrow-right"></i><?php _e('Join Today','yiptv'); ?></a>
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="mac-screenshot">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri().'/assets/images/upgradepremium.jpg'?>" alt="">
                                </div>
                            </div>
                        </div>

                        <!-- tab content for creative idea -->
                        <div class="row tab-pane fade" id="creative-ideas">
                            <div class="col-sm-6">
                                <h2><?php _e('What To Watch On YIPTV','yiptv'); ?></h2>
                                <p><?php _e('Do You want <strong>LIVE TV</strong> coverange of your favorite international soccer teams
                                throughout the entire competition? How about important late breaking news from your hometown?
                                With YipTV you can! Watch LIVE sports, LIVE entertainment, comedy shows, lifestyle channels, movies
                                and more. YipTV brings LIVE TV right to your high digital video quality so is like you are right there, in on the action!','yiptv'); ?></p>
                                <a href="#" class="btn btn-primary"><i class="fa fa-long-arrow-right"></i><?php _e('Join Today','yiptv'); ?></a>
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="mac-screenshot">
                                    <img class="img-responsive" src="<?php echo get_template_directory_uri().'/assets/images/joinfree.png'?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.tab-content -->
                </div> <!-- /.service-tab -->
            </div><!-- /.container -->
        </section><!-- /.creative-section -->


        <!-- Recent Project Section -->
        <section class="recent-project-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="section-title"><?php _e('Watch Free Live TV Channels','yiptv'); ?></h2>
                        <p class="sub-title"><strong><?php _e('CALL US TOLL FREE: 855-919-4788','yiptv'); ?></strong></p>
                    </div><!-- /.col-xs-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->

            <div class="project-container">

            <div class="owl-carousel owl-theme recent-project-carousel">
              <div class="item recent-project">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/works/sports.jpg' ?>" alt="">
                <div class="project-info">
                    <h3><?php _e('SPORTS','yiptv'); ?></h3>
                    <ul class="project-meta">
                        <li><a href="#"><?php _e('With FREE online sports','yiptv'); ?></a></li>
                        <li><a href="#"><i class="fa fa-heart"></i><?php _e('Score Final Channel','yiptv'); ?></a></li>
                    </ul>
                </div><!-- /.project-info -->
                <div class="full-project">
                    <a href="single-project.html"><?php _e('View Channel','yiptv'); ?> <i class="fa fa-long-arrow-right"></i></a>
                </div><!-- /.full-project -->
              </div><!-- /.recent-project -->

              <div class="item recent-project">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/works/movies.png' ?>" alt="">
                <div class="project-info">
                    <h3><?php _e('MOVIES','yiptv'); ?></h3>
                    <ul class="project-meta">
                        <li><a href="#"><?php _e('Watch international films','yiptv'); ?></a></li>
                        <li><a href="#"><i class="fa fa-heart"></i><?php _e('Score Final','yiptv'); ?></a></li>
                    </ul>
                </div><!-- /.project-info -->
                <div class="full-project">
                    <a href="single-project.html"><?php _e('View Channel','yiptv'); ?> <i class="fa fa-long-arrow-right"></i></a>
                </div><!-- /.full-project -->
              </div><!-- /.recent-project -->

              <div class="item recent-project">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/works/entertainment.png' ?>" alt="">
                <div class="project-info">
                    <h3><?php _e('ENTERTAINMENT','yiptv'); ?></h3>
                    <ul class="project-meta">
                        <li><a href="#"><?php _e('Channel','yiptv'); ?></a></li>
                        <li><a href="#"><i class="fa fa-heart"></i><?php _e('Grand Hotel','yiptv'); ?></a></li>
                    </ul>
                </div><!-- /.project-info -->
                <div class="full-project">
                    <a href="single-project.html"> <?php _e('View Channel','yiptv'); ?><i class="fa fa-long-arrow-right"></i></a>
                </div><!-- /.full-project -->
              </div><!-- /.recent-project -->

              <div class="item recent-project">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/works/news.jpg' ?>" alt="">
                <div class="project-info">
                    <h3><?php _e('NEWS','yiptv'); ?></h3>
                    <ul class="project-meta">
                        <li><a href="#"><?php _e('Find out what\'s going on back home','yiptv'); ?></a></li>
                        <li><a href="#"><i class="fa fa-heart"></i><?php _e(' Todo Para La Mujer','yiptv'); ?></a></li>
                    </ul>
                </div><!-- /.project-info -->
                <div class="full-project">
                    <a href="single-project.html"><?php _e('View Channel','yiptv'); ?> <i class="fa fa-long-arrow-right"></i></a>
                </div><!-- /.full-project -->
              </div><!-- /.recent-project -->

              <div class="item recent-project">
               <img src="<?php echo get_template_directory_uri() .'/assets/images/works/joinfree.png' ?>" alt="">
                <div class="project-info">
                    <h3><?php _e('JOIN Free','yiptv'); ?></h3>
                    <ul class="project-meta">
                        <li><a href="#"><?php _e('View Channel Lineup','yiptv'); ?></a></li>
                        <li><a href="#"><i class="fa fa-heart"></i> </a></li>
                    </ul>
                </div><!-- /.project-info -->
                <div class="full-project">
                    <a href="single-project.html"><?php _e('It\'s Free','yiptv'); ?> <i class="fa fa-long-arrow-right"></i></a>
                </div><!-- /.full-project -->
              </div><!-- /.recent-project -->

              <div class="item recent-project">
                <img src="<?php echo get_template_directory_uri() .'/assets/images/works/channellineup.png' ?>" alt="">
                <div class="project-info">
                    <h3><?php _e('View Our Complete Channel Lineup','yiptv'); ?></h3>
                    <ul class="project-meta">
                        <li><a href="#"><?php _e('YipTV','yiptv'); ?>'</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i> <?php _e('Join Today!','yiptv'); ?></a></li>
                    </ul>
                </div><!-- /.project-info -->
                <div class="full-project">
                    <a href="single-project.html"><?php _e('It\'s Free','yiptv'); ?> <i class="fa fa-long-arrow-right"></i></a>
                </div><!-- /.full-project -->
              </div><!-- /.recent-project -->

            </div><!-- /.recent-project-carousel -->


            <div class="customNavigation project-navigation text-center">
              <a class="btn-prev"><i class="fa fa-angle-left"></i></a>
              <a class="btn-next"><i class="fa fa-angle-right"></i></a>
            </div>



            </div><!-- /.container-fluid -->
        </section><!-- /.recent-project-section -->


        <!-- Feature Section -->
        <section id="features" class="feature-section section-padding" style="background:url(<?php echo get_theme_mod( 'img1');?>) no-repeat right">
            <div class="container">
                <div class="row">
                
                    <div class="col-xs-12 text-center">
                        <h2 class="section-title"><?php _e('WHAT TO WATCH ON YIPTV','yiptv'); ?></h2>
                        <p class="sub-title"><?php _e('Do you want LIVE TV coverange of your favorite soccer teams throughout the entire completion? How about important late breaking news from your hometown? With YipTV you can! Watch LIVE sports, LIVE entertainment,
                        comedy shows, lifestyle channels, movies and more. YipTV brings LIVE TV right to you in high digital video quality so is like you are right there, in on the action!','yiptv'); ?></p>
                    </div><!-- /.col-xs-12 -->
                </div><!-- /.row -->


                <div class="row row-content">
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-6 col-xs-12 media">
                              <a class="media-left" href="#">
                                <i class="flaticon-document28"></i>
                              </a>
                              <div class="media-body">
                                <h3 class="media-heading"><a href="#"><?php _e('Live streaming','yiptv'); ?></a></h3>
                                <p><?php _e('Spanish and English TV from around the world','yiptv'); ?></p>
                              </div> <!-- /.media-body -->
                            </div> <!-- /.media -->
                            
                            <div class="col-md-12 col-sm-6 col-xs-12 media">
                              <a class="media-left" href="#">
                                <i class="flaticon-pencil112"></i>
                              </a>
                              <div class="media-body">
                                <h3 class="media-heading"><a href="#"><?php _e('Live Sports','yiptv'); ?></a></h3>
                                <p><?php _e('Broadcast channels including soccer, motorsports, boxing and tennis','yiptv'); ?></p>
                                  
                              </div> <!-- /.media-body -->
                            </div> <!-- /.media -->
                            
                            <div class="col-md-12 col-sm-6 col-xs-12 media">
                              <a class="media-left" href="#">
                                <i class="flaticon-newspapers2"></i>
                              </a>
                              <div class="media-body">
                                <h3 class="media-heading"><a href="#"><?php _e('Music','yiptv'); ?></a></h3>
                                <p><?php _e('Watch music videos and celebrity updates','yiptv'); ?></p>
                              </div> <!-- /.media-body -->
                            </div> <!-- /.media -->

                            <div class="col-md-12 col-sm-6 col-xs-12 media">
                              <a class="media-left" href="#">
                                <i class="flaticon-lightbulb24"></i>
                              </a>
                              <div class="media-body">
                                <h3 class="media-heading"><a href="#"><?php _e('Breaking News','yiptv'); ?></a></h3>
                                <p><?php _e('Breaking international news','yiptv'); ?></p>
                              </div> <!-- /.media-body -->
                            </div> <!-- /.media -->
                        </div> <!-- /.row -->
                    </div> <!-- /.col-## -->
                     
                     
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.feature-section -->


        <!-- Call to Action -->
        <section class="cta-one-section section-padding clearfix" style="background:url(<?php echo get_theme_mod( 'img2');?>) no-repeat left">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <h2><span><?php _e('YipTV','yiptv'); ?></span> & <?php _e('Pele','yiptv'); ?></h2>
                        <blockquote><strong><?php _e('"I\'m proud to be working with YipTV and look forward to connecting to a new generation of fans in this new age of digital entertainment"','yiptv'); ?></strong>
</blockquote>
                        <a href="#" class="btn btn-primary"><?php _e('Join Today!','yiptv'); ?></a>
                    </div><!-- /.col-md-9 -->
                
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-one-section -->


        <!-- About Section -->
        <section id="about" class="about-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="section-title"><?php _e('Know More About YipTV','yiptv'); ?></h2>
                        <p class="sub-title"></p>
                    </div><!-- /.col-xs-12 -->
                </div><!-- /.row -->

                <div class="row row-content">
                    <div class="col-sm-6">
                        <div class="about-info">
                            <h2><?php _e('Start Watching Live','yiptv'); ?></h2>
                            <p><?php _e('YipTV\'s Live TV stream uses the Internet and works on broadband, Wi-Fi, 3G, 4G and LTE connections
                            to deliver international television, here in the U.S','yiptv'); ?></p>
                            <p><?php _e('We offer LIVE TV in Spanish and English on more than <strong>70 international channels</strong>
                            that include sports, movies, news and entertainment. With our free TV app and your Internet connection,your are on your way to LIVE Internet TV experience that goes whereever you go. You can even pause LIVE TV and miss nothing because YipTV is doing the streaming!','yiptv'); ?></p>
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.col-sm-6 -->

                    <div class="col-sm-6">

                        <div class="video-wrap">
                            <?php $tpie_live_sports = get_theme_mod( 'textarea' ); 
                  if($tpie_live_sports) {
                    echo $tpie_live_sports;
                 } ?>
                        </div>
                    </div><!-- /.col-sm-6 -->
                </div><!-- /.row -->

                <div class="row row-content">
                    <div class="col-md-5">
                        <div class="creative-skills">
                            <h2><?php _e('Our Most Polular Channels','yiptv'); ?> </h2>

                            <div class="skill-progress">
                              <span class="skill-title"><?php _e('Sports','yiptv'); ?></span>
                              <div class="progress">
                                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" >
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- /.skill-progress -->

                            <div class="skill-progress">
                              <span class="skill-title"><?php _e('News','yiptv'); ?></span>
                              <div class="progress">
                                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" >
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- /.skill-progress -->

                            <div class="skill-progress">
                              <span class="skill-title"><?php _e('Entertainment','yiptv'); ?></span>
                              <div class="progress">
                                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- /.skill-progress -->

                            <div class="skill-progress">
                              <span class="skill-title"><?php _e('Music','yiptv'); ?></span>
                              <div class="progress">
                                <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" >
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- /.skill-progress -->

                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.col-sm-6 -->
                    <div class="col-md-7">
                        <div class="faq-section">
                            <h2><?php _e('FAQ Answers','yiptv'); ?></h2>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <div class="panel panel-default">
                                <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                  <h3 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      <?php _e('Why choose us?','yiptv'); ?>
                                    </a>
                                  </h3>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                    <?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?','yiptv'); ?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading panel-heading-link" role="tab" id="headingTwo">
                                  <h3 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     <?php _e(' What we do?','yiptv'); ?>
                                    </a>
                                  </h3>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                    <?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?','yiptv'); ?>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading panel-heading-link" role="tab" id="headingThree">
                                  <h3 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      <?php _e('How do we work?','yiptv'); ?>
                                    </a>
                                  </h3>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                    <?php _e('Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.','yiptv'); ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div><!-- /.col-sm-6 -->
                    </div><!-- /.col-sm-6 -->
                </div><!-- /.row -->


                <div class="row">
                    <div class="col-md-12 mocup-bg">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() .'/assets/images/jointodayherobanner.png' ?>" alt="pic">
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.about-section -->


        <!-- Counter Section -->
        <section class="counter-section">
            <div class="css-overlay" style="background:url(<?php echo get_theme_mod( 'footer-bg');?>) no-repeat center" >
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-4 counter-wrap">
                          <strong><span class="timer"><?php _e('350','yiptv'); ?></span>+</strong>
                          <span class="count-description"><?php _e('Sports Channels','yiptv'); ?></span>
                        </div> <!-- /.col-sm-4 -->
                        <div class="col-sm-4 counter-wrap selected">
                          <strong><span class="timer"><?php _e('250','yiptv'); ?></span>+</strong>
                          <span class="count-description"><?php _e('News Channels','yiptv'); ?></span>
                        </div><!-- /.col-sm-4 -->
                        <div class="col-sm-4 counter-wrap">
                          <strong><span class="timer"><?php _e('160','yiptv'); ?></span>+</strong>
                          <span class="count-description"><?php _e('Movie Channels','yiptv'); ?></span>
                        </div><!-- /.col-sm-4 -->
                    </div>
                </div><!-- /.container -->
            </div><!-- /.css-overlay -->
        </section><!-- /.counter-section -->


        <!-- Team Section -->
        <section id="team" class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="section-title"><?php _e('Your Family Can Share A Single Premium Membership On Up To 5 Devices','yiptv'); ?></h2>
                        <p class="sub-title"><?php _e('Dad can watch the game on his Smart TV while mom leanrs a new cecipe on the tablet she got for her birthday. While Grandma and Grandpa can keep up with their favorite shows from back home whenever they want. The kids dont\'t need to agree, they can each watch what they like on their own devices.','yiptv'); ?> </p>
                    </div><!-- /.col-xs-12 -->
                </div><!-- /.row -->

                <div class="row row-content">
                    <div class="col-sm-4">
                      <div class="team-member">
                        <div class="team-thumb">
                            <img src="<?php echo get_template_directory_uri() .'/assets/images/team/sports.jpg' ?>" alt="">

                            <div class="member-info text-center">
                                <h3><?php _e('Sports Channels','yiptv'); ?></h3>
                                <span class="title"><?php _e('Bein Sports','yiptv'); ?></span>
                                <ul class="social-link list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- /.member-info -->
                        </div>
                        
                      </div><!-- /.team-member -->
                    </div>
                    <div class="col-sm-4">
                      <div class="team-member">
                        <div class="team-thumb">
                            <img src="<?php echo get_template_directory_uri() .'/assets/images/team/watchlivetv.png' ?>" alt="">

                            <div class="member-info text-center">
                                <h3><?php _e('Wath Live TV On The Go','yiptv'); ?></h3>
                                <span class="title"><?php _e('iOS | Android','yiptv'); ?> </span>
                                <ul class="social-link list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- /.member-info -->
                        </div>
                        
                      </div><!-- /.team-member -->
                    </div>
                    <div class="col-sm-4">
                      <div class="team-member">
                        <div class="team-thumb">
                            <img src="<?php echo get_template_directory_uri() .'/assets/images/team/jointoday.png' ?>" alt="">

                            <div class="member-info text-center">
                                <h3><?php _e('JOIN FREE','yiptv'); ?></h3>
                                <span class="title"><?php _e('Watch LIVE TV','yiptv'); ?></span>
                                <ul class="social-link list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- /.member-info -->
                        </div>
                        
                      </div><!-- /.team-member -->
                    </div>
                </div>
            </div><!-- /.container -->
        </section><!-- /.team-section -->


        <!-- Video Section -->
        <section id="video" class="video-section">
              <video class="text-center" id="videoPlayer" muted loop poster="<?php echo get_template_directory_uri().'/assets/videos/hill.png'?> ">
                <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
                <source type="video/webm" src="<?php echo get_template_directory_uri().'/assets/videos/hill.webm' ?>">
                <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                <source type="video/mp4" src="<?php echo get_template_directory_uri().'/assets/videos/hill.mp4' ?>">
                <?php _e('Your browser does not support the video tag.','yiptv'); ?>
              </video>


              <div class="video-button">
                <a id="playbtn" onclick="vidplay()" href="javascript:void(0);" class="play"><i></i></a>
              </div>
        </section><!--/.video-->


        <!-- Call to Action -->
        <section class="cta-two-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <h2><?php _e('Ready To Join YipTV?','yiptv'); ?></h2>
                        <p><?php _e('Your satisfaction is guaranted','yiptv'); ?></p>
                    </div>
                    <div class="col-sm-3">
                        <a href="#contact" class="page-scroll btn btn-primary"><?php _e('Joing Today!','yiptv'); ?></a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-two-section -->



			<!--CONTENT YET TO BE IMPLEMENTED INTO YIP CMS THEME-->




        <!-- Service Section 
        <section id="services" class="services-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="section-title">What we do?</h2>
                        <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur <br>magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div><!-- /.col-xs-12 --
                </div><!-- /.row 

                <div class="row row-content text-center">
                    <div class="col-md-4 col-sm-6 sbox-gutter">
                        <div class="service-box">
                            <i class="flaticon-certificate3"></i>
                            <h3>Branding &amp; Identity</h3>
                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat</p>
                        </div><!-- /.service-box --
                    </div><!-- /.col-sm-4 

                    <div class="col-md-4 col-sm-6 sbox-gutter">
                        <div class="service-box">
                            <i class="flaticon-smartphone97"></i>
                            <h3>Web design &amp; development</h3>
                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat</p>
                        </div><!-- /.service-box --
                    </div><!-- /.col-sm-4 --

                    <div class="col-md-4 col-sm-6 sbox-gutter">
                        <div class="service-box">
                            <i class="flaticon-cart"></i>
                            <h3>Ecommerce Design</h3>
                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat</p>
                        </div><!-- /.service-box --
                    </div><!-- /.col-sm-4 --

                    <div class="col-md-4 col-sm-6 sbox-gutter">
                        <div class="service-box">
                            <i class="flaticon-paint104"></i>
                            <h3>UI/UX Design</h3>
                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat</p>
                        </div><!-- /.service-box --
                    </div><!-- /.col-sm-4 --

                    <div class="col-md-4 col-sm-6 sbox-gutter">
                        <div class="service-box">
                            <i class="flaticon-light92"></i>
                            <h3>Inovative Idea</h3>
                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat</p>
                        </div><!-- /.service-box --
                    </div><!-- /.col-sm-4 --

                    <div class="col-md-4 col-sm-6 sbox-gutter">
                        <div class="service-box">
                            <i class="flaticon-document171"></i>
                            <h3>PSD to HTML</h3>
                            <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla quis lorem ut libero malesuada feugiat</p>
                        </div><!-- /.service-box --
                    </div><!-- /.col-sm-4 --
                </div><!-- /.row --
            </div><!-- /.container --
        </section><!-- /.services-section 


        <!-- Responsive Action --
        <section class="responsive-preview">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h2>Responsive <span class="big-text">on all devices</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat incididunt ut labore et dolore magna aliqua.</p>

                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem mollit anim piciatis unde omnis iste natus error sit.</p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="responsive-screenshot">
                            <img class="img-responsive" src="assets/images/responsive-tab.png" alt="">
                        </div>
                    </div>
                </div><!-- /.row --
            </div><!-- /.container --
        </section><!-- /.responsive-preview -->


        <!-- Process Section --
        <section class="process-section section-padding">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="process-box">
                            <i class="flaticon-cup7"></i>
                            <h3>Meeting</h3>
                        </div><!-- /.process-box --
                    </div><!-- /.col-xs-2 --

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="process-box">
                            <i class="flaticon-light110"></i>
                            <h3>Planning</h3>
                        </div><!-- /.process-box --
                    </div><!-- /.col-xs-2 --

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="process-box">
                            <i class="flaticon-paint104"></i>
                            <h3>Designing</h3>
                        </div><!-- /.process-box --
                    </div><!-- /.col-xs-2 --

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="process-box">
                            <i class="flaticon-document171"></i>
                            <h3>Developing</h3>
                        </div><!-- /.process-box --
                    </div><!-- /.col-xs-2 --

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="process-box">
                            <i class="flaticon-tool45"></i>
                            <h3>Testing</h3>
                        </div><!-- /.process-box --
                    </div><!-- /.col-xs-2 --

                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <div class="process-box">
                            <i class="flaticon-wrapped4"></i>
                            <h3>Delivary</h3>
                        </div><!-- /.process-box --
                    </div><!-- /.col-xs-2 --
                </div><!-- /.row --
            </div><!-- /.container --
        </section><!-- /.process-section-->


        <!-- Portfolio Section --
        <section id="portfolio" class="portfolio-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="section-title">Our Awesome Works</h2>
                        <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur <br>magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div><!-- /.col-xs-12 --
                </div><!-- /.row --
            </div><!-- /.container --


            <div class="portfolio-container text-center">
                <ul id="filter" class="list-inline">
                    <li class="active" data-group="all">All</li>
                    <li data-group="design">Design</li>
                    <li data-group="web">Web</li>
                    <li data-group="interface">Interface</li>
                    <li data-group="identety">Identity</li>
                </ul>

                <ul id="grid">
                    <li class="portfolio-item" data-groups='["all", "identety", "interface"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-1.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --
                    </li>
                    <li class="portfolio-item" data-groups='["all", "identety", "web"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-2.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --
                    </li>
                    <li class="portfolio-item" data-groups='["all", "interface"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-3.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --                 
                    </li>
                    <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-4.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --

                    </li>
                    <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-5.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --
                    </li>
                    <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-6.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --
                    </li>
                    <li class="portfolio-item" data-groups='["all", "identety", "web"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-7.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --
                    </li><!-- /.portfolio-item --
                    <li class="portfolio-item" data-groups='["all", "design"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-8.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --
                    </li>

                    <li class="portfolio-item" data-groups='["all", "identety", "design"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-1.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --
                    </li>

                    <li class="portfolio-item" data-groups='["all", "design"]'>
                        <div class="portfolio">
                            <div class="tt-overlay"></div>
                            <img class="img-responsive" src="assets/images/works/portfolio-2.jpg" alt="image"> 
                            <div class="portfolio-info">
                                <h3 class="project-title">Portfolio Title</h3>
                                <div class="links">
                                    <a href="single-project.html" class="btn btn-primary">View full Project</a>
                                </div><!-- /.links --
                            </div><!-- /.portfolio-info --
                        </div><!-- /.portfolio --
                    </li>
                </ul>

                <a href="#" class="btn btn-primary view-more">View More</a>

            </div><!-- portfolio-container --
        </section><!-- /.portfolio-section --


        <!-- Testimonial Section --
        <section class="testimonial-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators --
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="assets/images/testimonial/client-1.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="assets/images/testimonial/client-2.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="assets/images/testimonial/client-3.jpg" alt="">
                                </li>
                            </ol>

                            <!-- Carousel Slides / Quotes --
                            <div class="carousel-inner text-center">

                                <!-- Quote 1 -
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2 testimonial-content">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <span class="author">Kris Jegenes, <a href="#">Ventive</a></span>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 --
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2 testimonial-content">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <span class="author">Kris Jegenes, <a href="#">Ventive</a></span>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 --
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2 testimonial-content">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <span class="author">Kris Jegenes, <a href="#">Ventive</a></span>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <!-- Carousel Buttons Next/Prev --
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div><!-- /.col-xs-12 --
                </div><!-- /.row --
            </div><!-- /.container --
        </section><!-- /.partner-section -->


        <!-- Partner Section --
        <section class="partner-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="section-title">Our Happy Customers</h2>
                        <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur <br>magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div><!-- /.col-xs-12 --
                </div><!-- /.row --

                <div class="row row-content text-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme partner-carousel">
                            <div class="item partner-item bwWrapper">
                                <img src="assets/images/partner/partner-1.jpg" alt="">
                            </div>
                            <div class="item partner-item bwWrapper">
                                <img src="assets/images/partner/partner-1.jpg" alt="">
                            </div>
                            <div class="item partner-item bwWrapper">
                                <img src="assets/images/partner/partner-1.jpg" alt="">
                            </div>
                            <div class="item partner-item bwWrapper">
                                <img src="assets/images/partner/partner-1.jpg" alt="">
                            </div>
                            <div class="item partner-item bwWrapper">
                                <img src="assets/images/partner/partner-1.jpg" alt="">
                            </div>
                            <div class="item partner-item bwWrapper">
                                <img src="assets/images/partner/partner-1.jpg" alt="">
                            </div>
                        </div>
                    </div><!-- /.col-xs-12 --
                </div><!-- /.row --
            </div><!-- /.container --
        </section><!-- /.partner-section -->


        <!-- Case Study Section --
        <section class="case-study-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 no-padding">
                        <div class="case-study-left">
                            <h1>Unknown Printer Took a galley of type</h1>
                            <p>Yes, strangely enough we've had a couple of people ask how they can contact us. So if you're interested in discussing project ..........</p>
                            <a href="#" class="btn btn-primary btn-lg">Learn more</a>
                        </div><!-- /.left-section --
                    </div><!-- /.col-sm-6 --
                    <div class="col-sm-6 no-padding">
                        <div class="case-study-right">
                            <h1>Unknown Printer Took a galley of type</h1>
                            <p>Yes, strangely enough we've had a couple of people ask how they can contact us. So if you're interested in discussing project ..........</p>
                            <a href="#" class="btn btn-primary btn-lg">Learn more</a>
                        </div><!-- /.left-section --
                    </div><!-- /.col-sm-6 --

                </div><!-- /.row --
            </div><!-- /.container --
        </section><!-- /.case-study-section -->


        <!-- map-section --
        <section class="map-section">
            <div id="myMap"></div>
        </section><!-- /.map-section --

        <!-- Contact Section --
        <section id="contact" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2 class="section-title">Need Help or Any Project?</h2>
                        <p class="sub-title">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur <br>magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div><!-- /.col-xs-12 --
                </div><!-- /.row --


                <div class="row margin-top-50">
                    <div class="col-xs-12 text-center">
                        <form name="contact-form" id="contactForm" action="sendemail.php" method="POST">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="sr-only" for="name">Name</label>
                                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="sr-only" for="email">Email</label>
                                      <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                      <label class="sr-only" for="subject">Project</label>
                                      <input type="text" name="subject" class="form-control" id="subject" placeholder="Your Project">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <label class="sr-only" for="message">Message</label>
                              <textarea name="message" class="form-control" id="message" rows="7" placeholder="Your Message"></textarea>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div><!-- /.col-xs-12 -->
                </div><!-- /.row -->



            </div><!-- /.container -->
        </section><!-- /.contact-section -->

<?php
get_footer();

?>