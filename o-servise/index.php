<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"template_breadcrumb",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>

<div class="site-section border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"template_include_image",
				Array(
					"AREA_FILE_SHOW" => "page",
					"AREA_FILE_SUFFIX" => "about_image",
					"EDIT_TEMPLATE" => ""
				)
			);?><br>
			</div>
		
			<div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="200">
				<div class="site-section-title mb-3">
					<h2>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "about_head",
							"EDIT_TEMPLATE" => ""
						)
					);?>
					</h2>
					</div>
					<p>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "about_text1",
							"EDIT_TEMPLATE" => ""
						)
					);?>
					</p>
					<p>
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "page",
							"AREA_FILE_SUFFIX" => "about_text2",
							"EDIT_TEMPLATE" => ""
						)
					);?>
					</p>
				</div>
			</div>
		</div>
	</div>
 <br>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>