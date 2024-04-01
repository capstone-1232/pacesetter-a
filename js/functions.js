
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

links.forEach((link, index) => {
    link.addEventListener('click', function(event) {
        event.preventDefault();

        // Toggle the class on the corresponding SVG
        svgs[index].classList.toggle('rotate180');
    });
});


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