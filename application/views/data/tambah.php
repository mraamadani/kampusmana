<div class="container-fluid">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

<div class="card mb-3">
    <div class="card-header">
        <a href="<?= base_url('data') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="card-body">
        <form action="<?= base_url('data/tambah') ?>" method="post">
            <div class="form-group">
                <label for="id_minat">ID Minat :</label>
                <?= form_dropdown('minat', $minat, $selectedminat, ['class' => 'form-control', 'required' => 'required']); ?>
                    
                </select>
                <div class="invalid-feedback">
                    <?= form_error('id_minat') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="nama_minat">Nama Minat :</label>
                <input class="form-control <?= form_error('nama_minat') ? 'is-invalid':'' ?>"
                    type="text" name="nama_minat" />
                <div class="invalid-feedback">
                    <?= form_error('nama_minat') ?>
                </div>
            </div>
                <input class="btn btn-primary" type="submit" name="btn" value="Simpan Data" />
            </form>
        </div>
    </div>
</div>