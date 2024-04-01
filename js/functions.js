
var modal = document.getElementsByClassName("emaillist");

var span = document.getElementsByClassName("sucess")[0];

document.addEventListener('DOMContentLoaded', function() {
  const navBtn = document.querySelector('.nav-btn');
  const menu = document.querySelector('.menu');
  const subnav = document.querySelector('.link1');
  const subnav2 = document.querySelector('.link2');
  const subnav3 = document.querySelector('.link3');
  const subnav4 = document.querySelector('.link4');
  const menuContent = document.querySelector('.menu-subnav-content');
  const menuContent2 = document.querySelector('.menu-subnav-content2');
  const menuContent3 = document.querySelector('.menu-subnav-content3');
  const menuContent4 = document.querySelector('.menu-subnav-content4');
  const links = document.querySelectorAll('.flex-arrow a');
  const svgs = document.querySelectorAll('.menu-subnav svg');

  // svg arrow turn
links.forEach((link, index) => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        svgs[index].classList.toggle('rotate180');
    });
});

// hamburger nenu
  navBtn.addEventListener('click', function() {
      menu.classList.toggle('menu-expanded');
    });
    
    subnav.addEventListener('click', function() {
      menuContent.classList.toggle('menu-expanded-small'); 
});

subnav2.addEventListener('click', function() {
  menuContent2.classList.toggle('menu-expanded-small');
});

subnav3.addEventListener('click', function() {
  menuContent3.classList.toggle('menu-expanded-small');
});

subnav4.addEventListener('click', function() {
  menuContent4.classList.toggle('menu-expanded-small');
});
});

// debounce scroll handlers
function onScroll (evt) {

  lastScrollY = window.scrollY;

  // Prevent multiple rAF callbacks.
  if (scheduledAnimationFrame)
  return;

  scheduledAnimationFrame = true;
  requestAnimationFrame(readAndUpdatePage);
}

window.addEventListener('scroll', onScroll);

// lazy load
// document.addEventListener("DOMContentLoaded", function() {
//   var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

//   if ("IntersectionObserver" in window) {
//     let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
//       entries.forEach(function(entry) {
//         if (entry.isIntersecting) {
//           let lazyImage = entry.target;
//           lazyImage.src = lazyImage.dataset.src;
//           lazyImage.srcset = lazyImage.dataset.srcset;
//           lazyImage.classList.remove("lazy");
//           lazyImageObserver.unobserve(lazyImage);
//         }
//       });
//     });

//     lazyImages.forEach(function(lazyImage) {
//       lazyImageObserver.observe(lazyImage);
//     });
//   }
// });