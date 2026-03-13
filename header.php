<?php
$page_slug = '';
if (is_page('about')) {
    $page_slug = 'about';
} elseif (is_page('promotions')) {
    $page_slug = 'promotions';
} elseif (is_page('privacy')) {
    $page_slug = 'privacy';
}

$is_front = is_front_page() || is_home();
$home_url = home_url('/');
$top_link = $is_front ? '#top' : $home_url;
$tariffs_link = $is_front ? '#tariffs' : $home_url . '#tariffs';
$equipment_link = $is_front ? '#equipment' : $home_url . '#equipment';
$lead_link = $home_url . '#form-card';
$template_uri = get_template_directory_uri();
$extra_body_class = '';

if ($page_slug === 'promotions') {
    $extra_body_class = 'promotions-page';
} elseif ($page_slug === 'privacy') {
    $extra_body_class = 'privacy-page';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo esc_html(wp_get_document_title()); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url($template_uri . '/style.css'); ?>" />
  <link rel="icon" href="<?php echo esc_url($template_uri . '/img/favicon.ico'); ?>" type="image/x-icon" />
  <?php wp_head(); ?>
</head>
<body <?php body_class($extra_body_class); ?>>
<?php wp_body_open(); ?>
<header class="topbar">
  <div class="container">
    <div class="topbar-inner">
      <a class="brand-wrap" href="<?php echo esc_url($home_url); ?>">
        <img class="logo" src="<?php echo esc_url($template_uri . '/img/focus-logo.svg'); ?>" alt="Логотип Фокус Лайф Оренбург" />
        <div class="brand">
          <small>Официальный партнер</small>
        </div>
      </a>

      <nav class="nav" aria-label="Основная навигация">
        <a href="<?php echo esc_url($top_link); ?>"<?php echo $is_front ? ' aria-current="page"' : ''; ?>>Главная</a>
        <a href="<?php echo esc_url($tariffs_link); ?>">Тарифы</a>
        <a href="<?php echo esc_url(home_url('/promotions/')); ?>"<?php echo $page_slug === 'promotions' ? ' aria-current="page"' : ''; ?>>Акции</a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>"<?php echo $page_slug === 'about' ? ' aria-current="page"' : ''; ?>>О нас</a>
      </nav>

      <div class="topbar-actions">
        <a class="callout" href="tel:+79609063175">+7 960 906 31-75</a>
        <?php if ($is_front) : ?>
          <button class="ghost-button js-open-modal" data-target="callbackModal">Заказать звонок</button>
        <?php else : ?>
          <a class="ghost-button" href="<?php echo esc_url($lead_link); ?>">Оставить заявку</a>
        <?php endif; ?>
        <button class="menu-toggle" id="menuToggle" aria-label="Открыть меню">
          <span></span>
        </button>
      </div>
    </div>

    <div class="mobile-panel" id="mobilePanel">
      <div class="mobile-nav">
        <a href="<?php echo esc_url($top_link); ?>"<?php echo $is_front ? ' aria-current="page"' : ''; ?>>Главная</a>
        <a href="<?php echo esc_url($tariffs_link); ?>">Тарифы</a>
        <?php if ($page_slug === 'about') : ?>
          <a href="<?php echo esc_url($equipment_link); ?>">Оборудование</a>
        <?php endif; ?>
        <a href="<?php echo esc_url(home_url('/promotions/')); ?>"<?php echo $page_slug === 'promotions' ? ' aria-current="page"' : ''; ?>>Акции</a>
        <a href="<?php echo esc_url(home_url('/about/')); ?>"<?php echo $page_slug === 'about' ? ' aria-current="page"' : ''; ?>>О нас</a>
        <a class="callout" href="tel:+79609063175">+7 960 906 31-75</a>
        <?php if ($is_front) : ?>
          <button class="ghost-button js-open-modal" data-target="callbackModal">Заказать звонок</button>
        <?php else : ?>
          <a class="ghost-button" href="<?php echo esc_url($lead_link); ?>">Оставить заявку</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>
