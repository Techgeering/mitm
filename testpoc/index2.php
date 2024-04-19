<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document Search</title>
</head>
<body>
    <h2>Document Search</h2>
    <form action="" method="post">
    <input type="text" placeholder="Enter path" name="pthnm" id="pthnm" >

        <input type="text" name="keyword" placeholder="Enter keyword">
        <button type="submit" name="search">Search</button>
    </form>

    <?php
    if(isset($_POST['search'])) {
        // Get the keyword from the form
        $keyword = $_POST['keyword'];
        $path = $_POST['pthnm']; // Get the text from input field

        // Path to the folder containing documents
        $folderPath = $path.'/';

        // Get the list of files in the folder
        $files = scandir($folderPath);

        // Initialize an array to store matching files
        $matchingFiles = [];

        // Loop through each file
        foreach ($files as $file) {
            // Exclude current and parent directory entries
            if ($file != '.' && $file != '..') {
                // Check if the file is a document
                if (is_file($folderPath . $file)) {
                    // Read the content of the file
                    $content = file_get_contents($folderPath . $file);
                    // Check if the keyword exists in the content
                    if (stripos($content, $keyword) !== false) {
                        // Add the file to matchingFiles array
                        $matchingFiles[] = $file;
                    }
                }
            }
        }

        // Display the matching files
        if (!empty($matchingFiles)) {
            echo "<h3>Matching Documents:</h3>";
            echo "<ul>";
            foreach ($matchingFiles as $matchingFile) {
                echo "<li>$matchingFile</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No documents found containing the keyword '$keyword'.</p>";
        }
    }
    ?>
</body>
</html>