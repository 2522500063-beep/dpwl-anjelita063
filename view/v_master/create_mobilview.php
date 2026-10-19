<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Entri Data Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Mobil_C/index') ?>">Master Mobil</a>
                        </li>
                        <li class="breadcrumb-item active">Entri Mobil</li>
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
                        <i class="fas fa-car"></i> Form Entri Data Mobil
                    </h3>
                </div>

                <form action="<?= base_url('Mobil_C/simpan') ?>"
                      method="post"
                      enctype="multipart/form-data">

                    <div class="card-body">

                        <!-- Baris pertama -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. Plat</label>
                                    <input type="text" name="no_plat"
                                           class="form-control"
                                           placeholder="BN 1234 XY"
                                           maxlength="10" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Mobil</label>
                                    <input type="text" name="nm_mobil"
                                           class="form-control"
                                           placeholder="Avanza"
                                           maxlength="100" required>
                                </div>
                            </div>
                        </div>

                        <!-- Baris kedua -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jumlah Kursi</label>
                                    <input type="number" name="nkursi"
                                           class="form-control"
                                           value="8" min="1" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jumlah Bagasi</label>
                                    <input type="number" name="nbagasi"
                                           class="form-control"
                                           value="1" min="0" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jenis Mobil</label>
                                    <select name="jns_mobil"
                                            class="form-control" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="MPV">MPV</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Sedan">Sedan</option>
                                        <option value="Hatchback">Hatchback</option>
                                        <option value="Pickup">Pickup</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Transmisi</label>
                                    <select name="transmisi"
                                            class="form-control" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="Manual">Manual</option>
                                        <option value="Automatic">Automatic</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Baris ketiga -->
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tahun Pembuatan</label>
                                    <input type="number" name="thn_buat"
                                           class="form-control"
                                           placeholder="2026"
                                           min="1901" max="2155" required>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Biaya Per Hari</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" name="hrg_hari"
                                               class="form-control"
                                               placeholder="350000"
                                               min="0" step="0.01" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Status Unit</label>
                                    <select name="status_unit"
                                            class="form-control" required>
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Disewa">Disewa</option>
                                        <option value="Servis">Servis</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian Foto Mobil -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <h5>
                                    <i class="fas fa-camera"></i> Foto Mobil
                                </h5>
                                <hr>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto Depan</label>
                                    <input type="file" name="ft_depan"
                                           class="form-control"
                                           accept="image/*">
                                    <small class="text-muted">
                                        Format JPG, JPEG, atau PNG
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto Belakang</label>
                                    <input type="file" name="ft_blkg"
                                           class="form-control"
                                           accept="image/*">
                                    <small class="text-muted">
                                        Format JPG, JPEG, atau PNG
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto Interior</label>
                                    <input type="file" name="ft_interior"
                                           class="form-control"
                                           accept="image/*">
                                    <small class="text-muted">
                                        Format JPG, JPEG, atau PNG
                                    </small>
                                </div>
                            </div>
                        </div>

                        <!-- Catatan Unit -->
                        <div class="form-group mt-2">
                            <label>Catatan Unit</label>
                            <textarea name="cttn_unit"
                                      class="form-control"
                                      rows="3"
                                      placeholder="Kondisi baik"></textarea>
                        </div>

                    </div>

                    <!-- Tombol Form -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">
                            <i class="fas fa-save"></i> Simpan
                        </button>

                        <a href="<?= base_url('Mobil_C/index') ?>"
                           class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </section>
</div>