<?php 

$string = '';

/*
print "<pre>";
print_r($_FILES);
print"</pre>";
 */

// get the files from _FILES
$filename = $_FILES['texfile']['tmp_name'];


// compile the tex file
$output = shell_exec("/usr/bin/pdflatex -output-directory /var/www/LaTeX_server/upload --interaction batchmode $filename");

// print the output so the person can see any errors
$string .= " <p>
	compilation output: 
	$output
	</p>
	";
// print a link to the new pdf, first parse $filename 
// TODO remove the first 5 chars of filename so it can be used as a link in uploads
print $filename;

$string .= "
	<a href='$filename.pdf'>Compiled file</a>
	";

print $string;
