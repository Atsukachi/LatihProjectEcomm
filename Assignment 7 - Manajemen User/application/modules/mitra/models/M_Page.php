<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_Page extends CI_Model
{
    public function getAllData($id){
        return $this->db->get('pelanggan');
    }

    public function get_keahlian(){
        return $this->db->get('keahlian')->result_array();
    }

    public function Add_mitra($data, $table){
        $this->db->insert($table, $data);
    }

    public function edit_jenis_pelanggan($id_pelanggan, $data1, $table){
        $this->db->where($id_pelanggan);
        $this->db->update($table, $data1);
    }

    public function count_all_data()
    {
        return $this->db->get('keahlian')->num_rows();
    }

    public function tampil_mitra($limit,$start){
        return $this->db->get('keahlian', $limit, $start)->result_array();
    }

    public function detail_mitra($detail){
        $this->db->from('keahlian');
        $this->db->where('id_keahlian', $detail);
        return $this->db->get()->row_array();

    }

    public function get_keahlian_all(){
        return $this->db->get('keahlian')->result_array();
    }

    public function get_keahlian_id($id){
        $this->db->select('*');
        $this->db->from('keahlian');
        $this->db->where('id_keahlian', $id);
        return $this->db->get()->result_array();

    }


    public function find($search)
    {
        $this->db->select('*');
        $this->db->from('mitra');
        $this->db->join('keahlian', 'mitra.id_keahlian=keahlian.id_keahlian', 'left');
        if ($search != '') {
            $this->db->like('keahlian.daftar_keahlian', $search);
        }

        return $this->db->get()->result_array();
    }
}
