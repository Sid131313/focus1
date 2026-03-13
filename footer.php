<?php
$is_front = is_front_page() || is_home();
$page_slug = '';
if (is_page('about')) {
    $page_slug = 'about';
} elseif (is_page('promotions')) {
    $page_slug = 'promotions';
} elseif (is_page('privacy')) {
    $page_slug = 'privacy';
}

$home_url = home_url('/');
$top_link = $is_front ? '#top' : $home_url;
$tariffs_link = $is_front ? '#tariffs' : $home_url . '#tariffs';
$equipment_link = $is_front ? '#equipment' : $home_url . '#equipment';
$template_uri = get_template_directory_uri();
?>
<footer class="footer">
  <div class="container">
    <div class="footer-card">
      <div class="footer-top">
        <div>
          <div class="brand-wrap">
            <img class="logo__footer" src="<?php echo esc_url($template_uri . '/img/focus-logo.svg'); ?>" alt="Логотип Фокус Лайф Оренбург" />
            <div class="brand">
              <small>Официальный партнер</small>
            </div>
          </div>
        </div>

        <nav class="footer-nav">
          <a href="<?php echo esc_url($top_link); ?>"<?php echo $is_front ? ' aria-current="page"' : ''; ?>>Главная</a>
          <a href="<?php echo esc_url($tariffs_link); ?>">Тарифы</a>
          <?php if ($page_slug === 'about') : ?>
            <a href="<?php echo esc_url($equipment_link); ?>">Оборудование</a>
          <?php endif; ?>
          <a href="<?php echo esc_url(home_url('/promotions/')); ?>"<?php echo $page_slug === 'promotions' ? ' aria-current="page"' : ''; ?>>Акции</a>
          <a href="<?php echo esc_url(home_url('/about/')); ?>"<?php echo $page_slug === 'about' ? ' aria-current="page"' : ''; ?>>О нас</a>
          <a class="callout" href="tel:+79609063175">+7 960 906 31-75</a>
        </nav>
      </div>

      <div class="footer-meta">
        <div>
          Вся информация на сайте размещена на основании партнерского договора с ООО «Стройтехсервис».
          Посещая сайт focuslife-connect.ru, Вы предоставляете согласие на обработку данных (данные cookies и иные пользовательские данные), сбор которых осуществляется на условиях Политики обработки персональных данных. Указанные данные могут быть использованы для их последующей обработки системами Google Analytics, Яндекс.Метрика и др., которая осуществляется с целью функционирования сайта.
        </div>
        <div>
          Отправляя заявку, пользователь принимает
          <a href="<?php echo esc_url(home_url('/privacy/')); ?>">политику конфиденциальности</a>
          и даёт согласие на обработку персональных данных.
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo esc_url($template_uri . '/script.js'); ?>"></script>
<?php wp_footer(); ?>
</body>
</html>
