<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fun with arrays</title>
  <style>
    body {
      font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
      font-size: 1rem;
      color: #000;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #ddd;
    }
    #container {
      box-sizing: border-box;
      position: relative;
      width: calc(100% - 6rem);
      padding: 3rem;
      margin: 3rem;
      background-color: #fff;
    }
    h2 {
      margin: 0 0 1rem 0;
    }
    p, hr {
      margin: 0 0 2rem 0;
    }
    .countries-table {
      border-collapse: collapse;
      margin: 0 0 2rem 0;
    }
    th {
      background-color: #eee;
      border: 1px solid #ccc;
      font-size: 0.75rem;
      height: auto;
      letter-spacing: 2px;
      padding: 0.5rem;
      text-align: left;
      text-transform: uppercase;
    }
    td {
      border: 1px solid #ccc;
      padding: 0.5rem;
    }
    .key {
      color: #000;
      font-family: "Andale Mono", "Lucida Console", Courier, monospace;
    }
  </style>

</head>
<body>
  
<?php
  function rename_countries ($countries) {
    $countries['United States'] = 'United States';
    $countries['Canada'] = 'Canada';
    $countries['Andorra'] = 'Andorra';
    $countries['United Arab Emirates'] = 'United Arab Emirates';
    $countries['Afghanistan'] = 'Afghanistan';
    $countries['Antigua and Barbuda'] = 'Antigua and Barbuda';
    $countries['Anguilla'] = 'Anguilla';
    $countries['Albania'] = 'Albania';
    $countries['Armenia'] = 'Armenia';
    $countries['Angola'] = 'Angola';
    $countries['Antarctica'] = 'Antarctica';
    $countries['Argentina'] = 'Argentina';
    $countries['American Samoa'] = 'American Samoa';
    $countries['Austria'] = 'Austria';
    $countries['Australia'] = 'Australia';
    $countries['Aruba'] = 'Aruba';
    $countries['Aland Islands'] = 'Aland Islands';
    $countries['Azerbaijan'] = 'Azerbaijan';
    $countries['Bosnia and Herzegovina'] = 'Bosnia and Herzegovina';
    $countries['Barbados'] = 'Barbados';
    $countries['Bangladesh'] = 'Bangladesh';
    $countries['Belgium'] = 'Belgium';
    $countries['Burkina Faso'] = 'Burkina Faso';
    $countries['Bulgaria'] = 'Bulgaria';
    $countries['Bahrain'] = 'Bahrain';
    $countries['Burundi'] = 'Burundi';
    $countries['Benin'] = 'Benin';
    $countries['Saint Barthélemy'] = 'Saint Barthélemy';
    $countries['Bermuda'] = 'Bermuda';
    $countries['Brunei Darussalam'] = 'Brunei Darussalam';
    $countries['Bolivia, Plurinational State of'] = 'Bolivia, Plurinational State of';
    $countries['Bonaire, Sint Eustatius and Saba'] = 'Bonaire, Sint Eustatius and Saba';
    $countries['Brazil'] = 'Brazil';
    $countries['Bahamas'] = 'Bahamas';
    $countries['Bhutan'] = 'Bhutan';
    $countries['Bouvet Island'] = 'Bouvet Island';
    $countries['Botswana'] = 'Botswana';
    $countries['Belarus'] = 'Belarus';
    $countries['Belize'] = 'Belize';
    $countries['Canada'] = 'Canada';
    $countries['Cocos (Keeling) Islands'] = 'Cocos (Keeling) Islands';
    $countries['Congo, the Democratic Republic of the'] = 'Congo, the Democratic Republic of the';
    $countries['Central African Republic'] = 'Central African Republic';
    $countries['Congo'] = 'Congo';
    $countries['Switzerland'] = 'Switzerland';
    $countries['Cote d\'Ivoire'] = 'Cote d\'Ivoire';
    $countries['Cook Islands'] = 'Cook Islands';
    $countries['Chile'] = 'Chile';
    $countries['Cameroon'] = 'Cameroon';
    $countries['China'] = 'China';
    $countries['Colombia'] = 'Colombia';
    $countries['Costa Rica'] = 'Costa Rica';
    $countries['Cuba'] = 'Cuba';
    $countries['Cape Verde'] = 'Cape Verde';
    $countries['Curaçao'] = 'Curaçao';
    $countries['Christmas Island'] = 'Christmas Island';
    $countries['Cyprus'] = 'Cyprus';
    $countries['Czech Republic'] = 'Czech Republic';
    $countries['Germany'] = 'Germany';
    $countries['Djibouti'] = 'Djibouti';
    $countries['Denmark'] = 'Denmark';
    $countries['Dominica'] = 'Dominica';
    $countries['Dominican Republic'] = 'Dominican Republic';
    $countries['Algeria'] = 'Algeria';
    $countries['Ecuador'] = 'Ecuador';
    $countries['Estonia'] = 'Estonia';
    $countries['Egypt'] = 'Egypt';
    $countries['Western Sahara'] = 'Western Sahara';
    $countries['Eritrea'] = 'Eritrea';
    $countries['Spain'] = 'Spain';
    $countries['Ethiopia'] = 'Ethiopia';
    $countries['Finland'] = 'Finland';
    $countries['Fiji'] = 'Fiji';
    $countries['Falkland Islands (Malvinas)'] = 'Falkland Islands (Malvinas)';
    $countries['Faroe Islands'] = 'Faroe Islands';
    $countries['France'] = 'France';
    $countries['Gabon'] = 'Gabon';
    $countries['United Kingdom'] = 'United Kingdom';
    $countries['Grenada'] = 'Grenada';
    $countries['Georgia'] = 'Georgia';
    $countries['French Guiana'] = 'French Guiana';
    $countries['Guernsey'] = 'Guernsey';
    $countries['Ghana'] = 'Ghana';
    $countries['Gibraltar'] = 'Gibraltar';
    $countries['Greenland'] = 'Greenland';
    $countries['Gambia'] = 'Gambia';
    $countries['Guinea'] = 'Guinea';
    $countries['Guadeloupe'] = 'Guadeloupe';
    $countries['Equatorial Guinea'] = 'Equatorial Guinea';
    $countries['Greece'] = 'Greece';
    $countries['South Georgia and the South Sandwich Islands'] = 'South Georgia and the South Sandwich Islands';
    $countries['Guatemala'] = 'Guatemala';
    $countries['Guinea-Bissau'] = 'Guinea-Bissau';
    $countries['Guyana'] = 'Guyana';
    $countries['Hong Kong'] = 'Hong Kong';
    $countries['Heard Island and McDonald Islands'] = 'Heard Island and McDonald Islands';
    $countries['Honduras'] = 'Honduras';
    $countries['Croatia'] = 'Croatia';
    $countries['Haiti'] = 'Haiti';
    $countries['Hungary'] = 'Hungary';
    $countries['Indonesia'] = 'Indonesia';
    $countries['Ireland'] = 'Ireland';
    $countries['Israel'] = 'Israel';
    $countries['Isle of Man'] = 'Isle of Man';
    $countries['India'] = 'India';
    $countries['British Indian Ocean Territory'] = 'British Indian Ocean Territory';
    $countries['Iraq'] = 'Iraq';
    $countries['Iran, Islamic Republic of'] = 'Iran, Islamic Republic of';
    $countries['Iceland'] = 'Iceland';
    $countries['Italy'] = 'Italy';
    $countries['Jersey'] = 'Jersey';
    $countries['Jamaica'] = 'Jamaica';
    $countries['Jordan'] = 'Jordan';
    $countries['Japan'] = 'Japan';
    $countries['Kenya'] = 'Kenya';
    $countries['Kyrgyzstan'] = 'Kyrgyzstan';
    $countries['Cambodia'] = 'Cambodia';
    $countries['Kiribati'] = 'Kiribati';
    $countries['Comoros'] = 'Comoros';
    $countries['Saint Kitts and Nevis'] = 'Saint Kitts and Nevis';
    $countries['Korea, Democratic People\'s Republic of'] = 'Korea, Democratic People\'s Republic of';
    $countries['Korea, Republic of'] = 'Korea, Republic of';
    $countries['Kuwait'] = 'Kuwait';
    $countries['Cayman Islands'] = 'Cayman Islands';
    $countries['Kazakhstan'] = 'Kazakhstan';
    $countries['Lao People\'s Democratic Republic'] = 'Lao People\'s Democratic Republic';
    $countries['Lebanon'] = 'Lebanon';
    $countries['Saint Lucia'] = 'Saint Lucia';
    $countries['Liechtenstein'] = 'Liechtenstein';
    $countries['Sri Lanka'] = 'Sri Lanka';
    $countries['Liberia'] = 'Liberia';
    $countries['Lesotho'] = 'Lesotho';
    $countries['Lithuania'] = 'Lithuania';
    $countries['Luxembourg'] = 'Luxembourg';
    $countries['Latvia'] = 'Latvia';
    $countries['Libyan Arab Jamahiriya'] = 'Libyan Arab Jamahiriya';
    $countries['Morocco'] = 'Morocco';
    $countries['Monaco'] = 'Monaco';
    $countries['Moldova, Republic of'] = 'Moldova, Republic of';
    $countries['Montenegro'] = 'Montenegro';
    $countries['Saint Martin (French part)'] = 'Saint Martin (French part)';
    $countries['Madagascar'] = 'Madagascar';
    $countries['Macedonia, the former Yugoslav Republic of'] = 'Macedonia, the former Yugoslav Republic of';
    $countries['Mali'] = 'Mali';
    $countries['Myanmar'] = 'Myanmar';
    $countries['Mongolia'] = 'Mongolia';
    $countries['Macao'] = 'Macao';
    $countries['Martinique'] = 'Martinique';
    $countries['Mauritania'] = 'Mauritania';
    $countries['Montserrat'] = 'Montserrat';
    $countries['Malta'] = 'Malta';
    $countries['Mauritius'] = 'Mauritius';
    $countries['Maldives'] = 'Maldives';
    $countries['Malawi'] = 'Malawi';
    $countries['Mexico'] = 'Mexico';
    $countries['Malaysia'] = 'Malaysia';
    $countries['Mozambique'] = 'Mozambique';
    $countries['Namibia'] = 'Namibia';
    $countries['New Caledonia'] = 'New Caledonia';
    $countries['Niger'] = 'Niger';
    $countries['Norfolk Island'] = 'Norfolk Island';
    $countries['Nigeria'] = 'Nigeria';
    $countries['Nicaragua'] = 'Nicaragua';
    $countries['Netherlands'] = 'Netherlands';
    $countries['Norway'] = 'Norway';
    $countries['Nepal'] = 'Nepal';
    $countries['Nauru'] = 'Nauru';
    $countries['Niue'] = 'Niue';
    $countries['New Zealand'] = 'New Zealand';
    $countries['Oman'] = 'Oman';
    $countries['Panama'] = 'Panama';
    $countries['Peru'] = 'Peru';
    $countries['French Polynesia'] = 'French Polynesia';
    $countries['Papua New Guinea'] = 'Papua New Guinea';
    $countries['Philippines'] = 'Philippines';
    $countries['Pakistan'] = 'Pakistan';
    $countries['Poland'] = 'Poland';
    $countries['Saint Pierre and Miquelon'] = 'Saint Pierre and Miquelon';
    $countries['Pitcairn'] = 'Pitcairn';
    $countries['Puerto Rico'] = 'Puerto Rico';
    $countries['Palestinian Territory, Occupied'] = 'Palestinian Territory, Occupied';
    $countries['Portugal'] = 'Portugal';
    $countries['Paraguay'] = 'Paraguay';
    $countries['Qatar'] = 'Qatar';
    $countries['Reunion'] = 'Reunion';
    $countries['Romania'] = 'Romania';
    $countries['Serbia'] = 'Serbia';
    $countries['Russian Federation'] = 'Russian Federation';
    $countries['Rwanda'] = 'Rwanda';
    $countries['Saudi Arabia'] = 'Saudi Arabia';
    $countries['Solomon Islands'] = 'Solomon Islands';
    $countries['Seychelles'] = 'Seychelles';
    $countries['Sudan'] = 'Sudan';
    $countries['Sweden'] = 'Sweden';
    $countries['Singapore'] = 'Singapore';
    $countries['Saint Helena, Ascension and Tristan da Cunha'] = 'Saint Helena, Ascension and Tristan da Cunha';
    $countries['Slovenia'] = 'Slovenia';
    $countries['Svalbard and Jan Mayen'] = 'Svalbard and Jan Mayen';
    $countries['Slovakia'] = 'Slovakia';
    $countries['Sierra Leone'] = 'Sierra Leone';
    $countries['San Marino'] = 'San Marino';
    $countries['Senegal'] = 'Senegal';
    $countries['Somalia'] = 'Somalia';
    $countries['Suriname'] = 'Suriname';
    $countries['South Sudan'] = 'South Sudan';
    $countries['Sao Tome and Principe'] = 'Sao Tome and Principe';
    $countries['El Salvador'] = 'El Salvador';
    $countries['Sint Maarten (Dutch part)'] = 'Sint Maarten (Dutch part)';
    $countries['Syrian Arab Republic'] = 'Syrian Arab Republic';
    $countries['Swaziland'] = 'Swaziland';
    $countries['Turks and Caicos Islands'] = 'Turks and Caicos Islands';
    $countries['Chad'] = 'Chad';
    $countries['French Southern Territories'] = 'French Southern Territories';
    $countries['Togo'] = 'Togo';
    $countries['Thailand'] = 'Thailand';
    $countries['Tajikistan'] = 'Tajikistan';
    $countries['Tokelau'] = 'Tokelau';
    $countries['Timor-Leste'] = 'Timor-Leste';
    $countries['Turkmenistan'] = 'Turkmenistan';
    $countries['Tunisia'] = 'Tunisia';
    $countries['Tonga'] = 'Tonga';
    $countries['Turkey'] = 'Turkey';
    $countries['Trinidad and Tobago'] = 'Trinidad and Tobago';
    $countries['Tuvalu'] = 'Tuvalu';
    $countries['Taiwan'] = 'Taiwan';
    $countries['Tanzania, United Republic of'] = 'Tanzania, United Republic of';
    $countries['Ukraine'] = 'Ukraine';
    $countries['Uganda'] = 'Uganda';
    $countries['United States Minor Outlying Islands'] = 'United States Minor Outlying Islands';
    $countries['United States'] = 'United States';
    $countries['Uruguay'] = 'Uruguay';
    $countries['Uzbekistan'] = 'Uzbekistan';
    $countries['Holy See (Vatican City State)'] = 'Holy See (Vatican City State)';
    $countries['Saint Vincent and the Grenadines'] = 'Saint Vincent and the Grenadines';
    $countries['Venezuela, Bolivarian Republic of'] = 'Venezuela, Bolivarian Republic of';
    $countries['Virgin Islands, British'] = 'Virgin Islands, British';
    $countries['Virgin Islands (US)'] = 'Virgin Islands (US)';
    $countries['Viet Nam'] = 'Viet Nam';
    $countries['Vanuatu'] = 'Vanuatu';
    $countries['Wallis and Futuna'] = 'Wallis and Futuna';
    $countries['Samoa'] = 'Samoa';
    $countries['Yemen'] = 'Yemen';
    $countries['Mayotte'] = 'Mayotte';
    $countries['South Africa'] = 'South Africa';
    $countries['Zambia'] = 'Zambia';
    $countries['Zimbabwe'] = 'Zimbabwe';
    return $countries;
  }
  

  $my_countries = [];
  $my_countries['Wakanda'] = 'Wakanda';
  $countries_list = rename_countries($my_countries);

  // add_filter('woocommerce_countries', 'rename_countries');
?>

  <div id="container">
    <h2>Example: PHP array keys with spaces and special characters</h2>
    <h3>Countries (Salesforce)</h3>
    <table class="countries-table">
      <thead>
        <tr>
          <th>Key</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
      <?php
        foreach ($countries_list as $key => $value) {
          echo '<tr>' . PHP_EOL;
          echo '<td class="key">' . $countries_list[$key] . '</td>' . PHP_EOL;
          echo '<td>' . $value . '</td>' . PHP_EOL;
          echo '</tr>' . PHP_EOL; 
        }
      ?>
      </tbody>
    </table>
  </div>

</body>
</html>
