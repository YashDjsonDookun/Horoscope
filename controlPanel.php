<?php
    include("./assets/src/includes/updatePage.php");
    include("./assets/src/includes/fetchFromDatabase.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Control Panel</title>
        <link rel="stylesheet" href="./assets/css/panel.css">
    </head>
    <body>
        <div class="container">
          <header>
              <h1>CONTROL PANEL</h1>
          </header>
            <form action="controlPanel.php" method="post">
               <div class="options">
                  <label for="horoscopes">Choose Horoscope:</label>
                   <select name="horoscopes" id="horoscope-options">
                        <option value="Aries" class="Aries">Aries</option>
                        <option value="Taurus">Taurus</option>
                        <option value="Gemini">Gemini</option>
                        <option value="Cancer">Cancer</option>
                        <option value="Leo">Leo</option>
                        <option value="Virgo">Virgo</option>
                        <option value="Libra">Libra</option>
                        <option value="Scorpio">Scorpio</option>
                        <option value="Sagittarius">Sagittarius</option>
                        <option value="Capricorn">Capricorn</option>
                        <option value="Aquarius">Aquarius</option>
                        <option value="Pisces">Pisces</option>
                    </select>
               </div>
                <div class="sign-name">
                    <label for="signName">Sign Name: </label>
                    <input type="text" name="signName" placeholder="e.g Aries">
                    <p>
                        (Leave blank if no need to modify Sign Name)
                    </p>
                </div>
                <div class="image-path">
                    <label for="imagePath">Image Path: </label>
                    <input type="file" name="imagePath">
                </div>
                <div class="date-range">
                    <label for="dateRange">Range of Dates:</label>
                    <input type="text" name="dateRange" placeholder="e.g Aries (Mar 21-Apr 19)">
                    <p>
                        (Leave blank if no need to modify Range of Dates)
                    </p>
                </div>
                <div class="horoscope-prediction">
                    <label for="prediction" id="lblPrediction">Prediction: </label>
                    <textarea name="prediction" id="form-prediction" rows="10" placeholder="Place prediction text here..."></textarea>
                </div>
                <button type="submit" name="submit">Confirm</button>
            </form>
        </div>
    </body>
</html>