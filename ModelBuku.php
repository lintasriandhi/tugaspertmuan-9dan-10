<?php
defined('BASEPATH') or exit('no direct script access allowed');
class ModelBuku extends CI_model
{
    //manajemen
    public function getBuku()
    {
        return $this-> db ->get('buku');
    }
    public function bukuWhere($where)
    {
        return $this-> db ->get_where('buku', $where);
    }
    public function simpanWhere($data = null)
    {
        return $this-> db ->get_where('buku', $data);
    }
    public function updateBuku($data =null ,$where = null)
    {
        $this -> db ->update('buku',$data,$where)

    }
    public function hapusbBuku($where =null)
    {
        $this->db->delete('buku', $where *);
    }
    public function  total($field , $whene)
    {
        $this ->db->select_sum($field); 
        if (!empyi($where)&&count($where)>0)
        $this->db->where ($where)
        $this->db->from('buku')
        return $this-> db ->get()->row($field);
    }
     
    //manajemen katagori
    public function getKatagori()
    {
        return $this->db ->get('katagori');
    }
    public function katagoriWhere($where)
    {
        return $this -> db -> get_where('katagori',$where );
    }
    public function simpanKatagori($data = null)
    {
        return $this -> db -> insert('katagori',$data );
    }
    public function hapusKatagori($where = null)
    {
        return $this -> db -> delete('katagori',$where );
    }
    public function hapusKatagori($where = null)
    {
        return $this -> db -> delete('katagori',$where );
    }
    public function updateKategori($where = null, $data = null)     { 
        $this->db->update('kategori', $data, $where); 
    }     //join 
    public function joinKategoriBuku($where) 
    { 
        $this->db->select('buku.id_kategori,kategori.kategori'); 
        $this->db->from('buku'); 
        $this->db->join('kategori','kategori.id buku.id_kategori'); 
        $this->db->where($where);         return $this->db->get(); 
    } 
} 



