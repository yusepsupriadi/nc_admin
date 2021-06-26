<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Order extends CI_Model
{
    
    public $table = 'orders';
    public $Id = 'Id';
    public $order = 'DESC';
    public $BookingId = 'BookingId';

    function __construct()
    {
        parent::__construct();
    }
    // get all
    function get_all()
    {
        $this->db->order_by($this->Id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_by_id($BookingId)
    {
        // $this->db->where($this->BookingId, $BookingId);
        // return $this->db->get($this->table)->result();
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('BookingId',$BookingId);
        $res=$this->db->get();
        return $res->result();
    }

    function insert($data)
    {
        return $this->db->insert('orders', $data);
        // echo $this->db->_error_message();
        // error_log("data in model AFTER INSERT: ");
        // return $result;
    }
}
    