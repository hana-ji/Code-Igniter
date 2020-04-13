<?php
class Errors extends CI_controller{
    public function notfound(){
        $this->load->view('head');
//        echo '페이지가 존재하지않습니다'; 이렇게 하면 html 사이에 메세지가 적히는게 아니라 맨처음에 나오게됨 그래서 따로 만들어줌
        $this->load->view('errors/404');
        $this->load->view('footer');
    }
}
?>