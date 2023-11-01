<?php
if(isset($_POST['idNoBase64'])){
    $idNoBase64 = $_POST['idNoBase64'];
    $idNo = base64_decode($idNoBase64);
    
    // ทำสิ่งที่คุณต้องการกับ $idNo ที่ถูกแปลงกลับมา
    // ตัวอย่าง:
    echo "รับค่า idNo ที่ถูกแปลงกลับมา: " . $idNo;
}
?>