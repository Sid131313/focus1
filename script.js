
    const body = document.body;
    const modals = document.querySelectorAll('.modal');
    const menuToggle = document.getElementById('menuToggle');
    const mobilePanel = document.getElementById('mobilePanel');
    const mobileFormAnchor = document.querySelector('.mobile-form-anchor');
    const promoCopy = document.querySelector('.promo-copy');

    function openModal(id) {
      const modal = document.getElementById(id);
      if (!modal) return;
      modal.classList.add('open');
      modal.setAttribute('aria-hidden', 'false');
      body.style.overflow = 'hidden';
    }

    function closeModal(modal) {
      modal.classList.remove('open');
      modal.setAttribute('aria-hidden', 'true');
      if (![...modals].some(item => item.classList.contains('open'))) {
        body.style.overflow = '';
      }
    }

    document.querySelectorAll('.js-open-modal').forEach(button => {
      button.addEventListener('click', () => {
        const target = button.dataset.target;
        const tariff = button.dataset.tariff || '';
        if (target === 'connectModal') {
          document.querySelectorAll('.js-tariff-input').forEach(input => {
            input.value = tariff;
          });
        }
        openModal(target);
      });
    });

    document.querySelectorAll('.js-close-modal').forEach(button => {
      button.addEventListener('click', () => {
        const modal = button.closest('.modal');
        if (modal) closeModal(modal);
      });
    });

    modals.forEach(modal => {
      modal.addEventListener('click', event => {
        if (event.target === modal) closeModal(modal);
      });
    });

    document.addEventListener('keydown', event => {
      if (event.key === 'Escape') {
        modals.forEach(modal => closeModal(modal));
      }
    });

    document.querySelectorAll('.js-details').forEach(button => {
      button.addEventListener('click', () => {
        document.getElementById('detailsTitle').textContent = button.dataset.title || 'Подробнее';
        document.getElementById('detailsContent').textContent = button.dataset.content || '';
        openModal('detailsModal');
      });
    });

    document.querySelectorAll('.js-lead-form').forEach(form => {
      form.addEventListener('submit', event => {
        event.preventDefault();
        form.reset();
        modals.forEach(modal => closeModal(modal));
        openModal('successModal');
      });
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', () => {
        mobilePanel.classList.remove('open');
      });
    });

    menuToggle?.addEventListener('click', () => {
      mobilePanel.classList.toggle('open');
    });

    function updateMobileFormAnchor() {
      if (!mobileFormAnchor || !promoCopy) return;

      const isMobile = window.matchMedia('(max-width: 640px)').matches;
      const promoBottom = promoCopy.getBoundingClientRect().bottom;
      const shouldShow = isMobile && promoBottom <= 0;

      mobileFormAnchor.classList.toggle('is-visible', shouldShow);
    }

    updateMobileFormAnchor();
    window.addEventListener('scroll', updateMobileFormAnchor, { passive: true });
    window.addEventListener('resize', updateMobileFormAnchor);
