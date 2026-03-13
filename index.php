<?php get_header(); ?>

<main id="top">
      <section class="hero">
        <div class="container">
          <div class="hero-grid">
            <div class="hero-card">
              
              <h1>Подключить домашний интернет и ТВ в Оренбурге от Фокус Лайф</h1>
              <p class="hero-subtitle">
                Выберите тариф, оставьте заявку на подключение и получите
                быстрый интернет, цифровое телевидение и помощь с настройкой
                оборудования.
              </p>

              <div class="hero-points" >
                <div class="chip">До 1000 Мбит/с</div>
                <div class="chip">До 240 каналов</div>
                <div class="chip">Подключение и настройка бесплатно</div>
              </div>
              
            </div>

            <aside class="form-card" id="form-card">
              <div class="form-card-header">
                <div class="eyebrow">Быстрая заявка</div>
                <p>
                  Менеджер перезвонит, поможет подобрать тариф и подскажет по
                  доступности подключения по адресу.
                </p>
              </div>

              <form class="form-stack js-lead-form">
                <input
                  class="input"
                  type="text"
                  name="name"
                  placeholder="Ваше имя"
                  required
                />
                <input
                  class="input"
                  type="tel"
                  name="phone"
                  placeholder="Телефон"
                  required
                />
                <input
                  class="input"
                  type="text"
                  name="address"
                  placeholder="Адрес подключения"
                />
                <button class="button" type="submit">Отправить</button>
                <p class="fineprint">
                  Нажимая кнопку «Отправить», вы соглашаетесь с
                  <a href="<?php echo esc_url(home_url('/privacy/')); ?>">политикой конфиденциальности</a>
                  и обработкой персональных данных.
                </p>
              </form>
            </aside>
          </div>
        </div>
      </section>

      <section class="promo">
        <div class="container">
          <div class="promo-card">
            <div class="promo-copy">
              <div class="promo-kicker">Хит-предложение</div>
              <h2>Интернет 1 Гбит/с + ТВ 240 каналов</h2>
              <p>
                Подключение скоростного тарифа для фильмов, работы,
                игр и одновременного использования нескольких устройств.
              </p>
            </div>
            <div class="promo-price">
              <strong>633 ₽</strong>
              <span>в месяц</span>
              <button
                class="button js-open-modal"
                data-target="connectModal"
                style="margin-top: 16px"
              >
                Подключить
              </button>
            </div>
          </div>
        </div>
      </section>

      <section id="tariffs">
        <div class="container">
          <div class="section-head">
            <div>
              <h2>Услуги интернет‑провайдера Фокус Лайф</h2>
              <p>
                На сайте представлены пакеты интернет + ТВ, домашний интернет,
                цифровое телевидение и тарифы для частного сектора.
              </p>
            </div>
          </div>

          <div class="tabs" aria-label="Категории тарифов">
            <a class="tab" href="#tariffs-bundle">Интернет + ТВ</a>
            <a class="tab" href="#tariffs-internet">Интернет</a>
            <a class="tab" href="#tariffs-tv">Цифровое ТВ</a>
            <a class="tab" href="#tariffs-private">Частный сектор</a>
          </div>

          <h2 class="panel-title">Интернет + ТВ</h2>
          <div class="panel" id="tariffs-bundle">
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
                  <div class="feature">Аренда Wi‑Fi роутера — 130 ₽/мес</div>
                  <div class="feature">Аренда приставки — 170 ₽/мес</div>
                  <div class="feature">Настройка и подключение бесплатно</div>
                </div>
                <div class="price-wrap">
                  <div class="price">535 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Пакет 100"
                  >
                    Подключить
                  </button>
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
                  <div class="feature">Аренда Wi‑Fi роутера — 130 ₽/мес</div>
                  <div class="feature">Аренда приставки — 60 ₽/мес</div>
                  <div class="feature">Настройка и подключение бесплатно</div>
                </div>
                <div class="price-wrap">
                  <div class="old-price">795 ₽</div>
                  <div class="price">398 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Пакет 500"
                  >
                    Подключить
                  </button>
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
                  <div class="feature">Аренда Wi‑Fi роутера — 130 ₽/мес</div>
                  <div class="feature">Аренда приставки — 60 ₽/мес</div>
                  <div class="feature">Настройка и подключение бесплатно</div>
                </div>
                <div class="price-wrap">
                  <div class="old-price">1265 ₽</div>
                  <div class="price">633 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Пакет 1000"
                  >
                    Подключить
                  </button>
                </div>
              </article>
            </div>
          </div>

          <h2 class="panel-title">Интернет</h2>
          <div class="panel" id="tariffs-internet">
            <div class="cards">
              <article class="tariff-card section-card">
                <div class="tariff-top">
                  <div>
                    <div class="tariff-title">Интернет 100 Мбит</div>
                    <p class="tariff-desc">Базовый тариф для дома</p>
                  </div>
                  <div class="badge">Домашний</div>
                </div>
                <div class="features">
                  <div class="feature">100 Мбит/с</div>
                  <div class="feature">Аренда Wi‑Fi роутера — 130 ₽/мес</div>
                  <div class="feature">Настройка и подключение бесплатно</div>
                </div>
                <div class="price-wrap">
                  <div class="price">420 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Интернет 100 Мбит"
                  >
                    Подключить
                  </button>
                </div>
              </article>

              <article class="tariff-card section-card">
                <div class="tariff-top">
                  <div>
                    <div class="tariff-title">Интернет 500 Мбит</div>
                    <p class="tariff-desc">
                      Быстрый интернет для нескольких устройств
                    </p>
                  </div>
                  <div class="badge">Скорость</div>
                </div>
                <div class="features">
                  <div class="feature">500 Мбит/с</div>
                  <div class="feature">Аренда Wi‑Fi роутера — 130 ₽/мес</div>
                  <div class="feature">Настройка и подключение бесплатно</div>
                </div>
                <div class="price-wrap">
                  <div class="price">680 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Интернет 500 Мбит"
                  >
                    Подключить
                  </button>
                </div>
              </article>

              <article class="tariff-card section-card">
                <div class="tariff-top">
                  <div>
                    <div class="tariff-title">Интернет 1000 Мбит</div>
                    <p class="tariff-desc">
                      Максимальная скорость для продвинутых пользователей
                    </p>
                  </div>
                  <div class="badge">Гигабит</div>
                </div>
                <div class="features">
                  <div class="feature">1000 Мбит/с</div>
                  <div class="feature">Аренда Wi‑Fi роутера — 130 ₽/мес</div>
                  <div class="feature">Настройка и подключение бесплатно</div>
                </div>
                <div class="price-wrap">
                  <div class="price">1150 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Интернет 1000 Мбит"
                  >
                    Подключить
                  </button>
                </div>
              </article>
            </div>
          </div>

          <h2 class="panel-title">Цифровое ТВ</h2>
          <div class="panel" id="tariffs-tv">
            <div class="cards">
              <article class="tariff-card section-card">
                <div class="tariff-top">
                  <div>
                    <div class="tariff-title">Цифровое ТВ Базовый</div>
                    <p class="tariff-desc">Телевидение для всей семьи</p>
                  </div>
                  <div class="badge">240 каналов</div>
                </div>
                <div class="features">
                  <div class="feature">240 каналов</div>
                  <div class="feature">Архив на всех каналах 7 дней</div>
                  <div class="feature">Аренда приставки включена в тариф</div>
                  <div class="feature">Настройка и подключение бесплатно</div>
                </div>
                <div class="price-wrap">
                  <div class="price">455 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Цифровое ТВ Базовый"
                  >
                    Подключить
                  </button>
                </div>
              </article>
            </div>
          </div>

          <h2 class="panel-title">Частный сектор</h2>
          <div class="panel" id="tariffs-private">
            <div class="cards">
              <article class="tariff-card section-card">
                <div class="tariff-top">
                  <div>
                    <div class="tariff-title">Интернет 100</div>
                    <p class="tariff-desc">Тариф для частного сектора</p>
                  </div>
                  <div class="badge">Частный дом</div>
                </div>
                <div class="features">
                  <div class="feature">100 Мбит/с</div>
                  <div class="feature">Аренда Wi‑Fi роутера — 130 ₽/мес</div>
                  <div class="feature">Настройка и подключение до 990 ₽</div>
                  <div class="feature">Добавить ТВ 240 каналов — 115 ₽/мес</div>
                </div>
                <div class="price-wrap">
                  <div class="price">680 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Интернет 100"
                  >
                    Подключить
                  </button>
                </div>
              </article>

              <article class="tariff-card section-card">
                <div class="tariff-top">
                  <div>
                    <div class="tariff-title">Интернет + ТВ 100</div>
                    <p class="tariff-desc">С ТВ для частного дома</p>
                  </div>
                  <div class="badge">Акция</div>
                </div>
                <div class="features">
                  <div class="feature">100 Мбит/с</div>
                  <div class="feature">240 каналов</div>
                  <div class="feature">Аренда Wi‑Fi роутера — 130 ₽/мес</div>
                  <div class="feature">Аренда приставки — 170 ₽/мес</div>
                  <div class="feature">Настройка и подключение до 990 ₽</div>
                </div>
                <div class="price-wrap">
                  <div class="old-price">795 ₽</div>
                  <div class="price">398 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Интернет + ТВ 100"
                  >
                    Подключить
                  </button>
                </div>
              </article>

              <article class="tariff-card section-card">
                <div class="tariff-top">
                  <div>
                    <div class="tariff-title">Интернет + ТВ 900</div>
                    <p class="tariff-desc">
                      Высокая скорость для частного сектора
                    </p>
                  </div>
                  <div class="badge">Гигабитный</div>
                </div>
                <div class="features">
                  <div class="feature">900 Мбит/с</div>
                  <div class="feature">240 каналов</div>
                  <div class="feature">Аренда Wi‑Fi роутера — 130 ₽/мес</div>
                  <div class="feature">Аренда приставки — 170 ₽/мес</div>
                  <div class="feature">Настройка и подключение до 990 ₽</div>
                </div>
                <div class="price-wrap">
                  <div class="old-price">1265 ₽</div>
                  <div class="price">633 <small>₽/мес</small></div>
                </div>
                <div class="card-actions">
                  <button
                    class="button js-open-modal"
                    data-target="connectModal"
                    data-tariff="Интернет + ТВ 900"
                  >
                    Подключить
                  </button>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section id="coverage">
        <div class="container">
          <div class="coverage-card section-card">
            <div class="section-head coverage-head">
              <div>
                <h2>Подключение в пригородах и частном секторе</h2>
                <p>
                  Многие из наших абонентов – жители пригородов, владельцы
                  загородных домов и коттеджей. Благодаря сетям Фокус Лайф в их
                  распоряжении высочайшие скорости доступа в интернет, все
                  возможности облачного наблюдения, персонального телевидения и
                  других компонентов «умного дома».
                </p>
              </div>
            </div>

            <div class="coverage-body">
              <div class="coverage-intro">
                <h3>Зона покрытия</h3>
                <p>
                  Территория доступности услуг Фокус Лайф включает Оренбург и
                  все основные пригороды.
                </p>
              </div>

              <div class="coverage-list" aria-label="Зона покрытия Фокус Лайф">
                <span class="coverage-item">Нижняя Павловка</span>
                <span class="coverage-item">Газодобытчиков</span>
                <span class="coverage-item">9 Января</span>
                <span class="coverage-item">Южный Урал</span>
                <span class="coverage-item">Пруды</span>
                <span class="coverage-item">Авиагородок</span>
                <span class="coverage-item">Кузнечный</span>
                <span class="coverage-item">Оренбург</span>
                <span class="coverage-item">Весенний</span>
                <span class="coverage-item">Пугачи</span>
                <span class="coverage-item">Карачи</span>
                <span class="coverage-item">Южный</span>
                <span class="coverage-item">Стройгородок</span>
                <span class="coverage-item">Ивановка</span>
                <span class="coverage-item">Весенний Квартал</span>
                <span class="coverage-item">Приуралье</span>
                <span class="coverage-item">Перовский</span>
                <span class="coverage-item">СНТ Заря</span>
                <span class="coverage-item">Благословенка</span>
                <span class="coverage-item">Куйбышева</span>
                <span class="coverage-item">Солнечный</span>
                <span class="coverage-item">Пригородный</span>
                <span class="coverage-item">Нежинка</span>
                <span class="coverage-item">Золотой Квартал</span>
                <span class="coverage-item">Крона</span>
                <span class="coverage-item">Берды</span>
                <span class="coverage-item">Ростоши</span>
                <span class="coverage-item">Ростоши-2</span>
                <span class="coverage-item">Овчинный городок</span>
                <span class="coverage-item">Ростошинские пруды</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="equipment">
        <div class="container">
          <div class="section-head">
            <div>
              <h2>Оборудование для интернета</h2>
              <p>
                На странице провайдера представлены Wi‑Fi роутер и HD‑приставка
                для цифрового телевидения.
              </p>
            </div>
          </div>

          <div class="grid-2">
            <article class="equipment-card section-card">
              <div class="equipment-visual router">
                <img class="router-img" src="<?php echo esc_url(get_template_directory_uri() . '/img/SNR-CPE-ME2-Lite1.jpg'); ?>" alt="Wi‑Fi роутер SNR‑CPE‑ME2">
              </div>
              <div class="equipment-copy">
                <h3>Wi‑Fi роутер SNR‑CPE‑ME2</h3>
                <p>
                  Роутер для стабильного подключения дома и работы на двух
                  диапазонах.
                </p>
                <div class="equipment-list">
                  <div>Скорость соединения до 1000 Мбит/с</div>
                  <div>Работает на частоте 2,4 ГГц и 5 ГГц</div>
                  <div>Цена — 3500 ₽</div>
                  <div>Аренда — 130 ₽/мес</div>
                </div>
              </div>
            </article>

            <article class="equipment-card section-card">
              <div class="equipment-visual tvbox">
                <img class="tvbox-img" src="<?php echo esc_url(get_template_directory_uri() . '/img/images.jpg'); ?>" alt="HD‑приставка MAG‑245">
              </div>
              <div class="equipment-copy">
                <h3>HD‑приставка MAG‑245</h3>
                <p>
                  Приставка для просмотра цифрового телевидения с поддержкой
                  популярных интерфейсов подключения.
                </p>
                <div class="equipment-list">
                  <div>Видеовыход: RCA, S‑Video, HDMI, RGB</div>
                  <div>Дистанционное управление: IRDA RC‑5</div>
                  <div>Цена — 5000 ₽</div>
                  <div>Аренда — 60 ₽/мес</div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section id="advantages">
        <div class="container">
          <div class="section-head">
            <div>
              <h2>Наши преимущества</h2>
              <p>
                Наши сильные стороны: высокоскоростной интернет, большой
                выбор ТВ‑каналов, доступные тарифы, широкий выбор пакетов и
                интерактивные возможности телевидения.
              </p>
            </div>
          </div>

          <div class="adv-grid">
            <article class="adv-card section-card">
              <h3>Высокоскоростной интернет</h3>
              <p>
                Стабильное и быстрое подключение для работы, обучения, фильмов,
                игр и ежедневного использования дома.
              </p>
            </article>

            <article class="adv-card section-card">
              <h3>Большой выбор ТВ‑каналов</h3>
              <p>
                Широкий набор национальных, международных и тематических
                телеканалов для всей семьи.
              </p>
            </article>

            <article class="adv-card section-card">
              <h3>Доступные тарифы</h3>
              <p>
                Тарифные планы рассчитаны на разный бюджет и дают хорошее
                соотношение цены и набора услуг.
              </p>
            </article>

            <article class="adv-card section-card">
              <h3>Широкий выбор тарифов</h3>
              <p>
                Есть варианты с интернетом, ТВ, комбинированные пакеты и
                отдельные решения для частного сектора.
              </p>
            </article>

            <article class="adv-card section-card">
              <h3>Интерактивные возможности</h3>
              <p>
                Архив каналов, пауза, запись и другие функции делают цифровое
                телевидение удобнее в повседневном использовании.
              </p>
            </article>

            <article class="adv-card section-card">
              <h3>Гибкость подключения</h3>
              <p>
                Можно подобрать проводное или беспроводное подключение и быстро
                пройти установку оборудования.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section id="faq">
        <div class="container">
          <div class="section-head">
            <div>
              <h2>Вопросы и ответы</h2>
              <p>
                Ответили на частые вопросы о подключении, сроках установки,
                оборудовании и оплате услуг.
              </p>
            </div>
          </div>

          <div class="faq-grid">
            <details class="faq-item section-card" open>
              <summary>Как быстро можно подключить интернет?</summary>
              <p>
                После заявки менеджер уточнит адрес и согласует удобное время.
                Обычно подключение возможно в ближайшие 1-3 дня.
              </p>
            </details>

            <details class="faq-item section-card">
              <summary>Можно ли подключить только интернет без ТВ?</summary>
              <p>
                Да, на странице есть отдельные тарифы только с домашним
                интернетом без телевидения. Менеджер поможет выбрать подходящий
                вариант.
              </p>
            </details>

            <details class="faq-item section-card">
              <summary>Нужно ли покупать роутер и приставку?</summary>
              <p>
                Не обязательно. Оборудование можно купить или взять в аренду,
                в зависимости от выбранного тарифа и ваших задач.
              </p>
            </details>

            <details class="faq-item section-card">
              <summary>Как узнать, доступно ли подключение по моему адресу?</summary>
              <p>
                Оставьте заявку с адресом подключения. Мы проверим техническую
                возможность и свяжемся с вами для подтверждения.
              </p>
            </details>

            <details class="faq-item section-card">
              <summary>Есть ли акции для новых абонентов?</summary>
              <p>
                Да, часть тарифов подключается по акционной цене. Актуальные
                предложения указаны в карточках тарифов и уточняются при
                оформлении заявки.
              </p>
            </details>

            <details class="faq-item section-card">
              <summary>Как оплачивать услуги после подключения?</summary>
              <p>
                После активации тарифа вы сможете оплачивать услуги ежемесячно.
                Способ оплаты и дату списания менеджер сообщит при подключении.
              </p>
            </details>
          </div>
        </div>
      </section>
    </main>

