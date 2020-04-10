<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    function index(){
        $this->load->database();
//        model/topic_model서.php를 php 읽어서 그 안에있는 Topic_model 클래스를 로드하게 됨
        $this->load->model('topic_model');
//      topic_model 클래스를 가져오고, 그 가져온 클래스에 접근하기위해서는 $this->topic_model-> 이 규칙으로 적어야 접근 가능함 이렇게 하면 topic_model에 있는 get을 불러올수있
        $data = $this->topic_model->gets();
//        foreach ($data as $entry){
//            var_dump($entry);
//        } 이해 돕기위해 해본 것.
        $this->load->view('head');
        $this->load->view('main', array('topics'=>$data));
        $this->load->view('footer');
    }
    function get($id){
//      가장 먼저 데이터베이스 로드
        $this->load->database();
//      데이터베이스에서 모델을 사용할거기때문에
        $this->load->model('topic_model');
//      토픽이라는 변수에 get이라는 메소드를 호출해서 토픽 데이터가 담기면 됨
        $topic = $this->topic_model->get($id);
        $this->load->view('head');
//        변수 $topic = topic_model의 get 메소드로 호출해서 가져온 값
        $this->load->view('get', array('topic'=>$topic));
        $this->load->view('footer');
    }
}
?>
