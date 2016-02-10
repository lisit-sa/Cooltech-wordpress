<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE = edge">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>
    <?php
      wp_title( '|', true, 'right' );
    ?>
    </title>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/normalize.css'>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/stylesheet.css'>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/jquery.formstyler.css'>
    <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/main.css'>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!--[if lt IE 8]>
    <p class="browser">Ваш браузер <strong>устарел</strong>. Пожалуйста <a href="http://browsehappy.com/">обновите</a> его.</p>
    <![endif]-->
    <div class="wrapper">
      <div class="main-container clearfix">
        <header class="main-header">
          <div class="main-header__contacts">
            <div class="contacts__container clearfix">
              <div class="social-btn">
                <ul class="social-btn__list">
                  <li class="social-btn__item"><a href="https://www.facebook.com/" target="_blank" class="social-btn__link facebook">facebook</a></li>
                  <li class="social-btn__item"><a href="https://www.vk.com/" target="_blank" class="social-btn__link vk">vk</a></li>
                  <li class="social-btn__item"><a href="https://twitter.com/" target="_blank" class="social-btn__link twitter">twitter</a></li>
                </ul>
              </div>
              <div class="address">ул. Маяковская 6, офис 17</div>
              <div class="phone"><a href="tel:+792112312313" class="phone__link">+7 (921) 123-12-13</a></div>
            </div>
          </div>
          <div class="main-header__logo">
            <div class="logo__container clearfix">
              <div class="logo"><a href="#" class="logo__link"><img src="<?php bloginfo('template_directory'); ?>/img/logo-header.png" alt="логотип" class="logo__img"></a></div>
              <div class="search">
                <form method="post">
                  <input type="text" placeholder="Что будем искать" class="search__field">
                  <input type="submit" value="Найти" class="search__button">
                </form>
              </div>
              <div class="menu">
                <ul class="menu__list">
                  <li class="menu__item"><a href="#" class="menu__link">Карта проезда</a></li>
                  <li class="menu__item"><a href="#" class="menu__link">История заказов</a></li>
                  <li class="menu__item"><a href="#" class="menu__link">Корзина</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="main-header__navigation">
            <!--Navigation-->
            <nav class="navigation">
              <div class="navigation__container">
                <ul class="navigation__list">
                  <li class="navigation__item "><a href="#" class="navigation__link">Планшеты</a></li>
                  <li class="navigation__item navigation__item_active"><a href="#" class="navigation__link">Мобильные телефоны</a></li>
                  <li class="navigation__item "><a href="#" class="navigation__link">Mp3 плееры</a></li>
                  <li class="navigation__item "><a href="#" class="navigation__link">Персональные компьютеры</a></li>
                  <li class="navigation__item "><a href="#" class="navigation__link">Ноутбуки</a></li>
                  <li class="navigation__item "><a href="#" class="navigation__link">Аксессуары</a></li>
                  <li class="navigation__item "><a href="#" class="navigation__link">Бытовая техника</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="main-header__breadcrumbs clearfix">
            <div class="breadcrumbs">
              <ul class="breadcrumbs__list">
                <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Главная</a></li>
                <li class="breadcrumbs__item"><a href="#" class="breadcrumbs__link">Каталог</a></li>
              </ul>
            </div>
          </div>
        </header>
        <section class="general general_container">