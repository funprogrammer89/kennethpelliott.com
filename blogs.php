<html>
<head>
<style>
 h1 {
      text-shadow: 2px 2px 8px #FF0000;
    }
 h2 {
      text-shadow: 3px 5px 5px #336C06;
      font-size: 50px;
    }
      body {
        font-family: 'Oswald', serif;
        font-size: 48px;
      }
	  .right{
    float:right;
}

.left{
    float:left;
}

</style>
</head>
<body>

<center><h2>Ken Elliott's ¿Micro? Blog</h2><font size="3">
<br>

<table width="75%"><tr><td><center>

<?php

// Set the directory path
$dir = getcwd();
$dir2 = "/blogs/";
$dir3 = $dir.$dir2;
$colors = array("blue","purple","green","red","yellow","orange");
$colorCount = 0;
// Set the directory path
$dir = 'path/to/directory';

// Check if the directory exists and is accessible
if (!is_dir($dir3)) {
    die("The directory $dir does not exist or is not accessible.");
}

// Get all the text files in the directory
$files = glob("$dir3/*.txt");

// Sort the files by newest date
usort($files, function($a, $b) {
    return filemtime($b) - filemtime($a);
});
echo "Newest : ";
foreach ($files as $file) {

	$name = rtrim($file, ".txt");

		// * remove the directory path from the display header *
		$name = ltrim($name, " /home/vol1_4/epizy.com/epiz_33496197/kennethpelliott.com/htdocs/blogs//");
		echo "[ <a href='#$file'>". $name . "</a> ]";
}
echo " : Oldest";

?>
</center></td></tr></table><br><br><br><br>
<table width="75%"style="border-left: 1px solid #cdd0d4;border-right: 1px solid #cdd0d4;padding-left: 30px;padding-right: 30px;"><tr><td>
<?php


// Loop through all files in the directory
foreach ($files as $file) {
    // Check if the file is readable
    if (!is_readable($file)) {
        echo "The file $file is not readable.";
        continue;
    }
	
			$name = rtrim($file, "-.txt");
		// * remove the directory path from the display header *
		$name2 = ltrim($name, "/home/vol1_4/epizy.com/epiz_33496197/kennethpelliott.com/htdocs/blogs//");
		$name3 = substr($name2,-9);
		$name3 = rtrim($name3,")");
		$num1 = substr($name3,-2);
		$num2 = substr($name3,0,2);
		$num3 = substr($name3,3,2);
		$num4 = $num1 + $num2 + $num3;
		 ${"variable$file"};
		

    // Open the text file
    $text = file_get_contents($file);
     // Display the text as HTML and add some ad hoc HTML tags and flair
		//Set the size of your headers from your text file
		echo "<section id = '$file'></section>";
	echo "<font size='6'><span class='left'>~ <font color='$colors[$colorCount]'>";
		// remove the .txt from the display header



		echo $name2 . "</font> ~</span>";
		echo "</font><span class='right'>";


		




        echo nl2br($text);
		// add break so there is spacing between entries
		echo "<br><br><br><br>";
		$colorCount++;
}
?>
</td></tr></table>
</body>
</html>
