<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- LOGO INVENTORY -->
            <div class="navbar-brand">
                <a href="<?= base_url('home') ?>" class="logo-container">
                    <b class="logo-icon pl-2">
                        <img src="<?= base_url('assets/images/Logo_Spektrum.png') ?>" height="30" alt="homepage"
                            class="dark-logo" />
                    </b>
                    <span class="logo-text">
                        <img src="<?= base_url('assets/images/images.png') ?>" height="20" width="150" alt="homepage"
                            class="dark-logo" />
                    </span>
                </a>
            </div>
            <div class="logo-container">
            </div>
        </div>
        <!-- END LOGO INVENTORY -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">

            <!-- Right side toggle and nav items -->

            <ul class="navbar-nav float-right">

                <!-- Search -->

                <li class="nav-item d-none d-md-block">
                    <a class="nav-link">
                        <form action="<?= base_url('items/search') ?>" method="POST">
                            <div class="customize-input">
                                <input name="keyword" class="form-control custom-shadow custom-radius border-4 bg-white"
                                    type="search" placeholder="Search" aria-label="Search"
                                    value="<?= $this->session->userdata('keyword') ?>">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                        </form>
                    </a>
                </li>

                <!-- ==============================================================
                User profile and search -->

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="<?= $this->session->userdata('role') == 'admin' ? base_url('assets/images/navbar/admin.png') : base_url('assets/images/navbar/user.png') ?>" alt="user" class="rounded-circle" width="34">
                        <span class="ml-2 d-none d-lg-inline-block"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="<?= base_url("user") ?>">
                            <i data-feather="user" class="svg-icon mr-2 ml-1"></i>My Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url("user/edit/" . $this->session->userdata('id_user')) ?>">
                            <i data-feather="settings" class="svg-icon mr-2 ml-1"></i>Account Setting
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('logout') ?>">
                            <i data-feather="power" class="svg-icon mr-2 ml-1"></i>Logout
                        </a>
                    </div>
                </li> -->

                <!-- User profile and search -->

            </ul>
        </div>
    </nav>
</header>

<!-- End Topbar header -->