<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="splash">
			<img class="splash__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/header.png">
			<video autoplay loop muted class="splash__video">
				<source class="splash__video" src="<?php echo get_template_directory_uri(); ?>/assets/vid/loopingbanner.mp4">
			</video>
		</section>

		<section class="intro">
			<a class="intro__play" href="https://www.youtube.com/watch?v=1jnCzh64z2M"><img class="intro__play__button" src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg"></a>
			<h1 class="intro__header">Transatlantic Plate Reverb</h1>

			<div class="intro__link__container">
				<a href="https://www.raresignals.com/store-test/" class="intro__link intro__link__buy">Buy</a>
				<a href="" class="intro__link intro__link__try">Try</a>
			</div>

			<div><p>
				Rare Signals presents a new standard in Plate Reverb plug-ins modeled from the finest analog plates of Europe and The U.S. With 24 independent decay settings, and reverb tails that remain un-manipulated, preserving the natural sustain and stereo spread of the actual analog giants. Beautifully presented to you in a simple and powerful design.
			</p></div>
		</section>

		<section class="nav">
			<nav class="nav__container">
				<a class="nav__item" href="#operation">Operation</a>
				<a class="nav__item" href="#reverb">Reverb Tails</a>
				<a class="nav__item" href="#testimonials">Testimonials</a>
			</nav>
		</section>

		<section id="operation" class="operation">
			<div class="operation__content">
				<h2 class="operation__content__title">Operation</h2>

				<p class="operation__content__text">
					The Transatlantic Reverb Plate was designed with simplicity as a paramount feature. We deliberately made the functions and the layout of controls as intuitive as possible. We love the idea that you can begin using it right away...without scrolling through the pages of a manual. That being said, there are some functions regarding automation features, details about the modes and decay properties...as well as some tips for CPU optimization that might interest you. These are explained in the manual.
				</p>
			</div>
		</section>

		<section class="diagram">
			<img class="diagram__desktop" src="<?php echo get_template_directory_uri(); ?>/assets/img/diagram.png">
			<div class="diagram__mobile">
				<img class="diagram__mobile__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/diagram-mobile.png">

				<div class="diagram__mobile__text">
					<div class="diagram__mobile__text__row">
						<div class="diagram__mobile__text__row__number">1</div>
						<p>The default settings are optimized to provide impeccable sound – but all the settings are adjustable to suit your needs.</p>
					</div>

					<div class="diagram__mobile__text__row">
						<div class="diagram__mobile__text__row__number">2</div>
						<p>There are twelve divisions of decay with settings that preserve the natural tails that are inherent in plate reverbs.</p>
					</div>

					<div class="diagram__mobile__text__row">
						<div class="diagram__mobile__text__row__number">3</div>
						<p>Pre-delay can help manage clarity in an effected signal as well as provide some rhythmic control to the overall effected sound.</p>
					</div>

					<div class="diagram__mobile__text__row">
						<div class="diagram__mobile__text__row__number">4</div>
						<p>This switch toggles between two completely different plates: one modeled from a 1970s Nashville plate, the other from a famous German manufactured plate.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="reverb" class="reverb">
			<h2 class="reverb__title">Reverb Trails</h2>

			<div class="reverb__diagram">
				<div class="reverb__diagram__left"></div>
				<div class="reverb__diagram__right">
					<img class="reverb__diagram__right__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/reverb.png">
					<p class="reverb__diagram__right__text">How reverb tails travel through space.</p>
				</div>
			</div>

			<div class="reverb__text">
				<p class="reverb__text__left">
					The Transatlantic Plate Reverb was modeled directly from the finest examples of plates from Europe and the U.S. There is something very special about the way a perfectly tuned plate decays. Unfortunately it's not uncommon for some plugin manufacturers to manipulate the impulses used in the modeling process to make sense mathematically in a certain user interface. This manipulation allows for decay control settings to be precise (1 sec., 1.5 sec., 2 sec. and so on). 
				</p>

				<p class="reverb__text__right">
					When dealing with an analog plate in the real world, decay times are hard to predict, let alone make perfectly even (value-wise). Manipulating reverb tails to fit conveniently into a user interface just sounds wrong (literally). You'll notice that the decay times on the Transatlantic reflect the true decay time of any particular setting. When switching between the EU/US modes, the current decay setting will jump to the closest value in the new mode. The result in sound quality far outweighs the ability to select even numbers on a dial. 
				</p>
			</div>
		</section>

		<section id="testimonials" class="testimonials">
			<div class="testimonials__slideshow">
			</div>
		</section>

	</main>
</div>

<?php get_footer(); ?>