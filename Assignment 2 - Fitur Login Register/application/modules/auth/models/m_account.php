<?php
defined('BASEPATH') or exit('No direct script access allowed');
class m_account extends CI_Model
{
    function daftar($data)
    {
        $this->db->insert('users', $data);
    }
}
