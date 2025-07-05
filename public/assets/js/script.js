const downloadBtn = document.getElementById('downloadBtn');
const statusText = document.getElementById('statusText');

downloadBtn.addEventListener('click', () => {
  downloadBtn.disabled = true;
  downloadBtn.innerText = 'Preparing...';
  statusText.innerText = 'Scanning...';
  setTimeout(() => {
    // Simulated download link
    window.location.href = downloadLink;
    downloadBtn.innerText = 'Download Again';
    statusText.innerText = 'Downloaded successfully';
    downloadBtn.disabled = false;
  }, 3000);
});

const sections = document.querySelectorAll('.bg-section');
const navDots = document.querySelectorAll('.nav-dot');

// Update active dot on scroll
const updateActiveDot = () => {
    const scrollPosition = window.scrollY + window.innerHeight / 2;

    sections.forEach((section, index) => {
        const sectionTop = section.offsetTop;
        const sectionBottom = sectionTop + section.offsetHeight;
        const content = section.querySelector('.content');

        if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
            navDots.forEach(dot => dot.classList.remove('active'));
            navDots[index].classList.add('active');

            // Only animate if not already animated
            if (content && !content.classList.contains('animated')) {
                content.classList.add('animated');
                content.style.animation = 'fadeInUp 1s ease-out forwards';
            }
        }
    });
};

// Smooth scroll to section when dot is clicked
navDots.forEach((dot, index) => {
    dot.addEventListener('click', (e) => {
        e.preventDefault();
        sections[index].scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Update active dot on scroll
window.addEventListener('scroll', updateActiveDot);

// Initial call to set active dot
updateActiveDot();

function toggleMenu() {
  document.getElementById('nav-menu').classList.toggle('active');
}