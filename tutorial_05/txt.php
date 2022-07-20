
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="txt.php" method="post" enctype="multipart/form-data" >
  Select file to upload:
  <input type="file" name="fileUpload" id="fileUpload">
  <input type="submit" value="Upload" name="load">
</form>
<section>
    <?php
 echo file_get_contents($_FILES["fileUpload"]["tmp_name"])
?>
</section>
</body></html>