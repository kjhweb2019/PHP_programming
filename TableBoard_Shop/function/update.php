<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, num에 해당하는 레코드를 POST로 받아온 내용으로 수정하기!
$connect = mysql_connect("localhost", "myname", "1111");
mysql_select_db("phpprogram", $connect);

$sql = "update tableboard_shop
        set date = '$_POST[date]', order_id = '$_POST[order_id]', name = '$_POST[name]', price = '$_POST[price]', quantity = '$_POST[quantity]' 
        where num = '$_GET[num]'";
$result = mysql_query($sql);


# 참고 : 에러 메시지 출력 방법
if(!$result){
    echo "<script> alert('update - error message') </script>";
}

?>

<script>
    location.replace('../index.php');
    //location.href는 뒤로가기 눌렀을 때 히스토리 남음 / location.replace는 히스토리가 안남음!! 뒤로 가기 눌렀을 때 그 전 페이지로 가야할 경우는 href를 사용
</script>