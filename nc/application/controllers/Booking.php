<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("America/New_York");
class Booking extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Booking');
        $this->load->helper('date');
	}

	public function index() {
        $data['userdata'] 		= $this->userdata;
		$data['page'] 			= "Booking List";
		$data['judul'] 			= "Booking List";
        $data['deskripsi'] 		= "";
        $data['dataCustomModul'] = null;
        
        // $data['modal_penegahan'] = show_my_modal('penegahan', 'tambah-custom-modul', $data, 'lg');
        
		$this->template->views('booking/booking', $data);
    }

    public function view_action() {
		// $role = $this->userdata->role ;
		$data['getAllBookingList'] = $this->M_Booking->get_all();
		$this->load->view('booking/list_booking', $data);
    }

    // public function ajax_list()
    // {
    //     $bruto1 = $_POST['bruto1'];
    //     $bruto2 = $_POST['bruto2'];
	// 	$fromdate = $_POST['fromdate'];
    //     $todate = $_POST['todate'];
	// 	$role = $this->userdata->role ;
    //     $data['userdata'] 		= $this->userdata;
    //     $data['dataCustomModul'] =   $this->M_CustomModuls->get_data_by_bruto($bruto1,$bruto2,$fromdate,$todate,$role);
    //     $this->load->view('list_data', $data);
    // }
	
	// public function filter_penegahan()
    // {
    //     $data['userdata'] 		= $this->userdata;
    //     $data['dataCustomModul'] =   $this->M_CustomModuls->get_data_by_penegahan();
    //     $this->load->view('list_data', $data);
    // } 
    
    // public function filter_release()
    // {
    //     $data['userdata'] 		= $this->userdata;
    //     $data['dataCustomModul'] =   $this->M_CustomModuls->get_data_by_release();
    //     $this->load->view('list_data', $data);
    // } 
	
    // public function update() {
        
    //     $id = trim($_POST['id']);
    //     $idCodeco = trim($_POST['codeco']);
    //     if($id==0 || $id == '')
    //     {
    //         $dataCustomModul =$this->M_CustomModuls->get_data_codeco($idCodeco);
    //         $reasonText = " Penegahan";
    //     }
    //     else
    //     {
    //         $dataCustomModul =$this->M_CustomModuls->get_by_id($id);
    //         $reasonText = " Release";
    //     }

    //     $data = array(
    //         'userdata' => $this->userdata,
    //         'reasonText' => $reasonText ,
    //         'dataCustomModul' =>  $dataCustomModul
    //     );
        
	// 	echo show_my_modal('release', 'update-custom-modul', $data, 'lg');
    // }

    // public function update_action() 
    // {
    //     $this->_rulesUpdate();  

    //     if(($this->input->post('id_custom', TRUE))==0)
    //     {
    //         $dataCodeco = $this->M_CustomModuls->get_data_codeco($this->input->post('id_codeco',TRUE));
    //         $data = array(
    //             'id_codeco' =>  $dataCodeco->id_codeco,
    //             'no_bl_awb' => $dataCodeco->no_bl_awb,
    //             'tgl_bl_awb' => $dataCodeco->tgl_bl_awb,
    //             'no_master_bl_awb' =>$dataCodeco->no_master_bl_awb,
    //             'tgl_master_bl_awb' => $dataCodeco->tgl_master_bl_awb,
    //             'no_bc11' => $dataCodeco->no_bc11,
    //             'tgl_bc11' =>  $dataCodeco->tgl_bc11,
    //             'consignee' => $dataCodeco->consignee,
    //             'nm_angkut' =>$dataCodeco->nm_angkut,
    //             'no_voy_flight' =>  $dataCodeco->no_voy_flight,
    //             'bruto' =>  $dataCodeco->bruto,
    //             'alasan_penegahan' =>  $this->input->post('alasan',FALSE),
    //             'nama_petugas_penegahan' => $this->input->post('petugas',FALSE),
    //             'tgl_penegahan' =>  date('Y-m-d H:i:s',now())
    //         );
    //     }else{
    //         $data = array(
    //             'alasan_release' =>  $this->input->post('alasan',FALSE),
    //             'nama_petugas_release' => $this->input->post('petugas',FALSE),
    //             'tgl_release' =>  date('Y-m-d H:i:s',now())
    //         );
    //     }

        
    //     if ($this->form_validation->run() == TRUE) {

    //         if(($this->input->post('id_custom', TRUE))==0)
    //         {
    //             $result = $this->M_CustomModuls->insert($data);
    //             $mode = " Penegahan";
    //         }else
    //         {
    //             $result = $this->M_CustomModuls->update($this->input->post('id_custom', TRUE),$data);
    //             $mode = " Release";
    //         }

    //         if ($result > 0) {
    //             $out['status'] = '';
    //             $out['msg'] = show_succ_msg('Data has been added successfully...', '20px');
    //         } else {
    //             $out['status'] = '';
    //             $out['msg'] = show_err_msg('Failed data added !!', '20px');
    //         }
    //     } else {
    //         $out['status'] = 'form';
    //         $out['msg'] = show_err_msg(validation_errors());
    //     }

    //     echo json_encode($out);
    // }

    // public function create_action() 
    // {
    //     $this->_rulesInsert();  
    //     $data = array(
    //         'id_codeco' => $this->input->post('id_codeco',TRUE),
    //         'no_bl_awb' => $this->input->post('no_hawb',TRUE),
    //         'no_master_bl_awb' => $this->input->post('no_mawb',TRUE),
    //         'no_bc11' => $this->input->post('no_bc11',FALSE),
    //         'consignee' => $this->input->post('consignee',FALSE),
    //         'nm_angkut' => $this->input->post('nama_pengangkut',FALSE),
    //         'no_voy_flight' =>  $this->input->post('no_flight',FALSE),
    //         'alasan_penegahan' =>  $this->input->post('alasan_penegahan',FALSE),
    //         'nama_petugas_penegahan' => $this->input->post('petugas_penegahan',FALSE),
    //         'tgl_penegahan' =>  date('Y-m-d H:i:s',now())
    //       );

    //     if($this->input->post('tgl_mawb',FALSE) != '')
    //     {
    //         $data['tgl_master_bl_awb'] = $this->input->post('tgl_mawb',FALSE);
    //     }

    //     if($this->input->post('tgl_bc11',FALSE) != '')
    //     {
    //         $data['tgl_bc11'] = $this->input->post('tgl_bc11',FALSE);
    //     }

    //     if($this->input->post('tgl_hawb',FALSE) != '')
    //     {
    //         $data['tgl_bl_awb'] = $this->input->post('tgl_hawb',FALSE);
    //     }

    //     if($this->input->post('berat_barang',FALSE) != '')
    //     {
    //         $data['bruto'] = $this->input->post('berat_barang',FALSE); 
    //     }

    //     if ($this->form_validation->run() == TRUE) {
    //         $result = $this->M_CustomModuls->insert($data);

    //         if ($result > 0) {
    //             $out['status'] = '';
    //             $out['msg'] = show_succ_msg('Data has been added successfully...', '20px');
    //         } else {
    //             $out['status'] = '';
    //             $out['msg'] = show_err_msg('Failed data added !!', '20px');
    //         }
    //     } else {
    //         $out['status'] = 'form';
    //         $out['msg'] = show_err_msg(validation_errors());
    //     }

    //     echo json_encode($out);
    // }

    // public function _rulesInsert() 
    // {
    //     $this->form_validation->set_rules('no_mawb', 'No MAWB', 'trim|required');
    //     $this->form_validation->set_rules('no_hawb', 'No HAWB', 'trim|required');
    //     $this->form_validation->set_rules('consignee', 'Consignee', 'trim|required');
    //     $this->form_validation->set_rules('alasan_penegahan', 'Alasan Penegahan', 'trim|required');
    //     $this->form_validation->set_rules('petugas_penegahan', 'Petugas Penegahan', 'trim|required');
    // }

    // public function _rulesUpdate() 
    // {
    //     $this->form_validation->set_rules('alasan', 'Alasan', 'trim|required');
    //     $this->form_validation->set_rules('petugas', 'Petugas', 'trim|required');
    // }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */