<?php
// Test Cases
// clearstatcache();
function change_permissions($x)
{
  if (is_dir($x)) {
    return "This Is Directory And Only Files Allowed<br>";
  } elseif (is_file($x)) {
    if (str_contains($x, ".txt")) {
      // chmod($x, 0700);
      // echo "<pre>";
      // print_r(stat($x));
      // echo "</pre>";
      return fileperms($x) . " Permissions Changed<br>";
    } else {
      return "File Extension Is Not txt<br>";
    }
  }
  // return $x . "<br>";
}

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed