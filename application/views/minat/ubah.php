<div class="container-fluid">
<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>

<div class="card mb-3">
    <div class="card-header">
        <a href="<?= base_url('minat') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
        <div class="card-body">
            <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $kampus['id_minat']?>" />
                <div class="form-group">
                    <label for="id_minat">ID Minat :</label>
                    <input class="form-control <?= form_error('id_minat') ? 'is-invalid':'' ?>"
                        type="text" name="id_minat" id="id_minat" value="<?= $kampus['id_minat']?>"/>
                    <div class="invalid-feedback">
                        <?= form_error('id_minat') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_minat">Nama Minat :</label>
                    <input class="form-control <?= form_error('nama_minat') ? 'is-invalid':'' ?>"
                        type="text" name="nama_minat" id="nama_minat" value="<?= $kampus['nama_minat']?>"/>
                    <div class="invalid-feedback">
                        <?= form_error('nama_minat') ?>
                    </div>
                </div>
            <input class="btn btn-primary" type="submit" name="btn" value="Ubah Data" />
        </form>
    </div>
</div>
</div>