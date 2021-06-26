<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends AUTH_Controller {
    public function __construct() {
		parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_user_group');
        $this->load->model('M_udc');
        $this->load->helper('date');
    }

    public function index(){
        $user = $this->M_user->get_all();
        $userGroup = $this->M_user_group->get_all();
        $data = array(
            'userdata' => $this->userdata,
            'dataUser'  => $user,
            'dataGroup'  => $userGroup,
            'page' => 'user',
            'judul' => 'Data User',
            'deskripsi' => 'Manage Data User'          
        );

        $data['modal_tambah_user'] = show_my_modal('user/modal_user_add', 'tambah-user', $data); 
        $this->template->views('user/home',$data);
    }

    public function view_action() {
		$data['dataUser'] = $this->M_user->get_all();
		$this->load->view('user/list_data', $data);
    }

    public function create_action() 
    {
        $this->_rules();  
        $data = array(
            'full_name' => $this->input->post('name',TRUE),
            'username' => $this->input->post('username',FALSE),
            'email' => $this->input->post('email',FALSE),
            'password' => md5($this->input->post('password',FALSE)),
            'group_id' => $this->input->post('group_id',FALSE),
            'foto' => 'default.jpg',
            'creator' => $this->userdata->username,
            'created_date' => date('Y-m-d H:i:s',now()),
            'last_modified_by' => $this->userdata->username,
            'last_modified_date' => date('Y-m-d H:i:s',now()),
          );
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_user->insert($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data User Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data User Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function update_action() 
    {
        $this->_rules();  
        $data = array(
            'full_name' => $this->input->post('name',TRUE),
            'username' => $this->input->post('username',FALSE),
            'email' => $this->input->post('email',FALSE),
            'creator' => $this->userdata->username,
            'created_date' => date('Y-m-d H:i:s',now()),
            'last_modified_by' => $this->userdata->username,
            'last_modified_date' => date('Y-m-d H:i:s',now()),
          );
        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_user->update($data,$this->input->post('id', TRUE));

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data User Berhasil ditambahkan', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Data User Gagal ditambahkan', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function update() {
        
        $id = trim($_POST['id']);
        $idCodeco = trim($_POST['codeco']);
        $user = $this->M_user->select($id);
        $userGroup = $this->M_user_group->get_all();
        $data = array(
            'userdata' => $this->userdata,
            'dataUser'  => $user,
            'dataGroup'  => $userGroup
        );
        
		echo show_my_modal('user/modal_user_update', 'update-user', $data);
    }
    
    public function delete() {
		$id = $_POST['id'];
		$result = $this->M_user->delete($id);
	
		if ($result > 0) {
			echo show_succ_msg('Data User Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data User Gagal dihapus', '20px');
		}
    }
    
    public function _rules() 
    {
        $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]');
        if($this->input->post('id', TRUE) == null)
        {
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    }
}