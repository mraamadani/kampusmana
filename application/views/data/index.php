<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Index Data</h1>

    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if (empty($data)) : ?>
      <div class="alert alert-danger" role="alert">
        Data tidak ditemukan.
      </div>
    <?php endif;?>

    <div class="card mb-3">
        <div class="card-header">
            <a href="<?= base_url('data/tambah') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">

    <div class="table-responsive">
    <table class="hover" id="table_id" width="100%">
        <thead>
            <tr>
                <th>ID Prodi</th>
                <th>Nama Prodi</th>
                <th>Jenjang</th>
                <th>Biaya</th>
                <th>Akreditas</th>
                <th>ID Minat</th>
                <th>Nama Minat</th>
                <th>ID Perting</th>
                <th>Nama Perting</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $data): ?>
            <tr>
                <td><?= $data['id_prodi']; ?></td>
                <td><?= $data['nama_prodi']; ?></td>
                <td><?= $data['jenjang']; ?></td>
                <td><?= $data['biaya']; ?> </td>
                <td><?= $data['akreditas']; ?></td>
                <td><?= $data['id_minat']; ?></td>
                <td><?= $data['nama_minat']; ?></td>
                <td><?= $data['id_perting']; ?></td>
                <td><?= $data['nama_perting']; ?></td>
                <td><?= $data['link']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->