<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getkod_model extends CI_Model {

     function get_kodjad(){
        $q = $this->db->query("SELECT MAX(RIGHT(saatKodu,3)) AS kd_max FROM tbl_saat");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "J".$kd;
    }
    function get_kodtuj(){
        $q = $this->db->query("SELECT MAX(RIGHT(sehirKodu,3)) AS kd_max FROM tbl_sehir");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "TJ".$kd;
    }
    function get_kodbus(){
        $q = $this->db->query("SELECT MAX(RIGHT(otobusKodu,3)) AS kd_max FROM tbl_otobus");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "B".$kd;
    }
    function get_kodtmporder(){
        $q = $this->db->query("SELECT MAX(RIGHT(rezervasyonKodu,3)) AS kd_max FROM tbl_rezervasyon");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%05s", $tmp);
            }
        }else{
            $kd = "001";
        }
        return "ORD".$kd;
    }
    function get_kodpel(){
        $q = $this->db->query("SELECT MAX(RIGHT(musteriKodu,3)) AS kd_max FROM tbl_musteri");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "00001";
        }
        return "CA".$kd;
    }
    function get_kodkon(){
        $q = $this->db->query("SELECT MAX(RIGHT(dogrulamaKodu,3)) AS kd_max FROM tbl_dogrulama");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "00001";
        }
        return "KF".$kd;
    } 

    function get_kodadm(){
        $q = $this->db->query("SELECT MAX(RIGHT(adminKodu,3)) AS kd_max FROM tbl_admin");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "00001";
        }
        return "ADM".$kd;
    }

    function get_kodbank(){
        $q = $this->db->query("SELECT MAX(RIGHT(bankaKodu,3)) AS kd_max FROM tbl_banka");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "00001";
        }
        return "BNK".$kd;
    }
}

/* End of file getkod_model.php */
/* Location: ./application/models/getkod_model.php */