<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<?php perch_blog_post_meta(perch_get('s')); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="rss.php" />
	<?php perch_get_css(); ?>

	<?php perch_blog_post_webmention_endpoint(perch_get('s')); ?>
	
</head>
<body>
	<?php perch_content("Blog Header"); ?>

		<!--  change cols2-nav-right to cols2-nav-left if you want the sidebar on the left -->
		<div class="wrapper wrapper-blog">

			<div class="primary-content">

		   	<div class="post">
		    		<?php perch_blog_post(perch_get('s')); ?>

			<?php perch_blog_author_for_post(perch_get('s')); ?>
		    		<!-- Include the categories list of blogs -->
		    		<!--	<div class="meta">
		            <div class="cats">
		                <<?php perch_blog_post_categories(perch_get('s')); ?>
		            </div>
		            	<div class="tags">
		               	<?php perch_blog_post_tags(perch_get('s')); ?>
		   				</div>-->
		      </div>
		      	<div class="button">
		      		<button class="styled" onclick="showForm()">Add a comment</button>

							<div id="comment-form" style="display: none" >	
		    				<?php perch_blog_post_comment_form(perch_get('s')); ?>
							</div>
					</div>

		      	<div class="button">
		      		<button class="styled" onclick="showComments()">See Comments</button>

							<div id="comments" style="display: none" >	
		    			<?php perch_blog_post_comments(perch_get('s')); ?>
							</div>
					</div>

		   </div>
		   	<section class="sidebar">
		   		<div class="sticky">
						<nav class="downsize">
				   		<!-- <h6>Archive</h6>-->
						    <!-- The following functions are different ways to display archives. You can use any or all of these.

						    All of these functions can take a parameter of a template to overwrite the default template, for example:

						    perch_blog_categories('my_template.html');

						    -->
						    <!--  By category listing -->

						    <?php perch_blog_categories(); ?>
						    <hr>
						    <!--  By tag -->
						    <?php perch_blog_tags(); ?>
						    <!--  By year -->
						    <!-- <?php perch_blog_date_archive_years(); ?> Choose to hide this -->
						    <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
						    <hr>
						    <?php perch_blog_date_archive_months(); ?>
						    <hr>
    					</nav>

    					<ul class="social-links">
							<li class="twitter no-list-style">
								<a href="https://twitter.com/johnrose3?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @johnrose3</a>
									<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
								</a>
							</li>
								<!--<li class="facebook"><a href="#" rel="me">Facebook</a></li>
								<li class="flickr"><a href="#" rel="me">Flickr</a></li>
								<li class="linkedin"><a href="" rel="me">LinkedIn</a></li>
								<li class="linkedin"><a href="" rel="me">Instagram</a></li>
								<li class="rss"><a href="#">RSS</a></li>-->

							<li>	<!-- Scripts from LinkedIn  -->
								<script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
								<script type="IN/Share" data-url="https://docs.microsoft.com/en-us/linkedin/consumer/integrations/self-serve/plugins/share-plugin"></script>
							</li>
						</ul>
					</div>

    			</section>
		</div>
	<footer class="layout-footer">
		<div class="wrapper">

			<small class="text-center">Copyright &copy; <?php echo date('Y'); ?></small>
		</div>
	</footer>
	<?php perch_get_javascript(); ?>
	<!-- Chris Coyier jQuery for his pullquote Codepen example, view demo > view source -->
	<!-- The following is from viewing source in his example for both right- and left-pullquotes -->

	<script>
		$(function() {
    		$('span.pull-left').each(function(index) { 
    		var $parentParagraph = $(this).parent('p'); 
    		$parentParagraph.css('position', 'relative'); 
    		$(this).clone() 
    		  .addClass('pulled-left') 
    		  .prependTo($parentParagraph); 
    	  });
    	}); 
	</script>

	<script>
		$(function() {
    		$('span.pull-right').each(function(index) { 
    		var $parentParagraph = $(this).parent('p'); 
    		$parentParagraph.css('position', 'relative'); 
    		$(this).clone() 
    		  .addClass('pulled-right') 
    		  .prependTo($parentParagraph); 
    	  });
    	}); 
	</script> 
<!-- End Chris Coyier CSS Tricks example -->

<!-- Show/hide comment form -->
<script>
function showForm() {
  var x = document.getElementById("comment-form");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<!-- Show/hide comment -->
<script>
function showComments() {
  var x = document.getElementById("comments");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>


</body>
</html>

    <?php PerchUtil::output_debug(); ?>
