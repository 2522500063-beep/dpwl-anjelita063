<?php
$penyewa = $penyewa ?? [];

function aman_edit($nilai)
{
    return htmlspecialchars((string) ($nilai ?? ''), ENT_QUOTES, 'UTF-8');
}
?>

<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Penyewa</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Penyewa_C063/index') ?>">Master Penyewa</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Penyewa</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-user-edit"></i> Form Edit Data Penyewa
                    </h3>
                </div>

                <form action="<?= base_url('Penyewa_C063/update') ?>"
                      method="post"
                      enctype="multipart/form-data">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username (User Login)</label>
                                    <input type="text"
                                           name="user_dlg063"
                                           class="form-control"
                                           maxlength="50"
                                           required
                                           value="<?= aman_edit($penyewa['user_dlg063'] ?? '') ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kata Sandi (Password)</label>
                                    <input type="password"
                                           name="Sandi063"
                                           class="form-control"
                                           maxlength="225"
                                           placeholder="Kosongkan jika tidak diganti">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text"
                                           name="Nik063"
                                           class="form-control"
                                           readonly
                                           value="<?= aman_edit($penyewa['Nik063'] ?? '') ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text"
                                           name="nm_lngkp063"
                                           class="form-control"
                                           maxlength="100"
                                           required
                                           value="<?= aman_edit($penyewa['nm_lngkp063'] ?? '') ?>">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No. Handphone</label>
                                    <input type="text"
                                           name="no_hp063"
                                           class="form-control"
                                           maxlength="20"
                                           required
                                           value="<?= aman_edit($penyewa['no_hp063'] ?? '') ?>">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <textarea name="almt_lngkp063"
                                      class="form-control"
                                      rows="3"
                                      required><?= aman_edit($penyewa['almt_lngkp063'] ?? '') ?></textarea>
                        </div>

                        <hr>

                        <h5>
                            <i class="fas fa-id-card"></i> Dokumen Identitas
                        </h5>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto KTP</label>

                                    <?php if (!empty($penyewa['ft_ktp'])) { ?>
                                        <img src="<?= base_url('img/' . rawurlencode(basename($penyewa['ft_ktp']))) ?>"
                                             class="img-thumbnail mb-2"
                                             style="width:100%; max-width:300px; height:180px; object-fit:cover; display:block;">
                                    <?php } ?>

                                    <input type="file"
                                           name="ft_ktp"
                                           class="form-control"
                                           accept=".jpg,.jpeg,.png">

                                    <small class="text-muted">
                                        Kosongkan jika tidak ingin mengganti foto KTP.
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto SIM A</label>

                                    <?php if (!empty($penyewa['ft_sim_a'])) { ?>
                                        <img src="<?= base_url('img/' . rawurlencode(basename($penyewa['ft_sim_a']))) ?>"
                                             class="img-thumbnail mb-2"
                                             style="width:100%; max-width:300px; height:180px; object-fit:cover; display:block;">
                                    <?php } ?>

                                    <input type="file"
                                           name="ft_sim_a"
                                           class="form-control"
                                           accept=".jpg,.jpeg,.png">

                                    <small class="text-muted">
                                        Kosongkan jika tidak ingin mengganti foto SIM A.
                                    </small>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit" class="btn btn-info">
                            <i class="fas fa-save"></i> Update
                        </button>

                        <a href="<?= base_url('Penyewa_C063/index') ?>"
                           class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>

                    </div>

                </form>

            </div>

        </div>
    </section>

</div>