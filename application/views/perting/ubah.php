<div class="container-fluid">
<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<div class="card mb-3">
    <div class="card-header">
        <a href="<?= base_url('perting') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
        <div class="card-body">
            <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $kampus['id_perting']?>" />
                <div class="form-group">
                    <label for="id_perting">ID Perting :</label>
                    <input class="form-control <?= form_error('id_perting') ? 'is-invalid':'' ?>"
                        type="text" name="id_perting" id="id_perting" value="<?= $kampus['id_perting']?>"/>
                    <div class="invalid-feedback">
                        <?= form_error('id_perting') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_perting">Nama Perting :</label>
                    <input class="form-control <?= form_error('nama_perting') ? 'is-invalid':'' ?>"
                        type="text" name="nama_perting" id="nama_perting" value="<?= $kampus['nama_perting']?>"/>
                    <div class="invalid-feedback">
                        <?= form_error('nama_perting') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="link">URL :</label>
                    <input class="form-control <?= form_error('link') ? 'is-invalid':'' ?>"
                        type="text" name="link" id="link" value="<?= $kampus['link']?>"/>
                    <div class="invalid-feedback">
                        <?= form_error('link') ?>
                    </div>
                </div>
            <input class="btn btn-primary" type="submit" name="btn" value="Ubah Data" />
        </form>
    </div>
</div>
</div>