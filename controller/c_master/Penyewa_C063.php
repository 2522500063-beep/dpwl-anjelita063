<?php
class Penyewa_C063 extends Controller
{
    public function index()
    {
        $cekdata = $this->load->model('m_master/Penyewa_M063');
        $dt['dtpenyewa'] = $cekdata->datapenyewa();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('v_master/penyewaview_063', $dt);
        $this->load->view('layout/footer');
    }

    public function create_penyewa()
    {
        $info['nm_user'] = explode(
            '@',
            $this->session->userdata('emailuser')
        )[0];

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar', $info);
        $this->load->view('v_master/create_penyewa063');
        $this->load->view('layout/footer');
    }

    public function simpan()
    {
        $penyewa = $this->load->model('m_master/Penyewa_M063');

        $folder = dirname(__DIR__, 2) . '/img/';

        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        $ft_ktp = '';
        $ft_sim_a = '';

        foreach (['ft_ktp', 'ft_sim_a'] as $kolom) {
            if (
                isset($_FILES[$kolom]) &&
                $_FILES[$kolom]['error'] == 0
            ) {
                $file = $_FILES[$kolom];
                $info = getimagesize($file['tmp_name']);

                $ext = [
                    'image/jpeg' => 'jpg',
                    'image/png' => 'png'
                ];

                if (
                    $info &&
                    isset($ext[$info['mime']]) &&
                    $file['size'] <= 2 * 1024 * 1024
                ) {
                    $nama = $kolom .
                        $this->load->post('Nik063') .
                        '.' . $ext[$info['mime']];

                    if (move_uploaded_file(
                        $file['tmp_name'],
                        $folder . $nama
                    )) {
                        if ($kolom == 'ft_ktp') {
                            $ft_ktp = $nama;
                        } else {
                            $ft_sim_a = $nama;
                        }
                    }
                }
            }
        }

        $data = [
            'user_dlg063' => $this->load->post('user_dlg063'),
            'Sandi063' => password_hash(
                $this->load->post('Sandi063'),
                PASSWORD_DEFAULT
            ),
            'Nik063' => $this->load->post('Nik063'),
            'nm_lngkp063' => $this->load->post('nm_lngkp063'),
            'no_hp063' => $this->load->post('no_hp063'),
            'almt_lngkp063' => $this->load->post('almt_lngkp063'),
            'ft_ktp' => $ft_ktp,
            'ft_sim_a' => $ft_sim_a
        ];

        $simpan = $penyewa->simpan($data);

        if ($simpan) {
            echo "<script>
                alert('Data penyewa berhasil disimpan!');
                window.location.href = '" .
                base_url('Penyewa_C063/index') . "';
            </script>";
        } else {
            echo "<script>
                alert('Data penyewa gagal disimpan!');
                window.history.back();
            </script>";
        }
    }

    public function edit_penyewa($Nik063)
    {
        $penyewa = $this->load->model('m_master/Penyewa_M063');

        $dt['penyewa'] = $penyewa->ambildata($Nik063);

        if (!$dt['penyewa']) {
            echo "<script>
                alert('Data penyewa tidak ditemukan!');
                window.location.href = '" .
                base_url('Penyewa_C063/index') . "';
            </script>";
            return;
        }

        $info['nm_user'] = explode(
            '@',
            $this->session->userdata('emailuser')
        )[0];

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar', $info);
        $this->load->view('v_master/updateview_063', $dt);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $penyewa = $this->load->model('m_master/Penyewa_M063');

        $Nik063 = $this->load->post('Nik063');
        $data_lama = $penyewa->ambildata($Nik063);

        if (!$data_lama) {
            echo "<script>
                alert('Data penyewa tidak ditemukan!');
                window.location.href = '" .
                base_url('Penyewa_C063/index') . "';
            </script>";
            return;
        }

        $folder = dirname(__DIR__, 2) . '/img/';

        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        $ft_ktp = $data_lama['ft_ktp'];
        $ft_sim_a = $data_lama['ft_sim_a'];

        foreach (['ft_ktp', 'ft_sim_a'] as $kolom) {
            if (
                isset($_FILES[$kolom]) &&
                $_FILES[$kolom]['error'] == 0
            ) {
                $file = $_FILES[$kolom];
                $info = getimagesize($file['tmp_name']);

                $ext = [
                    'image/jpeg' => 'jpg',
                    'image/png' => 'png'
                ];

                if (
                    $info &&
                    isset($ext[$info['mime']]) &&
                    $file['size'] <= 2 * 1024 * 1024
                ) {
                    $nama = $kolom . $Nik063 .
                        '.' . $ext[$info['mime']];

                    if (move_uploaded_file(
                        $file['tmp_name'],
                        $folder . $nama
                    )) {
                        if ($kolom == 'ft_ktp') {
                            $ft_ktp = $nama;
                        } else {
                            $ft_sim_a = $nama;
                        }
                    }
                }
            }
        }

        $sandi = $this->load->post('Sandi063');

        $data = [
            'user_dlg063' => $this->load->post('user_dlg063'),
            'Sandi063' => !empty($sandi)
                ? password_hash($sandi, PASSWORD_DEFAULT)
                : $data_lama['Sandi063'],
            'Nik063' => $Nik063,
            'nm_lngkp063' => $this->load->post('nm_lngkp063'),
            'no_hp063' => $this->load->post('no_hp063'),
            'almt_lngkp063' => $this->load->post('almt_lngkp063'),
            'ft_ktp' => $ft_ktp,
            'ft_sim_a' => $ft_sim_a
        ];

        $simpan = $penyewa->update($data, $Nik063);

        if ($simpan) {
            echo "<script>
                alert('Data penyewa berhasil diperbarui!');
                window.location.href = '" .
                base_url('Penyewa_C063/index') . "';
            </script>";
        } else {
            echo "<script>
                alert('Data penyewa gagal diperbarui!');
                window.history.back();
            </script>";
        }
    }

    public function hapus($Nik063)
    {
        $penyewa = $this->load->model('m_master/Penyewa_M063');
        $data = $penyewa->ambildata($Nik063);

        $hapus = $penyewa->HapusDTPenyewa($Nik063);

        if ($hapus) {
            $folder = dirname(__DIR__, 2) . '/img/';

            if ($data) {
                foreach (['ft_ktp', 'ft_sim_a'] as $kolom) {
                    if (
                        !empty($data[$kolom]) &&
                        file_exists($folder . $data[$kolom])
                    ) {
                        unlink($folder . $data[$kolom]);
                    }
                }
            }

            echo "<script>
                alert('Data penyewa berhasil dihapus!');
                window.location.href = '" .
                base_url('Penyewa_C063/index') . "';
            </script>";
        } else {
            echo "<script>
                alert('Data penyewa gagal dihapus!');
                window.history.back();
            </script>";
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('emailuser');
        $this->session->set_flashdata('pesan', 'Berhasil Logout');
        redirect('login_C/index');
        exit;
    }
}