<!-- <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Al-Sultan</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="./" class="nav-item nav-link">Home</a>
            <a href="about" class="nav-item nav-link">About</a>
            <a href="service" class="nav-item nav-link">Services</a>
            <a href="package" class="nav-item nav-link">Packages</a>
            <a href="flights" class="nav-item nav-link active">Flights</a>
        </div>
        <a href="contact" class="btn btn-primary rounded-pill py-2 px-4">Contact</a>
    </div>
</nav> -->


<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="./" class="navbar-brand p-0">
        <!-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Al-Sultan</h1> -->
        <img src="assets/img/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="./" class="nav-item nav-link <?php echo (basename($_SERVER["PHP_SELF"], '.php') == 'index') ? 'active' : ''; ?>">Home</a>
            <a href="about" class="nav-item nav-link <?php echo (basename($_SERVER["PHP_SELF"], '.php') == 'about') ? 'active' : ''; ?>">About</a>
            <a href="services" class="nav-item nav-link <?php echo (basename($_SERVER["PHP_SELF"], '.php') == 'services') ? 'active' : ''; ?>">Services</a>
            <a href="packages" class="nav-item nav-link <?php echo (basename($_SERVER["PHP_SELF"], '.php') == 'packages') ? 'active' : ''; ?>">Packages</a>
            <a href="flights" class="nav-item nav-link <?php echo (basename($_SERVER["PHP_SELF"], '.php') == 'flights') ? 'active' : ''; ?>">Flights</a>
        </div>
        <a href="contact" class="btn btn-primary rounded-pill py-2 px-4">Contact</a>
    </div>
</nav>