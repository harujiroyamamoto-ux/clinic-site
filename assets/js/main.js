document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.querySelector('.nav-toggle');
  var nav = document.querySelector('.global-nav');
  if (!toggle || !nav) return;

  toggle.addEventListener('click', function () {
    var isOpen = nav.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    // ナビを閉じるときアコーディオンをすべてリセット
    if (!isOpen) {
      nav.querySelectorAll('.has-dropdown.is-open').forEach(function (li) {
        li.classList.remove('is-open');
        var btn = li.querySelector('.nav-dropdown-toggle');
        if (btn) {
          btn.setAttribute('aria-expanded', 'false');
          btn.textContent = '+';
        }
      });
    }
  });

  // モバイル: 「+」ボタンでアコーディオン開閉
  nav.querySelectorAll('.nav-dropdown-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var li = btn.closest('.has-dropdown');
      var isOpen = li.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      btn.textContent = isOpen ? '−' : '+';
    });
  });
});

document.addEventListener('DOMContentLoaded', function () {
  var slides = document.querySelectorAll('.hero-photo-slideshow .hero-photo-img');
  if (slides.length < 2) return;

  var current = 0;
  setInterval(function () {
    slides[current].classList.remove('is-active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('is-active');
  }, 4000);
});
