<?php require_once( 'couch/cms.php' ); ?>

<!DOCTYPE html>
<head>
    <title>Nick Ford - Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,300,700,800' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="../image/icp" href="images/favicon.ico"/>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
    
<body>

    <div class="wrapper">
        <nav class="navbar navbar-default">
          <div class="nav-section">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">NICK<strong>FORD</strong></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="blog.html">Blog</a></li>
            </ul>  
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.container-fluid -->
</nav>
</div>

<div class="bottom-wrapper">
    <div class="main-section">
        <div class="section-content">
            <h1>WEB DEVELOPER</h1>
            <div class="small">
                <br><em>Dublin, Ireland</em>
            </div>
            <p>Tackling the world's problems one line of code at a time</p>
            <div id="social">
                <a target="_blank" href="mailto:nford.work@gmail.com" class="btn-rounded-white"><i class="fa fa-envelope-o"></i></a>
                <a target="_blank" href="NickFordDevCV250517.pdf" class="btn-rounded-white"><i class="fa fa-file-o"></i></a>
                <a target="_blank" href="https://github.com/nford88" class="btn-rounded-white"><i class="fa fa-github"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/nickford2" class="btn-rounded-white"><i class="fa fa-linkedin">
                    
                </i></a>
            </div>
        </div>
    </div><!-- ./main -->

    <div class="section white-bg anchor" id="about">
        <div class="section-content">
            <div class="title">
                <h1>About</h1>
                <!--    ID for testing purposes, to be removed before deployment -->
                <i id="fa-icons" class=" fa fa-user-o" aria-hidden="true"></i>
            </div>
            <div class="content">
                
                <h2 class="about-title">What I say...</h2>

                <p> I'm Nick, a junior full stack developer and always keen to learn new things to make your product great. I like challenges, so don't worry if your requirements are niche. I've worked on several freelance projects but particularly looking torwards contract or permenant work at present. Originally from the UK but now <s>hiding</s> residing in Dublin.<br/> 
                

                
                <h2 class="about-title-padd">What they say...</h2>

                <div class="dual-col img-col logo">
                    <a target="_blank" href="http://www.agassociates.ie/">
                        <img src="images/logo_ag.png">
                    </a>
                    <div class="quote">
                        <p>Angela Garvey, Managing Director</p>
                        <p>"Nick worked on our inernal timesheet tracking system for AG Associates. We have a team of nine staff and timesheet tracking is essential and core to our business. He listened to our niche specifications and provided us with excellent feedback on the best way to achieve our product, even down to the details of hosting and security. We found Nick to be very helpful, extremely proactive and excellent to deal with throughout"</p>
                    </div>
                </div>
                <div class="dual-col img-col logo">
                    <a target="_blank" href="http://www.novabroadband.ie/">
                        <img src="http://www.novabroadband.ie/wp-content/uploads/2016/08/V1-Nova-Master-Logo-variation-s-01-uai-1440x425.png">
                    </a>
                    <div class="quote">
                        <p>Dave McDonald, CEO</p>
                        <p>"Nick was a breeze to deal with in our most recent project at Nova. We needed a new UI for one of our in-house monitoring programs and he didn't let us down. Quickly responsive by email, he also arranged voice and web conferences for the times we needed to involve other team members. Will certainly be working with him again in the near future"</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ./section-contents -->
</div><!-- ./about -->

<div class="section blue-bg anchor" id="portfolio" style="border-bottom: 1px solid #eee;">
    <div class="section-content wow fadeInUp">
        <div class="title">
            <h1>MY WORKS</h1>
            <img src="images/computer.png" width="40px" alt="computer icon">
        </div>


        <div class="content">

            <div>
             <cms:pages masterpage='projects.php' >
                <div class="dual-col img-col">
                    <a href="<cms:show k_page_link />"><img src="<cms:show main_image />"></a>
                    <h2><cms:show k_page_title /></h2>
                    <cms:show_repeatable 'skills'>
                        <div class="tag"><cms:show skills_tag /></div>
                    </cms:show_repeatable>
                </div>
            </cms:pages>
            </div>
        </div>
    </div>
</div><!-- ./my portfolio -->



