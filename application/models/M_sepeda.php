<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_sepeda extends CI_Model
{
    public function get_all_type()
    {
        $this->db->select('*');
        $this->db->from('tbl_type');
        $this->db->order_by('id_type', 'desc');
        return $this->db->get()->result();
    }

    public function tambah_type($data)
    {
        $this->db->insert('tbl_type', $data);
    }

    public function ubah_type($id_type, $data)
    {
        $this->db->where('id_type', $id_type);
        $this->db->update('tbl_type', $data);
    }
    public function hapus_type($id_type, $data)
    {
        $this->db->where('id_type', $id_type);
        $this->db->delete('tbl_type', $data);
    }

    public function get_all_type_merek()
    {
        $this->db->select('*');
        $this->db->from('tbl_merek');
        $this->db->order_by('id_merek', 'desc');
        return $this->db->get()->result();
    }

    public function tambah_merek($data)
    {
        $this->db->insert('tbl_merek', $data);
    }

    public function ubah_merek($id_merek, $data)
    {
        $this->db->where('id_merek', $id_merek);
        $this->db->update('tbl_merek', $data);
    }

    public function hapus_merek($id_merek, $data)
    {
        $this->db->where('id_merek', $id_merek);
        $this->db->delete('tbl_merek', $data);
    }

    public function get_all_sepeda()
    {
        $this->db->select('*');
        $this->db->from('tbl_sepeda');
        $this->db->join('tbl_type', 'tbl_type.id_type = tbl_sepeda.id_type', 'left');
        $this->db->join('tbl_merek', 'tbl_merek.id_merek = tbl_sepeda.id_merek', 'left');
        $this->db->order_by('tbl_sepeda.id_sepeda', 'desc');
        return $this->db->get()->result();
    }

    public function getLimitsepeda()
    {
        $this->db->select('*');
        $this->db->from('tbl_sepeda');
        $this->db->join('tbl_type', 'tbl_type.id_type = tbl_sepeda.id_type', 'left');
        $this->db->join('tbl_merek', 'tbl_merek.id_merek = tbl_sepeda.id_merek', 'left');
        $this->db->limit('9');
        $this->db->order_by('tbl_sepeda.id_sepeda', 'desc');
        return $this->db->get()->result();
    }

    public function detail_sepeda($slug)
    {
        $this->db->select('*');
        $this->db->from('tbl_sepeda');
        $this->db->join('tbl_type', 'tbl_type.id_type = tbl_sepeda.id_type', 'left');
        $this->db->join('tbl_merek', 'tbl_merek.id_merek = tbl_sepeda.id_merek', 'left');
        $this->db->where('slug', $slug);
        return $this->db->get()->row();
    }


    public function detail_kategori($kode_merek)
    {
        $this->db->select('*');
        $this->db->from('tbl_sepeda');
        $this->db->join('tbl_type', 'tbl_type.id_type = tbl_sepeda.id_type', 'left');
        $this->db->join('tbl_merek', 'tbl_merek.id_merek = tbl_sepeda.id_merek', 'left');
        $this->db->where('kode_merek', $kode_merek);
        return $this->db->get()->row();
    }

    public function get_all_sepeda_kategori($kode_merek)
    {
        $this->db->select('*');
        $this->db->from('tbl_sepeda');
        $this->db->join('tbl_type', 'tbl_type.id_type = tbl_sepeda.id_type', 'left');
        $this->db->join('tbl_merek', 'tbl_merek.id_merek = tbl_sepeda.id_merek', 'left');
        $this->db->where('tbl_merek.kode_merek', $kode_merek);
        return $this->db->get()->result();
    }

    public function tambah_product($data)
    {
        $this->db->insert('tbl_sepeda', $data);
    }

    public function edit_product($slug, $data)
    {
        $this->db->where('slug', $slug);
        $this->db->update('tbl_sepeda', $data);
    }

    public function deletesepeda($id_sepeda, $data)
    {
        $this->db->where('id_sepeda', $id_sepeda);
        $this->db->delete('tbl_sepeda', $data);
    }
}
