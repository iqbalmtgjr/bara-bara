<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="<?= base_url() ?>"><i class="bi bi-bar-chart-line-fill"></i> IndoPoling.id</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="<?= base_url() ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="<?= base_url('/tentang-kami') ?>">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="<?= base_url('/poling') ?>">Tambah Polling</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="<?= base_url('/faq') ?>">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="<?= base_url('/hubungi-kami') ?>">Hubungi Kami</a></li>
                </ul>
                <a href="<?= base_url('/login') ?>" class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0">
                    <span class="d-flex align-items-center">
                        <!-- <i class="bi-chat-text-fill me-2"></i> -->
                        <span class="small">Login</span>
                    </span>
                </a>
            </div>
        </div>
    </nav>