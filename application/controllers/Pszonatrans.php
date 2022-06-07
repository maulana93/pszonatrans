<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pszonatrans extends CI_Controller {

	public function index()
	{
		$data['menu'] = 'home';
		$this->load->view('index',$data);
	}
	public function about_us()
	{
		$data['menu'] = 'about';
		$this->load->view('about_us',$data);
	}
	public function iso_tank()
	{
		$data['menu'] = 'service';
		$this->load->view('iso_tank',$data);
	}
	public function flexi_tank()
	{
		$data['menu'] = 'service';
		$this->load->view('flexi_tank',$data);
	}
	public function trucking()
	{
		$data['menu'] = 'service';
		$this->load->view('trucking',$data);
	}
	public function contact()
	{
		$data['menu'] = 'contact';
		$this->load->view('contact',$data);
	}
}
