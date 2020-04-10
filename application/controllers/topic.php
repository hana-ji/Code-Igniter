<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
//    토픽이 로드될때 자연스럽게 생성자가 호출되서 사용됨
    function __construct(){
        parent::__construct();
//        주석부분 중복되는데 여기는 무조건 로드 되기때문에 중복해서 안 적어도 알아서 로드됨
        $this->load->database();
        $this->load->model('topic_model');
    }

    function index(){
//        $this->load->database();
//        $this->load->model('topic_model');
        $topics = $this->topic_model->gets();
        $this->load->view('head');
//       main부분이 공통이라 따로 파일 만들고 그 파일에 정보 받음
        $this->load->view('topic_list', array('topics'=>$topics));
        $this->load->view('main');
        $this->load->view('footer');
    }
    function get($id){
//        $this->load->database();
//        $this->load->model('topic_model');
        $topics = $this->topic_model->gets();
        $topic = $this->topic_model->get($id);
        $this->load->view('head');
        $this->load->view('topic_list', array('topics'=>$topics));
        $this->load->view('get', array('topic'=>$topic));
        $this->load->view('footer');
    }
}
?>
