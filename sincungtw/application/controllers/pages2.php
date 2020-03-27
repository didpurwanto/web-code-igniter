<?php

class Pages extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
		$this->load->model('momodel','modelp');	
	}
	
	function index(){	
		redirect('pages/home');
	}
	
	// MENUS   -----------------------------
	function home(){	
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	
	function contact(){	
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
	
	function profile(){	
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
	}
	
	function liputan(){	
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('liputan');
		$this->load->view('footer');
	}
	
	function news(){	
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('news');
	}
	
	function ask_consultation(){	
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('ask_consultation');
		$this->load->view('footer');
	}
	
	function apply_certificate(){	
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('apply_certificate');
		$this->load->view('footer');
	}
	
	
	
	// NOTIFICATIONS   -----------------------------
	function success(){	
		$this->load->view('top');
		$this->load->view('success');
	}
	
	
	
	// NEWS   -----------------------------
	function news3()
	{
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('news3');
		$this->load->view('footer');
	}
	
	function news5()
	{
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('news5');
		$this->load->view('footer');
	}
	
	function news6()
	{
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('news6');
		$this->load->view('footer');
	}
	
	function news_cosmetic()
	{
		$this->load->view('top');
		$this->load->view('header');
		$this->load->view('news-cosmetic');
		$this->load->view('footer');
	}
	
	
	
	
	
	// MODEL ------------------------
	function insert_consultation(){	
		$company_cname = $this->input->post('company_cname');
		$company_ename = $this->input->post('company_ename');
		$ceo = $this->input->post('ceo');
		$uniform_no = $this->input->post('uniform_no');
		$address = $this->input->post('address');
		$fax = $this->input->post('fax');
		$website = $this->input->post('website');
		
		$this->modelp->insert_consultation($company_cname, $company_ename, $ceo, $uniform_no, $address, $fax, $website);		
			
		redirect('pages/success');
	}
	
	function insert_tutorial(){	
		$company_cname = $this->input->post('company_cname');
		$company_ename = $this->input->post('company_ename');
		$uniform_no = $this->input->post('uniform_no');
		$zip = $this->input->post('zip');
		$address = $this->input->post('address');
		$telpon = $this->input->post('telpon');
		$participant1 = $this->input->post('participant1');
		$gender1 = $this->input->post('gender1');
		$participant2 = $this->input->post('participant2');
		$gender2 = $this->input->post('gender2');
		$email = $this->input->post('email');
		$plan = $this->input->post('plan');
		$enrollment = $this->input->post('enrollment');
		$dining = $this->input->post('dining');
		$this->modelp->insert_tutorial($company_cname, $company_ename, $uniform_no, $zip, $address, $telpon, $participant1, $gender1, $participant2, $gender2, $email, $plan, $enrollment, $dining);		
			
		redirect('pages/success');
	}
	
	
	
	
	
}