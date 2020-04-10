<!--위에 html 부분 이런거 공통된 부분이라 파일 따로 만들고 controller에서 호출 -->
<!--토픽들의 리스트데이터를 담은 데이터를 배열로 만들어서 전달해야-->
<!--이 부분도 중복부분이라 따로 뺌-->
<ul>
    <?php
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