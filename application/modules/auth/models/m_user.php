<?php
defined('BASEPATH') or exit('No direct script access allowed');
class m_user extends CI_Model
{
    function tampil_user()
    {
        return $this->db->get('users');
    }
}
