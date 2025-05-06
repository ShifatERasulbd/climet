(function ($) {
    "use strict";


    const sidebarButtons = document.querySelectorAll('.sidebar-btn');
    sidebarButtons.forEach(button => {
        button.addEventListener('click', () => {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    });
    

}(jQuery));
