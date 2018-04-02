<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
     * map to /index.php/welcome/
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }
}
class Helloworld extends CI_Controller
{
    public function index(){
        echo "Index dari Controller Helloworld";
    }
    public function fungsi(){
        echo "Function fungsi dari Controller Helloworld";
    }
    public function parameters($nama){
        echo "SuratMasuk";
        echo "SuratKeluar";
    }
}