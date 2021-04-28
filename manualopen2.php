<?php
require 'connectDB.php';
if (!empty($_GET)) {
  $mode = 1;
  $sql="UPDATE door2_mode SET mode=?";
  $result = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($result, $sql)) {
      echo "SQL_Error_insert_logout1";
      exit();
  }
   else{
    mysqli_stmt_bind_param($result, "s", $mode);
    mysqli_stmt_execute($result);
    echo "success";
}
header("location: index.php");
}


 ?>
