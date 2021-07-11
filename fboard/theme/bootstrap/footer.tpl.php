	<footer class="container footer mt-5 p-3 rounded box-shadow">
		<p class="float-right">
			<?php echo Plugin::hook('footer', $out['self'])?>
			<?php if(DEBUG_MODE) echo '<small class="badge badge-danger uppercase" data-toggle="tooltip" data-placement="top" title="v.'.VERSION.' - build:'.BUILD. '">' .CODENAME. '</small>'; ?>			 
		</p>
		<p>
				<?php echo $config['footer_text']?> | <?php echo $lang['powered']?>
		</p>
	</footer>
            
	<script src="<?php echo HTML_THEME_DIR?>assets/js/jquery.min.js?ver=v3.2.1"></script>
	<!-- Bootstrap core JavaScript
		================================================== -->   		
	<script src="<?php echo HTML_THEME_DIR?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo HTML_THEME_DIR?>assets/js/flatboard.js"></script>	    
	<?php echo Plugin::hook('footerJS', $out['self'])?>    
  </body>
</html>