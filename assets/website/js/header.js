const headerWrapper = document.querySelector('.header-wrapper');
const menuToggl = document.querySelector('.menu-toggl');
const nav = document.querySelector('nav');
// const headerFixer = document.querySelector('.header-fixer');

document.addEventListener('scroll', (e)=>{
  if(headerWrapper.classList.contains('homepage')) {
    let rect = headerWrapper.getBoundingClientRect();
    console.log(headerWrapper.offsetTop);
    if(rect.top < -80 ) {
      headerWrapper.classList.add('fixed');
    } else {
      headerWrapper.classList.remove('fixed');
    }
  }
});


menuToggl.addEventListener('click', () => {
  nav.classList.toggle('show');
});