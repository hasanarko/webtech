<?php
$dom = simplexml_load_file("student.xml");

foreach($dom->student as $s)
{
	echo "<h2>$s->name - $s->id - $s->cgpa</h2>"."<br>";
	echo "<h4>coursetaken:</h4>";
	
	foreach($s->coursetaken->course as $C){
		echo "<li>".$C->CName."</li>";
		echo "<li>".$C->Sec."</li>";
		echo "<li>".$C->Grade."</li>";
	}
	
	}

?>