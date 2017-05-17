<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Projects' clonable='1'>
<cms:editable name="title_content" type='richtext'> </cms:editable>
<cms:editable name="main_content" type='richtext'> </cms:editable>
</cms:template>

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
            <a class="navbar-brand" href="index.html">NICK<strong>FORD</strong></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html#about">About</a></li>
            <li><a href="index.html#portfolio">Portfolio</a></li>
            <li><a href="index.html#skills">Skills</a></li>
            <li><a href="index.html#contact">Contact</a></li>
            <li><a href="blog.html">Blog</a></li>
        </ul>  
    </div><!-- /.navbar-collapse -->
</div> <!-- /.container-fluid -->
</nav>
</div>

<div class="bottom-wrapper anchor">
    <div class="section blue-bg">
        <div class="section-content">

            <div class="title">
                <h1><cms:show title_content /></h1>
            </div>
        </div>
    </div>


    <div class="section white-bg">
        <div class="section-content">
            <div class="title">
                <h1>About</h1>
            </div>

            <div class="content content-piece">
                <div class="sub-cont" >
                 <cms:show main_content /> 
             </div>
         </div>

     </div>
 </div>
</div>





<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php COUCH::invoke(); ?>