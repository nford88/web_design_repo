<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Projects' clonable='1'>
    <cms:editable name="main_image" type='image'> </cms:editable>
    <cms:editable name="main_content" type='richtext'> </cms:editable>
        <cms:repeatable name="skills">
            <cms:editable name="skills_tag" type='text'> </cms:editable>
        </cms:repeatable>
        
            <cms:editable name="web_address" type='text'> </cms:editable>
            <cms:editable name="github_address" type='text'> </cms:editable>
        
</cms:template>

<!DOCTYPE html>
<head>
    <title>Nick Ford - Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,300,700,800' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="../image/icp" href="images/favicon.ico"/>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

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
            <a class="navbar-brand" href="<cms:link masterpage='index.php'/>">NICK<strong>FORD</strong></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
                <li><a href="<cms:link masterpage='index.php'/>index.php#about">About</a></li>
                <li><a href="<cms:link masterpage='index.php'/>index.php#portfolio">Projects</a></li>
                <li><a href="<cms:link masterpage='index.php'/>index.php#skills">Skills</a></li>
                <li><a href="<cms:link masterpage='index.php'/>index.php#contact">Contact</a></li>
                <li><a href="../blog.html">Blog</a></li>
         </ul>  
        </div><!-- /.navbar-collapse -->
      </div> <!-- /.container-fluid -->
    </nav>
</div>

 <cms:if k_is_page >
 <div class="bottom-wrapper anchor">

    <div class="section blue-bg">
        <div class="section-content">

            <div class="title">
                <h1><a href="<cms:show k_page_link />" style="color: inherit;"><cms:show k_page_title /></a></h1>
            </div>

            <div class="content">
                <div class="dual-col img-col">
                    <img src="<cms:show main_image />">
                </div>

                <div class="dual-col img-col">
                    <cms:show_repeatable 'skills'>
                        <div class="tag"><cms:show skills_tag /></div>
                    </cms:show_repeatable>
                </div>
            </div> 
        </div>
    </div><!-- ./sect end -->


    <div class="section white-bg">
        <div class="section-content">

            <div class="title">
                <h1>About</h1>
            </div>
            <div class="content content-piece">
                <div class="sub-cont" >
                   <cms:show main_content /> 
               </div>

                
                <div id="social">
                    <cms:if "<cms:not_empty web_address />">
                        <a target="_blank" href="<cms:show web_address />" class="btn-rounded-blue"><i class="fa fa-globe"></i></a>
                    </cms:if>
                    <cms:if "<cms:not_empty github_address />">
                        <a target="_blank" href="<cms:show github_address />" class="btn-rounded-blue"><i class="fa fa-github"></i></a>
                    </cms:if>
                </div>
                

           </div>
       </div>
   </div><!-- ./sect end -->


    <div class="section white-bg">
        <div class="section-content">
            <div class="content" id="contact">
                <div>
                    <h2 class="email">
                    </h2><br/>



                    <div id="social">
                        <a target="_blank" href="mailto:nford.work@gmail.com" class="btn-rounded-blue"><i class="fa fa-envelope-o"></i></a>
                        <a target="_blank" href="https://github.com/nford88" class="btn-rounded-blue"><i class="fa fa-github"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/in/nickford2" class="btn-rounded-blue"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div><!-- ./contact -->
        </div>
    </div><!-- ./sect end -->

    <div class="footer section anchor">
        <div class="section-content">
            <a href="index.html"><p>NICK<strong>FORD</strong></p></a>
        </div>
    </div><!-- ./about -->

</div><!-- bottom wrapper end -->



<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<cms:else />
    <h1>Invalid Page</h1>
 </cms:if> 
<?php COUCH::invoke(); ?>