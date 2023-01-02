<?php

class Global_m extends CI_Model
{

    public function get_data($table)
	{
		$hasil = $this->db->get("$table");
		return $hasil->result();
	}
    function input_data($table,$data){
        $this->db->insert($table,$data);
    }
    

    public function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
        
    }
    public function ubah($where,$table){
        return $this->db->get_where($table,$where);

    }

    public function update_data($where,$data,$table){
        $this->db->where($where,$data);
        $this->db->update($table,$data);
    }

}

?>