<?php
//about theme info
add_action( 'admin_menu', 'skt_ecology_abouttheme' );
function skt_ecology_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-ecology'), esc_html__('About Theme', 'skt-ecology'), 'edit_theme_options', 'skt_ecology_guide', 'skt_ecology_mostrar_guide');   
} 
//guidline for about theme
function skt_ecology_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-ecology'); ?>
		   </div>
          <p><?php esc_html_e('SKT Ecology is an ideal template for agriculture, ecology, ecosystems, nature, organic, farming, landscaping, gardening, naturopathy, conservation, solar, green renewable energy, earth, soil preservation, recycle, wildlife, animal protection, non profit and ngo websites. Waste disposal management, alternative fuel and garbage pickup, fundraising, hydro & wind electricity, biology, ayurveda, herbal medicines sites can also be created.','skt-ecology'); ?></p>
          <a href="<?php echo esc_url(SKT_ECOLOGY_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_ECOLOGY_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-ecology'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ECOLOGY_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-ecology'); ?></a> | 
				<a href="<?php echo esc_url(SKT_ECOLOGY_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-ecology'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_ECOLOGY_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>