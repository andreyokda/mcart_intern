<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("page_text_under_title", "Погрузитесь в инновации и передовые идеи с нашими статьями");
$APPLICATION->SetTitle("Статьи");
?>




		<!-- Blog Posts Section -->
		<section id="blog-posts" class="blog-posts section">

			<div class="container">
				<div class="row gy-4">

					<div class="col-lg-4">
						<article>
							<div class="post-img">
								<img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/articles/blog-1.jpg" alt="" class="img-fluid">
							</div>
							<p class="post-category">Инновации в инжиниринге</p>
							<h2 class="title">
								<a href="#">Новые технологии кардинально меняют подходы в промышленном инжиниринге. Рассмотрим, как автоматизация и цифровизация повышают эффективность процессов.</a>
							</h2>
							<div class="d-flex align-items-center">
								<div class="post-meta">
									<p class="post-date">
										<time datetime="2022-01-01">Октябрь 2024</time>
									</p>
								</div>
							</div>
						</article>
					</div><!-- End post list item -->

					<div class="col-lg-4">
						<article>
							<div class="post-img">
								<img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/articles/blog-2.jpg" alt="" class="img-fluid">
							</div>
							<p class="post-category">Тренды 2024 года</p>
							<h2 class="title">
								<a href="#">В этом году в сфере промышленного инжиниринга ожидаются ключевые изменения. Узнайте, какие направления будут особенно актуальны.</a>
							</h2>
							<div class="d-flex align-items-center">
								<div class="post-meta">
									<p class="post-date">
										<time datetime="2022-01-01">Сентябрь 2024</time>
									</p>
								</div>
							</div>
						</article>
					</div><!-- End post list item -->

					<div class="col-lg-4">
						<article>
							<div class="post-img">
								<img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/articles/blog-3.jpg" alt="" class="img-fluid">
							</div>
							<p class="post-category">Безопасность на производстве</p>
							<h2 class="title">
								<a href="#">Как обеспечить безопасность на промышленных объектах? Обзор лучших практик и технологий.</a>
							</h2>
							<div class="d-flex align-items-center">
								<div class="post-meta">
									<p class="post-date">
										<time datetime="2022-01-01">Август 2024</time>
									</p>
								</div>
							</div>
						</article>
					</div><!-- End post list item -->

					<div class="col-lg-4">
						<article>
							<div class="post-img">
								<img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/articles/blog-4.jpg" alt="" class="img-fluid">
							</div>
							<p class="post-category">Кейс: Успешный проект</p>
							<h2 class="title">
								<a href="#">Подробный разбор нашего успешного проекта: от идеи до реализации. Узнайте, как мы справились с вызовами и достигли результатов</a>
							</h2>
							<div class="d-flex align-items-center">
								<div class="post-meta">
									<p class="post-date">
										<time datetime="2022-01-01">Август 2024</time>
									</p>
								</div>
							</div>
						</article>
					</div><!-- End post list item -->

					<div class="col-lg-4">
						<article>
							<div class="post-img">
								<img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/articles/blog-5.jpg" alt="" class="img-fluid">
							</div>
							<p class="post-category">Управление проектами</p>
							<h2 class="title">
								<a href="#">Как оптимизировать управление проектами в промышленности? Делимся советами по планированию и мониторингу.</a>
							</h2>
							<div class="d-flex align-items-center">
								<div class="post-meta">
									<p class="post-date">
										<time datetime="2022-01-01">Август 2024</time>
									</p>
								</div>
							</div>
						</article>
					</div><!-- End post list item -->

					<div class="col-lg-4">
						<article>
							<div class="post-img">
								<img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/articles/blog-6.jpg" alt="" class="img-fluid">
							</div>
							<p class="post-category">Современные материалы </p>
							<h2 class="title">
								<a href="#">Как новые материалы меняют промышленный инжиниринг? Рассмотрим примеры инновационных решений и их преимущества.</a>
							</h2>
							<div class="d-flex align-items-center">
								<div class="post-meta">
									<p class="post-date">
										<time datetime="2022-01-01">Август 2024</time>
									</p>
								</div>
							</div>
						</article>
					</div><!-- End post list item -->

				</div>
			</div>

		</section><!-- /Blog Posts Section -->

		<!-- Blog Pagination Section -->
		<section id="blog-pagination" class="blog-pagination section">

			<div class="container">
				<div class="d-flex justify-content-center">
					<ul>
						<li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#" class="active">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li>...</li>
						<li><a href="#">10</a></li>
						<li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
					</ul>
				</div>
			</div>

		</section><!-- /Blog Pagination Section -->

	</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>