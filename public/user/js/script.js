// Navbar
document.onreadystatechange = function () {
  let lastScrollPosition = 0;
  const navbarAnimate = document.querySelector('.navbarAnimate');
  window.addEventListener('scroll', function (e) {
      lastScrollPosition = window.scrollY;

      if (lastScrollPosition > 50)
          navbarAnimate.classList.add('bg-dark');
      else
          navbarAnimate.classList.remove('bg-dark');
  });

  const footer = document.querySelector('.footer');
  window.addEventListener('scroll', function (e) {
      lastScrollPosition = window.scrollY;

      if (lastScrollPosition > 100)
          footer.classList.add('bg-dark');
      else
          footer.classList.remove('bg-dark');
  });
}
// Navbar End

