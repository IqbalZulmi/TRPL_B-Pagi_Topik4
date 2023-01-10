// Get the sidebar element
var sideba = document.querySelector('.sidebar');

// Set the mobile breakpoint
var mobileBreakpoint = 1024;

// Function to toggle the 'hide' class on the sidebar
function toggleSidebar() {
    if (window.innerWidth <= mobileBreakpoint) {
        sideba.classList.add('hide');
    } else {
        sideba.classList.remove('hide');
    }
}

// Toggle the sidebar when the window is resized
window.addEventListener('resize', toggleSidebar);

// Toggle the sidebar when the page loads
toggleSidebar();
