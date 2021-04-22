<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class m_keranjang extends CI_Model
{
    public function get_produk_all()
    {
        $query = $this->db->get('tbl_produk');
        return $query->result_array();
    }
    public function get_produk_kategori($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_produk.kategori=tbl_kategori.id', 'left');
        $this->db->where('id', $id);
        return $this->db->get()->result_array();
    }
    public function get_kat_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'tbl_produk.kategori=tbl_kategori.id', 'left');
        $this->db->where('kategori', $id);
        return $this->db->get()->result_array();
    }
    public function get_detail($detail)
    {
        return $this->db->get_where('tbl_produk', ['id_produk' => $detail])->row_array();
    }
    public function get_kategori_all()
    {
        $query = $this->db->get('tbl_kategori');
        return $query->result_array();
    }
    public function get_produk_id($id)
    {
        $this->db->select('tbl_produk.*,nama_kategori');
        $this->db->from('tbl_produk');
        $this->db->join('tbl_kategori', 'kategori=tbl_kategori.id', 'left');
        $this->db->where('id_produk', $id);
        return $this->db->get();
    }
    public function tambah_pelanggan($data)
    {
        $this->db->insert('tbl_pelanggan', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function tambah_order($data)
    {
        $this->db->insert('tbl_order', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function tambah_detail_order($data)
    {
        $this->db->insert('tbl_detail_order', $data);
    }
}
