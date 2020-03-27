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
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('slider'); // content
		$this->load->view('news_data'); // content
		//$this->load->view('index'); // content
		//$this->load->view('important'); // content
		$this->load->view('companies'); // content
		//$this->load->view('youtube'); // content
		//$this->load->view('mui'); // content
		$this->load->view('affiliation'); // content
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function home1(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('index'); // content
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function mui1(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('mui');
		$this->load->view('mui1_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function mui3(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('mui3_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function mui4(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('mui4_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function media1(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('media1_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function media2(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('media2_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}


	function cerol1(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('cerol1_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function cerol2(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('cerol2_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function cerol5(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('cerol5_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function press4(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('press4_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function press5(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('press5_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function link1(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('link1_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function link3(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('link3_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	
	// =================== BERITA

	function berita28(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('berita28');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function berita281(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('berita281_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news_31_7_2018(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news_31_7_2018');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function berita251(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('berita251_content');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function berita01(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('berita01');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function berita25(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('berita25');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function berita10(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('berita10');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function berita11(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('berita11');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function profile(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('profile');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function liputan(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('liputan');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function ask_consultation(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('ask_consultation');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function apply_certificate(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('apply_certificate');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function certificate(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('certificate');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function regulation(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('regulation');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function bodies(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('bodies');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	
	
	
	
	// NOTIFICATIONS   -----------------------------
	function success(){	
		$this->load->view('css');
		$this->load->view('success');
	}
	
	
	
	// NEWS   -----------------------------
	function news3()
	{
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news3');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news5()
	{
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news5');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news6()
	{
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news6');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news_cosmetic()
	{
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news-cosmetic');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news_ultah()
	{
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news-ultah');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news_seminar()
	{
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news-seminar');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news_indweek(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news-indweek');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news_audit(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news_audit');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news_idweek(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news_idweek');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news_yunlin(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news_yunlin');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function halal_expo(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('halal_expo');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	
	function news_rm(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news_rm');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function news_pengumuman(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news_pengumuman');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function news_promo(){	
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('news_promo');
		$this->load->view('footer');
		$this->load->view('javascript');
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