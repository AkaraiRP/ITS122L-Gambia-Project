// Fancy Hamburger menu button
const menuNav = document.querySelector('.nav-menu');

const menuButton = document.querySelector('.menu-button');
menuButton.addEventListener('click', () => {
    menuButton.classList.toggle('active');
    menuNav.classList.toggle('active');
});


// Fancy hover effects for the menu
document.querySelectorAll('.nav-menu ul li').forEach(anchor => {
    let span = anchor.querySelector('span');
        
    anchor.addEventListener('mouseover', function (e) {
        span.classList.toggle('hover');
        anchor.classList.toggle('hover');
    });
    anchor.addEventListener('mouseout', function (e) {
        span.classList.toggle('hover');
        anchor.classList.toggle('hover');
    })
});

// Simple scroll animation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: "end",
            inline: "nearest"
        });
    });
});