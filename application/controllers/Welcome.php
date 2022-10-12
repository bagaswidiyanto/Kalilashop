<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{

		$this->data['website'] = $this->db->get('tbl_website')->row();
		$this->data['sosmed'] = $this->db->get('tbl_sosmed')->result();
		$this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		$this->data['populer'] = $this->db->get('tbl_populer')->result();
		$this->data['set_hijab'] = $this->db->get('tbl_set_hijab')->result();
		$this->data['katalog'] = $this->db->get('tbl_katalog')->result();
		$this->data['g1'] = $this->db->get('tbl_gallery1')->result();
		$this->data['g2'] = $this->db->get('tbl_gallery2')->result();
		$this->data['g3'] = $this->db->get('tbl_gallery3')->result();


		$this->web = 'content/v_home';
		$this->layout();
	}
}