<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>원혜진 포트폴리오</title>
  <!-- GLightbox CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <style>
    /* 기본 스타일 */
    body { margin: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; line-height: 1.6; color: #000; background: #fff; }
    a { text-decoration: none; color: inherit; }

    /* 헤더 및 네비게이션 */
    header { position: sticky; top: 0; background: #fff; z-index: 1000; display: flex; justify-content: space-between; align-items: center; padding: 0.5rem 1rem; border-bottom: 1px solid #eaeaea; }
    .logo { font-size: 1.2rem; font-weight: bold; line-height: 1.1; }
    .logo span { display: block; font-size: 0.9rem; font-weight: normal; margin-top: 0.1rem; }
    .menu-btn, .close-btn { background: none; border: none; font-size: 1rem; cursor: pointer; font-weight: bold; padding: 0.2rem; }
    nav { position: fixed; top: 0; right: -100%; width: 240px; height: 100%; background: #fff; box-shadow: -2px 0 5px rgba(0,0,0,0.1); transition: right 0.3s ease; padding: 1.5rem 1rem; z-index: 1100; }
    nav.open { right: 0; }
    nav ul { list-style: none; padding: 0; margin: 0; }
    nav li { margin: 0.8rem 0; font-size: 0.9rem; }

    /* 메인 콘텐츠 */
    main { max-width: 800px; margin: 1rem auto; padding: 0 1rem; }
    section.work {
      display: grid;
      grid-template-columns: 1fr 2fr;
      gap: 0.8rem;
      margin-bottom: 1rem;
      align-items: start;
    }
    section.work h2 { font-size: 1.5rem; margin: 0 0 1rem 0; line-height: 1; font-weight: 700; letter-spacing: -0.02em; }
    .meta { font-size: 0.85rem; font-weight: 600; color: #bbb; margin: 0.75rem 0; line-height: 1.2; }
    .details { font-size: 0.9rem; margin: 0.75rem 0; line-height: 1.2; }
    .image img { width: 100%; height: auto; display: block; border: 1px solid #eaeaea; cursor: pointer; }

    /* 반응형 */
    @media (max-width: 600px) {
      section.work { grid-template-columns: 1fr; margin-bottom: 0.8rem; gap: 0.5rem; }
      header { padding: 0.5rem 0.8rem; }
    }

    /* GLightbox 화살표 항상 표시 */
    .glightbox-container, .glightbox-body {
      overflow: visible !important;
    }
    .glightbox-container .gprev,
    .glightbox-container .gnext {
      display: flex !important;
      opacity: 1 !important;
      width: 40px;
      height: 40px;
      top: 50% !important;
      transform: translateY(-50%) !important;
      z-index: 10000 !important;
    }
    .glightbox-container .gprev { left: 10px !important; }
    .glightbox-container .gnext { right: 10px !important; } .gprev,
    .glightbox-container .gnext {
      display: flex !important;
      opacity: 1 !important;
      width: 40px;
      height: 40px;
    }
    .glightbox-container .gprev { left: 10px !important; }
    .glightbox-container .gnext { right: 10px !important; }
  </style>
</head>
<body>
  <header>
    <div class="logo">원혜진<br><span>Hye-Jin Won</span></div>
    <button id="menu-btn" class="menu-btn" aria-label="메뉴 열기">Menu</button>
    <nav id="nav" aria-hidden="true">
      <button id="close-btn" class="close-btn" aria-label="메뉴 닫기">Close</button>
      <ul>
        <li><a href="#about">about</a></li>
        <li><a href="#contact">contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <!-- Two Seats 2025 -->
    <section class="work">
      <div>
        <h2>Two Seats 2025</h2>
        <div class="meta">2025 &bull; participatory installation &bull; Two chairs, one table, double-sided mirror (variable sets)</div>
        <div class="details">An installation consisting of a two-way mirror, two chairs, and a table is arranged to fit the space. When participants sit down, tea or coffee may be offered.</div>
      </div>
      <div class="image">
        <a href="렌더링 013.jpg" class="glightbox" data-gallery="project1">
          <img src="렌더링 013.jpg" alt="Two Seats 2025">
        </a>
        <a href="렌더링 001.jpg" class="glightbox" data-gallery="project1" style="display:none;"></a>
        <a href="렌더링 010.jpg" class="glightbox" data-gallery="project1" style="display:none;"></a>
        <a href="렌더링 006.jpg" class="glightbox" data-gallery="project1" style="display:none;"></a>
        <a href="렌더링 014.jpg" class="glightbox" data-gallery="project1" style="display:none;"></a>
        <a href="렌더링 012.jpg" class="glightbox" data-gallery="project1" style="display:none;"></a>
      </div>
    </section>

    <!-- Tears of Mokpo -->
    <section class="work">
      <div>
        <h2>Tears of Mokpo</h2>
        <div class="meta">2024 &bull; mixed media installation &bull; Desk, Chair, Family photograph, Wristwatch, MP3 player, Desk lamp, Stand lamp, Fan, Speaker, Microcontroller (Arduino board) for connecting electronic devices.</div>
        <div class="details">In a dark space, the electronic devices turn on and off at regular intervals.</div>
      </div>
      <div class="image">
        <a href="https://www.youtube.com/embed/ZdlsOs-a8bE?autoplay=0" class="glightbox" data-gallery="project2" data-type="video" data-iframe="true" style="display:block;">
          <img src="TearsOfMokpo2.jpg" alt="Tears of Mokpo">
        </a>
        <a href="TearsOfMokpo1.jpg" class="glightbox" data-gallery="project2" style="display:none;"></a>
        <a href="TearsOfMokpo3.jpg" class="glightbox" data-gallery="project2" style="display:none;"></a>
        <a href="TearsOfMokpo4.jpg" class="glightbox" data-gallery="project2" style="display:none;"></a>
      </div>
    </section>

    <!-- Mom, Did You Open Your Eyes? -->
    <section class="work">
      <div>
        <h2>Mom, Did You Open Your Eyes?</h2>
        <div class="meta">2024 &bull; sculpture with sound &bull; artificial fur, paper, 100x130x40cm</div>
        <div class="details">A child’s voice flows out from a hole in a sculpture</div>
      </div>
      <div class="image">
        <a href="mom.jpg" class="glightbox" data-gallery="project3">
          <img src="mom.jpg" alt="Mom, Did You Open Your Eyes?">
        </a>
        <a href="momandkid_3.jpg" class="glightbox" data-gallery="project3" style="display:none;"></a>
        <a href="momandkid_2.jpg" class="glightbox" data-gallery="project3" style="display:none;"></a>
        <a href="https://www.youtube.com/watch?v=oAnwuGj5x1M" class="glightbox" data-gallery="project3" data-type="video" style="display:none;"></a>
      </div>
    </section>

    <!-- Three Holes -->
    <section class="work">
      <div>
        <h2>Three Holes</h2>
        <div class="meta">2024 &bull; mixed media installation &bull; Wood, mirror, LED light, 100x35x20cm</div>
        <div class="details">A black wooden box has three holes, and when someone looks into each one, a different space unfolds inside.</div>
      </div>
      <div class="image">
        <a href="threeholes.jpg" class="glightbox" data-gallery="project4">
          <img src="threeholes.jpg" alt="Three Holes">
        </a>
        <a href="threeholes1.jpg" class="glightbox" data-gallery="project4" style="display:none;"></a>
        <a href="threeholes2.png" class="glightbox" data-gallery="project4" style="display:none;"></a>
      </div>
    </section>

  </main>

  <!-- GLightbox JS -->
  <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
  <script>
    // 메뉴 토글
    const menuBtn = document.getElementById('menu-btn');
    const closeBtn = document.getElementById('close-btn');
    const nav = document.getElementById('nav');
    menuBtn.addEventListener('click', () => { nav.classList.add('open'); nav.setAttribute('aria-hidden','false'); });
    closeBtn.addEventListener('click', () => { nav.classList.remove('open'); nav.setAttribute('aria-hidden','true'); });

    // GLightbox 초기화
    const lightbox = GLightbox({ selector: '.glightbox', touchNavigation: true, loop: true, autoplayVideos: false });
  </script>
</body>
</html>
