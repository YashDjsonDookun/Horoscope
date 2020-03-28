<?php
    include("./assets/src/includes/fetchFromDatabase.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Horoscope</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <p>Horoscope</p>
        </header>
        <div class = "Aries" id="Aries">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <p>
                           <?php
                                fetchDateRange($conn, "'Aries'");
                            ?>
                        </p>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                       <?php
                            fetchImage($conn, "'Aries'");
                        ?>                      
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for 
                               <span>
                                   <?php
                                        fetchSignName($conn, "'Aries'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                           <?php
                                fetchPrediction($conn, "'Aries'");
                            ?>     
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Taurus">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Taurus'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Taurus'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Taurus'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Taurus'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Gemini">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Gemini'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Gemini'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Gemini'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Gemini'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Cancer">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Cancer'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Cancer'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Cancer'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Cancer'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Leo">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Leo'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Leo'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Leo'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Leo'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Virgo">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Virgo'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Virgo'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Leo'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Virgo'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Libra">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Libra'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Libra'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Libra'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Libra'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Scorpio">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Scorpio'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Scorpio'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Scorpio'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Scorpio'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Sagittarius">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Sagittarius'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Sagittarius'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Sagittarius'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Sagittarius'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Capricorn">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Capricorn'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Capricorn'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Capricorn'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Capricorn'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Aquarius">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Aquarius'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Aquarius'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Aquarius'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Aquarius'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div id="Pisces">
            <article>
                <div class="componentOne">
                    <div class="horoscope-name">
                        <?php
                            fetchDateRange($conn, "'Pisces'");
                        ?>
                    </div>
                </div>
                <div class="componentTwo">
                    <div class="horoscope-image">
                        <?php
                            fetchImage($conn, "'Pisces'");
                        ?> 
                    </div>
                    <div class="horoscope-text">
                        <div class="question">
                            <p>What's new for <span>
                                   <?php
                                        fetchSignName($conn, "'Pisces'");
                                    ?>
                                </span> this month?
                            </p>
                        </div>
                        <div class="prediction">
                            <?php
                                fetchPrediction($conn, "'Pisces'");
                            ?>  
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</body>

</html>