<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	
	public $table = 'user';
    public $id = 'user_id';
    public $order = 'DESC';
	
	public function update($data, $id) {
		$this->db->where($this->id, $id);
		$this->db->update($this->table, $data);

		return $this->db->affected_rows();
	}

	public function select($id = '') {
		if ($id != '') {
			$this->db->where($this->id, $id);
		}

		$data = $this->db->get($this->table);

		return $data->row();
	}

	function insert($data)
    {	
       return $this->db->insert($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->delete($this->table);
	}
	
	// get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */