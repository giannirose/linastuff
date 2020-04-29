// Chris Coyier jQuery for his pullquote Codepen example, view demo > view source 
// First need to add some jQuery to the page
// <script src="js/jquery.js"></script> 
// Version contained in the CSS-Tricks article, corrected 
// <script>
// $(function() { 
//			  $('span.pullquote').each(function() { 
//				var $parentParagraph = $(this).parent('p'); 
//				$parentParagraph.css('position', 'relative'); 
//				$(this).clone() 
//				  .addClass('pulledquote') 
//				  .prependTo($parentParagraph); 
//			  }); 
//		});
//	</script>

// The following is from viewing source in his example for both right- and left-pullquotes


		$(function() {
    		$('span.pull-left').each(function(index) { 
    		var $parentParagraph = $(this).parent('p'); 
    		$parentParagraph.css('position', 'relative'); 
    		$(this).clone() 
    		  .addClass('pulled-left') 
    		  .prependTo($parentParagraph); 
    	  });
    	}); 



		$(function() {
   		$('span.pull-right').each(function(index) { 
    		var $parentParagraph = $(this).parent('p'); 
    		$parentParagraph.css('position', 'relative'); 
    		$(this).clone() 
    		  .addClass('pulled-right') 
   		  .prependTo($parentParagraph); 
   	  });
    	}); 

// End Chris Coyier CSS Tricks example 
