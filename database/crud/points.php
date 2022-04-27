<?php
    session_start();
    include '../session.php';
    include '../dbconect.php';

    $packages = array($q1 = $_POST['q1'], $q2 = $_POST['q2'], $q3 = $_POST['q3'], $q4 = $_POST['q4'],
    $q5 = $_POST['q5'], $q6 = $_POST['q6'], $q7 = $_POST['q7'], $q8 = $_POST['q8'], $q9 = $_POST['q9'],
    $q10 = $_POST['q10']);

    $reponses = array("a", "b", "c", "d", "e");
    $increment = 0;

    for($i = 0; $i < sizeof($packages); $i++)
    {
        for($j = 0; $j < sizeof($reponses); $j++)
        {
            if($i[$i] == $j[$j])
            {
                $increment++;
            }
        }
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>