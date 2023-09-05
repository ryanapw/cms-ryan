<div class="content-wrapper">
    <h3 class="page-heading mb-4">Konfigurasi</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form
                        class="forms-sample"
                        method="post"
                        action="<?= base_url('admin/konfigurasi/update'); ?>">
                        <div class="form-group">
                            <label>Judul Website</label>
                            <input
                                type="text"
                                name="judul_website"
                                class="form-control p-input"
                                value="<?= $konfig->judul_website; ?>">
                        </div>
                        <div class="form-group">
                            <label>Profile Website</label>
                            <textarea
                                name="profil_website"
                                class="form-control p-input"
                                placeholder="Enter Name">
                                <?= $konfig->profil_website; ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input
                                type="text"
                                name="instagram"
                                class="form-control p-input"
                                value="<?= $konfig->instagram; ?>">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input
                                type="text"
                                name="facebook"
                                class="form-control p-input"
                                value="<?= $konfig->facebook; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control p-input"
                                value="<?= $konfig->email; ?>">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input
                                type="text"
                                name="alamat"
                                class="form-control p-input"
                                value="<?= $konfig->alamat; ?>">
                        </div>
                        <div class="form-group">
                            <label>Whatsapp</label>
                            <input
                                type="text"
                                name="no_wa"
                                class="form-control p-input"
                                value="<?= $konfig->no_wa; ?>">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>