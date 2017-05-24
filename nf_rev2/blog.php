<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Blog' clonable='1' commentable='1'>
<cms:editable name='blog_content' type='richtext' />
        <cms:repeatable name='my_blog_images'>
               <cms:editable type='image' name='blog_image' label='Photo' />
        </cms:repeatable>

<cms:folder name="brewing" title="Brewing" />
<cms:folder name="programming" title="Programming" />
<cms:folder name="pi-arduino" title="RasPi - Arduino" />
<cms:folder name="web-dev" title="Web Dev" />    
</cms:template>

<cms:if k_is_page >
<!DOCTYPE html>
<head>
    <title>Nick Ford - Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,300,700,800' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="../image/icp" href="images/favicon.ico"/>
    <link href="http://www.nick-ford.com/dev/css/style.css" rel="stylesheet">
    <link href="http://www.nick-ford.com/dev/css/font-awesome.min.css" rel="stylesheet" >

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
        <div class="section-content no-bott-pad blog-header">
            <div class="title">
                <h1>Blog</h1>
            </div> 


<!--             <div class="content">
                <div>
                </div> -->

            </div>     
        </div>
    </div>

    <div class="section white-bg anchor">

        <div class="section-content">
            <div class="title" id="blog-title">
                <h1><a style="color: inherit;" href="<cms:show k_page_link />"><cms:show k_page_title /></a></h1>
                <cms:if k_page_foldertitle >
                    <cms:set my_category=k_page_foldertitle />
                        <cms:else />
                    <cms:set my_category='Uncategorised' />
                </cms:if>  
                <span class="tag"><cms:show my_category /></span>
                <span class="tag"><cms:date k_page_date format='jS M, y'/></span>
            </div>

            <div class="content content-piece" id="blog-content-large">
                <div class="sub-cont">
                    <cms:show blog_content />

                    <div class="galleria">
                    <cms:show_repeatable 'my_blog_images'>
                        <img src="<cms:show blog_image/>">
                    </cms:show_repeatable>
                    </div>

                    <!-- Post Links -->
                    <p class="clearfix">
                        <span class="tag"><a href="<cms:link masterpage='blog.php' />" class="button float" >Back to Blog</a></span>
                        <span class="tag"><a href="#comments" ><cms:show k_comments_count /> Comments</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="section white-bg anchor">

        <div class="section-content">
            <div class="title">
                <h1>Categories</h1>
            </div>

            <div class="content content-piece">
                <div class="sub-cont">
                    <cms:folders masterpage='blog.php' >
                        <span class="tag"><a href="<cms:show k_folder_link />"><cms:show k_folder_title /></a></span>
                    </cms:folders>
                </div>
            </div>
        </div>
    </div>

<div class="section blue-bg anchor" id="comments">
    <div class="section-content no-bott-pad">
        <div class="title">
            <h1>Comments</h1>
        </div> 
        <div class="content">
            <cms:if k_comments_count >
                <ol class="commentlist">
                    <cms:comments page_id=k_page_id order='asc' limit='5' paginate='1' >
                    <li class="comment"> 
                        <div class="gravatar"> 
                            <!-- <a name="<cms:show k_comment_anchor />"> -->
                        </div> 
                        <div class="comment_content"> 
                            <div class="clearfix">
                                <cite class="author_name"><a href=""><cms:show k_comment_author /></a></cite> //        
                                <cite class="comment-meta commentmetadata"><cms:date k_comment_date format='F j, Y'/> at <cms:date k_comment_date format='h:ia'/></a></cite> 
                            </div>
                            <div class="comment_text"> 
                                <p><cms:show k_comment /></p> 
                            </div> 
                        </div> 
                    </li> 
                    <cms:paginator />
                    </cms:comments>
                </ol> 
            <cms:else />
            No comments.
            </cms:if>
            <!-- Comment Form -->
            <cms:embed 'comments_form.html' />
        </div>
    </div>     
</div>



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
        </div>
    </div>
</div><!-- ./contact -->

<div class="footer section anchor">
    <div class="section-content">
        <a href="index.html"><p>NICK<strong>FORD</strong></p></a>
    </div>
</div><!-- ./about -->
</div><!-- bottom wrapper end -->


<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../../js/galleria/galleria-1.5.7.min.js"></script>

<script>
(function() { 
    Galleria.loadTheme('../../js/galleria/themes/classic/galleria.classic.min.js');
    Galleria.run('.galleria');
}());
</script>

</body>
</html>
<cms:else />
<cms:embed 'blog_list.html' />
</cms:if>

<?php COUCH::invoke(); ?>
