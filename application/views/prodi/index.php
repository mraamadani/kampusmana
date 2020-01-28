<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Index Data Prodi</h1>

    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data prodi <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if (empty($prodi)) : ?>
      <div class="alert alert-danger" role="alert">
        Data prodi tidak ditemukan.
      </div>
    <?php endif;?>

    <div class="card mb-3">
        <div class="card-header">
            <a href="<?= base_url('prodi/tambah') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">

    <div class="box-body table-responsive">
    <table class="table table-bordered table-striped" id="table_id" width="100%">
        <thead>
            <tr>
                <th>ID Prodi</th>
                <th>Nama Prodi</th>
                <th>Jenjang</th>
                <th>Biaya</th>
                <th>Akreditas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prodi as $prodi): ?>
            <tr>
                <td><?= $prodi['id_prodi']; ?></td>
                <td><?= $prodi['nama_prodi']; ?></td>
                <td><?= $prodi['jenjang']; ?></td>
                <td><?= $prodi['biaya']; ?></td>
                <td><?= $prodi['akreditas']; ?></td>
                <td width="100">
                    <a href="<?= base_url(); ?>prodi/ubah/<?= $prodi['id_prodi'];?>"
                        class="badge badge-success">Ubah</a>
                    <a href="<?= base_url(); ?>prodi/hapus/<?= $prodi['id_prodi'];?>" class="badge badge-danger" onclick="return confirm('Yakin hapus data?');">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->