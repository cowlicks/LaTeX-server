<?php // script which generates a page where a user can upload a file

$string = '';
$string .= "<html lang='en'>\n
<head>\n
<title>Upload a '.tex' file</title>\n
</head>\n
<body>
<form action='compile.php' enctype='multipart/form-data' method='post'>
<p>
Upload a .tex file<br>
<input type='file' name='texfile'>
</p>
<input type='submit' value='send'>
</form>
</body>
</html>
";

print($string);

?>
