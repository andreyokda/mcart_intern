<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("page_text_under_title", "Свяжитесь с нами — мы всегда готовы помочь и ответить на ваши вопросы.");
$APPLICATION->SetTitle("Контакты");
?>



    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" >
                  <i class="bi bi-geo-alt"></i>
                  <h3>Адрес</h3>
                  <p>111111 Москва, улица, номер, офис</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-telephone"></i>
                  <h3>Телефон</h3>
                  <p>+7 000 000 00 00</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>contact@company.ru</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form action="#" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Имя" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Тема" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Сообщение" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Отправка</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Сообщение отправлено, спасибо!</div>

                  <button type="submit">Отправить</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>


    </section><!-- /Contact Section -->

  </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>