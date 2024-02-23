<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="<?= base_url() ?> " class="nav-item nav-link active">Home</a>
                    <a href="<?= base_url() ?>about" class="nav-item nav-link">About Us</a>
                    <a href="<?= base_url() ?>team" class="nav-item nav-link">Team</a>
                    <a href="<?= base_url() ?>notice" class="nav-item nav-link">Notice</a>
                    <a href="<?= base_url() ?>contact" class="nav-item nav-link">Contact Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="<?= base_url() ?>forteacher" class="dropdown-item">Become A Teachers</a>
                            <a href="<?= base_url() ?>appoitment" class="dropdown-item">Make Appointment</a>                        
                            <a href="<?= base_url() ?>facilities" class="dropdown-item">School facilities</a>                        </div>
                    </div>
                </div>
                <a href="<?= base_url() ?>student" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->