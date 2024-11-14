/* script.js */

document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const sidebar = document.querySelector('.sidebar');
    const body = document.body;

    menuToggle.addEventListener('click', function () {
        sidebar.classList.toggle('active');
        body.classList.toggle('sidebar-open');
    });
});
