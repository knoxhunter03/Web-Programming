<?php
$student= file_get_contents('student.json');
$stu= json_decode($student,true);
foreach ($stu as $s) {
	echo '<li>'.$s['name'].' ,'.'USN='.$s['usn'].' ,'.'Branch='.$s['branch'].' 
	,'.'Semester='.$s['sem'].'</li>';
}
?>