<div class="modal" id="connectModal" aria-hidden="true">
      <div class="modal-card">
        <button class="close js-close-modal" type="button" aria-label="Закрыть">
          ×
        </button>
        <div class="form-card-header" style="margin-bottom: 18px">
          <div class="eyebrow">Заявка на подключение</div>
          <h2>Оставьте заявку</h2>
          <p>
            Мы свяжемся с вами, уточним адрес и подтвердим доступность
            подключения.
          </p>
        </div>
        <form class="form-stack js-lead-form">
          <input
            class="input"
            type="text"
            name="name"
            placeholder="Ваше имя"
            required
          />
          <input
            class="input js-phone"
            type="tel"
            name="phone"
            placeholder="Телефон"
            required
          />
          <input
            class="input"
            type="text"
            name="address"
            placeholder="Адрес подключения"
          />
          <input
            class="input js-tariff-input"
            type="text"
            name="tariff"
            placeholder="Выбранный тариф"
            readonly
          />
          <button class="button" type="submit">Отправить</button>
        </form>
      </div>
    </div>

    <div class="modal" id="callbackModal" aria-hidden="true">
      <div class="modal-card">
        <button class="close js-close-modal" type="button" aria-label="Закрыть">
          ×
        </button>
        <div class="form-card-header" style="margin-bottom: 18px">
          <div class="eyebrow">Заказать звонок</div>
          <h2>Мы вам перезвоним</h2>
          <p>
            Оставьте номер телефона, и оператор свяжется с вами в течение 15
            минут.
          </p>
        </div>
        <form class="form-stack js-lead-form">
          <input
            class="input"
            type="text"
            name="name"
            placeholder="Ваше имя"
            required
          />
          <input
            class="input js-phone"
            type="tel"
            name="phone"
            placeholder="Телефон"
            required
          />
          <button class="button" type="submit">Отправить</button>
        </form>
      </div>
    </div>

    <div class="modal" id="detailsModal" aria-hidden="true">
      <div class="modal-card">
        <button class="close js-close-modal" type="button" aria-label="Закрыть">
          ×
        </button>
        <div class="form-card-header">
          <div class="eyebrow">Информация о тарифе</div>
          <h2 id="detailsTitle">Подробнее</h2>
          <p id="detailsContent">Описание тарифа</p>
        </div>
      </div>
    </div>

    <div class="modal" id="successModal" aria-hidden="true">
      <div class="modal-card">
        <button class="close js-close-modal" type="button" aria-label="Закрыть">
          ×
        </button>
        <div class="success">
          <div class="success-mark">✓</div>
          <h2>Заявка успешно отправлена</h2>
          <p class="hero-subtitle" style="max-width: none; margin: 0">
            Оператор свяжется с вами в течение 15 минут.
          </p>
          <button class="button js-close-modal" type="button">Понятно</button>
        </div>
      </div>
    </div>

    <a
      class="mobile-form-anchor"
      href="#form-card"
      aria-label="Перейти к форме"
      title="Перейти к форме"
    >
      <span aria-hidden="true"> <img src="<?php echo esc_url(get_template_directory_uri() . '/img/up-chevron-svgrepo-com.svg'); ?>" alt=""></span>
    </a>

<?php get_footer(); ?>

