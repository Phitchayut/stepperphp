<?php
$uploadDirectory = "uploads/";

if (!empty($_FILES)) {
    $fileCount = count($_FILES);

    for ($i = 1; $i <= $fileCount; $i++) {
        $file = $_FILES["file$i"];
        $fileName = $file["name"];
        $fileType = $file["type"];

        // ตรวจสอบประเภทของไฟล์ที่อนุญาต
        $allowedTypes = array("image/jpeg", "application/pdf");
        if (in_array($fileType, $allowedTypes)) {
            $destination = $uploadDirectory . $fileName;

            if (move_uploaded_file($file["tmp_name"], $destination)) {
                echo "ไฟล์ $i ถูกอัปโหลดสำเร็จ: $fileName<br>";
            } else {
                echo "เกิดข้อผิดพลาดในการอัปโหลดไฟล์ $i<br>";
            }
        } else {
            echo "ประเภทของไฟล์ไม่ถูกต้องสำหรับไฟล์ $i<br>";
        }
    }
}
?>