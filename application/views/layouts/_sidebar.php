<?php $current_url = $this->uri->segment(1); ?>

<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- Submenu Dashboard -->
                <li class="sidebar-item <?= ($current_url == 'home') ?>">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('home') ?>" aria-expanded="false" data-pjax>
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <li class="nav-small-cap"><span class="hide-menu">Manajemen Barang</span></li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="sidebar-item <?= ($current_url == 'masterbarang') ?>">
                        <a class="sidebar-link" href="<?= base_url('masterbarang') ?>" aria-expanded="false" data-pjax>
                            <i data-feather="clipboard" class="feather-icon"></i>
                            <span class="hide-menu">Master Barang</span>
                        </a>
                    </li>
                <?php endif ?>
                <li class="sidebar-item <?= ($current_url == 'items') ?>">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('masterlistbarang') ?>" aria-expanded="false" data-pjax>
                        <i data-feather="package" class="feather-icon"></i>
                        <span class="hide-menu">List Barang</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <li class="nav-small-cap"><span class="hide-menu">Manajemen Barang</span></li>
                <li class="sidebar-item <?= ($current_url == 'cartin') ?>">
                    <a class="sidebar-link" href="<?= base_url('cartin') ?>" aria-expanded="false" data-pjax>
                        <i data-feather="shopping-cart" class="feather-icon"></i>
                        <span class="hide-menu">Barang Masuk</span>
                    </a>
                </li>
                <li class="sidebar-item <?= ($current_url == 'inputs') ?>">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('inputs') ?>" aria-expanded="false" data-pjax>
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">History Barang Masuk</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <li class="sidebar-item <?= ($current_url == 'cartout') ?>">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('cartout') ?>" aria-expanded="false" data-pjax>
                        <i data-feather="shopping-cart" class="feather-icon"></i>
                        <span class="hide-menu">Barang Keluar</span>
                    </a>
                </li>
                <li class="sidebar-item <?= ($current_url == 'outputs') ?>">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('outputs') ?>" aria-expanded="false" data-pjax>
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">History Barang Keluar</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <li class="nav-small-cap"><span class="hide-menu">Manajemen User</span></li>
                <li class="sidebar-item <?= ($current_url == 'users') ?>">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('users') ?>" aria-expanded="false" data-pjax>
                        <i data-feather="users" class="feather-icon"></i>
                        <span class="hide-menu">List User</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="sidebar-item <?= ($current_url == 'register') ?>">
                        <a class="sidebar-link sidebar-link" href="<?= base_url('register') ?>" aria-expanded="false" data-pjax>
                            <i data-feather="user-plus" class="feather-icon"></i>
                            <span class="hide-menu">Register Teknisi</span>
                        </a>
                    </li>
                <?php endif ?>

                <li class="list-divider"></li>

                <li class="sidebar-item <?= ($current_url == 'user') ?>">
                    <a class="sidebar-link sidebar-link" href="<?= base_url("user/edit/" . $this->session->userdata('id_user')) ?>">
                        <i data-feather="settings" class="feather-icon mr-2 ml-1"></i>Settings
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?= base_url('logout') ?>">
                        <i data-feather="log-out" class="feather-icon mr-2 ml-1"></i>Logout
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>