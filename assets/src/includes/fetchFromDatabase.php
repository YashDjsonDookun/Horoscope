<?php
    include("./assets/src/config.php");

    function fetchDateRange($conn, $name)
    {
        $sql = "SELECT smallDescription FROM signs WHERE signName = ".$name;
        $result = mysqli_query($conn, $sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $smallDescription = $row['smallDescription'];
            }
            echo $smallDescription;
        } else {
            echo "0 results";
        }
    }

    function fetchSignName($conn, $name)
    {
        $sql = "SELECT signName FROM signs WHERE signName = ".$name;
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $signName = $row['signName'];
            }
            echo $signName;
        } else {
            echo "0 results";
        }
    }

    function fetchPrediction($conn, $name)
    {
        $sql = "SELECT prediction FROM signs WHERE signName = ".$name;
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $prediction = $row['prediction'];
            }
            echo $prediction;
        } else {
            echo "0 results";
        }
    }

    function fetchImage($conn, $name)
    {
        $sql = "SELECT imagePath FROM signs WHERE signName = ".$name;
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $imagePath = $row['imagePath'];
            }
            echo "<img src=".$imagePath.">";
        } else {
            echo "0 results";
        }
    }
?>