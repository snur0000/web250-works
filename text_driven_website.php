<h1>Text Driven Site</h1>
<h2>Check out our favorite makeup bloggers!! </h2>

<?php
//everyting to get file contents
$sIncludedText = "text_driven_stuff.txt";

$programRecords = fopen($sIncludedText, "r")
					or die("Unable to open file!");
					
$readInContents = fread($programRecords, filesize($sIncludedText));

fclose($programRecords);
//done getting file contents


//split stuff by line
$aListOfSplitStuff = explode("\n", $readInContents);

//echo print_r($aListOfSplitStuff);

//echo $aListOfSplitStuff;

//have a site with auto-generated menu
//generate the menu
for($iCounter = 0; $iCounter < sizeOf($aListOfSplitStuff); $iCounter++)
{
	$currentRecord = $aListOfSplitStuff[$iCounter];
	$aListOfWords = explode("||", $currentRecord);
	$theFirstWord = $aListOfWords[0];
	
	
	
	echo '<br><a href="?p=text_driven_website.php&s=' . $theFirstWord . '">' . $theFirstWord . '</a>';
}

//echo $readInContents;
//menu clicks get auto-generated contents to that site

if($_GET)
{
$pageDesired = $_GET["s"];

}
else {

	$firstRecord = $aListOfSplitStuff[0];
	$aListOfWords = explode("||", $firstRecord);
	$pageDesired = $aListOfWords[0];
}

echo "<br><h1 style = 'font-size: 30px;'> $pageDesired </h1>";


//Use results of query string to retrieve the record you want
//echo "<br> Your Stuff is: " . $aListOfSplitStuff[2];


//cycles throuh first record/pagedesired and compares to first word
for($iCounter = 0; $iCounter < sizeOf($aListOfSplitStuff); $iCounter++)
{
	$currentRecord = $aListOfSplitStuff[$iCounter];
	$aListOfWords = explode("||", $currentRecord);
	$theFirstWord = $aListOfWords[0];
	
	
	
	if($theFirstWord == $pageDesired)
	{
	
	//echo print_r($aListofWords);
	$htmlOutput .= "Youtube Channel: $aListOfWords[1] <br>";
	$htmlOutput .= "Subscribers: $aListOfWords[2]";
	
	
	
	echo $htmlOutput;
	
	}
}


?> 

