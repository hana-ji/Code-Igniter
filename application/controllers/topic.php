<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    function index(){
//        직접적으로 적지 않고 views 폴더에 있는 부분을 가져올거임
        $this->load->view('head');
        $this->load->view('topic');
        $this->load->view('footer');
    }
    function get($id){
        $this->load->view('head');
        $data = array('id'=>$id);
        $this->load->view('main', $data);
        $this->load->view('footer');
    }
}
?>
