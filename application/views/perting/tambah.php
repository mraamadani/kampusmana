<div class="container-fluid">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

<div class="card mb-3">
    <div class="card-header">
        <a href="<?= base_url('perting') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?= base_url('perting/tambah') ?>" method="post">
            <div class="form-group">
                <label for="id_perting">ID Perting :</label>
                <input class="form-control <?= form_error('id_perting') ? 'is-invalid':'' ?>"
                    type="text" name="id_perting" />
                <div class="invalid-feedback">
                    <?= form_error('id_perting') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="nama_perting">Nama Perting :</label>
                <input class="form-control <?= form_error('nama_perting') ? 'is-invalid':'' ?>"
                    type="text" name="nama_perting" />
                <div class="invalid-feedback">
                    <?= form_error('nama_perting') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="link">URL :</label>
                <input class="form-control <?= form_error('link') ? 'is-invalid':'' ?>"
                    type="text" name="link" />
                <div class="invalid-feedback">
                    <?= form_error('link') ?>
                </div>
            </div>
            <input class="btn btn-primary" type="submit" name="btn" value="Simpan Data" />
            </form>
        </div>
    </div>
</div>