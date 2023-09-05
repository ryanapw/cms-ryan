<div id='myalert'>
    <?= $this->session->flashdata('alert', true) ?>
</div>
<?php foreach ($user as $aa) { ?>
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Edit Data</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form
                        class="forms-sample"
                        method="post"
                        action="<?= base_url('admin/pengguna/update');?>">
                        <div class="form-group">
                            <label>Username</label>
                            <input
                                name="username"
                                type="text"
                                class="form-control p-input"
                                value="<?= $aa['username'] ?>"
                                placeholder="Enter Username"
                                readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input
                                name="name"
                                type="text"
                                class="form-control p-input"
                                value="<?= $aa['nama'] ?>"
                                placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <select name="level" class="form-select" aria-label="Default select example">
                                <option value="Admin" <?php if($aa['level']=='Admin'){echo "selected";}?>>Admin</option>
                                <option value="Pengguna" <?php if($aa['level']=='Pengguna'){echo "selected";}?>>Pengguna</option>
                            </select>
                        </div>
                        <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>