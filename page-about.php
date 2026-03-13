<?php 
/*
Template Name: О компании
*/
get_header(); ?>

<main>
      <section class="about-hero">
        <div class="container">
          <div class="about-shell">
            <div class="about-intro section-card">
              <div class="eyebrow">О компании</div>
              <h1>Фокус Лайф - интернет-провайдер в Оренбурге</h1>
              <p class="hero-subtitle">
                Как интернет-провайдер наша компания существует с 2005 года.
                Сегодня наш штат превышает сотню сотрудников, а доля новейшего
                оборудования составляет более 95%.
              </p>
              <p class="about-lead">
                Мы развиваемся в ногу с технологиями и обеспечиваем наших
                потребителей современными телекоммуникационными услугами для
                дома, бизнеса и организаций Оренбурга и пригородов.
              </p>
            </div>

            <aside class="about-stats section-card">
              <div class="about-stat">
                <strong>2005</strong>
                <span>работаем на рынке телеком-услуг</span>
              </div>
              <div class="about-stat">
                <strong>100+</strong>
                <span>сотрудников в штате компании</span>
              </div>
              <div class="about-stat">
                <strong>95%</strong>
                <span>доля новейшего оборудования</span>
              </div>
              <div class="about-stat">
                <strong>10 000+</strong>
                <span>частных абонентов выбирают Фокус Лайф</span>
              </div>
            </aside>
          </div>
        </div>
      </section>

      <section class="about-story">
        <div class="container">
          <div class="section-head">
            <div>
              <h2>Кого мы подключаем сегодня</h2>
              <p>
                Услугами Фокус Лайф пользуются частные абоненты, предприятия,
                организации и компании Оренбурга и пригородов.
              </p>
            </div>
          </div>

          <div class="about-grid">
            <article class="about-card section-card">
              <h3>10 тыс. частных абонентов</h3>
              <p>
                Сегодня услугами Фокус Лайф пользуются свыше 10 тыс. частных
                абонентов, которые выбирают стабильный интернет и современное
                телевидение для дома.
              </p>
            </article>

            <article class="about-card section-card">
              <h3>1000+ компаний и организаций</h3>
              <p>
                Более тысячи предприятий, организаций и компаний Оренбурга и
                пригородов работают с нами и получают надежные решения для
                бизнеса.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="about-timeline">
        <div class="container">
          <div class="section-head">
            <div>
              <h2>Ключевые этапы развития</h2>
              <p>
                Мы регулярно запускали новые технологии раньше рынка и
                сохраняли лидерство по качеству предложений в регионе.
              </p>
            </div>
          </div>

          <div class="timeline">
            <article class="timeline-item section-card">
              <div class="timeline-year">№1 в регионе</div>
              <h3>2010</h3>
              <p>
                Под брендом Фокус Лайф первым в Оренбурге появилось телевидение
                с функциями, которые раньше казались фантастикой: пауза эфира,
                просмотр с момента остановки, перемотка назад и вперед, доступ
                к уже завершившимся программам в течение трех суток и
                формирование собственного списка любимых каналов.
              </p>
              <p>
                Другим компаниям понадобилось несколько лет, чтобы предложить
                своим абонентам сопоставимый уровень сервиса. Даже сегодня
                Персональное телевидение Фокус Лайф по ряду параметров остается
                одним из лучших предложений.
              </p>
            </article>

            <article class="timeline-item section-card">
              <div class="timeline-year">Гигабитный интернет</div>
              <h3>2016</h3>
              <p>
                Фокус Лайф стал первым провайдером региона, обеспечившим
                гигабитные скорости интернет-подключений до 1000 Мбит/с.
              </p>
            </article>

            <article class="timeline-item section-card">
              <div class="timeline-year">Технология GPON</div>
              <h3>2017</h3>
              <p>
                В начале 2017 года мы первыми предложили абонентам подключения
                по технологии GPON с высокой пропускной способностью и запасом
                для дальнейшего роста цифровых сервисов.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="about-cta">
        <div class="container">
          <div class="about-cta-card">
            <div>
              <div class="promo-kicker">Фокус Лайф</div>
              <h2>Выбирайте Фокус Лайф</h2>
              <p>
                Подключайте интернет и телевидение от провайдера, который
                развивает сеть с 2005 года и внедряет технологии раньше рынка.
              </p>
            </div>
            <a class="button" href="<?php echo esc_url(home_url('/#form-card')); ?>">Перейти к заявке</a>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>


