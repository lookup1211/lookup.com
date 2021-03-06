<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, targetdensitydpi=
device-dpi"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <title>admin-lookup.com</title>
<!-- SMOOTH SCROLL -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!--css-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css"> 
<link rel="stylesheet" href="src/css/main.css ">
<link rel="stylesheet" type="text/css" href="style.css"/>
<link href="/your-path-to-uicons/css/uicons-regular-rounded.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" type="text/css" href="src/css/main.css">
<!--font-->
</head>
<body>

<form style="margin: 70px;border:1px solid #ccc; margin-top: 50px; margin-left: 300px; margin-right: 300px; background-color: skyblue; "action="localhost/lookup.com" method="post" autocomplete="on"  >
 <center><h1><strong>Ajout client</strong></h1></center> 
 <center><hr style="width: 100px; border: 5px; background-color: black; "></center>
  <div>
    <label for="Categorie">Categorie</label>
    <select id="Categorie" name="Categorie" class="button">
      <option>Agent immobilier</option>
      <option selected>Construction</option>
      <option>chauffeur</option>
      <option>Arts</option>
      <option>Couture</option>
      <option>Garage</option>
      <option>Location-vehicule</option>
      <option>Peintre</option>
      <option>Photographie</option>
      <option>Restauration</option>
    </select>
  </div>
  <br>
  <br>
  <div>
    <span class="areaDiv">
      <label for="name">Societe:</label>
      <input class="input is-link" style="width: 200px;" id="Societe" name="Societe" type="text" required
             placeholder="Societe"
             aria-label="nom Societe">
      <span class="validity"></span>
    </span>
    <br>
<br>
    <span class="number1Div">
      <label>Numero:</label>
       <span class="areaDiv">
      <input class="input is-link" style="width: 70px;" id="areaNo" name="areaNo" type="tel" required
             placeholder="pays" pattern="[0-9]{3}"
             aria-label="Code r??gional" style="width: 30px;">
      <span class="validity"></span>

      <input class="input is-link" style="width: 200px;" id="number1" name="number1" type="tel" required
             placeholder="numero de telepohne" pattern="[0-9]{8}"
             aria-label="Premier fragment du num??ro">
      <span class="validity"></span>
<br><br>
    <span class="number1Div">
      <label for="Metier">Metier:</label>
      <input class="input is-link" style="width: 200px;" id="Metier" name="Metier" type="text" required
             placeholder="Metier"  pattern="[0-9]{3}"
             aria-label="Premier fragment du num??ro">
      <span class="validity"></span>
    <br><br>
    <span class="number2Div">
      <label>Nom & Prenom</label>
      <input class="input is-link" style="width: 200px;" id="Nom_prenom" name="Nom_prenom" type="tel" required
             placeholder="Nom_prenom" pattern="[0-9]{4}" aria-label="Second fragment du num??ro">
      <span class="validity"></span>
    </span>
  </div>
  <div style="margin-left: 190px;">
    <button>Envoyer</button>
  </div>
