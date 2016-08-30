<?php
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
  || ($_FILES["file"]["type"] == "image/jpeg")
  || ($_FILES["file"]["type"] == "image/jpg")
  || ($_FILES["file"]["type"] == "image/pjpeg")
  || ($_FILES["file"]["type"] == "image/x-png")
  || ($_FILES["file"]["type"] == "image/png"))
  && ($_FILES["file"]["size"] < 100000)
  && in_array($extension, $allowedExts))
  {
    if ($_FILES[0"file"]["error"] > 0)
    {
      echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
    else 
    {
      $fileName = $temp[0].".".$temp[1];
      $temp[0] = rand(0, 3000); //Set to random number
      $fileName;
      if (file_exists("../img/imageDirectory/" . $_FILES["file"]["name"]))
      {
        echo $_FILES["file"]["name"] . " already exists. ";
      }
      else
      {
        $temp = explode(".", $_FILES["file"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["file"]["tmp_name"], "../img/imageDirectory/" . $newfilename);
        echo "Stored in: " . "../img/imageDirectory/" . $_FILES["file"]["name"];
      }
    }
  }
  else
  {
    echo "Invalid file";
  }
?>