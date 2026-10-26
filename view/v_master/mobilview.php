  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <a href="<?= base_url('Mobil_C/create_mobil') ?>" class="btn btn-primary">
                    <i class="fas fa-car"></i>
                    Tambah Data Mobil
                </a>
                <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No. Plat</th>
            <th>Nama Mobil</th>
            <th>Jumlah Kursi</th>
            <th>Jumlah Bagasi</th>
            <th>Jenis Mobil / Transmisi</th>
            <th>Tahun</th>
            <th>Foto</th>
            <th>Biaya Perhari</th>
            <th>Catatan Unit</th>
            <th>Status Unit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dtmobil as $m) { ?>
            <tr>
                <td><?= $m['no_plat'] ?></td>
                <td><?= $m['nm_mobil'] ?></td>
                <td><?= $m['nkursi'] ?></td>
                <td><?= $m['nbagasi'] ?></td>
                <td><?= $m['jns_mobil'] . '<br>' . $m['transmisi'] ?></td>
                <td><?= $m['thn_buat'] ?></td>
                <td>
    <?php
    $foto = [
        $m['ft_depan'] ?? '',
        $m['ft_blkg'] ?? '',
        $m['ft_interior'] ?? ''
    ];

    foreach ($foto as $namaFoto) {
        if (!empty($namaFoto)) {
            $lokasi = dirname(__DIR__, 2) . '/img/' . $namaFoto;

            if (file_exists($lokasi)) {
                ?>
                <img src="<?= base_url('img/' . rawurlencode($namaFoto)) ?>"
                     width="100"
                     height="65"
                     style="object-fit: cover; border-radius: 5px; margin-bottom: 5px; display: block;">
                <?php
            }
        }
    }
    ?>
</td>
                <td><?= $m['hrg_hari'] ?></td>
                <td><?= $m['cttn_unit'] ?></td>
                <td><?= $m['status_unit'] ?></td>
                <td>
                    <a href="<?= base_url('Mobil_C/edit_mobil/' . urlencode($m['no_plat'])) ?>"
                      class="btn btn-warning btn-sm">
                      <i class="fas fa-edit"></i> Edit
                    </a>

                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  
