const services_txt = document.querySelectorAll('.services_txt');
const services_btn = document.querySelectorAll('.services_btn');


services_btn.forEach(function (btn, index) {
    btn.addEventListener("click", function () {
    services_txt[index].style.display = "block";
    btn.style.display = "none"; 
    });
});



// N A V------------------

document.addEventListener("DOMContentLoaded", function () {
  const navItems = document.querySelectorAll("#nav_clckd ul li a");

  // Loop through all navigation items and add click event listeners
  navItems.forEach(function (navItem) {
    navItem.addEventListener("click", function (event) {
      // Prevent the default link behavior
      event.preventDefault();

      // Remove the "active" class from all navigation items
      navItems.forEach(function (item) {
        item.classList.remove("active");
      });

      // Add the "active" class to the clicked navigation item
      this.classList.add("active");

      // Scroll to the target section (optional)
      
    });
  });
});



