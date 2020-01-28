<div class="container-fluid">
<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<div class="card mb-3">
    <div class="card-header">
        <a href="<?= base_url('prodi') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
        <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $prodi['id_prodi']?>" />
            <div class="form-group">
                <label for="id_prodi">ID Prodi :</label>
                <input class="form-control <?= form_error('id_prodi') ? 'is-invalid':'' ?>"
                    type="text" name="id_prodi" id="id_prodi" value="<?= $prodi['id_prodi']?>"/>
                <div class="invalid-feedback"><?= form_error('id_prodi') ?></div>
            </div>
            <div class="form-group">
                <label for="nama_prodi">Nama Prodi :</label>
                <input class="form-control <?= form_error('nama_prodi') ? 'is-invalid':'' ?>"
                    type="text" name="nama_prodi" id="nama_prodi" value="<?= $prodi['nama_prodi']?>"/>
                <div class="invalid-feedback"><?= form_error('nama_prodi') ?></div>
            </div>
            <div class="form-group">
                <label for="jenjang">Jenjang :</label>
                <input class="form-control <?= form_error('jenjang') ? 'is-invalid':'' ?>"
                    type="text" name="jenjang" id="jenjang" value="<?= $prodi['jenjang']?>"/>
                <div class="invalid-feedback"><?= form_error('jenjang') ?></div>
            </div>
            <div class="form-group">
                <label for="biaya">Biaya :</label>
                <input class="form-control <?= form_error('biaya') ? 'is-invalid':'' ?>"
                    type="number" name="biaya" id="biaya" value="<?= $prodi['biaya']?>"/>
                <div class="invalid-feedback"><?= form_error('biaya') ?></div>
            </div>
            <div class="form-group">
                <label for="akreditas">Akreditas :</label>
                <input class="form-control <?= form_error('akreditas') ? 'is-invalid':'' ?>"
                    type="text" name="akreditas" id="akreditas" value="<?= $prodi['akreditas']?>"/>
                <div class="invalid-feedback"><?= form_error('akreditas') ?></div>
            </div>
        <input class="btn btn-primary" type="submit" name="btn" value="Ubah Data" />
        </form>
    </div>
</div>
</div>