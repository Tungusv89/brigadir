<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brigadir
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.svg" type="image/x-icon"/>

	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

	<!-- nouislider -->
	<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.css"
	/>

	<!-- Choices JS  -->
	<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css"
	/>

	<!-- fancybox -->
	<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
	/>

	<!-- Nice Select -->
	<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
			integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
	/>

	<!-- Simple Bar -->
	<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/5.3.9/simplebar.min.css"
			integrity="sha512-m+TQwLj4L9dvD524dbvw85WDMEEW93DUXK3eSARQjz+GBjdfR76ahhu212hrK4BDK7yeR8WoDwcb2aXrZuSWUw=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
	/>

	<!--  -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

	<!-- Custom Link -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
	<!-- Mobile Menu -->

	<div class="overlay"></div>

	<div class="mobile-menu">
		<div class="mobile-menu__inner">
			<div class="mobile-menu__body">
				<div class="mobile-menu__top">
					<div class="mobile-menu__header">
						<a class="mobile-menu__logo logo" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Логотип"/>
						</a>

						<button
								class="mobile-menu__close"
								type="button"
								aria-label="Закрыть меню"
						>
							<svg width="19" height="19">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/img/sprite.svg#close"></use>
							</svg>
						</button>
					</div>
					<div class="mobile-menu__info">
						<address class="mobile-menu__address">
							<svg
									width="20"
									height="20"
									viewBox="0 0 20 20"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
							>
								<path
										d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
								<path
										d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
							</svg>

							г.Павлово, ул.Чкалова, 49
						</address>
						<a class="mobile-menu__cabinet" href="#">
							<svg
									width="20"
									height="20"
									viewBox="0 0 20 20"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
							>
								<path
										d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
								<path
										d="M10 12.5C11.7259 12.5 13.125 11.1009 13.125 9.375C13.125 7.64911 11.7259 6.25 10 6.25C8.27411 6.25 6.875 7.64911 6.875 9.375C6.875 11.1009 8.27411 12.5 10 12.5Z"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
								<path
										d="M4.98438 15.5776C5.45462 14.6514 6.17216 13.8735 7.05745 13.3301C7.94275 12.7867 8.96123 12.499 10 12.499C11.0388 12.499 12.0572 12.7867 12.9425 13.3301C13.8278 13.8735 14.5454 14.6514 15.0156 15.5776"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
							</svg>

							Кабинет</a
						>
					</div>
				</div>
				<ul class="mobile-menu__list">
					<li class="mobile-menu__item">
						<div class="menu-mobile-box accordion">
							<div class="menu-mobile-box__top accordion-control">
								<div class="menu-mobile-box__name" href="#">
									<img
											src="<?php echo get_template_directory_uri(); ?>/img/categories-icons/1.png"
											alt="categories-icons"
									/>
									<span>Стройматериалы</span>
								</div>
							</div>

							<div class="menu-mobile-box__content accordion-content">
								<ul
										class="menu-mobile-box__list menu-mobile-box__list--max-h-auto"
								>
									<li class="menu-mobile-box__item">
										<div class="drop-box">
											<div class="drop-box__top drop-box__control">
												<a class="drop-box__name">
													Измерительные инструменты
												</a>
											</div>

											<div class="drop-box__content">
												<ul class="drop-box__list">
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="menu-mobile-box__item">
										<div class="drop-box">
											<div class="drop-box__top drop-box__control">
												<a class="drop-box__name">
													Силовая, строительная техника и комплектующие
												</a>
											</div>

											<div class="drop-box__content">
												<ul class="drop-box__list">
													<li class="drop-box__item">
														<a class="drop-box__link" href="#">
															комплектующие
														</a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#">
															комплектующие
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="mobile-menu__item">
						<div class="menu-mobile-box accordion">
							<div class="menu-mobile-box__top accordion-control">
								<div class="menu-mobile-box__name" href="#">
									<img
											src="<?php echo get_template_directory_uri(); ?>/img/categories-icons/3.png"
											alt="categories-icons"
									/>
									<span> Электрика</span>
								</div>
							</div>

							<div class="menu-mobile-box__content accordion-content">
								<ul
										class="menu-mobile-box__list menu-mobile-box__list--max-h-auto"
								>
									<li class="menu-mobile-box__item">
										<div class="drop-box">
											<div class="drop-box__top drop-box__control">
												<a class="drop-box__name">
													Измерительные инструменты
												</a>
											</div>

											<div class="drop-box__content">
												<ul class="drop-box__list">
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="menu-mobile-box__item">
										<div class="drop-box">
											<div class="drop-box__top drop-box__control">
												<a class="drop-box__name">
													Силовая, строительная техника и комплектующие
												</a>
											</div>

											<div class="drop-box__content">
												<ul class="drop-box__list">
													<li class="drop-box__item">
														<a class="drop-box__link" href="#">
															комплектующие
														</a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#">
															комплектующие
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="mobile-menu__item">
						<div class="menu-mobile-box accordion">
							<div class="menu-mobile-box__top accordion-control">
								<div class="menu-mobile-box__name" href="#">
									<img
											src="<?php echo get_template_directory_uri(); ?>/img/categories-icons/1.png"
											alt="categories-icons"
									/>
									<span>Стройматериалы</span>
								</div>
							</div>

							<div class="menu-mobile-box__content accordion-content">
								<ul
										class="menu-mobile-box__list menu-mobile-box__list--max-h-auto"
								>
									<li class="menu-mobile-box__item">
										<div class="drop-box">
											<div class="drop-box__top drop-box__control">
												<a class="drop-box__name">
													Измерительные инструменты
												</a>
											</div>

											<div class="drop-box__content">
												<ul class="drop-box__list">
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="menu-mobile-box__item">
										<div class="drop-box">
											<div class="drop-box__top drop-box__control">
												<a class="drop-box__name">
													Силовая, строительная техника и комплектующие
												</a>
											</div>

											<div class="drop-box__content">
												<ul class="drop-box__list">
													<li class="drop-box__item">
														<a class="drop-box__link" href="#">
															комплектующие
														</a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#">
															комплектующие
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="mobile-menu__item">
						<div class="menu-mobile-box accordion">
							<div class="menu-mobile-box__top accordion-control">
								<div class="menu-mobile-box__name" href="#">
									<img
											src="<?php echo get_template_directory_uri(); ?>/img/categories-icons/3.png"
											alt="categories-icons"
									/>
									<span> Электрика</span>
								</div>
							</div>

							<div class="menu-mobile-box__content accordion-content">
								<ul
										class="menu-mobile-box__list menu-mobile-box__list--max-h-auto"
								>
									<li class="menu-mobile-box__item">
										<div class="drop-box">
											<div class="drop-box__top drop-box__control">
												<a class="drop-box__name">
													Измерительные инструменты
												</a>
											</div>

											<div class="drop-box__content">
												<ul class="drop-box__list">
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#"> инструменты </a>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li class="menu-mobile-box__item">
										<div class="drop-box">
											<div class="drop-box__top drop-box__control">
												<a class="drop-box__name">
													Силовая, строительная техника и комплектующие
												</a>
											</div>

											<div class="drop-box__content">
												<ul class="drop-box__list">
													<li class="drop-box__item">
														<a class="drop-box__link" href="#">
															комплектующие
														</a>
													</li>
													<li class="drop-box__item">
														<a class="drop-box__link" href="#">
															комплектующие
														</a>
													</li>
												</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>

			<div class="mobile-menu__bottom">
				<div class="mobile-menu__btns">


					<a class="mobile-menu__btn" href="#">
            <span class="icon">
              <svg
		              width="20"
		              height="20"
		              viewBox="0 0 20 20"
		              fill="none"
		              xmlns="http://www.w3.org/2000/svg"
              >
                <path
		                d="M14.375 14.375H5.45313L3.27344 2.39063C3.24793 2.2471 3.17307 2.11701 3.06179 2.02285C2.95051 1.9287 2.80982 1.8764 2.66406 1.875H1.25"
		                stroke="#222222"
		                stroke-width="1.5"
		                stroke-linecap="round"
		                stroke-linejoin="round"
                />
                <path
		                d="M6.25 17.5C7.11294 17.5 7.8125 16.8004 7.8125 15.9375C7.8125 15.0746 7.11294 14.375 6.25 14.375C5.38706 14.375 4.6875 15.0746 4.6875 15.9375C4.6875 16.8004 5.38706 17.5 6.25 17.5Z"
		                stroke="#222222"
		                stroke-width="1.5"
		                stroke-linecap="round"
		                stroke-linejoin="round"
                />
                <path
		                d="M14.375 17.5C15.2379 17.5 15.9375 16.8004 15.9375 15.9375C15.9375 15.0746 15.2379 14.375 14.375 14.375C13.5121 14.375 12.8125 15.0746 12.8125 15.9375C12.8125 16.8004 13.5121 17.5 14.375 17.5Z"
		                stroke="#222222"
		                stroke-width="1.5"
		                stroke-linecap="round"
		                stroke-linejoin="round"
                />
                <path
		                d="M4.88281 11.25H14.6953C14.9875 11.2509 15.2706 11.1488 15.4949 10.9616C15.7193 10.7744 15.8704 10.5142 15.9219 10.2266L16.875 5H3.75"
		                stroke="#222222"
		                stroke-width="1.5"
		                stroke-linecap="round"
		                stroke-linejoin="round"
                />
              </svg>

              <span class="cart-count">15</span>
            </span>

						Корзина
					</a>
				</div>

				<div class="mobile-menu__connect">
					<address class="item">
						<svg
								width="20"
								height="20"
								viewBox="0 0 20 20"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
						>
							<path
									d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
									stroke="#222222"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
							/>
							<path
									d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
									stroke="#222222"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
							/>
						</svg>
						г.Павлово, ул.Чкалова, 49
					</address>

					<div class="item">
						<svg
								width="20"
								height="21"
								viewBox="0 0 20 21"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
						>
							<path
									d="M7.22656 10.2501C7.8697 11.5783 8.94366 12.6495 10.2734 13.2892C10.3715 13.3357 10.48 13.3558 10.5882 13.3475C10.6965 13.3393 10.8007 13.3031 10.8906 13.2423L12.8437 11.9376C12.93 11.8791 13.0298 11.8434 13.1336 11.8338C13.2374 11.8243 13.342 11.8412 13.4375 11.883L17.0938 13.4533C17.2187 13.5053 17.3231 13.5969 17.3909 13.7141C17.4586 13.8313 17.486 13.9675 17.4688 14.1017C17.3529 15.0062 16.9114 15.8375 16.2269 16.44C15.5424 17.0425 14.6619 17.3749 13.75 17.3751C10.9321 17.3751 8.22956 16.2557 6.23699 14.2632C4.24442 12.2706 3.125 9.56807 3.125 6.75015C3.12521 5.83827 3.45767 4.95771 4.06018 4.27324C4.66269 3.58877 5.49395 3.14728 6.39844 3.0314C6.53269 3.01415 6.66888 3.04152 6.78605 3.10928C6.90322 3.17704 6.99487 3.28144 7.04687 3.4064L8.61719 7.07046C8.65802 7.16448 8.67511 7.2671 8.66693 7.36928C8.65876 7.47146 8.62558 7.57006 8.57031 7.6564L7.26562 9.64077C7.20754 9.73052 7.17345 9.83368 7.16661 9.94037C7.15977 10.0471 7.18041 10.1537 7.22656 10.2501V10.2501Z"
									stroke="#222222"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
							/>
						</svg>

						<a href="tel:+78317135050">8 831 713 50 50</a>
						<span class="divider">|</span>
						<a href="tel:+79506032111">8 (950) 603-21-11</a>
					</div>

					<div class="item">
						<a href="mailto:b.brigadirov@yandex.ru">
							<svg
									width="20"
									height="21"
									viewBox="0 0 20 21"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
							>
								<path
										d="M10 13.625C11.7259 13.625 13.125 12.2259 13.125 10.5C13.125 8.77411 11.7259 7.375 10 7.375C8.27411 7.375 6.875 8.77411 6.875 10.5C6.875 12.2259 8.27411 13.625 10 13.625Z"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
								<path
										d="M14.1484 16.7502C12.7563 17.6745 11.0954 18.1074 9.42927 17.9802C7.76311 17.853 6.18713 17.1731 4.95141 16.0483C3.71569 14.9234 2.891 13.4182 2.6082 11.7713C2.3254 10.1244 2.60069 8.43018 3.39039 6.95755C4.18008 5.48492 5.43895 4.31819 6.96725 3.64249C8.49554 2.96678 10.2057 2.82082 11.8264 3.22774C13.4471 3.63467 14.8855 4.57118 15.9134 5.88868C16.9412 7.20617 17.4996 8.82919 17.5 10.5002C17.5 12.2268 16.875 13.6252 15.3125 13.6252C13.75 13.6252 13.125 12.2268 13.125 10.5002V7.37519"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
							</svg>

							b.brigadirov@yandex.ru
						</a>
					</div>
					<div class="item">
						<svg
								width="20"
								height="21"
								viewBox="0 0 20 21"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
						>
							<path
									d="M10 18C14.1421 18 17.5 14.6421 17.5 10.5C17.5 6.35786 14.1421 3 10 3C5.85786 3 2.5 6.35786 2.5 10.5C2.5 14.6421 5.85786 18 10 18Z"
									stroke="#222222"
									stroke-width="1.5"
									stroke-miterlimit="10"
							/>
							<path
									d="M10 10.5H14.375"
									stroke="#222222"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
							/>
							<path
									d="M13.0938 13.5938L10 10.5"
									stroke="#222222"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
							/>
						</svg>

						пн-пт 8:00-19:00 <span class="divider">|</span> сб 8:00-16;00 вс
						8:00-15:00
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Mobile Menu -->
	<div class="header__top">
		<div class="container">
			<div class="header__top-inner">

				<div class="header__right">
					<div class="header__schedule">
						<svg
								width="20"
								height="20"
								viewBox="0 0 20 20"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
						>
							<path
									d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
									stroke="white"
									stroke-width="1.5"
									stroke-miterlimit="10"
							/>
							<path
									d="M10 10H14.375"
									stroke="white"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
							/>
							<path
									d="M13.0938 13.0938L10 10"
									stroke="white"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
							/>
						</svg>

						<span>пн-пт 8:00-19:00</span> <span>сб 8:00-16:00</span>
						<span>вс 8:00-15:00</span>
					</div>
					<div class="header__address">
						<svg
								width="20"
								height="20"
								viewBox="0 0 20 20"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
						>
							<path
									d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
									stroke="white"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
							/>
							<path
									d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
									stroke="white"
									stroke-width="1.5"
									stroke-linecap="round"
									stroke-linejoin="round"
							/>
						</svg>

						<span>г.Павлово, ул.Чкалова, 49</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="header__middle">
		<div class="container">
			<div class="header__middle-inner">
				<button class="header__toggle" type="button" aria-label="Открыть меню">
					<span class="header__toggle-line"></span>
				</button>

				<a class="header__logo logo" href="index.html">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Логоитип"/>
				</a>

				<button class="header__catalog btn catalog-btn" type="button">
					<svg
							width="26"
							height="25"
							viewBox="0 0 26 25"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
					>
						<path
								d="M9.875 6.25H21.5938"
								stroke="white"
								stroke-width="1.5"
								stroke-linecap="round"
								stroke-linejoin="round"
						/>
						<path
								d="M9.875 12.5H21.5938"
								stroke="white"
								stroke-width="1.5"
								stroke-linecap="round"
								stroke-linejoin="round"
						/>
						<path
								d="M9.875 18.75H21.5938"
								stroke="white"
								stroke-width="1.5"
								stroke-linecap="round"
								stroke-linejoin="round"
						/>
						<path
								d="M4.40625 6.25H5.96875"
								stroke="white"
								stroke-width="1.5"
								stroke-linecap="round"
								stroke-linejoin="round"
						/>
						<path
								d="M4.40625 12.5H5.96875"
								stroke="white"
								stroke-width="1.5"
								stroke-linecap="round"
								stroke-linejoin="round"
						/>
						<path
								d="M4.40625 18.75H5.96875"
								stroke="white"
								stroke-width="1.5"
								stroke-linecap="round"
								stroke-linejoin="round"
						/>
					</svg>

					Каталог
				</button>

				<form class="header__search search">
					<div class="search__group">
						<input
								class="search__input"
								type="text"
								placeholder="Введите наименование товара "
						/>
						<button class="search__btn">
							<svg
									width="21"
									height="20"
									viewBox="0 0 21 20"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
							>
								<path
										d="M9.68359 15.625C13.308 15.625 16.2461 12.6869 16.2461 9.0625C16.2461 5.43813 13.308 2.5 9.68359 2.5C6.05923 2.5 3.12109 5.43813 3.12109 9.0625C3.12109 12.6869 6.05923 15.625 9.68359 15.625Z"
										stroke="#222222"
										stroke-width="2"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
								<path
										d="M14.3242 13.7031L18.1211 17.5"
										stroke="#222222"
										stroke-width="2"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
							</svg>
						</button>
					</div>
				</form>

				<div class="header__tools header-tools">
					<ul class="header-tools__list">
						<li class="header-tools__item">
							<a class="header-tools__link" href="#">
								<svg
										width="32"
										height="32"
										viewBox="0 0 32 32"
										fill="none"
										xmlns="http://www.w3.org/2000/svg"
								>
									<path
											d="M23 23H8.725L5.2375 3.825C5.1967 3.59537 5.07691 3.38722 4.89887 3.23657C4.72082 3.08592 4.49572 3.00223 4.2625 3H2"
											stroke="#222222"
											stroke-width="2"
											stroke-linecap="round"
											stroke-linejoin="round"
									/>
									<path
											d="M10 28C11.3807 28 12.5 26.8807 12.5 25.5C12.5 24.1193 11.3807 23 10 23C8.61929 23 7.5 24.1193 7.5 25.5C7.5 26.8807 8.61929 28 10 28Z"
											stroke="#222222"
											stroke-width="2"
											stroke-linecap="round"
											stroke-linejoin="round"
									/>
									<path
											d="M23 28C24.3807 28 25.5 26.8807 25.5 25.5C25.5 24.1193 24.3807 23 23 23C21.6193 23 20.5 24.1193 20.5 25.5C20.5 26.8807 21.6193 28 23 28Z"
											stroke="#222222"
											stroke-width="2"
											stroke-linecap="round"
											stroke-linejoin="round"
									/>
									<path
											d="M7.8125 18H23.5125C23.98 18.0014 24.433 17.838 24.7919 17.5386C25.1508 17.2391 25.3927 16.8227 25.475 16.3625L27 8H6"
											stroke="#222222"
											stroke-width="2"
											stroke-linecap="round"
											stroke-linejoin="round"
									/>
								</svg>

								<span class="cart-count"> 0 </span>

								<span class="header-tools__text">Корзина</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</header>