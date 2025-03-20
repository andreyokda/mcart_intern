<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>   

<div class="site-blocks-cover overlay" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?= GetMessage("PROPERTY_DETAILS")?></span>
        <h1 class="mb-2"><?=$arResult["DETAIL_PICTURE"]["TITLE"]?></h1>
        <p class="mb-5"><strong class="h2 text-success font-weight-bold">$<?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?></strong></p>
      </div>
    </div>
  </div>
</div>

<div class="site-section site-section-sm">
  <div class="container">
    <div class="row">
      <div class="col-lg-8" style="margin-top: -150px;">
        <div class="mb-5">
          <div class="slide-one-item home-slider owl-carousel">
            <?php
            $imageGallery = $arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['VALUE'];
            if (!empty($imageGallery)) {
              foreach ($imageGallery as $imageId) {
                  $imagePath = CFile::GetPath($imageId);
                  ?>
                  <div><img src="<?= $imagePath ?>" alt="Gallery Image" class="img-fluid"></div>
                  <?php
                          }
                      } else {
                          echo '<div class="col-12">No images found.</div>';
                      }
                      ?>
          </div>
        </div>
      
        <div class="bg-white">
          <div class="row mb-5">
            <div class="col-md-6">
              <strong class="text-success h1 mb-3">$<?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong>
            </div>
            <div class="col-md-6">
              <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                <li>
                  <span class="property-specs"><?= GetMessage("DATE")?></span>
                    <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
                      <span class="property-specs-number"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
                    <?endif;?>
                </li>
                <li>
                  <span class="property-specs"><?= GetMessage("BEDS")?></span>
                  <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["NUMBER_OF_FLOORS"]["VALUE"] ?? '0'?></span>
                </li>
                <li>
                  <span class="property-specs"><?= GetMessage("AREA")?></span>
                  <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["TOTAL_AREA"]["VALUE"] ?? '0'?><?= GetMessage("METER")?><sup>2</sup></span>
                </li>
              </ul>
            </div>
          </div>

        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
            <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage("BATHS")?></span>
            <strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"] ?? '0'?></strong>
          </div>
          <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
            <span class="d-inline-block text-black mb-0 caption-text"><?= GetMessage("GARAGES")?></span>
            <strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"] ?? '0'?></strong>
          </div>
        </div>

        <h2 class="h4 text-black"><?= GetMessage("MORE_INFO")?></h2>

        <p><?=$arResult["DETAIL_TEXT"] ?: $arResult["PREVIEW_TEXT"]?></p>  

        <div class="row mt-5">
          <div class="col-12">
            <h2 class="h4 text-black mb-3"><?= GetMessage("PROPERTY_GALLERY")?></h2>
          </div>

            <?php
            $imageGallery = $arResult['DISPLAY_PROPERTIES']['IMAGE_GALLERY']['VALUE'];
            if (!empty($imageGallery)) {
              foreach ($imageGallery as $imageId) {
                  $imagePath = CFile::GetPath($imageId);
                  ?>
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                      <a href="<?= $imagePath ?>" class="image-popup gal-item">
                          <img src="<?= $imagePath ?>" alt="Image" class="img-fluid">
                      </a>
                  </div>
                  <?php
                          }
                      } else {
                          echo '<div class="col-12">No images found.</div>';
                      }
                      ?>
          </div>
          </div>
          </div>

            

          <div class="col-lg-4 pl-md-5">
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3"><?= GetMessage("CONTACT_AGENT")?></h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>

          </div>

          <div class="col-lg-8">
          <?php if (!empty($arResult['DISPLAY_PROPERTIES']['MATERIALS']['VALUE'])): ?>
              
                  <h3>Материалы<?= GetMessage("")?></h3>
                  <ul>
                      <?php foreach ($arResult['DISPLAY_PROPERTIES']['MATERIALS']['VALUE'] as $fileId): ?>
                          <?php
                          $filePath = CFile::GetPath($fileId);
                          ?>
                          <li>
                              <a href="<?= $filePath ?>" target="_blank">Скачать файл</a>
                          </li>
                      <?php endforeach; ?>
                  </ul>
              
          <?php endif; ?>
          </div>

          <div class="col-lg-8">
          <?php if (!empty($arResult['DISPLAY_PROPERTIES']['LINKS_TO_RESOURCES']['VALUE'])): ?>
              
                  <h3>Ссылки на ресурсы<?= GetMessage("")?></h3>
                  <ul>
                      <?php foreach ($arResult['DISPLAY_PROPERTIES']['LINKS_TO_RESOURCES']['VALUE'] as $link): ?>
                          <li><a href="<?= $link ?>" target="_blank"><?= $link ?></a></li>
                      <?php endforeach; ?>
                  </ul>
              
          <?php endif; ?>
          </div>
          
    </div>
  </div>
</div>






 
  
