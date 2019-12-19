<?php
include("functions.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="main.css">
  <title>Karsten Survey</title>
</head>
<body>
  <div class="page_wrapper">
    <div class="page_content">
      <div class="logo">
        <img class="leaf" src="karsten_leaf.png" alt="leaf">
      </div>
      <div class="survey_heading">
        <h1 class="primary_heading">Karsten Survey</h1>
      </div>
      <div class="language-div">
      <form class="form" action="" method="post">
        <select name="language">
          <option selected="selected" value="Afrikaans">Afrikaans</option>
          <option value="English">English</option>
        </select>
        <button class="btn" type="submit" name="change" value="change">OK</button>
      </form>
      </div>

      <?php
      if(isset($_POST['change'])) {
        if(isset($_POST['language'])) {
          $value = $_POST['language'];
          switch ($value) {
            case 'Afrikaans':
              ?>
              <div class="survey_form">
                <form class="form" action="" method="post">
                  <div class="test">
                    <div class="test2">
                      <label for="office">Op watter plaas/kantoor is jy gelee</label>

                    </div>
                    <div class="test2">
                      <select name="office">
                        <option selected="selected" value="Roepersfontein">Roepersfontein</option>
                        <option value="Durbanville">Durbanville</option>
                        <option value="Lourensford">Lourensford</option>
                        <option value="Naudeshof">Naudeshof</option>
                        <option value="Hoogland">Hoogland</option>
                        <option value="KFP">KFP</option>
                        <option value="Motounshoek">Motounshoek</option>
                        <option value="Klein Pella">Klein Pella</option>
                        <option value="Raap en Skraap">Raap en Skraap</option>
                        <option value="Kromhout">Kromhout</option>
                        <option value="Mosplaas">Mosplaas</option>
                        <option value="Blouputs">Blouputs</option>
                        <option value="Koekoeb">Koekoeb</option>
                        <option value="Newgro">Newgro</option>
                        <option value="Green Valley Nuts">Green Valley Nuts</option>
                      </select>
                    </div>
                    <div class="test2">
                      <label for="gender">Geslag</label>
                    </div>
                    <div class="test2">
                      <select name="gender">
                        <option selected="selected" value="Manlik">Manlik</option>
                        <option value="Vroulik">Vroulik</option>
                      </select>
                    </div>
                    <div class="test2">
                      <label for="age">Hoe oud is jy</label>
                    </div>
                    <div class="test2">
                      <select name="age">
                        <option selected="selected" value="18-24">Jonger as 25</option>
                        <option value="25-35">Tussen 25 en 35</option>
                        <option value="36-45">Tussen 36 en 45</option>
                        <option value="46-55">Tussen 46 en 55</option>
                        <option value="56-65">Tussen 56 en 65</option>
                        <option value="66-100">Ouer as 65</option>
                      </select>
                    </div>
                    <div class="test2">
                      <label for="grapevine">Ek lees die Grapevine:</label>
                    </div>
                    <div class="test2">
                      <select name="grapevine">
                        <option selected="selected" value="Maandeliks">Maandeliks</option>
                        <option value="Elke 2de maand">Elke 2de maand</option>
                        <option value="Elke 6 maande">Elke 6 maande</option>
                        <option value="1 Keer jaar">Een keer 'n jaar</option>
                        <option value="Nooit">Nooit</option>
                      </select>
                    </div>
                    <div class="test3">
                      <label for="goal">Wat dink jy is die doel van die Grapevine:</label>
                      <textarea id="goal" name="goal" rows="6" cols="60"></textarea>
                    </div>
                  </div>


                  <p class="secondary_heading">Ek wil graag die volgende in die Grapevine sien (veelvuldige):</p>
                  <div class="center">
                    <div>

                      <label for="Bedankings" class="container">Bedankings
                        <input type="checkbox" name="Bedankings" value="Ja" id="Bedankings">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Aanstellings" class="container">Aanstellings
                        <input type="checkbox" name="Aanstellings" value="Ja" id="Aanstellings">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Sosiale" class="container">Sosiale geleenthede
                        <input type="checkbox" name="Sosiale" value="Ja" id="Sosiale">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Albert" class="container">Albert Heijn projekte
                        <input type="checkbox" name="Albert" value="Ja" id="Albert">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Geboortes" class="container">Geboortes,troues,verlowings
                        <input type="checkbox" name="Geboortes" value="Ja" id="Geboortes">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Sport" class="container">Sportprestasies
                        <input type="checkbox" name="Sport" value="Ja" id="Sport">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Buitelandse" class="container">Buitelandse Aktiwiteite
                        <input type="checkbox" name="Buitelandse" value="Ja" id="Buitelandse">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="u-pad">
                    </div>
                    <label for="Ander">Ander.... </label>
                    <textarea id="Ander" name="Ander" rows="2" cols="30" placeholder="Spesifiseer"></textarea>
                  </div>



                  <p class="secondary_heading">Sal jy daarvan hou as ons artikels deur die maand op ons myKarsten Intranet sit, in plaas van om die Grapevine een keer 'n maand te doen?</p>

                  <div class="test4">
                    <label for="Yes" class="container">Ja
                      <input type="radio" name="ArticlesRadio[]" value="Ja" id="Yes" checked>
                      <span class="checkmark"></span>
                    </label>
                    <label for="No" class="container">Nee
                      <input type="radio" name="ArticlesRadio[]" value="Nee" id="No">
                      <span class="checkmark"></span>
                    </label>
                  </div>

                  <p class="secondary_heading">Enige ander voorstelle:</p>
                  <div class="test5">
                    <textarea id="voorstelle" name="voorstelle" rows="3" cols="50" placeholder="Voorstelle"></textarea>
                  </div>
                  <button class="btn" type="submit" name="submit" value="submit">Stuur</button>
                </form>
              </div>
              <?php
              break;
              case 'English':
              ?>
              <div class="survey_form">
                <form class="form" action="" method="post">
                  <div class="test">
                    <div class="test2">
                      <label for="office">On which farm/office are you?</label>

                    </div>
                    <div class="test2">
                      <select name="office">
                        <option selected="selected" value="Roepersfontein">Roepersfontein</option>
                        <option value="Durbanville">Durbanville</option>
                        <option value="Lourensford">Lourensford</option>
                        <option value="Naudeshof">Naudeshof</option>
                        <option value="Hoogland">Hoogland</option>
                        <option value="KFP">KFP</option>
                        <option value="Motounshoek">Motounshoek</option>
                        <option value="Klein Pella">Klein Pella</option>
                        <option value="Raap en Skraap">Raap en Skraap</option>
                        <option value="Kromhout">Kromhout</option>
                        <option value="Mosplaas">Mosplaas</option>
                        <option value="Blouputs">Blouputs</option>
                        <option value="Koekoeb">Koekoeb</option>
                        <option value="Newgro">Newgro</option>
                        <option value="Green Valley Nuts">Green Valley Nuts</option>
                      </select>
                    </div>
                    <div class="test2">
                      <label for="gender">Gender</label>
                    </div>
                    <div class="test2">
                      <select name="gender">
                        <option selected="selected" value="Manlik">Male</option>
                        <option value="Vroulik">Female</option>
                      </select>
                    </div>
                    <div class="test2">
                      <label for="age">How old are you?</label>
                    </div>
                    <div class="test2">
                      <select name="age">
                        <option selected="selected" value="18-24">Younger than 25</option>
                        <option value="25-35">Between 25 and 35</option>
                        <option value="36-45">Between 36 and 45</option>
                        <option value="46-55">Between 46 and 55</option>
                        <option value="56-65">Between 56 and 65</option>
                        <option value="66-100">Older than 65</option>
                      </select>
                    </div>
                    <div class="test2">
                      <label for="grapevine">I read the Grapevine:</label>
                    </div>
                    <div class="test2">
                      <select name="grapevine">
                        <option selected="selected" value="Maandeliks">Monthly</option>
                        <option value="Elke 2de maand">Every 2nd Month</option>
                        <option value="Elke 6 maande">Once in 6 Months</option>
                        <option value="1 Keer jaar">Once per year</option>
                        <option value="Nooit">Never</option>
                      </select>
                    </div>
                    <div class="test3">
                      <label for="goal">What do you think is the purpose of the Grapevine?:</label>
                      <textarea id="goal" name="goal" rows="6" cols="60"></textarea>
                    </div>
                  </div>


                  <p class="secondary_heading">I want to see the following included in the Grapevine (Multiple):</p>
                  <div class="center">
                    <div>

                      <label for="Bedankings" class="container">Resignations
                        <input type="checkbox" name="Bedankings" value="Ja" id="Bedankings">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Aanstellings" class="container">Appointments
                        <input type="checkbox" name="Aanstellings" value="Ja" id="Aanstellings">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Sosiale" class="container">Social occations
                        <input type="checkbox" name="Sosiale" value="Ja" id="Sosiale">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Albert" class="container">Albert Heijn projects
                        <input type="checkbox" name="Albert" value="Ja" id="Albert">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Geboortes" class="container">Births,Weddings,Engagements
                        <input type="checkbox" name="Geboortes" value="Ja" id="Geboortes">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Sportprestasies" class="container">Sport performances
                        <input type="checkbox" name="Sportprestasies" value="Ja" id="Sportprestasies">
                        <span class="checkmark"></span>
                      </label>

                      <label for="Buitelandse" class="container">Overseas activities
                        <input type="checkbox" name="Buitelandse" value="Ja" id="Buitelandse">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="u-pad">
                    </div>
                    <label for="Ander">Other... </label>
                    <textarea id="Ander" name="Ander" rows="2" cols="30" placeholder="Spesifiseer"></textarea>
                  </div>



                  <p class="secondary_heading">Would you like it more if we write more articles on the myKarsten Intranet than doing the Grapevine once a Month?</p>

                  <div class="test4">
                    <label for="Yes" class="container">Yes
                      <input type="radio" name="ArticlesRadio[]" value="Ja" id="Yes" checked>
                      <span class="checkmark"></span>
                    </label>
                    <label for="No" class="container">No
                      <input type="radio" name="ArticlesRadio[]" value="Nee" id="No">
                      <span class="checkmark"></span>
                    </label>
                  </div>

                  <p class="secondary_heading">Any other suggestions:</p>
                  <div class="test5">
                    <textarea id="voorstelle" name="voorstelle" rows="3" cols="50" placeholder="Voorstelle"></textarea>
                  </div>
                  <button class="btn" type="submit" name="submit" value="submit">Submit</button>
                </form>
              </div>

              <?php
              break;

              default:
              break;
          }
        };
      } ?>



    </body>
    </html>
