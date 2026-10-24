// JavaScript for Hamburger Menu Toggle
const hamburgerMenu = document.querySelector('.hamburger-menu');
const sidebar = document.querySelector('.sidebar');

// Checking if Hamburger Menu is clicked
hamburgerMenu.addEventListener('click', () => {
    // Activating closing Animation
    if (sidebar.classList.contains('active')) {
        sidebar.classList.remove('active');
        sidebar.classList.add('closing');
        // Timmer till Removal of Closing Animation
        setTimeout(() => {
            sidebar.classList.remove('closing');
            document.body.style.overflow = 'auto'; // Enable scrolling
        }, 1400);
        }
    else {
        sidebar.classList.add('active');
        document.body.style.overflow = 'hidden'; // Disable scrolling
    }
});