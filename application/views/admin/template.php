<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $judul_halaman; ?></title>
        <link
            rel="stylesheet"
            href="<?= base_url('assets/star/')?>node_modules/font-awesome/css/font-awesome.min.css"/>
        <link
            rel="stylesheet"
            href="<?= base_url('assets/star/')?>node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css"/>
        <link
            rel="stylesheet"
            href="<?= base_url('assets/star/')?>node_modules/flag-icon-css/css/flag-icon.min.css"/>
        <link rel="stylesheet" href="<?= base_url('assets/star/')?>css/style.css"/>
        <link
            rel="shortcut icon"
            href="<?= base_url('assets/star/')?>images/favicon.png"/>
    </head>

    <body>
        <div class=" container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="<?= base_url() ?>"><img src="<?= base_url('assets/star/')?>images/logo_star_black.png"></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo_star_mini.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/face.jpg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
            <!-- partial -->
            <div class="container-fluid">
                <div class="row row-offcanvas row-offcanvas-right">
                    <!-- partial:partials/_sidebar.html -->
                    <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
                        <div class="user-info">
                            <p class="name"><?= $this->session->userdata('nama') ?></p>
                            <p class="designation"><?= $this->session->userdata('level') ?></p>
                        </div>
                        <ul class="nav">
                            <?php $menu = $this->uri->segment(2); ?>
                            <li
                                class="nav-item <?php if($menu=='dashboard'){ echo "active"; }?>">
                                <a class="nav-link" href="<?= base_url('admin/dashboard')?>">
                                    <span class="menu-title">
                                        <i class="fa fa-th-large"></i>Dashboard</i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu=='caraousel'){ echo "active"; }?>">
                            <a class="nav-link" href="<?= base_url('admin/caraousel/')?>">
                                <span class="menu-title">
                                    <i class="fa fa-bar-chart-o"></i>Carousel</span>
                            </a>
                        </li>
                        <?php if($this->session->userdata('level')=='Admin'){ ?>
                        <li class="nav-item <?php if($menu=='pengguna'){ echo "active"; }?>">
                            <a class="nav-link" href="<?= base_url('admin/pengguna/')?>">
                                <span class="menu-title">
                                    <i class="fa fa-user"></i>User</span>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="nav-item <?php if($menu=='konten'){ echo "active"; }?>">
                            <a class="nav-link" href="<?= base_url('admin/konten/')?>">
                                <span class="menu-title">
                                    <i class="fa fa-file-zip-o"></i>Konten</span>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu=='kategori'){ echo "active"; }?>">
                            <a class="nav-link" href="<?= base_url('admin/kategori/')?>">
                                <span class="menu-title">
                                    <i class="fa fa-bars"></i>Kategori</span>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu=='konfigurasi'){ echo "active"; }?>">
                            <a class="nav-link" href="<?= base_url('admin/konfigurasi/')?>">
                                <span class="menu-title">
                                    <i class="fa fa-bar-chart-o"></i>Konfigurasi</span>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu==''){ echo "active"; }?>">
                            <a class="nav-link" href="#">
                                <span class="menu-title">
                                    <i class="fa fa-user-circle-o"></i>Profile</span>
                            </a>
                        </li>
                        <li class="nav-item <?php if($menu=='logout'){ echo "active"; }?>">
                            <a class="nav-link" href="<?= base_url('auth/logout/')?>">
                                <span class="menu-title">
                                    <i class="fa fa-window-close"></i>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- partial -->
                <?php echo $contents; ?>
                <div id='myalert'>
                    <?= $this->session->flashdata('alert', true) ?>
                </div>

                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="float-right">
                            <a href="#">Star Admin</a>
                            &copy; 2017
                        </span>
                    </div>
                </footer>

                <!-- partial -->
            </div>
        </div>

    </div>

    <script
        src="<?= base_url('assets/star/')?>node_modules/jquery/dist/jquery.min.js"></script>
    <script
        src="<?= base_url('assets/star/')?>node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script
        src="<?= base_url('assets/star/')?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script
        src="<?= base_url('assets/star/')?>node_modules/chart.js/dist/Chart.min.js"></script>
    <script
        src="<?= base_url('assets/star/')?>node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap"
        async="async"
        defer="defer"></script>
    <script src="<?= base_url('assets/star/')?>js/off-canvas.js"></script>
    <script src="<?= base_url('assets/star/')?>js/hoverable-collapse.js"></script>
    <script src="<?= base_url('assets/star/')?>js/misc.js"></script>
    <script src="<?= base_url('assets/star/')?>js/chart.js"></script>
    <script src="<?= base_url('assets/star/')?>js/maps.js"></script>
    <script>
        $('#myalert')
            .delay('slow')
            .slideDown('slow')
            .delay(3000)
            .slideUp(600);
    </script>
</body>

</html>