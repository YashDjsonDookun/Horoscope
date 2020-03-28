<?php
    include("./assets/src/config.php");
    if (isset($_POST['submit']))
    {
        $signChoice = $_POST['horoscopes'];
        $inputSignName = $_POST['signName'];
        $inputDateRange = $_POST['dateRange'];
        $inputImagePath = $_POST['imagePath'];
        $inputPrediction = $_POST['prediction'];
        updateDatabase($conn, $signChoice, $inputSignName, $inputDateRange, $inputImagePath, $inputPrediction);
    }
    
    function updateDatabase($conn, $signChoice, $inputSignName, $inputDateRange, $inputImagePath,$inputPrediction)
    {
        if ((strlen($inputSignName)>0) && (strlen($inputDateRange)>0) && (strlen($inputImagePath)>0) && (strlen($inputPrediction)>0))
        {
            $sql = "UPDATE signs SET signName = '$inputSignName' WHERE signName = '$signChoice';";
        }
        if ((strlen($inputDateRange)>0))
        {
            $sql = "UPDATE signs SET smallDescription = '$inputDateRange' WHERE signName = '$signChoice';";
        }
        if ((strlen($inputPrediction)>0))
        {
            $sql = "UPDATE signs SET prediction = '$inputPrediction' WHERE signName = '$signChoice';";
        }
        if ((strlen($inputImagePath)>0))
        {
            $sql = "UPDATE signs SET imagePath = '$inputImagePath' WHERE signName = '$signChoice';";
        }
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
?>
