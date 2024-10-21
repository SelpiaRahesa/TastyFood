
    const hamburger = document.getElementById('hamburger');
    const navbarNav = document.getElementById('navbarNav');

    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
        navbarNav.classList.toggle('active');
    });
