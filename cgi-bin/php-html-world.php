<!DOCTYPE html>
<html>
<body>

<?php

print "Cache-Control: no-cache\n";
print "Content-type: text/html\n\n";
print "<html>";
print "<head>";
print "<title>Hello, Perl!</title>";
print "</head>";
print "<body>";

print "<h1>Sasha was here - Hello, PHP!</h1>";
print "<p>This page was generated with the PHP programming langauge</p>";

$date = date("Y-m-d h:i:sa");
echo "<p>Current Time:" . $date . "</p>";

# IP Address is an environment variable when using CGI
$address = $_SERVER['REMOTE_ADDR'];
echo "<p>Your IP Address:" . $address . "</p>";

print "</body>";
print "</html>";

?>

</body>
</html>