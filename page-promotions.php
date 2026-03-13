<?php 
/*
Template Name: Акция
*/
get_header(); ?>

<main>
      <section class="hero">
        <div class="container">
          <div class="hero-card">
            <h1>Акции компании ФОКУСЛАЙФ в Оренбурге</h1>
          </div>
        </div>
      </section>

      <section class="promotions-banner-section">
        <div class="container">
          <div class="promotions-banner section-card">
            <div class="promotions-banner__media">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/img/action.png'); ?>" alt="Акция с автоплатежом" />
            </div>
            <div class="promotions-banner__content">
              <p class="promotions-banner__eyebrow">ОНИ ВСЕГДА ВОЗВРАЩАЮТСЯ</p>
              <h2 class="promotions-banner__title">ПОДКЛЮЧАЙ АВТОПЛАТЁЖ</h2>
              <p class="promotions-banner__text">
                И ПОЛУЧАЙ
                <span class="promotions-banner__amount">ДО 480 ₽</span>
                НА СВОЙ ЛИЦЕВОЙ СЧЁТ
              </p>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="cards">
            <article class="tariff-card section-card">
              <div class="tariff-top">
                <div>
                  <div class="tariff-title">Пакет 100</div>
                  <p class="tariff-desc">Интернет + цифровое телевидение</p>
                </div>
                <div class="badge">Популярный</div>
              </div>
              <div class="features">
                <div class="feature">100 Мбит/с</div>
                <div class="feature">240 каналов</div>
                <div class="feature">Аренда Wi-Fi роутера — 130 ₽/мес</div>
                <div class="feature">Аренда приставки — 170 ₽/мес</div>
                <div class="feature">Настройка и подключение бесплатно</div>
              </div>
              <div class="price-wrap">
                <div class="old-price">670 ₽</div>
                <div class="price">535 <small>₽/мес</small></div>
              </div>
              <div class="card-actions">
                <a class="button" href="<?php echo esc_url(home_url('/#form-card')); ?>">Подключить</a>
              </div>
            </article>

            <article class="tariff-card section-card">
              <div class="tariff-top">
                <div>
                  <div class="tariff-title">Пакет 500</div>
                  <p class="tariff-desc">Для семьи, стриминга и игр</p>
                </div>
                <div class="badge">Акция</div>
              </div>
              <div class="features">
                <div class="feature">500 Мбит/с</div>
                <div class="feature">240 каналов</div>
                <div class="feature">Аренда Wi-Fi роутера — 130 ₽/мес</div>
                <div class="feature">Аренда приставки — 60 ₽/мес</div>
                <div class="feature">Настройка и подключение бесплатно</div>
              </div>
              <div class="price-wrap">
                <div class="old-price">795 ₽</div>
                <div class="price">398 <small>₽/мес</small></div>
              </div>
              <div class="card-actions">
                <a class="button" href="<?php echo esc_url(home_url('/#form-card')); ?>">Подключить</a>
              </div>
            </article>

            <article class="tariff-card section-card">
              <div class="tariff-top">
                <div>
                  <div class="tariff-title">Пакет 1000</div>
                  <p class="tariff-desc">Максимальная скорость для дома</p>
                </div>
                <div class="badge">1 Гбит/с</div>
              </div>
              <div class="features">
                <div class="feature">1000 Мбит/с</div>
                <div class="feature">240 каналов</div>
                <div class="feature">Аренда Wi-Fi роутера — 130 ₽/мес</div>
                <div class="feature">Аренда приставки — 60 ₽/мес</div>
                <div class="feature">Настройка и подключение бесплатно</div>
              </div>
              <div class="price-wrap">
                <div class="old-price">1265 ₽</div>
                <div class="price">633 <small>₽/мес</small></div>
              </div>
              <div class="card-actions">
                <a class="button" href="<?php echo esc_url(home_url('/#form-card')); ?>">Подключить</a>
              </div>
            </article>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>


