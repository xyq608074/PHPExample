<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="UTF-8">
	<title>上传图片</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" value="file">
        <input type="submit" name="sub" value="上传">
    </form>
</body>
</html>
<?php
if (isset($_POST['sub'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']);
}
?>