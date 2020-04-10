<?php
class Topic_model extends CI_Model {
//    construct 가 생성됨 -> 생성자라고하는 것은  Topic_model기 내부적으로 생선됐을 때 가장 안쪽에 있는 애가 실행되는 초기화문
    function __construct(){
        parent::__construct();
//        어떤 메소드를 호출하건 간에 동일하게 초기화 할 것들은 여기에 적으면 됨
    }

//    각각의 행들을 가져오기 위한 API / gets는 topic의 데이터들을 가져오는 api
    public function gets(){
//        데이터 가져오는 코드 query api사용 / CI가 SELe ~~~ 라는 sql문을 이용해
//        미리설정한 데이터베이스에 질의를 한 후에 리턴 된 값을 제공($this~~~~~') 까지가 질의)해주는 게 result(어떤 방식으로 결과값 가져오나 결정(객체 형태로 담김))
        return $this->db->query('SELECT * FROM topic')->result();
    }

    public function get($topic_id){
//   엑티브 레코드 ( get_where() ) 사용시 표준sql문을 자연스럽게 사용 -> 다른 데이터베이스로 옮겨가는 것이 용이, 프로그래머블하게 작성 가능
//        결과값 가져올때 result 사용할수도 있지만 where문 사용해서 한개만 가져올거기때문에 row 사용하면 이터네이션 할 필요없이 바로 데이터 가져올수있음
        return $this->db->get_where('topic', array('id'=>$topic_id))->row();
//       ㄴ( = return $this->db->query('SELECT * FROM topic WHERE id='.$topic_id);)
    }
}
