<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: grid;
            grid-template-columns: auto;
            width: 50%;
            justify-content: center;
            align-items: center;
            grid-gap: 20px;
        }

        .form-control {
            width: 100%;
            padding: 5px 0;
        }

        .btn-primary {
            width: 50px;
            background-color: dodgerblue;
            border: none;
            border-radius: 5px;
            padding: 5px;
            cursor: pointer;
        }

        .file {
            border: 1px solid;
            padding: 10px 2px;
        }
    </style>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
</head>

<body>
    <h1>Email tới bạn</h1>
    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <div>
            <span>Email</span>
            <input type="text" class="form-control" name="email" placeholder="  Email">
        </div>
        <div>
            <span>Subject</span>
            <input type="text" class="form-control" name="tieude" placeholder=" Tên">
        </div>
        <div>
            <span>Nội dung</span>
            <textarea name="content" id="editor" class="form-control"></textarea>
            <script type="text/javascript">
                CKEDITOR.replace('content');
            </script>
        </div>
        <div>
            <span>File đính kèm</span>
            <input type="file" class="form-control file" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</body>

</html>