</form> 
<h1>Country Dropdown with flag</h1>
<div class="country">
  <div id="country" class="select">Country</div>
  <div id="country-drop" class="dropdown">
    <ul>
      <li data-code="AF" data-name="Afghanistan" data-cid="c32"><i class="flagstrap-icon"></i>Afghanistan (+93)</li>
      <li data-code="AL" data-name="Albania" data-cid="c33"><i class="flagstrap-icon"></i>Albania (+355)</li>
      <li data-code="DZ" data-name="Algeria" data-cid="c34"><i class="flagstrap-icon"></i>Algeria (+213)</li>
      <li data-code="AS" data-name="American Samoa" data-cid="c35"><i class="flagstrap-icon"></i>American Samoa (+1-684)</li>
      <li data-code="AD" data-name="Andorra" data-cid="c36"><i class="flagstrap-icon"></i>Andorra (+376)</li>
      <li data-code="AO" data-name="Angola" data-cid="c37"><i class="flagstrap-icon"></i>Angola (+244)</li>
      <li data-code="AI" data-name="Anguilla" data-cid="c38"><i class="flagstrap-icon"></i>Anguilla (+1-264)</li>
      <li data-code="AG" data-name="Antigua and Barbuda" data-cid="c39"><i class="flagstrap-icon"></i>Antigua and Barbuda (+1-268)</li>
      <li data-code="AR" data-name="Argentina" data-cid="c40"><i class="flagstrap-icon"></i>Argentina (+54)</li>
      <li data-code="AM" data-name="Armenia" data-cid="c41"><i class="flagstrap-icon"></i>Armenia (+374)</li>
      <li data-code="AW" data-name="Aruba" data-cid="c42"><i class="flagstrap-icon"></i>Aruba (+297)</li>
      <li data-code="AU" data-name="Australia" data-cid="c43"><i class="flagstrap-icon"></i>Australia (+61)</li>
      <li data-code="AT" data-name="Austria" data-cid="c44"><i class="flagstrap-icon"></i>Austria (+43)</li>
      <li data-code="AZ" data-name="Azerbaijan" data-cid="c45"><i class="flagstrap-icon"></i>Azerbaijan (+994)</li>
      <li data-code="BS" data-name="Bahamas" data-cid="c46"><i class="flagstrap-icon"></i>Bahamas (+1-242)</li>
      <li data-code="BH" data-name="Bahrain" data-cid="c47"><i class="flagstrap-icon"></i>Bahrain (+973)</li>
      <li data-code="BD" data-name="Bangladesh" data-cid="c48"><i class="flagstrap-icon"></i>Bangladesh (+880)</li>
      <li data-code="BB" data-name="Barbados" data-cid="c49"><i class="flagstrap-icon"></i>Barbados (+1-246)</li>
      <li data-code="BY" data-name="Belarus" data-cid="c50"><i class="flagstrap-icon"></i>Belarus (+375)</li>
      <li data-code="BE" data-name="Belgium" data-cid="c51"><i class="flagstrap-icon"></i>Belgium (+32)</li>
      <li data-code="BZ" data-name="Belize" data-cid="c52"><i class="flagstrap-icon"></i>Belize (+501)</li>
      <li data-code="BJ" data-name="Benin" data-cid="c53"><i class="flagstrap-icon"></i>Benin (+229)</li>
      <li data-code="BM" data-name="Bermuda" data-cid="c54"><i class="flagstrap-icon"></i>Bermuda (+1-441)</li>
      <li data-code="BT" data-name="Bhutan" data-cid="c55"><i class="flagstrap-icon"></i>Bhutan (+975)</li>
      <li data-code="BO" data-name="Bolivia" data-cid="c56"><i class="flagstrap-icon"></i>Bolivia (+591)</li>
      <li data-code="BA" data-name="Bosnia and Herzegovina" data-cid="c57"><i class="flagstrap-icon"></i>Bosnia and Herzegovina (+387)</li>
      <li data-code="BW" data-name="Botswana" data-cid="c58"><i class="flagstrap-icon"></i>Botswana (+267)</li>
      <li data-code="BR" data-name="Brazil" data-cid="c59"><i class="flagstrap-icon"></i>Brazil (+55)</li>
      <li data-code="IO" data-name="British Indian Ocean Territory" data-cid="c60"><i class="flagstrap-icon"></i>British Indian Ocean Territory (+246)</li>
      <li data-code="" data-name="British Virgin Islands" data-cid="c61"><i class="flagstrap-icon"></i>British Virgin Islands (+1-284)</li>
      <li data-code="BN" data-name="Brunei" data-cid="c62"><i class="flagstrap-icon"></i>Brunei (+673)</li>
      <li data-code="BG" data-name="Bulgaria" data-cid="c63"><i class="flagstrap-icon"></i>Bulgaria (+359)</li>
      <li data-code="BF" data-name="Burkina Faso" data-cid="c64"><i class="flagstrap-icon"></i>Burkina Faso (+226)</li>
      <li data-code="BI" data-name="Burundi" data-cid="c65"><i class="flagstrap-icon"></i>Burundi (+257)</li>
      <li data-code="KH" data-name="Cambodia" data-cid="c66"><i class="flagstrap-icon"></i>Cambodia (+855)</li>
      <li data-code="CM" data-name="Cameroon" data-cid="c67"><i class="flagstrap-icon"></i>Cameroon (+237)</li>
      <li data-code="CA" data-name="Canada" data-cid="c68"><i class="flagstrap-icon"></i>Canada (+1)</li>
      <li data-code="CV" data-name="Cape Verde" data-cid="c69"><i class="flagstrap-icon"></i>Cape Verde (+238)</li>
      <li data-code="KY" data-name="Cayman Islands" data-cid="c70"><i class="flagstrap-icon"></i>Cayman Islands (+1-345)</li>
      <li data-code="CF" data-name="Central African Republic" data-cid="c71"><i class="flagstrap-icon"></i>Central African Republic (+236)</li>
      <li data-code="TD" data-name="Chad" data-cid="c72"><i class="flagstrap-icon"></i>Chad (+235)</li>
      <li data-code="CL" data-name="Chile" data-cid="c73"><i class="flagstrap-icon"></i>Chile (+56)</li>
      <li data-code="CN" data-name="China" data-cid="c74"><i class="flagstrap-icon"></i>China (+86)</li>
      <li data-code="" data-name="Christmas Island" data-cid="c75"><i class="flagstrap-icon"></i>Christmas Island (+61)</li>
      <li data-code="" data-name="Cocos Islands" data-cid="c76"><i class="flagstrap-icon"></i>Cocos Islands (+61)</li>
      <li data-code="CO" data-name="Colombia" data-cid="c77"><i class="flagstrap-icon"></i>Colombia (+57)</li>
      <li data-code="KM" data-name="Comoros" data-cid="c78"><i class="flagstrap-icon"></i>Comoros (+269)</li>
      <li data-code="CK" data-name="Cook Islands" data-cid="c79"><i class="flagstrap-icon"></i>Cook Islands (+682)</li>
      <li data-code="CR" data-name="Costa Rica" data-cid="c80"><i class="flagstrap-icon"></i>Costa Rica (+506)</li>
      <li data-code="HR" data-name="Croatia" data-cid="c81"><i class="flagstrap-icon"></i>Croatia (+385)</li>
      <li data-code="CU" data-name="Cuba" data-cid="c82"><i class="flagstrap-icon"></i>Cuba (+53)</li>
      <li data-code="CY" data-name="Cyprus" data-cid="c83"><i class="flagstrap-icon"></i>Cyprus (+357)</li>
      <li data-code="CZ" data-name="Czech Republic" data-cid="c84"><i class="flagstrap-icon"></i>Czech Republic (+420)</li>
      <li data-code="CD" data-name="Democratic Republic of the Congo" data-cid="c85"><i class="flagstrap-icon"></i>Democratic Republic of the Congo (+243)</li>
      <li data-code="DK" data-name="Denmark" data-cid="c86"><i class="flagstrap-icon"></i>Denmark (+45)</li>
      <li data-code="DJ" data-name="Djibouti" data-cid="c87"><i class="flagstrap-icon"></i>Djibouti (+253)</li>
      <li data-code="DM" data-name="Dominica" data-cid="c88"><i class="flagstrap-icon"></i>Dominica (+1-767)</li>
      <li data-code="DO" data-name="Dominican Republic" data-cid="c89"><i class="flagstrap-icon"></i>Dominican Republic (+1-809)</li>
      <li data-code="DO" data-name="Dominican Republic" data-cid="c90"><i class="flagstrap-icon"></i>Dominican Republic (+1-829)</li>
      <li data-code="" data-name="East Timor" data-cid="c91"><i class="flagstrap-icon"></i>East Timor (+670)</li>
      <li data-code="EC" data-name="Ecuador" data-cid="c92"><i class="flagstrap-icon"></i>Ecuador (+593)</li>
      <li data-code="EG" data-name="Egypt" data-cid="c93"><i class="flagstrap-icon"></i>Egypt (+20)</li>
      <li data-code="SV" data-name="El Salvador" data-cid="c94"><i class="flagstrap-icon"></i>El Salvador (+503)</li>
      <li data-code="GQ" data-name="Equatorial Guinea" data-cid="c95"><i class="flagstrap-icon"></i>Equatorial Guinea (+240)</li>
      <li data-code="ER" data-name="Eritrea" data-cid="c96"><i class="flagstrap-icon"></i>Eritrea (+291)</li>
      <li data-code="EE" data-name="Estonia" data-cid="c97"><i class="flagstrap-icon"></i>Estonia (+372)</li>
      <li data-code="ET" data-name="Ethiopia" data-cid="c98"><i class="flagstrap-icon"></i>Ethiopia (+251)</li>
      <li data-code="FK" data-name="Falkland Islands" data-cid="c99"><i class="flagstrap-icon"></i>Falkland Islands (+500)</li>
      <li data-code="FO" data-name="Faroe Islands" data-cid="c100"><i class="flagstrap-icon"></i>Faroe Islands (+298)</li>
      <li data-code="FJ" data-name="Fiji" data-cid="c101"><i class="flagstrap-icon"></i>Fiji (+679)</li>
      <li data-code="FI" data-name="Finland" data-cid="c102"><i class="flagstrap-icon"></i>Finland (+358)</li>
      <li data-code="FR" data-name="France" data-cid="c103"><i class="flagstrap-icon"></i>France (+33)</li>
      <li data-code="PF" data-name="French Polynesia" data-cid="c104"><i class="flagstrap-icon"></i>French Polynesia (+689)</li>
      <li data-code="GA" data-name="Gabon" data-cid="c105"><i class="flagstrap-icon"></i>Gabon (+241)</li>
      <li data-code="GM" data-name="Gambia" data-cid="c106"><i class="flagstrap-icon"></i>Gambia (+220)</li>
      <li data-code="GE" data-name="Georgia" data-cid="c107"><i class="flagstrap-icon"></i>Georgia (+995)</li>
      <li data-code="DE" data-name="Germany" data-cid="c108"><i class="flagstrap-icon"></i>Germany (+49)</li>
      <li data-code="GH" data-name="Ghana" data-cid="c109"><i class="flagstrap-icon"></i>Ghana (+233)</li>
      <li data-code="GI" data-name="Gibraltar" data-cid="c110"><i class="flagstrap-icon"></i>Gibraltar (+350)</li>
      <li data-code="GR" data-name="Greece" data-cid="c111"><i class="flagstrap-icon"></i>Greece (+30)</li>
      <li data-code="GL" data-name="Greenland" data-cid="c112"><i class="flagstrap-icon"></i>Greenland (+299)</li>
      <li data-code="GD" data-name="Grenada" data-cid="c113"><i class="flagstrap-icon"></i>Grenada (+1-473)</li>
      <li data-code="GU" data-name="Guam" data-cid="c114"><i class="flagstrap-icon"></i>Guam (+1-671)</li>
      <li data-code="GT" data-name="Guatemala" data-cid="c115"><i class="flagstrap-icon"></i>Guatemala (+502)</li>
      <li data-code="GN" data-name="Guinea" data-cid="c116"><i class="flagstrap-icon"></i>Guinea (+224)</li>
      <li data-code="GN" data-name="Guinea" data-cid="c117"><i class="flagstrap-icon"></i>Guinea (+245)</li>
      <li data-code="GN" data-name="Guyana" data-cid="c118"><i class="flagstrap-icon"></i>Guyana (+592)</li>
      <li data-code="HT" data-name="Haiti" data-cid="c119"><i class="flagstrap-icon"></i>Haiti (+509)</li>
      <li data-code="HN" data-name="Honduras" data-cid="c120"><i class="flagstrap-icon"></i>Honduras (+504)</li>
      <li data-code="HK" data-name="Hong Kong" data-cid="c121"><i class="flagstrap-icon"></i>Hong Kong (+852)</li>
      <li data-code="HU" data-name="Hungary" data-cid="c122"><i class="flagstrap-icon"></i>Hungary (+36)</li>
      <li data-code="IS" data-name="Iceland" data-cid="c123"><i class="flagstrap-icon"></i>Iceland (+354)</li>
      <li data-code="IN" data-name="India" data-cid="c124"><i class="flagstrap-icon"></i>India (+91)</li>
      <li data-code="ID" data-name="Indonesia" data-cid="c125"><i class="flagstrap-icon"></i>Indonesia (+62)</li>
      <li data-code="IR" data-name="Iran" data-cid="c126"><i class="flagstrap-icon"></i>Iran (+98)</li>
      <li data-code="IQ" data-name="Iraq" data-cid="c127"><i class="flagstrap-icon"></i>Iraq (+964)</li>
      <li data-code="IE" data-name="Ireland" data-cid="c128"><i class="flagstrap-icon"></i>Ireland (+353)</li>
      <li data-code="IM" data-name="Isle of Man" data-cid="c129"><i class="flagstrap-icon"></i>Isle of Man (+44-1624)</li>
      <li data-code="IL" data-name="Israel" data-cid="c130"><i class="flagstrap-icon"></i>Israel (+972)</li>
      <li data-code="IT" data-name="Italy" data-cid="c131"><i class="flagstrap-icon"></i>Italy (+39)</li>
      <li data-code="" data-name="Ivory Coast" data-cid="c132"><i class="flagstrap-icon"></i>Ivory Coast (+225)</li>
      <li data-code="JM" data-name="Jamaica" data-cid="c133"><i class="flagstrap-icon"></i>Jamaica (+1-876)</li>
      <li data-code="JP" data-name="Japan" data-cid="c134"><i class="flagstrap-icon"></i>Japan (+81)</li>
      <li data-code="JE" data-name="Jersey" data-cid="c135"><i class="flagstrap-icon"></i>Jersey (+44-1534)</li>
      <li data-code="JO" data-name="Jordan" data-cid="c136"><i class="flagstrap-icon"></i>Jordan (+962)</li>
      <li data-code="KZ" data-name="Kazakhstan" data-cid="c137"><i class="flagstrap-icon"></i>Kazakhstan (+7)</li>
      <li data-code="KE" data-name="Kenya" data-cid="c138"><i class="flagstrap-icon"></i>Kenya (+254)</li>
      <li data-code="KI" data-name="Kiribati" data-cid="c139"><i class="flagstrap-icon"></i>Kiribati (+686)</li>
      <li data-code="KW" data-name="Kuwait" data-cid="c140"><i class="flagstrap-icon"></i>Kuwait (+965)</li>
      <li data-code="KG" data-name="Kyrgyzstan" data-cid="c141"><i class="flagstrap-icon"></i>Kyrgyzstan (+996)</li>
      <li data-code="LA" data-name="Laos" data-cid="c142"><i class="flagstrap-icon"></i>Laos (+856)</li>
      <li data-code="LV" data-name="Latvia" data-cid="c143"><i class="flagstrap-icon"></i>Latvia (+371)</li>
      <li data-code="LB" data-name="Lebanon" data-cid="c144"><i class="flagstrap-icon"></i>Lebanon (+961)</li>
      <li data-code="LS" data-name="Lesotho" data-cid="c145"><i class="flagstrap-icon"></i>Lesotho (+266)</li>
      <li data-code="LR" data-name="Liberia" data-cid="c146"><i class="flagstrap-icon"></i>Liberia (+231)</li>
      <li data-code="LY" data-name="Libya" data-cid="c147"><i class="flagstrap-icon"></i>Libya (+218)</li>
      <li data-code="LI" data-name="Liechtenstein" data-cid="c148"><i class="flagstrap-icon"></i>Liechtenstein (+423)</li>
      <li data-code="LT" data-name="Lithuania" data-cid="c149"><i class="flagstrap-icon"></i>Lithuania (+370)</li>
      <li data-code="LU" data-name="Luxembourg" data-cid="c150"><i class="flagstrap-icon"></i>Luxembourg (+352)</li>
      <li data-code="MO" data-name="Macao" data-cid="c151"><i class="flagstrap-icon"></i>Macao (+853)</li>
      <li data-code="MK" data-name="Macedonia" data-cid="c152"><i class="flagstrap-icon"></i>Macedonia (+389)</li>
      <li data-code="MG" data-name="Madagascar" data-cid="c153"><i class="flagstrap-icon"></i>Madagascar (+261)</li>
      <li data-code="MW" data-name="Malawi" data-cid="c154"><i class="flagstrap-icon"></i>Malawi (+265)</li>
      <li data-code="MY" data-name="Malaysia" data-cid="c155"><i class="flagstrap-icon"></i>Malaysia (+60)</li>
      <li data-code="MV" data-name="Maldives" data-cid="c156"><i class="flagstrap-icon"></i>Maldives (+960)</li>
      <li data-code="ML" data-name="Mali" data-cid="c157"><i class="flagstrap-icon"></i>Mali (+223)</li>
      <li data-code="MT" data-name="Malta" data-cid="c158"><i class="flagstrap-icon"></i>Malta (+356)</li>
      <li data-code="MH" data-name="Marshall Islands" data-cid="c159"><i class="flagstrap-icon"></i>Marshall Islands (+692)</li>
      <li data-code="MQ" data-name="Martinique" data-cid="c160"><i class="flagstrap-icon"></i>Martinique (+596)</li>
      <li data-code="MR" data-name="Mauritania" data-cid="c161"><i class="flagstrap-icon"></i>Mauritania (+222)</li>
      <li data-code="MU" data-name="Mauritius" data-cid="c162"><i class="flagstrap-icon"></i>Mauritius (+230)</li>
      <li data-code="YT" data-name="Mayotte" data-cid="c163"><i class="flagstrap-icon"></i>Mayotte (+262)</li>
      <li data-code="MX" data-name="Mexico" data-cid="c164"><i class="flagstrap-icon"></i>Mexico (+52)</li>
      <li data-code="FM" data-name="Micronesia" data-cid="c165"><i class="flagstrap-icon"></i>Micronesia (+691)</li>
      <li data-code="MD" data-name="Moldova" data-cid="c166"><i class="flagstrap-icon"></i>Moldova (+373)</li>
      <li data-code="MC" data-name="Monaco" data-cid="c167"><i class="flagstrap-icon"></i>Monaco (+377)</li>
      <li data-code="MN" data-name="Mongolia" data-cid="c168"><i class="flagstrap-icon"></i>Mongolia (+976)</li>
      <li data-code="ME" data-name="Montenegro" data-cid="c169"><i class="flagstrap-icon"></i>Montenegro (+382)</li>
      <li data-code="MS" data-name="Montserrat" data-cid="c170"><i class="flagstrap-icon"></i>Montserrat (+1-664)</li>
      <li data-code="MA" data-name="Morocco" data-cid="c171"><i class="flagstrap-icon"></i>Morocco (+212)</li>
      <li data-code="MZ" data-name="Mozambique" data-cid="c172"><i class="flagstrap-icon"></i>Mozambique (+258)</li>
      <li data-code="MM" data-name="Myanmar" data-cid="c173"><i class="flagstrap-icon"></i>Myanmar (+95)</li>
      <li data-code="NA" data-name="Namibia" data-cid="c174"><i class="flagstrap-icon"></i>Namibia (+264)</li>
      <li data-code="NR" data-name="Nauru" data-cid="c175"><i class="flagstrap-icon"></i>Nauru (+674)</li>
      <li data-code="NP" data-name="Nepal" data-cid="c176"><i class="flagstrap-icon"></i>Nepal (+977)</li>
      <li data-code="NL" data-name="Netherlands" data-cid="c177"><i class="flagstrap-icon"></i>Netherlands (+31)</li>
      <li data-code="" data-name="Netherlands Antilles" data-cid="c178"><i class="flagstrap-icon"></i>Netherlands Antilles (+599)</li>
      <li data-code="NC" data-name="New Caledonia" data-cid="c179"><i class="flagstrap-icon"></i>New Caledonia (+687)</li>
      <li data-code="NZ" data-name="New Zealand" data-cid="c180"><i class="flagstrap-icon"></i>New Zealand (+64)</li>
      <li data-code="NI" data-name="Nicaragua" data-cid="c181"><i class="flagstrap-icon"></i>Nicaragua (+505)</li>
      <li data-code="NE" data-name="Niger" data-cid="c182"><i class="flagstrap-icon"></i>Niger (+227)</li>
      <li data-code="NG" data-name="Nigeria" data-cid="c183"><i class="flagstrap-icon"></i>Nigeria (+234)</li>
      <li data-code="NU" data-name="Niue" data-cid="c184"><i class="flagstrap-icon"></i>Niue (+683)</li>
      <li data-code="" data-name="North Korea" data-cid="c185"><i class="flagstrap-icon"></i>North Korea (+850)</li>
      <li data-code="MP" data-name="Northern Mariana Islands" data-cid="c186"><i class="flagstrap-icon"></i>Northern Mariana Islands (+1-670)</li>
      <li data-code="NO" data-name="Norway" data-cid="c187"><i class="flagstrap-icon"></i>Norway (+47)</li>
      <li data-code="OM" data-name="Oman" data-cid="c188"><i class="flagstrap-icon"></i>Oman (+968)</li>
      <li data-code="PK" data-name="Pakistan" data-cid="c189"><i class="flagstrap-icon"></i>Pakistan (+92)</li>
      <li data-code="PW" data-name="Palau" data-cid="c190"><i class="flagstrap-icon"></i>Palau (+680)</li>
      <li data-code="PA" data-name="Panama" data-cid="c191"><i class="flagstrap-icon"></i>Panama (+507)</li>
      <li data-code="PG" data-name="Papua New Guinea" data-cid="c192"><i class="flagstrap-icon"></i>Papua New Guinea (+675)</li>
      <li data-code="PY" data-name="Paraguay" data-cid="c193"><i class="flagstrap-icon"></i>Paraguay (+595)</li>
      <li data-code="PE" data-name="Peru" data-cid="c194"><i class="flagstrap-icon"></i>Peru (+51)</li>
      <li data-code="PH" data-name="Philippines" data-cid="c195"><i class="flagstrap-icon"></i>Philippines (+63)</li>
      <li data-code="PN" data-name="Pitcairn" data-cid="c196"><i class="flagstrap-icon"></i>Pitcairn (+870)</li>
      <li data-code="PL" data-name="Poland" data-cid="c197"><i class="flagstrap-icon"></i>Poland (+48)</li>
      <li data-code="PT" data-name="Portugal" data-cid="c198"><i class="flagstrap-icon"></i>Portugal (+351)</li>
      <li data-code="PR" data-name="Puerto Rico (+1-787)" data-cid="c199"><i class="flagstrap-icon"></i>Puerto Rico (+1-787) (+1-787)</li>
      <li data-code="PR" data-name="Puerto Rico (+1-939)" data-cid="c200"><i class="flagstrap-icon"></i>Puerto Rico (+1-939) (+1-939)</li>
      <li data-code="QA" data-name="Qatar" data-cid="c201"><i class="flagstrap-icon"></i>Qatar (+974)</li>
      <li data-code="CG" data-name="Republic of the Congo" data-cid="c202"><i class="flagstrap-icon"></i>Republic of the Congo (+242)</li>
      <li data-code="RO" data-name="Romania" data-cid="c203"><i class="flagstrap-icon"></i>Romania (+40)</li>
      <li data-code="RU" data-name="Russia" data-cid="c204"><i class="flagstrap-icon"></i>Russia (+7)</li>
      <li data-code="RW" data-name="Rwanda" data-cid="c205"><i class="flagstrap-icon"></i>Rwanda (+250)</li>
      <li data-code="" data-name="Saint Barthelemy" data-cid="c206"><i class="flagstrap-icon"></i>Saint Barthelemy (+590)</li>
      <li data-code="SH" data-name="Saint Helena" data-cid="c207"><i class="flagstrap-icon"></i>Saint Helena (+290)</li>
      <li data-code="KN" data-name="Saint Kitts and Nevis" data-cid="c208"><i class="flagstrap-icon"></i>Saint Kitts and Nevis (+1-869)</li>
      <li data-code="LC" data-name="Saint Lucia" data-cid="c209"><i class="flagstrap-icon"></i>Saint Lucia (+1-758)</li>
      <li data-code="MF" data-name="Saint Martin" data-cid="c210"><i class="flagstrap-icon"></i>Saint Martin (+590)</li>
      <li data-code="PM" data-name="Saint Pierre and Miquelon" data-cid="c211"><i class="flagstrap-icon"></i>Saint Pierre and Miquelon (+508)</li>
      <li data-code="VC" data-name="Saint Vincent and the Grenadines" data-cid="c212"><i class="flagstrap-icon"></i>Saint Vincent and the Grenadines (+1-784)</li>
      <li data-code="WS" data-name="Samoa" data-cid="c213"><i class="flagstrap-icon"></i>Samoa (+685)</li>
      <li data-code="SM" data-name="San Marino" data-cid="c214"><i class="flagstrap-icon"></i>San Marino (+378)</li>
      <li data-code="ST" data-name="Sao Tome and Principe" data-cid="c215"><i class="flagstrap-icon"></i>Sao Tome and Principe (+239)</li>
      <li data-code="SA" data-name="Saudi Arabia" data-cid="c216"><i class="flagstrap-icon"></i>Saudi Arabia (+966)</li>
      <li data-code="SN" data-name="Senegal" data-cid="c217"><i class="flagstrap-icon"></i>Senegal (+221)</li>
      <li data-code="RS" data-name="Serbia" data-cid="c218"><i class="flagstrap-icon"></i>Serbia (+381)</li>
      <li data-code="SC" data-name="Seychelles" data-cid="c219"><i class="flagstrap-icon"></i>Seychelles (+248)</li>
      <li data-code="SL" data-name="Sierra Leone" data-cid="c220"><i class="flagstrap-icon"></i>Sierra Leone (+232)</li>
      <li data-code="SG" data-name="Singapore" data-cid="c221"><i class="flagstrap-icon"></i>Singapore (+65)</li>
      <li data-code="SK" data-name="Slovakia" data-cid="c222"><i class="flagstrap-icon"></i>Slovakia (+421)</li>
      <li data-code="SI" data-name="Slovenia" data-cid="c223"><i class="flagstrap-icon"></i>Slovenia (+386)</li>
      <li data-code="SB" data-name="Solomon Islands" data-cid="c224"><i class="flagstrap-icon"></i>Solomon Islands (+677)</li>
      <li data-code="SO" data-name="Somalia" data-cid="c225"><i class="flagstrap-icon"></i>Somalia (+252)</li>
      <li data-code="ZA" data-name="South Africa" data-cid="c226"><i class="flagstrap-icon"></i>South Africa (+27)</li>
      <li data-code="KR" data-name="South Korea" data-cid="c227"><i class="flagstrap-icon"></i>South Korea (+82)</li>
      <li data-code="ES" data-name="Spain" data-cid="c228"><i class="flagstrap-icon"></i>Spain (+34)</li>
      <li data-code="LK" data-name="Sri Lanka" data-cid="c229"><i class="flagstrap-icon"></i>Sri Lanka (+94)</li>
      <li data-code="SD" data-name="Sudan" data-cid="c230"><i class="flagstrap-icon"></i>Sudan (+249)</li>
      <li data-code="SR" data-name="Suriname" data-cid="c231"><i class="flagstrap-icon"></i>Suriname (+597)</li>
      <li data-code="" data-name="Svalbard and Jan Mayen" data-cid="c232"><i class="flagstrap-icon"></i>Svalbard and Jan Mayen (+47)</li>
      <li data-code="SZ" data-name="Swaziland" data-cid="c233"><i class="flagstrap-icon"></i>Swaziland (+268)</li>
      <li data-code="SE" data-name="Sweden" data-cid="c234"><i class="flagstrap-icon"></i>Sweden (+46)</li>
      <li data-code="CH" data-name="Switzerland" data-cid="c235"><i class="flagstrap-icon"></i>Switzerland (+41)</li>
      <li data-code="SY" data-name="Syria" data-cid="c236"><i class="flagstrap-icon"></i>Syria (+963)</li>
      <li data-code="TW" data-name="Taiwan" data-cid="c237"><i class="flagstrap-icon"></i>Taiwan (+886)</li>
      <li data-code="TJ" data-name="Tajikistan" data-cid="c238"><i class="flagstrap-icon"></i>Tajikistan (+992)</li>
      <li data-code="TZ" data-name="Tanzania" data-cid="c239"><i class="flagstrap-icon"></i>Tanzania (+255)</li>
      <li data-code="TH" data-name="Thailand" data-cid="c240"><i class="flagstrap-icon"></i>Thailand (+66)</li>
      <li data-code="TG" data-name="Togo" data-cid="c241"><i class="flagstrap-icon"></i>Togo (+228)</li>
      <li data-code="TK" data-name="Tokelau" data-cid="c242"><i class="flagstrap-icon"></i>Tokelau (+690)</li>
      <li data-code="TO" data-name="Tonga" data-cid="c243"><i class="flagstrap-icon"></i>Tonga (+676)</li>
      <li data-code="TT" data-name="Trinidad and Tobago" data-cid="c244"><i class="flagstrap-icon"></i>Trinidad and Tobago (+1-868)</li>
      <li data-code="TN" data-name="Tunisia" data-cid="c245"><i class="flagstrap-icon"></i>Tunisia (+216)</li>
      <li data-code="TR" data-name="Turkey" data-cid="c246"><i class="flagstrap-icon"></i>Turkey (+90)</li>
      <li data-code="TM" data-name="Turkmenistan" data-cid="c247"><i class="flagstrap-icon"></i>Turkmenistan (+993)</li>
      <li data-code="TC" data-name="Turks and Caicos Islands" data-cid="c248"><i class="flagstrap-icon"></i>Turks and Caicos Islands (+1-649)</li>
      <li data-code="TV" data-name="Tuvalu" data-cid="c249"><i class="flagstrap-icon"></i>Tuvalu (+688)</li>
      <li data-code="" data-name="US. Virgin Islands" data-cid="c250"><i class="flagstrap-icon"></i>US. Virgin Islands (+1-340)</li>
      <li data-code="UG" data-name="Uganda" data-cid="c251"><i class="flagstrap-icon"></i>Uganda (+256)</li>
      <li data-code="UK" data-name="Ukraine" data-cid="c252"><i class="flagstrap-icon"></i>Ukraine (+380)</li>
      <li data-code="AE" data-name="United Arab Emirates" data-cid="c253"><i class="flagstrap-icon"></i>United Arab Emirates (+971)</li>
      <li data-code="GB" data-name="United Kingdom" data-cid="c254"><i class="flagstrap-icon"></i>United Kingdom (+44)</li>
      <li data-code="US" data-name="United States" data-cid="c255"><i class="flagstrap-icon"></i>United States (+1)</li>
      <li data-code="UY" data-name="Uruguay" data-cid="c256"><i class="flagstrap-icon"></i>Uruguay (+598)</li>
      <li data-code="UZ" data-name="Uzbekistan" data-cid="c257"><i class="flagstrap-icon"></i>Uzbekistan (+998)</li>
      <li data-code="VU" data-name="Vanuatu" data-cid="c258"><i class="flagstrap-icon"></i>Vanuatu (+678)</li>
      <li data-code="" data-name="Vatican" data-cid="c259"><i class="flagstrap-icon"></i>Vatican (+379)</li>
      <li data-code="VE" data-name="Venezuela" data-cid="c260"><i class="flagstrap-icon"></i>Venezuela (+58)</li>
      <li data-code="VN" data-name="Vietnam" data-cid="c261"><i class="flagstrap-icon"></i>Vietnam (+84)</li>
      <li data-code="WF" data-name="Wallis and Futuna" data-cid="c262"><i class="flagstrap-icon"></i>Wallis and Futuna (+681)</li>
      <li data-code="EH" data-name="Western Sahara" data-cid="c263"><i class="flagstrap-icon"></i>Western Sahara (+212)</li>
      <li data-code="YE" data-name="Yemen" data-cid="c264"><i class="flagstrap-icon"></i>Yemen (+967)</li>
      <li data-code="ZM" data-name="Zambia" data-cid="c265"><i class="flagstrap-icon"></i>Zambia (+260)</li>
      <li data-code="ZW" data-name="Zimbabwe" data-cid="c266"><i class="flagstrap-icon"></i>Zimbabwe (+263)</li>
    </ul>
  </div>
