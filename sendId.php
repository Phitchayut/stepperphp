<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send ID No</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ID No</h5>
                <form action="" id="ID_No">
                    <input type="text" name="idNo" id="idNo" class="form-control" placeholder="Please ID No...">
                    <button type="submit" class="btn btn-success w-100 mt-2">Send</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready( () => {
            $("#ID_No").submit(function (e) {
                // หยุดการส่งค่าฟอร์มเพื่อป้องกันการรีเรีชหน้า
                e.preventDefault();

                // รับค่า idNo จากฟอร์ม
                var idNo = $("#idNo").val();

                // แปลง idNo เป็น base64
                var idNoBase64 = btoa(idNo);

                // ส่งค่า idNoBase64 ไปยังเซิร์ฟเวอร์โดยใช้ AJAX
                $.ajax({
                    type: "POST",
                    url: "test.php", // เปลี่ยนเป็น URL ของสคริปต์ PHP ของคุณ
                    data: { idNoBase64: idNoBase64 },
                    success: function (response) {
                        // ดำเนินการตามความต้องการหลังจากการส่งข้อมูล
                        console.log("สำเร็จ: " + response);
                    },
                    error: function (xhr, status, error) {
                        console.log("เกิดข้อผิดพลาด: " + error);
                    }
                });
            });
        });
    </script>
</body>

</html>