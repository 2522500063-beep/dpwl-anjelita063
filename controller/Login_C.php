<?php
class Login_C extends Controller
{
    public function index()
    {
        $this->session->unset_userdata('userplg');
        $sipsn['psn'] = $this->session->set_flashdata('pesan');
        $this->load->view('login', $sipsn);
    }

    public function penyewa()
    {
        $this->session->set_userdata('userplg', 'penyewa');
        $sipsn['psn'] = $this->session->set_flashdata('pesan');
        $this->load->view('login', $sipsn);
    }

    public function CekLogin()
    {
        $email = $this->load->post('email');
        $password = $this->load->post('pass');

        if (!empty($this->session->userdata('userplg'))) {

            $cekdata = $this->load->model('LoginPlg_M');
            $datauser = $cekdata->DataPlg($email);

            if ($datauser && $password === $datauser['sandi063']) {
                $this->session->set_userdata('EmailPlg', $email);
                $this->session->set_userdata('NmPlg', $datauser['nm_lngkp063']);
                $this->session->set_flashdata('pesan', 'Login berhasil...');
                redirect('Shopping/index');
            } else {
                $this->session->set_flashdata('pesan', 'Gagal: Silahkan cek user, password Anda...');
                redirect('Login_C/penyewa');
            }

        } else {

            $cekdata = $this->load->model('Login_M');
            $datauser = $cekdata->ambildata($email);

            if ($datauser && $password === $datauser['password']) {
                $this->session->set_userdata('emailuser', $email);
                $this->session->set_flashdata('pesan', 'Login berhasil...');
                redirect('Admin_C/index');
            } else {
                $this->session->set_flashdata('pesan', 'Gagal: Silahkan cek user, password Anda...');
                redirect('Login_C/index');
            }
        }

        exit();
    }

    public function keluar()
    {
        $this->session->unset_userdata('userplg');
        $this->session->unset_userdata('EmailPlg');
        $this->session->unset_userdata('NmPlg');
        $this->session->set_flashdata('pesan', 'Berhasil Logout');
        redirect('Shopping/index');
        exit;
    }
}