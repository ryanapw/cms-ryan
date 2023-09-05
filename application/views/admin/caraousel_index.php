<div class="content-wrapper">
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">caraousel</h5>
                    <form class="forms-sample" method="post" action="<?= base_url('admin/caraousel/simpan'); ?>"
                        enctype='multipart/form-data'>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control p-input" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label>Pilih Foto</label>
                            <input type="file" name="foto" class="form-control p-input">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php foreach ($caraousel as $aa) { ?>
            <div class="col-md-3 mb-3 mt-3">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $aa['judul'] ?>
                        </h5>
                        <a href="<?= base_url('admin/caraousel/delete_data/' . $aa['foto']) ?>"
                            class="btn btn-danger btn-sm">Remove</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>