
<html>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" placeholder="Enter path" name="pthnm" id="pthnm" >

<input type="submit" value="Set Path">

</form>


</html>



<!-- 'C:/xampp/htdocs/testpoc/documents/' -->

<?php
// Path to the folder containing documents

if(isset($_POST['pthnm'])){ 
    $path = $_POST['pthnm']; // Get the text from input field

   echo nl2br(  "Your path: $path\n");
$folderPath = $path.'/';
//echo $folderPath;
// Get the list of files in the folder
$files = scandir($folderPath);
echo nl2br ("Documents Found: \n");
// Loop through each file

$i=1;
foreach ($files as $file) {
    // Exclude current and parent directory entries
    if ($file != '.' && $file != '..') {
        // Check if the file is a document

       // echo $folderPath . $file;
        if (is_file($folderPath . $file)) {

          //  echo "true";
            // Process the document here
            echo  nl2br ("$i:  $file\n");
            $i++;

        }

        // else{

        //     echo "false";
        // }
    }
}
}
?>