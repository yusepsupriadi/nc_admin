<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends AUTH_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('M_menu');
    }
    
    public function index(){
        $menu = $this->M_menu->get_all();
        $data = array(
            'userdata' => $this->userdata,
            'dataMenu'  => $menu,
            'page' => 'menu',
            'judul' => 'Data Menu',
            'deskripsi' => 'Manage Data Menu'
            
        );

        $data['modal_tambah_menu'] = show_my_modal('menu/modal_menu_add', 'tambah-menu', $data);
        
        $this->template->views('menu/home',$data);
    }

    public function view_action() {
		$data['dataMenu'] = $this->M_menu->get_all();
		$this->load->view('menu/list_data', $data);
    }

    public function update() {
        
        $id = trim($_POST['id']);
        $menu = $this->M_menu->get_by_id($id);
        $parent = $this->M_menu->get_all();
        $data = array(
            'userdata' => $this->userdata,
            'dataMenu'  => $menu,
            'dataParent' => $parent     
        );
        
		echo show_my_modal('menu/modal_menu_update', 'update-menu', $data);
    }
    
    
    public function create_action() 
    {
        $this->_rules();  
        $data 	= $this->input->post();
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_menu->insert($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data Menu Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data Menu Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function delete() {
		$id = $_POST['id'];
		$result = $this->M_menu->delete($id);
	
		if ($result > 0) {
			echo show_succ_msg('Data Menu Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Menu Gagal dihapus', '20px');
		}
	}

    public function update_action() {

        $this->_rules();
		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
            $result = $this->M_menu->update($this->input->post('id', TRUE),$data);
            
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Menu Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Menu Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
    }
    
    public function _rules() 
    {
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('link', 'link', 'trim|required');
        $this->form_validation->set_rules('icon', 'icon', 'trim|required');
        $this->form_validation->set_rules('is_active', 'is active', 'trim|required');
        $this->form_validation->set_rules('is_parent', 'is parent', 'trim|required');
    }
}