<?php
$mobil = $mobil ?? [];

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
                    <h1>Edit Data Mobil</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Mobil_C/index') ?>">
                                Master Mobil
                            </a>
                        </li>
                        <li class="breadcrumb-item active">
                            Edit Mobil
                        </li>
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
                        <i class="fas fa-car"></i>
                        Form Edit Data Mobil
                    </h3>
                </div>

                <!-- Form Edit -->
                <form action="<?= base_url('Mobil_C/update') ?>"
                      method="post"
                      enctype="multipart/form-data">

                    <input type="hidden"
                           name="plat_lama"
                           value="<?= aman_edit($mobil['no_plat'] ?? '') ?>">

                    <div class="card-body">

                        <!-- Baris Pertama -->
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. Plat</label>
                                    <input type="text"
                                           name="no_plat"
                                           class="form-control"
                                           maxlength="10"
                                           required
                                           value="<?= aman_edit($mobil['no_plat'] ?? '') ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Mobil</label>
                                    <input type="text"
                                           name="nm_mobil"
                                           class="form-control"
                                           maxlength="100"
                                           required
                                           value="<?= aman_edit($mobil['nm_mobil'] ?? '') ?>">
                                </div>
                            </div>

                        </div>

                        <!-- Baris Kedua -->
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jumlah Kursi</label>
                                    <input type="number"
                                           name="nkursi"
                                           class="form-control"
                                           min="1"
                                           required
                                           value="<?= aman_edit($mobil['nkursi'] ?? '') ?>">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jumlah Bagasi</label>
                                    <input type="number"
                                           name="nbagasi"
                                           class="form-control"
                                           min="0"
                                           required
                                           value="<?= aman_edit($mobil['nbagasi'] ?? '') ?>">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jenis Mobil</label>

                                    <select name="jns_mobil"
                                            class="form-control"
                                            required>
                                        <option value="">-- Pilih --</option>

                                        <?php foreach (
                                            ['MPV', 'SUV', 'Sedan', 'Hatchback', 'Pickup']
                                            as $jenis
                                        ): ?>
                                            <option value="<?= $jenis ?>"
                                                <?= ($mobil['jns_mobil'] ?? '') == $jenis ? 'selected' : '' ?>>
                                                <?= $jenis ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Transmisi</label>

                                    <select name="transmisi"
                                            class="form-control"
                                            required>
                                        <option value="">-- Pilih --</option>

                                        <?php foreach (
                                            ['Manual', 'Automatic']
                                            as $transmisi
                                        ): ?>
                                            <option value="<?= $transmisi ?>"
                                                <?= ($mobil['transmisi'] ?? '') == $transmisi ? 'selected' : '' ?>>
                                                <?= $transmisi ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <!-- Baris Ketiga -->
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tahun Pembuatan</label>
                                    <input type="number"
                                           name="thn_buat"
                                           class="form-control"
                                           min="1901"
                                           max="2155"
                                           required
                                           value="<?= aman_edit($mobil['thn_buat'] ?? '') ?>">
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Biaya Per Hari</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>

                                        <input type="number"
                                               name="hrg_hari"
                                               class="form-control"
                                               min="0"
                                               step="0.01"
                                               required
                                               value="<?= aman_edit($mobil['hrg_hari'] ?? '') ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Status Unit</label>

                                    <select name="status_unit"
                                            class="form-control"
                                            required>
                                        <?php foreach (
                                            ['Tersedia', 'Disewa', 'Servis']
                                            as $status
                                        ): ?>
                                            <option value="<?= $status ?>"
                                                <?= ($mobil['status_unit'] ?? '') == $status ? 'selected' : '' ?>>
                                                <?= $status ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <!-- Foto Mobil -->
                        <div class="row mt-3">

                            <div class="col-12">
                                <h5>
                                    <i class="fas fa-camera"></i>
                                    Foto Mobil
                                </h5>
                                <hr>
                                <p class="text-muted">
                                    Foto lama akan tetap digunakan jika kamu
                                    tidak memilih foto pengganti.
                                </p>
                            </div>

                            <?php
                            $daftar_foto = [
                                'ft_depan' => 'Foto Depan',
                                'ft_blkg' => 'Foto Belakang',
                                'ft_interior' => 'Foto Interior'
                            ];
                            ?>

                            <?php foreach ($daftar_foto as $kolom => $label): ?>
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <label><?= $label ?></label>

                                        <?php if (!empty($mobil[$kolom])): ?>

                                            <img
                                                src="<?= base_url('img/' . rawurlencode(basename($mobil[$kolom]))) ?>"
                                                alt="<?= $label ?>"
                                                class="img-thumbnail mb-2"
                                                style="width:100%; max-width:300px; height:180px; object-fit:cover; display:block;"
                                            >

                                            <p class="text-muted small">
                                                <?= aman_edit($mobil[$kolom]) ?>
                                            </p>

                                        <?php else: ?>

                                            <div class="border rounded p-3 mb-2 text-muted">
                                                Foto belum tersedia.
                                            </div>

                                        <?php endif; ?>

                                        <input type="file"
                                               name="<?= $kolom ?>"
                                               class="form-control"
                                               accept=".jpg,.jpeg,.png">

                                        <small class="text-muted">
                                            Format JPG atau PNG. Kosongkan jika
                                            tidak ingin mengganti foto.
                                        </small>

                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <!-- Catatan Unit -->
                        <div class="form-group mt-2">
                            <label>Catatan Unit</label>

                            <textarea name="cttn_unit"
                                      class="form-control"
                                      rows="3"><?= aman_edit($mobil['cttn_unit'] ?? '') ?></textarea>
                        </div>

                    </div>

                    <!-- Tombol Form -->
                    <div class="card-footer">

                        <button type="submit" class="btn btn-info">
                            <i class="fas fa-save"></i>
                            Update
                        </button>

                        <a href="<?= base_url('Mobil_C/index') ?>"
                           class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i>
                            Kembali
                        </a>

                    </div>

                </form>

            </div>

        </div>
    </section>

</div>