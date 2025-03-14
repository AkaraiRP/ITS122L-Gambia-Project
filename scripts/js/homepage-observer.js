// Fancy Pop in animation
const observer = new IntersectionObserver((entries => {
    entries.forEach((entry) => {
        entry.target.classList.toggle('show', entry.isIntersecting);
    });
}));

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((item) => observer.observe(item));