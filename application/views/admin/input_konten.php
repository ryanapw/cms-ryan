<div class="content-wrapper">
    <button
        type="button"
        class="btn btn-info mr-2"
        data-toggle="modal"
        data-target="#exampleModal">
        Tambah Konten
    </button>

    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Konten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form
                    class="forms-sample"
                    method="post"
                    action="<?= base_url('admin/konten/simpan'); ?>"
                    enctype='multipart/form-data'>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control p-input">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="id_kategori" class="form-control p-input">
                                <?php foreach ($kategori as $aa) { ?>
                                <option value="<?= $aa['id_kategori']; ?>"><?= $aa['nama_kategori']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>keterangan</label>
                            <textarea
                                name="keterangan"
                                class="form-control p-input"
                                placeholder="Enter Name"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input
                                type="file"
                                name="foto"
                                class="form-control p-input"
                                accept="image/png, image/jpeg">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <h5 class="card-title mb-4">Kategori Konten</h5>
    <div class="table-responsive">
        <table class="table center-aligned-table">
            <thead>
                <tr class="text-primary">
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori Konten</th>
                    <th>Tanggal</th>
                    <th>Kreator</th>
                    <th>Foto</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
		foreach ($konten as $aa) { ?>
                <tr>
                    <th scope="row">
                        <?= $no; ?>
                    </th>
                    <td>
                        <?= $aa['judul']; ?>
                    </td>
                    <td>
                        <?= $aa['nama_kategori']; ?>
                    </td>
                    <td>
                        <?= $aa['tanggal']; ?>
                    </td>
                    <td>
                        <?= $aa['nama']; ?>
                    </td>
                    <td>
                        <a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
                            <i class="fa fa-photo">
                                Lihat foto</i>
                        </a>
                    </td>
                    <td>
                        <a
                            href="<?= base_url('admin/konten/edit/' . $aa['id_konten']) ?>"
                            class="btn btn-primary btn-sm data-toggle="
                            modal"
                        data-target="
                            #examplemodal""="#exampleModal""">Manage</a>
                    </td>
                    <td>
                        <a
                            href="<?= base_url('admin/konten/delete_data/' . $aa['foto']) ?>"
                            class="btn btn-danger btn-sm">Remove</a>
                    </td>
                </tr>
                <?php $no++;
		} ?>
            </tbody>
        </table>
    </div>
</div>
