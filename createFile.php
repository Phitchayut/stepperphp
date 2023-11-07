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
                <h5 class="card-title">Upload File</h5>
                <form id="fileUploadForm" enctype="multipart/form-data">
                    <input type="file" name="file1" class="form-control mt-2">
                    <input type="file" name="file2" class="form-control mt-2">
                    <input type="file" name="file3" class="form-control mt-2">
                    <input type="file" name="file4" class="form-control mt-2">
                    <button type="button" class="btn btn-success mt-2 w-100" id="uploadButton">อัปโหลดไฟล์</button>
                </form>
                <div id="response"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function () {
            $("#uploadButton").click(function () {
                var formData = new FormData($("#fileUploadForm")[0]);

                $.ajax({
                    url: "upload.php",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        $("#response").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>