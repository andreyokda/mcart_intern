<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("page_css_class", "dashboard");
$APPLICATION->SetTitle("Дашборд");
?>

<div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
          
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">



                <div class="card-body">
                  <h5 class="card-title">Последние заказы</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Покупатель</th>
                        <th scope="col">Город</th>
                        <th scope="col">Сумма</th>
                        <th scope="col">Статус</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#404</a></th>
                        <td>Иванов Иван</td>
                        <td><a href="#" class="text-primary">Москва</a></td>
                        <td>3 500</td>
                        <td><span class="badge bg-success">Подтвержден</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#405</a></th>
                        <td>Петрова Анна</td>
                        <td><a href="#" class="text-primary">Санкт-Петербург</a></td>
                        <td>4 200</td>
                        <td><span class="badge bg-warning">Ожидание</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#406</a></th>
                        <td>Сидоров Алексей</td>
                        <td><a href="#" class="text-primary">Новосибирск</a></td>
                        <td>2 800</td>
                        <td><span class="badge bg-success">Подтвержден</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#407</a></th>
                        <td>Кузнецова Мария</td>
                        <td><a href="#" class="text-primar">Екатеринбург</a></td>
                        <td>3 100</td>
                        <td><span class="badge bg-danger">Отменен</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#408</a></th>
                        <td>Волков Дмитрий</td>
                        <td><a href="#" class="text-primary">Казань</a></td>
                        <td>3 900</td>
                        <td><span class="badge bg-success">Подтвержден</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Топ продаж</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Превью</th>
                        <th scope="col">Товар</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Выручка</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="/local/templates/exam1_type2/assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ноутбук Dell XPS</a></td>
                        <td>50 000</td>
                        <td class="fw-bold">120</td>
                        <td>6 000 000</td>
                      </tr> 
                      <tr>
                        <th scope="row"><a href="#"><img src="/local/templates/exam1_type2/assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Смартфон Samsung Galaxy</a></td>
                        <td>30 000</td>
                        <td class="fw-bold">150</td>
                        <td>4 500 000</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="/local/templates/exam1_type2/assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Телевизор LG OLED</a></td>
                        <td>40 000</td>
                        <td class="fw-bold">100</td>
                        <td>4 000 000</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="/local/templates/exam1_type2/assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Кофеварка De'Longhi</a></td>
                        <td>7 000</td>
                        <td class="fw-bold">300</td>
                        <td>2 100 000</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="/local/templates/exam1_type2/assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Наушники Sony</a></td>
                        <td>5 000</td>
                        <td class="fw-bold">400</td>
                        <td>2 000 000</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Последняя активность</h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">5 мин</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                      Заказ передан в доставку
                  </div>
                </div><!-- End activity item-->

                  <div class="activity-item d-flex">
                  <div class="activite-label">10 мин</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                      Заказ подтвержден
                  </div>
                  </div>
                  <div class="activity-item d-flex">
                  <div class="activite-label">15 мин</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                      Заказ оплачен
                  </div>
                  </div>
                  <div class="activity-item d-flex">
                  <div class="activite-label">20 мин</div>
                  <i class='bi bi-circle-fill activity-badge text-warning  align-self-start'></i>
                  <div class="activity-content">
                      Оформлен заказ
                  </div>
                  </div>
                  <div class="activity-item d-flex">
                  <div class="activite-label">25 мин</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                      Пользователь добавил товар в корзину
                  </div>
                  </div>
                  <div class="activity-item d-flex">
                  <div class="activite-label">31 мин</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                      Пользователь зарегистрировался
                  </div>
                  </div>
                  <div class="activity-item d-flex">
                  <div class="activite-label">49 мин</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                      Пользователь оставил отзыв о товаре
                  </div>
                  </div>
                  <div class="activity-item d-flex">
                  <div class="activite-label">52 мин</div>
                  <i class='bi bi-circle-fill activity-badge  text-warning align-self-start'></i>
                  <div class="activity-content">
                      Пользователь подписался на рассылку
                  </div>
                  </div>
                  <div class="activity-item d-flex">
                  <div class="activite-label">55 мин</div>
                  <i class='bi bi-circle-fill activity-badge  text-muted align-self-start'></i>
                  <div class="activity-content">
                      Пользователь просмотрел страницу товара
                  </div>
                  </div>
                  <div class="activity-item d-flex">
                  <div class="activite-label">59 мин</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                      Пользователь создал аккаунт
                  </div>
                  </div>
              </div>
            </div>
          </div><!-- End Recent Activity -->                   
        </div><!-- End Right side columns -->

      </div>


      <div class="row">
            <div class="col-12">

              <!-- News & Updates Traffic -->
                <div class="card">
                  <div class="card-body pb-4">
                    <h5 class="card-title">Новости</h5>

                    <div class="news">
                      <div class="post-item clearfix">
                        <img src="/local/templates/exam1_type2/assets/img/news-1.jpg" alt="">
                        <h4><a href="#">Большая распродажа выходного дня!</a></h4>
                        <p>Скидки до 50% на все категории товаров. Успейте купить по выгодным ценам!...</p>
                      </div>

                      <div class="post-item clearfix">
                        <img src="/local/templates/exam1_type2/assets/img/news-2.jpg" alt="">
                        <h4><a href="#">Новая коллекция осень-зима</a></h4>
                        <p>Откройте для себя стильные новинки сезона. Будьте в тренде!...</p>
                      </div>

                      <div class="post-item clearfix">
                        <img src="/local/templates/exam1_type2/assets/img/news-3.jpg" alt="">
                        <h4><a href="#">Бесплатная доставка на все заказы</a></h4>
                        <p>Только до конца недели! Не упустите шанс сэкономить на доставке...</p>
                      </div>

                      <div class="post-item clearfix">
                        <img src="/local/templates/exam1_type2/assets/img/news-4.jpg" alt="">
                        <h4><a href="#">Эксклюзивные предложения для подписчиков</a></h4>
                        <p>Подпишитесь на рассылку и получайте специальные скидки и акции....</p>
                      </div>

                      <div class="post-item clearfix">
                        <img src="/local/templates/exam1_type2/assets/img/news-5.jpg" alt="">
                        <h4><a href="#">Конкурс: выиграй сертификат на 5000 руб.</a></h4>
                        <p>Участвуйте и получите шанс на покупку мечты в нашем магазине!...</p>
                      </div>

                    </div><!-- End sidebar recent posts-->

                  </div>
                </div><!-- End News & Updates -->

            </div>
      </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>