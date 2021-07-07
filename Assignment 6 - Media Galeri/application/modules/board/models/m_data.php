<?php
defined('BASEPATH') or exit('No direct script access allowed');
class m_data extends CI_Model
{
    // Produk //
    public function tampil_produk()
    {
        return $this->db->get('tbl_produk');
    }
    public function tambah_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_id_produk($id)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.kategori=kategori.id', 'left');
        $this->db->where('id_produk', $id);
        return $this->db->get()->row();
    }
    public function edit_id_kategori($id)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'produk.kategori=kategori.id', 'left');
        $this->db->where('id_produk', $id);
        return $this->db->get();
    }

    // User //
    public function tampil_user()
    {
        return $this->db->get('users');
    }
    public function daftar($data)
    {
        $this->db->insert('users', $data);
    }
    public function get_data_edit($id)
    {
        $this->db->where('id_user', $id);
        $query = $this->db->get('users');
        return $query->result();
    }
    public function update_user($data, $id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->update('users', $data);
    }
    public function delete_user($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('users');
    }

    // Pelanggan //
    public function tampil_pelanggan()
    {
        return $this->db->get('tbl_pelanggan');
    }
    public function tampil_order()
    {
        return $this->db->get('tbl_order');
    }
    public function tampil_kategori()
    {
        return $this->db->get('kategori');
    }
    public function tampil_do()
    {
        return $this->db->get('tbl_detail_order');
    }
}