</div>
<!--Le code JavaScript associ?? est relativement simple, il contient un gestionnaire d'??v??nements onchange qui est d??clench?? lorsque la valeur du <select> est modifi??e. Il met alors ?? jour les attributs pattern, placeholder, aria-label du contr??le pour adapter le format attendu au pays choisi.-->
<script type="text/javascript">
var selectElem = document.querySelector("select");
var inputElems = document.querySelectorAll("input");

selectElem.onchange = function() {
  for(var i = 0; i < inputElems.length; i++) {
    inputElems[i].value = "";
  }

  if(selectElem.value === "??tats-Unis") {
    inputElems[2].parentNode.style.display = "inline";

    inputElems[0].placeholder = "Metier:";
    inputElems[0].pattern = "[0-9]{3}";

    inputElems[1].placeholder = "Premi??re partie";
    inputElems[1].pattern = "[0-9]{3}";
    inputElems[1].setAttribute("aria-label","Premi??re partie du num??ro");

    inputElems[2].placeholder = "Seconde partie";
    inputElems[2].pattern = "[0-9]{4}";
    inputElems[2].setAttribute("aria-label","Seconde partie du num??ro");
  } else if(selectElem.value === "Royaume-Uni") {
    inputElems[2].parentNode.style.display = "none";

    inputElems[0].placeholder = "Metier:";
    inputElems[0].pattern = "[0-9]{3,6}";

    inputElems[1].placeholder = "Societe:";
    inputElems[1].pattern = "[0-9]{4,8}";
    inputElems[1].setAttribute("aria-label","Num??ro local");
  } else if(selectElem.value === "Allemagne") {
    inputElems[2].parentNode.style.display = "inline";

    inputElems[0].placeholder =  "Societe:";
    inputElems[0].pattern = "[0-9]{3,5}";

    inputElems[1].placeholder =  "Nom_prenom:";
    inputElems[1].pattern = "[0-9]{2,4}";
    inputElems[1].setAttribute("aria-label","Premi??re partie du num??ro");

    inputElems[2].placeholder = "Nom_prenom:";
    inputElems[2].pattern = "[0-9]{4}";
    inputElems[2].setAttribute("aria-label","Seconde partie du num??ro");
  }
}</script>
</body>
</html>