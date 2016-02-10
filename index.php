<?php get_header(); ?>
          <div class="general__container clearfix">
            <h1 class="page__title">Мобильные телефоны</h1>
            <div class="sidebar">
              <nav class="price-select">
                <ul class="price-select__list">
                  <li class="price-select__item "><a href="#" class="price-select__link">Флагманы</a></li>
                  <li class="price-select__item price-select__item_active"><a href="#" class="price-select__link">Бюджетная линейка</a></li>
                </ul>
              </nav>
              <div class="accordeon">
                <ul class="accordeon__list">
                  <li class="accordeon__item"><a class="accordeon__trigger">Наличие в магазинах</a>
                  <div class="accordeon__item__select">
                    <ul class="accordeon__list-radio list-radio">
                      <li class="list-radio__item">
                        <label class="list-radio__label">
                          <input type="radio" class="list-radio__input-radio-origin">
                          <div class="list-radio__input-radio-fake"></div>
                          <div class="list-radio__item__title">Во всех магазинах</div>
                        </label>
                      </li>
                      <li class="list-radio__item">
                        <label class="list-radio__label">
                          <input type="radio" class="list-radio__input-radio-origin">
                          <div class="list-radio__input-radio-fake"></div>
                          <div class="list-radio__item__title">В ближайшем ко мне магазине</div>
                        </label>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="accordeon__item"><a class="accordeon__trigger">Бренды</a>
                <div class="accordeon__item__select">
                  <ul class="accordeon__list-check list-check">
                    <li class="list-check__item">
                      <label class="list-check__label">
                        <input type="checkbox" class="list-check__input-check-origin">
                        <div class="list-check__input-check-fake"></div>
                        <div class="list-check__item__title">Lenovo</div>
                      </label>
                    </li>
                    <li class="list-check__item">
                      <label class="list-check__label">
                        <input type="checkbox" class="list-check__input-check-origin">
                        <div class="list-check__input-check-fake"></div>
                        <div class="list-check__item__title">Apple</div>
                      </label>
                    </li>
                    <li class="list-check__item">
                      <label class="list-check__label">
                        <input type="checkbox" class="list-check__input-check-origin">
                        <div class="list-check__input-check-fake"></div>
                        <div class="list-check__item__title">Samsung</div>
                      </label>
                    </li>
                    <li class="list-check__item">
                      <label class="list-check__label">
                        <input type="checkbox" class="list-check__input-check-origin">
                        <div class="list-check__input-check-fake"></div>
                        <div class="list-check__item__title">Asus</div>
                      </label>
                    </li>
                    <li class="list-check__item">
                      <label class="list-check__label">
                        <input type="checkbox" class="list-check__input-check-origin">
                        <div class="list-check__input-check-fake"></div>
                        <div class="list-check__item__title">Motorola</div>
                      </label>
                    </li>
                    </ul><a href="#" class="accordeon__reset-filter">Сбросить фильтр</a>
                  </div>
                </li>
                <li class="accordeon__item"><a class="accordeon__trigger">Цена</a>
                <div class="accordeon__item__select">
                  <div class="price-fields price-slider clearfix">
                    <div class="price-field price-field_start"><span class="price-field__text">от</span>
                    <input type="text" value="0" id="minCost" class="price-field__input">
                  </div>
                  <div class="price-field price-field_end"><span class="price-field__text">до</span>
                  <input type="text" value="26000" id="maxCost" class="price-field__input">
                </div>
              </div>
              <div class="slider-interval">
                <div id="slider" class="slider-interval__range"></div>
              </div>
            </div>
          </li>
          <li class="accordeon__item"><a class="accordeon__trigger">Цвет</a>
          <div class="accordeon__item__select">
            <ul class="accordeon__list-colors list-colors">
              <li class="list-colors__item"><a href="#" class="list-colors__link link-white"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-grey"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-black"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-dark-blue"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-red"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-yellow"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-orange"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-green"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-blue"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-purple"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-pink"></a></li>
              <li class="list-colors__item"><a href="#" class="list-colors__link link-brown"></a></li>
            </ul>
          </div>
        </li>
        <li class="accordeon__item"><a class="accordeon__trigger">Операционные системы</a>
        <div class="accordeon__item__select">
          <ul class="accordeon__list-check list-check">
            <li class="list-check__item">
              <label class="list-check__label">
                <input type="checkbox" class="list-check__input-check-origin">
                <div class="list-check__input-check-fake"></div>
                <div class="list-check__item__title">Android</div>
              </label>
            </li>
            <li class="list-check__item">
              <label class="list-check__label">
                <input type="checkbox" class="list-check__input-check-origin">
                <div class="list-check__input-check-fake"></div>
                <div class="list-check__item__title">iOS</div>
              </label>
            </li>
            <li class="list-check__item">
              <label class="list-check__label">
                <input type="checkbox" class="list-check__input-check-origin">
                <div class="list-check__input-check-fake"></div>
                <div class="list-check__item__title">Windows Mobile</div>
              </label>
            </li>
            <li class="list-check__item">
              <label class="list-check__label">
                <input type="checkbox" class="list-check__input-check-origin">
                <div class="list-check__input-check-fake"></div>
                <div class="list-check__item__title">Symbian</div>
              </label>
            </li>
            <li class="list-check__item">
              <label class="list-check__label">
                <input type="checkbox" class="list-check__input-check-origin">
                <div class="list-check__input-check-fake"></div>
                <div class="list-check__item__title">Custom</div>
              </label>
            </li>
            </ul><a href="#" class="accordeon__reset-filter">Сбросить фильтр</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <section class="main-content">
    <div class="filters clearfix">
      <div class="filter filter-select"><span class="filter__title">Сортировать по</span>
      <select class="filter__select">
        <option value="price" class="filter__select__option">по цене</option>
        <option value="rating" class="filter__select__option">по популярности</option>
      </select>
    </div>
    <div class="filter filter-view"><span class="filter__title">Вид каталога</span>
    <ul class="view-list">
      <li class="view-list__item view-list__item_list-one"><a href="#" class="view-list__link"></a></li>
      <li class="view-list__item view-list__item_list-two"><a href="#" class="view-list__link"></a></li>
      <li class="view-list__item view-list__item_list-three"><a href="#" class="view-list__link"></a></li>
    </ul>
  </div>
