<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("America/New_York");
class Order extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Order');
        $this->load->model('M_Booking');
        $this->load->helper('date');
	}

	public function index() {
        $data['userdata'] 		= $this->userdata;
		$data['page'] 			= "Order List";
		$data['judul'] 			= "Order List";
        $data['deskripsi'] 		= "";
        $data['dataCustomModul'] = null;
        $data['getAllBookingList'] = $this->M_Booking->get_all();
        
        $data['modal_add_order'] = show_my_modal('modals/modal_add_order', 'add-order', $data, 'lg');
        
		$this->template->views('order/order', $data);
    }
    public function view_action() {
		// $role = $this->userdata->role ;
		$data['getAllOrderList'] = $this->M_Order->get_all();
		var_dump($data);
		$this->load->view('order/list_order', $data);
    }

	public function getData($BookingId) {
        
        // $BookingId = trim($_POST['BookingId']);
		
        $data['res'] =$this->M_Order->get_by_id($BookingId);
		
		// $data['res']=$this->payslip_model->fetch_employee_name($id);
    	echo json_encode($data);

        // $data = array(
		// 	'reasonText' => 'asikkk',
        //     'getBookById' =>  $getBookById
        // );
		// return $data;
        // var_dump($data);
		// $data['modal_add_order'] = show_my_modal('modals/modal_add_order', 'add-order', $data, 'lg');
    }

	public function insert_order_action() 
    {
        $this->_rulesInsert();  
        $data = array(
			'OrderId' => $this->input->post('booking',TRUE),
			'BookingId' => $this->input->post('booking',TRUE),
			'CollectionName' => $this->input->post('coll_name',TRUE),
			'CollectionAddress' => $this->input->post('coll_address',TRUE),
			'CollectionContactNo' => $this->input->post('coll_phone',TRUE),
			'DeliveryName' => $this->input->post('deli_name',TRUE),
			'DeliveryAddress' => $this->input->post('deli_address',TRUE),
			'DeliveryContactNo' => $this->input->post('deli_phone',TRUE),
			'ItemDescription' => $this->input->post('inv_items',TRUE),
			'PiecesNo' => $this->input->post('inv_pieces',TRUE),
			'Value' => $this->input->post('inv_value',TRUE),
			'TotalPackages' => $this->input->post('inv_tot_packages',TRUE),
			'Weigth' => $this->input->post('inv_weigth',TRUE),
			'Email' => $this->input->post('inv_email',TRUE),
			'AmountPayble' => $this->input->post('inv_amount',TRUE),
			'Status' => 'On Process',
			'created_user' => 'yusep'
          );
		//   var_dump($data);
        // if($this->input->post('tgl_mawb',FALSE) != '')
        // {
        //     $data['tgl_master_bl_awb'] = $this->input->post('tgl_mawb',FALSE);
        // }

        // if($this->input->post('tgl_bc11',FALSE) != '')
        // {
        //     $data['tgl_bc11'] = $this->input->post('tgl_bc11',FALSE);
        // }

        // if($this->input->post('tgl_hawb',FALSE) != '')
        // {
        //     $data['tgl_bl_awb'] = $this->input->post('tgl_hawb',FALSE);
        // }

        // if($this->input->post('berat_barang',FALSE) != '')
        // {
        //     $data['bruto'] = $this->input->post('berat_barang',FALSE); 
        // }

        if ($this->form_validation->run() == TRUE) {
            $result = $this->M_Order->insert($data);

            if ($result > 0) {
                $out['status'] = '';
                $out['msg'] = show_succ_msg('Data has been added successfully...', '20px');
            } else {
                $out['status'] = '';
                $out['msg'] = show_err_msg('Failed data added !!', '20px');
            }
        } else {
            $out['status'] = 'form';
            $out['msg'] = show_err_msg(validation_errors());
        }

        echo json_encode($out);
    }

    public function _rulesInsert() 
    {
		$this->form_validation->set_rules('booking', 'Booking No', 'trim|required');
		$this->form_validation->set_rules('coll_name', 'Collection Name', 'trim|required');
		$this->form_validation->set_rules('coll_address', 'Collection Address', 'trim|required');
		$this->form_validation->set_rules('coll_phone', 'Collection Phone Number', 'trim|required');
		$this->form_validation->set_rules('deli_name', 'Delivery Name', 'trim|required');
		$this->form_validation->set_rules('deli_address', 'Delivery Address', 'trim|required');
		$this->form_validation->set_rules('deli_phone', 'Delivery Phone Number', 'trim|required');
		$this->form_validation->set_rules('inv_items', 'Item Description', 'trim|required');
		$this->form_validation->set_rules('inv_pieces', 'No. Of Pieces', 'trim|required');
		$this->form_validation->set_rules('inv_value', 'Value', 'trim|required');
		$this->form_validation->set_rules('inv_tot_packages', 'Total Packages', 'trim|required');
		$this->form_validation->set_rules('inv_weigth', 'Weight (kg)', 'trim|required');
		$this->form_validation->set_rules('inv_email', 'Email', 'trim|required');
		$this->form_validation->set_rules('inv_amount', 'Amount Payable', 'trim|required');
		
        
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */