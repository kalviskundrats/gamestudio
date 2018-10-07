<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <form action="index.php" method="post" 
        enctype="multipart/form-data"> 
      <div><label id="upload">Select file to upload: 
        <input type="file" id="upload" name="upload"/></label></div> 
      <div> 
        <input type="hidden" name="action" value="upload"/> 
        <input type="submit" value="Submit"/> 
      </div>
    </form>
<?php
      if(isset($_POST["action"]))
  {  
      $fnm = $_FILES["upload"] ["name"];
      $dst="./product_image/".$fnm;
      move_uploaded_file($_FILES["upload"] ["tmp_name"],$dst);

      }
?>
  </body>
</html>
