<?php
/*
Template Name: "Главная страница"
*/
?>

<?php get_header(); ?>

	<main class="main">
		<section class="hero" style="background-image: url('<?php the_field( 'slider_bg' ); ?>')">
			<div class="container">
				<div class="hero__wrapper">
					<div class="hero__slider swiper">
						<ul class="hero__slides swiper-wrapper">
							<?php if ( get_field( 'slide_item' ) ): ?>
								<?php while ( has_sub_field( 'slide_item' ) ) : ?>
									<li class="hero__slide swiper-slide">
										<div class="hero__inner">
											<div class="hero__offer">
												<span class="hero__text"><?php the_sub_field( 'slider_category' ); ?></span>
												<h2 class="hero__title">
													<?php the_sub_field( 'slider_title' ); ?>
												</h2>
												<span class="hero__text"><?php the_sub_field( 'slider_subtitle' ); ?></span>
												<button class="hero__btn btn" type="button">
													<?php the_sub_field( 'slider_button' ); ?>
												</button>
											</div>
											<div class="hero__img">
												<picture>
													<source srcset="<?php the_sub_field( 'slider_img_webp' ); ?>" type="image/webp"/>
													<img src="<?php the_sub_field( 'slider_img_png' ); ?>" alt="img_png"/>
												</picture>
											</div>
										</div>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
						<button
								class="swiper-button-next"
								type="button"
								aria-label="Следующий"
						></button>
						<button
								class="swiper-button-prev"
								type="button"
								aria-label="Предыдущий"
						></button>
						<div class="swiper-pagination"></div>
					</div>
				</div>
			</div>
		</section>


		<div class="advantages">
			<div class="container">
				<div class="advantages__content">
					<div class="advantages__slider swiper">
						<ul class="advantages__list swiper-wrapper">
							<?php if ( get_field( 'benefit_item' ) ): ?>
								<?php while ( has_sub_field( 'benefit_item' ) ) : ?>
									<li class="advantages-item advantages-item--delivery swiper-slide" style="background: url(<?php the_sub_field( 'benefit_img' ); ?>) no-repeat left top; background-size: 39px">
										<span class="advantages-item__title"><?php the_sub_field( 'benefit_title' ); ?></span>
										<p class="advantages-item__text">
											<?php the_sub_field( 'benefit_description' ); ?>
										</p>
										<a class="advantages-item__link" href="#"></a>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
		</div>

		<section class="products-grid">
			<div class="container">
				<div class="products-grid__content grid-content">
					<div class="products-grid__top">
						<h2 class="products-grid__title">Товары</h2>
					</div>

					<div
							class="products-grid__panel grid-panel active"
							data-simplebar
							data-simplebar-auto-hide="false"
					>
						<div class="products-grid__slider">
							<?php
							$related_products = get_field( 'products_on_front' ); ?>
							<ul class="products-grid__slides">
								<?php if ( $related_products ) {
									foreach ( $related_products as $product ) {
										$product = wc_get_product( $product->ID );


										$product_id       = $product->get_id();
										$product_title    = get_the_title( $product_id );
										$product_sku      = $product->get_sku();
										$availability     = $product->is_in_stock() ? 'В наличии' : 'Нет в наличии';
										$add_to_cart_url  = $product->add_to_cart_url();
										$add_to_cart_text = __( 'Добавить в корзину', 'woocommerce' ); ?>

										<li class="products-grid__item">
											<article class="product-card">
												<div class="product-card__top">
													<div class="product-card__slider swiper">
														<ul class="products-card__slides swiper-wrapper">
															<li class="product-card__slide swiper-slide">
																<picture>
																	<source
																			srcset="<?php
																			$gallery = $product->get_gallery_image_ids();
																			if ( $gallery ) {
																				foreach ( $gallery as $image_id ) {
																					$image_url = wp_get_attachment_image_url( $image_id, 'full' );
																					echo $image_url;
																				}
																			} ?>"
																			type="image/webp"
																	/>
																	<img
																			class="product-card__img"
																			src="<?php echo wp_get_attachment_image_url( $product_id, 'full' );; ?>"
																			alt="product"/>
																</picture>
															</li>
														</ul>
													</div>
												</div>
												<div class="product-card__body">
													<div class="product-card__info">
                                                        <span class="product-card__price">
                                                            <?php
                                                            echo wc_get_product( $product_id )->get_price_html();
                                                            ?>
                                                        </span>
														<h3 class="product-card__title"><?php echo $product_title ?></h3>
													</div>
													<div class="product-card__details card-details">
														<div class="card-details__top">
								                        <span class="card-details__stock card-details__stock--in-stock">
									                        <?php if ( $availability ) {
										                        echo 'В наличии';
									                        } else {
										                        echo 'Отсутствует';
									                        } ?>
								                       </span>
															<span>Арт: <?php echo $product_sku ?></span>
														</div>
														<div class="card-details__btns">
															<button class="card-details__cart btn" type="button">
																<svg
																		width="20"
																		height="21"
																		viewBox="0 0 20 21"
																		fill="none"
																		xmlns="http://www.w3.org/2000/svg"
																>
																	<path
																			d="M14.375 15.2725H5.45313L3.27344 3.28809C3.24793 3.14457 3.17307 3.01447 3.06179 2.92032C2.95051 2.82616 2.80982 2.77386 2.66406 2.77246H1.25"
																			stroke="white"
																			stroke-width="1.5"
																			stroke-linecap="round"
																			stroke-linejoin="round"
																	/>
																	<path
																			d="M6.25 18.3975C7.11294 18.3975 7.8125 17.6979 7.8125 16.835C7.8125 15.972 7.11294 15.2725 6.25 15.2725C5.38706 15.2725 4.6875 15.972 4.6875 16.835C4.6875 17.6979 5.38706 18.3975 6.25 18.3975Z"
																			stroke="white"
																			stroke-width="1.5"
																			stroke-linecap="round"
																			stroke-linejoin="round"
																	/>
																	<path
																			d="M14.375 18.3975C15.2379 18.3975 15.9375 17.6979 15.9375 16.835C15.9375 15.972 15.2379 15.2725 14.375 15.2725C13.5121 15.2725 12.8125 15.972 12.8125 16.835C12.8125 17.6979 13.5121 18.3975 14.375 18.3975Z"
																			stroke="white"
																			stroke-width="1.5"
																			stroke-linecap="round"
																			stroke-linejoin="round"
																	/>
																	<path
																			d="M4.88281 12.1475H14.6953C14.9875 12.1484 15.2706 12.0462 15.4949 11.8591C15.7193 11.6719 15.8704 11.4116 15.9219 11.124L16.875 5.89746H3.75"
																			stroke="white"
																			stroke-width="1.5"
																			stroke-linecap="round"
																			stroke-linejoin="round"
																	/>
																</svg>
																<?php
																$add_to_cart_url = wc_get_cart_url() . '?add-to-cart=' . $product_id;
																echo '<a href="' . esc_url( $add_to_cart_url ) . '" class="button add_to_cart_button">В корзину</a>';
																?>
																<!--																<span>В корзину</span>-->
															</button>
														</div>
													</div>

													<div class="product-card__bottom">

														<?php
														$attributes = $product->get_attributes();

														foreach ( $attributes as $attribute ) { ?>
															<div class="product-card__text">
																<?php
																echo wc_attribute_label( $attribute->get_name() ) . ': ';

																if ( $attribute->is_taxonomy() ) {
																	$values = wc_get_product_terms( $product->get_id(), $attribute->get_name(), array( 'fields' => 'names' ) );
																} else {
																	$values = $attribute->get_options();
																}

																foreach ( $values as $value ) {
																	echo $value;
																} ?>
															</div>

														<?php } ?>

														<div class="product-card__details card-details">
															<div class="card-details__top">
										                        <span class="card-details__stock card-details__stock--in-stock">
											                        <?php if ( $availability ) {
												                        echo 'В наличии';
											                        } else {
												                        echo 'Отсутствует';
											                        } ?>
										                        </span>
																<span>Арт: <?php echo $product_sku ?></span>
															</div>
															<div class="card-details__btns">
																<button class="card-details__cart btn" type="button">
																	<svg
																			width="20"
																			height="21"
																			viewBox="0 0 20 21"
																			fill="none"
																			xmlns="http://www.w3.org/2000/svg"
																	>
																		<path
																				d="M14.375 15.2725H5.45313L3.27344 3.28809C3.24793 3.14457 3.17307 3.01447 3.06179 2.92032C2.95051 2.82616 2.80982 2.77386 2.66406 2.77246H1.25"
																				stroke="white"
																				stroke-width="1.5"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																		/>
																		<path
																				d="M6.25 18.3975C7.11294 18.3975 7.8125 17.6979 7.8125 16.835C7.8125 15.972 7.11294 15.2725 6.25 15.2725C5.38706 15.2725 4.6875 15.972 4.6875 16.835C4.6875 17.6979 5.38706 18.3975 6.25 18.3975Z"
																				stroke="white"
																				stroke-width="1.5"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																		/>
																		<path
																				d="M14.375 18.3975C15.2379 18.3975 15.9375 17.6979 15.9375 16.835C15.9375 15.972 15.2379 15.2725 14.375 15.2725C13.5121 15.2725 12.8125 15.972 12.8125 16.835C12.8125 17.6979 13.5121 18.3975 14.375 18.3975Z"
																				stroke="white"
																				stroke-width="1.5"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																		/>
																		<path
																				d="M4.88281 12.1475H14.6953C14.9875 12.1484 15.2706 12.0462 15.4949 11.8591C15.7193 11.6719 15.8704 11.4116 15.9219 11.124L16.875 5.89746H3.75"
																				stroke="white"
																				stroke-width="1.5"
																				stroke-linecap="round"
																				stroke-linejoin="round"
																		/>
																	</svg>
																	<?php
																	$add_to_cart_url = wc_get_cart_url() . '?add-to-cart=' . $product_id;
																	echo '<a href="' . esc_url( $add_to_cart_url ) . '" class="button add_to_cart_button">В корзину</a>';
																	?>
																	<!--																	<span>В корзину</span>-->
																</button>

															</div>
														</div>
													</div>
												</div>
											</article>
										</li>
									<?php }
								}
								?>
							</ul>
						</div>
					</div>


				</div>
			</div>
		</section>


		<section class="discount">
			<div class="container">
				<div class="discount__content">
					<div class="discount__top">
						<h2 class="discount__title">Акции и предложения</h2>
					</div>

					<div class="discount__slider swiper">
						<ul class="discount__slides swiper-wrapper">
							<?php if ( get_field( 'promo_item' ) ): ?>
								<?php while ( has_sub_field( 'promo_item' ) ) : ?>
									<li class="discount__slide swiper-slide">
										<article class="discount-card">
											<div class="discount-card__left">
												<div class="discount-card__top">
													<span class="discount-card__badge badge badge--yellow"> Акции </span>
													<span class="discount-card__date"
													><?php the_sub_field( 'promo_date' ); ?></span>
												</div>
												<div class="discount-card__middle">
													<h3 class="discount-card__title">
														<a href="#"><?php the_sub_field( 'promo_title' ); ?></a>
													</h3>
													<p class="discount-card__text">
														<?php the_sub_field( 'promo_subtitle' ); ?>
													</p>
												</div>
												<div class="discount-card__time">
													<svg
															width="15"
															height="15"
															viewBox="0 0 15 15"
															fill="none"
															xmlns="http://www.w3.org/2000/svg"
													>
														<path
																d="M7.5 13.125C10.6066 13.125 13.125 10.6066 13.125 7.5C13.125 4.3934 10.6066 1.875 7.5 1.875C4.3934 1.875 1.875 4.3934 1.875 7.5C1.875 10.6066 4.3934 13.125 7.5 13.125Z"
																stroke="#222222"
																stroke-miterlimit="10"
														/>
														<path
																d="M7.5 7.5H10.7812"
																stroke="#222222"
																stroke-linecap="round"
																stroke-linejoin="round"
														/>
														<path
																d="M9.82031 9.82031L7.5 7.5"
																stroke="#222222"
																stroke-width="1.5"
																stroke-linecap="round"
																stroke-linejoin="round"
														/>
													</svg>
													<span>
														<?php
														$date_end       = DateTime::createFromFormat( "d/m/Y", get_sub_field( 'promo_date_end' ) );
														$current_date   = new DateTime();
														$interval       = $current_date->diff( $date_end );
														$remaining_time = $interval->format( '%aд : %hч : %iм' );
														echo $remaining_time;
														?>
													</span>
												</div>
											</div>
											<a class="discount-card__right" href="#">
												<picture>
													<source srcset="<?php the_sub_field( 'promo_img_webp' ); ?>" type="image/webp"/>
													<img src="<?php the_sub_field( 'promo_img_jpg' ); ?>" alt="discount"/>
												</picture>
											</a>
										</article>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>

					<div class="swiper-pagination"></div>
				</div>
			</div>
		</section>


		<section class="news">
			<div class="container">
				<div class="news__content">
					<div class="news__top">
						<h2 class="news__title">Новости</h2>
					</div>

					<div class="news__slider swiper">
						<?php
						$args = array(
							'post_type'      => 'post',
							'post_status'    => 'publish',
							'posts_per_page' => 3,
						);

						$query_news = new WP_Query( $args );

						if ( $query_news->have_posts() ) : ?>

							<ul class="news__slides swiper-wrapper">
								<?php while ( $query_news->have_posts() ) : $query_news->the_post(); ?>
									<li class="news__slide swiper-slide">

										<?php
										$image = get_attached_media( 'image', get_the_ID() );
										$image = array_values( $image );
										?>

										<article
												class="news-card"
												style="background-image: url('<?php echo $image[0]->guid ?>')"
										>
											<div class="news-card__inner">
												<span class="news-card__date"><?php the_time( 'j F Y' ); ?></span>
												<div class="news-card__bottom">
													<h3 class="news-card__title">
														<a href="<?php the_permalink(); ?>">
															<?php the_title(); ?>
														</a>
													</h3>
													<a class="news-card__link" href="<?php the_permalink(); ?>">
														Подробнее
													</a>
												</div>
											</div>
										</article>
									</li>
								<?php endwhile;
								wp_reset_postdata(); ?>
							</ul>

						<?php endif; ?>
					</div>

					<div class="swiper-pagination"></div>
				</div>
			</div>
		</section>


		<section class="reviews">
			<div class="container">
				<div class="reviews__top">
					<h2 class="reviews__title">Отзывы</h2>
				</div>
			</div>
			<div class="container-1360">
				<div class="reviews__content">
					<button
							class="swiper-button-next"
							type="button"
							aria-label="Следующий"
					></button>
					<button
							class="swiper-button-prev"
							type="button"
							aria-label="Предыдущий"
					></button>

					<div class="reviews__slider swiper">
						<ul class="reviews__slides swiper-wrapper">
							<li class="reviews__slide swiper-slide">
								<div class="reviews-card">
									<div class="reviews-card__top">
										<picture>
											<source srcset="<?php echo get_template_directory_uri(); ?>/img/reviews/1.webp" type="image/webp"/>
											<img
													class="reviews-card__img"
													src="<?php echo get_template_directory_uri(); ?>/img/reviews/1.jpg"
													alt="reviews"
											/>
										</picture>

										<div class="reviews-card__info">
											<span class="reviews-card__name">Николай Ветнюков</span>

											<div>
												25 сентября 2022 г. <br/>
												г. Москва
											</div>
										</div>
									</div>

									<div class="reviews-card__content">
                <span class="reviews-card__icon">
                  <svg
		                  width="62"
		                  height="52"
		                  viewBox="0 0 62 52"
		                  fill="none"
		                  xmlns="http://www.w3.org/2000/svg"
                  >
                    <g filter="url(#filter0_d_615_54540)">
                      <path
		                      d="M10 32V23.5789C10 21.0214 10.4552 18.308 11.3655 15.4386C12.3072 12.538 13.657 9.74659 15.4148 7.06433C17.204 4.35088 19.3543 1.9961 21.8655 0L27.8924 4.8655C25.9148 7.67252 24.1883 10.6043 22.713 13.6608C21.2691 16.6862 20.5471 19.9298 20.5471 23.3918V32H10ZM34.1076 32V23.5789C34.1076 21.0214 34.5628 18.308 35.4731 15.4386C36.4148 12.538 37.7646 9.74659 39.5224 7.06433C41.3117 4.35088 43.4619 1.9961 45.9731 0L52 4.8655C50.0224 7.67252 48.296 10.6043 46.8206 13.6608C45.3767 16.6862 44.6547 19.9298 44.6547 23.3918V32H34.1076Z"
		                      fill="white"
                      />
                    </g>
                    <defs>
                      <filter
		                      id="filter0_d_615_54540"
		                      x="0"
		                      y="0"
		                      width="62"
		                      height="52"
		                      filterUnits="userSpaceOnUse"
		                      color-interpolation-filters="sRGB"
                      >
                        <feFlood
		                        flood-opacity="0"
		                        result="BackgroundImageFix"
                        />
                        <feColorMatrix
		                        in="SourceAlpha"
		                        type="matrix"
		                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
		                        result="hardAlpha"
                        />
                        <feOffset dy="10"/>
                        <feGaussianBlur stdDeviation="5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix
		                        type="matrix"
		                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"
                        />
                        <feBlend
		                        mode="normal"
		                        in2="BackgroundImageFix"
		                        result="effect1_dropShadow_615_54540"
                        />
                        <feBlend
		                        mode="normal"
		                        in="SourceGraphic"
		                        in2="effect1_dropShadow_615_54540"
		                        result="shape"
                        />
                      </filter>
                    </defs>
                  </svg>
                </span>
										<div class="reviews-card__text">
											<p>
												Таким образом новая модель организационной деятельности
												играет важную роль в формировании позиций, занимаемых
												участниками в отношении поставленных задач. Разнообразный и
												богатый опыт реализация намеченных плановых заданий
												позволяет оценить значение дальнейших направлений развития.
												Повседневная практика показывает, что новая модель
												организационной деятельности влечет за собой процесс
												внедрения и модернизации направлений прогрессивного развития
												<i>...</i>
												<span class="read-more-text">
                      Идейные соображения высшего порядка, а также начало
                      повседневной работы по формированию позиции представляет
                      собой интересный эксперимент проверки систем массового
                      участия. Повседневная практика показывает, что новая
                      модель организационной деятельности играет важную роль в
                      формировании систем массового участия.
                    </span>

												<button class="reviews-card__more">Читать далее</button>
											</p>
										</div>
									</div>
								</div>
							</li>
							<li class="reviews__slide swiper-slide">
								<div class="reviews-card">
									<div class="reviews-card__top">
										<picture>
											<source srcset="<?php echo get_template_directory_uri(); ?>/img/reviews/1.webp" type="image/webp"/>
											<img
													class="reviews-card__img"
													src="<?php echo get_template_directory_uri(); ?>/img/reviews/1.jpg"
													alt="reviews"
											/>
										</picture>

										<div class="reviews-card__info">
											<span class="reviews-card__name">Николай Ветнюков</span>

											<div>
												25 сентября 2022 г. <br/>
												г. Москва
											</div>
										</div>
									</div>

									<div class="reviews-card__content">
                <span class="reviews-card__icon">
                  <svg
		                  width="62"
		                  height="52"
		                  viewBox="0 0 62 52"
		                  fill="none"
		                  xmlns="http://www.w3.org/2000/svg"
                  >
                    <g filter="url(#filter0_d_615_54540)">
                      <path
		                      d="M10 32V23.5789C10 21.0214 10.4552 18.308 11.3655 15.4386C12.3072 12.538 13.657 9.74659 15.4148 7.06433C17.204 4.35088 19.3543 1.9961 21.8655 0L27.8924 4.8655C25.9148 7.67252 24.1883 10.6043 22.713 13.6608C21.2691 16.6862 20.5471 19.9298 20.5471 23.3918V32H10ZM34.1076 32V23.5789C34.1076 21.0214 34.5628 18.308 35.4731 15.4386C36.4148 12.538 37.7646 9.74659 39.5224 7.06433C41.3117 4.35088 43.4619 1.9961 45.9731 0L52 4.8655C50.0224 7.67252 48.296 10.6043 46.8206 13.6608C45.3767 16.6862 44.6547 19.9298 44.6547 23.3918V32H34.1076Z"
		                      fill="white"
                      />
                    </g>
                    <defs>
                      <filter
		                      id="filter0_d_615_54540"
		                      x="0"
		                      y="0"
		                      width="62"
		                      height="52"
		                      filterUnits="userSpaceOnUse"
		                      color-interpolation-filters="sRGB"
                      >
                        <feFlood
		                        flood-opacity="0"
		                        result="BackgroundImageFix"
                        />
                        <feColorMatrix
		                        in="SourceAlpha"
		                        type="matrix"
		                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
		                        result="hardAlpha"
                        />
                        <feOffset dy="10"/>
                        <feGaussianBlur stdDeviation="5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix
		                        type="matrix"
		                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"
                        />
                        <feBlend
		                        mode="normal"
		                        in2="BackgroundImageFix"
		                        result="effect1_dropShadow_615_54540"
                        />
                        <feBlend
		                        mode="normal"
		                        in="SourceGraphic"
		                        in2="effect1_dropShadow_615_54540"
		                        result="shape"
                        />
                      </filter>
                    </defs>
                  </svg>
                </span>
										<div class="reviews-card__text">
											<p>
												Таким образом новая модель организационной деятельности
												играет важную роль в формировании позиций, занимаемых
												участниками в отношении поставленных задач. Разнообразный и
												богатый опыт реализация намеченных плановых заданий
												позволяет оценить значение дальнейших направлений развития.
												Повседневная практика показывает, что новая модель
												организационной деятельности влечет за собой процесс
												внедрения и модернизации направлений прогрессивного развития
												<i>...</i>
												<span class="read-more-text">
                      Идейные соображения высшего порядка, а также начало
                      повседневной работы по формированию позиции представляет
                      собой интересный эксперимент проверки систем массового
                      участия. Повседневная практика показывает, что новая
                      модель организационной деятельности играет важную роль в
                      формировании систем массового участия.
                    </span>

												<button class="reviews-card__more">Читать далее</button>
											</p>
										</div>
									</div>
								</div>
							</li>
							<li class="reviews__slide swiper-slide">
								<div class="reviews-card">
									<div class="reviews-card__top">
										<picture>
											<source srcset="<?php echo get_template_directory_uri(); ?>/img/reviews/1.webp" type="image/webp"/>
											<img
													class="reviews-card__img"
													src="<?php echo get_template_directory_uri(); ?>/img/reviews/1.jpg"
													alt="reviews"
											/>
										</picture>

										<div class="reviews-card__info">
											<span class="reviews-card__name">Николай Ветнюков</span>

											<div>
												25 сентября 2022 г. <br/>
												г. Москва
											</div>
										</div>
									</div>

									<div class="reviews-card__content">
                <span class="reviews-card__icon">
                  <svg
		                  width="62"
		                  height="52"
		                  viewBox="0 0 62 52"
		                  fill="none"
		                  xmlns="http://www.w3.org/2000/svg"
                  >
                    <g filter="url(#filter0_d_615_54540)">
                      <path
		                      d="M10 32V23.5789C10 21.0214 10.4552 18.308 11.3655 15.4386C12.3072 12.538 13.657 9.74659 15.4148 7.06433C17.204 4.35088 19.3543 1.9961 21.8655 0L27.8924 4.8655C25.9148 7.67252 24.1883 10.6043 22.713 13.6608C21.2691 16.6862 20.5471 19.9298 20.5471 23.3918V32H10ZM34.1076 32V23.5789C34.1076 21.0214 34.5628 18.308 35.4731 15.4386C36.4148 12.538 37.7646 9.74659 39.5224 7.06433C41.3117 4.35088 43.4619 1.9961 45.9731 0L52 4.8655C50.0224 7.67252 48.296 10.6043 46.8206 13.6608C45.3767 16.6862 44.6547 19.9298 44.6547 23.3918V32H34.1076Z"
		                      fill="white"
                      />
                    </g>
                    <defs>
                      <filter
		                      id="filter0_d_615_54540"
		                      x="0"
		                      y="0"
		                      width="62"
		                      height="52"
		                      filterUnits="userSpaceOnUse"
		                      color-interpolation-filters="sRGB"
                      >
                        <feFlood
		                        flood-opacity="0"
		                        result="BackgroundImageFix"
                        />
                        <feColorMatrix
		                        in="SourceAlpha"
		                        type="matrix"
		                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
		                        result="hardAlpha"
                        />
                        <feOffset dy="10"/>
                        <feGaussianBlur stdDeviation="5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix
		                        type="matrix"
		                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"
                        />
                        <feBlend
		                        mode="normal"
		                        in2="BackgroundImageFix"
		                        result="effect1_dropShadow_615_54540"
                        />
                        <feBlend
		                        mode="normal"
		                        in="SourceGraphic"
		                        in2="effect1_dropShadow_615_54540"
		                        result="shape"
                        />
                      </filter>
                    </defs>
                  </svg>
                </span>
										<div class="reviews-card__text">
											<p>
												Таким образом новая модель организационной деятельности
												играет важную роль в формировании позиций, занимаемых
												участниками в отношении поставленных задач. Разнообразный и
												богатый опыт реализация намеченных плановых заданий
												позволяет оценить значение дальнейших направлений развития.
												Повседневная практика показывает, что новая модель
												организационной деятельности влечет за собой процесс
												внедрения и модернизации направлений прогрессивного развития
												<i>...</i>
												<span class="read-more-text">
                      Идейные соображения высшего порядка, а также начало
                      повседневной работы по формированию позиции представляет
                      собой интересный эксперимент проверки систем массового
                      участия. Повседневная практика показывает, что новая
                      модель организационной деятельности играет важную роль в
                      формировании систем массового участия.
                    </span>

												<button class="reviews-card__more">Читать далее</button>
											</p>
										</div>
									</div>
								</div>
							</li>
							<li class="reviews__slide swiper-slide">
								<div class="reviews-card">
									<div class="reviews-card__top">
										<picture>
											<source srcset="<?php echo get_template_directory_uri(); ?>/img/reviews/1.webp" type="image/webp"/>
											<img
													class="reviews-card__img"
													src="<?php echo get_template_directory_uri(); ?>/img/reviews/1.jpg"
													alt="reviews"
											/>
										</picture>

										<div class="reviews-card__info">
											<span class="reviews-card__name">Николай Ветнюков</span>

											<div>
												25 сентября 2022 г. <br/>
												г. Москва
											</div>
										</div>
									</div>

									<div class="reviews-card__content">
                <span class="reviews-card__icon">
                  <svg
		                  width="62"
		                  height="52"
		                  viewBox="0 0 62 52"
		                  fill="none"
		                  xmlns="http://www.w3.org/2000/svg"
                  >
                    <g filter="url(#filter0_d_615_54540)">
                      <path
		                      d="M10 32V23.5789C10 21.0214 10.4552 18.308 11.3655 15.4386C12.3072 12.538 13.657 9.74659 15.4148 7.06433C17.204 4.35088 19.3543 1.9961 21.8655 0L27.8924 4.8655C25.9148 7.67252 24.1883 10.6043 22.713 13.6608C21.2691 16.6862 20.5471 19.9298 20.5471 23.3918V32H10ZM34.1076 32V23.5789C34.1076 21.0214 34.5628 18.308 35.4731 15.4386C36.4148 12.538 37.7646 9.74659 39.5224 7.06433C41.3117 4.35088 43.4619 1.9961 45.9731 0L52 4.8655C50.0224 7.67252 48.296 10.6043 46.8206 13.6608C45.3767 16.6862 44.6547 19.9298 44.6547 23.3918V32H34.1076Z"
		                      fill="white"
                      />
                    </g>
                    <defs>
                      <filter
		                      id="filter0_d_615_54540"
		                      x="0"
		                      y="0"
		                      width="62"
		                      height="52"
		                      filterUnits="userSpaceOnUse"
		                      color-interpolation-filters="sRGB"
                      >
                        <feFlood
		                        flood-opacity="0"
		                        result="BackgroundImageFix"
                        />
                        <feColorMatrix
		                        in="SourceAlpha"
		                        type="matrix"
		                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
		                        result="hardAlpha"
                        />
                        <feOffset dy="10"/>
                        <feGaussianBlur stdDeviation="5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix
		                        type="matrix"
		                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"
                        />
                        <feBlend
		                        mode="normal"
		                        in2="BackgroundImageFix"
		                        result="effect1_dropShadow_615_54540"
                        />
                        <feBlend
		                        mode="normal"
		                        in="SourceGraphic"
		                        in2="effect1_dropShadow_615_54540"
		                        result="shape"
                        />
                      </filter>
                    </defs>
                  </svg>
                </span>
										<div class="reviews-card__text">
											<p>
												Таким образом новая модель организационной деятельности
												играет важную роль в формировании позиций, занимаемых
												участниками в отношении поставленных задач. Разнообразный и
												богатый опыт реализация намеченных плановых заданий
												позволяет оценить значение дальнейших направлений развития.
												Повседневная практика показывает, что новая модель
												организационной деятельности влечет за собой процесс
												внедрения и модернизации направлений прогрессивного развития
												<i>...</i>
												<span class="read-more-text">
                      Идейные соображения высшего порядка, а также начало
                      повседневной работы по формированию позиции представляет
                      собой интересный эксперимент проверки систем массового
                      участия. Повседневная практика показывает, что новая
                      модель организационной деятельности играет важную роль в
                      формировании систем массового участия.
                    </span>

												<button class="reviews-card__more">Читать далее</button>
											</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>

					<div class="swiper-pagination"></div>
				</div>
			</div>
		</section>

		<section class="contacts">
			<div class="container">
				<div class="contacts__wrapper">
					<h2 class="contacts__title">Контакты</h2>

					<div class="contacts__box">
						<div class="contacts__item">
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
										stroke-miterlimit="10"
								/>
								<path
										d="M10 10H14.375"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
								<path
										d="M13.0938 13.0938L10 10"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
							</svg>
							<?php the_field( 'contacts_time_work' ); ?>
						</div>
						<div class="contacts__item">
							<svg
									width="20"
									height="20"
									viewBox="0 0 20 20"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
							>
								<path
										d="M7.22656 9.75015C7.8697 11.0783 8.94366 12.1495 10.2734 12.7892C10.3715 12.8357 10.48 12.8558 10.5882 12.8475C10.6965 12.8393 10.8007 12.8031 10.8906 12.7423L12.8437 11.4376C12.93 11.3791 13.0298 11.3434 13.1336 11.3338C13.2374 11.3243 13.342 11.3412 13.4375 11.383L17.0938 12.9533C17.2187 13.0053 17.3231 13.0969 17.3909 13.2141C17.4586 13.3313 17.486 13.4675 17.4688 13.6017C17.3529 14.5062 16.9114 15.3375 16.2269 15.94C15.5424 16.5425 14.6619 16.8749 13.75 16.8751C10.9321 16.8751 8.22956 15.7557 6.23699 13.7632C4.24442 11.7706 3.125 9.06807 3.125 6.25015C3.12521 5.33827 3.45767 4.45771 4.06018 3.77324C4.66269 3.08877 5.49395 2.64728 6.39844 2.5314C6.53269 2.51415 6.66888 2.54152 6.78605 2.60928C6.90322 2.67704 6.99487 2.78144 7.04687 2.9064L8.61719 6.57046C8.65802 6.66448 8.67511 6.7671 8.66693 6.86928C8.65876 6.97146 8.62558 7.07006 8.57031 7.1564L7.26562 9.14077C7.20754 9.23052 7.17345 9.33368 7.16661 9.44037C7.15977 9.54705 7.18041 9.65371 7.22656 9.75015V9.75015Z"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
							</svg>
							<a class="contacts__phone" href="+7<?php the_field( 'contacts_phone1' ); ?>">8<?php the_field( 'contacts_phone1' ); ?></a>
							<a class="contacts__phone" href="+7<?php the_field( 'contacts_phone2' ); ?>">8<?php the_field( 'contacts_phone2' ); ?></a>
						</div>
						<div class="contacts__item">
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

							<span><?php the_field( 'contacts_adress' ); ?></span>
						</div>
						<div class="contacts__item">
							<svg
									width="20"
									height="20"
									viewBox="0 0 20 20"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
							>
								<path
										d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
								<path
										d="M14.1484 16.2502C12.7563 17.1745 11.0954 17.6074 9.42927 17.4802C7.76311 17.353 6.18713 16.6731 4.95141 15.5483C3.71569 14.4234 2.891 12.9182 2.6082 11.2713C2.3254 9.62435 2.60069 7.93018 3.39039 6.45755C4.18008 4.98492 5.43895 3.81819 6.96725 3.14249C8.49554 2.46678 10.2057 2.32082 11.8264 2.72774C13.4471 3.13467 14.8855 4.07118 15.9134 5.38868C16.9412 6.70617 17.4996 8.32919 17.5 10.0002C17.5 11.7268 16.875 13.1252 15.3125 13.1252C13.75 13.1252 13.125 11.7268 13.125 10.0002V6.87519"
										stroke="#222222"
										stroke-width="1.5"
										stroke-linecap="round"
										stroke-linejoin="round"
								/>
							</svg>
							<a href="mailto:brigabir152@mail.ru">
								<span><?php the_field( 'contacts_email' ); ?></span>
							</a>
						</div>
					</div>

					<div class="contacts__map map">
						<iframe
								src="<?php the_field( 'yandex_map_link' ); ?>"
								width="800"
								height="400"
						></iframe>
					</div>
				</div>
			</div>
		</section>

	</main>

<?php get_footer(); ?>