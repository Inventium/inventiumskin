<?php
/*---------------------------------*/
/* WIDGETIZED FOOTER - 4 COLUMNS   */
/* Mike Nichols - October 17, 2009 */
/*---------------------------------*/

/*-----------------------------------------*/
/* register sidebars for widgetized footer */
if (function_exists('register_sidebar')) {
	$sidebars = array(1, 2, 3, 4);
	foreach($sidebars as $number) {
		register_sidebar(array(
			'name' => 'Footer ' . $number,
			'id' => 'footer-' . $number,
			'before_widget' => '',
			'after_widget' => '',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		));
	}
}


function footer_bottom_bar() {    
?>
<p class="legal">
   Copyright &copy; 2009-2010 All Rights Reserved Inventium Systems | 
   <a href ="http://website-in-a-weekend.net/disclaimer">Disclaimer</a> | 
   <a href ="http://website-in-a-weekend.net/privacy-policy">Privacy Policy</a> | 
   <a href ="http://website-in-a-weekend.net/terms-and-conditions">Terms & Conditions</a>.
</p>
<?php
}

/*-----------------------*/
/* set up footer widgets */
function widgetized_footer() {
?>
	<div id="footer_setup">

		<div class="footer_items">
  	  		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1') ) : ?>
    		<?php endif; ?>
		</div>

		<div class="footer_items">
    		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2') ) : ?>
    		<?php endif; ?>
		</div>

		<div class="footer_items">
    		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3') ) : ?>
    		<?php endif; ?>
		</div>

		<div class="footer_items">
    		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4') ) : ?>
    		<?php endif; ?>
		</div>
		
	</div>
<?php
   footer_bottom_bar(); 
}
add_action('thesis_hook_footer','widgetized_footer');

remove_action('thesis_hook_footer', 'thesis_attribution');
?>