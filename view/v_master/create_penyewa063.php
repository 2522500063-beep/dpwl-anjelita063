<!-- Content Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Entri Data Penyewa</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Penyewa_C063/index') ?>">Master Penyewa</a>
                        </li>
                        <li class="breadcrumb-item active">Entri Penyewa</li>
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
                        <i class="fas fa-user"></i> Form Entri Data Penyewa
                    </h3>
                </div>

                <form action="<?= base_url('Penyewa_C063/simpan') ?>"
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
                                           placeholder="Contoh: anjelita"
                                           maxlength="50"
                                           required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kata Sandi (Password)</label>
                                    <input type="password"
                                           name="Sandi063"
                                           class="form-control"
                                           placeholder="Masukkan kata sandi"
                                           maxlength="225"
                                           required>
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
                                           placeholder="Nomor Induk Kependudukan"
                                           maxlength="20"
                                           required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text"
                                           name="nm_lngkp063"
                                           class="form-control"
                                           placeholder="Nama lengkap penyewa"
                                           maxlength="100"
                                           required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No. Handphone</label>
                                    <input type="text"
                                           name="no_hp063"
                                           class="form-control"
                                           placeholder="08xxxxxxxxxx"
                                           maxlength="20"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <textarea name="almt_lngkp063"
                                      class="form-control"
                                      rows="3"
                                      placeholder="Masukkan alamat lengkap penyewa"
                                      required></textarea>
                        </div>

                        <hr>

                        <h5>
                            <i class="fas fa-id-card"></i> Dokumen Identitas
                        </h5>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto KTP</label>
                                    <input type="file"
                                           name="ft_ktp"
                                           class="form-control"
                                           accept=".jpg,.jpeg,.png"
                                           required>
                                    <small class="text-muted">
                                        Format JPG atau PNG, maksimal 2 MB.
                                    </small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto SIM A</label>
                                    <input type="file"
                                           name="ft_sim_a"
                                           class="form-control"
                                           accept=".jpg,.jpeg,.png"
                                           required>
                                    <small class="text-muted">
                                        Format JPG atau PNG, maksimal 2 MB.
                                    </small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">
                            <i class="fas fa-save"></i> Simpan
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