<div class="section white-bg anchor" id="skills">
    <div class="section-content">
        <div class="title">
            <h1>Skills</h1>
            <img src="images/skill-icon.png" width="40px" alt="skill icon">
        </div>

        <div class="content">
            <div>
                <div class="dual-col">
                    <h2>CSS</h2>
                    <div class="w3-progress-container">
                        <div class="w3-progressbar" style="width:75%"></div>
                    </div>
                </div>

                <div class="dual-col">
                    <h2>HTML</h2>
                    <div class="w3-progress-container">
                        <div class="w3-progressbar" style="width:80%"></div>
                    </div>
                </div>

                <div class="dual-col">
                    <h2>Javascript</h2>
                    <div class="w3-progress-container">
                        <div class="w3-progressbar" style="width:70%"></div>
                    </div>
                </div>

                <div class="dual-col">
                    <h2>jQuery</h2>
                    <div class="w3-progress-container">
                        <div class="w3-progressbar" style="width:60%"></div>
                    </div>
                </div>

                <div class="dual-col">
                    <h2>PHP</h2>
                    <div class="w3-progress-container">
                        <div class="w3-progressbar" style="width:60%"></div>
                    </div>
                </div>

                <div class="dual-col">
                    <h2>Python</h2>
                    <div class="w3-progress-container">
                        <div class="w3-progressbar" style="width:60%"></div>
                    </div>
                </div>

                <div class="dual-col">
                    <h2>Adobe Creative Suite</h2>
                    <div class="w3-progress-container">
                        <div class="w3-progressbar" style="width:70%"></div>
                    </div>
                </div>

                <div class="dual-col">
                    <h2>WordPress</h2>
                    <div class="w3-progress-container">
                        <div class="w3-progressbar" style="width:50%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- ./skills -->

    <!--     <div class="section blue-bg">
            <div class="section-content">
                <div class="title">
                    <h1>Experience</h1>
                    <img src="images/exp-icon.png" width="40px" alt="experience icon">
                </div>

                <div class="content">
                    <div>
                        <div class="box">
                            <h2>StyleTribute</h2>
                            <a target="_blank" href="http://styletribute.com"><img src="images/link.svg"></a>
                            <div class="small">May 2016 - Present</div>
                            <p>Front-End Engineer</p>
                        </div>
                        <div class="box">
                            <h2>Tueetor</h2>
                            <a target="_blank" href="https://tueetor.com/"><img src="images/link.svg"></a>
                            <div class="small">January 2017 - Present</div>
                            <p>Front-End Engineer</p>
                        </div>
                        <div class="box">
                            <h2>Jarvis Industries</h2>
                            <a target="_blank" href="http://www.jarvisind.com/"><img src="images/link.svg"></a>
                            <div class="small">May 2016 - November 2016</div>
                            <p>Web Developer</p>
                        </div>
                        <div class="box">
                            <h2>Tate & Tonic</h2>
                            <a target="_blank" href="http://tatetonic.com/"><img src="images/link.svg"></a>
                            <div class="small">May 2015 - July 2015</div>
                            <p>Web Design Intern</p>
                        </div>
                        <div class="box">
                            <h2>HCL Technologies</h2>
                            <div class="small">April 2014 - July 2014</div>
                            <p>UI Designer</p>
                        </div>
                        <div class="box">
                            <h2>Bombfell</h2>
                            <a target="_blank" href="http://bombfell.com/"><img src="images/link.svg"></a>
                            <div class="small">June 2013 - Octorber 2013</div>
                            <p>Media Design Intern</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->   <!-- ./experience -->

        <div class="section blue-bg anchor">
            <div class="section-content">
                <div class="title">
                    <h1>Education</h1>
                    <img src="images/education-icon.png" width="40px" alt="motarboard icon">
                </div>

                <div class="content">
                    <div>
                        <div class="small">2017 (Expected)</div>
                        <h2>BSci. in Digital Technology and Design</h2>
                        <p>Dublin Institute of Tecnhology, Ireland</p>
                        <br/><br/>
                        <div class="small">2011</div>
                        <h2>BArts in Sociology and Social Policy</h2>
                        <p>University of Leeds, UK</p>
                    </div>
                </div>
            </div>
        </div><!-- ./education -->

        <div class="section white-bg anchor">
            <div class="section-content">
                <div class="title">
                    <h1>LET'S TALK</h1>
                    <div class="small">UK/Ireland</div>
                    <!-- <i id="fa-icons" class=" fa fa-comments-o" aria-hidden="true" font-size="2em"  alt="mail icon"></i> -->
                </div>

                <div class="content" id="contact">
                    <div>
                        <h2 class="email">
                        </h2><br/>
                        <div id="social">
                            <a target="_blank" href="mailto:nford.work@gmail.com" class="btn-rounded-blue"><i class="fa fa-envelope-o"></i></a>
                            <a target="_blank" href="NickFordDevCV250517.pdf" class="btn-rounded-blue"><i class="fa fa-file-o"></i></a>
                            <a target="_blank" href="https://github.com/nford88" class="btn-rounded-blue"><i class="fa fa-github"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/in/nickford2" class="btn-rounded-blue"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ./contact -->

        <div class="footer section anchor">
            <div class="section-content">
                <a href="index.html"><p>NICK<strong>FORD</strong></p></a>
            </div>
        </div><!-- ./about -->

    </div><!-- ./bottom-wrapper -->

</body>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>


</html>
<?php COUCH::invoke(); ?>