<?php

/*
 * This file is part of distributors.
 * 
 * (c) Georg Preissl 2021 <g.preissl@heidlmair.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/georgpreissl/contao-distributors-bundle
 */

use Contao\Backend;
use Contao\DC_Table;
use Contao\Input;

/**
 * Table tl_distributors
 */
$GLOBALS['TL_DCA']['tl_distributors'] = array(

    // Config
    'config'      => array(
        'dataContainer'    => 'Table',
        'enableVersioning' => true,
        'sql'              => array(
            'keys' => array(
                'id' => 'primary'
            )
        ),
    ),
    'edit'        => array(
        'buttons_callback' => array(
            array('tl_distributors', 'buttonsCallback')
        )
    ),
    'list'        => array(
        'sorting'           => array(
            'mode'        => 2,
            'fields'      => array('title'),
            'flag'        => 1,
            'panelLayout' => 'filter;sort,search,limit'
        ),
        'label'             => array(
            'fields' => array('title'),
            'format' => '%s',
        ),
        'global_operations' => array(
            'all' => array(
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations'        => array(
            'edit'   => array(
                'label' => &$GLOBALS['TL_LANG']['tl_distributors']['edit'],
                'href'  => 'act=edit',
                'icon'  => 'edit.gif'
            ),
            'copy'   => array(
                'label' => &$GLOBALS['TL_LANG']['tl_distributors']['copy'],
                'href'  => 'act=copy',
                'icon'  => 'copy.gif'
            ),
            'delete' => array(
                'label'      => &$GLOBALS['TL_LANG']['tl_distributors']['delete'],
                'href'       => 'act=delete',
                'icon'       => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'show'   => array(
                'label'      => &$GLOBALS['TL_LANG']['tl_distributors']['show'],
                'href'       => 'act=show',
                'icon'       => 'show.gif',
                'attributes' => 'style="margin-right:3px"'
            ),
        )
    ),
    // Palettes
    'palettes'    => array(
        '__selector__' => array('addSubpalette'),
        'default'      => '{first_legend},title,country,selectField,checkboxField,multitextField;{second_legend},addSubpalette'
    ),
    // Subpalettes
    'subpalettes' => array(
        'addSubpalette' => 'textareaField',
    ),
    // Fields
    'fields'      => array(
        'id'             => array(
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp'         => array(
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'title'          => array(
            'inputType' => 'text',
            'exclude'   => true,
            'search'    => true,
            'filter'    => true,
            'sorting'   => true,
            'flag'      => 1,
            'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'country'    => array(
            'inputType' => 'select',
            'exclude'   => true,
            'search'    => true,
            'filter'    => true,
            'sorting'   => true,
            'reference' => $GLOBALS['TL_LANG']['tl_distributors'],
            'options'   => array(
                "AF" => "Afghanistan",
                "AL" => "Albania",
                "DZ" => "Algeria",
                "AS" => "American Samoa",
                "AD" => "Andorra",
                "AO" => "Angola",
                "AI" => "Anguilla",
                "AQ" => "Antarctica",
                "AG" => "Antigua and Barbuda",
                "AR" => "Argentina",
                "AM" => "Armenia",
                "AW" => "Aruba",
                "AU" => "Australia",
                "AT" => "Austria",
                "AZ" => "Azerbaijan",
                "BS" => "Bahamas",
                "BH" => "Bahrain",
                "BD" => "Bangladesh",
                "BB" => "Barbados",
                "BY" => "Belarus",
                "BE" => "Belgium",
                "BZ" => "Belize",
                "BJ" => "Benin",
                "BM" => "Bermuda",
                "BT" => "Bhutan",
                "BO" => "Bolivia",
                "BA" => "Bosnia and Herzegovina",
                "BW" => "Botswana",
                "BV" => "Bouvet Island",
                "BR" => "Brazil",
                "BQ" => "British Antarctic Territory",
                "IO" => "British Indian Ocean Territory",
                "VG" => "British Virgin Islands",
                "BN" => "Brunei",
                "BG" => "Bulgaria",
                "BF" => "Burkina Faso",
                "BI" => "Burundi",
                "KH" => "Cambodia",
                "CM" => "Cameroon",
                "CA" => "Canada",
                "CT" => "Canton and Enderbury Islands",
                "CV" => "Cape Verde",
                "KY" => "Cayman Islands",
                "CF" => "Central African Republic",
                "TD" => "Chad",
                "CL" => "Chile",
                "CN" => "China",
                "CX" => "Christmas Island",
                "CC" => "Cocos [Keeling] Islands",
                "CO" => "Colombia",
                "KM" => "Comoros",
                "CG" => "Congo - Brazzaville",
                "CD" => "Congo - Kinshasa",
                "CK" => "Cook Islands",
                "CR" => "Costa Rica",
                "HR" => "Croatia",
                "CU" => "Cuba",
                "CY" => "Cyprus",
                "CZ" => "Czech Republic",
                "CI" => "Côte d’Ivoire",
                "DK" => "Denmark",
                "DJ" => "Djibouti",
                "DM" => "Dominica",
                "DO" => "Dominican Republic",
                "NQ" => "Dronning Maud Land",
                "DD" => "East Germany",
                "EC" => "Ecuador",
                "EG" => "Egypt",
                "SV" => "El Salvador",
                "GQ" => "Equatorial Guinea",
                "ER" => "Eritrea",
                "EE" => "Estonia",
                "ET" => "Ethiopia",
                "FK" => "Falkland Islands",
                "FO" => "Faroe Islands",
                "FJ" => "Fiji",
                "FI" => "Finland",
                "FR" => "France",
                "GF" => "French Guiana",
                "PF" => "French Polynesia",
                "TF" => "French Southern Territories",
                "FQ" => "French Southern and Antarctic Territories",
                "GA" => "Gabon",
                "GM" => "Gambia",
                "GE" => "Georgia",
                "DE" => "Germany",
                "GH" => "Ghana",
                "GI" => "Gibraltar",
                "GR" => "Greece",
                "GL" => "Greenland",
                "GD" => "Grenada",
                "GP" => "Guadeloupe",
                "GU" => "Guam",
                "GT" => "Guatemala",
                "GG" => "Guernsey",
                "GN" => "Guinea",
                "GW" => "Guinea-Bissau",
                "GY" => "Guyana",
                "HT" => "Haiti",
                "HM" => "Heard Island and McDonald Islands",
                "HN" => "Honduras",
                "HK" => "Hong Kong SAR China",
                "HU" => "Hungary",
                "IS" => "Iceland",
                "IN" => "India",
                "ID" => "Indonesia",
                "IR" => "Iran",
                "IQ" => "Iraq",
                "IE" => "Ireland",
                "IM" => "Isle of Man",
                "IL" => "Israel",
                "IT" => "Italy",
                "JM" => "Jamaica",
                "JP" => "Japan",
                "JE" => "Jersey",
                "JT" => "Johnston Island",
                "JO" => "Jordan",
                "KZ" => "Kazakhstan",
                "KE" => "Kenya",
                "KI" => "Kiribati",
                "KW" => "Kuwait",
                "KG" => "Kyrgyzstan",
                "LA" => "Laos",
                "LV" => "Latvia",
                "LB" => "Lebanon",
                "LS" => "Lesotho",
                "LR" => "Liberia",
                "LY" => "Libya",
                "LI" => "Liechtenstein",
                "LT" => "Lithuania",
                "LU" => "Luxembourg",
                "MO" => "Macau SAR China",
                "MK" => "Macedonia",
                "MG" => "Madagascar",
                "MW" => "Malawi",
                "MY" => "Malaysia",
                "MV" => "Maldives",
                "ML" => "Mali",
                "MT" => "Malta",
                "MH" => "Marshall Islands",
                "MQ" => "Martinique",
                "MR" => "Mauritania",
                "MU" => "Mauritius",
                "YT" => "Mayotte",
                "FX" => "Metropolitan France",
                "MX" => "Mexico",
                "FM" => "Micronesia",
                "MI" => "Midway Islands",
                "MD" => "Moldova",
                "MC" => "Monaco",
                "MN" => "Mongolia",
                "ME" => "Montenegro",
                "MS" => "Montserrat",
                "MA" => "Morocco",
                "MZ" => "Mozambique",
                "MM" => "Myanmar [Burma]",
                "NA" => "Namibia",
                "NR" => "Nauru",
                "NP" => "Nepal",
                "NL" => "Netherlands",
                "AN" => "Netherlands Antilles",
                "NT" => "Neutral Zone",
                "NC" => "New Caledonia",
                "NZ" => "New Zealand",
                "NI" => "Nicaragua",
                "NE" => "Niger",
                "NG" => "Nigeria",
                "NU" => "Niue",
                "NF" => "Norfolk Island",
                "KP" => "North Korea",
                "VD" => "North Vietnam",
                "MP" => "Northern Mariana Islands",
                "NO" => "Norway",
                "OM" => "Oman",
                "PC" => "Pacific Islands Trust Territory",
                "PK" => "Pakistan",
                "PW" => "Palau",
                "PS" => "Palestinian Territories",
                "PA" => "Panama",
                "PZ" => "Panama Canal Zone",
                "PG" => "Papua New Guinea",
                "PY" => "Paraguay",
                "YD" => "People's Democratic Republic of Yemen",
                "PE" => "Peru",
                "PH" => "Philippines",
                "PN" => "Pitcairn Islands",
                "PL" => "Poland",
                "PT" => "Portugal",
                "PR" => "Puerto Rico",
                "QA" => "Qatar",
                "RO" => "Romania",
                "RU" => "Russia",
                "RW" => "Rwanda",
                "RE" => "Réunion",
                "BL" => "Saint Barthélemy",
                "SH" => "Saint Helena",
                "KN" => "Saint Kitts and Nevis",
                "LC" => "Saint Lucia",
                "MF" => "Saint Martin",
                "PM" => "Saint Pierre and Miquelon",
                "VC" => "Saint Vincent and the Grenadines",
                "WS" => "Samoa",
                "SM" => "San Marino",
                "SA" => "Saudi Arabia",
                "SN" => "Senegal",
                "RS" => "Serbia",
                "CS" => "Serbia and Montenegro",
                "SC" => "Seychelles",
                "SL" => "Sierra Leone",
                "SG" => "Singapore",
                "SK" => "Slovakia",
                "SI" => "Slovenia",
                "SB" => "Solomon Islands",
                "SO" => "Somalia",
                "ZA" => "South Africa",
                "GS" => "South Georgia and the South Sandwich Islands",
                "KR" => "South Korea",
                "ES" => "Spain",
                "LK" => "Sri Lanka",
                "SD" => "Sudan",
                "SR" => "Suriname",
                "SJ" => "Svalbard and Jan Mayen",
                "SZ" => "Swaziland",
                "SE" => "Sweden",
                "CH" => "Switzerland",
                "SY" => "Syria",
                "ST" => "São Tomé and Príncipe",
                "TW" => "Taiwan",
                "TJ" => "Tajikistan",
                "TZ" => "Tanzania",
                "TH" => "Thailand",
                "TL" => "Timor-Leste",
                "TG" => "Togo",
                "TK" => "Tokelau",
                "TO" => "Tonga",
                "TT" => "Trinidad and Tobago",
                "TN" => "Tunisia",
                "TR" => "Turkey",
                "TM" => "Turkmenistan",
                "TC" => "Turks and Caicos Islands",
                "TV" => "Tuvalu",
                "UM" => "U.S. Minor Outlying Islands",
                "PU" => "U.S. Miscellaneous Pacific Islands",
                "VI" => "U.S. Virgin Islands",
                "UG" => "Uganda",
                "UA" => "Ukraine",
                "SU" => "Union of Soviet Socialist Republics",
                "AE" => "United Arab Emirates",
                "GB" => "United Kingdom",
                "US" => "United States",
                "ZZ" => "Unknown or Invalid Region",
                "UY" => "Uruguay",
                "UZ" => "Uzbekistan",
                "VU" => "Vanuatu",
                "VA" => "Vatican City",
                "VE" => "Venezuela",
                "VN" => "Vietnam",
                "WK" => "Wake Island",
                "WF" => "Wallis and Futuna",
                "EH" => "Western Sahara",
                "YE" => "Yemen",
                "ZM" => "Zambia",
                "ZW" => "Zimbabwe",
                "AX" => "Åland Islands",
            ),
            //'foreignKey'            => 'tl_user.name',
            //'options_callback'      => array('CLASS', 'METHOD'),
            'eval'      => array('includeBlankOption' => true, 'tl_class' => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
            //'relation'  => array('type' => 'hasOne', 'load' => 'lazy')
        ),
        'checkboxField'  => array(
            'inputType' => 'select',
            'exclude'   => true,
            'search'    => true,
            'filter'    => true,
            'sorting'   => true,
            'reference' => $GLOBALS['TL_LANG']['tl_distributors'],
            'options'   => array('firstoption', 'secondoption'),
            //'foreignKey'            => 'tl_user.name',
            //'options_callback'      => array('CLASS', 'METHOD'),
            'eval'      => array('includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''",
            //'relation'  => array('type' => 'hasOne', 'load' => 'lazy')
        ),
        'multitextField' => array(
            'inputType' => 'text',
            'exclude'   => true,
            'search'    => true,
            'filter'    => true,
            'sorting'   => true,
            'eval'      => array('multiple' => true, 'size' => 4, 'decodeEntities' => true, 'tl_class' => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'addSubpalette'  => array(
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50 clr'),
            'sql'       => "char(1) NOT NULL default ''"
        ),
        'textareaField'  => array(
            'inputType' => 'textarea',
            'exclude'   => true,
            'search'    => true,
            'filter'    => true,
            'sorting'   => true,
            'eval'      => array('rte' => 'tinyMCE', 'tl_class' => 'clr'),
            'sql'       => 'text NULL'
        )
    )
);

/**
 * Class tl_distributors
 */
class tl_distributors extends Backend
{
    /**
     * @param $arrButtons
     * @param  DC_Table $dc
     * @return mixed
     */
    public function buttonsCallback($arrButtons, DC_Table $dc)
    {
        if (Input::get('act') === 'edit')
        {
            $arrButtons['customButton'] = '<button type="submit" name="customButton" id="customButton" class="tl_submit customButton" accesskey="x">' . $GLOBALS['TL_LANG']['tl_distributors']['customButton'] . '</button>';
        }

        return $arrButtons;
    }
}
