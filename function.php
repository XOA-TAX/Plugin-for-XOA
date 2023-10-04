function quick_Call(){
	?>
			<div class="button-quick_call">
				<a href="tel:+17145946986" id="quickcallbutton" title="Call Now">
				    <img src="http://staging3.xoatax.net/wp-content/uploads/2023/10/Call.png">		
				</a>
			</div>
	<?php
      
     ?>
		<style>
			.button-quick_call{
			    position: fixed;
				top: 636px;
				right: 60px;
				z-index: 9999;
				clear: both;
				margin: 0 auto;
			}
		</style>
	<?php
    }
      
   add_action( 'wp_footer', 'quick_Call' );