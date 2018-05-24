<?php get_header(); ?>
<section id="wedding">

	<div class="content">
		<h2>The Big Day</h2>

		<div class="col">
			<h3>Where the party at</h3>
			<p>
				<address>
					Riverway Club House<br />
					9001 Bill Fox Way,<br />
					Burnaby, BC V5J 5J3<br />
				</address>
				(<a href="https://www.google.ca/maps/dir/''/Riverway+Club+House/@49.2005977,-123.0602487,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x5486761a3a1b4a55:0x6b1815483dcb77f4!2m2!1d-122.9902091!2d49.2006189" target="_blank">Get directions</a>)
			</p>
		</div>

		<div class="col">
			<h3>When to show up</h3>
			<p>
				BC Day Long Weekend<br />
				Sunday, August 06, 2017<br />
				<br />
				Ceremony 4:30pm<br />
				Cocktail 5:30pm<br />
				Reception 7:00pm<br />
			</p>
		</div>

		<div class="col">
			<h3>Where to crash</h3>
			<p>
				<em>Hilton</em> hotel is nearby and offers shuttle services from the venue to the hotel.
			</p>
			<p>
				Alternatively, you can also take a cab or find a responsible sober person to take you home that night.
			</p>
		</div>
	</div>

</section>

<div class="photo-bg photo-1"></div>

<!-- <section id="bridegroom">

	<div class="content">
		<h2>The Happy Couple</h2>

		<div class="col">
			<img src="<?php echo get_template_directory_uri(); ?>/img/profile_coleen.jpg" alt="">
			<h3>Coleen</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati eum ut, enim, quo non illum dignissimos ullam, nihil voluptas cumque laudantium recusandae rem. Animi, sunt!
			</p>
		</div>

		<div class="col heart">
			<3
		</div>
		
		<div class="col">
			<img src="<?php echo get_template_directory_uri(); ?>/img/profile_rd.jpg" alt="">
			<h3>Arthur</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit blanditiis aperiam laudantium quidem delectus quia numquam facere porro, sequi at.
			</p>
		</div>
	</div>

</section>

<div class="photo-bg photo-2"></div> -->

<section id="rsvp">

	<div class="content">

		<h2>You Down?</h2>

		<p>
			Please let us know whether or not you will be able to make it to our special day, and select the entree of your choice.
		</p>
		<p>
			If you need us to accommodate special dietary needs or if you are bringing kids under 11 years old, you will have to get in touch with us and let us know instead of using the form below.
		</p>

		<h3>Entree options</h3>
		<ul class="entrees">
			<li>
				<strong>AAA Canadian Striploin Beef Steak Au Jus</strong> served with green beans, garlic mash and mushrooms
			</li>
			<li>
				<strong>Free Range Chicken Breast with Truffle Beurre Blanc</strong>
				served with green beans, garlic mash and mushrooms
			</li>
			<li>
				<strong>Portobello &amp; Crimini Mushroom Ravioli</strong> with Tarragon Cream and arugula salad
			</li>
		</ul>

		<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>

	</div>
	

</section>

<div class="photo-bg photo-3"></div>
<?php get_footer(); ?>