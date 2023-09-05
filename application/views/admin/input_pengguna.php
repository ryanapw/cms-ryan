<div id='myalert'>
    <?= $this->session->flashdata('alert', true) ?>
</div>
<div class="content-wrapper">
    <button
        type="button"
        class="btn btn-info mr-2"
        data-toggle="modal"
        data-target="#exampleModal">
        Tambah Data
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambahkan Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form
                    class="forms-sample"
                    method="post"
                    action="<?= base_url('admin/pengguna/simpan'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input
                                type="text"
                                name="username"
                                class="form-control p-input"
                                id="exampleInputEmail1"
                                placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control p-input"
                                id="exampleInputEmail1"
                                placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control p-input"
                                id="exampleInputEmail1"
                                placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <select name="level" class="form-select" aria-label="Default select example">
                                <option value="Admin">Admin</option>
                                <option value="Pengguna">Pengguna</option>
                            </select>
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
    <h5 class="card-title mb-4">Data User</h5>
    <div class="table-responsive">
        <table class="table center-aligned-table">
            <thead>
                <tr class="text-primary">
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
		foreach ($user as $aa) { ?>
                <tr>
                    <th scope="row">
                        <?= $no; ?>
                    </th>
                    <td>
                        <?= $aa['username']; ?>
                    </td>
                    <td>
                        <?= $aa['nama']; ?>
                    </td>
                    <td>
                        <label class="badge badge-success">
                            <?= $aa['level']; ?>
                        </label>
                    </td>
                    <td>
                        <a
                            href="<?= base_url('admin/pengguna/edit/' . $aa['id_user']) ?>"
                            class="btn btn-primary btn-sm">Manage</a>
                    </td>
                    <td>
                        <a
                            href="<?= base_url('admin/pengguna/hapus/' . $aa['id_user']) ?>"
                            class="btn btn-danger btn-sm">Remove</a>
                    </td>
                </tr>
                <?php $no++;
		} ?>
            </tbody>
        </table>
    </div>
</div>