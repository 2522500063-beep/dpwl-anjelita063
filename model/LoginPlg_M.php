<?php
class LoginPlg_M extends Model
{
    function DataPlg($email)
    {
        $dtadmin = $this->db->prepare("select user_plg063, sandi063, nm_lngkp063
        from penyewa where user_plg063=?");
        $dtadmin->bind_param("s", $email);
        $dtadmin->execute();
        return $dtadmin->get_result()->fetch_assoc();
    }
}