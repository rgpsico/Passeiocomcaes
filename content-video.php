
      <section id="blog" class="pages">
         <div class="jumbotron" data-stellar-background-ratio="0.5">
            <!-- Heading -->
            <div class="jumbo-heading" data-stellar-background-ratio="1.2">
               <h1>Blog Post</h1>
            </div>
         </div>
         <!-- container -->
         <div class="container">
            <div class="col-md-12">
               <!-- Breadcrumb -->
               <ul class="breadcrumb">
                  <li><a href="http://ingridkuhn.com/themes/petz/index.html">Home</a> <span class="divider"></span></li>
                  <li><a href="http://ingridkuhn.com/themes/petz/blog.html">Blog Home</a> <span class="divider"></span></li>
                  <li class="active">Blog Post</li>
               </ul>
            </div>
            <!-- /col-md-12 -->
            <!-- Blog page -->
            <div id="blog-container" class="col-md-9">
               <!-- title -->
               <h3><?php the_title(); ?></h3>
               <!-- Post Info -->
               <div class="post-info">
                  <p><i class="fa fa-clock-o"></i>Posted on Aug 24, 2015 at 9:00 PM</p>
                  <p><i class="fa fa-user"></i>by <a href="#">John Doe</a></p>
                  <!-- Post Comments -->
                  <p><i class="fa fa-comment"></i>3 Comments</p>
               </div>
               <!-- post-info -->
               <div class="blog-post post-main">
                  <!-- Image -->
                  <?php the_post_thumbnail(array(500,500)); ?>                    
                  <!-- Post Content -->
                  <p><?php the_content(); ?></p>
                  <div class="post-info">
                     <!-- Tags -->
                     <div class="blog-tags">
                        <p>
                        <i class="fa fa-tags"></i>Tags:

                     </p>
                       <?php the_tags(' ', ', '); ?>
                     </div>
                  </div>
                  <!-- /post-info -->
               </div>
               