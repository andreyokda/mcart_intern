<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<footer id="footer" class="footer dark-background">

<?$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"search_form_template",
	Array(
		"PAGE" => "#SITE_DIR#search/",
		"USE_SUGGEST" => "N"
	)
);?>



		<div class="container footer-top">
			<div class="row gy-4">
				<div class="col-lg-4 col-md-6 footer-about">
					<a href="#" class="d-flex align-items-center">
						<span class="sitename">Компания</span>
					</a>
					<div class="footer-contact pt-3">
						<p>111111 Москва</p>
						<p>Улица, номер, офис</p>
						<p class="mt-3"><strong>Телефон:</strong> <span>+7 000 000 00 00</span></p>
						<p><strong>Email:</strong> <span>contact@company.ru</span></p>
					</div>
				</div>

				<div class="col-lg-2 col-md-3 footer-links">
					<h4>Полезные ссылки</h4>
					<ul>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Главная</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">О Комапнии</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Услуги</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Портфолио</a></li>
					</ul>
				</div>

				<div class="col-lg-2 col-md-3 footer-links">
					<h4>Наши услуги</h4>
					<ul>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Проектирование</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Продажи</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Установка</a></li>
						<li><i class="bi bi-chevron-right"></i> <a href="#">Консультации</a></li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-12">
					<h4>Оставайтесь на связи</h4>
					<p>Мы рады видеть вас в наших соцсетях</p>
					<div class="social-links d-flex">
						<a class="forimg" href="#"><img src="/local/templates/.default/assets/img/ico/vk_w.svg"></a>
					</div>
				</div>

			</div>
		</div>

		<div class="container copyright text-center mt-4">
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you've purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>

	</footer>

</body>
</html>