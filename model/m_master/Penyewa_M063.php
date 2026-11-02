<?php
class Penyewa_M063 extends Model
{
    function datapenyewa()
    {
        $dtpenyewa = $this->db->prepare("
            SELECT
                user_plg AS user_dlg063,
                sandi AS Sandi063,
                nik AS Nik063,
                nm_lngkp AS nm_lngkp063,
                no_hp AS no_hp063,
                almt_lngkp AS almt_lngkp063,
                ft_ktp,
                ft_sim_a
            FROM penyewa
        ");

        $dtpenyewa->execute();

        return $dtpenyewa->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function simpan($data)
    {
        $sql = $this->db->prepare("
            INSERT INTO penyewa
            (user_plg, sandi, nik, nm_lngkp,
            no_hp, almt_lngkp, ft_ktp, ft_sim_a)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ");

        $sql->bind_param(
            "ssssssss",
            $data['user_dlg063'],
            $data['Sandi063'],
            $data['Nik063'],
            $data['nm_lngkp063'],
            $data['no_hp063'],
            $data['almt_lngkp063'],
            $data['ft_ktp'],
            $data['ft_sim_a']
        );

        $hasil = $sql->execute();
        $sql->close();

        return $hasil;
    }

    public function ambildata($nik)
    {
        $sql = $this->db->prepare("
            SELECT
                user_plg AS user_dlg063,
                sandi AS Sandi063,
                nik AS Nik063,
                nm_lngkp AS nm_lngkp063,
                no_hp AS no_hp063,
                almt_lngkp AS almt_lngkp063,
                ft_ktp,
                ft_sim_a
            FROM penyewa
            WHERE nik = ?
        ");

        $sql->bind_param("s", $nik);
        $sql->execute();

        $hasil = $sql->get_result()->fetch_assoc();
        $sql->close();

        return $hasil;
    }

    public function update($data, $nik)
    {
        $sql = $this->db->prepare("
            UPDATE penyewa SET
                user_plg = ?,
                sandi = ?,
                nm_lngkp = ?,
                no_hp = ?,
                almt_lngkp = ?,
                ft_ktp = ?,
                ft_sim_a = ?
            WHERE nik = ?
        ");

        $sql->bind_param(
            "ssssssss",
            $data['user_dlg063'],
            $data['Sandi063'],
            $data['nm_lngkp063'],
            $data['no_hp063'],
            $data['almt_lngkp063'],
            $data['ft_ktp'],
            $data['ft_sim_a'],
            $nik
        );

        $hasil = $sql->execute();
        $sql->close();

        return $hasil;
    }

    public function HapusDTPenyewa($nik)
    {
        $sql = $this->db->prepare("
            DELETE FROM penyewa WHERE nik = ?
        ");

        $sql->bind_param("s", $nik);

        $hasil = $sql->execute();
        $sql->close();

        return $hasil;
    }
}