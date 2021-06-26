<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('M_CustomModuls');
    }
    
    public function index(){
        $data = array(
            'page' => 'menu',
            'judul' => 'Data Menu',
            'deskripsi' => 'Manage Data Menu'
        );

        $this->load->view('welcome', $data);
    }

    public function search()
    {
        $no = $this->input->post('nomor',TRUE);
        $result = $this->M_CustomModuls->check_custom_modul($no);

	//Start CR 20191105
        if ($result != null) {
            $sppb = $result->no_sppb;
            $penegahan = $result->nama_petugas_penegahan;
            $release = $result->nama_petugas_release;
            if($sppb == null )
            {
                $out['status'] = 'BELUM SPPB';
                $out['StatusText'] = "BELUM SPPB!";
            }
            else if(($penegahan != null && $release != null) || ( $penegahan == null && $release == null))
            {
                $out['status'] = 'RELEASE';
                $out['hawb'] = $result->no_bl_awb;
                $out['tglSPPB'] = $result->tgl_sppb;
                $out['sppb'] = $result->no_sppb;
				$out['pib'] = $result->no_pib;
            }else if($penegahan != null && $release == null )
            {
                $out['status'] = 'PENEGAHAN';
                $out['StatusText'] = "BARANG PENEGAHAN!";
            }

        } else {
            $out['status'] = 'Kosong';
        }
	//End CR 20191105

        echo json_encode($out);
    }
        
}
