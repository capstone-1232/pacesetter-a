document.addEventListener('DOMContentLoaded', function() {
  const navBtn = document.querySelector('.nav-btn');
  const filterBtn = document.querySelector('.filter-btn');
  const menu = document.querySelector('.menu');
  const filterMenu = document.querySelector('.filters-menu');
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
  const svgFilter = document.querySelector('.filter-btn svg');
  const emailListContainer1 = document.getElementById('es_form_f2-n1');
  const emailListContainer2 = document.getElementById('es_form_f2-n3');

  // modal popups
  if (emailListContainer1) {
      const successMessage = emailListContainer1.querySelector('.es_subscription_message.success');
  
      if (successMessage) {
          const modal = document.createElement('div');
          modal.classList.add('modal');
          modal.innerHTML = `
              <div class="modal-content">
                  <span class="close">&times;</span>
                  <h2>Thank You For Joining Our Newsletter</h2>
                  <p id="successMessage">Thank you for joining our newsletter we will send out updates on events and in-store offers.</p>
              </div>
          `;
          emailListContainer1.appendChild(modal);
  
          modal.style.display = "block";
  
          const closeBtn = modal.querySelector(".close");
          closeBtn.addEventListener('click', function() {
              modal.style.display = "none";
          });
  
          window.addEventListener('click', function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          });
      }
  }

  if (emailListContainer2) {
    const successMessage = emailListContainer2.querySelector('.es_subscription_message.success');

    if (successMessage) {
        const modal = document.createElement('div');
        modal.classList.add('modal');
        modal.innerHTML = `
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Thank You For Joining Our Newsletter</h2>
                <p id="successMessage">Thank you for joining our newsletter we will send out updates on events and in-store offers.</p>
            </div>
        `;
        emailListContainer2.appendChild(modal);

        modal.style.display = "block";

        const closeBtn = modal.querySelector(".close");
        closeBtn.addEventListener('click', function() {
            modal.style.display = "none";
        });

        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    }
}
  

  document.addEventListener("DOMContentLoaded", function() {
      checkSubscriptionStatus();
  });

  // svg arrow turn
  if (links.length > 0 && svgs.length > 0 && links.length === svgs.length) {
      links.forEach((link, index) => {
          link.addEventListener('click', function(event) {
              event.preventDefault();
              svgs[index].classList.toggle('rotate180');
          });
      });
  } else {
      console.error('Links or SVGs not found or mismatched.');
  }

  if(svgFilter) {
  filterBtn.addEventListener('click', function() {
    svgFilter.classList.toggle('rotate180')
  })
  }

  // hamburger menu
  if (navBtn && menu) {
      navBtn.addEventListener('click', function() {
        menu.classList.toggle('menu-expanded');
      });
  } else {
      console.error('Nav button or menu not found.');
  }

  if (subnav && menuContent) {
      subnav.addEventListener('click', function() {
          menuContent.classList.toggle('menu-expanded-small');
      });
  } else {
      console.error('Subnav or menu content not found.');
  }

  if (subnav2 && menuContent2) {
      subnav2.addEventListener('click', function() {
          menuContent2.classList.toggle('menu-expanded-small');
      });
  } else {
      console.error('Subnav 2 or menu content 2 not found.');
  }

  if (subnav3 && menuContent3) {
      subnav3.addEventListener('click', function() {
          menuContent3.classList.toggle('menu-expanded-small');
      });
  } else {
      console.error('Subnav 3 or menu content 3 not found.');
  }

  if (subnav4 && menuContent4) {
      subnav4.addEventListener('click', function() {
          menuContent4.classList.toggle('menu-expanded-small');
      });
  } else {
      console.error('Subnav 4 or menu content 4 not found.');
  }

   // filter menu
   if (filterBtn && filterMenu) {
    filterBtn.addEventListener('click', function() {
        filterMenu.classList.toggle('wpf_form_expand');
    });
}


$(document).ready(function() {
    // Check if the current URL contains the filter query parameter
    if (window.location.href.includes('wpf=filters')) {
        // Attach click event handler to the pagination links
        $('.woocommerce-pagination').on('click', 'a', function(e) {
            // Prevent the default behavior of the link
            e.preventDefault();
            
            // Get the clicked page number from the link
            var clickedPage = $(this).text().trim();
            
            // Get the current URL
            var currentUrl = window.location.href;
            
            // Parse the URL to extract query parameters
            var url = new URL(currentUrl);
            
            // Check if the clicked link is "Next" or "Previous"
            if (clickedPage.toLowerCase() === 'next') {
                // Get the current page parameter value
                var currentPage = parseInt(url.searchParams.get('wpf_page')) || 1;
                
                // Increment the page parameter value
                var nextPage = currentPage + 1;
                
                // Update the page parameter in the URL
                url.searchParams.set('wpf_page', nextPage);
            } else if (clickedPage.toLowerCase() === 'prev') {
                // Get the current page parameter value
                var currentPage = parseInt(url.searchParams.get('wpf_page')) || 1;
                
                // Decrement the page parameter value, making sure it's not less than 1
                var prevPage = Math.max(currentPage - 1, 1);
                
                // Update the page parameter in the URL
                url.searchParams.set('wpf_page', prevPage);
            } else {
                // If the clickedPage is a number, update the page parameter in the URL
                url.searchParams.set('wpf_page', clickedPage);
            }
            
            // Redirect to the updated URL
            window.location.href = url.toString();
        });
    }
});
});

// clear button
document.addEventListener('DOMContentLoaded', function() {
    // Use event delegation to listen for click events on the document
    document.addEventListener('click', function(event) {
        // Check if the clicked element is the reset button
        if (event.target.matches('.wpf_reset_btn input[type="reset"]')) {
            // Redirect the user to the specified URL
            window.location.href = 'https://pacesetter-a.web.dmitcapstone.ca/wordpress/shop/';
        }
    });
});

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
