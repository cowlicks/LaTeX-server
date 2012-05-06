<?php 
/* Script which generates a page where a user can upload the LaTeX file.
 * 
 * Eventually add support where users can upload .tar or .zips with all files
 * and have them be auto unpacked.
 */


$string = '';
$string .= "<html lang='en'>\n
	<head>\n
	<title>Upload a '.tex' file</title>\n
	</head>\n
	<body>\n
	<form action='compile.php' enctype='multipart/form-data' method='post'>\n
	<p>\n
	Upload a .tex file<br>\n
	<input type='file' name='texfile'>\n
	</p>\n
	<input type='submit' value='send'>\n
	</form>\n
	</body>\n
	</html>
	";


print($string);

?>
