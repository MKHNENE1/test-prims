<!DOCTYPE html>
<html>
<head>
<title>Your Page Title</title>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 20px;
}

h1 {
  color: #333;
}

p {
  color: #666;
}

</style>
</head>
<body>
    <h1>Welcome to My Web Page</h1>
<p>This is an example of a web page created with HTML and CSS.</p>
<?php
// Test Cases
// clearstatcache();
function change_permissions($x)
{
  if (is_dir($x)) {
    return "This Is Directory And Only Files Allowed<br>";
  } elseif (is_file($x)) {
    if (str_contains($x, ".txt")) {
       chmod($x, 0700);
    //   echo "<pre>";
    //   print_r(stat($x));
    //   echo "</pre>";
    //   echo $x . "<br>";
      return fileperms($x) . " Permissions Changed<br>";
    } else {
      return "File Extension Is Not txt<br>";
    }
  }
  // return $x . "<br>";
}

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("work.docx"); // File Extension Is Not Txt
echo change_permissions("result.txt"); // Permissions Changed
// echo "DONE";
?>
<!-- Your page content goes here -->
</body>
</html>
