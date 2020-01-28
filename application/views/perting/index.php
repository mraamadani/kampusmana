<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Index Data Perting</h1>

    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data perting <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if (empty($kampus)) : ?>
      <div class="alert alert-danger" role="alert">
        Data perting tidak ditemukan.
      </div>
    <?php endif;?>

    <div class="card mb-3">
        <div class="card-header">
            <a href="<?= base_url('perting/tambah') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <div class="card-body">

    <div class="box-body table-responsive">
    <table class="table table-bordered table-striped" id="table_id" width="100%">
        <thead>
            <tr>
                <th>ID Perting</th>
                <th>Nama Perting</th>
                <th>URL</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kampus as $ka): ?>
            <tr>
                <td>
                    <?= $ka['id_perting']; ?>
                </td>
                <td>
                    <?= $ka['nama_perting']; ?>    
                </td>
                <td>
                    <?= $ka['link']; ?>    
                </td>
                <td width="100">
                    <a href="<?= base_url(); ?>perting/ubah/<?= $ka['id_perting'];?>"
                        class="badge badge-success">Ubah</a>
                    <a href="<?= base_url(); ?>perting/hapus/<?= $ka['id_perting'];?>" class="badge badge-danger" onclick="return confirm('Yakin hapus data?');">Hapus</a>
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