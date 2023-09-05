<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Star Admin</title>
        <link
            rel="stylesheet"
            href="<?= base_url('assets/star/')?>node_modules/font-awesome/css/font-awesome.min.css">
        <link
            rel="stylesheet"
            href="<?= base_url('assets/star/')?>node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/star/')?>css/style.css">
        <link
            rel="shortcut icon"
            href="<?= base_url('assets/star/')?>images/favicon.png">
    </head>

    <body>
        <div
            class="container-scroller ps ps--theme_default"
            data-ps-id="7c2022ed-f203-7b96-5e81-15139d3e26cc">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
                        <div class="card col-lg-4 mx-auto">
                            <div class="card-body px-5 py-5">
                                <h3 class="card-title text-left mb-3">Selamat Datang</h3>
                                <form method="post" action="<?= base_url('auth/login'); ?>">
                                    <div class="form-group">
                                        <input
                                            name="username"
                                            type="text"
                                            class="form-control p_input"
                                            placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input
                                            name="password"
                                            type="password"
                                            class="form-control p_input"
                                            placeholder="Password">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block enter-btn">LOG IN</button>
                                    </div>
                                    <br>
                                    <div id='myalert'>
                                        <?= $this->session->flashdata('alert', true) ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;">
                <div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;">
                <div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>

        <script
            src="<?= base_url('assets/star/')?>node_modules/jquery/dist/jquery.min.js"></script>
        <script
            src="<?= base_url('assets/star/')?>node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script
            src="<?= base_url('assets/star/')?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script
            src="<?= base_url('assets/star/')?>node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
        <script src=".<?= base_url('assets/star/')?>js/misc.js"></script>
        <script>
            $('#myalert')
                .delay('slow')
                .slideDown('slow')
                .delay(3000)
                .slideUp(600);
        </script>

    </body>
</html>