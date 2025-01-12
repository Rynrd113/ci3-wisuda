<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?></title>
  <link rel="shortcut icon"
    href="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2033%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%20xmlns:v='https://vecta.io/nano'%3e%3cpath%20d='M3%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='16.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3c/svg%3e"
    type="image/x-icon" />
  <link rel="stylesheet" href="assets/compiled/css/app.css" />
  <link rel="stylesheet" crossorigin href="assets/compiled/css/iconly.css" />
  <script src="assets/js/scripts.js" defer></script>
</head>

<body>
  <script src="assets/static/js/initTheme.js"></script>
  <div id="app">
    <!-- Sidebar Menu -->
    <div id="sidebar">
      <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
          <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
              <a>Logo</a>
            </div>
            <!-- Theme Toggle -->
            <!-- <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--system-uicons" width="20" height="20"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path
                    d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                    opacity=".3"></path>
                  <g transform="translate(-210 -1)">
                    <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                    <circle cx="220.5" cy="11.5" r="4"></circle>
                    <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                  </g>
                </g>
              </svg>
              <div class="form-check form-switch fs-6">
                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                <label class="form-check-label"></label>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                viewBox="0 0 24 24">
                <path fill="currentColor"
                  d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                </path>
              </svg>
            </div> -->
            <!-- End Theme Toggle -->
            <div class="sidebar-toggler x">
              <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
          </div>
        </div>
        <?php
        $current_page = basename($_SERVER['REQUEST_URI'], ".php");
        ?>

        <div class="sidebar-menu">
          <ul class="menu">
            <li class="sidebar-title">Menu</li>
            <li class="sidebar-item <?= ($current_page == 'dashboard') ? 'active' : '' ?>">
              <a href="<?= base_url() ?>dashboard" class="sidebar-link">
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item <?= ($current_page == 'landing') ? 'active' : '' ?>">
              <a href="<?= base_url() ?>landing" class="sidebar-link">
                <i class="bi bi-house-door-fill"></i>
                <span>Halaman Utama</span>
              </a>
            </li>
            <li class="sidebar-item <?= ($current_page == 'akademik') ? 'active' : '' ?>">
              <a href="<?= base_url() ?>akademik" class="sidebar-link">
                <i class="bi bi-book-fill"></i>
                <span>Akademik</span>
              </a>
            </li>            <li class="sidebar-item <?= ($current_page == 'keuangan') ? 'active' : '' ?>">
              <a href="<?= base_url() ?>keuangan" class="sidebar-link">
                <i class="bi bi-cash-stack"></i>
                <span>Keuangan</span>
              </a>
            </li>
            <li class="sidebar-item <?= ($current_page == 'toga') ? 'active' : '' ?>">
              <a href="<?= base_url() ?>toga" class="sidebar-link">
                <i class="bi bi-mortarboard-fill"></i>
                <span>Toga</span>
              </a>
            </li>
            <li class="sidebar-item <?= ($current_page == 'foto') ? 'active' : '' ?>">
              <a href="<?= base_url() ?>foto" class="sidebar-link">
                <i class="bi bi-image-fill"></i>
                <span>Validasi Foto</span>
              </a>
            </li>
            <li class="sidebar-item <?= ($current_page == 'admin') ? 'active' : '' ?>">
              <a href="<?= base_url() ?>admin" class="sidebar-link">
                <i class="bi bi-person-badge-fill"></i>
                <span>Admin</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Main Content -->
    <div id="main">
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>