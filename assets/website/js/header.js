const headerWrapper = document.querySelector('.header-wrapper');
const headerFixer = document.querySelector('.header-fixer');
const menuToggl = document.querySelector('.menu-toggl');
const nav = document.querySelector('nav');
const navButtons = nav.querySelectorAll('.nav-btn');
// const headerFixer = document.querySelector('.header-fixer');

document.addEventListener('scroll', (e)=>{
  if(headerWrapper.classList.contains('homepage')) {
    let rect = headerWrapper.getBoundingClientRect();
    // console.log(headerWrapper.offsetTop);
    if(rect.bottom < 80 ) {
      if (!headerWrapper.classList.contains('fixed')) {
        const fixerHeight = headerFixer.clientHeight;
        console.log(fixerHeight);
        headerWrapper.style.height = fixerHeight + 'px';
        headerWrapper.classList.add('fixed');
        console.log(fixerHeight);
      }
    } else {
      headerWrapper.classList.remove('fixed');
      headerWrapper.style.height = 'auto';
    }
  }
});


menuToggl.addEventListener('click', () => {
  nav.classList.toggle('show');
  menuToggl.classList.toggle('show');
});

navButtons.forEach((button) => {
  button.addEventListener('click', () => {
    nav.classList.remove('show');
    menuToggl.classList.remove('show');
  });
});

