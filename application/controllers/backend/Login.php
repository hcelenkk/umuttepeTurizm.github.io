<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
		date_default_timezone_set("Europe/Istanbul");
	}
	function getsecurity($value=''){
		$username = $this->session->userdata('username');
		if ($username) {
			redirect('backend/home');
			$this->session->sess_destroy();
			redirect('backend/login');
		}else{
			redirect('backend/login');
		}
    }
    
	function getUserIP()
    {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }

        return $ip;
        
    }
	public function index(){
		$data['ipaddres'] = $this->getUserIP();
		$this->load->view('backend/login',$data);
	}
    
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('backend/login'));
	}
    
	public function cekuser(){
    $username = strtolower($this->input->post('username'));
    $getUser = $this->db->query('select * from tbl_admin where adminKullaniciAdi = "'.$username.'"')->row();
    $password = $this->input->post('password');

    if (password_verify($password,$getUser->adminSifre)) {
    	// $this->db->where('adminKullaniciAdi',$username);
        // $query = $this->db->get('tbl_admin');
        $sess = array(
            'adminKodu' => $getUser->adminKodu,
            'adminKullaniciAdi' => $getUser->adminKullaniciAdi,
            'adminSifre' => $getUser->adminSifre,
            'adminAdi'     => $getUser->adminAdi,
            'adminFoto'	=> $getUser->adminFoto,
            'adminEmail'   => $getUser->adminEmail,
            'telpon_admin'   => $getUser->telpon_admin,
            'alamat_admin'	=> $getUser->alamat_admin,
            'level'	=> $getUser->adminSeviye
        );
        // die(print_r($sess));
        $this->session->set_userdata($sess);
        redirect('backend/home');
        // }
    }else{
    	$this->session->set_flashdata('message', 'swal("Failed", "Incorrect Login Details!", "error");');
    	redirect('backend/login');
    	}
	}

}

/* End of file Login.php */

/* Location: ./application/controllers/backend/Login.php */