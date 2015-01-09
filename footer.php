<footer>
	<div id="triangle-up"></div>
</div>
<div class="footer-bg">
	<div class="container">
		<div class="row">
			<div class="share-box text-center">
				<ul class="list-inline">
					<li><i class="fa fa-google-plus-square fa-4x"></i></li>
					<li><i class="fa fa-facebook-square fa-4x"></i></li>
					<li><i class="fa fa-twitter-square fa-4x"></i></li>
					<li><i class="fa fa-github-square fa-4x"></i></li>
					<li><i class="fa fa-rss-square fa-4x"></i></li>
				</ul>
			</div>				
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-4 text-center">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Left Footerbar")) : endif; ?>
			</div>
			<div class="col-sm-4 text-center">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Center Footerbar")) : endif; ?>
			</div>
			<div class="col-sm-4 text-center">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Right Footerbar")) : endif; ?>
			</div>
		</div>
		<hr>
		<div class="row copyright">Copyright DEZANG.net All Rights Reserved.</div>
	</div>
</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>