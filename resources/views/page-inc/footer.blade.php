<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				

				<div class="clearfix visible-sm visible-xs"></div>

			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
                            <!-- footer social -->
                            <ul class="footer-social">
                                <li><a href="{{ session('fb_url') }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ session('twitter_url') }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ session('insta_url') }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{ session('gplus_url') }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                
                            </ul>
                            <!-- /footer social -->
						<!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
						<a href="/">{{ session('name') }}</a> | Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by Colorlib
						<!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/slick.min.js') }}"></script>
	<script src="{{ asset('js/nouislider.min.js') }}"></script>
	<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
