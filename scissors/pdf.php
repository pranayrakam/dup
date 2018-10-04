<html>
<head>
<meta charset="utf-8">
<title>Display the pdf file using php</title>
</head>
<body>
<?php
$pdfname = $_GET['pdfname'];
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=".$pdfname."");
@readfile($pdfname);
?>
</body>
</html>