<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Penyewa</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Daftar Penyewa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <a href="<?= base_url('Penyewa_C063/create_penyewa') ?>"
                               class="btn btn-primary mb-3">
                                <i class="fas fa-user-plus"></i>
                                Tambah Data Penyewa
                            </a>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">

                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>No. HP</th>
                                            <th>Alamat Lengkap</th>
                                            <th>Foto Identitas (KTP & SIM A)</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($dtpenyewa as $p) { ?>

                                            <tr>
                                                <td><?= htmlspecialchars($p['user_dlg063']) ?></td>

                                                <td><?= htmlspecialchars($p['Nik063']) ?></td>

                                                <td><?= htmlspecialchars($p['nm_lngkp063']) ?></td>

                                                <td><?= htmlspecialchars($p['no_hp063']) ?></td>

                                                <td><?= htmlspecialchars($p['almt_lngkp063']) ?></td>

                                                <td>
                                                    <b>KTP</b><br>

                                                    <?php if (!empty($p['ft_ktp'])) { ?>
                                                        <a href="<?= base_url('img/' . $p['ft_ktp']) ?>" target="_blank">
                                                            <img src="<?= base_url('img/' . $p['ft_ktp']) ?>"
                                                                 width="90"
                                                                 style="border-radius:5px;">
                                                        </a>
                                                    <?php } ?>

                                                    <br><br>

                                                    <b>SIM A</b><br>

                                                    <?php if (!empty($p['ft_sim_a'])) { ?>
                                                        <a href="<?= base_url('img/' . $p['ft_sim_a']) ?>" target="_blank">
                                                            <img src="<?= base_url('img/' . $p['ft_sim_a']) ?>"
                                                                 width="90"
                                                                 style="border-radius:5px;">
                                                        </a>
                                                    <?php } ?>
                                                </td>

                                                <td>
                                                    <a href="<?= base_url('Penyewa_C063/edit_penyewa/' . urlencode($p['Nik063'])) ?>"
                                                       class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>

                                                    <a href="<?= base_url('Penyewa_C063/hapus/' . urlencode($p['Nik063'])) ?>"
                                                       class="btn btn-danger btn-sm"
                                                       onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>