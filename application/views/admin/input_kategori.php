<div class="content-wrapper">
    <button
        type="button"
        class="btn btn-info mr-2"
        data-toggle="modal"
        data-target="#exampleModal">
        Tambah Kategori
    </button>

    <!-- Modal -->
    <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form
                    class="forms-sample"
                    method="post"
                    action="<?= base_url('admin/kategori/simpan'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input
                                type="text"
                                name="nama_kategori"
                                class="form-control p-input"
                                id="exampleInputEmail1"
                                placeholder="Enter Name">
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
                    <th>Nama Kategori</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
		foreach ($kategori as $aa) { ?>
                <tr>
                    <th scope="row">
                        <?= $no; ?>
                    </th>
                    <td>
                        <?= $aa['nama_kategori']; ?>
                    </td>
                    <td>
                        <a
                            href="<?= base_url('admin/kategori/edit/' . $aa['id_kategori']) ?>"
                            class="btn btn-primary btn-sm data-toggle="
                            modal"
                        data-target="
                            #examplemodal""="#exampleModal""">Manage</a>
                    </td>
                    <td>
                        <a
                            href="<?= base_url('admin/kategori/delete_data/' . $aa['id_kategori']) ?>"
                            class="btn btn-danger btn-sm">Remove</a>
                    </td>
                </tr>
                <?php $no++;
		} ?>
            </tbody>
        </table>
    </div>
</div>