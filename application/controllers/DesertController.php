<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DesertController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['title']='Dessertz | Home';
        $data['view_page']='home';
        $this->load->view('theme',$data);
		
	}
	public function about()
	{
		$data['title']='Dessertz | About-Us';
        $data['view_page']='about';
        $this->load->view('theme',$data);
		
	}
	public function contact()
	{
		$data['title']='Dessertz | Contact-Us';
        $data['view_page']='contact';
        $this->load->view('theme',$data);
		
	}
	public function shop()
	{
		$data['title']='Dessertz | Our-Shop';
        $data['view_page']='shop';
        $this->load->view('theme',$data);
		
	}
	public function cart()
	{
		$data['title']='Dessertz | Your-cart';
        $data['view_page']='cart';
        $this->load->view('theme',$data);
		
	}
	public function gallery()
	{
		$data['title']='Dessertz | Gallery';
        $data['view_page']='gallery';
        $this->load->view('theme',$data);
		
	}
	public function blog()
	{
		$data['title']='Dessertz | Blog';
        $data['view_page']='blog';
        $this->load->view('theme',$data);
		
	}
	public function checkout()
	{
		$data['title']='Dessertz | Checkout';
        $data['view_page']='checkout';
        $this->load->view('theme',$data);
		
	}
	public function category()
	{
		$data['title']='Dessertz | Category';
        $data['view_page']='category';
        $this->load->view('theme',$data);
		
	}
	public function myaccount()
	{
		$data['title']='Dessertz | My Account';
        $data['view_page']='my_account';
        $this->load->view('theme',$data);
		
	}
}
