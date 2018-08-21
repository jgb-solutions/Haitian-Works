<footer class="black darken-4 white-text no-mb">
	<div class="container">
		<div class="row no-mb">
			<div class="col s12">
				<p class="center-align grey-text">
					Follow Us on Social Media<br><br>
					<a
						href="{{ config('site.social.github') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-github fa-fw"></i>
					</a>
				{{-- 	&nbsp;
					<a
						href="https://twitter.com/{{ config('site.twitter') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-twitter fa-fw"></i>
					</a> --}}
					&nbsp;
					<a
						href="{{ config('site.social.facebook') }}"
						target="blank"
						class="btn-floating blue">
						<i class="fa fa-facebook fa-fw"></i>
					</a>
				</p>
				<p class="center-align grey-text">
					&copy; {{ date('Y') }} {{ config('app.name') }} | Site by <a href="https://jgb.solutions" target="_blank">JGB Solutions</a>
				</p>
			</div>
		</div>
	</div>
</footer>