</div>
<div class="product-list clearfix">
  <div class="product-item">
    <div class="product-item__slider slider-product">
      <div class="slider-product__wrap-main-img"><img src="<?php bloginfo('template_directory'); ?>/img/galaxys3.jpg" width="93" height="123" class="slider-product__main-img"></div>
      <div class="slider-product__min">
        <ul class="slider-product__min-list">
          <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/galaxys3.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img//galaxys3-min.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
          <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-2.jpg" class="products__slideshow-link"><img src="images/min-2.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
          <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-3.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-3.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
        </ul>
      </div>
      <div class="product-item__vendor vendor-product"><span class="vendor-product__text">Артикул </span><span class="vendor-product__value">189238</span></div>
    </div>
    <div class="product-item__description description-product">
      <h2 class="description-product__title">Samsung GT-193011 GALAXY S 3</h2>
      <p class="description-product__text">Смартфон Samsung GT-I9301I GALAXY S 3 Ceramic White Моноблок, Micro-SIM, Android 4.4, 3G, Bluetooth 4.0, EDGE, GPRS, WAP, Wi-Fi, Количество ядер процессора 4, Частота процессора 1400 МГц... </p>
      <div class="description-product__options options-product">
        <ul class="options-product__list">
          <li class="options-product__item">
            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Тип Sim-карты </span><span class="options-product__item__value">Micro SIM</span></div>
          </li>
          <li class="options-product__item">
            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Количество SIM-карт </span><span class="options-product__item__value">1</span></div>
          </li>
          <li class="options-product__item">
            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Цвет </span><span class="options-product__item__value">Белый</span></div>
          </li>
          <li class="options-product__item">
            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">ОС </span><span class="options-product__item__value">Android</span></div>
          </li>
          <li class="options-product__item">
            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Связь 3G </span><span class="options-product__item__value">Есть</span></div>
          </li>
          <li class="options-product__item">
            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">4G (LTE) </span><span class="options-product__item__value">Нет</span></div>
          </li>
          <li class="options-product__item">
            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">CPS-модуль </span><span class="options-product__item__value">Есть</span></div>
          </li>
        </ul>
      </div>
      <div class="description-product__rating">
        <ul class="description-product__rating__list">
          <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
          <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
          <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
          <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
          <li class="description-product__rating__item"><a href="#" class="description-product__rating__link"></a></li>
          </ul><span class="description-product__rating__value">4</span>
        </div>
      </div>
      <div class="product-item__purchase purchase-product clearfix">
        <div class="purchase-product__price">11 290</div>
        <div class="purchase-product__buy">
          <input type="submit" value="В корзину" class="purchase-product__in-basket">
          <div class="purchase-product__wrap-availability"><span class="purchase-product__availability">В наличии</span></div>
        </div>
      </div>
    </div>
    <div class="product-item">
      <div class="product-item__slider slider-product">
        <div class="slider-product__wrap-main-img"><img src="<?php bloginfo('template_directory'); ?>/img/lumia640.jpg" width="93" height="123" class="slider-product__main-img"></div>
        <div class="slider-product__min">
          <ul class="slider-product__min-list">
            <li class="slider-product__min-list__item">
              <a href="<?php bloginfo('template_directory'); ?>/img/lumia640.jpg" class="products__slideshow-link">
                <img src="<?php bloginfo('template_directory'); ?>/img/lumia640-min.jpg" width="20" height="28" class="slider-product__min-list__item__img">
              </a>
            </li>
            <li class="slider-product__min-list__item">
              <a href="<?php bloginfo('template_directory'); ?>/img/big-2.jpg" class="products__slideshow-link">
                <img src="<?php bloginfo('template_directory'); ?>/img/min-2.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a>
              </li>
            <li class="slider-product__min-list__item">
              <a href="<?php bloginfo('template_directory'); ?>/img/big-3.jpg" class="products__slideshow-link">
                <img src="<?php bloginfo('template_directory'); ?>/img/min-3.jpg" width="20" height="28" class="slider-product__min-list__item__img">
              </a>
            </li>
          </ul>
        </div>
        <div class="product-item__vendor vendor-product"><span class="vendor-product__text">Артикул </span><span class="vendor-product__value">283135</span></div>
      </div>
      <div class="product-item__description description-product">
        <h2 class="description-product__title">Microsoft Lumia 640 RM-1077</h2>
        <p class="description-product__text">Вместе с новой Microsoft Lumia 640 Dual SIM (RM-1077) вы открываете мир ярких цифровых возможностей. Этот многофункциональный смартфон уже содержит набор бесплатных сервисов Microsoft...</p>
        <div class="description-product__options options-product">
          <ul class="options-product__list">
            <li class="options-product__item">
              <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Тип Sim-карты </span><span class="options-product__item__value">Micro SIM</span></div>
            </li>
            <li class="options-product__item">
              <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Количество SIM-карт </span><span class="options-product__item__value">2</span></div>
            </li>
            <li class="options-product__item">
              <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Цвет </span><span class="options-product__item__value">Белый</span></div>
            </li>
            <li class="options-product__item">
              <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">ОС </span><span class="options-product__item__value">Windows Phone</span></div>
            </li>
            <li class="options-product__item">
              <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Связь 3G </span><span class="options-product__item__value">Есть</span></div>
            </li>
            <li class="options-product__item">
              <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">4G (LTE) </span><span class="options-product__item__value">Нет</span></div>
            </li>
            <li class="options-product__item">
              <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">CPS-модуль </span><span class="options-product__item__value">A-GPS</span></div>
            </li>
          </ul>
        </div>
        <div class="description-product__rating">
          <ul class="description-product__rating__list">
            <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
            <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
            <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
            <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
            <li class="description-product__rating__item"><a href="#" class="description-product__rating__link"></a></li>
            </ul><span class="description-product__rating__value">4</span>
          </div>
        </div>
        <div class="product-item__purchase purchase-product clearfix">
          <div class="purchase-product__price">10 990</div>
          <div class="purchase-product__buy">
            <input type="submit" value="В корзину" class="purchase-product__in-basket">
            <div class="purchase-product__wrap-availability"><span class="purchase-product__availability">В наличии</span></div>
          </div>
        </div>
      </div>
      <div class="product-item">
        <div class="product-item__slider slider-product">
          <div class="slider-product__wrap-main-img"><img src="<?php bloginfo('template_directory'); ?>/img/archos50.jpg" width="93" height="123" class="slider-product__main-img"></div>
          <div class="slider-product__min">
            <ul class="slider-product__min-list">
              <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/archos50.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/archos50-min.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
              <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-2.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-2.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
              <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-3.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-3.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
            </ul>
          </div>
          <div class="product-item__vendor vendor-product"><span class="vendor-product__text">Артикул </span><span class="vendor-product__value">189238</span></div>
        </div>
        <div class="product-item__description description-product">
          <h2 class="description-product__title">Archos 50 Oxygen Plus</h2>
          <p class="description-product__text">Смартфон Archos 50 Oxygen Plus, серый. Моноблок, Micro-SIM, Android , 3G, Bluetooth, USB-подключение к ПК, Wi-Fi, Разрешение основной камеры 8 Мп...</p>
          <div class="description-product__options options-product">
            <ul class="options-product__list">
              <li class="options-product__item">
                <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Тип Sim-карты </span><span class="options-product__item__value">Micro SIM</span></div>
              </li>
              <li class="options-product__item">
                <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Количество SIM-карт </span><span class="options-product__item__value">2</span></div>
              </li>
              <li class="options-product__item">
                <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Цвет </span><span class="options-product__item__value">Серый</span></div>
              </li>
              <li class="options-product__item">
                <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">ОС </span><span class="options-product__item__value">Android</span></div>
              </li>
              <li class="options-product__item">
                <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Связь 3G </span><span class="options-product__item__value">Есть</span></div>
              </li>
              <li class="options-product__item">
                <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">4G (LTE) </span><span class="options-product__item__value">Нет</span></div>
              </li>
              <li class="options-product__item">
                <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">CPS-модуль </span><span class="options-product__item__value">Есть</span></div>
              </li>
            </ul>
          </div>
          <div class="description-product__rating">
            <ul class="description-product__rating__list">
              <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
              <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
              <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
              <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
              <li class="description-product__rating__item"><a href="#" class="description-product__rating__link"></a></li>
              </ul><span class="description-product__rating__value">4</span>
            </div>
          </div>
          <div class="product-item__purchase purchase-product clearfix">
            <div class="purchase-product__price">9 900</div>
            <div class="purchase-product__buy">
              <input type="submit" value="В корзину" class="purchase-product__in-basket">
              <div class="purchase-product__wrap-availability"><span class="purchase-product__availability">В наличии</span></div>
            </div>
          </div>
        </div>
        <div class="product-item">
          <div class="product-item__slider slider-product">
            <div class="slider-product__wrap-main-img"><img src="<?php bloginfo('template_directory'); ?>/img/philips.jpg" width="93" height="123" class="slider-product__main-img"></div>
            <div class="slider-product__min">
              <ul class="slider-product__min-list">
                <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/philips.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/philips-min.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-2.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-2.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-3.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-3.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
              </ul>
            </div>
            <div class="product-item__vendor vendor-product"><span class="vendor-product__text">Артикул </span><span class="vendor-product__value">189238</span></div>
          </div>
          <div class="product-item__description description-product">
            <h2 class="description-product__title">Philips S398 Black</h2>
            <p class="description-product__text">Смартфон Philips S398 Black. Черный корпус и разнообразие цветных панелей для Philips S398 как нельзя лучше подчеркнут ваш статус и уверенность в себе. Преимущества этой модели...</p>
            <div class="description-product__options options-product">
              <ul class="options-product__list">
                <li class="options-product__item">
                  <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Тип Sim-карты </span><span class="options-product__item__value"></span></div>
                </li>
                <li class="options-product__item">
                  <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Количество SIM-карт </span><span class="options-product__item__value">2</span></div>
                </li>
                <li class="options-product__item">
                  <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Цвет </span><span class="options-product__item__value"></span></div>
                </li>
                <li class="options-product__item">
                  <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">ОС </span><span class="options-product__item__value">Android</span></div>
                </li>
                <li class="options-product__item">
                  <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Связь 3G </span><span class="options-product__item__value"></span></div>
                </li>
                <li class="options-product__item">
                  <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">4G (LTE) </span><span class="options-product__item__value">Нет</span></div>
                </li>
                <li class="options-product__item">
                  <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">CPS-модуль </span><span class="options-product__item__value"></span></div>
                </li>
              </ul>
            </div>
            <div class="description-product__rating">
              <ul class="description-product__rating__list">
                <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                <li class="description-product__rating__item"><a href="#" class="description-product__rating__link"></a></li>
                </ul><span class="description-product__rating__value">4</span>
              </div>
            </div>
            <div class="product-item__purchase purchase-product clearfix">
              <div class="purchase-product__price">8 990</div>
              <div class="purchase-product__buy">
                <input type="submit" value="В корзину" class="purchase-product__in-basket">
                <div class="purchase-product__wrap-availability"><span class="purchase-product__availability">В наличии</span></div>
              </div>
            </div>
          </div>
          <div class="product-item">
            <div class="product-item__slider slider-product">
              <div class="slider-product__wrap-main-img"><img src="<?php bloginfo('template_directory'); ?>/img/lumia430.jpg" width="93" height="123" class="slider-product__main-img"></div>
              <div class="slider-product__min">
                <ul class="slider-product__min-list">
                  <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img//lumia430.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/lumia430-min.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                  <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-2.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-2.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                  <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-3.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-3.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                </ul>
              </div>
              <div class="product-item__vendor vendor-product"><span class="vendor-product__text">Артикул </span><span class="vendor-product__value">387228</span></div>
            </div>
            <div class="product-item__description description-product">
              <h2 class="description-product__title">Microsoft Lumia 430 RM-10</h2>
              <p class="description-product__text">Смартфон Microsoft Lumia 430 RM-1099 black. Куда бы вы ни направлялись, смартфон должен быть надежным спутником. Поэтому у Microsoft Lumia 430 Dual SIM (RM-1099) удобный компактный корпус ...</p>
              <div class="description-product__options options-product">
                <ul class="options-product__list">
                  <li class="options-product__item">
                    <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Тип Sim-карты </span><span class="options-product__item__value">Micro SIM</span></div>
                  </li>
                  <li class="options-product__item">
                    <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Количество SIM-карт </span><span class="options-product__item__value">2</span></div>
                  </li>
                  <li class="options-product__item">
                    <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Цвет </span><span class="options-product__item__value">Черный</span></div>
                  </li>
                  <li class="options-product__item">
                    <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">ОС </span><span class="options-product__item__value">Windows Phone</span></div>
                  </li>
                  <li class="options-product__item">
                    <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Связь 3G </span><span class="options-product__item__value">Есть</span></div>
                  </li>
                  <li class="options-product__item">
                    <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">4G (LTE) </span><span class="options-product__item__value">Нет</span></div>
                  </li>
                  <li class="options-product__item">
                    <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">CPS-модуль </span><span class="options-product__item__value">A-GPS</span></div>
                  </li>
                </ul>
              </div>
              <div class="description-product__rating">
                <ul class="description-product__rating__list">
                  <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                  <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                  <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                  <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                  <li class="description-product__rating__item"><a href="#" class="description-product__rating__link"></a></li>
                  </ul><span class="description-product__rating__value">4</span>
                </div>
              </div>
              <div class="product-item__purchase purchase-product clearfix">
                <div class="purchase-product__price">5 390</div>
                <div class="purchase-product__buy">
                  <input type="submit" value="В корзину" class="purchase-product__in-basket">
                  <div class="purchase-product__wrap-availability"><span class="purchase-product__availability">В наличии</span></div>
                </div>
              </div>
            </div>
            <div class="product-item">
              <div class="product-item__slider slider-product">
                <div class="slider-product__wrap-main-img"><img src="<?php bloginfo('template_directory'); ?>/img/senseit.jpg" width="93" height="123" class="slider-product__main-img"></div>
                <div class="slider-product__min">
                  <ul class="slider-product__min-list">
                    <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/senseit.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/senseit-min.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                    <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-2.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-2.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                    <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-3.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-3.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                  </ul>
                </div>
                <div class="product-item__vendor vendor-product"><span class="vendor-product__text">Артикул </span><span class="vendor-product__value">359110</span></div>
              </div>
              <div class="product-item__description description-product">
                <h2 class="description-product__title">Senseit L301 Black</h2>
                <p class="description-product__text">Смартфон Senseit L301 black, черный. Micro-SIM, две поддерживаемых SIM-карты, Android, 3G, GPS-модуль...  </p>
                <div class="description-product__options options-product">
                  <ul class="options-product__list">
                    <li class="options-product__item">
                      <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Тип Sim-карты </span><span class="options-product__item__value">Micro SIM</span></div>
                    </li>
                    <li class="options-product__item">
                      <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Количество SIM-карт </span><span class="options-product__item__value">2</span></div>
                    </li>
                    <li class="options-product__item">
                      <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Цвет </span><span class="options-product__item__value">Черный</span></div>
                    </li>
                    <li class="options-product__item">
                      <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">ОС </span><span class="options-product__item__value">Android</span></div>
                    </li>
                    <li class="options-product__item">
                      <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Связь 3G </span><span class="options-product__item__value">Есть</span></div>
                    </li>
                    <li class="options-product__item">
                      <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">4G (LTE) </span><span class="options-product__item__value">Нет</span></div>
                    </li>
                    <li class="options-product__item">
                      <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">CPS-модуль </span><span class="options-product__item__value">Есть</span></div>
                    </li>
                  </ul>
                </div>
                <div class="description-product__rating">
                  <ul class="description-product__rating__list">
                    <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                    <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                    <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                    <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                    <li class="description-product__rating__item"><a href="#" class="description-product__rating__link"></a></li>
                    </ul><span class="description-product__rating__value">4</span>
                  </div>
                </div>
                <div class="product-item__purchase purchase-product clearfix">
                  <div class="purchase-product__price">11 290</div>
                  <div class="purchase-product__buy">
                    <input type="submit" value="В корзину" class="purchase-product__in-basket">
                    <div class="purchase-product__wrap-availability"><span class="purchase-product__availability">В наличии</span></div>
                  </div>
                </div>
              </div>
              <div class="product-item">
                <div class="product-item__slider slider-product">
                  <div class="slider-product__wrap-main-img"><img src="<?php bloginfo('template_directory'); ?>/img/hichscreen.jpg" width="93" height="123" class="slider-product__main-img"></div>
                  <div class="slider-product__min">
                    <ul class="slider-product__min-list">
                      <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/hichscreen.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/hichscreen-min.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                      <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-2.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-2.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                      <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-3.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-3.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                    </ul>
                  </div>
                  <div class="product-item__vendor vendor-product"><span class="vendor-product__text">Артикул </span><span class="vendor-product__value">189238</span></div>
                </div>
                <div class="product-item__description description-product">
                  <h2 class="description-product__title">HIGHSCREEN WinWin Black</h2>
                  <p class="description-product__text">Смартфон HIGHSCREEN WinWin Black оснащен 4'' дисплеем и двумя слотами для SIM-карт.  Windows Phone , 3G, Bluetooth, USB-подключение к ПК... </p>
                  <div class="description-product__options options-product">
                    <ul class="options-product__list">
                      <li class="options-product__item">
                        <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Тип Sim-карты </span><span class="options-product__item__value">Micro SIM</span></div>
                      </li>
                      <li class="options-product__item">
                        <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Количество SIM-карт </span><span class="options-product__item__value">2</span></div>
                      </li>
                      <li class="options-product__item">
                        <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Цвет </span><span class="options-product__item__value">Черный</span></div>
                      </li>
                      <li class="options-product__item">
                        <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">ОС </span><span class="options-product__item__value">Windows Phone</span></div>
                      </li>
                      <li class="options-product__item">
                        <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Связь 3G </span><span class="options-product__item__value">Есть</span></div>
                      </li>
                      <li class="options-product__item">
                        <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">4G (LTE) </span><span class="options-product__item__value">Нет</span></div>
                      </li>
                      <li class="options-product__item">
                        <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">CPS-модуль </span><span class="options-product__item__value">Есть</span></div>
                      </li>
                    </ul>
                  </div>
                  <div class="description-product__rating">
                    <ul class="description-product__rating__list">
                      <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                      <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                      <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                      <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                      <li class="description-product__rating__item"><a href="#" class="description-product__rating__link"></a></li>
                      </ul><span class="description-product__rating__value">4</span>
                    </div>
                  </div>
                  <div class="product-item__purchase purchase-product clearfix">
                    <div class="purchase-product__price">3 990</div>
                    <div class="purchase-product__buy">
                      <input type="submit" value="В корзину" class="purchase-product__in-basket">
                      <div class="purchase-product__wrap-availability"><span class="purchase-product__availability">В наличии</span></div>
                    </div>
                  </div>
                </div>
                <div class="product-item">
                  <div class="product-item__slider slider-product">
                    <div class="slider-product__wrap-main-img"><img src="<?php bloginfo('template_directory'); ?>/img/alcatel.jpg" width="93" height="123" class="slider-product__main-img"></div>
                    <div class="slider-product__min">
                      <ul class="slider-product__min-list">
                        <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/alcatel.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/alcatel-min.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                        <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-2.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-2.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                        <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-3.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-3.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                      </ul>
                    </div>
                    <div class="product-item__vendor vendor-product"><span class="vendor-product__text">Артикул </span><span class="vendor-product__value">112234</span></div>
                  </div>
                  <div class="product-item__description description-product">
                    <h2 class="description-product__title">Alcatel OT4013D PIXI 3 (2 SIM)</h2>
                    <p class="description-product__text">Смартфон Смартфон Alcatel OT4013D PIXI 3 (2 SIM). Смартфон Alcatel One Touch 4013D оснащен четырехдюймовым дисплеем и двумя слотами для SIM-карт...</p>
                    <div class="description-product__options options-product">
                      <ul class="options-product__list">
                        <li class="options-product__item">
                          <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Тип Sim-карты </span><span class="options-product__item__value">Micro SIM</span></div>
                        </li>
                        <li class="options-product__item">
                          <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Количество SIM-карт </span><span class="options-product__item__value">2</span></div>
                        </li>
                        <li class="options-product__item">
                          <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Цвет </span><span class="options-product__item__value">Белый</span></div>
                        </li>
                        <li class="options-product__item">
                          <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">ОС </span><span class="options-product__item__value">Android</span></div>
                        </li>
                        <li class="options-product__item">
                          <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Связь 3G </span><span class="options-product__item__value">Есть</span></div>
                        </li>
                        <li class="options-product__item">
                          <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">4G (LTE) </span><span class="options-product__item__value">Нет</span></div>
                        </li>
                        <li class="options-product__item">
                          <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">CPS-модуль </span><span class="options-product__item__value">A-GPS</span></div>
                        </li>
                      </ul>
                    </div>
                    <div class="description-product__rating">
                      <ul class="description-product__rating__list">
                        <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                        <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                        <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                        <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                        <li class="description-product__rating__item"><a href="#" class="description-product__rating__link"></a></li>
                        </ul><span class="description-product__rating__value">4</span>
                      </div>
                    </div>
                    <div class="product-item__purchase purchase-product clearfix">
                      <div class="purchase-product__price">3 290</div>
                      <div class="purchase-product__buy">
                        <input type="submit" value="В корзину" class="purchase-product__in-basket">
                        <div class="purchase-product__wrap-availability"><span class="purchase-product__availability">В наличии</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="product-item">
                    <div class="product-item__slider slider-product">
                      <div class="slider-product__wrap-main-img"><img src="<?php bloginfo('template_directory'); ?>/img/fly.jpg" width="93" height="123" class="slider-product__main-img"></div>
                      <div class="slider-product__min">
                        <ul class="slider-product__min-list">
                          <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/fly.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/fly-min.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                          <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-2.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-2.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                          <li class="slider-product__min-list__item"><a href="<?php bloginfo('template_directory'); ?>/img/big-3.jpg" class="products__slideshow-link"><img src="<?php bloginfo('template_directory'); ?>/img/min-3.jpg" width="20" height="28" class="slider-product__min-list__item__img"></a></li>
                        </ul>
                      </div>
                      <div class="product-item__vendor vendor-product"><span class="vendor-product__text">Артикул </span><span class="vendor-product__value">387228</span></div>
                    </div>
                    <div class="product-item__description description-product">
                      <h2 class="description-product__title">Fly IQ434 Era Nano 5</h2>
                      <p class="description-product__text">Смартфон Fly IQ434 Era Nano 5 оснащен 3.5'' дисплеем и двумя слотами для SIM-карт. Android 2.3, Micro SD, Wi-Fi.... </p>
                      <div class="description-product__options options-product">
                        <ul class="options-product__list">
                          <li class="options-product__item">
                            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Тип Sim-карты </span><span class="options-product__item__value">Micro SIM</span></div>
                          </li>
                          <li class="options-product__item">
                            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Количество SIM-карт </span><span class="options-product__item__value">2</span></div>
                          </li>
                          <li class="options-product__item">
                            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Цвет </span><span class="options-product__item__value">Черный</span></div>
                          </li>
                          <li class="options-product__item">
                            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">ОС </span><span class="options-product__item__value">Android</span></div>
                          </li>
                          <li class="options-product__item">
                            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">Связь 3G </span><span class="options-product__item__value">Нет</span></div>
                          </li>
                          <li class="options-product__item">
                            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">4G (LTE) </span><span class="options-product__item__value">Нет</span></div>
                          </li>
                          <li class="options-product__item">
                            <div class="options-product__item__inner clearfix"><span class="options-product__item__parameter">CPS-модуль </span><span class="options-product__item__value">Нет</span></div>
                          </li>
                        </ul>
                      </div>
                      <div class="description-product__rating">
                        <ul class="description-product__rating__list">
                          <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                          <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                          <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                          <li class="description-product__rating__item description-product__rating__item_active"><a href="#" class="description-product__rating__link"></a></li>
                          <li class="description-product__rating__item"><a href="#" class="description-product__rating__link"></a></li>
                          </ul><span class="description-product__rating__value">4</span>
                        </div>
                      </div>
                      <div class="product-item__purchase purchase-product clearfix">
                        <div class="purchase-product__price">1 790</div>
                        <div class="purchase-product__buy">
                          <input type="submit" value="В корзину" class="purchase-product__in-basket">
                          <div class="purchase-product__wrap-availability"><span class="purchase-product__availability">В наличии</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pagination">
                    <ul class="pagination__list">
                      <li class="pagination__item"><a href="#" class="pagination__link pagination__link_prev">&lt;</a></li>
                      <li class="pagination__item pagination__item_active"><a href="#" class="pagination__link pagination__link_number">1</a></li>
                      <li class="pagination__item"><a href="#" class="pagination__link pagination__link_number">2</a></li>
                      <li class="pagination__item"><a href="#" class="pagination__link pagination__link_number">3</a></li>
                      <li class="pagination__item"><a href="#" class="pagination__link pagination__link_next">&gt;</a></li>
                    </ul>
                  </div>
                </section>
              </div>
              <div class="info">
                <div class="info__container clearfix">
                  <h2 class="info__title">Важная информация</h2>
                  <div class="info__main">
                    <p>   Повседневная практика показывает, что сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий в значительной степени обуславливает создание модели развития. Таким образом консультация с широким активом представляет собой интересный эксперимент проверки модели развития.</p>
                    <p>   Идейные соображения высшего порядка, а также рамки и место обучения кадров позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач. Таким образом сложившаяся структура организации требуют определения и уточнения направлений прогрессивного развития. Равным образом консультация с широким активом влечет за собой процесс внедрения и модернизации соответствующий условий активизации.</p>
                    <p>   Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет оценить значение соответствующий условий активизации. С другой стороны сложившаяся структура организации позволяет оценить значение системы обучения кадров, соответствует насущным потребностям.</p>
                    <p>   Повседневная практика показывает, что сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Значимость этих проблем настолько очевидна, что реализация намеченных плановых заданий в значительной степени обуславливает создание модели развития. Таким образом консультация с широким активом представляет собой интересный эксперимент проверки модели развития.</p>
                    <p>   Идейные соображения высшего порядка, а также рамки и место обучения кадров позволяет оценить значение позиций, занимаемых участниками в отношении поставленных задач. Таким образом сложившаяся структура организации требуют определения и уточнения направлений прогрессивного развития. Равным образом консультация с широким активом влечет за собой процесс внедрения и модернизации соответствующий условий активизации.</p>
                    <p>   Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции позволяет оценить значение соответствующий условий активизации. С другой стороны сложившаяся структура организации позволяет оценить значение системы обучения кадров, соответствует насущным потребностям.</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
<?php get_footer(); ?>