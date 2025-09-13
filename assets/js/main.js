//headerスクロールしたら背景色変化
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) { // 50px以上スクロールしたら
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

window.addEventListener('scroll', function() {
  const header = document.querySelector('header');
  if (window.scrollY > 50) { // 50px 以上スクロールしたら
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});


//ハンバーガーメニュー
const menuToggle = document.getElementById('menu-toggle');
const menuIcon = document.querySelector('.menu-icon');
const spMenu = document.querySelector('.sp-menu');
const spMenuItems = spMenu.querySelectorAll('li');

menuToggle.addEventListener('change', () => {
  // ハンバーガーアイコンのアニメーション
  menuIcon.classList.toggle('open', menuToggle.checked);

  if (menuToggle.checked) {
    // メニューの高さを動的に取得
    const ul = spMenu.querySelector('ul');
    const height = ul.scrollHeight;
    spMenu.style.maxHeight = height + 'px';

    // フェードインアニメーション
    spMenuItems.forEach((item, index) => {
      item.style.transitionDelay = `${index * 0.1}s`;
      item.style.opacity = '1';
      item.style.transform = 'translateY(0)';
    });
  } else {
    spMenu.style.maxHeight = '0';

    // フェードアウトアニメーション
    spMenuItems.forEach((item) => {
      item.style.transitionDelay = `0s`;
      item.style.opacity = '0';
      item.style.transform = 'translateY(-10px)';
    });
  }
});

function adjustMvTextPosition() {
    const mvWrap = document.querySelector('.mv-wrap');
    const h2 = mvWrap.querySelector('h2');
    const mvHeight = mvWrap.offsetHeight;
    const h2Height = h2.offsetHeight;

    // 縦中央より少し上に配置
    const top = (mvHeight - h2Height) * 0.4; 
    h2.style.top = `${top}px`;
}

// 初回実行
window.addEventListener('load', adjustMvTextPosition);
// 画面リサイズ時も再計算
window.addEventListener('resize', adjustMvTextPosition);

//topに戻る
const toTopBtn = document.getElementById('to-top');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        toTopBtn.style.display = 'block';
    } else {
        toTopBtn.style.display = 'none';
    }
});

toTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});


