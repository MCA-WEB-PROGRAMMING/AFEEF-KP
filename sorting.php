<?php
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $students=array('Fathima','Gopika','Abina','Binoy','Nikila','Arun','Raichal','Soni','Adarsh','Bincy');
    echo "Array of students: <br>";
    print_r($students);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "sorted Array of students by using 'asort': <br>";
    asort($students);
    print_r($students);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "sorted Array of students by using 'arsort': <br>";
    arsort($students);
    print_r($students);


?>