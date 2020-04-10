<!--위에 html 부분 이런거 공통된 부분이라 파일 따로 만들고 controller에서 호출 -->
<!--토픽들의 리스트데이터를 담은 데이터를 배열로 만들어서 전달해야-->
토픽 메인 페이지
<ul>
    <?php
    // 이 topics는 controller/topic.php에 있는 $this->load->view('main', array('topics'=>$data)); 의 topics임
    // (= controller가 전달한 데이터를 view가 잘 받았다!)
//        var_dump($topics);
      foreach ($topics as $entry){
    ?>
          <li>
              <a href="/index.php/topic/get/<?=$entry->id?>">
                <?=$entry->title?>
              </a>
        </li>
    <?php
      }
    ?>
</ul>