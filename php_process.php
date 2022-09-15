<?php
    $nametrip = "NA";
    $startdate = "2000-01-01";
    $enddate = "2000-01-01";


    if(isset($_POST['nametrip'])){
        $nametrip = $_POST['nametrip'];
    }
    if(isset($_POST['startdate'])){
        $startdate = $_POST['startdate'];
    }
    if(isset($_POST['enddate'])){
        $enddate = $_POST['enddate'];
    }

    // Connect to Database
    $db = new PDO('pgsql:host=localhost;port=5432;dbname=project;','postgres','postgres');
    $sql = $db->prepare("INSERT INTO trip (nametrip,startdate,enddate) VALUES (:nt,:st ,:ed)");
    $params = ["nt"=>$nametrip, "st"=>$startdate, "ed"=>$enddate];

    //$sql->execute($params);
    
    if ($sql->execute($params)){
        echo "Added {$nametrip} successfully !!";
    } else {
        echo var_dump($sql->errorInfo());
    }
?>
