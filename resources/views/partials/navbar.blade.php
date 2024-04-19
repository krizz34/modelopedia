<nav class="navbar navbar-expand-lg navbar-light fixed-top custom-navbar-container">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="navbar-brand-text">MODELOPEDIA</span></a>
        <button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-custom" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var navToggler = document.querySelector('.navbar-toggler');
        var navbarCollapse = document.querySelector('.navbar-collapse');

        navToggler.addEventListener('click', function () {
            navbarCollapse.classList.toggle('show');
        });
    });

    const navEl = document.querySelector ('.navbar');
    // change navbar content height when scrolled if required
    window.addEventListener ('scroll', () => {
        if(window.scrollY >= 100) {
            navEl.classList.add('navbar-scrolled');
        }
    }) ;
</script>
<script>

</script>
