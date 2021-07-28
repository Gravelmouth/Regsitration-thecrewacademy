<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/css/bootstrap.css" rel="stylesheet">
  <link href="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/css/nice-select.css"
        rel="stylesheet">
  <link href="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/fonts/font-awesome.min.css"
        rel="stylesheet">
  <link href="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/css/animate.min.css"
        rel="stylesheet">
  <link href="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/css/jquery.mCustomScrollbar.css"
        rel="stylesheet">
  <link href="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/css/BsMultiSelect.css"
        rel="stylesheet">
  <link href="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/css/jquery-ui.css" rel="stylesheet">
  <link href="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/css/component.css" rel="stylesheet">
  <link href="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/css/w3nstyle.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <title>Title</title>
</head>
<body>
<?php
$first_name = "";
$Surname = "";
$nvuseremail = "";
$getcontry = "";
$city_of_residence = "";
$mobile_number = "";
$whatsapp_number = "";
$date_of_birth = "";
$getnationality = "";
$gendar = "";
$passport_1 = "";
$passport_2 = "";
$current_location = "";
$current_availability = "";
$maritalstatus = "";
$couplesposition = "";
$partners_name = "";
$languages_spoken = array();
$tattoos = "";
$smoker = "";
$eng1 = "";
$ENG1_expiry_date = "";
$stcw = "";
$stcw_expiry_date = "";
$b1b2visa = '';
$b1b2visa_expiry_date = '';
$cdvisa = '';
$schengenvisa = '';
$greencard = '';
$schengen_expiry_date = '';
$cd_expiry_date = '';
?>
<section class="contain_wapper" id="contain_wapper">

  <div class="inner_banner">
    <div class="container-new">
      <div class="banner_blk flxrow">
        <div class="tpl_title wow fadeInLeftBig">
          THE CREW HUNTER <span>Registration Form.</span>
        </div>

      </div>
    </div>
  </div>

  <div class="registration_page">

    <div class="container">
      <div class="register-main">
        <div class="clr">
          <h1 class="fl display-4">Register Your Details Here</h1>


        </div>
        <div class="messages" id="msgstatus">

        </div>
        <form action="" name="frm_registration" id="frm_registration" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <span style="color:red;">*Compulsory Field</span>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="fname">First Name *</label>
              <input required type="text" class="form-control" id="fname" placeholder="First Name" name="fname"
                     value="">
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="surname">Surname *</label>
              <input required type="text" class="form-control" id="surname" placeholder="Surname" name="surname"
                     value="">
            </div>


            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="email"><i class="fa fa-envelope-o"></i> Email *</label>
              <input required type="email" class="form-control" id="email" placeholder="Email" name="email"
                     value="">
            </div>


            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="country">Country *</label>
              <select name="contry" id="country" class="nice-select" required>
                <option data-display="select" value=""></option>
              <!-- TODO: Callum - Use this library to get and display the list of countries -->
                <?php
                require('../vendor/autoload.php');
                $countries = countries();
                foreach ($countries as $country) {
                  ?>
                  <option
                    value="<?php echo $country['iso_3166_1_alpha2']; ?>"><?php echo $country['name']; ?></option>
                  <?php
                }
                ?>
              </select>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="city_of_residence"><i class="fa fa-home"></i> City of residence *</label>
              <input required type="text" class="form-control" id="city_of_residence" placeholder="City of residence"
                     name="city_of_residence" value="">
            </div>
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="mobile_number"><i class="fa fa-mobile"></i> Mobile number (including country code) *</label>
              <input required type="text" class="form-control" id="mobile_number"
                     placeholder="Mobile number (incl. country code without +)" name="mobile_number"
                     value="">
            </div>
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="whatsapp_number"><i class="fa fa-whatsapp"></i> Whatsapp number (including country code) *</label>
              <input required type="text" class="form-control" id="whatsapp_number"
                     placeholder="Whatsapp number (incl. country code without +)" name="whatsapp_number"
                     value="">
            </div>
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="date_of_birth"><i class="fa fa-calendar"></i> Date of Birth</label>
              <input type="text" class="form-control w3ndatepicker" id="date_of_birth" placeholder="Date of Birth"
                     name="date_of_birth" value="">
            </div>
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="gender"><i class="fa fa-venus-mars"></i> Gender *</label>

              <div class="radiowrap">
                <div class="radiobox">
                  <input type="radio"  required name="gendar" id="male" value="Male" <?php if ($gendar == 'Male') {
                    echo 'checked';
                  } ?>>
                  <label for="male">Male</label>
                </div>
                <div class="radiobox">
                  <input type="radio" required name="gendar" id="female" value="Female" <?php if ($gendar == 'Female') {
                    echo 'checked';
                  } ?>>
                  <label for="female">Female</label>
                </div>
              </div>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="nationality">Nationality *</label>
                 <select name="nationality" required id="nationality" class="nice-select">
                  <option value="">-- select one --</option>
                  <option value="afghan">Afghan</option>
                  <option value="albanian">Albanian</option>
                  <option value="algerian">Algerian</option>
                  <option value="american">American</option>
                  <option value="andorran">Andorran</option>
                  <option value="angolan">Angolan</option>
                  <option value="antiguans">Antiguans</option>
                  <option value="argentinean">Argentinean</option>
                  <option value="armenian">Armenian</option>
                  <option value="australian">Australian</option>
                  <option value="austrian">Austrian</option>
                  <option value="azerbaijani">Azerbaijani</option>
                  <option value="bahamian">Bahamian</option>
                  <option value="bahraini">Bahraini</option>
                  <option value="bangladeshi">Bangladeshi</option>
                  <option value="barbadian">Barbadian</option>
                  <option value="barbudans">Barbudans</option>
                  <option value="batswana">Batswana</option>
                  <option value="belarusian">Belarusian</option>
                  <option value="belgian">Belgian</option>
                  <option value="belizean">Belizean</option>
                  <option value="beninese">Beninese</option>
                  <option value="bhutanese">Bhutanese</option>
                  <option value="bolivian">Bolivian</option>
                  <option value="bosnian">Bosnian</option>
                  <option value="brazilian">Brazilian</option>
                  <option value="british">British</option>
                  <option value="bruneian">Bruneian</option>
                  <option value="bulgarian">Bulgarian</option>
                  <option value="burkinabe">Burkinabe</option>
                  <option value="burmese">Burmese</option>
                  <option value="burundian">Burundian</option>
                  <option value="cambodian">Cambodian</option>
                  <option value="cameroonian">Cameroonian</option>
                  <option value="canadian">Canadian</option>
                  <option value="cape verdean">Cape Verdean</option>
                  <option value="central african">Central African</option>
                  <option value="chadian">Chadian</option>
                  <option value="chilean">Chilean</option>
                  <option value="chinese">Chinese</option>
                  <option value="colombian">Colombian</option>
                  <option value="comoran">Comoran</option>
                  <option value="congolese">Congolese</option>
                  <option value="costa rican">Costa Rican</option>
                  <option value="croatian">Croatian</option>
                  <option value="cuban">Cuban</option>
                  <option value="cypriot">Cypriot</option>
                  <option value="czech">Czech</option>
                  <option value="danish">Danish</option>
                  <option value="djibouti">Djibouti</option>
                  <option value="dominican">Dominican</option>
                  <option value="dutch">Dutch</option>
                  <option value="east timorese">East Timorese</option>
                  <option value="ecuadorean">Ecuadorean</option>
                  <option value="egyptian">Egyptian</option>
                  <option value="emirian">Emirian</option>
                  <option value="equatorial guinean">Equatorial Guinean</option>
                  <option value="eritrean">Eritrean</option>
                  <option value="estonian">Estonian</option>
                  <option value="ethiopian">Ethiopian</option>
                  <option value="fijian">Fijian</option>
                  <option value="filipino">Filipino</option>
                  <option value="finnish">Finnish</option>
                  <option value="french">French</option>
                  <option value="gabonese">Gabonese</option>
                  <option value="gambian">Gambian</option>
                  <option value="georgian">Georgian</option>
                  <option value="german">German</option>
                  <option value="ghanaian">Ghanaian</option>
                  <option value="greek">Greek</option>
                  <option value="grenadian">Grenadian</option>
                  <option value="guatemalan">Guatemalan</option>
                  <option value="guinea-bissauan">Guinea-Bissauan</option>
                  <option value="guinean">Guinean</option>
                  <option value="guyanese">Guyanese</option>
                  <option value="haitian">Haitian</option>
                  <option value="herzegovinian">Herzegovinian</option>
                  <option value="honduran">Honduran</option>
                  <option value="hungarian">Hungarian</option>
                  <option value="icelander">Icelander</option>
                  <option value="indian">Indian</option>
                  <option value="indonesian">Indonesian</option>
                  <option value="iranian">Iranian</option>
                  <option value="iraqi">Iraqi</option>
                  <option value="irish">Irish</option>
                  <option value="israeli">Israeli</option>
                  <option value="italian">Italian</option>
                  <option value="ivorian">Ivorian</option>
                  <option value="jamaican">Jamaican</option>
                  <option value="japanese">Japanese</option>
                  <option value="jordanian">Jordanian</option>
                  <option value="kazakhstani">Kazakhstani</option>
                  <option value="kenyan">Kenyan</option>
                  <option value="kittian and nevisian">Kittian and Nevisian</option>
                  <option value="kuwaiti">Kuwaiti</option>
                  <option value="kyrgyz">Kyrgyz</option>
                  <option value="laotian">Laotian</option>
                  <option value="latvian">Latvian</option>
                  <option value="lebanese">Lebanese</option>
                  <option value="liberian">Liberian</option>
                  <option value="libyan">Libyan</option>
                  <option value="liechtensteiner">Liechtensteiner</option>
                  <option value="lithuanian">Lithuanian</option>
                  <option value="luxembourger">Luxembourger</option>
                  <option value="macedonian">Macedonian</option>
                  <option value="malagasy">Malagasy</option>
                  <option value="malawian">Malawian</option>
                  <option value="malaysian">Malaysian</option>
                  <option value="maldivan">Maldivan</option>
                  <option value="malian">Malian</option>
                  <option value="maltese">Maltese</option>
                  <option value="marshallese">Marshallese</option>
                  <option value="mauritanian">Mauritanian</option>
                  <option value="mauritian">Mauritian</option>
                  <option value="mexican">Mexican</option>
                  <option value="micronesian">Micronesian</option>
                  <option value="moldovan">Moldovan</option>
                  <option value="monacan">Monacan</option>
                  <option value="mongolian">Mongolian</option>
                  <option value="moroccan">Moroccan</option>
                  <option value="mosotho">Mosotho</option>
                  <option value="motswana">Motswana</option>
                  <option value="mozambican">Mozambican</option>
                  <option value="namibian">Namibian</option>
                  <option value="nauruan">Nauruan</option>
                  <option value="nepalese">Nepalese</option>
                  <option value="new zealander">New Zealander</option>
                  <option value="ni-vanuatu">Ni-Vanuatu</option>
                  <option value="nicaraguan">Nicaraguan</option>
                  <option value="nigerien">Nigerien</option>
                  <option value="north korean">North Korean</option>
                  <option value="northern irish">Northern Irish</option>
                  <option value="norwegian">Norwegian</option>
                  <option value="omani">Omani</option>
                  <option value="pakistani">Pakistani</option>
                  <option value="palauan">Palauan</option>
                  <option value="panamanian">Panamanian</option>
                  <option value="papua new guinean">Papua New Guinean</option>
                  <option value="paraguayan">Paraguayan</option>
                  <option value="peruvian">Peruvian</option>
                  <option value="polish">Polish</option>
                  <option value="portuguese">Portuguese</option>
                  <option value="qatari">Qatari</option>
                  <option value="romanian">Romanian</option>
                  <option value="russian">Russian</option>
                  <option value="rwandan">Rwandan</option>
                  <option value="saint lucian">Saint Lucian</option>
                  <option value="salvadoran">Salvadoran</option>
                  <option value="samoan">Samoan</option>
                  <option value="san marinese">San Marinese</option>
                  <option value="sao tomean">Sao Tomean</option>
                  <option value="saudi">Saudi</option>
                  <option value="scottish">Scottish</option>
                  <option value="senegalese">Senegalese</option>
                  <option value="serbian">Serbian</option>
                  <option value="seychellois">Seychellois</option>
                  <option value="sierra leonean">Sierra Leonean</option>
                  <option value="singaporean">Singaporean</option>
                  <option value="slovakian">Slovakian</option>
                  <option value="slovenian">Slovenian</option>
                  <option value="solomon islander">Solomon Islander</option>
                  <option value="somali">Somali</option>
                  <option value="south african">South African</option>
                  <option value="south korean">South Korean</option>
                  <option value="spanish">Spanish</option>
                  <option value="sri lankan">Sri Lankan</option>
                  <option value="sudanese">Sudanese</option>
                  <option value="surinamer">Surinamer</option>
                  <option value="swazi">Swazi</option>
                  <option value="swedish">Swedish</option>
                  <option value="swiss">Swiss</option>
                  <option value="syrian">Syrian</option>
                  <option value="taiwanese">Taiwanese</option>
                  <option value="tajik">Tajik</option>
                  <option value="tanzanian">Tanzanian</option>
                  <option value="thai">Thai</option>
                  <option value="togolese">Togolese</option>
                  <option value="tongan">Tongan</option>
                  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                  <option value="tunisian">Tunisian</option>
                  <option value="turkish">Turkish</option>
                  <option value="tuvaluan">Tuvaluan</option>
                  <option value="ugandan">Ugandan</option>
                  <option value="ukrainian">Ukrainian</option>
                  <option value="uruguayan">Uruguayan</option>
                  <option value="uzbekistani">Uzbekistani</option>
                  <option value="venezuelan">Venezuelan</option>
                  <option value="vietnamese">Vietnamese</option>
                  <option value="welsh">Welsh</option>
                  <option value="yemenite">Yemenite</option>
                  <option value="zambian">Zambian</option>
                  <option value="zimbabwean">Zimbabwean</option>
                </select>
            </div>
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="passport_1"><i class="fa fa-book"></i> Passport 1</label>
              <select name="passport_1" id="passport_1" class="nice-select">
                <option data-display="select"></option>
                <?php
                require('../vendor/autoload.php');
                $countries = countries();
                foreach ($countries as $country) {
                  ?>
                  <option
                    value="<?php echo $country['iso_3166_1_alpha2']; ?>"><?php echo $country['name']; ?></option>
                  <?php
                }
                ?>

              </select>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="passport_2"><i class="fa fa-book"></i> Passport 2</label>
              <select name="passport_2" id="passport_2" class="nice-select">
                <option data-display="select"></option>
                <?php
                require('../vendor/autoload.php');
                $countries = countries();
                foreach ($countries as $country) {
                  ?>
                  <option
                    value="<?php echo $country['iso_3166_1_alpha2']; ?>"><?php echo $country['name']; ?></option>
                  <?php
                }
                ?>

              </select>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="current_location"><i class="fa fa-map-marker"></i> Current Location *</label>
              <select required name="current_location" id="current_location" class="nice-select">
                <option data-display="select"></option>
                <?php
                /*$locationtbl = $wpdb->prefix . "current_location";
                $location_data = $wpdb->get_results("SELECT * FROM $locationtbl ORDER BY c_location_name ASC");
                if ($location_data) {
                foreach ($location_data as $location) {
                $nvLocationID = $location->c_location_id;
                $nvLocationName = $location->c_location_name;

                $nvSelected = "";
                if ($current_location == $nvLocationID) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvLocationID; ?>" <?php echo $nvSelected; ?>><?php echo $nvLocationName; ?></option>
                <?php
                  }
                }*/
                ?>
              </select>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="current_availability"><i class="fa fa-calendar-o"></i> Current Availability *</label>
              <select required name="current_availability" id="current_availability" class="nice-select">
                <option data-display="select"></option>
                <option id="Immediately">Immediately
                </option>
                <option id="1-2 weeks">1-2 weeks
                </option>
                <option id="2-4 weeks">2-4 weeks
                </option>
                <option id="2 months +">2 months +
                </option>
              </select>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="Maritalstatus">Marital Status *</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input required type="radio" name="maritalstatus" id="single"
                         value="Single">
                  <label for="single">Single</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="maritalstatus" id="in_a_relationship"
                         value="In a Relationship" >
                  <label for="in_a_relationship">In a Relationship</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="maritalstatus" id="married"
                         value="Married">
                  <label for="married">Married</label>
                </div>
              </div>
            </div>

            <div class="form-group col-lg-4 col-md-6 showifmarried">
              <label class="control-label" for="couplesposition">Couples position</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input type="radio" name="couplesposition" id="cyes"
                         value="Yes">
                  <label for="cyes">Yes</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="couplesposition" id="cno" value="No">
                  <label for="cno">No</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="couplesposition" id="cflexible"
                         value="Flexible">
                  <label for="cflexible">Flexible</label>
                </div>
              </div>
            </div>

            <div class="form-group col-lg-4 col-md-6 showifmarried">
              <label class="control-label" for="partners_name"><i class="fa fa-user"></i> Partners name</label>
              <input type="text" class="form-control" id="partners_name" placeholder="Partners name"
                     name="partners_name" value=">
            </div>


            <div class="form-group col-lg-4 col-md-6">

              <label class="control-label" for="languages_spoken"><i class="fa fa-globe"></i> Languages Spoken</label>
              <select name="languages_spoken[]" id="languages_spoken" class="multi-select"
                      placeholder="Languages Spoken" multiple="multiple">
                <option value="Arabic" >Arabic
                </option>
                <option value="Dutch" >Dutch
                </option>
                <option value="English">English
                </option>
                <option value="French">French
                </option>
                <option value="German" >German
                </option>
                <option value="Italian">Italian</option>
                <option value="Mandarin">Mandarin</option>
                <option value="Portuguese">Portuguese</option>
                <option value="Other">Other</option>
                <option value="Russian">Russian
                </option>
                <option value="Spanish"  >Spanish
                </option>
                <option value="Tagalog" >Tagalog
                </option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="tattoos">Tattoos *</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input required type="radio" name="tattoos" id="tnone" value="None">
                  <label for="tnone">None</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="tattoos" id="thidden" value="Hidden">
                  <label for="thidden">Hidden</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="tattoos" id="tvisible" value="Visible">
                  <label for="tvisible">Visible</label>
                </div>
              </div>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="smoker">Smoker *</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input required type="radio" name="smoker" id="sNo" value="No">
                  <label for="sNo">None</label>
                </div>
                <div class="radiobox">
                  <input required type="radio" name="smoker" id="sSocial" value="Social">
                  <label for="sSocial">Social</label>
                </div>
                <div class="radiobox">
                  <input required type="radio" name="smoker" id="sYes" value="Yes">
                  <label for="sYes">Yes</label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="eng1">ENG1 *</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input required type="radio" name="eng1" id="enYes" value="Yes" >
                  <label for="enYes">Yes</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="eng1" id="enNo" value="No">
                  <label for="enNo">No</label>
                </div>

              </div>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="ENG1_expiry_date"><i class="fa fa-calendar"></i> ENG1 Expiry date *</label>
              <input required type="text" class="form-control w3ndatepickerexp" id="ENG1_expiry_date" placeholder="dd/mm/yyyy"
                     name="ENG1_expiry_date" value="">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="stcw">STCW *</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input required type="radio" name="stcw" id="stYes" value="Yes" >
                  <label for="stYes">Yes</label>
                </div>
                <div class="radiobox">
                  <input required type="radio" name="stcw" id="stNo" value="No" >
                  <label for="stNo">No</label>
                </div>

              </div>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="stcw_expiry_date"><i class="fa fa-calendar"></i> STCW Expiry Date *</label>
              <input required type="text" class="form-control w3ndatepickerexp" id="stcw_expiry_date" placeholder="dd/mm/yyyy"
                     name="stcw_expiry_date" value="">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="b1b2visa">B1 / B2 visa</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input type="radio" name="b1b2visa" id="b1Yes" value="Yes">
                  <label for="b1Yes">Yes</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="b1b2visa" id="b1No" value="No" >
                  <label for="b1No">No</label>
                </div>

              </div>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="b1b2visa_expiry_date"><i class="fa fa-calendar"></i> B1 / B2 Visa Expiry date</label>
              <input type="text" class="form-control w3ndatepickerexp" id="b1b2visa_expiry_date"
                     placeholder="dd/mm/yyyy" name="b1b2visa_expiry_date" value="">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="cdvisa">C1/D Visa</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input type="radio" name="cdvisa" id="cdYes" value="Yes" >
                  <label for="cdYes">Yes</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="cdvisa" id="cdNo" value="No" >
                  <label for="cdNo">No</label>
                </div>

              </div>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="cd_expiry_date"><i class="fa fa-calendar"></i> C1/D Visa Expiry date</label>
              <input type="text" class="form-control w3ndatepickerexp" id="cd_expiry_date" placeholder="dd/mm/yyyy"
                     name="cd_expiry_date" value="">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="schengenvisa">Schengen visa</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input type="radio" name="schengenvisa" id="scYes" value="Yes">
                  <label for="scYes">Yes</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="schengenvisa" id="scNo" value="No">
                  <label for="scNo">No</label>
                </div>

              </div>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="schengen_expiry_date"><i class="fa fa-calendar"></i> Schengen Visa Expiry date</label>
              <input type="text" class="form-control w3ndatepickerexp" id="schengen_expiry_date"
                     placeholder="dd/mm/yyyy" name="schengen_expiry_date" value="">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="schengenvisa">Green card</label>
              <div class="radiowrap">
                <div class="radiobox">
                  <input type="radio" name="greencard" id="gcYes" value="Yes">
                  <label for="gcYes">Yes</label>
                </div>
                <div class="radiobox">
                  <input type="radio" name="greencard" id="gcNo" value="No">
                  <label for="gcNo">No</label>
                </div>

              </div>
            </div>
          </div>


          <div class="row">
            <div class="form-group col-lg-4 col-md-6">

              <label class="control-label">Position Looking for – select all categories that apply and choose positions
                in stage 2 *</label>
              <select name="position_looking_for[]" id="position_looking_for" class="multi-select"
                      placeholder="Position Looking for" multiple>
                <?php
                $position_lookingtbl = $wpdb->prefix . "position_looking";
                $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=0 ORDER BY pos_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->pos_id;
                $nvPositionName = $looking->position_text;

                $nvSelected = "";
                if (in_array($nvPositionID, $position_looking_for)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                  }
                }
                ?>
              </select>
            </div>
            <?php
            if (is_user_logged_in()) {
              if (in_array('1', $position_looking_for)) {
                $parentID = 1;
                $position_lookingtbl = $wpdb->prefix . "position_looking";
            $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
            $nvPartentTitle = "";
            if (!empty($lookingfordataTitle)) {
            $nvPartentTitle = $lookingfordataTitle[0]->position_text;
            }
            ?>
            <div class="position_looking_1 w3nextracls form-group col-lg-4 col-md-6">
              <label class="control-label"
                     for="position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?> *</label>
              <select name="position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for" multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY pos_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->pos_id;
                $nvPositionName = $looking->position_text;
                $nvSelected = "";
                if (in_array($nvPositionID, $position_looking_1)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="position_looking_1 w3nextracls">
            </div>
            <?php
              }

              if (in_array('2', $position_looking_for)) {
                $parentID = 2;
                $position_lookingtbl = $wpdb->prefix . "position_looking";
            $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
            $nvPartentTitle = "";
            if (!empty($lookingfordataTitle)) {
            $nvPartentTitle = $lookingfordataTitle[0]->position_text;
            }
            ?>
            <div class="position_looking_2 w3nextracls form-group col-lg-4 col-md-6">
              <label class="control-label"
                     for="position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?> *</label>
              <select name="position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for" multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY pos_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->pos_id;
                $nvPositionName = $looking->position_text;
                $nvSelected = "";
                if (in_array($nvPositionID, $position_looking_2)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="position_looking_2 w3nextracls">
            </div>
            <?php
              }

              if (in_array('3', $position_looking_for)) {
                $parentID = 3;
                $position_lookingtbl = $wpdb->prefix . "position_looking";
            $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
            $nvPartentTitle = "";
            if (!empty($lookingfordataTitle)) {
            $nvPartentTitle = $lookingfordataTitle[0]->position_text;
            }
            ?>
            <div class="position_looking_3 w3nextracls form-group col-lg-4 col-md-6">
              <label class="control-label"
                     for="position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?> *</label>
              <select name="position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for" multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY pos_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->pos_id;
                $nvPositionName = $looking->position_text;
                $nvSelected = "";
                if (in_array($nvPositionID, $position_looking_3)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="position_looking_3 w3nextracls">
            </div>
            <?php
              }

              if (in_array('4', $position_looking_for)) {
                $parentID = 4;
                $position_lookingtbl = $wpdb->prefix . "position_looking";
            $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
            $nvPartentTitle = "";
            if (!empty($lookingfordataTitle)) {
            $nvPartentTitle = $lookingfordataTitle[0]->position_text;
            }
            ?>
            <div class="position_looking_4 w3nextracls form-group col-lg-4 col-md-6">
              <label class="control-label"
                     for="position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?> *</label>
              <select name="position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for" multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY pos_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->pos_id;
                $nvPositionName = $looking->position_text;
                $nvSelected = "";
                if (in_array($nvPositionID, $position_looking_4)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="position_looking_4 w3nextracls">
            </div>
            <?php
              }


              if (in_array('5', $position_looking_for)) {
                $parentID = 5;
                $position_lookingtbl = $wpdb->prefix . "position_looking";
            $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
            $nvPartentTitle = "";
            if (!empty($lookingfordataTitle)) {
            $nvPartentTitle = $lookingfordataTitle[0]->position_text;
            }
            ?>
            <div class="position_looking_5 w3nextracls form-group col-lg-4 col-md-6">
              <label class="control-label"
                     for="position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?> *</label>
              <select name="position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for" multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY pos_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->pos_id;
                $nvPositionName = $looking->position_text;
                $nvSelected = "";
                if (in_array($nvPositionID, $position_looking_5)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="position_looking_5 w3nextracls">
            </div>
            <?php
              }


              if (in_array('1', $position_looking_for)) {
                ?>
            <div class="qualification_1 w3nextracls form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 1;
                  $position_lookingtbl = $wpdb->prefix . "position_looking";
              $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->position_text;
              }

              ?>
              <label class="control-label"
                     for="qualification_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>
                Qualification</label>
              <select name="qualification_<?php echo $parentID; ?>[]" class="multi-select"
                      id="qualification_<?php echo $parentID; ?>" multiple>
                <?php
                    $position_qualificationtbl = $wpdb->prefix . "position_qualification";
                $qualificationdata = $wpdb->get_results("SELECT * FROM $position_qualificationtbl WHERE pos_id=" . $parentID . " ORDER BY qual_id ASC");
                if ($qualificationdata) {
                foreach ($qualificationdata as $qualification) {
                $nvPositionID = $qualification->qual_id;
                $nvPositionName = $qualification->qualification_text;

                $nvSelected = "";
                if (in_array($nvPositionID, $qualification_1)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="qualification_1 w3nextracls">
            </div>
            <?php
              }

              if (in_array('2', $position_looking_for)) {
                ?>
            <div class="qualification_2 w3nextracls form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 2;
                  $position_lookingtbl = $wpdb->prefix . "position_looking";
              $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->position_text;
              }

              ?>
              <label class="control-label"
                     for="qualification_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>
                Qualification</label>
              <select name="qualification_<?php echo $parentID; ?>[]" class="multi-select"
                      id="qualification_<?php echo $parentID; ?>" multiple>
                <?php
                    $position_qualificationtbl = $wpdb->prefix . "position_qualification";
                $qualificationdata = $wpdb->get_results("SELECT * FROM $position_qualificationtbl WHERE pos_id=" . $parentID . " ORDER BY qual_id ASC");
                if ($qualificationdata) {
                foreach ($qualificationdata as $qualification) {
                $nvPositionID = $qualification->qual_id;
                $nvPositionName = $qualification->qualification_text;

                $nvSelected = "";
                if (in_array($nvPositionID, $qualification_2)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="qualification_2 w3nextracls">
            </div>
            <?php
              }

              if (in_array('3', $position_looking_for)) {
                ?>
            <div class="qualification_3 w3nextracls form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 3;
                  $position_lookingtbl = $wpdb->prefix . "position_looking";
              $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->position_text;
              }

              ?>
              <label class="control-label"
                     for="qualification_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>
                Qualification</label>
              <select name="qualification_<?php echo $parentID; ?>[]" class="multi-select"
                      id="qualification_<?php echo $parentID; ?>" multiple>
                <?php
                    $position_qualificationtbl = $wpdb->prefix . "position_qualification";
                $qualificationdata = $wpdb->get_results("SELECT * FROM $position_qualificationtbl WHERE pos_id=" . $parentID . " ORDER BY qual_id ASC");
                if ($qualificationdata) {
                foreach ($qualificationdata as $qualification) {
                $nvPositionID = $qualification->qual_id;
                $nvPositionName = $qualification->qualification_text;

                $nvSelected = "";
                if (in_array($nvPositionID, $qualification_3)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="qualification_3 w3nextracls">
            </div>
            <?php
              }

              if (in_array('4', $position_looking_for)) {
                ?>
            <div class="qualification_4 w3nextracls form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 4;
                  $position_lookingtbl = $wpdb->prefix . "position_looking";
              $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->position_text;
              }

              ?>
              <label class="control-label"
                     for="qualification_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>
                Qualification</label>
              <select name="qualification_<?php echo $parentID; ?>[]" class="multi-select"
                      id="qualification_<?php echo $parentID; ?>" multiple>
                <?php
                    $position_qualificationtbl = $wpdb->prefix . "position_qualification";
                $qualificationdata = $wpdb->get_results("SELECT * FROM $position_qualificationtbl WHERE pos_id=" . $parentID . " ORDER BY qual_id ASC");
                if ($qualificationdata) {
                foreach ($qualificationdata as $qualification) {
                $nvPositionID = $qualification->qual_id;
                $nvPositionName = $qualification->qualification_text;

                $nvSelected = "";
                if (in_array($nvPositionID, $qualification_4)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="qualification_4 w3nextracls">
            </div>
            <?php
              }

              if (in_array('5', $position_looking_for)) {
                ?>
            <div class="qualification_5 w3nextracls form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 5;
                  $position_lookingtbl = $wpdb->prefix . "position_looking";
              $lookingfordataTitle = $wpdb->get_results("SELECT position_text FROM $position_lookingtbl WHERE pos_id=" . $parentID . " ORDER BY pos_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->position_text;
              }

              ?>
              <label class="control-label"
                     for="qualification_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>
                Qualification</label>
              <select name="qualification_<?php echo $parentID; ?>[]" class="multi-select"
                      id="qualification_<?php echo $parentID; ?>" multiple>
                <?php
                    $position_qualificationtbl = $wpdb->prefix . "position_qualification";
                $qualificationdata = $wpdb->get_results("SELECT * FROM $position_qualificationtbl WHERE pos_id=" . $parentID . " ORDER BY qual_id ASC");
                if ($qualificationdata) {
                foreach ($qualificationdata as $qualification) {
                $nvPositionID = $qualification->qual_id;
                $nvPositionName = $qualification->qualification_text;

                $nvSelected = "";
                if (in_array($nvPositionID, $qualification_5)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="qualification_5 w3nextracls">
            </div>
            <?php
              }
            } else {
              ?>
            <div class="position_looking_1 w3nextracls">
            </div>

            <div class="position_looking_2 w3nextracls">
            </div>

            <div class="position_looking_3 w3nextracls">
            </div>

            <div class="position_looking_4 w3nextracls">
            </div>

            <div class="position_looking_5 w3nextracls">
            </div>

            <div class="qualification_1 w3nextracls">
            </div>

            <div class="qualification_2 w3nextracls">
            </div>

            <div class="qualification_3 w3nextracls">
            </div>

            <div class="qualification_4 w3nextracls">
            </div>

            <div class="qualification_5 w3nextracls">
            </div>
            <?php
            }
            ?>

          </div>


          <div class="row">

            <div class="form-group col-lg-4 col-md-6 showifmarried">
              <label class="control-label" for="partners_position_looking_for">Partners position</label>
              <select name="partners_position_looking_for[]" id="partners_position_looking_for" class="multi-select"
                      multiple>
                <?php
                $partposition_lookingtbl = $wpdb->prefix . "partners_position";
                $partlookingfordata = $wpdb->get_results("SELECT * FROM $partposition_lookingtbl WHERE parent_id=0 ORDER BY partner_id ASC");
                if ($partlookingfordata) {
                foreach ($partlookingfordata as $partlooking) {
                $nvpartner_id = $partlooking->partner_id;
                $nvpartner_position = $partlooking->partner_position;

                $nvSelected = "";
                if (in_array($nvpartner_id, $partners_position_looking_for)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvpartner_id; ?>" <?php echo $nvSelected; ?>><?php echo $nvpartner_position; ?></option>
                <?php
                  }
                }
                ?>
              </select>
            </div>

            <?php
            if (is_user_logged_in()) {
              //$partner_position_looking_1
              if (in_array('1', $partners_position_looking_for)) {
                ?>
            <div class="w3npartnerpos partnerpoaition_1 form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 1;
                  $position_lookingtbl = $wpdb->prefix . "partners_position";
              $lookingfordataTitle = $wpdb->get_results("SELECT partner_position FROM $position_lookingtbl WHERE partner_id=" . $parentID . " ORDER BY partner_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->partner_position;
              }

              ?>
              <label class="control-label"
                     for="partner_position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>(Partner)
                *</label>
              <select name="partner_position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="partner_position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for"
                      multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY partner_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->partner_id;
                $nvPositionName = $looking->partner_position;
                $nvSelected = "";
                if (in_array($nvPositionID, $partner_position_looking_1)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="w3npartnerpos partnerpoaition_1">
            </div>
            <?php
              }

              if (in_array('2', $partners_position_looking_for)) {
                ?>
            <div class="w3npartnerpos partnerpoaition_2 form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 2;
                  $position_lookingtbl = $wpdb->prefix . "partners_position";
              $lookingfordataTitle = $wpdb->get_results("SELECT partner_position FROM $position_lookingtbl WHERE partner_id=" . $parentID . " ORDER BY partner_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->partner_position;
              }

              ?>
              <label class="control-label"
                     for="partner_position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>(Partner)
                *</label>
              <select name="partner_position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="partner_position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for"
                      multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY partner_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->partner_id;
                $nvPositionName = $looking->partner_position;
                $nvSelected = "";
                if (in_array($nvPositionID, $partner_position_looking_2)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="w3npartnerpos partnerpoaition_2">
            </div>
            <?php
              }

              if (in_array('3', $partners_position_looking_for)) {
                ?>
            <div class="w3npartnerpos partnerpoaition_3 form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 3;
                  $position_lookingtbl = $wpdb->prefix . "partners_position";
              $lookingfordataTitle = $wpdb->get_results("SELECT partner_position FROM $position_lookingtbl WHERE partner_id=" . $parentID . " ORDER BY partner_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->partner_position;
              }

              ?>
              <label class="control-label"
                     for="partner_position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>
                (Partner)</label>
              <select name="partner_position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="partner_position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for"
                      multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY partner_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->partner_id;
                $nvPositionName = $looking->partner_position;
                $nvSelected = "";
                if (in_array($nvPositionID, $partner_position_looking_3)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="w3npartnerpos partnerpoaition_3">
            </div>
            <?php
              }

              if (in_array('4', $partners_position_looking_for)) {
                ?>
            <div class="w3npartnerpos partnerpoaition_4 form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 4;
                  $position_lookingtbl = $wpdb->prefix . "partners_position";
              $lookingfordataTitle = $wpdb->get_results("SELECT partner_position FROM $position_lookingtbl WHERE partner_id=" . $parentID . " ORDER BY partner_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->partner_position;
              }

              ?>
              <label class="control-label"
                     for="partner_position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>
                (Partner)</label>
              <select name="partner_position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="partner_position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for"
                      multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY partner_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->partner_id;
                $nvPositionName = $looking->partner_position;
                $nvSelected = "";
                if (in_array($nvPositionID, $partner_position_looking_4)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="w3npartnerpos partnerpoaition_4">
            </div>
            <?php
              }

              if (in_array('5', $partners_position_looking_for)) {
                ?>
            <div class="w3npartnerpos partnerpoaition_5 form-group col-lg-4 col-md-6">
              <?php
                  $parentID = 5;
                  $position_lookingtbl = $wpdb->prefix . "partners_position";
              $lookingfordataTitle = $wpdb->get_results("SELECT partner_position FROM $position_lookingtbl WHERE partner_id=" . $parentID . " ORDER BY partner_id ASC");
              $nvPartentTitle = "";
              if (!empty($lookingfordataTitle)) {
              $nvPartentTitle = $lookingfordataTitle[0]->partner_position;
              }

              ?>
              <label class="control-label"
                     for="partner_position_looking_<?php echo $parentID; ?>"><?php echo $nvPartentTitle; ?>
                (Partner)</label>
              <select name="partner_position_looking_<?php echo $parentID; ?>[]" class="multi-select"
                      id="partner_position_looking_<?php echo $parentID; ?>" placeholder="Position Looking for"
                      multiple>
                <?php
                    $lookingfordata = $wpdb->get_results("SELECT * FROM $position_lookingtbl WHERE parent_id=" . $parentID . " ORDER BY partner_id ASC");
                if ($lookingfordata) {
                foreach ($lookingfordata as $looking) {
                $nvPositionID = $looking->partner_id;
                $nvPositionName = $looking->partner_position;
                $nvSelected = "";
                if (in_array($nvPositionID, $partner_position_looking_5)) {
                $nvSelected = "selected";
                }
                ?>
                <option
                  value="<?php echo $nvPositionID; ?>" <?php echo $nvSelected; ?>><?php echo $nvPositionName; ?></option>
                <?php
                      }
                    }
                    ?>
              </select>
            </div>
            <?php
              } else {
                ?>
            <div class="w3npartnerpos partnerpoaition_5">
            </div>
            <?php
              }
            } else {
              ?>
            <div class="w3npartnerpos partnerpoaition_1">

            </div>

            <div class="w3npartnerpos partnerpoaition_2">
            </div>

            <div class="w3npartnerpos partnerpoaition_3">
            </div>

            <div class="w3npartnerpos partnerpoaition_4">
            </div>

            <div class="w3npartnerpos partnerpoaition_5">
            </div>
            <?php
            }
            ?>


          </div>
          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="yacht_type"><i class="fa fa-ship"></i> Yacht Type</label>

              <select name="yacht_type[]" id="yacht_type" class="multi-select" multiple>
                <option value="MOTOR" >MOTOR
                </option>
                <option value="SAIL" >SAIL
                </option>
                <option value="PRIVATE" >PRIVATE
                </option>
                <option value="CHARTER">CHARTER
                </option>
                <option value="SHORE BASED" >SHORE BASED
                </option>
                <option value="SEASONAL" >SEASONAL
                </option>
                <option value="FREELANCE" >FREELANCE
                </option>
                <option value="PERMANENT" >PERMANENT
                </option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="yacht_size"><i class="fa fa-expand"></i> YACHT SIZE experience (please select all that apply)</label>
              <select name="yacht_size[]" id="yacht_size" class="multi-select" multiple>
                <option value="Under 24m" >Under 24m
                </option>
                <option value="24m-30m" >24m-30m
                </option>
                <option value="30m-45m" >30m-45m
                </option>
                <option value="45m-60m" >45m-60m
                </option>
                <option value="60m-75m" >60m-75m
                </option>
                <option value="75m-90m" >75m-90m
                </option>
                <option value="90m-110m" >90m-110m
                </option>
                <option value="110m+" >110m+
                </option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="minimum_salary"><i class="fa fa-money"></i> MINIMUM SALARY expectations in Euro (or currency
                equivalent) *</label>
              <select name="minimum_salary" id="minimum_salary" class="nice-select">
                <option data-display="select"></option>
                <option value="1500" >1500
                </option>
                <option value="2000" >2000
                </option>
                <option value="2500">2500
                </option>
                <option value="3000" 3000
                </option>
                <option value="3500" >3500
                </option>
                <option value="4000">4000
                </option>
                <option value="4500" >4500
                </option>
                <option value="5000" >5000
                </option>
                <option value="5500" <?php if ($minimum_salary == '5500') {
                  echo 'selected';
                } ?>>5500
                </option>
                <option value="6000" <?php if ($minimum_salary == '6000') {
                  echo 'selected';
                } ?>>6000
                </option>
                <option value="6500" <?php if ($minimum_salary == '6500') {
                  echo 'selected';
                } ?>>6500
                </option>
                <option value="7000" <?php if ($minimum_salary == '7000') {
                  echo 'selected';
                } ?>>7000
                </option>
                <option value="7500" <?php if ($minimum_salary == '7500') {
                  echo 'selected';
                } ?>>7500
                </option>
                <option value="8000" <?php if ($minimum_salary == '8000') {
                  echo 'selected';
                } ?>>8000
                </option>
                <option value="8500" <?php if ($minimum_salary == '8500') {
                  echo 'selected';
                } ?>>8500
                </option>
                <option value="9000" <?php if ($minimum_salary == '9000') {
                  echo 'selected';
                } ?>>9000
                </option>
                <option value="10000" <?php if ($minimum_salary == '10000') {
                  echo 'selected';
                } ?>>10000
                </option>
                <option value="11000" <?php if ($minimum_salary == '11000') {
                  echo 'selected';
                } ?>>11000
                </option>
                <option value="12000" <?php if ($minimum_salary == '12000') {
                  echo 'selected';
                } ?>>12000
                </option>
                <option value="13000" <?php if ($minimum_salary == '13000') {
                  echo 'selected';
                } ?>>13000
                </option>
                <option value="14000" <?php if ($minimum_salary == '14000') {
                  echo 'selected';
                } ?>>14000
                </option>
              </select>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="itinerary"><i class="fa fa-list"></i> Itinerary</label>
              <select name="itinerary[]" id="itinerary" class="multi-select" multiple>

                <option value="World Cruising" <?php if (in_array("World Cruising", $itinerary)) {
                  echo 'selected';
                } ?>>World Cruising
                </option>
                <option value="Med/Caribbean" <?php if (in_array("Med/Caribbean", $itinerary)) {
                  echo 'selected';
                } ?>>Med/Caribbean
                </option>
                <option value="Single season" <?php if (in_array("Single season", $itinerary)) {
                  echo 'selected';
                } ?>>Single season
                </option>
              </select>
            </div>
            <div class="form-group col-lg-4 col-md-6">
              <label class="control-label" for="comment"><i class="fa fa-comments"></i> Additional comments</label>
              <textarea name="comment" id="comment" class="form-control"
                        style="height: 100px;"><?php echo $comment; ?></textarea>
            </div>
          </div>
          <div class="row">

            <div class="form-group col-lg-4 col-md-6">
              <label>CV</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="cvupload" name="cvupload">
              <label for="cvupload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label>STCW</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="stcwupload" name="stcwupload">
              <label for="stcwupload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label>ENG1</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="eng1upload" name="eng1upload">
              <label for="eng1upload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>


            <div class="form-group col-lg-4 col-md-6">
              <label>Passport</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="passportupload"
                     name="passportupload">
              <label for="passportupload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label>Visa</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="visaupload" name="visaupload">
              <label for="visaupload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label>CoC</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="cocupload" name="cocupload">
              <label for="cocupload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>


            <div class="form-group col-lg-4 col-md-6">
              <label>Reference 1</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="reference1upload"
                     name="reference1upload">
              <label for="reference1upload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label>Reference 2</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="reference2upload"
                     name="reference2upload">
              <label for="reference2upload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label>Reference 3</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="reference3upload"
                     name="reference3upload">
              <label for="reference3upload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>

            <div class="form-group col-lg-4 col-md-6">
              <label>Other</label>
              <input type="file" class="form-control-file inputfile inputfile-1" id="otherupload" name="otherupload">
              <label for="otherupload" class="file_upload_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                  <path
                    d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                </svg>
                <span></span></label>
            </div>

            <div class="col-lg-8">
            </div>

            <div class="col-lg-12 form-group">
              <input class="form-check-input" type="checkbox" value="" id="termsconditionchk" name="termsconditionchk">
              <label class="form-check-label" for="termsconditionchk">
                By registering with The Crew Hunter and using this website, I consent to The Crew Hunter collecting and
                processing my personal data and disclosing this information to prospective employers. I acknowledge that
                I may receive In House Marketing but my contact details will not be provided to any third parties for
                marketing purposes. I can remove my data from mailing lists by contacting info@thecrewhunter.com <a
                href="#">Click here for our full Terms and Conditions.</a>
              </label>
            </div>

            <div class="col-lg-12">
              <input class="btn btn-primary" type="submit" value="Submit" id="reg_submit">
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
</section>

</body>
<script src="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/js/jquery.min.js"></script>
<script src="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/js/bootstrap.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://register.thecrewhunter.com/wp-content/themes/thecrewhunter/js/jquery.validate.min.js"></script>
<script type="text/javascript">

  // In your Javascript (external .js resource or <script> tag)
  $(document).ready(function () {
    var $select = $('.nice-select').select2({
      placeholder: 'Select an option'
    });
    /*
* When you change the value the select via select2, it triggers
* a 'change' event, but the jquery validation plugin
* only re-validates on 'blur'
*/
    $select.on('change', function () {
      $(this).valid();
      $(this).trigger('blur');
    });
    $('#frm_registration').validate({ignore: []});

  });
</script>
</html>
