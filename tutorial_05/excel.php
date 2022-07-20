<?php
require "phpspreadsheet/vendor/autoload.php";
?>
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
<form action="excel.php" method="post" enctype="multipart/form-data" >
  Select file to upload:
  <input type="file" name="fileUpload" id="fileUpload">
  <input type="submit" value="Upload" name="load"><br><br>
</form>
	<section class="box">
		<?php 
		$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		$spreadsheet = $reader->load($_FILES["fileUpload"]["tmp_name"]);
		$worksheet = $spreadsheet->getActiveSheet();
		$highestRow = $worksheet->getHighestRow(); 
		$highestColumn = $worksheet->getHighestColumn(); 
		$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
		
		echo '<table style="width:100%;border:1px solid black;border-collapse: collapse;text-align:center">' . "\n";
		for ($row = 1; $row <= $highestRow; ++$row) {
			echo '<tr >' ;
			for ($col = 1; $col <= $highestColumnIndex; ++$col) {
				$value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
				echo '<td style="border:1px solid black;" >' . $value . '</td>';
			}
			echo '</tr>' ;
		}
		echo '</table>';
		?> 
	</section>

</body>
</html>
