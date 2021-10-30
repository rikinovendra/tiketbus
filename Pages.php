<?php

class Pages extends CI_Controller
{
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/home');
		$this->load->view('layout/footer');
	}

	public function about()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/about');
		$this->load->view('layout/footer');
	}

	public function bus()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/bus');
		$this->load->view('layout/footer');
	}

	public function contact()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/contact');
		$this->load->view('layout/footer');
	}

	

}