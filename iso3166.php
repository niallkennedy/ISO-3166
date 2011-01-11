<?php
/**
 * Reference countries of the world and their regions as defined in the ISO 3166 standard.
 * Based on the {@link http://alioth.debian.org/projects/pkg-isocodes/ Debian ISO codes} interpretation.
 *
 * @link http://www.iso.org/iso/country_codes.htm ISO 3166 maintenance agency
 *
 * @author Niall Kennedy <niall@niallkennedy.com>
 * @version 1.0
 * @copyright Public Domain
 */

if ( !function_exists( '_' ) ) :
function _( $str, $domain='' ) {
    return $str;
}
endif;


class ISO_3166 {
    /**
     * A list of ISO 3166-1 countries.
	 * Countries and territories are provided as defined by ISO. You may wish to edit your use of these values to avoid controversy, such as "Taiwan, Province of China" or "Palestinian Territory, Occupied."
	 *
	 * @link http://www.iso.org/iso/country_codes.htm ISO 3166 maintenance agency
     * @return array ISO 3166-1 alpha-2 country codes with name and official name English values
     */
    public static function get_countries() {
    	return array(
'AF' => array(
	'name' => _( 'Afghanistan' ),
	'official_name' => _( 'Islamic Republic of Afghanistan' )
),
'AX' => array(
	'name' => _( 'Åland Islands' )
),
'AL' => array(
	'name' => _( 'Albania' ),
	'official_name' => _( 'Republic of Albania' )
),
'DZ' => array(
	'name' => _( 'Algeria' ),
	'official_name' => _( 'People\'s Democratic Republic of Algeria' )
),
'AS' => array(
	'name' => _( 'American Samoa' )
),
'AD' => array(
	'name' => _( 'Andorra' ),
	'official_name' => _( 'Principality of Andorra' )
),
'AO' => array(
	'name' => _( 'Angola' ),
	'official_name' => _( 'Republic of Angola' )
),
'AI' => array(
	'name' => _( 'Anguilla' )
),
'AQ' => array(
	'name' => _( 'Antarctica' )
),
'AG' => array(
	'name' => _( 'Antigua and Barbuda' )
),
'AR' => array(
	'name' => _( 'Argentina' ),
	'official_name' => _( 'Argentine Republic' )
),
'AM' => array(
	'name' => _( 'Armenia' ),
	'official_name' => _( 'Republic of Armenia' )
),
'AW' => array(
	'name' => _( 'Aruba' )
),
'AU' => array(
	'name' => _( 'Australia' )
),
'AT' => array(
	'name' => _( 'Austria' ),
	'official_name' => _( 'Republic of Austria' )
),
'AZ' => array(
	'name' => _( 'Azerbaijan' ),
	'official_name' => _( 'Republic of Azerbaijan' )
),
'BS' => array(
	'name' => _( 'Bahamas' ),
	'official_name' => _( 'Commonwealth of the Bahamas' )
),
'BH' => array(
	'name' => _( 'Bahrain' ),
	'official_name' => _( 'Kingdom of Bahrain' )
),
'BD' => array(
	'name' => _( 'Bangladesh' ),
	'official_name' => _( 'People\'s Republic of Bangladesh' )
),
'BB' => array(
	'name' => _( 'Barbados' )
),
'BY' => array(
	'name' => _( 'Belarus' ),
	'official_name' => _( 'Republic of Belarus' )
),
'BE' => array(
	'name' => _( 'Belgium' ),
	'official_name' => _( 'Kingdom of Belgium' )
),
'BZ' => array(
	'name' => _( 'Belize' )
),
'BJ' => array(
	'name' => _( 'Benin' ),
	'official_name' => _( 'Republic of Benin' )
),
'BM' => array(
	'name' => _( 'Bermuda' )
),
'BT' => array(
	'name' => _( 'Bhutan' ),
	'official_name' => _( 'Kingdom of Bhutan' )
),
'BO' => array(
	'name' => _( 'Bolivia, Plurinational State of' ),
	'official_name' => _( 'Plurinational State of Bolivia' )
),
'BA' => array(
	'name' => _( 'Bosnia and Herzegovina' ),
	'official_name' => _( 'Republic of Bosnia and Herzegovina' )
),
'BW' => array(
	'name' => _( 'Botswana' ),
	'official_name' => _( 'Republic of Botswana' )
),
'BV' => array(
	'name' => _( 'Bouvet Island' )
),
'BR' => array(
	'name' => _( 'Brazil' ),
	'official_name' => _( 'Federative Republic of Brazil' )
),
'IO' => array(
	'name' => _( 'British Indian Ocean Territory' )
),
'BN' => array(
	'name' => _( 'Brunei Darussalam' )
),
'BG' => array(
	'name' => _( 'Bulgaria' ),
	'official_name' => _( 'Republic of Bulgaria' )
),
'BF' => array(
	'name' => _( 'Burkina Faso' )
),
'BI' => array(
	'name' => _( 'Burundi' ),
	'official_name' => _( 'Republic of Burundi' )
),
'KH' => array(
	'name' => _( 'Cambodia' ),
	'official_name' => _( 'Kingdom of Cambodia' )
),
'CM' => array(
	'name' => _( 'Cameroon' ),
	'official_name' => _( 'Republic of Cameroon' )
),
'CA' => array(
	'name' => _( 'Canada' )
),
'CV' => array(
	'name' => _( 'Cape Verde' ),
	'official_name' => _( 'Republic of Cape Verde' )
),
'KY' => array(
	'name' => _( 'Cayman Islands' )
),
'CF' => array(
	'name' => _( 'Central African Republic' )
),
'TD' => array(
	'name' => _( 'Chad' ),
	'official_name' => _( 'Republic of Chad' )
),
'CL' => array(
	'name' => _( 'Chile' ),
	'official_name' => _( 'Republic of Chile' )
),
'CN' => array(
	'name' => _( 'China' ),
	'official_name' => _( 'People\'s Republic of China' )
),
'CX' => array(
	'name' => _( 'Christmas Island' )
),
'CC' => array(
	'name' => _( 'Cocos (Keeling) Islands' )
),
'CO' => array(
	'name' => _( 'Colombia' ),
	'official_name' => _( 'Republic of Colombia' )
),
'KM' => array(
	'name' => _( 'Comoros' ),
	'official_name' => _( 'Union of the Comoros' )
),
'CG' => array(
	'name' => _( 'Congo' ),
	'official_name' => _( 'Republic of the Congo' )
),
'CD' => array(
	'name' => _( 'Congo, The Democratic Republic of the' )
),
'CK' => array(
	'name' => _( 'Cook Islands' )
),
'CR' => array(
	'name' => _( 'Costa Rica' ),
	'official_name' => _( 'Republic of Costa Rica' )
),
'CI' => array(
	'name' => _( 'Côte d\'Ivoire' ),
	'official_name' => _( 'Republic of Côte d\'Ivoire' )
),
'HR' => array(
	'name' => _( 'Croatia' ),
	'official_name' => _( 'Republic of Croatia' )
),
'CU' => array(
	'name' => _( 'Cuba' ),
	'official_name' => _( 'Republic of Cuba' )
),
'CY' => array(
	'name' => _( 'Cyprus' ),
	'official_name' => _( 'Republic of Cyprus' )
),
'CZ' => array(
	'name' => _( 'Czech Republic' )
),
'DK' => array(
	'name' => _( 'Denmark' ),
	'official_name' => _( 'Kingdom of Denmark' )
),
'DJ' => array(
	'name' => _( 'Djibouti' ),
	'official_name' => _( 'Republic of Djibouti' )
),
'DM' => array(
	'name' => _( 'Dominica' ),
	'official_name' => _( 'Commonwealth of Dominica' )
),
'DO' => array(
	'name' => _( 'Dominican Republic' )
),
'EC' => array(
	'name' => _( 'Ecuador' ),
	'official_name' => _( 'Republic of Ecuador' )
),
'EG' => array(
	'name' => _( 'Egypt' ),
	'official_name' => _( 'Arab Republic of Egypt' )
),
'SV' => array(
	'name' => _( 'El Salvador' ),
	'official_name' => _( 'Republic of El Salvador' )
),
'GQ' => array(
	'name' => _( 'Equatorial Guinea' ),
	'official_name' => _( 'Republic of Equatorial Guinea' )
),
'ER' => array(
	'name' => _( 'Eritrea' )
),
'EE' => array(
	'name' => _( 'Estonia' ),
	'official_name' => _( 'Republic of Estonia' )
),
'ET' => array(
	'name' => _( 'Ethiopia' ),
	'official_name' => _( 'Federal Democratic Republic of Ethiopia' )
),
'FK' => array(
	'name' => _( 'Falkland Islands (Malvinas)' )
),
'FO' => array(
	'name' => _( 'Faroe Islands' )
),
'FJ' => array(
	'name' => _( 'Fiji' ),
	'official_name' => _( 'Republic of the Fiji Islands' )
),
'FI' => array(
	'name' => _( 'Finland' ),
	'official_name' => _( 'Republic of Finland' )
),
'FR' => array(
	'name' => _( 'France' ),
	'official_name' => _( 'French Republic' )
),
'GF' => array(
	'name' => _( 'French Guiana' )
),
'PF' => array(
	'name' => _( 'French Polynesia' )
),
'TF' => array(
	'name' => _( 'French Southern Territories' )
),
'GA' => array(
	'name' => _( 'Gabon' ),
	'official_name' => _( 'Gabonese Republic' )
),
'GM' => array(
	'name' => _( 'Gambia' ),
	'official_name' => _( 'Republic of the Gambia' )
),
'GE' => array(
	'name' => _( 'Georgia' )
),
'DE' => array(
	'name' => _( 'Germany' ),
	'official_name' => _( 'Federal Republic of Germany' )
),
'GH' => array(
	'name' => _( 'Ghana' ),
	'official_name' => _( 'Republic of Ghana' )
),
'GI' => array(
	'name' => _( 'Gibraltar' )
),
'GR' => array(
	'name' => _( 'Greece' ),
	'official_name' => _( 'Hellenic Republic' )
),
'GL' => array(
	'name' => _( 'Greenland' )
),
'GD' => array(
	'name' => _( 'Grenada' )
),
'GP' => array(
	'name' => _( 'Guadeloupe' )
),
'GU' => array(
	'name' => _( 'Guam' )
),
'GT' => array(
	'name' => _( 'Guatemala' ),
	'official_name' => _( 'Republic of Guatemala' )
),
'GG' => array(
	'name' => _( 'Guernsey' )
),
'GN' => array(
	'name' => _( 'Guinea' ),
	'official_name' => _( 'Republic of Guinea' )
),
'GW' => array(
	'name' => _( 'Guinea-Bissau' ),
	'official_name' => _( 'Republic of Guinea-Bissau' )
),
'GY' => array(
	'name' => _( 'Guyana' ),
	'official_name' => _( 'Republic of Guyana' )
),
'HT' => array(
	'name' => _( 'Haiti' ),
	'official_name' => _( 'Republic of Haiti' )
),
'HM' => array(
	'name' => _( 'Heard Island and McDonald Islands' )
),
'VA' => array(
	'name' => _( 'Holy See (Vatican City State)' )
),
'HN' => array(
	'name' => _( 'Honduras' ),
	'official_name' => _( 'Republic of Honduras' )
),
'HK' => array(
	'name' => _( 'Hong Kong' ),
	'official_name' => _( 'Hong Kong Special Administrative Region of China' )
),
'HU' => array(
	'name' => _( 'Hungary' ),
	'official_name' => _( 'Republic of Hungary' )
),
'IS' => array(
	'name' => _( 'Iceland' ),
	'official_name' => _( 'Republic of Iceland' )
),
'IN' => array(
	'name' => _( 'India' ),
	'official_name' => _( 'Republic of India' )
),
'ID' => array(
	'name' => _( 'Indonesia' ),
	'official_name' => _( 'Republic of Indonesia' )
),
'IR' => array(
	'name' => _( 'Iran, Islamic Republic of' ),
	'official_name' => _( 'Islamic Republic of Iran' )
),
'IQ' => array(
	'name' => _( 'Iraq' ),
	'official_name' => _( 'Republic of Iraq' )
),
'IE' => array(
	'name' => _( 'Ireland' )
),
'IM' => array(
	'name' => _( 'Isle of Man' )
),
'IL' => array(
	'name' => _( 'Israel' ),
	'official_name' => _( 'State of Israel' )
),
'IT' => array(
	'name' => _( 'Italy' ),
	'official_name' => _( 'Italian Republic' )
),
'JM' => array(
	'name' => _( 'Jamaica' )
),
'JP' => array(
	'name' => _( 'Japan' )
),
'JE' => array(
	'name' => _( 'Jersey' )
),
'JO' => array(
	'name' => _( 'Jordan' ),
	'official_name' => _( 'Hashemite Kingdom of Jordan' )
),
'KZ' => array(
	'name' => _( 'Kazakhstan' ),
	'official_name' => _( 'Republic of Kazakhstan' )
),
'KE' => array(
	'name' => _( 'Kenya' ),
	'official_name' => _( 'Republic of Kenya' )
),
'KI' => array(
	'name' => _( 'Kiribati' ),
	'official_name' => _( 'Republic of Kiribati' )
),
'KP' => array(
	'name' => _( 'Korea, Democratic People\'s Republic of' ),
	'official_name' => _( 'Democratic People\'s Republic of Korea' )
),
'KR' => array(
	'name' => _( 'Korea, Republic of' )
),
'KW' => array(
	'name' => _( 'Kuwait' ),
	'official_name' => _( 'State of Kuwait' )
),
'KG' => array(
	'name' => _( 'Kyrgyzstan' ),
	'official_name' => _( 'Kyrgyz Republic' )
),
'LA' => array(
	'name' => _( 'Lao People\'s Democratic Republic' )
),
'LV' => array(
	'name' => _( 'Latvia' ),
	'official_name' => _( 'Republic of Latvia' )
),
'LB' => array(
	'name' => _( 'Lebanon' ),
	'official_name' => _( 'Lebanese Republic' )
),
'LS' => array(
	'name' => _( 'Lesotho' ),
	'official_name' => _( 'Kingdom of Lesotho' )
),
'LR' => array(
	'name' => _( 'Liberia' ),
	'official_name' => _( 'Republic of Liberia' )
),
'LY' => array(
	'name' => _( 'Libyan Arab Jamahiriya' ),
	'official_name' => _( 'Socialist People\'s Libyan Arab Jamahiriya' )
),
'LI' => array(
	'name' => _( 'Liechtenstein' ),
	'official_name' => _( 'Principality of Liechtenstein' )
),
'LT' => array(
	'name' => _( 'Lithuania' ),
	'official_name' => _( 'Republic of Lithuania' )
),
'LU' => array(
	'name' => _( 'Luxembourg' ),
	'official_name' => _( 'Grand Duchy of Luxembourg' )
),
'MO' => array(
	'name' => _( 'Macao' ),
	'official_name' => _( 'Macao Special Administrative Region of China' )
),
'MK' => array(
	'name' => _( 'Macedonia, Republic of' ),
	'official_name' => _( 'The Former Yugoslav Republic of Macedonia' )
),
'MG' => array(
	'name' => _( 'Madagascar' ),
	'official_name' => _( 'Republic of Madagascar' )
),
'MW' => array(
	'name' => _( 'Malawi' ),
	'official_name' => _( 'Republic of Malawi' )
),
'MY' => array(
	'name' => _( 'Malaysia' )
),
'MV' => array(
	'name' => _( 'Maldives' ),
	'official_name' => _( 'Republic of Maldives' )
),
'ML' => array(
	'name' => _( 'Mali' ),
	'official_name' => _( 'Republic of Mali' )
),
'MT' => array(
	'name' => _( 'Malta' ),
	'official_name' => _( 'Republic of Malta' )
),
'MH' => array(
	'name' => _( 'Marshall Islands' ),
	'official_name' => _( 'Republic of the Marshall Islands' )
),
'MQ' => array(
	'name' => _( 'Martinique' )
),
'MR' => array(
	'name' => _( 'Mauritania' ),
	'official_name' => _( 'Islamic Republic of Mauritania' )
),
'MU' => array(
	'name' => _( 'Mauritius' ),
	'official_name' => _( 'Republic of Mauritius' )
),
'YT' => array(
	'name' => _( 'Mayotte' )
),
'MX' => array(
	'name' => _( 'Mexico' ),
	'official_name' => _( 'United Mexican States' )
),
'FM' => array(
	'name' => _( 'Micronesia, Federated States of' ),
	'official_name' => _( 'Federated States of Micronesia' )
),
'MD' => array(
	'name' => _( 'Moldova, Republic of' ),
	'official_name' => _( 'Republic of Moldova' )
),
'MC' => array(
	'name' => _( 'Monaco' ),
	'official_name' => _( 'Principality of Monaco' )
),
'MN' => array(
	'name' => _( 'Mongolia' )
),
'ME' => array(
	'name' => _( 'Montenegro' ),
	'official_name' => _( 'Montenegro' )
),
'MS' => array(
	'name' => _( 'Montserrat' )
),
'MA' => array(
	'name' => _( 'Morocco' ),
	'official_name' => _( 'Kingdom of Morocco' )
),
'MZ' => array(
	'name' => _( 'Mozambique' ),
	'official_name' => _( 'Republic of Mozambique' )
),
'MM' => array(
	'name' => _( 'Myanmar' ),
	'official_name' => _( 'Union of Myanmar' )
),
'NA' => array(
	'name' => _( 'Namibia' ),
	'official_name' => _( 'Republic of Namibia' )
),
'NR' => array(
	'name' => _( 'Nauru' ),
	'official_name' => _( 'Republic of Nauru' )
),
'NP' => array(
	'name' => _( 'Nepal' ),
	'official_name' => _( 'Federal Democratic Republic of Nepal' )
),
'NL' => array(
	'name' => _( 'Netherlands' ),
	'official_name' => _( 'Kingdom of the Netherlands' )
),
'AN' => array(
	'name' => _( 'Netherlands Antilles' )
),
'NC' => array(
	'name' => _( 'New Caledonia' )
),
'NZ' => array(
	'name' => _( 'New Zealand' )
),
'NI' => array(
	'name' => _( 'Nicaragua' ),
	'official_name' => _( 'Republic of Nicaragua' )
),
'NE' => array(
	'name' => _( 'Niger' ),
	'official_name' => _( 'Republic of the Niger' )
),
'NG' => array(
	'name' => _( 'Nigeria' ),
	'official_name' => _( 'Federal Republic of Nigeria' )
),
'NU' => array(
	'name' => _( 'Niue' ),
	'official_name' => _( 'Republic of Niue' )
),
'NF' => array(
	'name' => _( 'Norfolk Island' )
),
'MP' => array(
	'name' => _( 'Northern Mariana Islands' ),
	'official_name' => _( 'Commonwealth of the Northern Mariana Islands' )
),
'NO' => array(
	'name' => _( 'Norway' ),
	'official_name' => _( 'Kingdom of Norway' )
),
'OM' => array(
	'name' => _( 'Oman' ),
	'official_name' => _( 'Sultanate of Oman' )
),
'PK' => array(
	'name' => _( 'Pakistan' ),
	'official_name' => _( 'Islamic Republic of Pakistan' )
),
'PW' => array(
	'name' => _( 'Palau' ),
	'official_name' => _( 'Republic of Palau' )
),
'PS' => array(
	'name' => _( 'Palestinian Territory, Occupied' ),
	'official_name' => _( 'Occupied Palestinian Territory' )
),
'PA' => array(
	'name' => _( 'Panama' ),
	'official_name' => _( 'Republic of Panama' )
),
'PG' => array(
	'name' => _( 'Papua New Guinea' )
),
'PY' => array(
	'name' => _( 'Paraguay' ),
	'official_name' => _( 'Republic of Paraguay' )
),
'PE' => array(
	'name' => _( 'Peru' ),
	'official_name' => _( 'Republic of Peru' )
),
'PH' => array(
	'name' => _( 'Philippines' ),
	'official_name' => _( 'Republic of the Philippines' )
),
'PN' => array(
	'name' => _( 'Pitcairn' )
),
'PL' => array(
	'name' => _( 'Poland' ),
	'official_name' => _( 'Republic of Poland' )
),
'PT' => array(
	'name' => _( 'Portugal' ),
	'official_name' => _( 'Portuguese Republic' )
),
'PR' => array(
	'name' => _( 'Puerto Rico' )
),
'QA' => array(
	'name' => _( 'Qatar' ),
	'official_name' => _( 'State of Qatar' )
),
'RE' => array(
	'name' => _( 'Reunion' )
),
'RO' => array(
	'name' => _( 'Romania' )
),
'RU' => array(
	'name' => _( 'Russian Federation' )
),
'RW' => array(
	'name' => _( 'Rwanda' ),
	'official_name' => _( 'Rwandese Republic' )
),
'BL' => array(
	'name' => _( 'Saint Barthélemy' )
),
'SH' => array(
	'name' => _( 'Saint Helena, Ascension and Tristan da Cunha' )
),
'KN' => array(
	'name' => _( 'Saint Kitts and Nevis' )
),
'LC' => array(
	'name' => _( 'Saint Lucia' )
),
'MF' => array(
	'name' => _( 'Saint Martin (French part)' )
),
'PM' => array(
	'name' => _( 'Saint Pierre and Miquelon' )
),
'VC' => array(
	'name' => _( 'Saint Vincent and the Grenadines' )
),
'WS' => array(
	'name' => _( 'Samoa' ),
	'official_name' => _( 'Independent State of Samoa' )
),
'SM' => array(
	'name' => _( 'San Marino' ),
	'official_name' => _( 'Republic of San Marino' )
),
'ST' => array(
	'name' => _( 'Sao Tome and Principe' ),
	'official_name' => _( 'Democratic Republic of Sao Tome and Principe' )
),
'SA' => array(
	'name' => _( 'Saudi Arabia' ),
	'official_name' => _( 'Kingdom of Saudi Arabia' )
),
'SN' => array(
	'name' => _( 'Senegal' ),
	'official_name' => _( 'Republic of Senegal' )
),
'RS' => array(
	'name' => _( 'Serbia' ),
	'official_name' => _( 'Republic of Serbia' )
),
'SC' => array(
	'name' => _( 'Seychelles' ),
	'official_name' => _( 'Republic of Seychelles' )
),
'SL' => array(
	'name' => _( 'Sierra Leone' ),
	'official_name' => _( 'Republic of Sierra Leone' )
),
'SG' => array(
	'name' => _( 'Singapore' ),
	'official_name' => _( 'Republic of Singapore' )
),
'SK' => array(
	'name' => _( 'Slovakia' ),
	'official_name' => _( 'Slovak Republic' )
),
'SI' => array(
	'name' => _( 'Slovenia' ),
	'official_name' => _( 'Republic of Slovenia' )
),
'SB' => array(
	'name' => _( 'Solomon Islands' )
),
'SO' => array(
	'name' => _( 'Somalia' ),
	'official_name' => _( 'Somali Republic' )
),
'ZA' => array(
	'name' => _( 'South Africa' ),
	'official_name' => _( 'Republic of South Africa' )
),
'GS' => array(
	'name' => _( 'South Georgia and the South Sandwich Islands' )
),
'ES' => array(
	'name' => _( 'Spain' ),
	'official_name' => _( 'Kingdom of Spain' )
),
'LK' => array(
	'name' => _( 'Sri Lanka' ),
	'official_name' => _( 'Democratic Socialist Republic of Sri Lanka' )
),
'SD' => array(
	'name' => _( 'Sudan' ),
	'official_name' => _( 'Republic of the Sudan' )
),
'SR' => array(
	'name' => _( 'Suriname' ),
	'official_name' => _( 'Republic of Suriname' )
),
'SJ' => array(
	'name' => _( 'Svalbard and Jan Mayen' )
),
'SZ' => array(
	'name' => _( 'Swaziland' ),
	'official_name' => _( 'Kingdom of Swaziland' )
),
'SE' => array(
	'name' => _( 'Sweden' ),
	'official_name' => _( 'Kingdom of Sweden' )
),
'CH' => array(
	'name' => _( 'Switzerland' ),
	'official_name' => _( 'Swiss Confederation' )
),
'SY' => array(
	'name' => _( 'Syrian Arab Republic' )
),
'TW' => array(
	'name' => _( 'Taiwan, Province of China' ),
	'official_name' => _( 'Taiwan, Province of China' )
),
'TJ' => array(
	'name' => _( 'Tajikistan' ),
	'official_name' => _( 'Republic of Tajikistan' )
),
'TZ' => array(
	'name' => _( 'Tanzania, United Republic of' ),
	'official_name' => _( 'United Republic of Tanzania' )
),
'TH' => array(
	'name' => _( 'Thailand' ),
	'official_name' => _( 'Kingdom of Thailand' )
),
'TL' => array(
	'name' => _( 'Timor-Leste' ),
	'official_name' => _( 'Democratic Republic of Timor-Leste' )
),
'TG' => array(
	'name' => _( 'Togo' ),
	'official_name' => _( 'Togolese Republic' )
),
'TK' => array(
	'name' => _( 'Tokelau' )
),
'TO' => array(
	'name' => _( 'Tonga' ),
	'official_name' => _( 'Kingdom of Tonga' )
),
'TT' => array(
	'name' => _( 'Trinidad and Tobago' ),
	'official_name' => _( 'Republic of Trinidad and Tobago' )
),
'TN' => array(
	'name' => _( 'Tunisia' ),
	'official_name' => _( 'Republic of Tunisia' )
),
'TR' => array(
	'name' => _( 'Turkey' ),
	'official_name' => _( 'Republic of Turkey' )
),
'TM' => array(
	'name' => _( 'Turkmenistan' )
),
'TC' => array(
	'name' => _( 'Turks and Caicos Islands' )
),
'TV' => array(
	'name' => _( 'Tuvalu' )
),
'UG' => array(
	'name' => _( 'Uganda' ),
	'official_name' => _( 'Republic of Uganda' )
),
'UA' => array(
	'name' => _( 'Ukraine' )
),
'AE' => array(
	'name' => _( 'United Arab Emirates' )
),
'GB' => array(
	'name' => _( 'United Kingdom' ),
	'official_name' => _( 'United Kingdom of Great Britain and Northern Ireland' )
),
'US' => array(
	'name' => _( 'United States' ),
	'official_name' => _( 'United States of America' )
),
'UM' => array(
	'name' => _( 'United States Minor Outlying Islands' )
),
'UY' => array(
	'name' => _( 'Uruguay' ),
	'official_name' => _( 'Eastern Republic of Uruguay' )
),
'UZ' => array(
	'name' => _( 'Uzbekistan' ),
	'official_name' => _( 'Republic of Uzbekistan' )
),
'VU' => array(
	'name' => _( 'Vanuatu' ),
	'official_name' => _( 'Republic of Vanuatu' )
),
'VE' => array(
	'name' => _( 'Venezuela, Bolivarian republic of' ),
	'official_name' => _( 'Bolivarian Republic of Venezuela' )
),
'VN' => array(
	'name' => _( 'Viet Nam' ),
	'official_name' => _( 'Socialist Republic of Viet Nam' )
),
'VG' => array(
	'name' => _( 'Virgin Islands, British' ),
	'official_name' => _( 'British Virgin Islands' )
),
'VI' => array(
	'name' => _( 'Virgin Islands, U.S.' ),
	'official_name' => _( 'Virgin Islands of the United States' )
),
'WF' => array(
	'name' => _( 'Wallis and Futuna' )
),
'EH' => array(
	'name' => _( 'Western Sahara' )
),
'YE' => array(
	'name' => _( 'Yemen' ),
	'official_name' => _( 'Republic of Yemen' )
),
'ZM' => array(
	'name' => _( 'Zambia' ),
	'official_name' => _( 'Republic of Zambia' )
),
'ZW' => array(
	'name' => _( 'Zimbabwe' ),
	'official_name' => _( 'Republic of Zimbabwe' )
  )
);
}

    /**
     * Retrieve an array of region and subregion data by country.
     * Region and subregion labels are normalized to the most common type of region or generic reference. A "federal district," typically a small region within a country responsible for general administration, is labeled as the standard region type for the country for example (Washington D.C. is a "state," as are territories).
	 * You may wish to edit responses for political sensitivities, such as listing Taiwan as a province of China.
	 *
     * @param String $country_code ISO 3166-1 alpha-2 country code
     * @return array region label and array of regions for the given country context. Subregion label and subregion region children if applicable.
     */
    public static function regions_by_country( $country_code ) {
		switch ( $country_code ) {
		case 'AD':
			return array(
		'regions_label' => _( 'Parish' ),
		'regions' => array(
			'07' => array( 'name' => _( 'Andorra la Vella' ) ),
			'02' => array( 'name' => _( 'Canillo' ) ),
			'03' => array( 'name' => _( 'Encamp' ) ),
			'08' => array( 'name' => _( 'Escaldes-Engordany' ) ),
			'04' => array( 'name' => _( 'La Massana' ) ),
			'05' => array( 'name' => _( 'Ordino' ) ),
			'06' => array( 'name' => _( 'Sant Julià de Lòria' ) )
		) );
			break;
		case 'AE':
			return array(
		'regions_label' => _( 'Emirate' ),
		'regions' => array(
			'AZ' => array( 'name' => _( 'Abū Ȥaby [Abu Dhabi]' ) ),
			'AJ' => array( 'name' => _( '\'Ajmān' ) ),
			'FU' => array( 'name' => _( 'Al Fujayrah' ) ),
			'SH' => array( 'name' => _( 'Ash Shāriqah' ) ),
			'DU' => array( 'name' => _( 'Dubayy' ) ),
			'RK' => array( 'name' => _( 'Ra’s al Khaymah' ) ),
			'UQ' => array( 'name' => _( 'Umm al Qaywayn' ) )
		) );
			break;
		case 'AF':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'BDS' => array( 'name' => _( 'Badakhshān' ) ),
			'BDG' => array( 'name' => _( 'Bādghīs' ) ),
			'BGL' => array( 'name' => _( 'Baghlān' ) ),
			'BAL' => array( 'name' => _( 'Balkh' ) ),
			'BAM' => array( 'name' => _( 'Bāmīān' ) ),
			'DAY' => array( 'name' => _( 'Dāykondī' ) ),
			'FRA' => array( 'name' => _( 'Farāh' ) ),
			'FYB' => array( 'name' => _( 'Fāryāb' ) ),
			'GHA' => array( 'name' => _( 'Ghaznī' ) ),
			'GHO' => array( 'name' => _( 'Ghowr' ) ),
			'HEL' => array( 'name' => _( 'Helmand' ) ),
			'HER' => array( 'name' => _( 'Herāt' ) ),
			'JOW' => array( 'name' => _( 'Jowzjān' ) ),
			'KAB' => array( 'name' => _( 'Kābul [Kābol]' ) ),
			'KAN' => array( 'name' => _( 'Kandahār' ) ),
			'KAP' => array( 'name' => _( 'Kāpīsā' ) ),
			'KHO' => array( 'name' => _( 'Khowst' ) ),
			'KNR' => array( 'name' => _( 'Konar [Kunar]' ) ),
			'KDZ' => array( 'name' => _( 'Kondoz [Kunduz]' ) ),
			'LAG' => array( 'name' => _( 'Laghmān' ) ),
			'LOW' => array( 'name' => _( 'Lowgar' ) ),
			'NAN' => array( 'name' => _( 'Nangrahār [Nangarhār]' ) ),
			'NIM' => array( 'name' => _( 'Nīmrūz' ) ),
			'NUR' => array( 'name' => _( 'Nūrestān' ) ),
			'ORU' => array( 'name' => _( 'Orūzgān [Urūzgān]' ) ),
			'PAN' => array( 'name' => _( 'Panjshīr' ) ),
			'PIA' => array( 'name' => _( 'Paktīā' ) ),
			'PKA' => array( 'name' => _( 'Paktīkā' ) ),
			'PAR' => array( 'name' => _( 'Parwān' ) ),
			'SAM' => array( 'name' => _( 'Samangān' ) ),
			'SAR' => array( 'name' => _( 'Sar-e Pol' ) ),
			'TAK' => array( 'name' => _( 'Takhār' ) ),
			'WAR' => array( 'name' => _( 'Wardak [Wardag]' ) ),
			'ZAB' => array( 'name' => _( 'Zābol [Zābul]' ) )
		) );
			break;
		case 'AG':
			return array(
		'regions_label' => _( 'Parish' ), // label dependency as parish
		'regions' => array(
			'03' => array( 'name' => _( 'Saint George' ) ),
			'04' => array( 'name' => _( 'Saint John' ) ),
			'05' => array( 'name' => _( 'Saint Mary' ) ),
			'06' => array( 'name' => _( 'Saint Paul' ) ),
			'07' => array( 'name' => _( 'Saint Peter' ) ),
			'08' => array( 'name' => _( 'Saint Philip' ) ),
			'10' => array( 'name' => _( 'Barbuda' ) ),
			'11' => array( 'name' => _( 'Redonda' ) )
		) );
			break;
		case 'AL':
			return array(
		'regions_label' => _( 'County' ),
		'subregions_label' => _( 'District' ),
		'regions' => array(
			'01' => array(
				'name' => _( 'Berat' ),
				'subregions' => array(
					'BR' => array( 'name' => _( 'Berat' ) ),
					'KC' => array( 'name' => _( 'Kuçovë' ) ),
					'SK' => array( 'name' => _( 'Skrapar' ) )
				)
			),
			'09' => array(
				'name' => _( 'Dibër' ),
				'subregions' => array(
					'BU' => array( 'name' => _( 'Bulqizë' ) ),
					'DI' => array( 'name' => _( 'Dibër' ) ),
					'MT' => array( 'name' => _( 'Mat' ) )
				)
			),
			'02' => array(
				'name' => _( 'Durrës' ),
				'subregions' => array(
					'DR' => array( 'name' => _( 'Durrës' ) ),
					'KR' => array( 'name' => _( 'Krujë' ) )
				)
			),
			'03' => array(
				'name' => _( 'Elbasan' ),
				'subregions' => array(
					'EL' => array( 'name' => _( 'Elbasan' ) ),
					'GR' => array( 'name' => _( 'Gramsh' ) ),
					'LB' => array( 'name' => _( 'Librazhd' ) ),
					'PQ' => array( 'name' => _( 'Peqin' ) )
				)
			),
			'04' => array(
				'name' => _( 'Fier' ),
				'subregions' => array(
					'FR' => array( 'name' => _( 'Fier' ) ),
					'LU' => array( 'name' => _( 'Lushnjë' ) ),
					'MK' => array( 'name' => _( 'Mallakastër' ) )
				)
			),
			'05' => array( 
				'name' => _( 'Gjirokastër' ),
				'subregions' => array(
					'GJ' => array( 'name' => _( 'Gjirokastër' ) ),
					'PR' => array( 'name' => _( 'Përmet' ) ),
					'TE' => array( 'name' => _( 'Tepelenë' ) )
				)
			),
			'06' => array(
				'name' => _( 'Korçë' ),
				'subregions' => array(
					'DV' => array( 'name' => _( 'Devoll' ) ),
					'ER' => array( 'name' => _( 'Kolonjë' ) ),
					'KO' => array( 'name' => _( 'Korçë' ) ),
					'PG' => array( 'name' => _( 'Pogradec' ) )
				)
			),
			'07' => array(
				'name' => _( 'Kukës' ),
				'subregions' => array(
					'HA' => array( 'name' => _( 'Has' ) ),
					'KU' => array( 'name' => _( 'Kukës' ) ),
					'TP' => array( 'name' => _( 'Tropojë' ) )
				)
			),
			'08' => array(
				'name' => _( 'Lezhë' ),
				'subregions' => array(
					'KB' => array( 'name' => _( 'Kurbin' ) ),
					'LE' => array( 'name' => _( 'Lezhë' ) ),
					'MR' => array( 'name' => _( 'Mirditë' ) )
				)
			),
			'10' => array(
				'name' => _( 'Shkodër' ),
				'subregions' => array(
					'MM' => array( 'name' => _( 'Malësi e Madhe' ) ),
					'PU' => array( 'name' => _( 'Pukë' ) ),
					'SH' => array( 'name' => _( 'Shkodër' ) )
				)
			),
			'11' => array(
				'name' => _( 'Tiranë' ),
				'subregions' => array(
					'KA' => array( 'name' => _( 'Kavajë' ) ),
					'TR' => array( 'name' => _( 'Tiranë' ) )
				)
			),
			'12' => array(
				'name' => _( 'Vlorë' ),
				'subregions' => array(
					'DL' => array( 'name' => _( 'Delvinë' ) ),
					'SR' => array( 'name' => _( 'Sarandë' ) ),
					'VL' => array( 'name' => _( 'Vlorë' ) )
				)
			) )
		);
			break;
		case 'AM':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'ER' => array( 'name' => _( 'Erevan' ) ),
			'AG' => array( 'name' => _( 'Aragacotn' ) ),
			'AR' => array( 'name' => _( 'Ararat' ) ),
			'AV' => array( 'name' => _( 'Armavir' ) ),
			'GR' => array( 'name' => _( 'Gegarkunik\'' ) ),
			'KT' => array( 'name' => _( 'Kotayk\'' ) ),
			'LO' => array( 'name' => _( 'Lory' ) ),
			'SH' => array( 'name' => _( 'Sirak' ) ),
			'SU' => array( 'name' => _( 'Syunik\'' ) ),
			'TV' => array( 'name' => _( 'Tavus' ) ),
			'VD' => array( 'name' => _( 'Vayoc Jor' ) )
		) );
			break;
		case 'AO':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'BGO' => array( 'name' => _( 'Bengo' ) ),
			'BGU' => array( 'name' => _( 'Benguela' ) ),
			'BIE' => array( 'name' => _( 'Bié' ) ),
			'CAB' => array( 'name' => _( 'Cabinda' ) ),
			'CCU' => array( 'name' => _( 'Cuando-Cubango' ) ),
			'CNO' => array( 'name' => _( 'Cuanza Norte' ) ),
			'CUS' => array( 'name' => _( 'Cuanza Sul' ) ),
			'CNN' => array( 'name' => _( 'Cunene' ) ),
			'HUA' => array( 'name' => _( 'Huambo' ) ),
			'HUI' => array( 'name' => _( 'Huíla' ) ),
			'LUA' => array( 'name' => _( 'Luanda' ) ),
			'LNO' => array( 'name' => _( 'Lunda Norte' ) ),
			'LSU' => array( 'name' => _( 'Lunda Sul' ) ),
			'MAL' => array( 'name' => _( 'Malange' ) ),
			'MOX' => array( 'name' => _( 'Moxico' ) ),
			'NAM' => array( 'name' => _( 'Namibe' ) ),
			'UIG' => array( 'name' => _( 'Uíge' ) ),
			'ZAI' => array( 'name' => _( 'Zaire' ) )
		) );
			break;
		case 'AR':
			return array(
		'regions_label' => _( 'Province' ), // label city of Buenos Aires as province
		'regions' => array(
			'C' => array( 'name' => _( 'Ciudad Autónoma de Buenos Aires' ) ),
			'B' => array( 'name' => _( 'Buenos Aires' ) ),
			'K' => array( 'name' => _( 'Catamarca' ) ),
			'X' => array( 'name' => _( 'Cordoba' ) ),
			'W' => array( 'name' => _( 'Corrientes' ) ),
			'H' => array( 'name' => _( 'Chaco' ) ),
			'U' => array( 'name' => _( 'Chubut' ) ),
			'E' => array( 'name' => _( 'Entre Rios' ) ),
			'P' => array( 'name' => _( 'Formosa' ) ),
			'Y' => array( 'name' => _( 'Jujuy' ) ),
			'L' => array( 'name' => _( 'La Pampa' ) ),
			'M' => array( 'name' => _( 'Mendoza' ) ),
			'N' => array( 'name' => _( 'Misiones' ) ),
			'Q' => array( 'name' => _( 'Neuquen' ) ),
			'R' => array( 'name' => _( 'Rio Negro' ) ),
			'A' => array( 'name' => _( 'Salta' ) ),
			'J' => array( 'name' => _( 'San Juan' ) ),
			'D' => array( 'name' => _( 'San Luis' ) ),
			'Z' => array( 'name' => _( 'Santa Cruz' ) ),
			'S' => array( 'name' => _( 'Santa Fe' ) ),
			'G' => array( 'name' => _( 'Santiago del Estero' ) ),
			'V' => array( 'name' => _( 'Tierra del Fuego' ) ),
			'T' => array( 'name' => _( 'Tucuman' ) )
		) );
			break;
		case 'AT':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
				1 => array( 'name' => _( 'Burgenland' ) ),
				2 => array( 'name' => _( 'Kärnten' ) ),
				3 => array( 'name' => _( 'Niederösterreich' ) ),
				4 => array( 'name' => _( 'Oberösterreich' ) ),
				5 => array( 'name' => _( 'Salzburg' ) ),
				6 => array( 'name' => _( 'Steiermark' ) ),
				7 => array( 'name' => _( 'Tirol' ) ),
				8 => array( 'name' => _( 'Vorarlberg' ) ),
				9 => array( 'name' => _( 'Wien' ) )
		) );
			break;
		case 'AU':
			return array(
		'regions_label' => _( 'State' ), // label territoru as state
		'regions' => array(
			'NSW' => array( 'name' => _( 'New South Wales' ) ),
			'QLD' => array( 'name' => _( 'Queensland' ) ),
			'SA' => array( 'name' => _( 'South Australia' ) ),
			'TAS' => array( 'name' => _( 'Tasmania' ) ),
			'VIC' => array( 'name' => _( 'Victoria' ) ),
			'WA' => array( 'name' => _( 'Western Australia' ) ),
			'ACT' => array( 'name' => _( 'Australian Capital Territory' ) ),
			'NT' => array( 'name' => _( 'Northern Territory' ) )
		) );
			break;
		case 'AZ':
			return array(
		'regions_label' => _( 'Rayon' ), // label city districts and autonomous republic as rayon
		'subregions_label' => _( 'City' ),
		'regions' => array(
			'NX' => array(
				'name' => _( 'Naxçıvan' ),
				'subregions' => array(
					'BAB' => array( 'name' => _( 'Babək' ) ),
					'CUL' => array( 'name' => _( 'Culfa' ) ),
					'ORD' => array( 'name' => _( 'Ordubad' ) ),
					'SAD' => array( 'name' => _( 'Sədərək' ) ),
					'SAH' => array( 'name' => _( 'Şahbuz' ) ),
					'SAR' => array( 'name' => _( 'Şərur' ) )
				),
			),
			'AB' => array( 'name' => _( 'Əli Bayramlı' ) ),
			'BA' => array( 'name' => _( 'Bakı' ) ),
			'GA' => array( 'name' => _( 'Gəncə' ) ),
			'LA' => array( 'name' => _( 'Lənkəran' ) ),
			'MI' => array( 'name' => _( 'Mingəçevir' ) ),
			'NA' => array( 'name' => _( 'Naftalan' ) ),
			'SA' => array( 'name' => _( 'Şəki' ) ),
			'SM' => array( 'name' => _( 'Sumqayıt' ) ),
			'SS' => array( 'name' => _( 'Şuşa' ) ),
			'XA' => array( 'name' => _( 'Xankəndi' ) ),
			'YE' => array( 'name' => _( 'Yevlax' ) ),
			'ABS' => array( 'name' => _( 'Abşeron' ) ),
			'AGC' => array( 'name' => _( 'Ağcabədi' ) ),
			'AGM' => array( 'name' => _( 'Ağdam' ) ),
			'AGS' => array( 'name' => _( 'Ağdaş' ) ),
			'AGA' => array( 'name' => _( 'Ağstafa' ) ),
			'AGU' => array( 'name' => _( 'Ağsu' ) ),
			'AST' => array( 'name' => _( 'Astara' ) ),
			'BAL' => array( 'name' => _( 'Balakən' ) ),
			'BAR' => array( 'name' => _( 'Bərdə' ) ),
			'BEY' => array( 'name' => _( 'Beyləqan' ) ),
			'BIL' => array( 'name' => _( 'Biləsuvar' ) ),
			'CAB' => array( 'name' => _( 'Cəbrayıl' ) ),
			'CAL' => array( 'name' => _( 'Cəlilabab' ) ),
			'DAS' => array( 'name' => _( 'Daşkəsən' ) ),
			'DAV' => array( 'name' => _( 'Dəvəçi' ) ),
			'FUZ' => array( 'name' => _( 'Füzuli' ) ),
			'GAD' => array( 'name' => _( 'Gədəbəy' ) ),
			'GOR' => array( 'name' => _( 'Goranboy' ) ),
			'GOY' => array( 'name' => _( 'Göyçay' ) ),
			'HAC' => array( 'name' => _( 'Hacıqabul' ) ),
			'IMI' => array( 'name' => _( 'İmişli' ) ),
			'ISM' => array( 'name' => _( 'İsmayıllı' ) ),
			'KAL' => array( 'name' => _( 'Kəlbəcər' ) ),
			'KUR' => array( 'name' => _( 'Kürdəmir' ) ),
			'LAC' => array( 'name' => _( 'Laçın' ) ),
			'LAN' => array( 'name' => _( 'Lənkəran' ) ),
			'LER' => array( 'name' => _( 'Lerik' ) ),
			'MAS' => array( 'name' => _( 'Masallı' ) ),
			'NEF' => array( 'name' => _( 'Neftçala' ) ),
			'OGU' => array( 'name' => _( 'Oğuz' ) ),
			'QAB' => array( 'name' => _( 'Qəbələ' ) ),
			'QAX' => array( 'name' => _( 'Qax' ) ),
			'QAZ' => array( 'name' => _( 'Qazax' ) ),
			'QOB' => array( 'name' => _( 'Qobustan' ) ),
			'QBA' => array( 'name' => _( 'Quba' ) ),
			'QBI' => array( 'name' => _( 'Qubadlı' ) ),
			'QUS' => array( 'name' => _( 'Qusar' ) ),
			'SAT' => array( 'name' => _( 'Saatlı' ) ),
			'SAB' => array( 'name' => _( 'Sabirabad' ) ),
			'SAK' => array( 'name' => _( 'Şəki' ) ),
			'SAL' => array( 'name' => _( 'Salyan' ) ),
			'SMI' => array( 'name' => _( 'Şamaxı' ) ),
			'SKR' => array( 'name' => _( 'Şəmkir' ) ),
			'SMX' => array( 'name' => _( 'Samux' ) ),
			'SIY' => array( 'name' => _( 'Siyəzən' ) ),
			'SUS' => array( 'name' => _( 'Şuşa' ) ),
			'TAR' => array( 'name' => _( 'Tərtər' ) ),
			'TOV' => array( 'name' => _( 'Tovuz' ) ),
			'UCA' => array( 'name' => _( 'Ucar' ) ),
			'XAC' => array( 'name' => _( 'Xaçmaz' ) ),
			'XAN' => array( 'name' => _( 'Xanlar' ) ),
			'XIZ' => array( 'name' => _( 'Xızı' ) ),
			'XCI' => array( 'name' => _( 'Xocalı' ) ),
			'XVD' => array( 'name' => _( 'Xocavənd' ) ),
			'YAR' => array( 'name' => _( 'Yardımlı' ) ),
			'YEV' => array( 'name' => _( 'Yevlax' ) ),
			'ZAN' => array( 'name' => _( 'Zəngilan' ) ),
			'ZAQ' => array( 'name' => _( 'Zaqatala' ) ),
			'ZAR' => array( 'name' => _( 'Zərdab' ) )
		) );
			break;
		case 'BA':
			return array(
		'regions_label' => _( 'Entity' ),
		'subregions_label' => _( 'Canton' ),
		'regions' => array(
			'BIH' => array(
				'name' => _( 'Federacija Bosne i Hercegovine' ),
				'subregions' => array(
					'05' => array( 'name' => _( 'Bosansko-podrinjski' ) ),
					'07' => array( 'name' => _( 'Hercegovačko-neretvanski' ) ),
					'10' => array( 'name' => _( 'br. 10 (Livanjski)' ) ),
					'09' => array( 'name' => _( 'Sarajevo' ) ),
					'02' => array( 'name' => _( 'Posavski' ) ),
					'06' => array( 'name' => _( 'Srednjobosanski' ) ),
					'03' => array( 'name' => _( 'Tuzlanski' ) ),
					'01' => array( 'name' => _( 'Unsko-sanski' ) ),
					'08' => array( 'name' => _( 'Zapadnohercegovački' ) ),
					'04' => array( 'name' => _( 'Zeničko-dobojski kanton' ) )
				)
			),
			'SRP' => array( 'name' => _( 'Republika Srpska' ) ),
			'BRC' => array( 'name' => _( 'Brčko distrikt' ) )
		) );
			break;
		case 'BB':
			return array(
		'regions_label' => _( 'Parish' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Christ Church' ) ),
			'02' => array( 'name' => _( 'Saint Andrew' ) ),
			'03' => array( 'name' => _( 'Saint George' ) ),
			'04' => array( 'name' => _( 'Saint James' ) ),
			'05' => array( 'name' => _( 'Saint John' ) ),
			'06' => array( 'name' => _( 'Saint Joseph' ) ),
			'07' => array( 'name' => _( 'Saint Lucy' ) ),
			'08' => array( 'name' => _( 'Saint Michael' ) ),
			'09' => array( 'name' => _( 'Saint Peter' ) ),
				10 => array( 'name' => _( 'Saint Philip' ) ),
				11 => array( 'name' => _( 'Saint Thomas' ) )
		) );
			break;
		case 'BD':
			return array(
		'regions_label' => _( 'Division' ),
		'subregions_label' => _( 'District' ),
		'regions' => array(
			'1' => array(
				'name' => _( 'Barisal bibhag' ),
				'subregions' => array(
					'02' => array( 'name' => _( 'Barguna zila' ) ),
					'06' => array( 'name' => _( 'Barisal zila' ) ),
					'07' => array( 'name' => _( 'Bhola zila' ) ),
					'25' => array( 'name' => _( 'Jhalakati zila' ) ),
					'51' => array( 'name' => _( 'Patuakhali zila' ) ),
					'50' => array( 'name' => _( 'Pirojpur zila' ) )
				)
			),
			'2' => array(
				'name' => _( 'Chittagong bibhag' ),
				'subregions' => array(
					'01' => array( 'name' => _( 'Bandarban zila' ) ),
					'04' => array( 'name' => _( 'Brahmanbaria zila' ) ),
					'09' => array( 'name' => _( 'Chandpur zila' ) ),
					'10' => array( 'name' => _( 'Chittagong zila' ) ),
					'08' => array( 'name' => _( 'Comilla zila' ) ),
					'11' => array( 'name' => _( 'Cox\'s Bazar zila' ) ),
					'16' => array( 'name' => _( 'Feni zila' ) ),
					'29' => array( 'name' => _( 'Khagrachari zila' ) ),
					'31' => array( 'name' => _( 'Lakshmipur zila' ) ),
					'47' => array( 'name' => _( 'Noakhali zila' ) ),
					'56' => array( 'name' => _( 'Rangamati zila' ) )
				)
			),
			'3' => array(
				'name' => _( 'Dhaka bibhag' ),
				'subregions' => array(
					'13' => array( 'name' => _( 'Dhaka zila' ) ),
					'15' => array( 'name' => _( 'Faridpur zila' ) ),
					'18' => array( 'name' => _( 'Gazipur zila' ) ),
					'17' => array( 'name' => _( 'Gopalganj zila' ) ),
					'21' => array( 'name' => _( 'Jamalpur zila' ) ),
					'26' => array( 'name' => _( 'Kishorganj zila' ) ),
					'36' => array( 'name' => _( 'Madaripur zila' ) ),
					'33' => array( 'name' => _( 'Manikganj zila' ) ),
					'35' => array( 'name' => _( 'Munshiganj zila' ) ),
					'34' => array( 'name' => _( 'Mymensingh zila' ) ),
					'40' => array( 'name' => _( 'Narayanganj zila' ) ),
					'42' => array( 'name' => _( 'Narsingdi zila' ) ),
					'41' => array( 'name' => _( 'Netrakona zila' ) ),
					'53' => array( 'name' => _( 'Rajbari zila' ) ),
					'62' => array( 'name' => _( 'Shariatpur zila' ) ),
					'57' => array( 'name' => _( 'Sherpur zila' ) ),
					'63' => array( 'name' => _( 'Tangail zila' ) )
				)
			),
			'4' => array(
				'name' => _( 'Khulna bibhag' ),
				'subregions' => array(
					'05' => array( 'name' => _( 'Bagerhat zila' ) ),
					'12' => array( 'name' => _( 'Chuadanga zila' ) ),
					'22' => array( 'name' => _( 'Jessore zila' ) ),
					'23' => array( 'name' => _( 'Jhenaidah zila' ) ),
					'27' => array( 'name' => _( 'Khulna zila' ) ),
					'30' => array( 'name' => _( 'Kushtia zila' ) ),
					'37' => array( 'name' => _( 'Magura zila' ) ),
					'39' => array( 'name' => _( 'Meherpur zila' ) ),
					'43' => array( 'name' => _( 'Narail zila' ) ),
					'58' => array( 'name' => _( 'Satkhira zila' ) )
				)
			),
			'5' => array(
				'name' => _( 'Rajshahi bibhag' ),
				'subregions' => array(
					'03' => array( 'name' => _( 'Bogra zila' ) ),
					'14' => array( 'name' => _( 'Dinajpur zila' ) ),
					'19' => array( 'name' => _( 'Gaibandha zila' ) ),
					'24' => array( 'name' => _( 'Jaipurhat zila' ) ),
					'28' => array( 'name' => _( 'Kurigram zila' ) ),
					'32' => array( 'name' => _( 'Lalmonirhat zila' ) ),
					'48' => array( 'name' => _( 'Naogaon zila' ) ),
					'44' => array( 'name' => _( 'Natore zila' ) ),
					'45' => array( 'name' => _( 'Nawabganj zila' ) ),
					'46' => array( 'name' => _( 'Nilphamari zila' ) ),
					'49' => array( 'name' => _( 'Pabna zila' ) ),
					'52' => array( 'name' => _( 'Panchagarh zila' ) ),
					'54' => array( 'name' => _( 'Rajshahi zila' ) ),
					'55' => array( 'name' => _( 'Rangpur zila' ) ),
					'59' => array( 'name' => _( 'Sirajganj zila' ) ),
					'64' => array( 'name' => _( 'Thakurgaon zila' ) )
				)
			),
			'6' => array(
				'name' => _( 'Sylhet bibhag' ),
				'subregions' => array(
					'20' => array( 'name' => _( 'Habiganj zila' ) ),
					'38' => array( 'name' => _( 'Moulvibazar zila' ) ),
					'61' => array( 'name' => _( 'Sunamganj zila' ) ),
					'60' => array( 'name' => _( 'Sylhet zila' ) )
				)
			)
		) );
			break;
		case 'BE':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'VAN' => array( 'name' => _( 'Antwerpen' ) ),
			'WBR' => array( 'name' => _( 'Brabant Wallon' ) ),
			'BRU' => array( 'name' => _( 'Brussels-Capital Region' ) ),
			'WHT' => array( 'name' => _( 'Hainaut' ) ),
			'WLG' => array( 'name' => _( 'Liege' ) ),
			'VLI' => array( 'name' => _( 'Limburg' ) ),
			'WLX' => array( 'name' => _( 'Luxembourg' ) ),
			'WNA' => array( 'name' => _( 'Namur' ) ),
			'VOV' => array( 'name' => _( 'Oost-Vlaanderen' ) ),
			'VBR' => array( 'name' => _( 'Vlaams-Brabant' ) ),
			'VWV' => array( 'name' => _( 'West-Vlaanderen' ) )
		) );
			break;
		case 'BF':
			return array(
		'regions_label' => _( 'Region' ),
		'subregions_label' => _( 'Province' ),
		'regions' => array(
			'01' => array(
				'name' => _( 'Boucle du Mouhoun' ),
				'subregions' => array(
					'BAL' => array( 'name' => _( 'Balé' ) ),
					'BAN' => array( 'name' => _( 'Banwa' ) ),
					'KOS' => array( 'name' => _( 'Kossi' ) ),
					'MOU' => array( 'name' => _( 'Mouhoun' ) ),
					'NAY' => array( 'name' => _( 'Nayala' ) ),
					'SOR' => array( 'name' => _( 'Sourou' ) )
				)
			),
			'02' => array(
				'name' => _( 'Cascades' ),
				'subregions' => array(
					'COM' => array( 'name' => _( 'Comoé' ) ),
					'LER' => array( 'name' => _( 'Léraba' ) )
				)
			),
			'03' => array(
				'name' => _( 'Centre' ),
				'subregions' => array(
					'KAD' => array( 'name' => _( 'Kadiogo' ) )
				)
			),
			'04' => array(
				'name' => _( 'Centre-Est' ),
				'subregions' => array(
					'BLG' => array( 'name' => _( 'Boulgou' ) ),
					'KOP' => array( 'name' => _( 'Koulpélogo' ) ),
					'KOT' => array( 'name' => _( 'Kouritenga' ) )
				)
			),
			'05' => array(
				'name' => _( 'Centre-Nord' ),
				'subregions' => array(
					'BAM' => array( 'name' => _( 'Bam' ) ),
					'NAM' => array( 'name' => _( 'Namentenga' ) ),
					'SMT' => array( 'name' => _( 'Sanmatenga' ) )
				)
			),
			'06' => array(
				'name' => _( 'Centre-Ouest' ),
				'subregions' => array(
					'BLK' => array( 'name' => _( 'Boulkiemdé' ) ),
					'SNG' => array( 'name' => _( 'Sanguié' ) ),
					'SIS' => array( 'name' => _( 'Sissili' ) ),
					'ZIR' => array( 'name' => _( 'Ziro' ) )
				)
			),
			'07' => array(
				'name' => _( 'Centre-Sud' ),
				'subregions' => array(
					'BAZ' => array( 'name' => _( 'Bazèga' ) ),
					'NAO' => array( 'name' => _( 'Naouri' ) ),
					'ZOU' => array( 'name' => _( 'Zoundwéogo' ) )
				)
			),
			'08' => array(
				'name' => _( 'Est' ),
				'subregions' => array(
					'GNA' => array( 'name' => _( 'Gnagna' ) ),
					'GOU' => array( 'name' => _( 'Gourma' ) ),
					'KMD' => array( 'name' => _( 'Komondjari' ) ),
					'KMP' => array( 'name' => _( 'Kompienga' ) ),
					'TAP' => array( 'name' => _( 'Tapoa' ) )
				)
			),
			'09' => array(
				'name' => _( 'Hauts-Bassins' ),
				'subregions' => array(
					'HOU' => array( 'name' => _( 'Houet' ) ),
					'KEN' => array( 'name' => _( 'Kénédougou' ) ),
					'TUI' => array( 'name' => _( 'Tui' ) )
				)
			),
			'10' => array(
				'name' => _( 'Nord' ),
				'subregions' => array(
					'LOR' => array( 'name' => _( 'Loroum' ) ),
					'PAS' => array( 'name' => _( 'Passoré' ) ),
					'YAT' => array( 'name' => _( 'Yatenga' ) ),
					'ZON' => array( 'name' => _( 'Zondoma' ) )
				)
			),
			'11' => array(
				'name' => _( 'Plateau-Central' ),
				'subregions' => array(
					'GAN' => array( 'name' => _( 'Ganzourgou' ) ),
					'KOW' => array( 'name' => _( 'Kourwéogo' ) ),
					'OUB' => array( 'name' => _( 'Oubritenga' ) )
				)
			),
			'12' => array(
				'name' => _( 'Sahel' ),
				'subregions' => array(
					'OUD' => array( 'name' => _( 'Oudalan' ) ),
					'SEN' => array( 'name' => _( 'Séno' ) ),
					'SOM' => array( 'name' => _( 'Soum' ) ),
					'YAG' => array( 'name' => _( 'Yagha' ) )
				)
			),
			'13' => array(
				'name' => _( 'Sud-Ouest' ),
				'subregions' => array(
					'BGR' => array( 'name' => _( 'Bougouriba' ) ),
					'IOB' => array( 'name' => _( 'Ioba' ) ),
					'NOU' => array( 'name' => _( 'Noumbiel' ) ),
					'PON' => array( 'name' => _( 'Poni' ) )
				)
			)
		) );
			break;
		case 'BG':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Blagoevgrad' ) ),
			'02' => array( 'name' => _( 'Burgas' ) ),
			'08' => array( 'name' => _( 'Dobrich' ) ),
			'07' => array( 'name' => _( 'Gabrovo' ) ),
			'26' => array( 'name' => _( 'Haskovo' ) ),
			'09' => array( 'name' => _( 'Kardzhali' ) ),
			'10' => array( 'name' => _( 'Kyustendil' ) ),
			'11' => array( 'name' => _( 'Lovech' ) ),
			'12' => array( 'name' => _( 'Montana' ) ),
			'13' => array( 'name' => _( 'Pazardzhik' ) ),
			'14' => array( 'name' => _( 'Pernik' ) ),
			'15' => array( 'name' => _( 'Pleven' ) ),
			'16' => array( 'name' => _( 'Plovdiv' ) ),
			'17' => array( 'name' => _( 'Razgrad' ) ),
			'18' => array( 'name' => _( 'Ruse' ) ),
			'27' => array( 'name' => _( 'Shumen' ) ),
			'19' => array( 'name' => _( 'Silistra' ) ),
			'20' => array( 'name' => _( 'Sliven' ) ),
			'21' => array( 'name' => _( 'Smolyan' ) ),
			'23' => array( 'name' => _( 'Sofia' ) ),
			'22' => array( 'name' => _( 'Sofia-Grad' ) ),
			'24' => array( 'name' => _( 'Stara Zagora' ) ),
			'25' => array( 'name' => _( 'Targovishte' ) ),
			'03' => array( 'name' => _( 'Varna' ) ),
			'04' => array( 'name' => _( 'Veliko Tarnovo' ) ),
			'05' => array( 'name' => _( 'Vidin' ) ),
			'06' => array( 'name' => _( 'Vratsa' ) ),
			'28' => array( 'name' => _( 'Yambol' ) )
		) );
			break;
		case 'BH':
			return array(
		'regions_label' => _( 'Governorate' ),
		'regions' => array(
			'13' => array( 'name' => _( 'Al Manāmah (Al ‘Āşimah)' ) ),
			'14' => array( 'name' => _( 'Al Janūbīyah' ) ),
			'15' => array( 'name' => _( 'Al Muḩarraq' ) ),
			'16' => array( 'name' => _( 'Al Wusţá' ) ),
			'17' => array( 'name' => _( 'Ash Shamālīyah' ) )
		) );
			break;
		case 'BI':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'BB' => array( 'name' => _( 'Bubanza' ) ),
			'BM' => array( 'name' => _( 'Bujumbura Mairie' ) ),
			'BL' => array( 'name' => _( 'Bujumbura Rural' ) ),
			'BR' => array( 'name' => _( 'Bururi' ) ),
			'CA' => array( 'name' => _( 'Cankuzo' ) ),
			'CI' => array( 'name' => _( 'Cibitoke' ) ),
			'GI' => array( 'name' => _( 'Gitega' ) ),
			'KR' => array( 'name' => _( 'Karuzi' ) ),
			'KY' => array( 'name' => _( 'Kayanza' ) ),
			'KI' => array( 'name' => _( 'Kirundo' ) ),
			'MA' => array( 'name' => _( 'Makamba' ) ),
			'MU' => array( 'name' => _( 'Muramvya' ) ),
			'MW' => array( 'name' => _( 'Mwaro' ) ),
			'NG' => array( 'name' => _( 'Ngozi' ) ),
			'RT' => array( 'name' => _( 'Rutana' ) ),
			'RY' => array( 'name' => _( 'Ruyigi' ) )
		) );
			break;
		case 'BJ':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'AL' => array( 'name' => _( 'Alibori' ) ),
			'AK' => array( 'name' => _( 'Atakora' ) ),
			'AQ' => array( 'name' => _( 'Atlantique' ) ),
			'BO' => array( 'name' => _( 'Borgou' ) ),
			'CO' => array( 'name' => _( 'Collines' ) ),
			'DO' => array( 'name' => _( 'Donga' ) ),
			'KO' => array( 'name' => _( 'Kouffo' ) ),
			'LI' => array( 'name' => _( 'Littoral' ) ),
			'MO' => array( 'name' => _( 'Mono' ) ),
			'OU' => array( 'name' => _( 'Ouémé' ) ),
			'PL' => array( 'name' => _( 'Plateau' ) ),
			'ZO' => array( 'name' => _( 'Zou' ) )
		) );
			break;
		case 'BN':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'BE' => array( 'name' => _( 'Belait' ) ),
			'BM' => array( 'name' => _( 'Brunei-Muara' ) ),
			'TE' => array( 'name' => _( 'Temburong' ) ),
			'TU' => array( 'name' => _( 'Tutong' ) )
		) );
			break;
		case 'BO':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'H' => array( 'name' => _( 'Chuquisaca' ) ),
			'C' => array( 'name' => _( 'Cochabamba' ) ),
			'B' => array( 'name' => _( 'El Beni' ) ),
			'L' => array( 'name' => _( 'La Paz' ) ),
			'O' => array( 'name' => _( 'Oruro' ) ),
			'N' => array( 'name' => _( 'Pando' ) ),
			'P' => array( 'name' => _( 'Potosí' ) ),
			'S' => array( 'name' => _( 'Santa Cruz' ) ),
			'T' => array( 'name' => _( 'Tarija' ) )
		) );
			break;
		case 'BR':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'AC' => array( 'name' => _( 'Acre' ) ),
			'AL' => array( 'name' => _( 'Alagoas' ) ),
			'AM' => array( 'name' => _( 'Amazonas' ) ),
			'AP' => array( 'name' => _( 'Amapá' ) ),
			'BA' => array( 'name' => _( 'Bahia' ) ),
			'CE' => array( 'name' => _( 'Ceará' ) ),
			'ES' => array( 'name' => _( 'Espírito Santo' ) ),
			'FN' => array( 'name' => _( 'Fernando de Noronha' ) ),
			'GO' => array( 'name' => _( 'Goiás' ) ),
			'MA' => array( 'name' => _( 'Maranhão' ) ),
			'MG' => array( 'name' => _( 'Minas Gerais' ) ),
			'MS' => array( 'name' => _( 'Mato Grosso do Sul' ) ),
			'MT' => array( 'name' => _( 'Mato Grosso' ) ),
			'PA' => array( 'name' => _( 'Pará' ) ),
			'PB' => array( 'name' => _( 'Paraíba' ) ),
			'PE' => array( 'name' => _( 'Pernambuco' ) ),
			'PI' => array( 'name' => _( 'Piauí' ) ),
			'PR' => array( 'name' => _( 'Paraná' ) ),
			'RJ' => array( 'name' => _( 'Rio de Janeiro' ) ),
			'RN' => array( 'name' => _( 'Rio Grande do Norte' ) ),
			'RO' => array( 'name' => _( 'Rondônia' ) ),
			'RR' => array( 'name' => _( 'Roraima' ) ),
			'RS' => array( 'name' => _( 'Rio Grande do Sul' ) ),
			'SC' => array( 'name' => _( 'Santa Catarina' ) ),
			'SE' => array( 'name' => _( 'Sergipe' ) ),
			'SP' => array( 'name' => _( 'Sâo Paulo' ) ),
			'TO' => array( 'name' => _( 'Tocantins' ) ),
			'DF' => array( 'name' => _( 'Distrito Federal' ) )
		) );
			break;
		case 'BS':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'AC' => array( 'name' => _( 'Acklins Islands' ) ),
			'BY' => array( 'name' => _( 'Berry Islands' ) ),
			'BI' => array( 'name' => _( 'Bimini and Cat Cay' ) ),
			'BP' => array( 'name' => _( 'Black Point' ) ),
			'CI' => array( 'name' => _( 'Cat Island' ) ),
			'CO' => array( 'name' => _( 'Central Abaco' ) ),
			'CS' => array( 'name' => _( 'Central Andros' ) ),
			'CE' => array( 'name' => _( 'Central Eleuthera' ) ),
			'FP' => array( 'name' => _( 'City of Freeport' ) ),
			'CK' => array( 'name' => _( 'Crooked Island and Long Cay' ) ),
			'EG' => array( 'name' => _( 'East Grand Bahama' ) ),
			'EX' => array( 'name' => _( 'Exuma' ) ),
			'GC' => array( 'name' => _( 'Grand Cay' ) ),
			'GT' => array( 'name' => _( 'Green Turtle Cay' ) ),
			'HI' => array( 'name' => _( 'Harbour Island' ) ),
			'HT' => array( 'name' => _( 'Hope Town' ) ),
			'IN' => array( 'name' => _( 'Inagua' ) ),
			'LI' => array( 'name' => _( 'Long Island' ) ),
			'MC' => array( 'name' => _( 'Mangrove Cay' ) ),
			'MG' => array( 'name' => _( 'Mayaguana' ) ),
			'MI' => array( 'name' => _( 'Moore\'s Island' ) ),
			'NO' => array( 'name' => _( 'North Abaco' ) ),
			'NS' => array( 'name' => _( 'North Andros' ) ),
			'NE' => array( 'name' => _( 'North Eleuthera' ) ),
			'RI' => array( 'name' => _( 'Ragged Island' ) ),
			'RC' => array( 'name' => _( 'Rum Cay' ) ),
			'SS' => array( 'name' => _( 'San Salvador' ) ),
			'SO' => array( 'name' => _( 'South Abaco' ) ),
			'SA' => array( 'name' => _( 'South Andros' ) ),
			'SE' => array( 'name' => _( 'South Eleuthera' ) ),
			'SW' => array( 'name' => _( 'Spanish Wells' ) ),
			'WG' => array( 'name' => _( 'West Grand Bahama' ) )
		) );
			break;
		case 'BT':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
				33 => array( 'name' => _( 'Bumthang' ) ),
				12 => array( 'name' => _( 'Chhukha' ) ),
				22 => array( 'name' => _( 'Dagana' ) ),
			'GA' => array( 'name' => _( 'Gasa' ) ),
				13 => array( 'name' => _( 'Ha' ) ),
				44 => array( 'name' => _( 'Lhuentse' ) ),
				42 => array( 'name' => _( 'Monggar' ) ),
				11 => array( 'name' => _( 'Paro' ) ),
				43 => array( 'name' => _( 'Pemagatshel' ) ),
				23 => array( 'name' => _( 'Punakha' ) ),
				45 => array( 'name' => _( 'Samdrup Jongkha' ) ),
				14 => array( 'name' => _( 'Samtee' ) ),
				31 => array( 'name' => _( 'Sarpang' ) ),
				15 => array( 'name' => _( 'Thimphu' ) ),
				41 => array( 'name' => _( 'Trashigang' ) ),
			'TY' => array( 'name' => _( 'Trashi Yangtse' ) ),
				32 => array( 'name' => _( 'Trongsa' ) ),
				21 => array( 'name' => _( 'Tsirang' ) ),
				24 => array( 'name' => _( 'Wangdue Phodrang' ) ),
				34 => array( 'name' => _( 'Zhemgang' ) )
		) );
			break;
		case 'BW':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'CE' => array( 'name' => _( 'Central' ) ),
			'GH' => array( 'name' => _( 'Ghanzi' ) ),
			'KG' => array( 'name' => _( 'Kgalagadi' ) ),
			'KL' => array( 'name' => _( 'Kgatleng' ) ),
			'KW' => array( 'name' => _( 'Kweneng' ) ),
			'NG' => array( 'name' => _( 'Ngamiland' ) ),
			'NE' => array( 'name' => _( 'North-East' ) ),
			'NW' => array( 'name' => _( 'North-West (Botswana)' ) ),
			'SE' => array( 'name' => _( 'South-East' ) ),
			'SO' => array( 'name' => _( 'Southern (Botswana)' ) )
		) );
			break;
		case 'BY':
			return array(
		'regions_label' => _( 'Oblast' ),
		'regions' => array(
			'HM' => array( 'name' => _( 'Horad Minsk' ) ),
			'BR' => array( 'name' => _( 'Brèsckaja voblasc\'' ) ),
			'HO' => array( 'name' => _( 'Homel\'skaja voblasc\'' ) ),
			'HR' => array( 'name' => _( 'Hrodzenskaja voblasc\'' ) ),
			'MA' => array( 'name' => _( 'Mahilëuskaja voblasc\'' ) ),
			'MI' => array( 'name' => _( 'Minskaja voblasc\'' ) ),
			'VI' => array( 'name' => _( 'Vicebskaja voblasc\'' ) )
		) );
			break;
		case 'BZ':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'BZ' => array( 'name' => _( 'Belize' ) ),
			'CY' => array( 'name' => _( 'Cayo' ) ),
			'CZL' => array( 'name' => _( 'Corozal' ) ),
			'OW' => array( 'name' => _( 'Orange Walk' ) ),
			'SC' => array( 'name' => _( 'Stann Creek' ) ),
			'TOL' => array( 'name' => _( 'Toledo' ) )
		) );
			break;
		case 'CA':
			return array(
		'regions_label' => _( 'Province' ), // label territory as province
                'regions' => array(
			'AB' => array( 'name' => _( 'Alberta' ) ),
			'BC' => array( 'name' => _( 'British Columbia' ) ),
			'MB' => array( 'name' => _( 'Manitoba' ) ),
			'NB' => array( 'name' => _( 'New Brunswick' ) ),
			'NL' => array( 'name' => _( 'Newfoundland and Labrador' ) ),
			'NS' => array( 'name' => _( 'Nova Scotia' ) ),
			'ON' => array( 'name' => _( 'Ontario' ) ),
			'PE' => array( 'name' => _( 'Prince Edward Island' ) ),
			'QC' => array( 'name' => _( 'Quebec' ) ),
			'SK' => array( 'name' => _( 'Saskatchewan' ) ),
			'NT' => array( 'name' => _( 'Northwest Territories' ) ),
			'NU' => array( 'name' => _( 'Nunavut' ) ),
			'YT' => array( 'name' => _( 'Yukon Territory' ) )
		) );
			break;
		case 'CD':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'KN' => array( 'name' => _( 'Kinshasa' ) ),
			'BN' => array( 'name' => _( 'Bandundu' ) ),
			'BC' => array( 'name' => _( 'Bas-Congo' ) ),
			'EQ' => array( 'name' => _( 'Équateur' ) ),
			'HC' => array( 'name' => _( 'Haut-Congo' ) ),
			'KW' => array( 'name' => _( 'Kasai-Occidental' ) ),
			'KE' => array( 'name' => _( 'Kasai-Oriental' ) ),
			'KA' => array( 'name' => _( 'Katanga' ) ),
			'MA' => array( 'name' => _( 'Maniema' ) ),
			'NK' => array( 'name' => _( 'Nord-Kivu' ) ),
			'OR' => array( 'name' => _( 'Orientale' ) ),
			'SK' => array( 'name' => _( 'Sud-Kivu' ) )
		) );
			break;
		case 'CF':
			return array(
		'regions_label' => _( 'Prefecture' ),
		'regions' => array(
			'BGF' => array( 'name' => _( 'Bangui' ) ),
			'BB' => array( 'name' => _( 'Bamingui-Bangoran' ) ),
			'BK' => array( 'name' => _( 'Basse-Kotto' ) ),
			'HK' => array( 'name' => _( 'Haute-Kotto' ) ),
			'HM' => array( 'name' => _( 'Haut-Mbomou' ) ),
			'KG' => array( 'name' => _( 'Kémo-Gribingui' ) ),
			'LB' => array( 'name' => _( 'Lobaye' ) ),
			'HS' => array( 'name' => _( 'Haute-Sangha / Mambéré-Kadéï' ) ),
			'MB' => array( 'name' => _( 'Mbomou' ) ),
			'NM' => array( 'name' => _( 'Nana-Mambéré' ) ),
			'MP' => array( 'name' => _( 'Ombella-M\'poko' ) ),
			'UK' => array( 'name' => _( 'Ouaka' ) ),
			'AC' => array( 'name' => _( 'Ouham' ) ),
			'OP' => array( 'name' => _( 'Ouham-Pendé' ) ),
			'VR' => array( 'name' => _( 'Vakaga' ) ),
			'KB' => array( 'name' => _( 'Gribingui' ) ),
			'SE' => array( 'name' => _( 'Sangha' ) )
		) );
			break;
		case 'CG':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'11' => array( 'name' => _( 'Bouenza' ) ),
			'8' => array( 'name' => _( 'Cuvette' ) ),
			'15' => array( 'name' => _( 'Cuvette-Ouest' ) ),
			'5' => array( 'name' => _( 'Kouilou' ) ),
			'2' => array( 'name' => _( 'Lékoumou' ) ),
			'7' => array( 'name' => _( 'Likouala' ) ),
			'9' => array( 'name' => _( 'Niari' ) ),
			'14' => array( 'name' => _( 'Plateaux' ) ),
			'12' => array( 'name' => _( 'Pool' ) ),
			'13' => array( 'name' => _( 'Sangha' ) ),
			'BZV' => array( 'name' => _( 'Brazzaville' ) )
		) );
			break;
		case 'CH':
			return array(
		'regions_label' => _( 'Canton' ),
		'regions' => array(
			'AG' => array( 'name' => _( 'Aargau' ) ),
			'AI' => array( 'name' => _( 'Appenzell Innerrhoden' ) ),
			'AR' => array( 'name' => _( 'Appenzell Ausserrhoden' ) ),
			'BE' => array( 'name' => _( 'Bern' ) ),
			'BL' => array( 'name' => _( 'Basel-Landschaft' ) ),
			'BS' => array( 'name' => _( 'Basel-Stadt' ) ),
			'FR' => array( 'name' => _( 'Fribourg' ) ),
			'GE' => array( 'name' => _( 'Genève' ) ),
			'GL' => array( 'name' => _( 'Glarus' ) ),
			'GR' => array( 'name' => _( 'Graubünden' ) ),
			'JU' => array( 'name' => _( 'Jura' ) ),
			'LU' => array( 'name' => _( 'Luzern' ) ),
			'NE' => array( 'name' => _( 'Neuchâtel' ) ),
			'NW' => array( 'name' => _( 'Nidwalden' ) ),
			'OW' => array( 'name' => _( 'Obwalden' ) ),
			'SG' => array( 'name' => _( 'Sankt Gallen' ) ),
			'SH' => array( 'name' => _( 'Schaffhausen' ) ),
			'SO' => array( 'name' => _( 'Solothurn' ) ),
			'SZ' => array( 'name' => _( 'Schwyz' ) ),
			'TG' => array( 'name' => _( 'Thurgau' ) ),
			'TI' => array( 'name' => _( 'Ticino' ) ),
			'UR' => array( 'name' => _( 'Uri' ) ),
			'VD' => array( 'name' => _( 'Vaud' ) ),
			'VS' => array( 'name' => _( 'Valais' ) ),
			'ZG' => array( 'name' => _( 'Zug' ) ),
			'ZH' => array( 'name' => _( 'Zürich' ) )
		) );
			break;
		case 'CI':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'06' => array( 'name' => _( '18 Montagnes (Région des)' ) ),
				16 => array( 'name' => _( 'Agnébi (Région de l\')' ) ),
				17 => array( 'name' => _( 'Bafing (Région du)' ) ),
			'09' => array( 'name' => _( 'Bas-Sassandra (Région du)' ) ),
				10 => array( 'name' => _( 'Denguélé (Région du)' ) ),
				18 => array( 'name' => _( 'Fromager (Région du)' ) ),
			'02' => array( 'name' => _( 'Haut-Sassandra (Région du)' ) ),
			'07' => array( 'name' => _( 'Lacs (Région des)' ) ),
			'01' => array( 'name' => _( 'Lagunes (Région des)' ) ),
				12 => array( 'name' => _( 'Marahoué (Région de la)' ) ),
				19 => array( 'name' => _( 'Moyen-Cavally (Région du)' ) ),
			'05' => array( 'name' => _( 'Moyen-Comoé (Région du)' ) ),
				11 => array( 'name' => _( 'Nzi-Comoé (Région)' ) ),
			'03' => array( 'name' => _( 'Savanes (Région des)' ) ),
				15 => array( 'name' => _( 'Sud-Bandama (Région du)' ) ),
				13 => array( 'name' => _( 'Sud-Comoé (Région du)' ) ),
			'04' => array( 'name' => _( 'Vallée du Bandama (Région de la)' ) ),
				14 => array( 'name' => _( 'Worodouqou (Région du)' ) ),
			'08' => array( 'name' => _( 'Zanzan (Région du)' ) )
		) );
			break;
		case 'CL':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'AI' => array( 'name' => _( 'Aisén del General Carlos Ibáñez del Campo' ) ),
			'AN' => array( 'name' => _( 'Antofagasta' ) ),
			'AR' => array( 'name' => _( 'Araucanía' ) ),
			'AP' => array( 'name' => _( 'Arica y Parinacota' ) ),
			'AT' => array( 'name' => _( 'Atacama' ) ),
			'BI' => array( 'name' => _( 'Bío-Bío' ) ),
			'CO' => array( 'name' => _( 'Coquimbo' ) ),
			'LI' => array( 'name' => _( 'Libertador General Bernardo O\'Higgins' ) ),
			'LL' => array( 'name' => _( 'Los Lagos' ) ),
			'LR' => array( 'name' => _( 'Los Ríos' ) ),
			'MA' => array( 'name' => _( 'Magallanes y Antártica Chilena' ) ),
			'ML' => array( 'name' => _( 'Maule' ) ),
			'RM' => array( 'name' => _( 'Región Metropolitana de Santiago' ) ),
			'TA' => array( 'name' => _( 'Tarapacá' ) ),
			'VS' => array( 'name' => _( 'Valparaíso' ) )
		) );
			break;
		case 'CM':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'AD' => array( 'name' => _( 'Adamaoua' ) ),
			'CE' => array( 'name' => _( 'Centre' ) ),
			'ES' => array( 'name' => _( 'East' ) ),
			'EN' => array( 'name' => _( 'Far North' ) ),
			'LT' => array( 'name' => _( 'Littoral' ) ),
			'NO' => array( 'name' => _( 'North' ) ),
			'NW' => array( 'name' => _( 'North-West (Cameroon)' ) ),
			'SU' => array( 'name' => _( 'South' ) ),
			'SW' => array( 'name' => _( 'South-West' ) ),
			'OU' => array( 'name' => _( 'West' ) )
		) );
			break;
		case 'CN':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'11' => array( 'name' => _( 'Beijing' ) ),
			'50' => array( 'name' => _( 'Chongqing' ) ),
			'31' => array( 'name' => _( 'Shanghai' ) ),
			'12' => array( 'name' => _( 'Tianjin' ) ),
			'34' => array( 'name' => _( 'Anhui' ) ),
			'35' => array( 'name' => _( 'Fujian' ) ),
			'62' => array( 'name' => _( 'Gansu' ) ),
			'44' => array( 'name' => _( 'Guangdong' ) ),
			'52' => array( 'name' => _( 'Guizhou' ) ),
			'46' => array( 'name' => _( 'Hainan' ) ),
			'13' => array( 'name' => _( 'Hebei' ) ),
			'23' => array( 'name' => _( 'Heilongjiang' ) ),
			'41' => array( 'name' => _( 'Henan' ) ),
			'42' => array( 'name' => _( 'Hubei' ) ),
			'43' => array( 'name' => _( 'Hunan' ) ),
			'32' => array( 'name' => _( 'Jiangsu' ) ),
			'36' => array( 'name' => _( 'Jiangxi' ) ),
			'22' => array( 'name' => _( 'Jilin' ) ),
			'21' => array( 'name' => _( 'Liaoning' ) ),
			'63' => array( 'name' => _( 'Qinghai' ) ),
			'61' => array( 'name' => _( 'Shaanxi' ) ),
			'37' => array( 'name' => _( 'Shandong' ) ),
			'14' => array( 'name' => _( 'Shanxi' ) ),
			'51' => array( 'name' => _( 'Sichuan' ) ),
			'71' => array( 'name' => _( 'Taiwan' ) ),
			'53' => array( 'name' => _( 'Yunnan' ) ),
			'33' => array( 'name' => _( 'Zhejiang' ) ),
			'45' => array( 'name' => _( 'Guangxi' ) ),
			'15' => array( 'name' => _( 'Nei Mongol' ) ),
			'64' => array( 'name' => _( 'Ningxia' ) ),
			'65' => array( 'name' => _( 'Xinjiang' ) ),
			'54' => array( 'name' => _( 'Xizang' ) ),
			'91' => array( 'name' => _( 'Xianggang (Hong-Kong)' ) ),
			'92' => array( 'name' => _( 'Aomen (Macau)' ) )
		) );
			break;
		case 'CO':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'DC' => array( 'name' => _( 'Distrito Capital de Bogotá' ) ),
			'AMA' => array( 'name' => _( 'Amazonas' ) ),
			'ANT' => array( 'name' => _( 'Antioquia' ) ),
			'ARA' => array( 'name' => _( 'Arauca' ) ),
			'ATL' => array( 'name' => _( 'Atlántico' ) ),
			'BOL' => array( 'name' => _( 'Bolívar' ) ),
			'BOY' => array( 'name' => _( 'Boyacá' ) ),
			'CAL' => array( 'name' => _( 'Caldas' ) ),
			'CAQ' => array( 'name' => _( 'Caquetá' ) ),
			'CAS' => array( 'name' => _( 'Casanare' ) ),
			'CAU' => array( 'name' => _( 'Cauca' ) ),
			'CES' => array( 'name' => _( 'Cesar' ) ),
			'CHO' => array( 'name' => _( 'Chocó' ) ),
			'COR' => array( 'name' => _( 'Córdoba' ) ),
			'CUN' => array( 'name' => _( 'Cundinamarca' ) ),
			'GUA' => array( 'name' => _( 'Guainía' ) ),
			'GUV' => array( 'name' => _( 'Guaviare' ) ),
			'HUI' => array( 'name' => _( 'Huila' ) ),
			'LAG' => array( 'name' => _( 'La Guajira' ) ),
			'MAG' => array( 'name' => _( 'Magdalena' ) ),
			'MET' => array( 'name' => _( 'Meta' ) ),
			'NAR' => array( 'name' => _( 'Nariño' ) ),
			'NSA' => array( 'name' => _( 'Norte de Santander' ) ),
			'PUT' => array( 'name' => _( 'Putumayo' ) ),
			'QUI' => array( 'name' => _( 'Quindío' ) ),
			'RIS' => array( 'name' => _( 'Risaralda' ) ),
			'SAP' => array( 'name' => _( 'San Andrés, Providencia y Santa Catalina' ) ),
			'SAN' => array( 'name' => _( 'Santander' ) ),
			'SUC' => array( 'name' => _( 'Sucre' ) ),
			'TOL' => array( 'name' => _( 'Tolima' ) ),
			'VAC' => array( 'name' => _( 'Valle del Cauca' ) ),
			'VAU' => array( 'name' => _( 'Vaupés' ) ),
			'VID' => array( 'name' => _( 'Vichada' ) )
		) );
			break;
		case 'CR':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'A' => array( 'name' => _( 'Alajuela' ) ),
			'C' => array( 'name' => _( 'Cartago' ) ),
			'G' => array( 'name' => _( 'Guanacaste' ) ),
			'H' => array( 'name' => _( 'Heredia' ) ),
			'L' => array( 'name' => _( 'Limón' ) ),
			'P' => array( 'name' => _( 'Puntarenas' ) ),
			'SJ' => array( 'name' => _( 'San José' ) )
		) );
			break;
		case 'CU':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'09' => array( 'name' => _( 'Camagüey' ) ),
			'08' => array( 'name' => _( 'Ciego de Ávila' ) ),
			'06' => array( 'name' => _( 'Cienfuegos' ) ),
			'03' => array( 'name' => _( 'Ciudad de La Habana' ) ),
			'12' => array( 'name' => _( 'Granma' ) ),
			'14' => array( 'name' => _( 'Guantánamo' ) ),
			'11' => array( 'name' => _( 'Holguín' ) ),
			'02' => array( 'name' => _( 'La Habana' ) ),
			'10' => array( 'name' => _( 'Las Tunas' ) ),
			'04' => array( 'name' => _( 'Matanzas' ) ),
			'01' => array( 'name' => _( 'Pinar del Rio' ) ),
			'07' => array( 'name' => _( 'Sancti Spíritus' ) ),
			'13' => array( 'name' => _( 'Santiago de Cuba' ) ),
			'05' => array( 'name' => _( 'Villa Clara' ) ),
			'99' => array( 'name' => _( 'Isla de la Juventud' ) )
		) );
			break;
		case 'CV':
			return array(
		'regions_label' => _( 'Municipality' ),
		'regions' => array(
			'BV' => array( 'name' => _( 'Boa Vista' ) ),
			'PA' => array( 'name' => _( 'Paul' ) ),
			'PN' => array( 'name' => _( 'Porto Novo' ) ),
			'RB' => array( 'name' => _( 'Ribeira Brava' ) ),
			'RG' => array( 'name' => _( 'Ribeira Grande' ) ),
			'SL' => array( 'name' => _( 'Sal' ) ),
			'SV' => array( 'name' => _( 'São Vicente' ) ),
			'BR' => array( 'name' => _( 'Brava' ) ),
			'MA' => array( 'name' => _( 'Maio' ) ),
			'MO' => array( 'name' => _( 'Mosteiros' ) ),
			'PR' => array( 'name' => _( 'Praia' ) ),
			'RS' => array( 'name' => _( 'Ribeira Grande de Santiago' ) ),
			'CA' => array( 'name' => _( 'Santa Catarina' ) ),
			'CF' => array( 'name' => _( 'Santa Catarina de Fogo' ) ),
			'CR' => array( 'name' => _( 'Santa Cruz' ) ),
			'SD' => array( 'name' => _( 'São Domingos' ) ),
			'SF' => array( 'name' => _( 'São Filipe' ) ),
			'SL' => array( 'name' => _( 'São Lourenço dos Órgãos' ) ),
			'SM' => array( 'name' => _( 'São Miguel' ) ),
			'SS' => array( 'name' => _( 'São Salvador do Mundo' ) ),
			'TA' => array( 'name' => _( 'Tarrafal' ) ),
			'TS' => array( 'name' => _( 'Tarrafal de São Nicolau' ) )
		) );
			break;
		case 'CY':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'04' => array( 'name' => _( 'Ammóchostos' ) ),
			'06' => array( 'name' => _( 'Kerýneia' ) ),
			'03' => array( 'name' => _( 'Lárnaka' ) ),
			'01' => array( 'name' => _( 'Lefkosía' ) ),
			'02' => array( 'name' => _( 'Lemesós' ) ),
			'05' => array( 'name' => _( 'Páfos' ) )
		) );
			break;
		case 'CZ':
			return array(
		'regions_label' => _( 'Region' ),
		'subregions_label' => _( 'District' ),
		'regions' => array(
			'JC' => array(
				'name' => _( 'Jihočeský kraj' ),
				'subregions' => array(
					'311' => array( 'name' => _( 'České Budějovice' ) ),
					'312' => array( 'name' => _( 'Český Krumlov' ) ),
					'313' => array( 'name' => _( 'Jindřichův Hradec' ) ),
					'314' => array( 'name' => _( 'Písek' ) ),
					'315' => array( 'name' => _( 'Prachatice' ) ),
					'316' => array( 'name' => _( 'Strakonice' ) ),
					'317' => array( 'name' => _( 'Tábor' ) )
				),
			),
			'JM' => array(
				'name' => _( 'Jihomoravský kraj' ),
				'subregions' => array(
					'621' => array( 'name' => _( 'Blansko' ) ),
					'622' => array( 'name' => _( 'Brno-město' ) ),
					'623' => array( 'name' => _( 'Brno-venkov' ) ),
					'624' => array( 'name' => _( 'Břeclav' ) ),
					'625' => array( 'name' => _( 'Hodonín' ) ),
					'626' => array( 'name' => _( 'Vyškov' ) ),
					'627' => array( 'name' => _( 'Znojmo' ) )
				)
			),
			'KA' => array(
				'name' => _( 'Karlovarský kraj' ),
				'subregions' => array(
					'411' => array( 'name' => _( 'Cheb' ) ),
					'412' => array( 'name' => _( 'Karlovy Vary' ) ),
					'413' => array( 'name' => _( 'Sokolov' ) )
				)
			),
			'KR' => array(
				'name' => _( 'Královéhradecký kraj' ),
				'subregions' => array(
					'521' => array( 'name' => _( 'Hradec Králové' ) ),
					'522' => array( 'name' => _( 'Jičín' ) ),
					'523' => array( 'name' => _( 'Náchod' ) ),
					'524' => array( 'name' => _( 'Rychnov nad Kněžnou' ) ),
					'525' => array( 'name' => _( 'Trutnov' ) )
				)
			),
			'LI' => array(
				'name' => _( 'Liberecký kraj' ),
				'subregions' => array(
					'511' => array( 'name' => _( 'Česká Lípa' ) ),
					'512' => array( 'name' => _( 'Jablonec nad Nisou' ) ),
					'513' => array( 'name' => _( 'Liberec' ) ),
					'514' => array( 'name' => _( 'Semily' ) )
				)
			),
			'MO' => array(
				'name' => _( 'Moravskoslezský kraj' ),
				'subregions' => array(
					'801' => array( 'name' => _( 'Bruntál' ) ),
					'802' => array( 'name' => _( 'Frýdek Místek' ) ),
					'803' => array( 'name' => _( 'Karviná' ) ),
					'804' => array( 'name' => _( 'Nový Jičín' ) ),
					'805' => array( 'name' => _( 'Opava' ) ),
					'806' => array( 'name' => _( 'Ostrava město' ) )
				)
			),
			'OL' => array(
				'name' => _( 'Olomoucký kraj' ),
				'subregions' => array(
					'711' => array( 'name' => _( 'Jeseník' ) ),
					'712' => array( 'name' => _( 'Olomouc' ) ),
					'713' => array( 'name' => _( 'Prostĕjov' ) ),
					'714' => array( 'name' => _( 'Přerov' ) ),
					'715' => array( 'name' => _( 'Šumperk' ) )
				)
			),
			'PA' => array(
				'name' => _( 'Pardubický kraj' ),
				'subregions' => array(
					'531' => array( 'name' => _( 'Chrudim' ) ),
					'532' => array( 'name' => _( 'Pardubice' ) ),
					'533' => array( 'name' => _( 'Svitavy' ) ),
					'534' => array( 'name' => _( 'Ústí nad Orlicí' ) )
				)
			),
			'PL' => array(
				'name' => _( 'Plzeňský kraj' ),
				'subregions' => array(
					'321' => array( 'name' => _( 'Domažlice' ) ),
					'322' => array( 'name' => _( 'Klatovy' ) ),
					'324' => array( 'name' => _( 'Plzeň jih' ) ),
					'323' => array( 'name' => _( 'Plzeň město' ) ),
					'325' => array( 'name' => _( 'Plzeň sever' ) ),
					'326' => array( 'name' => _( 'Rokycany' ) ),
					'327' => array( 'name' => _( 'Tachov' ) )
				)
			),
			'PR' => array(
				'name' => _( 'Praha, hlavní město' ),
				'subregions' => array(
					'101' => array( 'name' => _( 'Praha 1' ) ),
					'102' => array( 'name' => _( 'Praha 2' ) ),
					'103' => array( 'name' => _( 'Praha 3' ) ),
					'104' => array( 'name' => _( 'Praha 4' ) ),
					'105' => array( 'name' => _( 'Praha 5' ) ),
					'106' => array( 'name' => _( 'Praha 6' ) ),
					'107' => array( 'name' => _( 'Praha 7' ) ),
					'108' => array( 'name' => _( 'Praha 8' ) ),
					'109' => array( 'name' => _( 'Praha 9' ) ),
					'10A' => array( 'name' => _( 'Praha 10' ) ),
					'10B' => array( 'name' => _( 'Praha 11' ) ),
					'10C' => array( 'name' => _( 'Praha 12' ) ),
					'10D' => array( 'name' => _( 'Praha 13' ) ),
					'10E' => array( 'name' => _( 'Praha 14' ) ),
					'10F' => array( 'name' => _( 'Praha 15' ) )
				)
			),
			'ST' => array(
				'name' => _( 'Středočeský kraj' ),
				'subregions' => array(
					'201' => array( 'name' => _( 'Benešov' ) ),
					'202' => array( 'name' => _( 'Beroun' ) ),
					'203' => array( 'name' => _( 'Kladno' ) ),
					'204' => array( 'name' => _( 'Kolín' ) ),
					'205' => array( 'name' => _( 'Kutná Hora' ) ),
					'206' => array( 'name' => _( 'Mělník' ) ),
					'207' => array( 'name' => _( 'Mladá Boleslav' ) ),
					'208' => array( 'name' => _( 'Nymburk' ) ),
					'209' => array( 'name' => _( 'Praha východ' ) ),
					'20A' => array( 'name' => _( 'Praha západ' ) ),
					'20B' => array( 'name' => _( 'Příbram' ) ),
					'20C' => array( 'name' => _( 'Rakovník' ) )
				)
			),
			'US' => array(
				'name' => _( 'Ústecký kraj' ),
				'subregions' => array(
					'421' => array( 'name' => _( 'Děčín' ) ),
					'422' => array( 'name' => _( 'Chomutov' ) ),
					'423' => array( 'name' => _( 'Litoměřice' ) ),
					'424' => array( 'name' => _( 'Louny' ) ),
					'425' => array( 'name' => _( 'Most' ) ),
					'426' => array( 'name' => _( 'Teplice' ) ),
					'427' => array( 'name' => _( 'Ústí nad Labem' ) )
				)
			),
			'VY' => array(
				'name' => _( 'Vysočina' ),
				'subregions' => array(
					'611' => array( 'name' => _( 'Havlíčkův Brod' ) ),
					'612' => array( 'name' => _( 'Jihlava' ) ),
					'613' => array( 'name' => _( 'Pelhřimov' ) ),
					'614' => array( 'name' => _( 'Třebíč' ) ),
					'615' => array( 'name' => _( 'Žd’ár nad Sázavou' ) )
				)
			),
			'ZL' => array(
				'name' => _( 'Zlínský kraj' ),
				'subregions' => array(
					'721' => array( 'name' => _( 'Kromĕříž' ) ),
					'722' => array( 'name' => _( 'Uherské Hradištĕ' ) ),
					'723' => array( 'name' => _( 'Vsetín' ) ),
					'724' => array( 'name' => _( 'Zlín' ) )
				)
			)
		) );
			break;
		case 'DE':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'BW' => array( 'name' => _( 'Baden-Württemberg' ) ),
			'BY' => array( 'name' => _( 'Bayern' ) ),
			'HB' => array( 'name' => _( 'Bremen' ) ),
			'HH' => array( 'name' => _( 'Hamburg' ) ),
			'HE' => array( 'name' => _( 'Hessen' ) ),
			'NI' => array( 'name' => _( 'Niedersachsen' ) ),
			'NW' => array( 'name' => _( 'Nordrhein-Westfalen' ) ),
			'RP' => array( 'name' => _( 'Rheinland-Pfalz' ) ),
			'SL' => array( 'name' => _( 'Saarland' ) ),
			'SH' => array( 'name' => _( 'Schleswig-Holstein' ) ),
			'BE' => array( 'name' => _( 'Berlin' ) ),
			'BB' => array( 'name' => _( 'Brandenburg' ) ),
			'MV' => array( 'name' => _( 'Mecklenburg-Vorpommern' ) ),
			'SN' => array( 'name' => _( 'Sachsen' ) ),
			'ST' => array( 'name' => _( 'Sachsen-Anhalt' ) ),
			'TH' => array( 'name' => _( 'Thüringen' ) )
		) );
			break;
		case 'DJ':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'AS' => array( 'name' => _( 'Ali Sabieh' ) ),
			'AR' => array( 'name' => _( 'Arta' ) ),
			'DI' => array( 'name' => _( 'Dikhil' ) ),
			'OB' => array( 'name' => _( 'Obock' ) ),
			'TA' => array( 'name' => _( 'Tadjourah' ) ),
			'DJ' => array( 'name' => _( 'Djibouti' ) )
		) );
			break;
		case 'DK':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'81' => array( 'name' => _( 'Nordjylland' ) ),
			'82' => array( 'name' => _( 'Midtjylland' ) ),
			'83' => array( 'name' => _( 'Syddanmark' ) ),
			'84' => array( 'name' => _( 'Hovedstaden' ) ),
			'85' => array( 'name' => _( 'Sjælland' ) )
		) );
			break;
		case 'DM':
			return array(
		'regions_label' => _( 'Parish' ),
		'regions' => array(
			'02' => array( 'name' => _( 'Saint Andrew' ) ),
			'03' => array( 'name' => _( 'Saint David' ) ),
			'04' => array( 'name' => _( 'Saint George' ) ),
			'05' => array( 'name' => _( 'Saint John' ) ),
			'06' => array( 'name' => _( 'Saint Joseph' ) ),
			'07' => array( 'name' => _( 'Saint Luke' ) ),
			'08' => array( 'name' => _( 'Saint Mark' ) ),
			'09' => array( 'name' => _( 'Saint Patrick' ) ),
			'10' => array( 'name' => _( 'Saint Paul' ) ),
			'01' => array( 'name' => _( 'Saint Peter' ) )
		) );
			break;
		case 'DO':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Distrito Nacional (Santo Domingo)' ) ),
			'02' => array( 'name' => _( 'Azua' ) ),
			'03' => array( 'name' => _( 'Bahoruco' ) ),
			'04' => array( 'name' => _( 'Barahona' ) ),
			'05' => array( 'name' => _( 'Dajabón' ) ),
			'06' => array( 'name' => _( 'Duarte' ) ),
			'08' => array( 'name' => _( 'El Seybo [El Seibo]' ) ),
			'09' => array( 'name' => _( 'Espaillat' ) ),
			'30' => array( 'name' => _( 'Hato Mayor' ) ),
			'10' => array( 'name' => _( 'Independencia' ) ),
			'11' => array( 'name' => _( 'La Altagracia' ) ),
			'07' => array( 'name' => _( 'La Estrelleta [Elías Piña]' ) ),
			'12' => array( 'name' => _( 'La Romana' ) ),
			'13' => array( 'name' => _( 'La Vega' ) ),
			'14' => array( 'name' => _( 'María Trinidad Sánchez' ) ),
			'28' => array( 'name' => _( 'Monseñor Nouel' ) ),
			'15' => array( 'name' => _( 'Monte Cristi' ) ),
			'29' => array( 'name' => _( 'Monte Plata' ) ),
			'16' => array( 'name' => _( 'Pedernales' ) ),
			'17' => array( 'name' => _( 'Peravia' ) ),
			'18' => array( 'name' => _( 'Puerto Plata' ) ),
			'19' => array( 'name' => _( 'Salcedo' ) ),
			'20' => array( 'name' => _( 'Samaná' ) ),
			'21' => array( 'name' => _( 'San Cristóbal' ) ),
			'22' => array( 'name' => _( 'San Juan' ) ),
			'23' => array( 'name' => _( 'San Pedro de Macorís' ) ),
			'24' => array( 'name' => _( 'Sánchez Ramírez' ) ),
			'25' => array( 'name' => _( 'Santiago' ) ),
			'26' => array( 'name' => _( 'Santiago Rodríguez' ) ),
			'27' => array( 'name' => _( 'Valverde' ) )
		) );
			break;
		case 'DZ':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Adrar' ) ),
				44 => array( 'name' => _( 'Aïn Defla' ) ),
				46 => array( 'name' => _( 'Aïn Témouchent' ) ),
				16 => array( 'name' => _( 'Alger' ) ),
				23 => array( 'name' => _( 'Annaba' ) ),
			'05' => array( 'name' => _( 'Batna' ) ),
			'08' => array( 'name' => _( 'Béchar' ) ),
			'06' => array( 'name' => _( 'Béjaïa' ) ),
			'07' => array( 'name' => _( 'Biskra' ) ),
			'09' => array( 'name' => _( 'Blida' ) ),
				34 => array( 'name' => _( 'Bordj Bou Arréridj' ) ),
				10 => array( 'name' => _( 'Bouira' ) ),
				35 => array( 'name' => _( 'Boumerdès' ) ),
			'02' => array( 'name' => _( 'Chlef' ) ),
				25 => array( 'name' => _( 'Constantine' ) ),
				17 => array( 'name' => _( 'Djelfa' ) ),
				32 => array( 'name' => _( 'El Bayadh' ) ),
				39 => array( 'name' => _( 'El Oued' ) ),
				36 => array( 'name' => _( 'El Tarf' ) ),
				47 => array( 'name' => _( 'Ghardaïa' ) ),
				24 => array( 'name' => _( 'Guelma' ) ),
				33 => array( 'name' => _( 'Illizi' ) ),
				18 => array( 'name' => _( 'Jijel' ) ),
				40 => array( 'name' => _( 'Khenchela' ) ),
			'03' => array( 'name' => _( 'Laghouat' ) ),
				29 => array( 'name' => _( 'Mascara' ) ),
				26 => array( 'name' => _( 'Médéa' ) ),
				43 => array( 'name' => _( 'Mila' ) ),
				27 => array( 'name' => _( 'Mostaganem' ) ),
				28 => array( 'name' => _( 'Msila' ) ),
				45 => array( 'name' => _( 'Naama' ) ),
				31 => array( 'name' => _( 'Oran' ) ),
				30 => array( 'name' => _( 'Ouargla' ) ),
			'04' => array( 'name' => _( 'Oum el Bouaghi' ) ),
				48 => array( 'name' => _( 'Relizane' ) ),
				20 => array( 'name' => _( 'Saïda' ) ),
				19 => array( 'name' => _( 'Sétif' ) ),
				22 => array( 'name' => _( 'Sidi Bel Abbès' ) ),
				21 => array( 'name' => _( 'Skikda' ) ),
				41 => array( 'name' => _( 'Souk Ahras' ) ),
				11 => array( 'name' => _( 'Tamanghasset' ) ),
				12 => array( 'name' => _( 'Tébessa' ) ),
				14 => array( 'name' => _( 'Tiaret' ) ),
				37 => array( 'name' => _( 'Tindouf' ) ),
				42 => array( 'name' => _( 'Tipaza' ) ),
				38 => array( 'name' => _( 'Tissemsilt' ) ),
				15 => array( 'name' => _( 'Tizi Ouzou' ) ),
				13 => array( 'name' => _( 'Tlemcen' ) )
		) );
			break;
		case 'EC':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'A' => array( 'name' => _( 'Azuay' ) ),
			'B' => array( 'name' => _( 'Bolívar' ) ),
			'F' => array( 'name' => _( 'Cañar' ) ),
			'C' => array( 'name' => _( 'Carchi' ) ),
			'X' => array( 'name' => _( 'Cotopaxi' ) ),
			'H' => array( 'name' => _( 'Chimborazo' ) ),
			'O' => array( 'name' => _( 'El Oro' ) ),
			'E' => array( 'name' => _( 'Esmeraldas' ) ),
			'W' => array( 'name' => _( 'Galápagos' ) ),
			'G' => array( 'name' => _( 'Guayas' ) ),
			'I' => array( 'name' => _( 'Imbabura' ) ),
			'L' => array( 'name' => _( 'Loja' ) ),
			'R' => array( 'name' => _( 'Los Ríos' ) ),
			'M' => array( 'name' => _( 'Manabí' ) ),
			'S' => array( 'name' => _( 'Morona-Santiago' ) ),
			'N' => array( 'name' => _( 'Napo' ) ),
			'D' => array( 'name' => _( 'Orellana' ) ),
			'Y' => array( 'name' => _( 'Pastaza' ) ),
			'P' => array( 'name' => _( 'Pichincha' ) ),
			'SE' => array( 'name' => _( 'Santa Elena' ) ),
			'SD' => array( 'name' => _( 'Santo Domingo de los Tsáchilas' ) ),
			'U' => array( 'name' => _( 'Sucumbíos' ) ),
			'T' => array( 'name' => _( 'Tungurahua' ) ),
			'Z' => array( 'name' => _( 'Zamora-Chinchipe' ) )
		) );
			break;
		case 'EE':
			return array(
		'regions_label' => _( 'County' ),
		'regions' => array(
				37 => array( 'name' => _( 'Harjumaa' ) ),
				39 => array( 'name' => _( 'Hiiumaa' ) ),
				44 => array( 'name' => _( 'Ida-Virumaa' ) ),
				49 => array( 'name' => _( 'Jõgevamaa' ) ),
				51 => array( 'name' => _( 'Järvamaa' ) ),
				57 => array( 'name' => _( 'Läänemaa' ) ),
				59 => array( 'name' => _( 'Lääne-Virumaa' ) ),
				65 => array( 'name' => _( 'Põlvamaa' ) ),
				67 => array( 'name' => _( 'Pärnumaa' ) ),
				70 => array( 'name' => _( 'Raplamaa' ) ),
				74 => array( 'name' => _( 'Saaremaa' ) ),
				78 => array( 'name' => _( 'Tartumaa' ) ),
				82 => array( 'name' => _( 'Valgamaa' ) ),
				84 => array( 'name' => _( 'Viljandimaa' ) ),
				86 => array( 'name' => _( 'Võrumaa' ) )
		) );
			break;
		case 'EG':
			return array(
		'regions_label' => _( 'Governorate' ),
		'regions' => array(
			'DK' => array( 'name' => _( 'Ad Daqahlīyah' ) ),
			'BA' => array( 'name' => _( 'Al Bahr al Ahmar' ) ),
			'BH' => array( 'name' => _( 'Al Buhayrah' ) ),
			'FYM' => array( 'name' => _( 'Al Fayyūm' ) ),
			'GH' => array( 'name' => _( 'Al Gharbīyah' ) ),
			'ALX' => array( 'name' => _( 'Al Iskandarīyah' ) ),
			'IS' => array( 'name' => _( 'Al Ismā`īlīyah' ) ),
			'GZ' => array( 'name' => _( 'Al Jīzah' ) ),
			'MNF' => array( 'name' => _( 'Al Minūfīyah' ) ),
			'MN' => array( 'name' => _( 'Al Minyā' ) ),
			'C' => array( 'name' => _( 'Al Qāhirah' ) ),
			'KB' => array( 'name' => _( 'Al Qalyūbīyah' ) ),
			'WAD' => array( 'name' => _( 'Al Wādī al Jadīd' ) ),
			'SU' => array( 'name' => _( 'As Sādis min Uktūbar' ) ),
			'SHR' => array( 'name' => _( 'Ash Sharqīyah' ) ),
			'SUZ' => array( 'name' => _( 'As Suways' ) ),
			'ASN' => array( 'name' => _( 'Aswān' ) ),
			'AST' => array( 'name' => _( 'Asyūt' ) ),
			'BNS' => array( 'name' => _( 'Banī Suwayf' ) ),
			'PTS' => array( 'name' => _( 'Būr Sa`īd' ) ),
			'DT' => array( 'name' => _( 'Dumyāt' ) ),
			'HU' => array( 'name' => _( 'Ḩulwān' ) ),
			'JS' => array( 'name' => _( 'Janūb Sīnā\'' ) ),
			'KFS' => array( 'name' => _( 'Kafr ash Shaykh' ) ),
			'MT' => array( 'name' => _( 'Matrūh' ) ),
			'KN' => array( 'name' => _( 'Qinā' ) ),
			'SIN' => array( 'name' => _( 'Shamal Sīnā\'' ) ),
			'SHG' => array( 'name' => _( 'Sūhāj' ) )
		) );
			break;
		case 'ER':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'AN' => array( 'name' => _( 'Anseba' ) ),
			'DU' => array( 'name' => _( 'Debub' ) ),
			'DK' => array( 'name' => _( 'Debubawi Keyih Bahri [Debub-Keih-Bahri]' ) ),
			'GB' => array( 'name' => _( 'Gash-Barka' ) ),
			'MA' => array( 'name' => _( 'Maakel [Maekel]' ) ),
			'SK' => array( 'name' => _( 'Semenawi Keyih Bahri [Semien-Keih-Bahri]' ) )
		) );
			break;
		case 'ES':
			return array(
		'regions_label' => _( 'Autonomous community' ),
		'subregions_label' => _( 'Province' ),
		'regions' => array(
			'AN' => array(
				'name' => _( 'Andalucía' ),
				'subregions' => array(
					'AL' => array( 'name' => _( 'Almería' ) ),
					'CA' => array( 'name' => _( 'Cádiz' ) ),
					'CO' => array( 'name' => _( 'Córdoba' ) ),
					'GR' => array( 'name' => _( 'Granada' ) ),
					'H' => array( 'name' => _( 'Huelva' ) ),
					'J' => array( 'name' => _( 'Jaén' ) ),
					'MA' => array( 'name' => _( 'Málaga' ) ),
					'SE' => array( 'name' => _( 'Sevilla' ) )
				)
			),
			'AR' => array(
				'name' => _( 'Aragón' ),
				'subregions' => array(
					'HU' => array( 'name' => _( 'Huesca' ) ),
					'TE' => array( 'name' => _( 'Teruel' ) ),
					'Z' => array( 'name' => _( 'Zaragoza' ) )
				)
			),
			'AS' => array( 'name' => _( 'Asturias, Principado de' ) ),
			'CN' => array(
				'name' => _( 'Canarias' ),
				'subregions' => array(
					'GC' => array( 'name' => _( 'Las Palmas' ) ),
					'TF' => array( 'name' => _( 'Santa Cruz de Tenerife' ) )
				)
			),
			'CB' => array( 'name' => _( 'Cantabria' ) ),
			'CM' => array(
				'name' => _( 'Castilla-La Mancha' ),
				'subregions' => array(
					'AB' => array( 'name' => _( 'Albacete' ) ),
					'CR' => array( 'name' => _( 'Ciudad Real' ) ),
					'CU' => array( 'name' => _( 'Cuenca' ) ),
					'GU' => array( 'name' => _( 'Guadalajara' ) ),
					'TO' => array( 'name' => _( 'Toledo' ) )
				),
			),
			'CL' => array(
				'name' => _( 'Castilla y León' ),
				'subregions' => array(
					'AV' => array( 'name' => _( 'Ávila' ) ),
					'BU' => array( 'name' => _( 'Burgos' ) ),
					'LE' => array( 'name' => _( 'León' ) ),
					'P' => array( 'name' => _( 'Palencia' ) ),
					'SA' => array( 'name' => _( 'Salamanca' ) ),
					'SG' => array( 'name' => _( 'Segovia' ) ),
					'SO' => array( 'name' => _( 'Soria' ) ),
					'VA' => array( 'name' => _( 'Valladolid' ) ),
					'ZA' => array( 'name' => _( 'Zamora' ) )
				)
			),
			'CT' => array(
				'name' => _( 'Catalunya' ),
				'subregions' => array(
					'B' => array( 'name' => _( 'Barcelona' ) ),
					'GI' => array( 'name' => _( 'Girona' ) ),
					'L' => array( 'name' => _( 'Lleida' ) ),
					'T' => array( 'name' => _( 'Tarragona' ) )
				)
			),
			'EX' => array(
				'name' => _( 'Extremadura' ),
				'subregions' => array(
					'BA' => array( 'name' => _( 'Badajoz' ) ),
					'CC' => array( 'name' => _( 'Cáceres' ) )
				)
			),
			'GA' => array(
				'name' => _( 'Galicia' ),
				'subregions' => array(
					'C' => array( 'name' => _( 'A Coruña' ) ),
					'LU' => array( 'name' => _( 'Lugo' ) ),
					'OR' => array( 'name' => _( 'Ourense' ) ),
					'PO' => array( 'name' => _( 'Pontevedra' ) )
				)
			),
			'PM' => array( 'name' => _( 'Illes Balears' ) ),
			'RI' => array( 'name' => _( 'La Rioja' ) ),
			'MD' => array( 'name' => _( 'Madrid, Comunidad de' ) ),
			'MC' => array( 'name' => _( 'Murcia, Región de' ) ),
			'NC' => array( 'name' => _( 'Navarra, Comunidad Foral de / Nafarroako Foru Komunitatea' ) ),
			'PV' => array(
				'name' => _( 'País Vasco / Euskal Herria' ),
				'subregions' => array(
					'VI' => array( 'name' => _( 'Álava' ) ),
					'SS' => array( 'name' => _( 'Guipúzcoa / Gipuzkoa' ) ),
					'BI' => array( 'name' => _( 'Vizcayaa / Bizkaia' ) )
				)
			),
			'VC' => array(
				'name' => _( 'Valenciana, Comunidad / Valenciana, Comunitat ' ),
				'subregions' => array(
					'A' => array( 'name' => _( 'Alicante' ) ),
					'CS' => array( 'name' => _( 'Castellón' ) ),
					'V' => array( 'name' => _( 'Valencia / València' ) )
				)
			),
			'IB' => array( 'name' => _( 'Balears') ),
			'CE' => array( 'name' => _( 'Ceuta' ) ),
			'ML' => array( 'name' => _( 'Melilla' ) )
		) );
			break;
		case 'ET':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'AA' => array( 'name' => _( 'Ādīs Ābeba' ) ),
			'DD' => array( 'name' => _( 'Dirē Dawa' ) ),
			'AF' => array( 'name' => _( 'Āfar' ) ),
			'AM' => array( 'name' => _( 'Āmara' ) ),
			'BE' => array( 'name' => _( 'Bīnshangul Gumuz' ) ),
			'GA' => array( 'name' => _( 'Gambēla Hizboch' ) ),
			'HA' => array( 'name' => _( 'Hārerī Hizb' ) ),
			'OR' => array( 'name' => _( 'Oromīya' ) ),
			'SO' => array( 'name' => _( 'Sumalē' ) ),
			'TI' => array( 'name' => _( 'Tigray' ) ),
			'SN' => array( 'name' => _( 'YeDebub Bihēroch Bihēreseboch na Hizboch' ) )
		) );
			break;
		case 'FI':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'AL' => array( 'name' => _( 'Ahvenanmaan lääni' ) ),
			'ES' => array( 'name' => _( 'Etelä-Suomen lääni' ) ),
			'IS' => array( 'name' => _( 'Itä-Suomen lääni' ) ),
			'LL' => array( 'name' => _( 'Lapin lääni' ) ),
			'LS' => array( 'name' => _( 'Länsi-Suomen lääni' ) ),
			'OL' => array( 'name' => _( 'Oulun lääni' ) )
		) );
			break;
		case 'FJ':
			return array(
		'regions_label' => _( 'Division' ),
		'regions' => array(
			'C' => array( 'name' => _( 'Central' ) ),
			'E' => array( 'name' => _( 'Eastern' ) ),
			'N' => array( 'name' => _( 'Northern' ) ),
			'W' => array( 'name' => _( 'Western' ) ),
			'R' => array( 'name' => _( 'Rotuma' ) )
		) );
			break;
		case 'FM':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'TRK' => array( 'name' => _( 'Chuuk' ) ),
			'KSA' => array( 'name' => _( 'Kosrae' ) ),
			'PNI' => array( 'name' => _( 'Pohnpei' ) ),
			'YAP' => array( 'name' => _( 'Yap' ) )
		) );
			break;
		case 'FR':
			return array(
		'regions_label' => _( 'Region' ),
		'subregions_label' => _( 'Department' ),
		'regions' => array(
			'A' => array(
				'name' => _( 'Alsace' ),
				'subregions' => array(
					'67' => array( 'name' => _( 'Bas-Rhin' ) ),
					'68' => array( 'name' => _( 'Haut-Rhin' ) )
				)
			),
			'B' => array(
				'name' => _( 'Aquitaine' ),
				'subregions' => array(
					'24' => array( 'name' => _( 'Dordogne' ) ),
					'33' => array( 'name' => _( 'Gironde' ) ),
					'40' => array( 'name' => _( 'Landes' ) ),
					'47' => array( 'name' => _( 'Lot-et-Garonne' ) ),
					'64' => array( 'name' => _( 'Pyrénées-Atlantiques' ) )
				)
			),
			'C' => array(
				'name' => _( 'Auvergne' ),
				'subregions' => array(
					'03' => array( 'name' => _( 'Allier' ) ),
					'15' => array( 'name' => _( 'Cantal' ) ),
					'43' => array( 'name' => _( 'Haute-Loire' ) ),
					'63' => array( 'name' => _( 'Puy-de-Dôme' ) )
				)
			),
			'P' => array(
				'name' => _( 'Basse-Normandie' ),
				'subregions' => array(
					'14' => array( 'name' => _( 'Calvados' ) ),
					'50' => array( 'name' => _( 'Manche' ) ),
					'61' => array( 'name' => _( 'Orne' ) )
				)
			),
			'D' => array(
				'name' => _( 'Bourgogne' ),
				'subregions' => array(
					'21' => array( 'name' => _( 'Côte-d\'Or' ) ),
					'58' => array( 'name' => _( 'Nièvre' ) ),
					'71' => array( 'name' => _( 'Saône-et-Loire' ) ),
					'89' => array( 'name' => _( 'Yonne' ) )
				)
			),
			'E' => array(
				'name' => _( 'Bretagne' ),
				'subregions' => array(
					'22' => array( 'name' => _( 'Côtes-d\'Armor' ) ),
					'29' => array( 'name' => _( 'Finistère' ) ),
					'35' => array( 'name' => _( 'Ille-et-Vilaine' ) ),
					'56' => array( 'name' => _( 'Morbihan' ) )
				)
			),
			'F' => array(
				'name' => _( 'Centre' ),
				'subregions' => array(
					'18' => array( 'name' => _( 'Cher' ) ),
					'28' => array( 'name' => _( 'Eure-et-Loir' ) ),
					'36' => array( 'name' => _( 'Indre' ) ),
					'37' => array( 'name' => _( 'Indre-et-Loire' ) ),
					'41' => array( 'name' => _( 'Loir-et-Cher' ) ),
					'45' => array( 'name' => _( 'Loiret' ) )
				)
			),
			'G' => array(
				'name' => _( 'Champagne-Ardenne' ),
				'subregions' => array(
					'08' => array( 'name' => _( 'Ardennes' ) ),
					'10' => array( 'name' => _( 'Aube' ) ),
					'52' => array( 'name' => _( 'Haute-Marne' ) ),
					'51' => array( 'name' => _( 'Marne' ) )
				)
			),
			'H' => array(
				'name' => _( 'Corse' ),
				'subregions' => array(
					'2A' => array( 'name' => _( 'Corse-du-Sud' ) ),
					'2B' => array( 'name' => _( 'Haute-Corse' ) )
				)
			),
			'I' => array(
				'name' => _( 'Franche-Comté' ),
				'subregions' => array(
					'25' => array( 'name' => _( 'Doubs' ) ),
					'70' => array( 'name' => _( 'Haute-Saône' ) ),
					'39' => array( 'name' => _( 'Jura' ) ),
					'90' => array( 'name' => _( 'Territoire de Belfort' ) )
				) ),
			'Q' => array(
				'name' => _( 'Haute-Normandie' ),
				'subregions' => array(
					'27' => array( 'name' => _( 'Eure' ) ),
					'76' => array( 'name' => _( 'Seine-Maritime' ) )
				)
			),
			'J' => array(
				'name' => _( 'Île-de-France' ),
				'subregions' => array(
					'91' => array( 'name' => _( 'Essonne' ) ),
					'92' => array( 'name' => _( 'Hauts-de-Seine' ) ),
					'75' => array( 'name' => _( 'Paris' ) ),
					'77' => array( 'name' => _( 'Seine-et-Marne' ) ),
					'93' => array( 'name' => _( 'Seine-Saint-Denis' ) ),
					'94' => array( 'name' => _( 'Val-de-Marne' ) ),
					'95' => array( 'name' => _( 'Val d\'Oise' ) ),
					'78' => array( 'name' => _( 'Yvelines' ) )
				)
			),
			'K' => array(
				'name' => _( 'Languedoc-Roussillon' ),
				'subregions' => array(
					'11' => array( 'name' => _( 'Aude' ) ),
					'30' => array( 'name' => _( 'Gard' ) ),
					'34' => array( 'name' => _( 'Hérault' ) ),
					'48' => array( 'name' => _( 'Lozère' ) ),
					'66' => array( 'name' => _( 'Pyrénées-Orientales' ) )
				)
			),
			'L' => array(
				'name' => _( 'Limousin' ),
				'subregions' => array(
					'19' => array( 'name' => _( 'Corrèze' ) ),
					'23' => array( 'name' => _( 'Creuse' ) ),
					'87' => array( 'name' => _( 'Haute-Vienne' ) )
				)
			),
			'M' => array(
				'name' => _( 'Lorraine' ),
				'subregions' => array(
					'54' => array( 'name' => _( 'Meurthe-et-Moselle' ) ),
					'55' => array( 'name' => _( 'Meuse' ) ),
					'57' => array( 'name' => _( 'Moselle' ) ),
					'88' => array( 'name' => _( 'Vosges' ) )
				)
			),
			'N' => array(
				'name' => _( 'Midi-Pyrénées' ),
				'subregions' => array(
					'09' => array( 'name' => _( 'Ariège' ) ),
					'12' => array( 'name' => _( 'Aveyron' ) ),
					'32' => array( 'name' => _( 'Gers' ) ),
					'31' => array( 'name' => _( 'Haute-Garonne' ) ),
					'65' => array( 'name' => _( 'Hautes-Pyrénées' ) ),
					'46' => array( 'name' => _( 'Lot' ) ),
					'81' => array( 'name' => _( 'Tarn' ) ),
					'82' => array( 'name' => _( 'Tarn-et-Garonne' ) )
				)
			),
			'O' => array(
				'name' => _( 'Nord - Pas-de-Calais' ),
				'subregions' => array(
					'59' => array( 'name' => _( 'Nord' ) ),
					'62' => array( 'name' => _( 'Pas-de-Calais' ) )
				)
			),
			'R' => array(
				'name' => _( 'Pays de la Loire' ),
				'subregions' => array(
					'44' => array( 'name' => _( 'Loire-Atlantique' ) ),
					'49' => array( 'name' => _( 'Maine-et-Loire' ) ),
					'53' => array( 'name' => _( 'Mayenne' ) ),
					'72' => array( 'name' => _( 'Sarthe' ) ),
					'85' => array( 'name' => _( 'Vendée' ) )
				)
			),
			'S' => array(
				'name' => _( 'Picardie' ),
				'subregions' => array(
					'02' => array( 'name' => _( 'Aisne' ) ),
					'60' => array( 'name' => _( 'Oise' ) ),
					'80' => array( 'name' => _( 'Somme' ) )
				)
			),
			'T' => array(
				'name' => _( 'Poitou-Charentes' ),
				'subregions' => array(
					'16' => array( 'name' => _( 'Charente' ) ),
					'17' => array( 'name' => _( 'Charente-Maritime' ) ),
					'79' => array( 'name' => _( 'Deux-Sèvres' ) ),
					'86' => array( 'name' => _( 'Vienne' ) )
				)
			),
			'U' => array(
				'name' => _( 'Provence-Alpes-Côte d\'Azur' ),
				'subregions' => array(
					'04' => array( 'name' => _( 'Alpes-de-Haute-Provence' ) ),
					'06' => array( 'name' => _( 'Alpes-Maritimes' ) ),
					'13' => array( 'name' => _( 'Bouches-du-Rhône' ) ),
					'05' => array( 'name' => _( 'Hautes-Alpes' ) ),
					'83' => array( 'name' => _( 'Var' ) ),
					'84' => array( 'name' => _( 'Vaucluse' ) )
				)
			),
			'V' => array(
				'name' => _( 'Rhône-Alpes' ),
				'subregions' => array(
					'01' => array( 'name' => _( 'Ain' ) ),
					'07' => array( 'name' => _( 'Ardèche' ) ),
					'26' => array( 'name' => _( 'Drôme' ) ),
					'74' => array( 'name' => _( 'Haute-Savoie' ) ),
					'38' => array( 'name' => _( 'Isère' ) ),
					'42' => array( 'name' => _( 'Loire' ) ),
					'69' => array( 'name' => _( 'Rhône' ) ),
					'73' => array( 'name' => _( 'Savoie' ) )
				)
			),
			'GP' => array( 'name' => _( 'Guadeloupe' ) ),
			'GF' => array( 'name' => _( 'Guyane' ) ),
			'MQ' => array( 'name' => _( 'Martinique' ) ),
			'RE' => array( 'name' => _( 'Réunion' ) ),
			'CP' => array( 'name' => _( 'Clipperton' ) ),
			'YT' => array( 'name' => _( 'Mayotte' ) ),
			'NC' => array( 'name' => _( 'Nouvelle-Calédonie' ) ),
			'PF' => array( 'name' => _( 'Polynésie française' ) ),
			'BL' => array( 'name' => _( 'Saint-Barthélemy' ) ),
			'MF' => array( 'name' => _( 'Saint-Martin' ) ),
			'PM' => array( 'name' => _( 'Saint-Pierre-et-Miquelon' ) ),
			'TF' => array( 'name' => _( 'Terres australes françaises' ) ),
			'WF' => array( 'name' => _( 'Wallis-et-Futuna' ) )
		) );
			break;
		case 'GA':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
				1 => array( 'name' => _( 'Estuaire' ) ),
				2 => array( 'name' => _( 'Haut-Ogooué' ) ),
				3 => array( 'name' => _( 'Moyen-Ogooué' ) ),
				4 => array( 'name' => _( 'Ngounié' ) ),
				5 => array( 'name' => _( 'Nyanga' ) ),
				6 => array( 'name' => _( 'Ogooué-Ivindo' ) ),
				7 => array( 'name' => _( 'Ogooué-Lolo' ) ),
				8 => array( 'name' => _( 'Ogooué-Maritime' ) ),
				9 => array( 'name' => _( 'Woleu-Ntem' ) )
		) );
			break;
		case 'GB':
			/**
			 * @todo Provinces as children of major regions: England, Scotland, NI, Wales, etc.
			*/
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
/*			'ENG' => array( 'name' => _( 'England' ) ),
			'SCT' => array( 'name' => _( 'Scotland' ) ),
			'NIR' => array( 'name' => _( 'Northern Ireland' ) ),
			'WLS' => array( 'name' => _( 'Wales' ) ),
			'EAW' => array( 'name' => _( 'England and Wales' ) ),
			'GBN' => array( 'name' => _( 'Great Britain' ) ),
			'UKM' => array( 'name' => _( 'United Kingdom' ) ), */
			'BKM' => array( 'name' => _( 'Buckinghamshire' ) ),
			'CAM' => array( 'name' => _( 'Cambridgeshire' ) ),
			'CMA' => array( 'name' => _( 'Cumbria' ) ),
			'DBY' => array( 'name' => _( 'Derbyshire' ) ),
			'DEV' => array( 'name' => _( 'Devon' ) ),
			'DOR' => array( 'name' => _( 'Dorset' ) ),
			'ESX' => array( 'name' => _( 'East Sussex' ) ),
			'ESS' => array( 'name' => _( 'Essex' ) ),
			'GLS' => array( 'name' => _( 'Gloucestershire' ) ),
			'HAM' => array( 'name' => _( 'Hampshire' ) ),
			'HRT' => array( 'name' => _( 'Hertfordshire' ) ),
			'KEN' => array( 'name' => _( 'Kent' ) ),
			'LAN' => array( 'name' => _( 'Lancashire' ) ),
			'LEC' => array( 'name' => _( 'Leicestershire' ) ),
			'LIN' => array( 'name' => _( 'Lincolnshire' ) ),
			'NFK' => array( 'name' => _( 'Norfolk' ) ),
			'NYK' => array( 'name' => _( 'North Yorkshire' ) ),
			'NTH' => array( 'name' => _( 'Northamptonshire' ) ),
			'NTT' => array( 'name' => _( 'Nottinghamshire' ) ),
			'OXF' => array( 'name' => _( 'Oxfordshire' ) ),
			'SOM' => array( 'name' => _( 'Somerset' ) ),
			'STS' => array( 'name' => _( 'Staffordshire' ) ),
			'SFK' => array( 'name' => _( 'Suffolk' ) ),
			'SRY' => array( 'name' => _( 'Surrey' ) ),
			'WAR' => array( 'name' => _( 'Warwickshire' ) ),
			'WSX' => array( 'name' => _( 'West Sussex' ) ),
			'WOR' => array( 'name' => _( 'Worcestershire' ) ),
			'BDG' => array( 'name' => _( 'Barking and Dagenham' ) ),
			'BNE' => array( 'name' => _( 'Barnet' ) ),
			'BEX' => array( 'name' => _( 'Bexley' ) ),
			'BEN' => array( 'name' => _( 'Brent' ) ),
			'BRY' => array( 'name' => _( 'Bromley' ) ),
			'CMD' => array( 'name' => _( 'Camden' ) ),
			'CRY' => array( 'name' => _( 'Croydon' ) ),
			'EAL' => array( 'name' => _( 'Ealing' ) ),
			'ENF' => array( 'name' => _( 'Enfield' ) ),
			'GRE' => array( 'name' => _( 'Greenwich' ) ),
			'HCK' => array( 'name' => _( 'Hackney' ) ),
			'HMF' => array( 'name' => _( 'Hammersmith and Fulham' ) ),
			'HRY' => array( 'name' => _( 'Haringey' ) ),
			'HRW' => array( 'name' => _( 'Harrow' ) ),
			'HAV' => array( 'name' => _( 'Havering' ) ),
			'HIL' => array( 'name' => _( 'Hillingdon' ) ),
			'HNS' => array( 'name' => _( 'Hounslow' ) ),
			'ISL' => array( 'name' => _( 'Islington' ) ),
			'KEC' => array( 'name' => _( 'Kensington and Chelsea' ) ),
			'KTT' => array( 'name' => _( 'Kingston upon Thames' ) ),
			'LBH' => array( 'name' => _( 'Lambeth' ) ),
			'LEW' => array( 'name' => _( 'Lewisham' ) ),
			'MRT' => array( 'name' => _( 'Merton' ) ),
			'NWM' => array( 'name' => _( 'Newham' ) ),
			'RDB' => array( 'name' => _( 'Redbridge' ) ),
			'RIC' => array( 'name' => _( 'Richmond upon Thames' ) ),
			'SWK' => array( 'name' => _( 'Southwark' ) ),
			'STN' => array( 'name' => _( 'Sutton' ) ),
			'TWH' => array( 'name' => _( 'Tower Hamlets' ) ),
			'WFT' => array( 'name' => _( 'Waltham Forest' ) ),
			'WND' => array( 'name' => _( 'Wandsworth' ) ),
			'WSM' => array( 'name' => _( 'Westminster' ) ),
			'BNS' => array( 'name' => _( 'Barnsley' ) ),
			'BIR' => array( 'name' => _( 'Birmingham' ) ),
			'BOL' => array( 'name' => _( 'Bolton' ) ),
			'BRD' => array( 'name' => _( 'Bradford' ) ),
			'BUR' => array( 'name' => _( 'Bury' ) ),
			'CLD' => array( 'name' => _( 'Calderdale' ) ),
			'COV' => array( 'name' => _( 'Coventry' ) ),
			'DNC' => array( 'name' => _( 'Doncaster' ) ),
			'DUD' => array( 'name' => _( 'Dudley' ) ),
			'GAT' => array( 'name' => _( 'Gateshead' ) ),
			'KIR' => array( 'name' => _( 'Kirklees' ) ),
			'KWL' => array( 'name' => _( 'Knowsley' ) ),
			'LDS' => array( 'name' => _( 'Leeds' ) ),
			'LIV' => array( 'name' => _( 'Liverpool' ) ),
			'MAN' => array( 'name' => _( 'Manchester' ) ),
			'NET' => array( 'name' => _( 'Newcastle upon Tyne' ) ),
			'NTY' => array( 'name' => _( 'North Tyneside' ) ),
			'OLD' => array( 'name' => _( 'Oldham' ) ),
			'RCH' => array( 'name' => _( 'Rochdale' ) ),
			'ROT' => array( 'name' => _( 'Rotherham' ) ),
			'SHN' => array( 'name' => _( 'St. Helens' ) ),
			'SLF' => array( 'name' => _( 'Salford' ) ),
			'SAW' => array( 'name' => _( 'Sandwell' ) ),
			'SFT' => array( 'name' => _( 'Sefton' ) ),
			'SHF' => array( 'name' => _( 'Sheffield' ) ),
			'SOL' => array( 'name' => _( 'Solihull' ) ),
			'STY' => array( 'name' => _( 'South Tyneside' ) ),
			'SKP' => array( 'name' => _( 'Stockport' ) ),
			'SND' => array( 'name' => _( 'Sunderland' ) ),
			'TAM' => array( 'name' => _( 'Tameside' ) ),
			'TRF' => array( 'name' => _( 'Trafford' ) ),
			'WKF' => array( 'name' => _( 'Wakefield' ) ),
			'WLL' => array( 'name' => _( 'Walsall' ) ),
			'WGN' => array( 'name' => _( 'Wigan' ) ),
			'WRL' => array( 'name' => _( 'Wirral' ) ),
			'WLV' => array( 'name' => _( 'Wolverhampton' ) ),
			'LND' => array( 'name' => _( 'London, City of' ) ),
			'ABE' => array( 'name' => _( 'Aberdeen City' ) ),
			'ABD' => array( 'name' => _( 'Aberdeenshire' ) ),
			'ANS' => array( 'name' => _( 'Angus' ) ),
			'AGB' => array( 'name' => _( 'Argyll and Bute' ) ),
			'CLK' => array( 'name' => _( 'Clackmannanshire' ) ),
			'DGY' => array( 'name' => _( 'Dumfries and Galloway' ) ),
			'DND' => array( 'name' => _( 'Dundee City' ) ),
			'EAY' => array( 'name' => _( 'East Ayrshire' ) ),
			'EDU' => array( 'name' => _( 'East Dunbartonshire' ) ),
			'ELN' => array( 'name' => _( 'East Lothian' ) ),
			'ERW' => array( 'name' => _( 'East Renfrewshire' ) ),
			'EDH' => array( 'name' => _( 'Edinburgh, City of' ) ),
			'ELS' => array( 'name' => _( 'Eilean Siar' ) ),
			'FAL' => array( 'name' => _( 'Falkirk' ) ),
			'FIF' => array( 'name' => _( 'Fife' ) ),
			'GLG' => array( 'name' => _( 'Glasgow City' ) ),
			'HED' => array( 'name' => _( 'Highland' ) ),
			'IVC' => array( 'name' => _( 'Inverclyde' ) ),
			'MLN' => array( 'name' => _( 'Midlothian' ) ),
			'MRY' => array( 'name' => _( 'Moray' ) ),
			'NAY' => array( 'name' => _( 'North Ayrshire' ) ),
			'NLK' => array( 'name' => _( 'North Lanarkshire' ) ),
			'ORR' => array( 'name' => _( 'Orkney Islands' ) ),
			'PKN' => array( 'name' => _( 'Perth and Kinross' ) ),
			'RFW' => array( 'name' => _( 'Renfrewshire' ) ),
			'SCB' => array( 'name' => _( 'Scottish Borders, The' ) ),
			'ZET' => array( 'name' => _( 'Shetland Islands' ) ),
			'SAY' => array( 'name' => _( 'South Ayrshire' ) ),
			'SLK' => array( 'name' => _( 'South Lanarkshire' ) ),
			'STG' => array( 'name' => _( 'Stirling' ) ),
			'WDU' => array( 'name' => _( 'West Dunbartonshire' ) ),
			'WLN' => array( 'name' => _( 'West Lothian' ) ),
			'ANT' => array( 'name' => _( 'Antrim' ) ),
			'ARD' => array( 'name' => _( 'Ards' ) ),
			'ARM' => array( 'name' => _( 'Armagh' ) ),
			'BLA' => array( 'name' => _( 'Ballymena' ) ),
			'BLY' => array( 'name' => _( 'Ballymoney' ) ),
			'BNB' => array( 'name' => _( 'Banbridge' ) ),
			'BFS' => array( 'name' => _( 'Belfast' ) ),
			'CKF' => array( 'name' => _( 'Carrickfergus' ) ),
			'CSR' => array( 'name' => _( 'Castlereagh' ) ),
			'CLR' => array( 'name' => _( 'Coleraine' ) ),
			'CKT' => array( 'name' => _( 'Cookstown' ) ),
			'CGV' => array( 'name' => _( 'Craigavon' ) ),
			'DRY' => array( 'name' => _( 'Derry' ) ),
			'DOW' => array( 'name' => _( 'Down' ) ),
			'DGN' => array( 'name' => _( 'Dungannon' ) ),
			'FER' => array( 'name' => _( 'Fermanagh' ) ),
			'LRN' => array( 'name' => _( 'Larne' ) ),
			'LMV' => array( 'name' => _( 'Limavady' ) ),
			'LSB' => array( 'name' => _( 'Lisburn' ) ),
			'MFT' => array( 'name' => _( 'Magherafelt' ) ),
			'MYL' => array( 'name' => _( 'Moyle' ) ),
			'NYM' => array( 'name' => _( 'Newry and Mourne' ) ),
			'NTA' => array( 'name' => _( 'Newtownabbey' ) ),
			'NDN' => array( 'name' => _( 'North Down' ) ),
			'OMH' => array( 'name' => _( 'Omagh' ) ),
			'STB' => array( 'name' => _( 'Strabane' ) ),
			'BAS' => array( 'name' => _( 'Bath and North East Somerset' ) ),
			'BBD' => array( 'name' => _( 'Blackburn with Darwen' ) ),
			'BDF' => array( 'name' => _( 'Bedford' ) ),
			'BPL' => array( 'name' => _( 'Blackpool' ) ),
			'BMH' => array( 'name' => _( 'Bournemouth' ) ),
			'BRC' => array( 'name' => _( 'Bracknell Forest' ) ),
			'BNH' => array( 'name' => _( 'Brighton and Hove' ) ),
			'BST' => array( 'name' => _( 'Bristol, City of' ) ),
			'CBF' => array( 'name' => _( 'Central Bedfordshire' ) ),
			'CHE' => array( 'name' => _( 'Cheshire East' ) ),
			'CHW' => array( 'name' => _( 'Cheshire West and Chester' ) ),
			'CON' => array( 'name' => _( 'Cornwall' ) ),
			'DAL' => array( 'name' => _( 'Darlington' ) ),
			'DER' => array( 'name' => _( 'Derby' ) ),
			'DUR' => array( 'name' => _( 'Durham' ) ),
			'ERY' => array( 'name' => _( 'East Riding of Yorkshire' ) ),
			'HAL' => array( 'name' => _( 'Halton' ) ),
			'HPL' => array( 'name' => _( 'Hartlepool' ) ),
			'HEF' => array( 'name' => _( 'Herefordshire' ) ),
			'IOW' => array( 'name' => _( 'Isle of Wight' ) ),
			'KHL' => array( 'name' => _( 'Kingston upon Hull' ) ),
			'LCE' => array( 'name' => _( 'Leicester' ) ),
			'LUT' => array( 'name' => _( 'Luton' ) ),
			'MDW' => array( 'name' => _( 'Medway' ) ),
			'MDB' => array( 'name' => _( 'Middlesbrough' ) ),
			'MIK' => array( 'name' => _( 'Milton Keynes' ) ),
			'NEL' => array( 'name' => _( 'North East Lincolnshire' ) ),
			'NLN' => array( 'name' => _( 'North Lincolnshire' ) ),
			'NSM' => array( 'name' => _( 'North Somerset' ) ),
			'NBL' => array( 'name' => _( 'Northumberland' ) ),
			'NGM' => array( 'name' => _( 'Nottingham' ) ),
			'PTE' => array( 'name' => _( 'Peterborough' ) ),
			'PLY' => array( 'name' => _( 'Plymouth' ) ),
			'POL' => array( 'name' => _( 'Poole' ) ),
			'POR' => array( 'name' => _( 'Portsmouth' ) ),
			'RDG' => array( 'name' => _( 'Reading' ) ),
			'RCC' => array( 'name' => _( 'Redcar and Cleveland' ) ),
			'RUT' => array( 'name' => _( 'Rutland' ) ),
			'SHR' => array( 'name' => _( 'Shropshire' ) ),
			'SLG' => array( 'name' => _( 'Slough' ) ),
			'SGC' => array( 'name' => _( 'South Gloucestershire' ) ),
			'STH' => array( 'name' => _( 'Southampton' ) ),
			'SOS' => array( 'name' => _( 'Southend-on-Sea' ) ),
			'STT' => array( 'name' => _( 'Stockton-on-Tees' ) ),
			'STE' => array( 'name' => _( 'Stoke-on-Trent' ) ),
			'SWD' => array( 'name' => _( 'Swindon' ) ),
			'TFW' => array( 'name' => _( 'Telford and Wrekin' ) ),
			'THR' => array( 'name' => _( 'Thurrock' ) ),
			'TOB' => array( 'name' => _( 'Torbay' ) ),
			'WRT' => array( 'name' => _( 'Warrington' ) ),
			'WBX' => array( 'name' => _( 'West Berkshire' ) ),
			'WNM' => array( 'name' => _( 'Windsor and Maidenhead' ) ),
			'WOK' => array( 'name' => _( 'Wokingham' ) ),
			'YOR' => array( 'name' => _( 'York' ) ),
			'BGW' => array( 'name' => _( 'Blaenau Gwent' ) ),
			'BGE' => array( 'name' => _( 'Bridgend;Pen-y-bont ar Ogwr' ) ),
			'CAY' => array( 'name' => _( 'Caerphilly;Caerffili' ) ),
			'CRF' => array( 'name' => _( 'Cardiff;Caerdydd' ) ),
			'CMN' => array( 'name' => _( 'Carmarthenshire;Sir Gaerfyrddin' ) ),
			'CGN' => array( 'name' => _( 'Ceredigion;Sir Ceredigion' ) ),
			'CWY' => array( 'name' => _( 'Conwy' ) ),
			'DEN' => array( 'name' => _( 'Denbighshire;Sir Ddinbych' ) ),
			'FLN' => array( 'name' => _( 'Flintshire;Sir y Fflint' ) ),
			'GWN' => array( 'name' => _( 'Gwynedd' ) ),
			'AGY' => array( 'name' => _( 'Isle of Anglesey;Sir Ynys Môn' ) ),
			'MTY' => array( 'name' => _( 'Merthyr Tydfil;Merthyr Tudful' ) ),
			'MON' => array( 'name' => _( 'Monmouthshire;Sir Fynwy' ) ),
			'NTL' => array( 'name' => _( 'Neath Port Talbot;Castell-nedd Port Talbot' ) ),
			'NWP' => array( 'name' => _( 'Newport;Casnewydd' ) ),
			'PEM' => array( 'name' => _( 'Pembrokeshire;Sir Benfro' ) ),
			'POW' => array( 'name' => _( 'Powys' ) ),
			'RCT' => array( 'name' => _( 'Rhondda, Cynon, Taff;Rhondda, Cynon,Taf' ) ),
			'SWA' => array( 'name' => _( 'Swansea;Abertawe' ) ),
			'TOF' => array( 'name' => _( 'Torfaen;Tor-faen' ) ),
			'VGL' => array( 'name' => _( 'Vale of Glamorgan, The;Bro Morgannwg' ) ),
			'WRX' => array( 'name' => _( 'Wrexham;Wrecsam' ) )
		) );
			break;
		case 'GD':
			return array(
		'regions_label' => _( 'Parish' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Saint Andrew' ) ),
			'02' => array( 'name' => _( 'Saint David' ) ),
			'03' => array( 'name' => _( 'Saint George' ) ),
			'04' => array( 'name' => _( 'Saint John' ) ),
			'05' => array( 'name' => _( 'Saint Mark' ) ),
			'06' => array( 'name' => _( 'Saint Patrick' ) ),
			'10' => array( 'name' => _( 'Southern Grenadine Islands' ) )
		) );
			break;
		case 'GE':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'AB' => array( 'name' => _( 'Abkhazia' ) ),
			'AJ' => array( 'name' => _( 'Ajaria' ) ),
			'TB' => array( 'name' => _( 'T’bilisi' ) ),
			'GU' => array( 'name' => _( 'Guria' ) ),
			'IM' => array( 'name' => _( 'Imeret’i' ) ),
			'KA' => array( 'name' => _( 'Kakhet’i' ) ),
			'KK' => array( 'name' => _( 'K’vemo K’art’li' ) ),
			'MM' => array( 'name' => _( 'Mts’khet’a-Mt’ianet’i' ) ),
			'RL' => array( 'name' => _( 'Racha-Lech’khumi-K’vemo Svanet’i' ) ),
			'SZ' => array( 'name' => _( 'Samegrelo-Zemo Svanet’i' ) ),
			'SJ' => array( 'name' => _( 'Samts’khe-Javakhet’i' ) ),
			'SK' => array( 'name' => _( 'Shida K’art’li' ) )
		) );
			break;
		case 'GH':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'AH' => array( 'name' => _( 'Ashanti' ) ),
			'BA' => array( 'name' => _( 'Brong-Ahafo' ) ),
			'CP' => array( 'name' => _( 'Central' ) ),
			'EP' => array( 'name' => _( 'Eastern' ) ),
			'AA' => array( 'name' => _( 'Greater Accra' ) ),
			'NP' => array( 'name' => _( 'Northern' ) ),
			'UE' => array( 'name' => _( 'Upper East' ) ),
			'UW' => array( 'name' => _( 'Upper West' ) ),
			'TV' => array( 'name' => _( 'Volta' ) ),
			'WP' => array( 'name' => _( 'Western' ) ),
			'KU' => array( 'name' => _( 'Kommune Kujalleq' ) ),
			'SM' => array( 'name' => _( 'Kommuneqarfik Sermersooq' ) ),
			'QA' => array( 'name' => _( 'Qaasuitsup Kommunia' ) ),
			'QE' => array( 'name' => _( 'Qeqqata Kommunia' ) )
		) );
			break;
		case 'GM':
			return array(
		'regions_label' => _( 'Division' ),
		'subregions_label' => _( 'City' ),
		'regions' => array(
			'L' => array( 'name' => _( 'Lower River' ) ),
			'M' => array( 'name' => _( 'Central River' ) ),
			'N' => array( 'name' => _( 'North Bank' ) ),
			'U' => array( 'name' => _( 'Upper River' ) ),
			'W' => array( 'name' => _( 'Western' ) ),
			'B' => array( 'name' => _( 'Banjul' ) )
		) );
			break;
		case 'GN':
			return array(
		'regions_label' => _( 'Governorate' ),
		'subregions_label' => _( 'Prefecture' ),
		'regions' => array(
			'B' => array(
				'name' => _( 'Boké' ),
				'subregions' => array(
					'BF' => array( 'name' => _( 'Boffa' ) ),
					'BK' => array( 'name' => _( 'Boké' ) ),
					'FR' => array( 'name' => _( 'Fria' ) ),
					'GA' => array( 'name' => _( 'Gaoual' ) ),
					'KN' => array( 'name' => _( 'Koundara' ) )
				)
			),
			'F' => array(
				'name' => _( 'Faranah' ),
				'subregions' => array(
					'DB' => array( 'name' => _( 'Dabola' ) ),
					'DI' => array( 'name' => _( 'Dinguiraye' ) ),
					'FA' => array( 'name' => _( 'Faranah' ) ),
					'KS' => array( 'name' => _( 'Kissidougou' ) )
				)
			),
			'K' => array(
				'name' => _( 'Kankan' ),
				'subregions' => array(
					'KA' => array( 'name' => _( 'Kankan' ) ),
					'KE' => array( 'name' => _( 'Kérouané' ) ),
					'KO' => array( 'name' => _( 'Kouroussa' ) ),
					'MD' => array( 'name' => _( 'Mandiana' ) ),
					'SI' => array( 'name' => _( 'Siguiri' ) )
				)
			),
			'D' => array(
				'name' => _( 'Kindia' ),
				'subregions' => array(
					'CO' => array( 'name' => _( 'Coyah' ) ),
					'DU' => array( 'name' => _( 'Dubréka' ) ),
					'FO' => array( 'name' => _( 'Forécariah' ) ),
					'KD' => array( 'name' => _( 'Kindia' ) ),
					'TE' => array( 'name' => _( 'Télimélé' ) )
				)
			),
			'L' => array(
				'name' => _( 'Labé' ),
				'subregions' => array(
					'KB' => array( 'name' => _( 'Koubia' ) ),
					'LA' => array( 'name' => _( 'Labé' ) ),
					'LE' => array( 'name' =>'Lélouma' ) ),
					'ML' => array( 'name' => _( 'Mali' ) ),
					'TO' => array( 'name' => _( 'Tougué' ) )
				)
			),
			'M' => array(
				'name' => _( 'Mamou' ),
				'subregions' => array(
					'DL' => array( 'name' => _( 'Dalaba' ) ),
					'MM' => array( 'name' => _( 'Mamou' ) ),
					'PI' => array( 'name' => _( 'Pita' ) )
				)
			),
			'N' => array(
				'name' => _( 'Nzérékoré' ),
				'subregions' => array(
					'BE' => array( 'name' => _( 'Beyla' ) ),
					'GU' => array( 'name' => _( 'Guékédou' ) ),
					'LO' => array( 'name' => _( 'Lola' ) ),
					'MC' => array( 'name' => _( 'Macenta' ) ),
					'NZ' => array( 'name' => _( 'Nzérékoré' ) ),
					'YO' => array( 'name' => _( 'Yomou' ) )
				)
			),
			'C' => array( 'name' => _( 'Conakry' ) )
		);
			break;
		case 'GQ':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'C' => array( 'name' => _( 'Región Continental' ) ),
			'I' => array( 'name' => _( 'Región Insular' ) ),
			'AN' => array( 'name' => _( 'Annobón' ) ),
			'BN' => array( 'name' => _( 'Bioko Norte' ) ),
			'BS' => array( 'name' => _( 'Bioko Sur' ) ),
			'CS' => array( 'name' => _( 'Centro Sur' ) ),
			'KN' => array( 'name' => _( 'Kié-Ntem' ) ),
			'LI' => array( 'name' => _( 'Litoral' ) ),
			'WN' => array( 'name' => _( 'Wele-Nzás' ) )
		) );
			break;
		case 'GR':
			return array(
		'regions_label' => _( 'Administrative region' ),
		'subregions_label' => ( 'Department' ),
		'regions' => array(
			'A' => array(
				'name' => _( 'Anatoliki Makedonia kai Thraki' ),
				'subregions' => array(
					'52' => array( 'name' => _( 'Drama' ) ),
					'71' => array( 'name' => _( 'Evros' ) ),
					'55' => array( 'name' => _( 'Kavala' ) ),
					'73' => array( 'name' => _( 'Rodopi' ) ),
					'72' => array( 'name' => _( 'Xanthi' ) )
				)
			),
			'I' => array( 'name' => _( 'Attiki' ) ),
			'G' => array(
				'name' => _( 'Dytiki Ellada' ),
				'subregions' => array(
					'13' => array( 'name' => _( 'Achaïa' ) ),
					'01' => array( 'name' => _( 'Aitolia kai Akarnania' ) ),
					'14' => array( 'name' => _( 'Ileia' ) )
				)
			),
			'C' => array(
				'name' => _( 'Dytiki Makedonia' ),
				'subregions' => array(
					'63' => array( 'name' => _( 'Florina' ) ),
					'51' => array( 'name' => _( 'Grevena' ) ),
					'56' => array( 'name' => _( 'Kastoria' ) ),
					'58' => array( 'name' => _( 'Kozani' ) )
				)
			),
			'F' => array(
				'name' => _( 'Ionia Nisia' ),
				'subregions' => array(
					'31' => array( 'name' => _( 'Arta' ) ),
					'23' => array( 'name' => _( 'Kefallonia' ) ),
					'22' => array( 'name' => _( 'Kerkyra' ) ),
					'24' => array( 'name' => _( 'Lefkada' ) ),
					'21' => array( 'name' => _( 'Zakynthos' ) )
				)
			),
			'D' => array(
				'name' => _( 'Ipeiros' ),
				'subregions' => array(
					'33' => array( 'name' => _( 'Ioannina' ) ),
					'34' => array( 'name' => _( 'Preveza' ) ),
					'32' => array( 'name' => _( 'Thesprotia' ) )
				)
			),
			'B' => array(
				'name' => _( 'Kentriki Makedonia' ),
				'subregions' => array(
					'64' => array( 'name' => _( 'Chalkidiki' ) ),
					'53' => array( 'name' => _( 'Imathia' ) ),
					'57' => array( 'name' => _( 'Kilkis' ) ),
					'59' => array( 'name' => _( 'Pella' ) ),
					'61' => array( 'name' => _( 'Pieria' ) ),
					'62' => array( 'name' => _( 'Serres' ) ),
					'54' => array( 'name' => _( 'Thessaloniki' ) )
			) ),
			'M' => array(
				'name' => _( 'Kriti' ),
				'subregions' => array(
					'94' => array( 'name' => _( 'Chania' ) ),
					'91' => array( 'name' => _( 'Irakleio' ) ),
					'92' => array( 'name' => _( 'Lasithi' ) ),
					'93' => array( 'name' => _( 'Rethymno' ) )
			) ),
			'L' => array(
				'name' => _( 'Notio Aigaio' ),
				'subregions' => array(
					'81' => array( 'name' => _( 'Dodekanisos' ) ),
					'82' => array( 'name' => _( 'Kyklades' ) )
			) ),
			'J' => array(
				'name' => _( 'Peloponnisos' ),
				'subregions' => array(
					'11' => array( 'name' => _( 'Argolida' ) ),
					'12' => array( 'name' => _( 'Arkadia' ) ),
					'15' => array( 'name' => _( 'Korinthia' ) ),
					'16' => array( 'name' => _( 'Lakonia' ) ),
					'17' => array( 'name' => _( 'Messinia' ) )
			) ),
			'H' => array(
				'name' => _( 'Sterea Ellada' ),
				'subregions' => array(
					'05' => array( 'name' => _( 'Evrytania' ) ),
					'04' => array( 'name' => _( 'Evvoias' ) ),
					'07' => array( 'name' => _( 'Fokida' ) ),
					'06' => array( 'name' => _( 'Fthiotida' ) ),
					'03' => array( 'name' => _( 'Voiotia' ) )
			) ),
			'E' => array(
				'name' => _( 'Thessalia' ),
				'subregions' => array(
					'41' => array( 'name' => _( 'Karditsa' ) ),
					'42' => array( 'name' => _( 'Larisa' ) ),
					'43' => array( 'name' => _( 'Magnisia' ) ),
					'44' => array( 'name' => _( 'Trikala' ) )
			) ),
			'K' => array(
				'name' => _( 'Voreio Aigaio' ),
				'subregions' => array(
					'85' => array( 'name' => _( 'Chios' ) ),
					'83' => array( 'name' => _( 'Lesvos' ) ),
					'84' => array( 'name' => _( 'Samos' ) )
			) ),
			'69' => array( 'name' => _( 'Agio Oros' ) )
		) );
			break;
		case 'GT':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'AV' => array( 'name' => _( 'Alta Verapaz' ) ),
			'BV' => array( 'name' => _( 'Baja Verapaz' ) ),
			'CM' => array( 'name' => _( 'Chimaltenango' ) ),
			'CQ' => array( 'name' => _( 'Chiquimula' ) ),
			'PR' => array( 'name' => _( 'El Progreso' ) ),
			'ES' => array( 'name' => _( 'Escuintla' ) ),
			'GU' => array( 'name' => _( 'Guatemala' ) ),
			'HU' => array( 'name' => _( 'Huehuetenango' ) ),
			'IZ' => array( 'name' => _( 'Izabal' ) ),
			'JA' => array( 'name' => _( 'Jalapa' ) ),
			'JU' => array( 'name' => _( 'Jutiapa' ) ),
			'PE' => array( 'name' => _( 'Petén' ) ),
			'QZ' => array( 'name' => _( 'Quetzaltenango' ) ),
			'QC' => array( 'name' => _( 'Quiché' ) ),
			'RE' => array( 'name' => _( 'Retalhuleu' ) ),
			'SA' => array( 'name' => _( 'Sacatepéquez' ) ),
			'SM' => array( 'name' => _( 'San Marcos' ) ),
			'SR' => array( 'name' => _( 'Santa Rosa' ) ),
			'SO' => array( 'name' => _( 'Sololá' ) ),
			'SU' => array( 'name' => _( 'Suchitepéquez' ) ),
			'TO' => array( 'name' => _( 'Totonicapán' ) ),
			'ZA' => array( 'name' => _( 'Zacapa' ) )
		) );
			break;
		case 'GW':
			return array(
		'regions_label' => _( 'Province' ),
		'subregions_label' => _( 'Region' ),
		'regions' => array(
			'BS' => array( 'name' => _( 'Bissau' ) ),
			'L' => array(
				'name' => _( 'Leste' ),
				'subregions' => array(
					'BA' => array( 'name' => _( 'Bafatá' ) ),
					'GA' => array( 'name' => _( 'Gabú' ) )
			) ),
			'N' => array(
				'name' => _( 'Norte' ),
				'subregions' => array(
					'BM' => array( 'name' => _( 'Biombo' ) ),
					'CA' => array( 'name' => _( 'Cacheu' ) ),
					'OI' => array( 'name' => _( 'Oio' ) )
			) ),
			'S' => array(
				'name' => _( 'Sul' ),
				'subregions' => array(
					'BL' => array( 'name' => _( 'Bolama' ) ),
					'QU' => array( 'name' => _( 'Quinara' ) ),
					'TO' => array( 'name' => _( 'Tombali' ) )
			) )
		) );
			break;
		case 'GY':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'BA' => array( 'name' => _( 'Barima-Waini' ) ),
			'CU' => array( 'name' => _( 'Cuyuni-Mazaruni' ) ),
			'DE' => array( 'name' => _( 'Demerara-Mahaica' ) ),
			'EB' => array( 'name' => _( 'East Berbice-Corentyne' ) ),
			'ES' => array( 'name' => _( 'Essequibo Islands-West Demerara' ) ),
			'MA' => array( 'name' => _( 'Mahaica-Berbice' ) ),
			'PM' => array( 'name' => _( 'Pomeroon-Supenaam' ) ),
			'PT' => array( 'name' => _( 'Potaro-Siparuni' ) ),
			'UD' => array( 'name' => _( 'Upper Demerara-Berbice' ) ),
			'UT' => array( 'name' => _( 'Upper Takutu-Upper Essequibo' ) )
		) );
			break;
		case 'HN':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'AT' => array( 'name' => _( 'Atlántida' ) ),
			'CL' => array( 'name' => _( 'Colón' ) ),
			'CM' => array( 'name' => _( 'Comayagua' ) ),
			'CP' => array( 'name' => _( 'Copán' ) ),
			'CR' => array( 'name' => _( 'Cortés' ) ),
			'CH' => array( 'name' => _( 'Choluteca' ) ),
			'EP' => array( 'name' => _( 'El Paraíso' ) ),
			'FM' => array( 'name' => _( 'Francisco Morazán' ) ),
			'GD' => array( 'name' => _( 'Gracias a Dios' ) ),
			'IN' => array( 'name' => _( 'Intibucá' ) ),
			'IB' => array( 'name' => _( 'Islas de la Bahía' ) ),
			'LP' => array( 'name' => _( 'La Paz' ) ),
			'LE' => array( 'name' => _( 'Lempira' ) ),
			'OC' => array( 'name' => _( 'Ocotepeque' ) ),
			'OL' => array( 'name' => _( 'Olancho' ) ),
			'SB' => array( 'name' => _( 'Santa Bárbara' ) ),
			'VA' => array( 'name' => _( 'Valle' ) ),
			'YO' => array( 'name' => _( 'Yoro' ) )
		) );
			break;
		case 'HR':
			return array(
		'regions_label' => _( 'County' ),
		'regions' => array(
			'21' => array( 'name' => _( 'Grad Zagreb' ) ),
			'07' => array( 'name' => _( 'Bjelovarsko-bilogorska županija' ) ),
			'12' => array( 'name' => _( 'Brodsko-posavska županija' ) ),
			'19' => array( 'name' => _( 'Dubrovačko-neretvanska županija' ) ),
			'18' => array( 'name' => _( 'Istarska županija' ) ),
			'04' => array( 'name' => _( 'Karlovačka županija' ) ),
			'06' => array( 'name' => _( 'Koprivničko-križevačka županija' ) ),
			'02' => array( 'name' => _( 'Krapinsko-zagorska županija' ) ),
			'09' => array( 'name' => _( 'Ličko-senjska županija' ) ),
			'20' => array( 'name' => _( 'Međimurska županija' ) ),
			'14' => array( 'name' => _( 'Osječko-baranjska županija' ) ),
			'11' => array( 'name' => _( 'Požeško-slavonska županija' ) ),
			'08' => array( 'name' => _( 'Primorsko-goranska županija' ) ),
			'03' => array( 'name' => _( 'Sisačko-moslavačka županija' ) ),
			'17' => array( 'name' => _( 'Splitsko-dalmatinska županija' ) ),
			'15' => array( 'name' => _( 'Šibensko-kninska županija' ) ),
			'05' => array( 'name' => _( 'Varaždinska županija' ) ),
			'10' => array( 'name' => _( 'Virovitičko-podravska županija' ) ),
			'16' => array( 'name' => _( 'Vukovarsko-srijemska županija' ) ),
			'13' => array( 'name' => _( 'Zadarska županija' ) ),
			'01' => array( 'name' => _( 'Zagrebačka županija' ) )
		) );
			break;
		case 'HT':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'AR' => array( 'name' => _( 'Artibonite' ) ),
			'CE' => array( 'name' => _( 'Centre' ) ),
			'GA' => array( 'name' => _( 'Grande-Anse' ) ),
			'ND' => array( 'name' => _( 'Nord' ) ),
			'NE' => array( 'name' => _( 'Nord-Est' ) ),
			'NO' => array( 'name' => _( 'Nord-Ouest' ) ),
			'OU' => array( 'name' => _( 'Ouest' ) ),
			'SD' => array( 'name' => _( 'Sud' ) ),
			'SE' => array( 'name' => _( 'Sud-Est' ) )
		) );
			break;
		case 'HU':
			return array(
		'regions_label' => _( 'County' ),
		'regions' => array(
			'BK' => array( 'name' => _( 'Bács-Kiskun' ) ),
			'BA' => array( 'name' => _( 'Baranya' ) ),
			'BE' => array( 'name' => _( 'Békés' ) ),
			'BZ' => array( 'name' => _( 'Borsod-Abaúj-Zemplén' ) ),
			'CS' => array( 'name' => _( 'Csongrád' ) ),
			'FE' => array( 'name' => _( 'Fejér' ) ),
			'GS' => array( 'name' => _( 'Győr-Moson-Sopron' ) ),
			'HB' => array( 'name' => _( 'Hajdú-Bihar' ) ),
			'HE' => array( 'name' => _( 'Heves' ) ),
			'JN' => array( 'name' => _( 'Jász-Nagykun-Szolnok' ) ),
			'KE' => array( 'name' => _( 'Komárom-Esztergom' ) ),
			'NO' => array( 'name' => _( 'Nógrád' ) ),
			'PE' => array( 'name' => _( 'Pest' ) ),
			'SO' => array( 'name' => _( 'Somogy' ) ),
			'SZ' => array( 'name' => _( 'Szabolcs-Szatmár-Bereg' ) ),
			'TO' => array( 'name' => _( 'Tolna' ) ),
			'VA' => array( 'name' => _( 'Vas' ) ),
			'VE' => array( 'name' => _( 'Veszprém (county)' ) ),
			'ZA' => array( 'name' => _( 'Zala' ) ),
			'BC' => array( 'name' => _( 'Békéscsaba' ) ),
			'DE' => array( 'name' => _( 'Debrecen' ) ),
			'DU' => array( 'name' => _( 'Dunaújváros' ) ),
			'EG' => array( 'name' => _( 'Eger' ) ),
			'ER' => array( 'name' => _( 'Érd' ) ),
			'GY' => array( 'name' => _( 'Győr' ) ),
			'HV' => array( 'name' => _( 'Hódmezővásárhely' ) ),
			'KV' => array( 'name' => _( 'Kaposvár' ) ),
			'KM' => array( 'name' => _( 'Kecskemét' ) ),
			'MI' => array( 'name' => _( 'Miskolc' ) ),
			'NK' => array( 'name' => _( 'Nagykanizsa' ) ),
			'NY' => array( 'name' => _( 'Nyíregyháza' ) ),
			'PS' => array( 'name' => _( 'Pécs' ) ),
			'ST' => array( 'name' => _( 'Salgótarján' ) ),
			'SN' => array( 'name' => _( 'Sopron' ) ),
			'SD' => array( 'name' => _( 'Szeged' ) ),
			'SF' => array( 'name' => _( 'Székesfehérvár' ) ),
			'SS' => array( 'name' => _( 'Szekszárd' ) ),
			'SK' => array( 'name' => _( 'Szolnok' ) ),
			'SH' => array( 'name' => _( 'Szombathely' ) ),
			'TB' => array( 'name' => _( 'Tatabánya' ) ),
			'VM' => array( 'name' => _( 'Veszprém' ) ),
			'ZE' => array( 'name' => _( 'Zalaegerszeg' ) ),
			'BU' => array( 'name' => _( 'Budapest' ) )
		) );
			break;
		case 'ID':
			return array(
		'regions_label' => _( 'Geographical unit' ),
		'subregions_label' => _( 'Province' ),
		'regions' => array(
			'JW' => array(
				'name' => _( 'Jawa' ),
				'subregions' => array(
					'BT' => array( 'name' => _( 'Banten' ) ),
					'JB' => array( 'name' => _( 'Jawa Barat' ) ),
					'JT' => array( 'name' => _( 'Jawa Tengah' ) ),
					'JI' => array( 'name' => _( 'Jawa Timur' ) ),
					'JK' => array( 'name' => _( 'Jakarta Raya' ) ),
					'YO' => array( 'name' => _( 'Yogyakarta' ) )
			) ),
			'KA' => array(
				'name' => _( 'Kalimantan' ),
				'subregions' => array(
					'KB' => array( 'name' => _( 'Kalimantan Barat' ) ),
					'KT' => array( 'name' => _( 'Kalimantan Tengah' ) ),
					'KS' => array( 'name' => _( 'Kalimantan Selatan' ) ),
					'KI' => array( 'name' => _( 'Kalimantan Timur' ) )
			) ),
			'MA' => array(
				'name' => _( 'Maluku' ),
				'subregions' => array(
					'MA' => array( 'name' => _( 'Maluku' ) ),
					'MU' => array( 'name' => _( 'Maluku Utara' ) )
			) ),
			'NU' => array(
				'name' => _( 'Nusa Tenggara' ),
				'subregions' => array(
					'BA' => array( 'name' => _( 'Bali' ) ),
					'NB' => array( 'name' => _( 'Nusa Tenggara Barat' ) ),
					'NT' => array( 'name' => _( 'Nusa Tenggara Timur' ) )
			) ),
			'IJ' => array(
				'name' => _( 'Papua' ),
				'subregions' => array(
					'PA' => array( 'name' => _( 'Papua' ) ),
					'PB' => array( 'name' => _( 'Papua Barat' ) )
			) ),
			'SL' => array(
				'name' => _( 'Sulawesi' ),
				'subregions' => array(
					'GO' => array( 'name' => _( 'Gorontalo' ) ),
					'SR' => array( 'name' => _( 'Sulawesi Barat' ) ),
					'SN' => array( 'name' => _( 'Sulawesi Selatan' ) ),
					'ST' => array( 'name' => _( 'Sulawesi Tengah' ) ),
					'SG' => array( 'name' => _( 'Sulawesi Tenggara' ) ),
					'SA' => array( 'name' => _( 'Sulawesi Utara' ) )
			) ),
			'SM' => array(
				'name' => _( 'Sumatera' ),
				'subregions' => array(
					'AC' => array( 'name' => _( 'Aceh' ) ),
					'BB' => array( 'name' => _( 'Bangka Belitung' ) ),
					'BE' => array( 'name' => _( 'Bengkulu' ) ),
					'JA' => array( 'name' => _( 'Jambi' ) ),
					'KR' => array( 'name' => _( 'Kepulauan Riau' ) ),
					'LA' => array( 'name' => _( 'Lampung' ) ),
					'RI' => array( 'name' => _( 'Riau' ) ),
					'SB' => array( 'name' => _( 'Sumatra Barat' ) ),
					'SS' => array( 'name' => _( 'Sumatra Selatan' ) ),
					'SU' => array( 'name' => _( 'Sumatera Utara' ) )
			) ),
		) );
			break;
		case 'IE':
			return array(
		'regions_label' => _( 'Province' ),
		'subregions_label' => _( 'County' ),
		'regions' => array(
			'C' => array( 
				'name' => _( 'Connacht' ),
				'subregions' => array(
					'G' => array( 'name' => _( 'Galway' ) ),
					'LM' => array( 'name' => _( 'Leitrim' ) ),
					'MO' => array( 'name' => _( 'Mayo' ) ),
					'RN' => array( 'name' => _( 'Roscommon' ) ),
					'SO' => array( 'name' => _( 'Sligo' ) ),
			) ),
			'L' => array(
				'name' => _( 'Leinster' ),
				'subregions' => array(
					'CW' => array( 'name' => _( 'Carlow' ) ),
					'D' => array( 'name' => _( 'Dublin' ) ),
					'KE' => array( 'name' => _( 'Kildare' ) ),
					'KK' => array( 'name' => _( 'Kilkenny' ) ),
					'LS' => array( 'name' => _( 'Laois' ) ),
					'LD' => array( 'name' => _( 'Longford' ) ),
					'LH' => array( 'name' => _( 'Louth' ) ),
					'MH' => array( 'name' => _( 'Meath' ) ),
					'OY' => array( 'name' => _( 'Offaly' ) ),
					'WH' => array( 'name' => _( 'Westmeath' ) ),
					'WX' => array( 'name' => _( 'Wexford' ) ),
					'WW' => array( 'name' => _( 'Wicklow' ) )
			) ),
			'M' => array(
				'name' => _( 'Munster' ),
				'subregions' => array(
					'CE' => array( 'name' => _( 'Clare' ) ),
					'C' => array( 'name' => _( 'Cork' ) ),
					'KY' => array( 'name' => _( 'Kerry' ) ),
					'LK' => array( 'name' => _( 'Limerick' ) ),
					'TA' => array( 'name' => _( 'Tipperary' ) ),
					'WD' => array( 'name' => _( 'Waterford' ) )
			) ),
			'U' => array(
				'name' => _( 'Ulster' ),
				'subregions' => array(
					'CN' => array( 'name' => _( 'Cavan' ) ),
					'DL' => array( 'name' => _( 'Donegal' ) ),
					'MN' => array( 'name' => _( 'Monaghan' ) ),
			) ),
		) );
			break;
		case 'IL':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'D' => array( 'name' => _( 'HaDarom' ) ),
			'M' => array( 'name' => _( 'HaMerkaz' ) ),
			'Z' => array( 'name' => _( 'HaZafon' ) ),
			'HA' => array( 'name' => _( 'Hefa' ) ),
			'TA' => array( 'name' => _( 'Tel-Aviv' ) ),
			'JM' => array( 'name' => _( 'Yerushalayim Al Quds' ) )
		) );
			break;
		case 'IN':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'AP' => array( 'name' => _( 'Andhra Pradesh' ) ),
			'AR' => array( 'name' => _( 'Arunāchal Pradesh' ) ),
			'AS' => array( 'name' => _( 'Assam' ) ),
			'BR' => array( 'name' => _( 'Bihār' ) ),
			'CT' => array( 'name' => _( 'Chhattīsgarh' ) ),
			'GA' => array( 'name' => _( 'Goa' ) ),
			'GJ' => array( 'name' => _( 'Gujarāt' ) ),
			'HR' => array( 'name' => _( 'Haryāna' ) ),
			'HP' => array( 'name' => _( 'Himāchal Pradesh' ) ),
			'JK' => array( 'name' => _( 'Jammu and Kashmīr' ) ),
			'JH' => array( 'name' => _( 'Jharkhand' ) ),
			'KA' => array( 'name' => _( 'Karnātaka' ) ),
			'KL' => array( 'name' => _( 'Kerala' ) ),
			'MP' => array( 'name' => _( 'Madhya Pradesh' ) ),
			'MH' => array( 'name' => _( 'Mahārāshtra' ) ),
			'MN' => array( 'name' => _( 'Manipur' ) ),
			'ML' => array( 'name' => _( 'Meghālaya' ) ),
			'MZ' => array( 'name' => _( 'Mizoram' ) ),
			'NL' => array( 'name' => _( 'Nāgāland' ) ),
			'OR' => array( 'name' => _( 'Orissa' ) ),
			'PB' => array( 'name' => _( 'Punjab' ) ),
			'RJ' => array( 'name' => _( 'Rājasthān' ) ),
			'SK' => array( 'name' => _( 'Sikkim' ) ),
			'TN' => array( 'name' => _( 'Tamil Nādu' ) ),
			'TR' => array( 'name' => _( 'Tripura' ) ),
			'UL' => array( 'name' => _( 'Uttaranchal' ) ),
			'UP' => array( 'name' => _( 'Uttar Pradesh' ) ),
			'WB' => array( 'name' => _( 'West Bengal' ) ),
			'AN' => array( 'name' => _( 'Andaman and Nicobar Islands' ) ),
			'CH' => array( 'name' => _( 'Chandīgarh' ) ),
			'DN' => array( 'name' => _( 'Dādra and Nagar Haveli' ) ),
			'DD' => array( 'name' => _( 'Damān and Diu' ) ),
			'DL' => array( 'name' => _( 'Delhi' ) ),
			'LD' => array( 'name' => _( 'Lakshadweep' ) ),
			'PY' => array( 'name' => _( 'Pondicherry' ) )
		) );
			break;
		case 'IQ':
			return array(
		'regions_label' => _( 'Governorate' ),
		'regions' => array(
			'AN' => array( 'name' => _( 'Al Anbar' ) ),
			'BA' => array( 'name' => _( 'Al Basrah' ) ),
			'MU' => array( 'name' => _( 'Al Muthanna' ) ),
			'QA' => array( 'name' => _( 'Al Qadisiyah' ) ),
			'NA' => array( 'name' => _( 'An Najef' ) ),
			'AR' => array( 'name' => _( 'Arbil' ) ),
			'SW' => array( 'name' => _( 'As Sulaymaniyah' ) ),
			'TS' => array( 'name' => _( 'At Ta\'mim' ) ),
			'BB' => array( 'name' => _( 'Babil' ) ),
			'BG' => array( 'name' => _( 'Baghdad' ) ),
			'DA' => array( 'name' => _( 'Dahuk' ) ),
			'DQ' => array( 'name' => _( 'Dhi Qar' ) ),
			'DI' => array( 'name' => _( 'Diyala' ) ),
			'KA' => array( 'name' => _( 'Karbala\'' ) ),
			'MA' => array( 'name' => _( 'Maysan' ) ),
			'NI' => array( 'name' => _( 'Ninawa' ) ),
			'SD' => array( 'name' => _( 'Salah ad Din' ) ),
			'WA' => array( 'name' => _( 'Wasit' ) )
		) );
			break;
		case 'IR':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'03' => array( 'name' => _( 'Ardabīl' ) ),
			'02' => array( 'name' => _( 'Āzarbāyjān-e Gharbī' ) ),
			'01' => array( 'name' => _( 'Āzarbāyjān-e Sharqī' ) ),
			'06' => array( 'name' => _( 'Būshehr' ) ),
			'08' => array( 'name' => _( 'Chahār Mahāll va Bakhtīārī' ) ),
			'04' => array( 'name' => _( 'Eşfahān' ) ),
			'14' => array( 'name' => _( 'Fārs' ) ),
			'19' => array( 'name' => _( 'Gīlān' ) ),
			'27' => array( 'name' => _( 'Golestān' ) ),
			'24' => array( 'name' => _( 'Hamadān' ) ),
			'23' => array( 'name' => _( 'Hormozgān' ) ),
			'05' => array( 'name' => _( 'Īlām' ) ),
			'15' => array( 'name' => _( 'Kermān' ) ),
			'17' => array( 'name' => _( 'Kermānshāh' ) ),
			'29' => array( 'name' => _( 'Khorāsān-e Janūbī' ) ),
			'30' => array( 'name' => _( 'Khorāsān-e Razavī' ) ),
			'31' => array( 'name' => _( 'Khorāsān-e Shemālī' ) ),
			'10' => array( 'name' => _( 'Khūzestān' ) ),
			'18' => array( 'name' => _( 'Kohgīlūyeh va Būyer Ahmad' ) ),
			'16' => array( 'name' => _( 'Kordestān' ) ),
			'20' => array( 'name' => _( 'Lorestān' ) ),
			'22' => array( 'name' => _( 'Markazī' ) ),
			'21' => array( 'name' => _( 'Māzandarān' ) ),
			'28' => array( 'name' => _( 'Qazvīn' ) ),
			'26' => array( 'name' => _( 'Qom' ) ),
			'12' => array( 'name' => _( 'Semnān' ) ),
			'13' => array( 'name' => _( 'Sīstān va Balūchestān' ) ),
			'07' => array( 'name' => _( 'Tehrān' ) ),
			'25' => array( 'name' => _( 'Yazd' ) ),
			'11' => array( 'name' => _( 'Zanjān' ) )
		) );
			break;
		case 'IS':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'7' => array( 'name' => _( 'Austurland' ) ),
			'1' => array( 'name' => _( 'Höfuðborgarsvæðið' ) ),
			'6' => array( 'name' => _( 'Norðurland eystra' ) ),
			'5' => array( 'name' => _( 'Norðurland vestra' ) ),
			'8' => array( 'name' => _( 'Suðurland' ) ),
			'2' => array( 'name' => _( 'Suðurnes' ) ),
			'4' => array( 'name' => _( 'Vestfirðir' ) ),
			'3' => array( 'name' => _( 'Vesturland' ) ),
			'0' => array( 'name' => _( 'Reykjavík' ) )
		) );
			break;
		case 'IT':
			return array(
		'regions_label' => _( 'Region' ),
		'subregions_label' => _( 'Province' ),
		'regions' => array(
			'65' => array(
				'name' => _( 'Abruzzo' ),
				'subregions' => array(
					'CH' => array( 'name' => _( 'Chieti' ) ),
					'AQ' => array( 'name' => _( 'L\'Aquila' ) ),
					'PE' => array( 'name' => _( 'Pescara' ) ),
					'TE' => array( 'name' => _( 'Teramo' ) )
			) ),
			'77' => array(
				'name' => _( 'Basilicata' ),
				'subregions' => array(
					'MT' => array( 'name' => _( 'Matera' ) ),
					'PZ' => array( 'name' => _( 'Potenza' ) )
			) ),
			'78' => array(
				'name' => _( 'Calabria' ),
				'subregions' => array(
					'CZ' => array( 'name' => _( 'Catanzaro' ) ),
					'CS' => array( 'name' => _( 'Cosenza' ) ),
					'KR' => array( 'name' => _( 'Crotone' ) ),
					'RC' => array( 'name' => _( 'Reggio Calabria' ) ),
					'VV' => array( 'name' => _( 'Vibo Valentia' ) )
			) ),
			'72' => array(
				'name' => _( 'Campania' ),
				'subregions' => array(
					'AV' => array( 'name' => _( 'Avellino' ) ),
					'BN' => array( 'name' => _( 'Benevento' ) ),
					'CE' => array( 'name' => _( 'Caserta' ) ),
					'NA' => array( 'name' => _( 'Napoli' ) ),
					'SA' => array( 'name' => _( 'Salerno' ) )
			) ),
			'45' => array(
				'name' => _( 'Emilia-Romagna' ),
				'subregions' => array(
					'BO' => array( 'name' => _( 'Bologna' ) ),
					'FE' => array( 'name' => _( 'Ferrara' ) ),
					'FC' => array( 'name' => _( 'Forlì-Cesena' ) ),
					'MO' => array( 'name' => _( 'Modena' ) ),
					'PR' => array( 'name' => _( 'Parma' ) ),
					'PC' => array( 'name' => _( 'Piacenza' ) ),
					'RA' => array( 'name' => _( 'Ravenna' ) ),
					'RE' => array( 'name' => _( 'Reggio Emilia' ) ),
					'RN' => array( 'name' => _( 'Rimini' ) )
			) ),
			'36' => array(
				'name' => _( 'Friuli-Venezia Giulia' ),
				'subregions' => array(
					'GO' => array( 'name' => _( 'Gorizia' ) ),
					'PN' => array( 'name' => _( 'Pordenone' ) ),
					'TS' => array( 'name' => _( 'Trieste' ) ),
					'UD' => array( 'name' => _( 'Udine' ) )
			) ),
			'62' => array(
				'name' => _( 'Lazio' ),
				'subregions' => array(
					'FR' => array( 'name' => _( 'Frosinone' ) ),
					'LT' => array( 'name' => _( 'Latina' ) ),
					'RI' => array( 'name' => _( 'Rieti' ) ),
					'RM' => array( 'name' => _( 'Roma' ) ),
					'VT' => array( 'name' => _( 'Viterbo' ) )
			) ),
			'42' => array(
				'name' => _( 'Liguria' ),
				'subregions' => array(
					'GE' => array( 'name' => _( 'Genova' ) ),
					'IM' => array( 'name' => _( 'Imperia' ) ),
					'SP' => array( 'name' => _( 'La Spezia' ) ),
					'SV' => array( 'name' => _( 'Savona' ) )
			) ),
			'25' => array(
				'name' => _( 'Lombardia' ),
				'subregions' => array(
					'BG' => array( 'name' => _( 'Bergamo' ) ),
					'BS' => array( 'name' => _( 'Brescia' ) ),
					'CO' => array( 'name' => _( 'Como' ) ),
					'CR' => array( 'name' => _( 'Cremona' ) ),
					'LC' => array( 'name' => _( 'Lecco' ) ),
					'LO' => array( 'name' => _( 'Lodi' ) ),
					'MN' => array( 'name' => _( 'Mantova' ) ),
					'MI' => array( 'name' => _( 'Milano' ) ),
					'MB' => array( 'name' => _( 'Monza e Brianza' ) ),
					'PV' => array( 'name' => _( 'Pavia' ) ),
					'SO' => array( 'name' => _( 'Sondrio' ) ),
					'VA' => array( 'name' => _( 'Varese' ) )
			) ),
			'57' => array(
				'name' => _( 'Marche' ),
				'subregions' => array(
					'AN' => array( 'name' => _( 'Ancona' ) ),
					'AP' => array( 'name' => _( 'Ascoli Piceno' ) ),
					'FM' => array( 'name' => _( 'Fermo' ) ),
					'SC' => array( 'name' => _( 'Macerata' ) ),
					'PU' => array( 'name' => _( 'Pesaro e Urbino' ) )
			) ),
			'67' => array(
				'name' => _( 'Molise' ),
				'subregions' => array(
					'CB' => array( 'name' => _( 'Campobasso' ) ),
					'IS' => array( 'name' => _( 'Isernia' ) )
			) ),
			'21' => array(
				'name' => _( 'Piemonte' ),
				'subregions' => array(
					'AL' => array( 'name' => _( 'Alessandria' ) ),
					'AT' => array( 'name' => _( 'Asti' ) ),
					'BI' => array( 'name' => _( 'Biella' ) ),
					'CN' => array( 'name' => _( 'Cuneo' ) ),
					'NO' => array( 'name' => _( 'Novara' ) ),
					'TO' => array( 'name' => _( 'Torino' ) ),
					'VB' => array( 'name' => _( 'Verbano-Cusio-Ossola' ) ),
					'VC' => array( 'name' => _( 'Vercelli' ) )
			) ),
			'75' => array(
				'name' => _( 'Puglia' ),
				'subregions' => array(
					'BA' => array( 'name' => _( 'Bari' ) ),
					'BT' => array( 'name' => _( 'Barletta-Andria-Trani' ) ),
					'BR' => array( 'name' => _( 'Brindisi' ) ),
					'FG' => array( 'name' => _( 'Foggia' ) ),
					'LE' => array( 'name' => _( 'Lecce' ) ),
					'TA' => array( 'name' => _( 'Taranto' ) )
			) ),
			'88' => array(
				'name' => _( 'Sardegna' ),
				'subregions' => array(
					'CA' => array( 'name' => _( 'Cagliari' ) ),
					'CI' => array( 'name' => _( 'Carbonia-Iglesias' ) ),
					'VS' => array( 'name' => _( 'Medio Campidano' ) ),
					'NU' => array( 'name' => _( 'Nuoro' ) ),
					'OG' => array( 'name' => _( 'Ogliastra' ) ),
					'OT' => array( 'name' => _( 'Olbia-Tempio' ) ),
					'OR' => array( 'name' => _( 'Oristano' ) ),
					'SS' => array( 'name' => _( 'Sassari' ) )
			) ),
			'82' => array(
				'name' => _( 'Sicilia' ),
				'subregions' => array(
					'AG' => array( 'name' => _( 'Agrigento' ) ),
					'CL' => array( 'name' => _( 'Caltanissetta' ) ),
					'CT' => array( 'name' => _( 'Catania' ) ),
					'EN' => array( 'name' => _( 'Enna' ) ),
					'ME' => array( 'name' => _( 'Messina' ) ),
					'PA' => array( 'name' => _( 'Palermo' ) ),
					'RG' => array( 'name' => _( 'Ragusa' ) ),
					'SR' => array( 'name' => _( 'Siracusa' ) ),
					'TP' => array( 'name' => _( 'Trapani' ) )
			) ),
			'52' => array(
				'name' => _( 'Toscana' ),
				'subregions' => array(
					'AR' => array( 'name' => _( 'Arezzo' ) ),
					'FI' => array( 'name' => _( 'Firenze' ) ),
					'GR' => array( 'name' => _( 'Grosseto' ) ),
					'LI' => array( 'name' => _( 'Livorno' ) ),
					'LU' => array( 'name' => _( 'Lucca' ) ),
					'MS' => array( 'name' => _( 'Massa-Carrara' ) ),
					'PI' => array( 'name' => _( 'Pisa' ) ),
					'PT' => array( 'name' => _( 'Pistoia' ) ),
					'PO' => array( 'name' => _( 'Prato' ) ),
					'SI' => array( 'name' => _( 'Siena' ) )
			) ),
			'32' => array(
				'name' => _( 'Trentino-Alto Adige' ),
				'subregions' => array(
					'BZ' => array( 'name' => _( 'Bolzano' ) ),
					'TN' => array( 'name' => _( 'Trento' ) )
			) ),
			'55' => array(
				'name' => _( 'Umbria' ),
				'subregions' => array(
					'PG' => array( 'name' => _( 'Perugia' ) ),
					'TR' => array( 'name' => _( 'Terni' ) )
			) ),
			'23' => array(
				'name' => _( 'Valle d\'Aosta' ),
				'subregions' => array(
					'AO' => array( 'name' => _( 'Aosta' ) )
			) ),
			'34' => array(
				'name' => _( 'Veneto' ),
				'subregions' => array(
					'BL' => array( 'name' => _( 'Belluno' ) ),
					'PD' => array( 'name' => _( 'Padova' ) ),
					'RO' => array( 'name' => _( 'Rovigo' ) ),
					'TV' => array( 'name' => _( 'Treviso' ) ),
					'VE' => array( 'name' => _( 'Venezia' ) ),
					'VR' => array( 'name' => _( 'Verona' ) ),
					'VI' => array( 'name' => _( 'Vicenza' ) )
			) ),
		) );
			break;
		case 'JM':
			return array(
		'regions_label' => _( 'Parish' ),
		'regions' => array(
			'13' => array( 'name' => _( 'Clarendon' ) ),
			'09' => array( 'name' => _( 'Hanover' ) ),
			'01' => array( 'name' => _( 'Kingston' ) ),
			'12' => array( 'name' => _( 'Manchester' ) ),
			'04' => array( 'name' => _( 'Portland' ) ),
			'02' => array( 'name' => _( 'Saint Andrew' ) ),
			'06' => array( 'name' => _( 'Saint Ann' ) ),
			'14' => array( 'name' => _( 'Saint Catherine' ) ),
			'11' => array( 'name' => _( 'Saint Elizabeth' ) ),
			'08' => array( 'name' => _( 'Saint James' ) ),
			'05' => array( 'name' => _( 'Saint Mary' ) ),
			'03' => array( 'name' => _( 'Saint Thomas' ) ),
			'07' => array( 'name' => _( 'Trelawny' ) ),
			'10' => array( 'name' => _( 'Westmoreland' ) )
		) );
			break;
		case 'JO':
			return array(
		'regions_label' => _( 'Governorate' ),
		'regions' => array(
			'AJ' => array( 'name' => _( '`Ajlun' ) ),
			'AQ' => array( 'name' => _( 'Al `Aqabah' ) ),
			'BA' => array( 'name' => _( 'Al Balqā\'' ) ),
			'KA' => array( 'name' => _( 'Al Karak' ) ),
			'MA' => array( 'name' => _( 'Al Mafraq' ) ),
			'AM' => array( 'name' => _( 'Amman' ) ),
			'AT' => array( 'name' => _( 'Aţ Ţafīlah' ) ),
			'AZ' => array( 'name' => _( 'Az Zarqā\'' ) ),
			'JR' => array( 'name' => _( 'Irbid' ) ),
			'JA' => array( 'name' => _( 'Jarash' ) ),
			'MN' => array( 'name' => _( 'Ma`ān' ) ),
			'MD' => array( 'name' => _( 'Mādabā' ) )
		) );
			break;
		case 'JP':
			return array(
		'regions_label' => _( 'Prefecture' ),
		'regions' => array(
			'23' => array( 'name' => _( 'Aichi' ) ),
			'05' => array( 'name' => _( 'Akita' ) ),
			'02' => array( 'name' => _( 'Aomori' ) ),
			'12' => array( 'name' => _( 'Chiba' ) ),
			'38' => array( 'name' => _( 'Ehime' ) ),
			'18' => array( 'name' => _( 'Fukui' ) ),
			'40' => array( 'name' => _( 'Fukuoka' ) ),
			'07' => array( 'name' => _( 'Fukushima' ) ),
			'21' => array( 'name' => _( 'Gifu' ) ),
			'10' => array( 'name' => _( 'Gunma' ) ),
			'34' => array( 'name' => _( 'Hiroshima' ) ),
			'01' => array( 'name' => _( 'Hokkaido' ) ),
			'28' => array( 'name' => _( 'Hyogo' ) ),
			'08' => array( 'name' => _( 'Ibaraki' ) ),
			'17' => array( 'name' => _( 'Ishikawa' ) ),
			'03' => array( 'name' => _( 'Iwate' ) ),
			'37' => array( 'name' => _( 'Kagawa' ) ),
			'46' => array( 'name' => _( 'Kagoshima' ) ),
			'14' => array( 'name' => _( 'Kanagawa' ) ),
			'39' => array( 'name' => _( 'Kochi' ) ),
			'43' => array( 'name' => _( 'Kumamoto' ) ),
			'26' => array( 'name' => _( 'Kyoto' ) ),
			'24' => array( 'name' => _( 'Mie' ) ),
			'04' => array( 'name' => _( 'Miyagi' ) ),
			'45' => array( 'name' => _( 'Miyazaki' ) ),
			'20' => array( 'name' => _( 'Nagano' ) ),
			'42' => array( 'name' => _( 'Nagasaki' ) ),
			'29' => array( 'name' => _( 'Nara' ) ),
			'15' => array( 'name' => _( 'Niigata' ) ),
			'44' => array( 'name' => _( 'Oita' ) ),
			'33' => array( 'name' => _( 'Okayama' ) ),
			'47' => array( 'name' => _( 'Okinawa' ) ),
			'27' => array( 'name' => _( 'Osaka' ) ),
			'41' => array( 'name' => _( 'Saga' ) ),
			'11' => array( 'name' => _( 'Saitama' ) ),
			'25' => array( 'name' => _( 'Shiga' ) ),
			'32' => array( 'name' => _( 'Shimane' ) ),
			'22' => array( 'name' => _( 'Shizuoka' ) ),
			'09' => array( 'name' => _( 'Tochigi' ) ),
			'36' => array( 'name' => _( 'Tokushima' ) ),
			'13' => array( 'name' => _( 'Tokyo' ) ),
			'31' => array( 'name' => _( 'Tottori' ) ),
			'16' => array( 'name' => _( 'Toyama' ) ),
			'30' => array( 'name' => _( 'Wakayama' ) ),
			'06' => array( 'name' => _( 'Yamagata' ) ),
			'35' => array( 'name' => _( 'Yamaguchi' ) ),
			'19' => array( 'name' => _( 'Yamanashi' ) )
		) );
			break;
		case 'KE':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'110' => array( 'name' => _( 'Nairobi Municipality' ) ),
			'200' => array( 'name' => _( 'Central' ) ),
			'300' => array( 'name' => _( 'Coast' ) ),
			'400' => array( 'name' => _( 'Eastern' ) ),
			'500' => array( 'name' => _( 'North-Eastern Kaskazini Mashariki' ) ),
			'700' => array( 'name' => _( 'Rift Valley' ) ),
			'900' => array( 'name' => _( 'Western Magharibi' ) )
		) );
			break;
		case 'KG':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'GB' => array( 'name' => _( 'Bishkek' ) ),
			'B' => array( 'name' => _( 'Batken' ) ),
			'C' => array( 'name' => _( 'Chü' ) ),
			'J' => array( 'name' => _( 'Jalal-Abad' ) ),
			'N' => array( 'name' => _( 'Naryn' ) ),
			'O' => array( 'name' => _( 'Osh' ) ),
			'T' => array( 'name' => _( 'Talas' ) ),
			'Y' => array( 'name' => _( 'Ysyk-Köl' ) )
		) );
			break;
		case 'KH':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'23' => array( 'name' => _( 'Krong Kaeb' ) ),
			'24' => array( 'name' => _( 'Krong Pailin' ) ),
			'18' => array( 'name' => _( 'Krong Preah Sihanouk' ) ),
			'12' => array( 'name' => _( 'Phnom Penh' ) ),
			'2' => array( 'name' => _( 'Battambang' ) ),
			'1' => array( 'name' => _( 'Banteay Mean Chey' ) ),
			'3' => array( 'name' => _( 'Kampong Cham' ) ),
			'4' => array( 'name' => _( 'Kampong Chhnang' ) ),
			'5' => array( 'name' => _( 'Kampong Speu' ) ),
			'6' => array( 'name' => _( 'Kampong Thom' ) ),
			'7' => array( 'name' => _( 'Kampot' ) ),
			'8' => array( 'name' => _( 'Kandal' ) ),
			'9' => array( 'name' => _( 'Kach Kong' ) ),
			'10' => array( 'name' => _( 'Krachoh' ) ),
			'11' => array( 'name' => _( 'Mondol Kiri' ) ),
			'22' => array( 'name' => _( 'Otdar Mean Chey' ) ),
			'15' => array( 'name' => _( 'Pousaat' ) ),
			'13' => array( 'name' => _( 'Preah Vihear' ) ),
			'14' => array( 'name' => _( 'Prey Veaeng' ) ),
			'16' => array( 'name' => _( 'Rotanak Kiri' ) ),
			'17' => array( 'name' => _( 'Siem Reab' ) ),
			'19' => array( 'name' => _( 'Stueng Traeng' ) ),
			'20' => array( 'name' => _( 'Svaay Rieng' ) ),
			'21' => array( 'name' => _( 'Taakaev' ) )
		) );
			break;
		case 'KI':
			return array(
		'regions_label' => _( 'Island group' ),
		'regions' => array(
			'G' => array( 'name' => _( 'Gilbert Islands' ) ),
			'L' => array( 'name' => _( 'Line Islands' ) ),
			'P' => array( 'name' => _( 'Phoenix Islands' ) )
		) );
			break;
		case 'KN':
			return array(
		'regions_label' => _( 'State' ),
		'subregions_label' => _( 'Parish' ),
		'regions' => array(
			'K' => array(
				'name' => _( 'Saint Kitts' ),
				'subregions' => array(
					'01' => array( 'name' => _( 'Christ Church Nichola Town' ) ),
					'02' => array( 'name' => _( 'Saint Anne Sandy Point' ) ),
					'03' => array( 'name' => _( 'Saint George Basseterre' ) ),
					'06' => array( 'name' => _( 'Saint John Capisterre' ) ),
					'08' => array( 'name' => _( 'Saint Mary Cayon' ) ),
					'09' => array( 'name' => _( 'Saint Paul Capisterre' ) ),
					'11' => array( 'name' => _( 'Saint Peter Basseterre' ) ),
					'13' => array( 'name' => _( 'Saint Thomas Middle Island' ) ),
					'15' => array( 'name' => _( 'Trinity Palmetto Point' ) )
			) ),
			'N' => array(
				'name' => _( 'Nevis' ),
				'subregions' => array(
					'04' => array( 'name' => _( 'Saint George Gingerland' ) ),
					'05' => array( 'name' => _( 'Saint James Windward' ) ),
					'07' => array( 'name' => _( 'Saint John Figtree' ) ),
					'10' => array( 'name' => _( 'Saint Paul Charlestown' ) ),
					'12' => array( 'name' => _( 'Saint Thomas Lowland' )
			) ) )
		) );
			break;
		case 'KM':
			return array(
		'regions_label' => _( 'Island' ),
		'regions' => array(
			'A' => array( 'name' => _( 'Andjouân (Anjwān)' ) ),
			'G' => array( 'name' => _( 'Andjazîdja (Anjazījah)' ) ),
			'M' => array( 'name' => _( 'Moûhîlî (Mūhīlī)' ) )
		) );
			break;
		case 'KP':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'01' => array( 'name' => _( 'P’yŏngyang' ) ),
			'13' => array( 'name' => _( 'Nasŏn (Najin-Sŏnbong)' ) ),
			'02' => array( 'name' => _( 'P’yŏngan-namdo' ) ),
			'03' => array( 'name' => _( 'P’yŏngan-bukto' ) ),
			'04' => array( 'name' => _( 'Chagang-do' ) ),
			'05' => array( 'name' => _( 'Hwanghae-namdo' ) ),
			'06' => array( 'name' => _( 'Hwanghae-bukto' ) ),
			'07' => array( 'name' => _( 'Kangwŏn-do' ) ),
			'08' => array( 'name' => _( 'Hamgyŏng-namdo' ) ),
			'09' => array( 'name' => _( 'Hamgyŏng-bukto' ) ),
			'10' => array( 'name' => _( 'Yanggang-do' ) )
		) );
			break;
		case 'KR':
			return array(
		'regions_label' => _( 'Province' ), // label metropolitan cities as provinces
		'regions' => array(
			'11' => array( 'name' => _( 'Seoul Teugbyeolsi' ) ),
			'26' => array( 'name' => _( 'Busan Gwang\'yeogsi' ) ),
			'27' => array( 'name' => _( 'Daegu Gwang\'yeogsi' ) ),
			'30' => array( 'name' => _( 'Daejeon Gwang\'yeogsi' ) ),
			'29' => array( 'name' => _( 'Gwangju Gwang\'yeogsi' ) ),
			'28' => array( 'name' => _( 'Incheon Gwang\'yeogsi' ) ),
			'31' => array( 'name' => _( 'Ulsan Gwang\'yeogsi' ) ),
			'43' => array( 'name' => _( 'Chungcheongbukdo' ) ),
			'44' => array( 'name' => _( 'Chungcheongnamdo' ) ),
			'42' => array( 'name' => _( 'Gang\'weondo' ) ),
			'41' => array( 'name' => _( 'Gyeonggido' ) ),
			'47' => array( 'name' => _( 'Gyeongsangbukdo' ) ),
			'48' => array( 'name' => _( 'Gyeongsangnamdo' ) ),
			'49' => array( 'name' => _( 'Jejudo' ) ),
			'45' => array( 'name' => _( 'Jeonrabukdo' ) ),
			'46' => array( 'name' => _( 'Jeonranamdo' ) )
		) );
			break;
		case 'KW':
			return array(
		'regions_label' => _( 'Governorate' ),
		'regions' => array(
			'AH' => array( 'name' => _( 'Al Ahmadi' ) ),
			'FA' => array( 'name' => _( 'Al Farwānīyah' ) ),
			'JA' => array( 'name' => _( 'Al Jahrah' ) ),
			'KU' => array( 'name' => _( 'Al Kuwayt' ) ),
			'HA' => array( 'name' => _( 'Hawallī' ) )
		) );
			break;
		case 'KZ':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'ALA' => array( 'name' => _( 'Almaty' ) ),
			'AST' => array( 'name' => _( 'Astana' ) ),
			'ALM' => array( 'name' => _( 'Almaty oblysy' ) ),
			'AKM' => array( 'name' => _( 'Aqmola oblysy' ) ),
			'AKT' => array( 'name' => _( 'Aqtöbe oblysy' ) ),
			'ATY' => array( 'name' => _( 'Atyraū oblysy' ) ),
			'ZAP' => array( 'name' => _( 'Batys Quzaqstan oblysy' ) ),
			'MAN' => array( 'name' => _( 'Mangghystaū oblysy' ) ),
			'YUZ' => array( 'name' => _( 'Ongtüstik Qazaqstan oblysy' ) ),
			'PAV' => array( 'name' => _( 'Pavlodar oblysy' ) ),
			'KAR' => array( 'name' => _( 'Qaraghandy oblysy' ) ),
			'KUS' => array( 'name' => _( 'Qostanay oblysy' ) ),
			'KZY' => array( 'name' => _( 'Qyzylorda oblysy' ) ),
			'VOS' => array( 'name' => _( 'Shyghys Qazaqstan oblysy' ) ),
			'SEV' => array( 'name' => _( 'Soltüstik Quzaqstan oblysy' ) ),
			'ZHA' => array( 'name' => _( 'Zhambyl oblysy' ) )
		) );
			break;
		case 'LA':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'VT' => array( 'name' => _( 'Vientiane' ) ),
			'AT' => array( 'name' => _( 'Attapu' ) ),
			'BK' => array( 'name' => _( 'Bokèo' ) ),
			'BL' => array( 'name' => _( 'Bolikhamxai' ) ),
			'CH' => array( 'name' => _( 'Champasak' ) ),
			'HO' => array( 'name' => _( 'Houaphan' ) ),
			'KH' => array( 'name' => _( 'Khammouan' ) ),
			'LM' => array( 'name' => _( 'Louang Namtha' ) ),
			'LP' => array( 'name' => _( 'Louangphabang' ) ),
			'OU' => array( 'name' => _( 'Oudômxai' ) ),
			'PH' => array( 'name' => _( 'Phôngsali' ) ),
			'SL' => array( 'name' => _( 'Salavan' ) ),
			'SV' => array( 'name' => _( 'Savannakhét' ) ),
			'VI' => array( 'name' => _( 'Vientiane' ) ),
			'XA' => array( 'name' => _( 'Xaignabouli' ) ),
			'XE' => array( 'name' => _( 'Xékong' ) ),
			'XI' => array( 'name' => _( 'Xiangkhoang' ) ),
			'XN' => array( 'name' => _( 'Xiasômboun' ) )
		) );
			break;
		case 'LI':
			return array(
		'regions_label' => _( 'Commune' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Balzers' ) ),
			'02' => array( 'name' => _( 'Eschen' ) ),
			'03' => array( 'name' => _( 'Gamprin' ) ),
			'04' => array( 'name' => _( 'Mauren' ) ),
			'05' => array( 'name' => _( 'Planken' ) ),
			'06' => array( 'name' => _( 'Ruggell' ) ),
			'07' => array( 'name' => _( 'Schaan' ) ),
			'08' => array( 'name' => _( 'Schellenberg' ) ),
			'09' => array( 'name' => _( 'Triesen' ) ),
			'10' => array( 'name' => _( 'Triesenberg' ) ),
			'11' => array( 'name' => _( 'Vaduz' ) )
		) );
			break;
		case 'LB':
			return array(
		'regions_label' => _( 'Governorate' ),
		'regions' => array(
			'AK' => array( 'name' => _( 'Aakkâr' ) ),
			'BH' => array( 'name' => _( 'Baalbek-Hermel' ) ),
			'BI' => array( 'name' => _( 'Béqaa' ) ),
			'BA' => array( 'name' => _( 'Beyrouth' ) ),
			'AS' => array( 'name' => _( 'Liban-Nord' ) ),
			'JA' => array( 'name' => _( 'Liban-Sud' ) ),
			'JL' => array( 'name' => _( 'Mont-Liban' ) ),
			'NA' => array( 'name' => _( 'Nabatîyé' ) )
		) );
			break;
		case 'LK':
			return array(
		'regions_label' => _( 'Province' ),
		'subregions_label' => _( 'District' ),
		'regions' => array(
			'1' => array(
				'name' => _( 'Basnāhira paḷāta' ),
				'subregions' => array(
					'11' => array( 'name' => _( 'Kŏḷamba' ) ),
					'12' => array( 'name' => _( 'Gampaha' ) ),
					'13' => array( 'name' => _( 'Kaḷutara' ) )
			) ),
			'3' => array(
				'name' => _( 'Dakuṇu paḷāta' ),
				'subregions' => array(
					'31' => array( 'name' => _( 'Gālla' ) ),
					'33' => array( 'name' => _( 'Hambantŏṭa' ) ),
					'32' => array( 'name' => _( 'Mātara' ) )
			) ),
			'2' => array(
				'name' => _( 'Madhyama paḷāta' ),
				'subregions' => array(
					'21' => array( 'name' => _( 'Mahanuvara' ) ),
					'22' => array( 'name' => _( 'Mātale' ) ),
					'23' => array( 'name' => _( 'Nuvara Ĕliya' ) )
			) ),
			'5' => array(
				'name' => _( 'Næ̆gĕnahira paḷāta' ),
				'subregions' => array(
					'52' => array( 'name' => _( 'Ampāara' ) ),
					'51' => array( 'name' => _( 'Maḍakalapuva' ) ),
					'53' => array( 'name' => _( 'Trikuṇāmalaya' ) )
			) ),
			'9' => array(
				'name' => _( 'Sabaragamuva paḷāta' ),
				'subregions' => array(
					'92' => array( 'name' => _( 'Kægalla' ) ),
					'91' => array( 'name' => _( 'Ratnapura' ) ),
			) ),
			'7' => array(
				'name' => _( 'Uturumæ̆da paḷāta' ),
				'subregions' => array(
					'71' => array( 'name' => _( 'Anurādhapura' ) ),
					'72' => array( 'name' => _( 'Pŏḷŏnnaruva' ) )
			) ),
			'4' => array(
				'name' => _( 'Uturu paḷāta' ),
				'subregions' => array(
					'41' => array( 'name' => _( 'Yāpanaya' ) ),
					'42' => array( 'name' => _( 'Kilinŏchchi' ) ),
					'43' => array( 'name' => _( 'Mannārama' ) ),
					'45' => array( 'name' => _( 'Mulativ' ) ),
					'44' => array( 'name' => _( 'Vavuniyāva' ) )
			) ),
			'8' => array(
				'name' => _( 'Ūva paḷāta' ),
				'subregions' => array(
					'81' => array( 'name' => _( 'Badulla' ) ),
					'82' => array( 'name' => _( 'Mŏṇarāgala' ) )
			) ),
			'6' => array(
				'name' => _( 'Vayamba paḷāta' ),
				'subregions' => array(
					'61' => array( 'name' => _( 'Kuruṇægala' ) ),
					'62' => array( 'name' => _( 'Puttalama' ) )
			) ),
		) );
			break;
		case 'LR':
			return array(
		'regions_label' => _( 'County' ),
		'regions' => array(
			'BM' => array( 'name' => _( 'Bomi' ) ),
			'BG' => array( 'name' => _( 'Bong' ) ),
			'GB' => array( 'name' => _( 'Grand Bassa' ) ),
			'CM' => array( 'name' => _( 'Grand Cape Mount' ) ),
			'GG' => array( 'name' => _( 'Grand Gedeh' ) ),
			'GK' => array( 'name' => _( 'Grand Kru' ) ),
			'LO' => array( 'name' => _( 'Lofa' ) ),
			'MG' => array( 'name' => _( 'Margibi' ) ),
			'MY' => array( 'name' => _( 'Maryland' ) ),
			'MO' => array( 'name' => _( 'Montserrado' ) ),
			'NI' => array( 'name' => _( 'Nimba' ) ),
			'RI' => array( 'name' => _( 'Rivercess' ) ),
			'SI' => array( 'name' => _( 'Sinoe' ) )
		) );
			break;
		case 'LS':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'D' => array( 'name' => _( 'Berea' ) ),
			'B' => array( 'name' => _( 'Butha-Buthe' ) ),
			'C' => array( 'name' => _( 'Leribe' ) ),
			'E' => array( 'name' => _( 'Mafeteng' ) ),
			'A' => array( 'name' => _( 'Maseru' ) ),
			'F' => array( 'name' => _( 'Mohale\'s Hoek' ) ),
			'J' => array( 'name' => _( 'Mokhotlong' ) ),
			'H' => array( 'name' => _( 'Qacha\'s Nek' ) ),
			'G' => array( 'name' => _( 'Quthing' ) ),
			'K' => array( 'name' => _( 'Thaba-Tseka' ) )
		) );
			break;
		case 'LT':
			return array(
		'regions_label' => _( 'County' ),
		'regions' => array(
			'AL' => array( 'name' => _( 'Alytaus Apskritis' ) ),
			'KU' => array( 'name' => _( 'Kauno Apskritis' ) ),
			'KL' => array( 'name' => _( 'Klaipėdos Apskritis' ) ),
			'MR' => array( 'name' => _( 'Marijampolės Apskritis' ) ),
			'PN' => array( 'name' => _( 'Panevėžio Apskritis' ) ),
			'SA' => array( 'name' => _( 'Šiaulių Apskritis' ) ),
			'TA' => array( 'name' => _( 'Tauragés Apskritis' ) ),
			'TE' => array( 'name' => _( 'Telšių Apskritis' ) ),
			'UT' => array( 'name' => _( 'Utenos Apskritis' ) ),
			'VL' => array( 'name' => _( 'Vilniaus Apskritis' ) )
		) );
			break;
		case 'LU':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'D' => array( 'name' => _( 'Diekirch' ) ),
			'G' => array( 'name' => _( 'Grevenmacher' ) ),
			'L' => array( 'name' => _( 'Luxembourg' ) )
		) );
			break;
		case 'LV':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'AI' => array( 'name' => _( 'Aizkraukle' ) ),
			'AL' => array( 'name' => _( 'Alūksne' ) ),
			'BL' => array( 'name' => _( 'Balvi' ) ),
			'BU' => array( 'name' => _( 'Bauska' ) ),
			'CE' => array( 'name' => _( 'Cēsis' ) ),
			'DA' => array( 'name' => _( 'Daugavpils' ) ),
			'DO' => array( 'name' => _( 'Dobele' ) ),
			'GU' => array( 'name' => _( 'Gulbene' ) ),
			'JK' => array( 'name' => _( 'Jēkabpils' ) ),
			'JL' => array( 'name' => _( 'Jelgava' ) ),
			'KR' => array( 'name' => _( 'Krāslava' ) ),
			'KU' => array( 'name' => _( 'Kuldīga' ) ),
			'LE' => array( 'name' => _( 'Liepāja' ) ),
			'LM' => array( 'name' => _( 'Limbaži' ) ),
			'LU' => array( 'name' => _( 'Ludza' ) ),
			'MA' => array( 'name' => _( 'Madona' ) ),
			'OG' => array( 'name' => _( 'Ogre' ) ),
			'PR' => array( 'name' => _( 'Preiļi' ) ),
			'RE' => array( 'name' => _( 'Rēzekne' ) ),
			'RI' => array( 'name' => _( 'Rīga' ) ),
			'SA' => array( 'name' => _( 'Saldus' ) ),
			'TA' => array( 'name' => _( 'Talsi' ) ),
			'TU' => array( 'name' => _( 'Tukums' ) ),
			'VK' => array( 'name' => _( 'Valka' ) ),
			'VM' => array( 'name' => _( 'Valmiera' ) ),
			'VE' => array( 'name' => _( 'Ventspils' ) ),
			'DGV' => array( 'name' => _( 'Daugavpils' ) ),
			'JEL' => array( 'name' => _( 'Jelgava' ) ),
			'JUR' => array( 'name' => _( 'Jūrmala' ) ),
			'LPX' => array( 'name' => _( 'Liepāja' ) ),
			'REZ' => array( 'name' => _( 'Rēzekne' ) ),
			'RIX' => array( 'name' => _( 'Rīga' ) ),
			'VEN' => array( 'name' => _( 'Ventspils' ) )
		) );
			break;
		case 'LY':
			return array(
		'regions_label' => _( 'Popularates' ),
		'regions' => array(
			'BU' => array( 'name' => _( 'Al Buţnān' ) ),
			'JA' => array( 'name' => _( 'Al Jabal al Akhḑar' ) ),
			'JG' => array( 'name' => _( 'Al Jabal al Gharbī' ) ),
			'JI' => array( 'name' => _( 'Al Jifārah' ) ),
			'JU' => array( 'name' => _( 'Al Jufrah' ) ),
			'KF' => array( 'name' => _( 'Al Kufrah' ) ),
			'MJ' => array( 'name' => _( 'Al Marj' ) ),
			'MB' => array( 'name' => _( 'Al Marqab' ) ),
			'WA' => array( 'name' => _( 'Al Wāḩāt' ) ),
			'NQ' => array( 'name' => _( 'An Nuqaţ al Khams' ) ),
			'ZA' => array( 'name' => _( 'Az Zāwiyah' ) ),
			'BA' => array( 'name' => _( 'Banghāzī' ) ),
			'DR' => array( 'name' => _( 'Darnah' ) ),
			'GT' => array( 'name' => _( 'Ghāt' ) ),
			'JB' => array( 'name' => _( 'Jaghbūb' ) ),
			'MI' => array( 'name' => _( 'Mişrātah' ) ),
			'MQ' => array( 'name' => _( 'Murzuq' ) ),
			'NL' => array( 'name' => _( 'Nālūt' ) ),
			'SB' => array( 'name' => _( 'Sabhā' ) ),
			'SR' => array( 'name' => _( 'Surt' ) ),
			'TB' => array( 'name' => _( 'Ţarābulus' ) ),
			'WD' => array( 'name' => _( 'Wādī al Ḩayāt' ) ),
			'WS' => array( 'name' => _( 'Wādī ash Shāţiʾ' ) )
		) );
			break;
		case 'MA':
			return array(
		'regions_label' => _( 'Economic region' ),
		'subregions_label' => _( 'Province' ),
		'regions' => array(
			'09' => array(
				'name' => _( 'Chaouia-Ouardigha' ),
				'subregions' => array(
					'BES' => array( 'name' => _( 'Ben Slimane' ) ),
					'KHO' => array( 'name' => _( 'Khouribga' ) ),
					'SET' => array( 'name' => _( 'Settat' ) )
			) ),
			'10' => array(
				'name' => _( 'Doukhala-Abda' ),
				'subregions' => array(
					'JDI' => array( 'name' => _( 'El Jadida' ) ),
					'SAF' => array( 'name' => _( 'Safi' ) )
			) ),
			'05' => array(
				'name' => _( 'Fès-Boulemane' ),
				'subregions' => array(
					'BOM' => array( 'name' => _( 'Boulemane' ) ),
					'MOU' => array( 'name' => _( 'Moulay Yacoub' ) ),
					'SEF' => array( 'name' => _( 'Sefrou' ) ),
					'FES' => array( 'name' => _( 'Fès-Dar-Dbibegh' ) )
			) ),
			'02' => array(
				'name' => _( 'Gharb-Chrarda-Beni Hssen' ),
				'subregions' => array(
					'KEN' => array( 'name' => _( 'Kénitra' ) ),
					'SIK' => array( 'name' => _( 'Sidl Kacem' ) )
			) ),
			'08' => array(
				'name' => _( 'Grand Casablanca' ),
				'subregions' => array(
					'MED' => array( 'name' => _( 'Médiouna' ) ),
					'NOU' => array( 'name' => _( 'Nouaceur' ) ),
					'CAS' => array( 'name' => _( 'Casablanca [Dar el Beïda]' ) ),
					'MOH' => array( 'name' => _( 'Mohammadia' ) )
			) ),
			'14' => array(
				'name' => _( 'Guelmim-Es Smara' ),
				'subregions' => array(
					'ASZ' => array( 'name' => _( 'Assa-Zag' ) ),
					'ESM' => array( 'name' => _( 'Es Smara (EH)' ) ),
					'GUE' => array( 'name' => _( 'Guelmim' ) ),
					'TNT' => array( 'name' => _( 'Tan-Tan' ) ),
					'TAT' => array( 'name' => _( 'Tata' ) )
			) ),
			'15' => array(
				'name' => _( 'Laâyoune-Boujdour-Sakia el Hamra' ),
				'subregions' => array(
					'BOD' => array( 'name' => _( 'Boujdour (EH)' ) ),
					'LAA' => array( 'name' => _( 'Laâyoune (EH)' ) )
			) ),
			'04' => array(
				'name' => _( 'L\'Oriental' ),
				'subregions' => array(
					'BER' => array( 'name' => _( 'Berkane' ) ),
					'FIG' => array( 'name' => _( 'Figuig' ) ),
					'JRA' => array( 'name' => _( 'Jrada' ) ),
					'NAD' => array( 'name' => _( 'Nador' ) ),
					'TAI' => array( 'name' => _( 'Taourirt' ) ),
					'OUJ' => array( 'name' => _( 'Oujda-Angad' ) ),
			) ),
			'11' => array(
				'name' => _( 'Marrakech-Tensift-Al Haouz' ),
				'subregions' => array(
					'HAO' => array( 'name' => _( 'Al Haouz' ) ),
					'CHI' => array( 'name' => _( 'Chichaoua' ) ),
					'ESI' => array( 'name' => _( 'Essaouira' ) ),
					'KES' => array( 'name' => _( 'Kelaat es Sraghna' ) ),
					'MMD' => array( 'name' => _( 'Marrakech-Medina' ) ),
					'MMN' => array( 'name' => _( 'Marrakech-Menara' ) ),
					'SYB' => array( 'name' => _( 'Sidi Youssef Ben Ali' ) )
			) ),
			'06' => array(
				'name' => _( 'Meknès-Tafilalet' ),
				'subregions' => array(
					'HAJ' => array( 'name' => _( 'El Hajeb' ) ),
					'ERR' => array( 'name' => _( 'Errachidia' ) ),
					'IFR' => array( 'name' => _( 'Ifrane' ) ),
					'KHN' => array( 'name' => _( 'Khenifra' ) ),
					'MEK' => array( 'name' => _( 'Meknès' ) )
			) ),
			'16' => array(
				'name' => _( 'Oued ed Dahab-Lagouira' ),
				'subregions' => array(
					'OUD' => array( 'name' => _( 'Oued ed Dahab (EH)' ) ),
					'AOU' => array( 'name' => _( 'Aousserd' ) )
			) ),
			'07' => array(
				'name' => _( 'Rabat-Salé-Zemmour-Zaer' ),
				'subregions' => array(
					'KHE' => array( 'name' => _( 'Khemisaet' ) ),
					'RAB' => array( 'name' => _( 'Rabat' ) ),
					'SAL' => array( 'name' => _( 'Salé' ) ),
					'SKH' => array( 'name' => _( 'Skhirate-Témara' ) )
			) ),
			'13' => array(
				'name' => _( 'Sous-Massa-Draa' ),
				'subregions' => array(
					'CHT' => array( 'name' => _( 'Chtouka-Ait Baha' ) ),
					'OUA' => array( 'name' => _( 'Ouarzazate' ) ),
					'TAR' => array( 'name' => _( 'Taroudant' ) ),
					'TIZ' => array( 'name' => _( 'Tiznit' ) ),
					'ZAG' => array( 'name' => _( 'Zagora' ) ),
					'AGD' => array( 'name' => _( 'Agadir-Ida-Outanane' ) ),
					'INE' => array( 'name' => _( 'Inezgane-Ait Melloul' ) )
			) ),
			'12' => array(
				'name' => _( 'Tadla-Azilal' ),
				'subregions' => array(
					'AZI' => array( 'name' => _( 'Azilal' ) ),
					'BEM' => array( 'name' => _( 'Beni Mellal' ) )
			) ),
			'01' => array(
				'name' => _( 'Tanger-Tétouan' ),
				'subregions' => array(
					'CHE' => array( 'name' => _( 'Chefchaouen' ) ),
					'LAP' => array( 'name' => _( 'Larache' ) ),
					'FAH' => array( 'name' => _( 'Fahs-Beni Makada' ) ),
					'TNG' => array( 'name' => _( 'Tanger-Assilah' ) ),
					'TET' => array( 'name' => _( 'Tétouan' ) )
			) ),
			'03' => array(
				'name' => _( 'Taza-Al Hoceima-Taounate' ),
				'subregions' => array(
					'HOC' => array( 'name' => _( 'Al Hoceïma' ) ),
					'TAO' => array( 'name' => _( 'Taounate' ) ),
					'TAZ' => array( 'name' => _( 'Taza' ) )
			) ),
		) );
			break;
		case 'MD':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'GA' => array( 'name' => _( 'Găgăuzia, Unitatea teritorială autonomă' ) ),
			'BA' => array( 'name' => _( 'Bălți' ) ),
			'BD' => array( 'name' => _( 'Tighina' ) ),
			'CU' => array( 'name' => _( 'Chișinău' ) ),
			'AN' => array( 'name' => _( 'Anenii Noi' ) ),
			'BS' => array( 'name' => _( 'Basarabeasca' ) ),
			'BR' => array( 'name' => _( 'Briceni' ) ),
			'CA' => array( 'name' => _( 'Cahul' ) ),
			'CT' => array( 'name' => _( 'Cantemir' ) ),
			'CL' => array( 'name' => _( 'Călărași' ) ),
			'CS' => array( 'name' => _( 'Căușeni' ) ),
			'CM' => array( 'name' => _( 'Cimișlia' ) ),
			'CR' => array( 'name' => _( 'Criuleni' ) ),
			'DO' => array( 'name' => _( 'Dondușeni' ) ),
			'DR' => array( 'name' => _( 'Drochia' ) ),
			'DU' => array( 'name' => _( 'Dubăsari' ) ),
			'ED' => array( 'name' => _( 'Edineț' ) ),
			'FA' => array( 'name' => _( 'Fălești' ) ),
			'FL' => array( 'name' => _( 'Florești' ) ),
			'GL' => array( 'name' => _( 'Glodeni' ) ),
			'HI' => array( 'name' => _( 'Hîncești' ) ),
			'IA' => array( 'name' => _( 'Ialoveni' ) ),
			'LE' => array( 'name' => _( 'Leova' ) ),
			'NI' => array( 'name' => _( 'Nisporeni' ) ),
			'OC' => array( 'name' => _( 'Ocnița' ) ),
			'OR' => array( 'name' => _( 'Orhei' ) ),
			'RE' => array( 'name' => _( 'Rezina' ) ),
			'RI' => array( 'name' => _( 'Rîșcani' ) ),
			'SI' => array( 'name' => _( 'Sîngerei' ) ),
			'SO' => array( 'name' => _( 'Soroca' ) ),
			'ST' => array( 'name' => _( 'Strășeni' ) ),
			'SD' => array( 'name' => _( 'Șoldănești' ) ),
			'SV' => array( 'name' => _( 'Ștefan Vodă' ) ),
			'TA' => array( 'name' => _( 'Taraclia' ) ),
			'TE' => array( 'name' => _( 'Telenești' ) ),
			'UN' => array( 'name' => _( 'Ungheni' ) ),
			'SN' => array( 'name' => _( 'Stînga Nistrului, unitatea teritorială din' ) )
		) );
			break;
		case 'ME':
			return array(
		'regions_label' => _( 'Municipality' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Andrijevica' ) ),
			'02' => array( 'name' => _( 'Bar' ) ),
			'03' => array( 'name' => _( 'Berane' ) ),
			'04' => array( 'name' => _( 'Bijelo Polje' ) ),
			'05' => array( 'name' => _( 'Budva' ) ),
			'06' => array( 'name' => _( 'Cetinje' ) ),
			'07' => array( 'name' => _( 'Danilovgrad' ) ),
			'08' => array( 'name' => _( 'Herceg-Novi' ) ),
			'09' => array( 'name' => _( 'Kolašin' ) ),
			'10' => array( 'name' => _( 'Kotor' ) ),
			'11' => array( 'name' => _( 'Mojkovac' ) ),
			'12' => array( 'name' => _( 'Nikšić' ) ),
			'13' => array( 'name' => _( 'Plav' ) ),
			'14' => array( 'name' => _( 'Pljevlja' ) ),
			'15' => array( 'name' => _( 'Plužine' ) ),
			'16' => array( 'name' => _( 'Podgorica' ) ),
			'17' => array( 'name' => _( 'Rožaje' ) ),
			'18' => array( 'name' => _( 'Šavnik' ) ),
			'19' => array( 'name' => _( 'Tivat' ) ),
			'20' => array( 'name' => _( 'Ulcinj' ) ),
			'21' => array( 'name' => _( 'Žabljak' ) )
		) );
			break;
		case 'MG':
			return array(
		'regions_label' => _( 'Autonomous province' ),
		'regions' => array(
			'T' => array( 'name' => _( 'Antananarivo' ) ),
			'D' => array( 'name' => _( 'Antsiranana' ) ),
			'F' => array( 'name' => _( 'Fianarantsoa' ) ),
			'M' => array( 'name' => _( 'Mahajanga' ) ),
			'A' => array( 'name' => _( 'Toamasina' ) ),
			'U' => array( 'name' => _( 'Toliara' ) )
		) );
			break;
		case 'MH':
			return array(
		'regions_label' => _( 'Chains (of islands)' ),
		'subregions_label' => _( 'Municipality' ),
		'regions' => array(
			'L' => array(
				'name' => _( 'Ralik chain' ),
				'subregions' => array(
					'ALL' => array( 'name' => _( 'Ailinglaplap' ) ),
					'EBO' => array( 'name' => _( 'Ebon' ) ),
					'ENI' => array( 'name' => _( 'Enewetak' ) ),
					'JAB' => array( 'name' => _( 'Jabat' ) ),
					'JAL' => array( 'name' => _( 'Jaluit' ) ),
					'KIL' => array( 'name' => _( 'Kili' ) ),
					'KWA' => array( 'name' => _( 'Kwajalein' ) ),
					'LAE' => array( 'name' => _( 'Lae' ) ),
					'LIB' => array( 'name' => _( 'Lib' ) ),
					'NMK' => array( 'name' => _( 'Namdrik' ) ),
					'NMU' => array( 'name' => _( 'Namu' ) ),
					'RON' => array( 'name' => _( 'Rongelap' ) ),
					'UJA' => array( 'name' => _( 'Ujae' ) ),
					'WTN' => array( 'name' => _( 'Wotho' ) )
			)),
			'T' => array(
				'name' => _( 'Ratak chain' ),
				'subregions' => array(
					'ALK' => array( 'name' => _( 'Ailuk' ) ),
					'ARN' => array( 'name' => _( 'Arno' ) ),
					'AUR' => array( 'name' => _( 'Aur' ) ),
					'LIK' => array( 'name' => _( 'Likiep' ) ),
					'MAJ' => array( 'name' => _( 'Majuro' ) ),
					'MAL' => array( 'name' => _( 'Maloelap' ) ),
					'MEJ' => array( 'name' => _( 'Mejit' ) ),
					'MIL' => array( 'name' => _( 'Mili' ) ),
					'UTI' => array( 'name' => _( 'Utirik' ) ),
					'WTJ' => array( 'name' => _( 'Wotje' ) )
			) ),
		) );
			break;
		case 'MK':
			return array(
		'regions_label' => _( 'Municipality' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Aerodrom' ) ),
			'02' => array( 'name' => _( 'Aračinovo' ) ),
			'03' => array( 'name' => _( 'Berovo' ) ),
			'04' => array( 'name' => _( 'Bitola' ) ),
			'05' => array( 'name' => _( 'Bogdanci' ) ),
			'06' => array( 'name' => _( 'Bogovinje' ) ),
			'07' => array( 'name' => _( 'Bosilovo' ) ),
			'08' => array( 'name' => _( 'Brvenica' ) ),
			'09' => array( 'name' => _( 'Butel' ) ),
			'77' => array( 'name' => _( 'Centar' ) ),
			'78' => array( 'name' => _( 'Centar Župa' ) ),
			'79' => array( 'name' => _( 'Čair' ) ),
			'80' => array( 'name' => _( 'Čaška' ) ),
			'81' => array( 'name' => _( 'Češinovo-Obleševo' ) ),
			'82' => array( 'name' => _( 'Čučer Sandevo' ) ),
			'21' => array( 'name' => _( 'Debar' ) ),
			'22' => array( 'name' => _( 'Debarca' ) ),
			'23' => array( 'name' => _( 'Delčevo' ) ),
			'25' => array( 'name' => _( 'Demir Hisar' ) ),
			'24' => array( 'name' => _( 'Demir Kapija' ) ),
			'26' => array( 'name' => _( 'Dojran' ) ),
			'27' => array( 'name' => _( 'Dolneni' ) ),
			'28' => array( 'name' => _( 'Drugovo' ) ),
			'17' => array( 'name' => _( 'Gazi Baba' ) ),
			'18' => array( 'name' => _( 'Gevgelija' ) ),
			'29' => array( 'name' => _( 'Gjorče Petrov' ) ),
			'19' => array( 'name' => _( 'Gostivar' ) ),
			'20' => array( 'name' => _( 'Gradsko' ) ),
			'34' => array( 'name' => _( 'Ilinden' ) ),
			'35' => array( 'name' => _( 'Jegunovce' ) ),
			'37' => array( 'name' => _( 'Karbinci' ) ),
			'38' => array( 'name' => _( 'Karpoš' ) ),
			'36' => array( 'name' => _( 'Kavadarci' ) ),
			'40' => array( 'name' => _( 'Kičevo' ) ),
			'39' => array( 'name' => _( 'Kisela Voda' ) ),
			'42' => array( 'name' => _( 'Kočani' ) ),
			'41' => array( 'name' => _( 'Konče' ) ),
			'43' => array( 'name' => _( 'Kratovo' ) ),
			'44' => array( 'name' => _( 'Kriva Palanka' ) ),
			'45' => array( 'name' => _( 'Krivogaštani' ) ),
			'46' => array( 'name' => _( 'Kruševo' ) ),
			'47' => array( 'name' => _( 'Kumanovo' ) ),
			'48' => array( 'name' => _( 'Lipkovo' ) ),
			'49' => array( 'name' => _( 'Lozovo' ) ),
			'51' => array( 'name' => _( 'Makedonska Kamenica' ) ),
			'52' => array( 'name' => _( 'Makedonski Brod' ) ),
			'50' => array( 'name' => _( 'Mavrovo-i-Rostuša' ) ),
			'53' => array( 'name' => _( 'Mogila' ) ),
			'54' => array( 'name' => _( 'Negotino' ) ),
			'55' => array( 'name' => _( 'Novaci' ) ),
			'56' => array( 'name' => _( 'Novo Selo' ) ),
			'58' => array( 'name' => _( 'Ohrid' ) ),
			'57' => array( 'name' => _( 'Oslomej' ) ),
			'60' => array( 'name' => _( 'Pehčevo' ) ),
			'59' => array( 'name' => _( 'Petrovec' ) ),
			'61' => array( 'name' => _( 'Plasnica' ) ),
			'62' => array( 'name' => _( 'Prilep' ) ),
			'63' => array( 'name' => _( 'Probištip' ) ),
			'64' => array( 'name' => _( 'Radoviš' ) ),
			'65' => array( 'name' => _( 'Rankovce' ) ),
			'66' => array( 'name' => _( 'Resen' ) ),
			'67' => array( 'name' => _( 'Rosoman' ) ),
			'68' => array( 'name' => _( 'Saraj' ) ),
			'83' => array( 'name' => _( 'Štip' ) ),
			'84' => array( 'name' => _( 'Šuto Orizari' ) ),
			'70' => array( 'name' => _( 'Sopište' ) ),
			'71' => array( 'name' => _( 'Staro Nagoričane' ) ),
			'72' => array( 'name' => _( 'Struga' ) ),
			'73' => array( 'name' => _( 'Strumica' ) ),
			'74' => array( 'name' => _( 'Studeničani' ) ),
			'69' => array( 'name' => _( 'Sveti Nikole' ) ),
			'75' => array( 'name' => _( 'Tearce' ) ),
			'76' => array( 'name' => _( 'Tetovo' ) ),
			'10' => array( 'name' => _( 'Valandovo' ) ),
			'11' => array( 'name' => _( 'Vasilevo' ) ),
			'13' => array( 'name' => _( 'Veles' ) ),
			'12' => array( 'name' => _( 'Vevčani' ) ),
			'14' => array( 'name' => _( 'Vinica' ) ),
			'15' => array( 'name' => _( 'Vraneštica' ) ),
			'16' => array( 'name' => _( 'Vrapčište' ) ),
			'31' => array( 'name' => _( 'Zajas' ) ),
			'32' => array( 'name' => _( 'Zelenikovo' ) ),
			'30' => array( 'name' => _( 'Želino' ) ),
			'33' => array( 'name' => _( 'Zrnovci' ) )
		) );
			break;
		case 'ML':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'BK0' => array( 'name' => _( 'Bamako' ) ),
				7 => array( 'name' => _( 'Gao' ) ),
				1 => array( 'name' => _( 'Kayes' ) ),
				8 => array( 'name' => _( 'Kidal' ) ),
				2 => array( 'name' => _( 'Koulikoro' ) ),
				5 => array( 'name' => _( 'Mopti' ) ),
				4 => array( 'name' => _( 'Ségou' ) ),
				3 => array( 'name' => _( 'Sikasso' ) ),
				6 => array( 'name' => _( 'Tombouctou' ) )
		) );
			break;
		case 'MM':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'07' => array( 'name' => _( 'Ayeyarwady' ) ),
			'02' => array( 'name' => _( 'Bago' ) ),
			'03' => array( 'name' => _( 'Magway' ) ),
			'04' => array( 'name' => _( 'Mandalay' ) ),
			'01' => array( 'name' => _( 'Sagaing' ) ),
			'05' => array( 'name' => _( 'Tanintharyi' ) ),
			'06' => array( 'name' => _( 'Yangon' ) ),
			'14' => array( 'name' => _( 'Chin' ) ),
			'11' => array( 'name' => _( 'Kachin' ) ),
			'12' => array( 'name' => _( 'Kayah' ) ),
			'13' => array( 'name' => _( 'Kayin' ) ),
			'15' => array( 'name' => _( 'Mon' ) ),
			'16' => array( 'name' => _( 'Rakhine' ) ),
			'17' => array( 'name' => _( 'Shan' ) )
		) );
			break;
		case 'MN':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'073' => array( 'name' => _( 'Arhangay' ) ),
			'069' => array( 'name' => _( 'Bayanhongor' ) ),
			'071' => array( 'name' => _( 'Bayan-Ölgiy' ) ),
			'067' => array( 'name' => _( 'Bulgan' ) ),
			'061' => array( 'name' => _( 'Dornod' ) ),
			'063' => array( 'name' => _( 'Dornogovi' ) ),
			'059' => array( 'name' => _( 'Dundgovi' ) ),
			'057' => array( 'name' => _( 'Dzavhan' ) ),
			'065' => array( 'name' => _( 'Govi-Altay' ) ),
			'039' => array( 'name' => _( 'Hentiy' ) ),
			'043' => array( 'name' => _( 'Hovd' ) ),
			'041' => array( 'name' => _( 'Hövsgöl' ) ),
			'053' => array( 'name' => _( 'Ömnögovi' ) ),
			'055' => array( 'name' => _( 'Övörhangay' ) ),
			'049' => array( 'name' => _( 'Selenge' ) ),
			'051' => array( 'name' => _( 'Sühbaatar' ) ),
			'047' => array( 'name' => _( 'Töv' ) ),
			'046' => array( 'name' => _( 'Uvs' ) ),
			'1' => array( 'name' => _( 'Ulanbaatar' ) ),
			'037' => array( 'name' => _( 'Darhan uul' ) ),
			'064' => array( 'name' => _( 'Govi-Sumber' ) ),
			'035' => array( 'name' => _( 'Orhon' ) )
		) );
			break;
		case 'MR':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'NKC' => array( 'name' => _( 'Nouakchott' ) ),
			'07' => array( 'name' => _( 'Adrar' ) ),
			'03' => array( 'name' => _( 'Assaba' ) ),
			'05' => array( 'name' => _( 'Brakna' ) ),
			'08' => array( 'name' => _( 'Dakhlet Nouadhibou' ) ),
			'04' => array( 'name' => _( 'Gorgol' ) ),
			'10' => array( 'name' => _( 'Guidimaka' ) ),
			'01' => array( 'name' => _( 'Hodh ech Chargui' ) ),
			'02' => array( 'name' => _( 'Hodh el Charbi' ) ),
			'12' => array( 'name' => _( 'Inchiri' ) ),
			'09' => array( 'name' => _( 'Tagant' ) ),
			'11' => array( 'name' => _( 'Tiris Zemmour' ) ),
			'06' => array( 'name' => _( 'Trarza' ) )
		) );
			break;
		case 'MT':
			return array(
		'regions_label' => _( 'Local council' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Attard' ) ),
			'02' => array( 'name' => _( 'Balzan' ) ),
			'03' => array( 'name' => _( 'Birgu' ) ),
			'04' => array( 'name' => _( 'Birkirkara' ) ),
			'05' => array( 'name' => _( 'Birżebbuġa' ) ),
			'06' => array( 'name' => _( 'Bormla' ) ),
			'07' => array( 'name' => _( 'Dingli' ) ),
			'08' => array( 'name' => _( 'Fgura' ) ),
			'09' => array( 'name' => _( 'Floriana' ) ),
			'10' => array( 'name' => _( 'Fontana' ) ),
			'11' => array( 'name' => _( 'Gudja' ) ),
			'12' => array( 'name' => _( 'Gżira' ) ),
			'13' => array( 'name' => _( 'Għajnsielem' ) ),
			'14' => array( 'name' => _( 'Għarb' ) ),
			'15' => array( 'name' => _( 'Għargħur' ) ),
			'16' => array( 'name' => _( 'Għasri' ) ),
			'17' => array( 'name' => _( 'Għaxaq' ) ),
			'18' => array( 'name' => _( 'Ħamrun' ) ),
			'19' => array( 'name' => _( 'Iklin' ) ),
			'20' => array( 'name' => _( 'Isla' ) ),
			'21' => array( 'name' => _( 'Kalkara' ) ),
			'22' => array( 'name' => _( 'Kerċem' ) ),
			'23' => array( 'name' => _( 'Kirkop' ) ),
			'24' => array( 'name' => _( 'Lija' ) ),
			'25' => array( 'name' => _( 'Luqa' ) ),
			'26' => array( 'name' => _( 'Marsa' ) ),
			'27' => array( 'name' => _( 'Marsaskala' ) ),
			'28' => array( 'name' => _( 'Marsaxlokk' ) ),
			'29' => array( 'name' => _( 'Mdina' ) ),
			'30' => array( 'name' => _( 'Mellieħa' ) ),
			'31' => array( 'name' => _( 'Mġarr' ) ),
			'32' => array( 'name' => _( 'Mosta' ) ),
			'33' => array( 'name' => _( 'Mqabba' ) ),
			'34' => array( 'name' => _( 'Msida' ) ),
			'35' => array( 'name' => _( 'Mtarfa' ) ),
			'36' => array( 'name' => _( 'Munxar' ) ),
			'37' => array( 'name' => _( 'Nadur' ) ),
			'38' => array( 'name' => _( 'Naxxar' ) ),
			'39' => array( 'name' => _( 'Paola' ) ),
			'40' => array( 'name' => _( 'Pembroke' ) ),
			'41' => array( 'name' => _( 'Pietà' ) ),
			'42' => array( 'name' => _( 'Qala' ) ),
			'43' => array( 'name' => _( 'Qormi' ) ),
			'44' => array( 'name' => _( 'Qrendi' ) ),
			'45' => array( 'name' => _( 'Rabat Għawdex' ) ),
			'46' => array( 'name' => _( 'Rabat Malta' ) ),
			'47' => array( 'name' => _( 'Safi' ) ),
			'48' => array( 'name' => _( 'San Ġiljan' ) ),
			'49' => array( 'name' => _( 'San Ġwann' ) ),
			'50' => array( 'name' => _( 'San Lawrenz' ) ),
			'51' => array( 'name' => _( 'San Pawl il-Baħar' ) ),
			'52' => array( 'name' => _( 'Sannat' ) ),
			'53' => array( 'name' => _( 'Santa Luċija' ) ),
			'54' => array( 'name' => _( 'Santa Venera' ) ),
			'55' => array( 'name' => _( 'Siġġiewi' ) ),
			'56' => array( 'name' => _( 'Sliema' ) ),
			'57' => array( 'name' => _( 'Swieqi' ) ),
			'58' => array( 'name' => _( 'Ta’ Xbiex' ) ),
			'59' => array( 'name' => _( 'Tarxien' ) ),
			'60' => array( 'name' => _( 'Valletta' ) ),
			'61' => array( 'name' => _( 'Xagħra' ) ),
			'62' => array( 'name' => _( 'Xewkija' ) ),
			'63' => array( 'name' => _( 'Xgħajra' ) ),
			'64' => array( 'name' => _( 'Żabbar' ) ),
			'65' => array( 'name' => _( 'Żebbuġ Għawdex' ) ),
			'66' => array( 'name' => _( 'Żebbuġ Malta' ) ),
			'67' => array( 'name' => _( 'Żejtun' ) ),
			'68' => array( 'name' => _( 'Żurrieq' ) )
		) );
			break;
		case 'MU':
			return array(
		'regions_label' => _( 'City' ),
		'subregions_label' => _( 'Dependency' ),
		'regions' => array(
			'BR' => array( 'name' => _( 'Beau Bassin-Rose Hill' ) ),
			'CU' => array( 'name' => _( 'Curepipe' ) ),
			'PU' => array( 'name' => _( 'Port Louis' ) ),
			'QB' => array( 'name' => _( 'Quatre Bornes' ) ),
			'VP' => array( 'name' => _( 'Vacoas-Phoenix' ) ),
			'AG' => array( 'name' => _( 'Agalega Islands' ) ),
			'CC' => array( 'name' => _( 'Cargados Carajos Shoals' ) ),
			'RO' => array( 'name' => _( 'Rodrigues Island' ) ),
			'BL' => array( 'name' => _( 'Black River' ) ),
			'FL' => array( 'name' => _( 'Flacq' ) ),
			'GP' => array( 'name' => _( 'Grand Port' ) ),
			'MO' => array( 'name' => _( 'Moka' ) ),
			'PA' => array( 'name' => _( 'Pamplemousses' ) ),
			'PW' => array( 'name' => _( 'Plaines Wilhems' ) ),
			'PL' => array( 'name' => _( 'Port Louis' ) ),
			'RP' => array( 'name' => _( 'Rivière du Rempart' ) ),
			'SA' => array( 'name' => _( 'Savanne' ) )
		) );
			break;
		case 'MV':
			return array(
		'regions_label' => _( 'City' ),
		'subregions_label' => _( 'Atoll' ),
		'regions' => array(
			'MLE' => array( 'name' => _( 'Male' ) ),
			'02' => array( 'name' => _( 'Alif' ) ),
			'20' => array( 'name' => _( 'Baa' ) ),
			'17' => array( 'name' => _( 'Dhaalu' ) ),
			'14' => array( 'name' => _( 'Faafu' ) ),
			'27' => array( 'name' => _( 'Gaafu Aliff' ) ),
			'28' => array( 'name' => _( 'Gaafu Daalu' ) ),
			'29' => array( 'name' => _( 'Gnaviyani' ) ),
			'07' => array( 'name' => _( 'Haa Alif' ) ),
			'23' => array( 'name' => _( 'Haa Dhaalu' ) ),
			'26' => array( 'name' => _( 'Kaafu' ) ),
			'05' => array( 'name' => _( 'Laamu' ) ),
			'03' => array( 'name' => _( 'Lhaviyani' ) ),
			'12' => array( 'name' => _( 'Meemu' ) ),
			'25' => array( 'name' => _( 'Noonu' ) ),
			'13' => array( 'name' => _( 'Raa' ) ),
			'01' => array( 'name' => _( 'Seenu' ) ),
			'24' => array( 'name' => _( 'Shaviyani' ) ),
			'08' => array( 'name' => _( 'Thaa' ) ),
			'04' => array( 'name' => _( 'Vaavu' ) )
		) );
			break;
		case 'MW':
			return array(
		'regions_label' => _( 'Region' ),
		'subregions_label' => _( 'District' ),
		'regions' => array(
			'C' => array(
				'name' => _( 'Central Region' ),
				'subregions' => array(
					'DE' => array( 'name' => _( 'Dedza' ) ),
					'DO' => array( 'name' => _( 'Dowa' ) ),
					'KS' => array( 'name' => _( 'Kasungu' ) ),
					'LI' => array( 'name' => _( 'Lilongwe' ) ),
					'MC' => array( 'name' => _( 'Mchinji' ) ),
					'NK' => array( 'name' => _( 'Nkhotakota' ) ),
					'NU' => array( 'name' => _( 'Ntcheu' ) ),
					'NI' => array( 'name' => _( 'Ntchisi' ) ),
					'SA' => array( 'name' => _( 'Salima' ) )
			) ),
			'N' => array(
				'name' => _( 'Northern Region' ),
				'subregions' => array(
					'CT' => array( 'name' => _( 'Chitipa' ) ),
					'KR' => array( 'name' => _( 'Karonga' ) ),
					'LK' => array( 'name' => _( 'Likoma' ) ),
					'MZ' => array( 'name' => _( 'Mzimba' ) ),
					'NE' => array( 'name' => _( 'Neno' ) ),
					'NB' => array( 'name' => _( 'Nkhata Bay' ) ),
					'RU' => array( 'name' => _( 'Rumphi' )
				) ),
			'S' => array(
				'name' => _( 'Southern Region' ),
				'subregions' => array(
					'BA' => array( 'name' => _( 'Balaka' ) ),
					'BL' => array( 'name' => _( 'Blantyre' ) ),
					'CK' => array( 'name' => _( 'Chikwawa' ) ),
					'CR' => array( 'name' => _( 'Chiradzulu' ) ),
					'MH' => array( 'name' => _( 'Machinga' ) ),
					'MG' => array( 'name' => _( 'Mangochi' ) ),
					'MU' => array( 'name' => _( 'Mulanje' ) ),
					'MW' => array( 'name' => _( 'Mwanza' ) ),
					'NS' => array( 'name' => _( 'Nsanje' ) ),
					'PH' => array( 'name' => _( 'Phalombe' ) ),
					'TH' => array( 'name' => _( 'Thyolo' ) ),
					'ZO' => array( 'name' => _( 'Zomba' ) )
				) ) )
		) );
			break;
		case 'MX':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'DIF' => array( 'name' => _( 'Distrito Federal' ) ),
			'AGU' => array( 'name' => _( 'Aguascalientes' ) ),
			'BCN' => array( 'name' => _( 'Baja California' ) ),
			'BCS' => array( 'name' => _( 'Baja California Sur' ) ),
			'CAM' => array( 'name' => _( 'Campeche' ) ),
			'COA' => array( 'name' => _( 'Coahuila' ) ),
			'COL' => array( 'name' => _( 'Colima' ) ),
			'CHP' => array( 'name' => _( 'Chiapas' ) ),
			'CHH' => array( 'name' => _( 'Chihuahua' ) ),
			'DUR' => array( 'name' => _( 'Durango' ) ),
			'GUA' => array( 'name' => _( 'Guanajuato' ) ),
			'GRO' => array( 'name' => _( 'Guerrero' ) ),
			'HID' => array( 'name' => _( 'Hidalgo' ) ),
			'JAL' => array( 'name' => _( 'Jalisco' ) ),
			'MEX' => array( 'name' => _( 'México' ) ),
			'MIC' => array( 'name' => _( 'Michoacán' ) ),
			'MOR' => array( 'name' => _( 'Morelos' ) ),
			'NAY' => array( 'name' => _( 'Nayarit' ) ),
			'NLE' => array( 'name' => _( 'Nuevo León' ) ),
			'OAX' => array( 'name' => _( 'Oaxaca' ) ),
			'PUE' => array( 'name' => _( 'Puebla' ) ),
			'QUE' => array( 'name' => _( 'Querétaro' ) ),
			'ROO' => array( 'name' => _( 'Quintana Roo' ) ),
			'SLP' => array( 'name' => _( 'San Luis Potosí' ) ),
			'SIN' => array( 'name' => _( 'Sinaloa' ) ),
			'SON' => array( 'name' => _( 'Sonora' ) ),
			'TAB' => array( 'name' => _( 'Tabasco' ) ),
			'TAM' => array( 'name' => _( 'Tamaulipas' ) ),
			'TLA' => array( 'name' => _( 'Tlaxcala' ) ),
			'VER' => array( 'name' => _( 'Veracruz' ) ),
			'YUC' => array( 'name' => _( 'Yucatán' ) ),
			'ZAC' => array( 'name' => _( 'Zacatecas' ) )
		) );
			break;
		case 'MY':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'14' => array( 'name' => _( 'Wilayah Persekutuan Kuala Lumpur' ) ),
			'15' => array( 'name' => _( 'Wilayah Persekutuan Labuan' ) ),
			'16' => array( 'name' => _( 'Wilayah Persekutuan Putrajaya' ) ),
			'01' => array( 'name' => _( 'Johor' ) ),
			'02' => array( 'name' => _( 'Kedah' ) ),
			'03' => array( 'name' => _( 'Kelantan' ) ),
			'04' => array( 'name' => _( 'Melaka' ) ),
			'05' => array( 'name' => _( 'Negeri Sembilan' ) ),
			'06' => array( 'name' => _( 'Pahang' ) ),
			'08' => array( 'name' => _( 'Perak' ) ),
			'09' => array( 'name' => _( 'Perlis' ) ),
			'07' => array( 'name' => _( 'Pulau Pinang' ) ),
			'12' => array( 'name' => _( 'Sabah' ) ),
			'13' => array( 'name' => _( 'Sarawak' ) ),
			'10' => array( 'name' => _( 'Selangor' ) ),
			'11' => array( 'name' => _( 'Terengganu' ) )
		) );
			break;
		case 'MZ':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'MPM' => array( 'name' => _( 'Maputo (city)' ) ),
			'P' => array( 'name' => _( 'Cabo Delgado' ) ),
			'G' => array( 'name' => _( 'Gaza' ) ),
			'I' => array( 'name' => _( 'Inhambane' ) ),
			'B' => array( 'name' => _( 'Manica' ) ),
			'L' => array( 'name' => _( 'Maputo' ) ),
			'N' => array( 'name' => _( 'Numpula' ) ),
			'A' => array( 'name' => _( 'Niassa' ) ),
			'S' => array( 'name' => _( 'Sofala' ) ),
			'T' => array( 'name' => _( 'Tete' ) ),
			'Q' => array( 'name' => _( 'Zambezia' ) )
		) );
			break;
		case 'NA':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'CA' => array( 'name' => _( 'Caprivi' ) ),
			'ER' => array( 'name' => _( 'Erongo' ) ),
			'HA' => array( 'name' => _( 'Hardap' ) ),
			'KA' => array( 'name' => _( 'Karas' ) ),
			'KH' => array( 'name' => _( 'Khomas' ) ),
			'KU' => array( 'name' => _( 'Kunene' ) ),
			'OW' => array( 'name' => _( 'Ohangwena' ) ),
			'OK' => array( 'name' => _( 'Okavango' ) ),
			'OH' => array( 'name' => _( 'Omaheke' ) ),
			'OS' => array( 'name' => _( 'Omusati' ) ),
			'ON' => array( 'name' => _( 'Oshana' ) ),
			'OT' => array( 'name' => _( 'Oshikoto' ) ),
			'OD' => array( 'name' => _( 'Otjozondjupa' ) )
		) );
			break;
		case 'NE':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'8' => array( 'name' => _( 'Niamey' ) ),
			'1' => array( 'name' => _( 'Agadez' ) ),
			'2' => array( 'name' => _( 'Diffa' ) ),
			'3' => array( 'name' => _( 'Dosso' ) ),
			'4' => array( 'name' => _( 'Maradi' ) ),
			'5' => array( 'name' => _( 'Tahoua' ) ),
			'6' => array( 'name' => _( 'Tillabéri' ) ),
			'7' => array( 'name' => _( 'Zinder' ) )
		) );
			break;
		case 'NG':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'FC' => array( 'name' => _( 'Abuja Capital Territory' ) ),
			'AB' => array( 'name' => _( 'Abia' ) ),
			'AD' => array( 'name' => _( 'Adamawa' ) ),
			'AK' => array( 'name' => _( 'Akwa Ibom' ) ),
			'AN' => array( 'name' => _( 'Anambra' ) ),
			'BA' => array( 'name' => _( 'Bauchi' ) ),
			'BY' => array( 'name' => _( 'Bayelsa' ) ),
			'BE' => array( 'name' => _( 'Benue' ) ),
			'BO' => array( 'name' => _( 'Borno' ) ),
			'CR' => array( 'name' => _( 'Cross River' ) ),
			'DE' => array( 'name' => _( 'Delta' ) ),
			'EB' => array( 'name' => _( 'Ebonyi' ) ),
			'ED' => array( 'name' => _( 'Edo' ) ),
			'EK' => array( 'name' => _( 'Ekiti' ) ),
			'EN' => array( 'name' => _( 'Enugu' ) ),
			'GO' => array( 'name' => _( 'Gombe' ) ),
			'IM' => array( 'name' => _( 'Imo' ) ),
			'JI' => array( 'name' => _( 'Jigawa' ) ),
			'KD' => array( 'name' => _( 'Kaduna' ) ),
			'KN' => array( 'name' => _( 'Kano' ) ),
			'KT' => array( 'name' => _( 'Katsina' ) ),
			'KE' => array( 'name' => _( 'Kebbi' ) ),
			'KO' => array( 'name' => _( 'Kogi' ) ),
			'KW' => array( 'name' => _( 'Kwara' ) ),
			'LA' => array( 'name' => _( 'Lagos' ) ),
			'NA' => array( 'name' => _( 'Nassarawa' ) ),
			'NI' => array( 'name' => _( 'Niger' ) ),
			'OG' => array( 'name' => _( 'Ogun' ) ),
			'ON' => array( 'name' => _( 'Ondo' ) ),
			'OS' => array( 'name' => _( 'Osun' ) ),
			'OY' => array( 'name' => _( 'Oyo' ) ),
			'PL' => array( 'name' => _( 'Plateau' ) ),
			'RI' => array( 'name' => _( 'Rivers' ) ),
			'SO' => array( 'name' => _( 'Sokoto' ) ),
			'TA' => array( 'name' => _( 'Taraba' ) ),
			'YO' => array( 'name' => _( 'Yobe' ) ),
			'ZA' => array( 'name' => _( 'Zamfara' ) )
		) );
			break;
		case 'NI':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'BO' => array( 'name' => _( 'Boaco' ) ),
			'CA' => array( 'name' => _( 'Carazo' ) ),
			'CI' => array( 'name' => _( 'Chinandega' ) ),
			'CO' => array( 'name' => _( 'Chontales' ) ),
			'ES' => array( 'name' => _( 'Estelí' ) ),
			'GR' => array( 'name' => _( 'Granada' ) ),
			'JI' => array( 'name' => _( 'Jinotega' ) ),
			'LE' => array( 'name' => _( 'León' ) ),
			'MD' => array( 'name' => _( 'Madriz' ) ),
			'MN' => array( 'name' => _( 'Managua' ) ),
			'MS' => array( 'name' => _( 'Masaya' ) ),
			'MT' => array( 'name' => _( 'Matagalpa' ) ),
			'NS' => array( 'name' => _( 'Nueva Segovia' ) ),
			'SJ' => array( 'name' => _( 'Río San Juan' ) ),
			'RI' => array( 'name' => _( 'Rivas' ) ),
			'AN' => array( 'name' => _( 'Atlántico Norte' ) ),
			'AS' => array( 'name' => _( 'Atlántico Sur' ) )
		) );
			break;
		case 'NL':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'DR' => array( 'name' => _( 'Drenthe' ) ),
			'FL' => array( 'name' => _( 'Flevoland' ) ),
			'FR' => array( 'name' => _( 'Friesland' ) ),
			'GE' => array( 'name' => _( 'Gelderland' ) ),
			'GR' => array( 'name' => _( 'Groningen' ) ),
			'LI' => array( 'name' => _( 'Limburg' ) ),
			'NB' => array( 'name' => _( 'Noord-Brabant' ) ),
			'NH' => array( 'name' => _( 'Noord-Holland' ) ),
			'OV' => array( 'name' => _( 'Overijssel' ) ),
			'UT' => array( 'name' => _( 'Utrecht' ) ),
			'ZE' => array( 'name' => _( 'Zeeland' ) ),
			'ZH' => array( 'name' => _( 'Zuid-Holland' ) )
		) );
			break;
		case 'NO':
			return array(
		'regions_label' => _( 'County' ),
		'regions' => array(
			'02' => array( 'name' => _( 'Akershus' ) ),
			'09' => array( 'name' => _( 'Aust-Agder' ) ),
			'06' => array( 'name' => _( 'Buskerud' ) ),
			'20' => array( 'name' => _( 'Finnmark' ) ),
			'04' => array( 'name' => _( 'Hedmark' ) ),
			'12' => array( 'name' => _( 'Hordaland' ) ),
			'15' => array( 'name' => _( 'Møre og Romsdal' ) ),
			'18' => array( 'name' => _( 'Nordland' ) ),
			'17' => array( 'name' => _( 'Nord-Trøndelag' ) ),
			'05' => array( 'name' => _( 'Oppland' ) ),
			'03' => array( 'name' => _( 'Oslo' ) ),
			'11' => array( 'name' => _( 'Rogaland' ) ),
			'14' => array( 'name' => _( 'Sogn og Fjordane' ) ),
			'16' => array( 'name' => _( 'Sør-Trøndelag' ) ),
			'08' => array( 'name' => _( 'Telemark' ) ),
			'19' => array( 'name' => _( 'Troms' ) ),
			'10' => array( 'name' => _( 'Vest-Agder' ) ),
			'07' => array( 'name' => _( 'Vestfold' ) ),
			'01' => array( 'name' => _( 'Østfold' ) ),
			'22' => array( 'name' => _( 'Jan Mayen' ) ),
			'21' => array( 'name' => _( 'Svalbard' ) )
		) );
			break;
		case 'NP':
			return array(
		'regions_label' => _( 'Development region' ),
		'subregions_label' => _( 'Zone' ),
		'regions' => array(
			'1' => array(
				'name' => _( 'Madhyamanchal' ),
				'subregions' => array(
					'BA' => array( 'name' => _( 'Bagmati' ) ),
					'JA' => array( 'name' => _( 'Janakpur' ) ),
					'NA' => array( 'name' => _( 'Narayani' ) )
			) ),
			'2' => array(
				'name' => _( 'Madhya Pashchimanchal' ),
				'subregions' => array(
					'BH' => array( 'name' => _( 'Bheri' ) ),
					'KA' => array( 'name' => _( 'Karnali' ) ),
					'RA' => array( 'name' => _( 'Rapti' ) )
			) ),
			'3' => array(
				'name' => _( 'Pashchimanchal' ),
				'subregions' => array(
					'DH' => array( 'name' => _( 'Dhawalagiri' ) ),
					'GA' => array( 'name' => _( 'Gandaki' ) ),
					'LU' => array( 'name' => _( 'Lumbini' ) )
			) ),
			'4' => array(
				'name' => _( 'Purwanchal' ),
				'subregions' => array(
					'KO' => array( 'name' => _( 'Kosi' ) ),
					'ME' => array( 'name' => _( 'Mechi' ) ),
					'SA' => array( 'name' => _( 'Sagarmatha' ) )
			) ),
			'5' => array(
				'name' => _( 'Sudur Pashchimanchal' ),
				'subregions' => array(
					'MA' => array( 'name' => _( 'Mahakali' ) ),
					'SE' => array( 'name' => _( 'Seti' ) )
			) ),
		) );
			break;
		case 'NR':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Aiwo' ) ),
			'02' => array( 'name' => _( 'Anabar' ) ),
			'03' => array( 'name' => _( 'Anetan' ) ),
			'04' => array( 'name' => _( 'Anibare' ) ),
			'05' => array( 'name' => _( 'Baiti' ) ),
			'06' => array( 'name' => _( 'Boe' ) ),
			'07' => array( 'name' => _( 'Buada' ) ),
			'08' => array( 'name' => _( 'Denigomodu' ) ),
			'09' => array( 'name' => _( 'Ewa' ) ),
			'10' => array( 'name' => _( 'Ijuw' ) ),
			'11' => array( 'name' => _( 'Meneng' ) ),
			'12' => array( 'name' => _( 'Nibok' ) ),
			'13' => array( 'name' => _( 'Uaboe' ) ),
			'14' => array( 'name' => _( 'Yaren' ) )
		) );
			break;
		case 'NZ':
			return array(
		'regions_label' => _( 'Island' ),
		'subregions_label' => _( 'Regional council' ),
		'regions' => array(
			'N' => array(
				'name' => _( 'North Island' ),
				'subregions' => array(
					'AUK' => array( 'name' => _( 'Auckland' ) ),
					'BOP' => array( 'name' => _( 'Bay of Plenty' ) ),
					'HKB' => array( 'name' => _( 'Hawke\'s Bay' ) ),
					'MWT' => array( 'name' => _( 'Manawatu-Wanganui' ) ),
					'NTL' => array( 'name' => _( 'Northland' ) ),
					'TKI' => array( 'name' => _( 'Taranaki' ) ),
					'WKO' => array( 'name' => _( 'Waikato' ) ),
					'WGN' => array( 'name' => _( 'Wellington' ) ),
					'GIS' => array( 'name' => _( 'Gisborne District' ) )
			) ),
			'S' => array(
				'name' => _( 'South Island' ),
				'subregions' => array(
					'CAN' => array( 'name' => _( 'Canterbury' ) ),
					'OTA' => array( 'name' => _( 'Otago' ) ),
					'STL' => array( 'name' => _( 'Southland' ) ),
					'WTC' => array( 'name' => _( 'West Coast' ) ),
					'MBH' => array( 'name' => _( 'Marlborough District' ) ),
					'NSN' => array( 'name' => _( 'Nelson City' ) ),
					'TAS' => array( 'name' => _( 'Tasman District' ) )
			) ),
			'CIT' => array( 'name' => _( 'Chatham Islands Territory' ) )
		) );
			break;
		case 'OM':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'DA' => array( 'name' => _( 'Ad Dākhilīya' ) ),
			'BA' => array( 'name' => _( 'Al Bāţinah' ) ),
			'WU' => array( 'name' => _( 'Al Wusţá' ) ),
			'SH' => array( 'name' => _( 'Ash Sharqīyah' ) ),
			'ZA' => array( 'name' => _( 'Az̧ Z̧āhirah' ) ),
			'BU' => array( 'name' => _( 'Al Buraymī' ) ),
			'MA' => array( 'name' => _( 'Masqaţ' ) ),
			'MU' => array( 'name' => _( 'Musandam' ) ),
			'ZU' => array( 'name' => _( 'Z̧ufār' ) )
		) );
			break;
		case 'PA':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'1' => array( 'name' => _( 'Bocas del Toro' ) ),
			'4' => array( 'name' => _( 'Chiriquí' ) ),
			'2' => array( 'name' => _( 'Coclé' ) ),
			'3' => array( 'name' => _( 'Colón' ) ),
			'5' => array( 'name' => _( 'Darién' ) ),
			'6' => array( 'name' => _( 'Herrera' ) ),
			'7' => array( 'name' => _( 'Los Santos' ) ),
			'8' => array( 'name' => _( 'Panamá' ) ),
			'9' => array( 'name' => _( 'Veraguas' ) ),
			'EM' => array( 'name' => _( 'Emberá' ) ),
			'KY' => array( 'name' => _( 'Kuna Yala' ) ),
			'NB' => array( 'name' => _( 'Ngöbe-Buglé' ) )
		) );
			break;
		case 'PE':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'CAL' => array( 'name' => _( 'El Callao' ) ),
			'LMA' => array( 'name' => _( 'Municipalidad Metropolitana de Lima' ) ),
			'AMA' => array( 'name' => _( 'Amazonas' ) ),
			'ANC' => array( 'name' => _( 'Ancash' ) ),
			'APU' => array( 'name' => _( 'Apurímac' ) ),
			'ARE' => array( 'name' => _( 'Arequipa' ) ),
			'AYA' => array( 'name' => _( 'Ayacucho' ) ),
			'CAJ' => array( 'name' => _( 'Cajamarca' ) ),
			'CUS' => array( 'name' => _( 'Cusco [Cuzco]' ) ),
			'HUV' => array( 'name' => _( 'Huancavelica' ) ),
			'HUC' => array( 'name' => _( 'Huánuco' ) ),
			'ICA' => array( 'name' => _( 'Ica' ) ),
			'JUN' => array( 'name' => _( 'Junín' ) ),
			'LAL' => array( 'name' => _( 'La Libertad' ) ),
			'LAM' => array( 'name' => _( 'Lambayeque' ) ),
			'LIM' => array( 'name' => _( 'Lima' ) ),
			'LOR' => array( 'name' => _( 'Loreto' ) ),
			'MDD' => array( 'name' => _( 'Madre de Dios' ) ),
			'MOQ' => array( 'name' => _( 'Moquegua' ) ),
			'PAS' => array( 'name' => _( 'Pasco' ) ),
			'PIU' => array( 'name' => _( 'Piura' ) ),
			'PUN' => array( 'name' => _( 'Puno' ) ),
			'SAM' => array( 'name' => _( 'San Martín' ) ),
			'TAC' => array( 'name' => _( 'Tacna' ) ),
			'TUM' => array( 'name' => _( 'Tumbes' ) ),
			'UCA' => array( 'name' => _( 'Ucayali' ) )
		) );
			break;
		case 'PG':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'NCD' => array( 'name' => _( 'National Capital District (Port Moresby)' ) ),
			'CPM' => array( 'name' => _( 'Central' ) ),
			'CPK' => array( 'name' => _( 'Chimbu' ) ),
			'EHG' => array( 'name' => _( 'Eastern Highlands' ) ),
			'EBR' => array( 'name' => _( 'East New Britain' ) ),
			'ESW' => array( 'name' => _( 'East Sepik' ) ),
			'EPW' => array( 'name' => _( 'Enga' ) ),
			'GPK' => array( 'name' => _( 'Gulf' ) ),
			'MPM' => array( 'name' => _( 'Madang' ) ),
			'MRL' => array( 'name' => _( 'Manus' ) ),
			'MBA' => array( 'name' => _( 'Milne Bay' ) ),
			'MPL' => array( 'name' => _( 'Morobe' ) ),
			'NIK' => array( 'name' => _( 'New Ireland' ) ),
			'NPP' => array( 'name' => _( 'Northern' ) ),
			'NSA' => array( 'name' => _( 'North Solomons' ) ),
			'SAN' => array( 'name' => _( 'Sandaun' ) ),
			'SHM' => array( 'name' => _( 'Southern Highlands' ) ),
			'WPD' => array( 'name' => _( 'Western' ) ),
			'WHM' => array( 'name' => _( 'Western Highlands' ) ),
			'WBK' => array( 'name' => _( 'West New Britain' ) )
		) );
			break;
		case 'PH':
			return array(
		'regions_label' => _( 'Region' ),
		'subregions_label' => _( 'Province' ),
		'regions' => array(
			'14' => array(
				'name' => _( 'Autonomous Region in Muslim Mindanao (ARMM)' ),
				'subregions' => array(
					'LAS' => array( 'name' => _( 'Lanao del Sur' ) ),
					'MAG' => array( 'name' => _( 'Maguindanao' ) ),
					'SLU' => array( 'name' => _( 'Sulu' ) ),
					'TAW' => array( 'name' => _( 'Tawi-Tawi' ) )
			) ),
			'05' => array(
				'name' => _( 'Bicol (Region V)' ),
				'subregions' => array(
					'ALB' => array( 'name' => _( 'Albay' ) ),
					'CAN' => array( 'name' => _( 'Camarines Norte' ) ),
					'CAS' => array( 'name' => _( 'Camarines Sur' ) ),
					'CAT' => array( 'name' => _( 'Catanduanes' ) ),
					'MAS' => array( 'name' => _( 'Masbate' ) ),
					'SOR' => array( 'name' => _( 'Sorsogon' ) ),
				) ),
			'02' => array(
				'name' => _( 'Cagayan Valley (Region II)' ),
				'subregions' => array(
					'BTN' => array( 'name' => _( 'Batanes' ) ),
					'CAG' => array( 'name' => _( 'Cagayan' ) ),
					'ISA' => array( 'name' => _( 'Isabela' ) ),
					'NUV' => array( 'name' => _( 'Nueva Vizcaya' ) ),
					'QUI' => array( 'name' => _( 'Quirino' ) )
			) ),
			'40' => array(
				'name' => _( 'CALABARZON (Region IV-A)' ),
				'subregions' => array(
					'BTG' => array( 'name' => _( 'Batangas' ) ),
					'CAV' => array( 'name' => _( 'Cavite' ) ),
					'LAG' => array( 'name' => _( 'Laguna' ) ),
					'QUE' => array( 'name' => _( 'Quezon' ) ),
					'RIZ' => array( 'name' => _( 'Rizal' ) )
			) ),
			'13' => array(
				'name' => _( 'Caraga (Region XIII)' ),
				'subregions' => array(
					'AGN' => array( 'name' => _( 'Agusan del Norte' ) ),
					'AGS' => array( 'name' => _( 'Agusan del Sur' ) ),
					'DIN' => array( 'name' => _( 'Dinagat Islands' ) ),
					'SUN' => array( 'name' => _( 'Surigao del Norte' ) ),
					'SUR' => array( 'name' => _( 'Surigao del Sur' ) )
			) ),
			'03' => array(
				'name' => _( 'Central Luzon (Region III)' ),
				'subregions' => array(
					'AUR' => array( 'name' => _( 'Aurora' ) ),
					'BAN' => array( 'name' => _( 'Batasn' ) ),
					'BUL' => array( 'name' => _( 'Bulacan' ) ),
					'NUE' => array( 'name' => _( 'Nueva Ecija' ) ),
					'PAM' => array( 'name' => _( 'Pampanga' ) ),
					'TAR' => array( 'name' => _( 'Tarlac' ) ),
					'ZMB' => array( 'name' => _( 'Zambales' ) )
			) ),
			'07' => array(
				'name' => _( 'Central Visayas (Region VII)' ),
				'subregions' => array(
					'BOH' => array( 'name' => _( 'Bohol' ) ),
					'CEB' => array( 'name' => _( 'Cebu' ) ),
					'NER' => array( 'name' => _( 'Negros Oriental' ) ),
					'SIG' => array( 'name' => _( 'Siquijor' ) )
			) ),
			'15' => array(
				'name' => _( 'Cordillera Administrative Region (CAR)' ),
				'subregions' => array(
					'ABR' => array( 'name' => _( 'Abra' ) ),
					'APA' => array( 'name' => _( 'Apayao' ) ),
					'BEN' => array( 'name' => _( 'Benguet' ) ),
					'IFU' => array( 'name' => _( 'Ifugao' ) ),
					'KAL' => array( 'name' => _( 'Kalinga-Apayso' ) ),
					'MOU' => array( 'name' => _( 'Mountain Province' ) )
			) ),
			'08' => array(
				'name' => _( 'Eastern Visayas (Region VIII)' ),
				'subregions' => array(
					'BIL' => array( 'name' => _( 'Biliran' ) ),
					'EAS' => array( 'name' => _( 'Eastern Samar' ) ),
					'LEY' => array( 'name' => _( 'Leyte' ) ),
					'NSA' => array( 'name' => _( 'Northern Samar' ) ),
					'SLE' => array( 'name' => _( 'Southern Leyte' ) ),
					'WSA' => array( 'name' => _( 'Western Samar' ) )
			) ),
			'01' => array(
				'name' => _( 'Ilocos (Region I)' ),
				'subregions' => array(
					'ILN' => array( 'name' => _( 'Ilocos Norte' ) ),
					'ILS' => array( 'name' => _( 'Ilocos Sur' ) ),
					'LUN' => array( 'name' => _( 'La Union' ) ),
					'PAN' => array( 'name' => _( 'Pangasinan' ) ),
			) ),
			'41' => array(
				'name' => _( 'MIMAROPA (Region IV-B)' ),
				'subregions' => array(
					'MAD' => array( 'name' => _( 'Marinduque' ) ),
					'MDC' => array( 'name' => _( 'Mindoro Occidental' ) ),
					'MDR' => array( 'name' => _( 'Mindoro Oriental' ) ),
					'PLW' => array( 'name' => _( 'Palawan' ) ),
					'ROM' => array( 'name' => _( 'Romblon' ) )
			) ),
			'00' => array( 'name' => _( 'National Capital Region' ) ),
			'10' => array(
				'name' => _( 'Northern Mindanao (Region X)' ),
				'subregions' => array(
					'BUK' => array( 'name' => _( 'Bukidnon' ) ),
					'CAM' => array( 'name' => _( 'Camiguin' ) ),
					'MSC' => array( 'name' => _( 'Misamis Occidental' ) ),
					'MSR' => array( 'name' => _( 'Misamis Oriental' ) )
			) ),
			'12' => array(
				'name' => _( 'Soccsksargen (Region XII)' ),
				'subregions' => array(
					'LAN' => array( 'name' => _( 'Lanao del Norte' ) ),
					'NCO' => array( 'name' => _( 'North Cotabato' ) ),
					'SUK' => array( 'name' => _( 'Sultan Kudarat' ) )
			) ),
			'06' => array(
				'name' => _( 'Western Visayas (Region VI)' ),
				'subregions' => array(
					'AKL' => array( 'name' => _( 'Aklan' ) ),
					'ANT' => array( 'name' => _( 'Antique' ) ),
					'CAP' => array( 'name' => _( 'Capiz' ) ),
					'GUI' => array( 'name' => _( 'Guimaras' ) ),
					'ILI' => array( 'name' => _( 'Iloilo' ) ),
					'NEC' => array( 'name' => _( 'Negroe Occidental' ) )
			) ),
			'09' => array(
				'name' => _( 'Zamboanga Peninsula (Region IX)' ),
				'subregions' => array(
					'BAS' => array( 'name' => _( 'Basilan' ) ),
					'ZAN' => array( 'name' => _( 'Zamboanga del Norte' ) ),
					'ZAS' => array( 'name' => _( 'Zamboanga del Sur' ) ),
					'ZSI' => array( 'name' => _( 'Zamboanga Sibugay' ) )
			) ),
			'11' => array(
				'name' => _( 'Davao' ),
				'subregions' => array(
					'COM' => array( 'name' => _( 'Compostela Valley' ) ),
					'DAV' => array( 'name' => _( 'Davao del Norte' ) ),
					'DAS' => array( 'name' => _( 'Davao del Sur' ) ),
					'DAO' => array( 'name' => _( 'Davao Oriental' ) ),
					'SAR' => array( 'name' => _( 'Sarangani' ) ),
					'SCO' => array( 'name' => _( 'South Cotabato' ) )
				) ),
		) );
			break;
		case 'PK':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'IS' => array( 'name' => _( 'Islamabad' ) ),
			'BA' => array( 'name' => _( 'Balochistan' ) ),
			'NW' => array( 'name' => _( 'North-West Frontier' ) ),
			'PB' => array( 'name' => _( 'Punjab' ) ),
			'SD' => array( 'name' => _( 'Sindh' ) ),
			'TA' => array( 'name' => _( 'Federally Administered Tribal Areas' ) ),
			'JK' => array( 'name' => _( 'Azad Kashmir' ) ),
			'NA' => array( 'name' => _( 'Northern Areas' ) )
		) );
			break;
		case 'PL':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'DS' => array( 'name' => _( 'Dolnośląskie' ) ),
			'KP' => array( 'name' => _( 'Kujawsko-pomorskie' ) ),
			'LU' => array( 'name' => _( 'Lubelskie' ) ),
			'LB' => array( 'name' => _( 'Lubuskie' ) ),
			'LD' => array( 'name' => _( 'Łódzkie' ) ),
			'MA' => array( 'name' => _( 'Małopolskie' ) ),
			'MZ' => array( 'name' => _( 'Mazowieckie' ) ),
			'OP' => array( 'name' => _( 'Opolskie' ) ),
			'PK' => array( 'name' => _( 'Podkarpackie' ) ),
			'PD' => array( 'name' => _( 'Podlaskie' ) ),
			'PM' => array( 'name' => _( 'Pomorskie' ) ),
			'SL' => array( 'name' => _( 'Śląskie' ) ),
			'SK' => array( 'name' => _( 'Świętokrzyskie' ) ),
			'WN' => array( 'name' => _( 'Warmińsko-mazurskie' ) ),
			'WP' => array( 'name' => _( 'Wielkopolskie' ) ),
			'ZP' => array( 'name' => _( 'Zachodniopomorskie' ) )
		) );
			break;
		case 'PT':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Aveiro' ) ),
			'02' => array( 'name' => _( 'Beja' ) ),
			'03' => array( 'name' => _( 'Braga' ) ),
			'04' => array( 'name' => _( 'Bragança' ) ),
			'05' => array( 'name' => _( 'Castelo Branco' ) ),
			'06' => array( 'name' => _( 'Coimbra' ) ),
			'07' => array( 'name' => _( 'Évora' ) ),
			'08' => array( 'name' => _( 'Faro' ) ),
			'09' => array( 'name' => _( 'Guarda' ) ),
			'10' => array( 'name' => _( 'Leiria' ) ),
			'11' => array( 'name' => _( 'Lisboa' ) ),
			'12' => array( 'name' => _( 'Portalegre' ) ),
			'13' => array( 'name' => _( 'Porto' ) ),
			'14' => array( 'name' => _( 'Santarém' ) ),
			'15' => array( 'name' => _( 'Setúbal' ) ),
			'16' => array( 'name' => _( 'Viana do Castelo' ) ),
			'17' => array( 'name' => _( 'Vila Real' ) ),
			'18' => array( 'name' => _( 'Viseu' ) ),
			'20' => array( 'name' => _( 'Região Autónoma dos Açores' ) ),
			'30' => array( 'name' => _( 'Região Autónoma da Madeira' ) )
		) );
			break;
		case 'PW':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'002' => array( 'name' => _( 'Aimeliik' ) ),
			'004' => array( 'name' => _( 'Airai' ) ),
			'010' => array( 'name' => _( 'Angaur' ) ),
			'050' => array( 'name' => _( 'Hatobohei' ) ),
			'100' => array( 'name' => _( 'Kayangel' ) ),
			'150' => array( 'name' => _( 'Koror' ) ),
			'212' => array( 'name' => _( 'Melekeok' ) ),
			'214' => array( 'name' => _( 'Ngaraard' ) ),
			'218' => array( 'name' => _( 'Ngarchelong' ) ),
			'222' => array( 'name' => _( 'Ngardmau' ) ),
			'224' => array( 'name' => _( 'Ngatpang' ) ),
			'226' => array( 'name' => _( 'Ngchesar' ) ),
			'227' => array( 'name' => _( 'Ngeremlengui' ) ),
			'228' => array( 'name' => _( 'Ngiwal' ) ),
			'350' => array( 'name' => _( 'Peleliu' ) ),
			'370' => array( 'name' => _( 'Sonsorol' ) )
		) );
			break;
		case 'PY':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'ASU' => array( 'name' => _( 'Asunción' ) ),
			'16' => array( 'name' => _( 'Alto Paraguay' ) ),
			'10' => array( 'name' => _( 'Alto Paraná' ) ),
			'13' => array( 'name' => _( 'Amambay' ) ),
			'19' => array( 'name' => _( 'Boquerón' ) ),
			'5' => array( 'name' => _( 'Caaguazú' ) ),
			'6' => array( 'name' => _( 'Caazapá' ) ),
			'14' => array( 'name' => _( 'Canindeyú' ) ),
			'11' => array( 'name' => _( 'Central' ) ),
			'1' => array( 'name' => _( 'Concepción' ) ),
			'3' => array( 'name' => _( 'Cordillera' ) ),
			'4' => array( 'name' => _( 'Guairá' ) ),
			'7' => array( 'name' => _( 'Itapúa' ) ),
			'8' => array( 'name' => _( 'Misiones' ) ),
			'12' => array( 'name' => _( 'Ñeembucú' ) ),
			'9' => array( 'name' => _( 'Paraguarí' ) ),
			'15' => array( 'name' => _( 'Presidente Hayes' ) ),
			'2' => array( 'name' => _( 'San Pedro' ) )
		) );
			break;
		case 'QA':
			return array(
		'regions_label' => _( 'Municipality' ),
		'regions' => array(
			'DA' => array( 'name' => _( 'Ad Dawhah' ) ),
			'GH' => array( 'name' => _( 'Al Ghuwayriyah' ) ),
			'JU' => array( 'name' => _( 'Al Jumayliyah' ) ),
			'KH' => array( 'name' => _( 'Al Khawr' ) ),
			'WA' => array( 'name' => _( 'Al Wakrah' ) ),
			'RA' => array( 'name' => _( 'Ar Rayyan' ) ),
			'JB' => array( 'name' => _( 'Jariyan al Batnah' ) ),
			'MS' => array( 'name' => _( 'Madinat ash Shamal' ) ),
			'US' => array( 'name' => _( 'Umm Salal' ) )
		) );
			break;
		case 'RO':
			return array(
		'regions_label' => _( 'Department' ),
		'subregions_label' => _( 'Municipality' ),
		'regions' => array(
			'AB' => array( 'name' => _( 'Alba' ) ),
			'AR' => array( 'name' => _( 'Arad' ) ),
			'AG' => array( 'name' => _( 'Argeș' ) ),
			'BC' => array( 'name' => _( 'Bacău' ) ),
			'BH' => array( 'name' => _( 'Bihor' ) ),
			'BN' => array( 'name' => _( 'Bistrița-Năsăud' ) ),
			'BT' => array( 'name' => _( 'Botoșani' ) ),
			'BV' => array( 'name' => _( 'Brașov' ) ),
			'BR' => array( 'name' => _( 'Brăila' ) ),
			'BZ' => array( 'name' => _( 'Buzău' ) ),
			'CS' => array( 'name' => _( 'Caraș-Severin' ) ),
			'CL' => array( 'name' => _( 'Călărași' ) ),
			'CJ' => array( 'name' => _( 'Cluj' ) ),
			'CT' => array( 'name' => _( 'Constanța' ) ),
			'CV' => array( 'name' => _( 'Covasna' ) ),
			'DB' => array( 'name' => _( 'Dâmbovița' ) ),
			'DJ' => array( 'name' => _( 'Dolj' ) ),
			'GL' => array( 'name' => _( 'Galați' ) ),
			'GR' => array( 'name' => _( 'Giurgiu' ) ),
			'GJ' => array( 'name' => _( 'Gorj' ) ),
			'HR' => array( 'name' => _( 'Harghita' ) ),
			'HD' => array( 'name' => _( 'Hunedoara' ) ),
			'IL' => array( 'name' => _( 'Ialomița' ) ),
			'IS' => array( 'name' => _( 'Iași' ) ),
			'IF' => array( 'name' => _( 'Ilfov' ) ),
			'MM' => array( 'name' => _( 'Maramureș' ) ),
			'MH' => array( 'name' => _( 'Mehedinți' ) ),
			'MS' => array( 'name' => _( 'Mureș' ) ),
			'NT' => array( 'name' => _( 'Neamț' ) ),
			'OT' => array( 'name' => _( 'Olt' ) ),
			'PH' => array( 'name' => _( 'Prahova' ) ),
			'SM' => array( 'name' => _( 'Satu Mare' ) ),
			'SJ' => array( 'name' => _( 'Sălaj' ) ),
			'SB' => array( 'name' => _( 'Sibiu' ) ),
			'SV' => array( 'name' => _( 'Suceava' ) ),
			'TR' => array( 'name' => _( 'Teleorman' ) ),
			'TM' => array( 'name' => _( 'Timiș' ) ),
			'TL' => array( 'name' => _( 'Tulcea' ) ),
			'VS' => array( 'name' => _( 'Vaslui' ) ),
			'VL' => array( 'name' => _( 'Vâlcea' ) ),
			'VN' => array( 'name' => _( 'Vrancea' ) ),
			'B' => array( 'name' => _( 'București' ) )
		) );
			break;
		case 'RS':
			return array(
		'regions_label' => _( 'Province' ),
		'subregions_label' => _( 'District' ),
		'regions' => array(
			'00' => array( 'name' => _( 'Beograd' ) ),
			'KM' => array(
				'name' => _( 'Kosovo-Metohija' ),
				'subregions' => array(
					'25' => array( 'name' => _( 'Kosovski okrug' ) ),
					'28' => array( 'name' => _( 'Kosovsko-Mitrovački okrug' ) ),
					'29' => array( 'name' => _( 'Kosovsko-Pomoravski okrug' ) ),
					'26' => array( 'name' => _( 'Pećki okrug' ) ),
					'27' => array( 'name' => _( 'Prizrenski okrug' ) )
			) ),
			'VO' => array(
				'name' => _( 'Vojvodina' ),
				'subregions' => array(
					'06' => array( 'name' => _( 'Južnobački okrug' ) ),
					'04' => array( 'name' => _( 'Južnobanatski okrug' ) ),
					'01' => array( 'name' => _( 'Severnobački okrug' ) ),
					'03' => array( 'name' => _( 'Severnobanatski okrug' ) ),
					'02' => array( 'name' => _( 'Srednjebanatski okrug' ) ),
					'07' => array( 'name' => _( 'Sremski okrug' ) ),
					'05' => array( 'name' => _( 'Zapadnobački okrug' ) )
			) ),
			'14' => array( 'name' => _( 'Borski okrug' ) ),
			'11' => array( 'name' => _( 'Braničevski okrug' ) ),
			'23' => array( 'name' => _( 'Jablanički okrug' ) ),
			'09' => array( 'name' => _( 'Kolubarski okrug' ) ),
			'08' => array( 'name' => _( 'Mačvanski okrug' ) ),
			'17' => array( 'name' => _( 'Moravički okrug' ) ),
			'20' => array( 'name' => _( 'Nišavski okrug' ) ),
			'24' => array( 'name' => _( 'Pčinjski okrug' ) ),
			'22' => array( 'name' => _( 'Pirotski okrug' ) ),
			'10' => array( 'name' => _( 'Podunavski okrug' ) ),
			'13' => array( 'name' => _( 'Pomoravski okrug' ) ),
			'19' => array( 'name' => _( 'Rasinski okrug' ) ),
			'18' => array( 'name' => _( 'Raški okrug' ) ),
			'12' => array( 'name' => _( 'Šumadijski okrug' ) ),
			'21' => array( 'name' => _( 'Toplički okrug' ) ),
			'15' => array( 'name' => _( 'Zaječarski okrug' ) ),
			'16' => array( 'name' => _( 'Zlatiborski okrug' ) )
		) );
			break;
		case 'RU':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'AD' => array( 'name' => _( 'Adygeya, Respublika' ) ),
			'AL' => array( 'name' => _( 'Altay, Respublika' ) ),
			'BA' => array( 'name' => _( 'Bashkortostan, Respublika' ) ),
			'BU' => array( 'name' => _( 'Buryatiya, Respublika' ) ),
			'CE' => array( 'name' => _( 'Chechenskaya Respublika' ) ),
			'CU' => array( 'name' => _( 'Chuvashskaya Respublika' ) ),
			'DA' => array( 'name' => _( 'Dagestan, Respublika' ) ),
			'IN' => array( 'name' => _( 'Respublika Ingushetiya' ) ),
			'KB' => array( 'name' => _( 'Kabardino-Balkarskaya Respublika' ) ),
			'KL' => array( 'name' => _( 'Kalmykiya, Respublika' ) ),
			'KC' => array( 'name' => _( 'Karachayevo-Cherkesskaya Respublika' ) ),
			'KR' => array( 'name' => _( 'Kareliya, Respublika' ) ),
			'KK' => array( 'name' => _( 'Khakasiya, Respublika' ) ),
			'KO' => array( 'name' => _( 'Komi, Respublika' ) ),
			'ME' => array( 'name' => _( 'Mariy El, Respublika' ) ),
			'MO' => array( 'name' => _( 'Mordoviya, Respublika' ) ),
			'SA' => array( 'name' => _( 'Sakha, Respublika [Yakutiya]' ) ),
			'SE' => array( 'name' => _( 'Severnaya Osetiya-Alaniya, Respublika' ) ),
			'TA' => array( 'name' => _( 'Tatarstan, Respublika' ) ),
			'TY' => array( 'name' => _( 'Tyva, Respublika [Tuva]' ) ),
			'UD' => array( 'name' => _( 'Udmurtskaya Respublika' ) ),
			'ALT' => array( 'name' => _( 'Altayskiy kray' ) ),
			'KAM' => array( 'name' => _( 'Kamchatskiy kray' ) ),
			'KHA' => array( 'name' => _( 'Khabarovskiy kray' ) ),
			'KDA' => array( 'name' => _( 'Krasnodarskiy kray' ) ),
			'KYA' => array( 'name' => _( 'Krasnoyarskiy kray' ) ),
			'PER' => array( 'name' => _( 'Permskiy kray' ) ),
			'PRI' => array( 'name' => _( 'Primorskiy kray' ) ),
			'STA' => array( 'name' => _( 'Stavropol\'skiy kray' ) ),
			'ZAB' => array( 'name' => _( 'Zabajkal\'skij kraj' ) ),
			'AMU' => array( 'name' => _( 'Amurskaya oblast\'' ) ),
			'ARK' => array( 'name' => _( 'Arkhangel\'skaya oblast\'' ) ),
			'AST' => array( 'name' => _( 'Astrakhanskaya oblast\'' ) ),
			'BEL' => array( 'name' => _( 'Belgorodskaya oblast\'' ) ),
			'BRY' => array( 'name' => _( 'Bryanskaya oblast\'' ) ),
			'CHE' => array( 'name' => _( 'Chelyabinskaya oblast\'' ) ),
			'IRK' => array( 'name' => _( 'Irkutiskaya oblast\'' ) ),
			'IVA' => array( 'name' => _( 'Ivanovskaya oblast\'' ) ),
			'KGD' => array( 'name' => _( 'Kaliningradskaya oblast\'' ) ),
			'KLU' => array( 'name' => _( 'Kaluzhskaya oblast\'' ) ),
			'KEM' => array( 'name' => _( 'Kemerovskaya oblast\'' ) ),
			'KIR' => array( 'name' => _( 'Kirovskaya oblast\'' ) ),
			'KOS' => array( 'name' => _( 'Kostromskaya oblast\'' ) ),
			'KGN' => array( 'name' => _( 'Kurganskaya oblast\'' ) ),
			'KRS' => array( 'name' => _( 'Kurskaya oblast\'' ) ),
			'LEN' => array( 'name' => _( 'Leningradskaya oblast\'' ) ),
			'LIP' => array( 'name' => _( 'Lipetskaya oblast\'' ) ),
			'MAG' => array( 'name' => _( 'Magadanskaya oblast\'' ) ),
			'MOS' => array( 'name' => _( 'Moskovskaya oblast\'' ) ),
			'MUR' => array( 'name' => _( 'Murmanskaya oblast\'' ) ),
			'NIZ' => array( 'name' => _( 'Nizhegorodskaya oblast\'' ) ),
			'NGR' => array( 'name' => _( 'Novgorodskaya oblast\'' ) ),
			'NVS' => array( 'name' => _( 'Novosibirskaya oblast\'' ) ),
			'OMS' => array( 'name' => _( 'Omskaya oblast\'' ) ),
			'ORE' => array( 'name' => _( 'Orenburgskaya oblast\'' ) ),
			'ORL' => array( 'name' => _( 'Orlovskaya oblast\'' ) ),
			'PNZ' => array( 'name' => _( 'Penzenskaya oblast\'' ) ),
			'PSK' => array( 'name' => _( 'Pskovskaya oblast\'' ) ),
			'ROS' => array( 'name' => _( 'Rostovskaya oblast\'' ) ),
			'RYA' => array( 'name' => _( 'Ryazanskaya oblast\'' ) ),
			'SAK' => array( 'name' => _( 'Sakhalinskaya oblast\'' ) ),
			'SAM' => array( 'name' => _( 'Samaraskaya oblast\'' ) ),
			'SAR' => array( 'name' => _( 'Saratovskaya oblast\'' ) ),
			'SMO' => array( 'name' => _( 'Smolenskaya oblast\'' ) ),
			'SVE' => array( 'name' => _( 'Sverdlovskaya oblast\'' ) ),
			'TAM' => array( 'name' => _( 'Tambovskaya oblast\'' ) ),
			'TOM' => array( 'name' => _( 'Tomskaya oblast\'' ) ),
			'TUL' => array( 'name' => _( 'Tul\'skaya oblast\'' ) ),
			'TVE' => array( 'name' => _( 'Tverskaya oblast\'' ) ),
			'TYU' => array( 'name' => _( 'Tyumenskaya oblast\'' ) ),
			'ULY' => array( 'name' => _( 'Ul\'yanovskaya oblast\'' ) ),
			'VLA' => array( 'name' => _( 'Vladimirskaya oblast\'' ) ),
			'VGG' => array( 'name' => _( 'Volgogradskaya oblast\'' ) ),
			'VLG' => array( 'name' => _( 'Vologodskaya oblast\'' ) ),
			'VOR' => array( 'name' => _( 'Voronezhskaya oblast\'' ) ),
			'YAR' => array( 'name' => _( 'Yaroslavskaya oblast\'' ) ),
			'MOW' => array( 'name' => _( 'Moskva' ) ),
			'SPE' => array( 'name' => _( 'Sankt-Peterburg' ) ),
			'YEV' => array( 'name' => _( 'Yevreyskaya avtonomnaya oblast\'' ) ),
			'CHU' => array( 'name' => _( 'Chukotskiy avtonomnyy okrug' ) ),
			'KHM' => array( 'name' => _( 'Khanty-Mansiysky avtonomnyy okrug-Yugra' ) ),
			'NEN' => array( 'name' => _( 'Nenetskiy avtonomnyy okrug' ) ),
			'YAN' => array( 'name' => _( 'Yamalo-Nenetskiy avtonomnyy okrug' ) )
		) );
			break;
		case 'RW':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Ville de Kigali' ) ),
			'02' => array( 'name' => _( 'Est' ) ),
			'03' => array( 'name' => _( 'Nord' ) ),
			'04' => array( 'name' => _( 'Ouest' ) ),
			'05' => array( 'name' => _( 'Sud' ) )
		) );
			break;
		case 'SA':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'11' => array( 'name' => _( 'Al Bāhah' ) ),
			'08' => array( 'name' => _( 'Al Ḥudūd ash Shamāliyah' ) ),
			'12' => array( 'name' => _( 'Al Jawf' ) ),
			'03' => array( 'name' => _( 'Al Madīnah' ) ),
			'05' => array( 'name' => _( 'Al Qaşīm' ) ),
			'01' => array( 'name' => _( 'Ar Riyāḍ' ) ),
			'04' => array( 'name' => _( 'Ash Sharqīyah' ) ),
			'14' => array( 'name' => _( '`Asīr' ) ),
			'06' => array( 'name' => _( 'Ḥā\'il' ) ),
			'09' => array( 'name' => _( 'Jīzan' ) ),
			'02' => array( 'name' => _( 'Makkah' ) ),
			'10' => array( 'name' => _( 'Najrān' ) ),
			'07' => array( 'name' => _( 'Tabūk' ) )
		) );
			break;
		case 'SB':
			return array(
		'regions_label' => _( 'Capital territory' ),
		'subregions_label' => _( 'Province' ),
		'regions' => array(
			'CT' => array( 'name' => _( 'Capital Territory (Honiara)' ) ),
			'CE' => array( 'name' => _( 'Central' ) ),
			'CH' => array( 'name' => _( 'Choiseul' ) ),
			'GU' => array( 'name' => _( 'Guadalcanal' ) ),
			'IS' => array( 'name' => _( 'Isabel' ) ),
			'MK' => array( 'name' => _( 'Makira' ) ),
			'ML' => array( 'name' => _( 'Malaita' ) ),
			'RB' => array( 'name' => _( 'Rennell and Bellona' ) ),
			'TE' => array( 'name' => _( 'Temotu' ) ),
			'WE' => array( 'name' => _( 'Western' ) )
		) );
			break;
		case 'SC':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Anse aux Pins' ) ),
			'02' => array( 'name' => _( 'Anse Boileau' ) ),
			'03' => array( 'name' => _( 'Anse Etoile' ) ),
			'04' => array( 'name' => _( 'Anse Louis' ) ),
			'05' => array( 'name' => _( 'Anse Royale' ) ),
			'06' => array( 'name' => _( 'Baie Lazare' ) ),
			'07' => array( 'name' => _( 'Baie Sainte Anne' ) ),
			'08' => array( 'name' => _( 'Beau Vallon' ) ),
			'09' => array( 'name' => _( 'Bel Air' ) ),
			'10' => array( 'name' => _( 'Bel Ombre' ) ),
			'11' => array( 'name' => _( 'Cascade' ) ),
			'12' => array( 'name' => _( 'Glacis' ) ),
			'13' => array( 'name' => _( 'Grand Anse Mahe' ) ),
			'14' => array( 'name' => _( 'Grand Anse Praslin' ) ),
			'15' => array( 'name' => _( 'La Digue' ) ),
			'16' => array( 'name' => _( 'English River' ) ),
			'24' => array( 'name' => _( 'Les Mamelles' ) ),
			'17' => array( 'name' => _( 'Mont Buxton' ) ),
			'18' => array( 'name' => _( 'Mont Fleuri' ) ),
			'19' => array( 'name' => _( 'Plaisance' ) ),
			'20' => array( 'name' => _( 'Pointe Larue' ) ),
			'21' => array( 'name' => _( 'Port Glaud' ) ),
			'25' => array( 'name' => _( 'Roche Caiman' ) ),
			'22' => array( 'name' => _( 'Saint Louis' ) ),
			'23' => array( 'name' => _( 'Takamaka' ) )
		) );
			break;
		case 'SD':
			return array(
		'regions_label' => _( 'state' ),
		'regions' => array(
			'26' => array( 'name' => _( 'Al Baḩr al Aḩmar' ) ),
			'18' => array( 'name' => _( 'Al Buḩayrāt' ) ),
			'07' => array( 'name' => _( 'Al Jazīrah' ) ),
			'03' => array( 'name' => _( 'Al Kharţūm' ) ),
			'06' => array( 'name' => _( 'Al Qaḑārif' ) ),
			'22' => array( 'name' => _( 'Al Waḩdah' ) ),
			'04' => array( 'name' => _( 'An Nīl' ) ),
			'08' => array( 'name' => _( 'An Nīl al Abyaḑ' ) ),
			'24' => array( 'name' => _( 'An Nīl al Azraq' ) ),
			'01' => array( 'name' => _( 'Ash Shamālīyah' ) ),
			'23' => array( 'name' => _( 'A‘ālī an Nīl' ) ),
			'17' => array( 'name' => _( 'Baḩr al Jabal' ) ),
			'16' => array( 'name' => _( 'Gharb al Istiwā\'īyah' ) ),
			'14' => array( 'name' => _( 'Gharb Baḩr al Ghazāl' ) ),
			'12' => array( 'name' => _( 'Gharb Dārfūr' ) ),
			'11' => array( 'name' => _( 'Janūb Dārfūr' ) ),
			'13' => array( 'name' => _( 'Janūb Kurdufān' ) ),
			'20' => array( 'name' => _( 'Jūnqalī' ) ),
			'05' => array( 'name' => _( 'Kassalā' ) ),
			'15' => array( 'name' => _( 'Shamāl Baḩr al Ghazāl' ) ),
			'02' => array( 'name' => _( 'Shamāl Dārfūr' ) ),
			'09' => array( 'name' => _( 'Shamāl Kurdufān' ) ),
			'19' => array( 'name' => _( 'Sharq al Istiwā\'īyah' ) ),
			'25' => array( 'name' => _( 'Sinnār' ) ),
			'21' => array( 'name' => _( 'Wārāb' ) )
		) );
			break;
		case 'SE':
			return array(
		'regions_label' => _( 'County' ),
		'regions' => array(
			'K' => array( 'name' => _( 'Blekinge län' ) ),
			'W' => array( 'name' => _( 'Dalarnas län' ) ),
			'I' => array( 'name' => _( 'Gotlands län' ) ),
			'X' => array( 'name' => _( 'Gävleborgs län' ) ),
			'N' => array( 'name' => _( 'Hallands län' ) ),
			'Z' => array( 'name' => _( 'Jämtlande län' ) ),
			'F' => array( 'name' => _( 'Jönköpings län' ) ),
			'H' => array( 'name' => _( 'Kalmar län' ) ),
			'G' => array( 'name' => _( 'Kronobergs län' ) ),
			'BD' => array( 'name' => _( 'Norrbottens län' ) ),
			'M' => array( 'name' => _( 'Skåne län' ) ),
			'AB' => array( 'name' => _( 'Stockholms län' ) ),
			'D' => array( 'name' => _( 'Södermanlands län' ) ),
			'C' => array( 'name' => _( 'Uppsala län' ) ),
			'S' => array( 'name' => _( 'Värmlands län' ) ),
			'AC' => array( 'name' => _( 'Västerbottens län' ) ),
			'Y' => array( 'name' => _( 'Västernorrlands län' ) ),
			'U' => array( 'name' => _( 'Västmanlands län' ) ),
			'Q' => array( 'name' => _( 'Västra Götalands län' ) ),
			'T' => array( 'name' => _( 'Örebro län' ) ),
			'E' => array( 'name' => _( 'Östergötlands län' ) )
		) );
			break;
		case 'SG':
			return array(
		'regions_label' => _( 'district' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Central Singapore' ) ),
			'02' => array( 'name' => _( 'North East' ) ),
			'03' => array( 'name' => _( 'North West' ) ),
			'04' => array( 'name' => _( 'South East' ) ),
			'05' => array( 'name' => _( 'South West' ) )
		) );
			break;
		case 'SI':
			return array(
		'regions_label' => _( 'Municipalities' ),
		'regions' => array(
			'001' => array( 'name' => _( 'Ajdovščina' ) ),
			'195' => array( 'name' => _( 'Apače' ) ),
			'002' => array( 'name' => _( 'Beltinci' ) ),
			'148' => array( 'name' => _( 'Benedikt' ) ),
			'149' => array( 'name' => _( 'Bistrica ob Sotli' ) ),
			'003' => array( 'name' => _( 'Bled' ) ),
			'150' => array( 'name' => _( 'Bloke' ) ),
			'004' => array( 'name' => _( 'Bohinj' ) ),
			'005' => array( 'name' => _( 'Borovnica' ) ),
			'006' => array( 'name' => _( 'Bovec' ) ),
			'151' => array( 'name' => _( 'Braslovče' ) ),
			'007' => array( 'name' => _( 'Brda' ) ),
			'008' => array( 'name' => _( 'Brezovica' ) ),
			'009' => array( 'name' => _( 'Brežice' ) ),
			'152' => array( 'name' => _( 'Cankova' ) ),
			'011' => array( 'name' => _( 'Celje' ) ),
			'012' => array( 'name' => _( 'Cerklje na Gorenjskem' ) ),
			'013' => array( 'name' => _( 'Cerknica' ) ),
			'014' => array( 'name' => _( 'Cerkno' ) ),
			'153' => array( 'name' => _( 'Cerkvenjak' ) ),
			'196' => array( 'name' => _( 'Cirkulane' ) ),
			'015' => array( 'name' => _( 'Črenšovci' ) ),
			'016' => array( 'name' => _( 'Črna na Koroškem' ) ),
			'017' => array( 'name' => _( 'Črnomelj' ) ),
			'018' => array( 'name' => _( 'Destrnik' ) ),
			'019' => array( 'name' => _( 'Divača' ) ),
			'154' => array( 'name' => _( 'Dobje' ) ),
			'020' => array( 'name' => _( 'Dobrepolje' ) ),
			'155' => array( 'name' => _( 'Dobrna' ) ),
			'021' => array( 'name' => _( 'Dobrova-Polhov Gradec' ) ),
			'156' => array( 'name' => _( 'Dobrovnik/Dobronak' ) ),
			'022' => array( 'name' => _( 'Dol pri Ljubljani' ) ),
			'157' => array( 'name' => _( 'Dolenjske Toplice' ) ),
			'023' => array( 'name' => _( 'Domžale' ) ),
			'024' => array( 'name' => _( 'Dornava' ) ),
			'025' => array( 'name' => _( 'Dravograd' ) ),
			'026' => array( 'name' => _( 'Duplek' ) ),
			'027' => array( 'name' => _( 'Gorenja vas-Poljane' ) ),
			'028' => array( 'name' => _( 'Gorišnica' ) ),
			'207' => array( 'name' => _( 'Gorje' ) ),
			'029' => array( 'name' => _( 'Gornja Radgona' ) ),
			'030' => array( 'name' => _( 'Gornji Grad' ) ),
			'031' => array( 'name' => _( 'Gornji Petrovci' ) ),
			'158' => array( 'name' => _( 'Grad' ) ),
			'032' => array( 'name' => _( 'Grosuplje' ) ),
			'159' => array( 'name' => _( 'Hajdina' ) ),
			'160' => array( 'name' => _( 'Hoče-Slivnica' ) ),
			'161' => array( 'name' => _( 'Hodoš/Hodos' ) ),
			'162' => array( 'name' => _( 'Horjul' ) ),
			'034' => array( 'name' => _( 'Hrastnik' ) ),
			'035' => array( 'name' => _( 'Hrpelje-Kozina' ) ),
			'036' => array( 'name' => _( 'Idrija' ) ),
			'037' => array( 'name' => _( 'Ig' ) ),
			'038' => array( 'name' => _( 'Ilirska Bistrica' ) ),
			'039' => array( 'name' => _( 'Ivančna Gorica' ) ),
			'040' => array( 'name' => _( 'Izola/Isola' ) ),
			'041' => array( 'name' => _( 'Jesenice' ) ),
			'163' => array( 'name' => _( 'Jezersko' ) ),
			'042' => array( 'name' => _( 'Juršinci' ) ),
			'043' => array( 'name' => _( 'Kamnik' ) ),
			'044' => array( 'name' => _( 'Kanal' ) ),
			'045' => array( 'name' => _( 'Kidričevo' ) ),
			'046' => array( 'name' => _( 'Kobarid' ) ),
			'047' => array( 'name' => _( 'Kobilje' ) ),
			'048' => array( 'name' => _( 'Kočevje' ) ),
			'049' => array( 'name' => _( 'Komen' ) ),
			'164' => array( 'name' => _( 'Komenda' ) ),
			'050' => array( 'name' => _( 'Koper/Capodistria' ) ),
			'197' => array( 'name' => _( 'Kosanjevica na Krki' ) ),
			'165' => array( 'name' => _( 'Kostel' ) ),
			'051' => array( 'name' => _( 'Kozje' ) ),
			'052' => array( 'name' => _( 'Kranj' ) ),
			'053' => array( 'name' => _( 'Kranjska Gora' ) ),
			'166' => array( 'name' => _( 'Križevci' ) ),
			'054' => array( 'name' => _( 'Krško' ) ),
			'055' => array( 'name' => _( 'Kungota' ) ),
			'056' => array( 'name' => _( 'Kuzma' ) ),
			'057' => array( 'name' => _( 'Laško' ) ),
			'058' => array( 'name' => _( 'Lenart' ) ),
			'059' => array( 'name' => _( 'Lendava/Lendva' ) ),
			'060' => array( 'name' => _( 'Litija' ) ),
			'061' => array( 'name' => _( 'Ljubljana' ) ),
			'062' => array( 'name' => _( 'Ljubno' ) ),
			'063' => array( 'name' => _( 'Ljutomer' ) ),
			'208' => array( 'name' => _( 'Log-Dragomer' ) ),
			'064' => array( 'name' => _( 'Logatec' ) ),
			'065' => array( 'name' => _( 'Loška dolina' ) ),
			'066' => array( 'name' => _( 'Loški Potok' ) ),
			'167' => array( 'name' => _( 'Lovrenc na Pohorju' ) ),
			'067' => array( 'name' => _( 'Luče' ) ),
			'068' => array( 'name' => _( 'Lukovica' ) ),
			'069' => array( 'name' => _( 'Majšperk' ) ),
			'198' => array( 'name' => _( 'Makole' ) ),
			'070' => array( 'name' => _( 'Maribor' ) ),
			'168' => array( 'name' => _( 'Markovci' ) ),
			'071' => array( 'name' => _( 'Medvode' ) ),
			'072' => array( 'name' => _( 'Mengeš' ) ),
			'073' => array( 'name' => _( 'Metlika' ) ),
			'074' => array( 'name' => _( 'Mežica' ) ),
			'169' => array( 'name' => _( 'Miklavž na Dravskem polju' ) ),
			'075' => array( 'name' => _( 'Miren-Kostanjevica' ) ),
			'170' => array( 'name' => _( 'Mirna Peč' ) ),
			'076' => array( 'name' => _( 'Mislinja' ) ),
			'199' => array( 'name' => _( 'Mokronog-Trebelno' ) ),
			'077' => array( 'name' => _( 'Moravče' ) ),
			'078' => array( 'name' => _( 'Moravske Toplice' ) ),
			'079' => array( 'name' => _( 'Mozirje' ) ),
			'080' => array( 'name' => _( 'Murska Sobota' ) ),
			'081' => array( 'name' => _( 'Muta' ) ),
			'082' => array( 'name' => _( 'Naklo' ) ),
			'083' => array( 'name' => _( 'Nazarje' ) ),
			'084' => array( 'name' => _( 'Nova Gorica' ) ),
			'085' => array( 'name' => _( 'Novo mesto' ) ),
			'086' => array( 'name' => _( 'Odranci' ) ),
			'171' => array( 'name' => _( 'Oplotnica' ) ),
			'087' => array( 'name' => _( 'Ormož' ) ),
			'088' => array( 'name' => _( 'Osilnica' ) ),
			'089' => array( 'name' => _( 'Pesnica' ) ),
			'090' => array( 'name' => _( 'Piran/Pirano' ) ),
			'091' => array( 'name' => _( 'Pivka' ) ),
			'092' => array( 'name' => _( 'Podčetrtek' ) ),
			'172' => array( 'name' => _( 'Podlehnik' ) ),
			'093' => array( 'name' => _( 'Podvelka' ) ),
			'200' => array( 'name' => _( 'Poljčane' ) ),
			'173' => array( 'name' => _( 'Polzela' ) ),
			'094' => array( 'name' => _( 'Postojna' ) ),
			'174' => array( 'name' => _( 'Prebold' ) ),
			'095' => array( 'name' => _( 'Preddvor' ) ),
			'175' => array( 'name' => _( 'Prevalje' ) ),
			'096' => array( 'name' => _( 'Ptuj' ) ),
			'097' => array( 'name' => _( 'Puconci' ) ),
			'098' => array( 'name' => _( 'Rače-Fram' ) ),
			'099' => array( 'name' => _( 'Radeče' ) ),
			'100' => array( 'name' => _( 'Radenci' ) ),
			'101' => array( 'name' => _( 'Radlje ob Dravi' ) ),
			'102' => array( 'name' => _( 'Radovljica' ) ),
			'103' => array( 'name' => _( 'Ravne na Koroškem' ) ),
			'176' => array( 'name' => _( 'Razkrižje' ) ),
			'209' => array( 'name' => _( 'Rečica ob Savinji' ) ),
			'201' => array( 'name' => _( 'Renče-Vogrsko' ) ),
			'104' => array( 'name' => _( 'Ribnica' ) ),
			'177' => array( 'name' => _( 'Ribnica na Pohorju' ) ),
			'106' => array( 'name' => _( 'Rogaška Slatina' ) ),
			'105' => array( 'name' => _( 'Rogašovci' ) ),
			'107' => array( 'name' => _( 'Rogatec' ) ),
			'108' => array( 'name' => _( 'Ruše' ) ),
			'178' => array( 'name' => _( 'Selnica ob Dravi' ) ),
			'109' => array( 'name' => _( 'Semič' ) ),
			'110' => array( 'name' => _( 'Sevnica' ) ),
			'111' => array( 'name' => _( 'Sežana' ) ),
			'112' => array( 'name' => _( 'Slovenj Gradec' ) ),
			'113' => array( 'name' => _( 'Slovenska Bistrica' ) ),
			'114' => array( 'name' => _( 'Slovenske Konjice' ) ),
			'179' => array( 'name' => _( 'Sodražica' ) ),
			'180' => array( 'name' => _( 'Solčava' ) ),
			'202' => array( 'name' => _( 'Središče ob Dravi' ) ),
			'115' => array( 'name' => _( 'Starče' ) ),
			'203' => array( 'name' => _( 'Straža' ) ),
			'181' => array( 'name' => _( 'Sveta Ana' ) ),
			'204' => array( 'name' => _( 'Sveta Trojica v Slovenskih Goricah' ) ),
			'182' => array( 'name' => _( 'Sveta Andraž v Slovenskih Goricah' ) ),
			'116' => array( 'name' => _( 'Sveti Jurij' ) ),
			'210' => array( 'name' => _( 'Sveti Jurij v Slovenskih Goricah' ) ),
			'205' => array( 'name' => _( 'Sveti Tomaž' ) ),
			'033' => array( 'name' => _( 'Šalovci' ) ),
			'183' => array( 'name' => _( 'Šempeter-Vrtojba' ) ),
			'117' => array( 'name' => _( 'Šenčur' ) ),
			'118' => array( 'name' => _( 'Šentilj' ) ),
			'119' => array( 'name' => _( 'Šentjernej' ) ),
			'120' => array( 'name' => _( 'Šentjur' ) ),
			'211' => array( 'name' => _( 'Šentrupert' ) ),
			'121' => array( 'name' => _( 'Škocjan' ) ),
			'122' => array( 'name' => _( 'Škofja Loka' ) ),
			'123' => array( 'name' => _( 'Škofljica' ) ),
			'124' => array( 'name' => _( 'Šmarje pri Jelšah' ) ),
			'206' => array( 'name' => _( 'Šmarjeske Topliče' ) ),
			'125' => array( 'name' => _( 'Šmartno ob Paki' ) ),
			'194' => array( 'name' => _( 'Šmartno pri Litiji' ) ),
			'126' => array( 'name' => _( 'Šoštanj' ) ),
			'127' => array( 'name' => _( 'Štore' ) ),
			'184' => array( 'name' => _( 'Tabor' ) ),
			'010' => array( 'name' => _( 'Tišina' ) ),
			'128' => array( 'name' => _( 'Tolmin' ) ),
			'129' => array( 'name' => _( 'Trbovlje' ) ),
			'130' => array( 'name' => _( 'Trebnje' ) ),
			'185' => array( 'name' => _( 'Trnovska vas' ) ),
			'186' => array( 'name' => _( 'Trzin' ) ),
			'131' => array( 'name' => _( 'Tržič' ) ),
			'132' => array( 'name' => _( 'Turnišče' ) ),
			'133' => array( 'name' => _( 'Velenje' ) ),
			'187' => array( 'name' => _( 'Velika Polana' ) ),
			'134' => array( 'name' => _( 'Velike Lašče' ) ),
			'188' => array( 'name' => _( 'Veržej' ) ),
			'135' => array( 'name' => _( 'Videm' ) ),
			'136' => array( 'name' => _( 'Vipava' ) ),
			'137' => array( 'name' => _( 'Vitanje' ) ),
			'138' => array( 'name' => _( 'Vodice' ) ),
			'139' => array( 'name' => _( 'Vojnik' ) ),
			'189' => array( 'name' => _( 'Vransko' ) ),
			'140' => array( 'name' => _( 'Vrhnika' ) ),
			'141' => array( 'name' => _( 'Vuzenica' ) ),
			'142' => array( 'name' => _( 'Zagorje ob Savi' ) ),
			'143' => array( 'name' => _( 'Zavrč' ) ),
			'144' => array( 'name' => _( 'Zreče' ) ),
			'190' => array( 'name' => _( 'Žalec' ) ),
			'146' => array( 'name' => _( 'Železniki' ) ),
			'191' => array( 'name' => _( 'Žetale' ) ),
			'147' => array( 'name' => _( 'Žiri' ) ),
			'192' => array( 'name' => _( 'Žirovnica' ) ),
			'193' => array( 'name' => _( 'Žužemberk' ) )
		) );
			break;
		case 'SK':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'BC' => array( 'name' => _( 'Banskobystrický kraj' ) ),
			'BL' => array( 'name' => _( 'Bratislavský kraj' ) ),
			'KI' => array( 'name' => _( 'Košický kraj' ) ),
			'NJ' => array( 'name' => _( 'Nitriansky kraj' ) ),
			'PV' => array( 'name' => _( 'Prešovský kraj' ) ),
			'TC' => array( 'name' => _( 'Trenčiansky kraj' ) ),
			'TA' => array( 'name' => _( 'Trnavský kraj' ) ),
			'ZI' => array( 'name' => _( 'Žilinský kraj' ) )
		) );
			break;
		case 'SL':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'W' => array( 'name' => _( 'Western Area (Freetown)' ) ),
			'E' => array( 'name' => _( 'Eastern' ) ),
			'N' => array( 'name' => _( 'Northern' ) ),
			'S' => array( 'name' => _( 'Southern (Sierra Leone)' ) )
		) );
			break;
		case 'SM':
			return array(
		'regions_label' => _( 'Municipalities' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Acquaviva' ) ),
			'06' => array( 'name' => _( 'Borgo Maggiore' ) ),
			'02' => array( 'name' => _( 'Chiesanuova' ) ),
			'03' => array( 'name' => _( 'Domagnano' ) ),
			'04' => array( 'name' => _( 'Faetano' ) ),
			'05' => array( 'name' => _( 'Fiorentino' ) ),
			'08' => array( 'name' => _( 'Montegiardino' ) ),
			'07' => array( 'name' => _( 'San Marino' ) ),
			'09' => array( 'name' => _( 'Serravalle' ) )
		) );
			break;
		case 'SN':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'DK' => array( 'name' => _( 'Dakar' ) ),
			'DB' => array( 'name' => _( 'Diourbel' ) ),
			'FK' => array( 'name' => _( 'Fatick' ) ),
			'KA' => array( 'name' => _( 'Kaffrine' ) ),
			'KL' => array( 'name' => _( 'Kaolack' ) ),
			'KE' => array( 'name' => _( 'Kédougou' ) ),
			'KD' => array( 'name' => _( 'Kolda' ) ),
			'LG' => array( 'name' => _( 'Louga' ) ),
			'MT' => array( 'name' => _( 'Matam' ) ),
			'SL' => array( 'name' => _( 'Saint-Louis' ) ),
			'SE' => array( 'name' => _( 'Sédhiou' ) ),
			'TC' => array( 'name' => _( 'Tambacounda' ) ),
			'TH' => array( 'name' => _( 'Thiès' ) ),
			'ZG' => array( 'name' => _( 'Ziguinchor' ) )
		) );
			break;
		case 'SO':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'AW' => array( 'name' => _( 'Awdal' ) ),
			'BK' => array( 'name' => _( 'Bakool' ) ),
			'BN' => array( 'name' => _( 'Banaadir' ) ),
			'BR' => array( 'name' => _( 'Bari' ) ),
			'BY' => array( 'name' => _( 'Bay' ) ),
			'GA' => array( 'name' => _( 'Galguduud' ) ),
			'GE' => array( 'name' => _( 'Gedo' ) ),
			'HI' => array( 'name' => _( 'Hiirsan' ) ),
			'JD' => array( 'name' => _( 'Jubbada Dhexe' ) ),
			'JH' => array( 'name' => _( 'Jubbada Hoose' ) ),
			'MU' => array( 'name' => _( 'Mudug' ) ),
			'NU' => array( 'name' => _( 'Nugaal' ) ),
			'SA' => array( 'name' => _( 'Saneag' ) ),
			'SD' => array( 'name' => _( 'Shabeellaha Dhexe' ) ),
			'SH' => array( 'name' => _( 'Shabeellaha Hoose' ) ),
			'SO' => array( 'name' => _( 'Sool' ) ),
			'TO' => array( 'name' => _( 'Togdheer' ) ),
			'WO' => array( 'name' => _( 'Woqooyi Galbeed' ) )
		) );
			break;
		case 'SR':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'BR' => array( 'name' => _( 'Brokopondo' ) ),
			'CM' => array( 'name' => _( 'Commewijne' ) ),
			'CR' => array( 'name' => _( 'Coronie' ) ),
			'MA' => array( 'name' => _( 'Marowijne' ) ),
			'NI' => array( 'name' => _( 'Nickerie' ) ),
			'PR' => array( 'name' => _( 'Para' ) ),
			'PM' => array( 'name' => _( 'Paramaribo' ) ),
			'SA' => array( 'name' => _( 'Saramacca' ) ),
			'SI' => array( 'name' => _( 'Sipaliwini' ) ),
			'WA' => array( 'name' => _( 'Wanica' ) )
		) );
			break;
		case 'ST':
			return array(
		'regions_label' => _( 'Municipality' ),
		'regions' => array(
			'P' => array( 'name' => _( 'Príncipe' ) ),
			'S' => array( 'name' => _( 'São Tomé' ) )
		) );
			break;
		case 'SV':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'AH' => array( 'name' => _( 'Ahuachapán' ) ),
			'CA' => array( 'name' => _( 'Cabañas' ) ),
			'CU' => array( 'name' => _( 'Cuscatlán' ) ),
			'CH' => array( 'name' => _( 'Chalatenango' ) ),
			'LI' => array( 'name' => _( 'La Libertad' ) ),
			'PA' => array( 'name' => _( 'La Paz' ) ),
			'UN' => array( 'name' => _( 'La Unión' ) ),
			'MO' => array( 'name' => _( 'Morazán' ) ),
			'SM' => array( 'name' => _( 'San Miguel' ) ),
			'SS' => array( 'name' => _( 'San Salvador' ) ),
			'SA' => array( 'name' => _( 'Santa Ana' ) ),
			'SV' => array( 'name' => _( 'San Vicente' ) ),
			'SO' => array( 'name' => _( 'Sonsonate' ) ),
			'US' => array( 'name' => _( 'Usulután' ) )
		) );
			break;
		case 'SY':
			return array(
		'regions_label' => _( 'Governorate' ),
		'regions' => array(
			'HA' => array( 'name' => _( 'Al Hasakah' ) ),
			'LA' => array( 'name' => _( 'Al Ladhiqiyah' ) ),
			'QU' => array( 'name' => _( 'Al Qunaytirah' ) ),
			'RA' => array( 'name' => _( 'Ar Raqqah' ) ),
			'SU' => array( 'name' => _( 'As Suwayda\'' ) ),
			'DR' => array( 'name' => _( 'Dar\'a' ) ),
			'DY' => array( 'name' => _( 'Dayr az Zawr' ) ),
			'DI' => array( 'name' => _( 'Dimashq' ) ),
			'HL' => array( 'name' => _( 'Halab' ) ),
			'HM' => array( 'name' => _( 'Hamah' ) ),
			'HI' => array( 'name' => _( 'Homs' ) ),
			'ID' => array( 'name' => _( 'Idlib' ) ),
			'RD' => array( 'name' => _( 'Rif Dimashq' ) ),
			'TA' => array( 'name' => _( 'Tartus' ) )
		) );
			break;
		case 'SZ':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'HH' => array( 'name' => _( 'Hhohho' ) ),
			'LU' => array( 'name' => _( 'Lubombo' ) ),
			'MA' => array( 'name' => _( 'Manzini' ) ),
			'SH' => array( 'name' => _( 'Shiselweni' ) )
		) );
			break;
		case 'TD':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'BA' => array( 'name' => _( 'Al Baṭḩah' ) ),
			'LC' => array( 'name' => _( 'Al Buḩayrah' ) ),
			'BG' => array( 'name' => _( 'Baḩr al Ghazāl' ) ),
			'BO' => array( 'name' => _( 'Būrkū' ) ),
			'HL' => array( 'name' => _( 'Ḥajjar Lamīs' ) ),
			'EN' => array( 'name' => _( 'Innīdī' ) ),
			'KA' => array( 'name' => _( 'Kānim' ) ),
			'LO' => array( 'name' => _( 'Lūqūn al Gharbī' ) ),
			'LR' => array( 'name' => _( 'Lūqūn ash Sharqī' ) ),
			'ND' => array( 'name' => _( 'Madīnat Injamīnā' ) ),
			'MA' => array( 'name' => _( 'Māndūl' ) ),
			'MO' => array( 'name' => _( 'Māyū Kībbī al Gharbī' ) ),
			'ME' => array( 'name' => _( 'Māyū Kībbī ash Sharqī' ) ),
			'GR' => array( 'name' => _( 'Qīrā' ) ),
			'SA' => array( 'name' => _( 'Salāmāt' ) ),
			'MC' => array( 'name' => _( 'Shārī al Awsaṭ' ) ),
			'CB' => array( 'name' => _( 'Shārī Bāqirmī' ) ),
			'SI' => array( 'name' => _( 'Sīlā' ) ),
			'TA' => array( 'name' => _( 'Tānjilī' ) ),
			'TI' => array( 'name' => _( 'Tibastī' ) ),
			'OD' => array( 'name' => _( 'Waddāy' ) ),
			'WF' => array( 'name' => _( 'Wādī Fīrā' ) )
		) );
			break;
		case 'TG':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'C' => array( 'name' => _( 'Région du Centre' ) ),
			'K' => array( 'name' => _( 'Région de la Kara' ) ),
			'M' => array( 'name' => _( 'Région Maritime' ) ),
			'P' => array( 'name' => _( 'Région des Plateaux' ) ),
			'S' => array( 'name' => _( 'Région des Savannes' ) )
		) );
			break;
		case 'TH':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'10' => array( 'name' => _( 'Krung Thep Maha Nakhon Bangkok' ) ),
			'S' => array( 'name' => _( 'Phatthaya' ) ),
			'37' => array( 'name' => _( 'Amnat Charoen' ) ),
			'15' => array( 'name' => _( 'Ang Thong' ) ),
			'31' => array( 'name' => _( 'Buri Ram' ) ),
			'24' => array( 'name' => _( 'Chachoengsao' ) ),
			'18' => array( 'name' => _( 'Chai Nat' ) ),
			'36' => array( 'name' => _( 'Chaiyaphum' ) ),
			'22' => array( 'name' => _( 'Chanthaburi' ) ),
			'50' => array( 'name' => _( 'Chiang Mai' ) ),
			'57' => array( 'name' => _( 'Chiang Rai' ) ),
			'20' => array( 'name' => _( 'Chon Buri' ) ),
			'86' => array( 'name' => _( 'Chumphon' ) ),
			'46' => array( 'name' => _( 'Kalasin' ) ),
			'62' => array( 'name' => _( 'Kamphaeng Phet' ) ),
			'71' => array( 'name' => _( 'Kanchanaburi' ) ),
			'40' => array( 'name' => _( 'Khon Kaen' ) ),
			'81' => array( 'name' => _( 'Krabi' ) ),
			'52' => array( 'name' => _( 'Lampang' ) ),
			'51' => array( 'name' => _( 'Lamphun' ) ),
			'42' => array( 'name' => _( 'Loei' ) ),
			'16' => array( 'name' => _( 'Lop Buri' ) ),
			'58' => array( 'name' => _( 'Mae Hong Son' ) ),
			'44' => array( 'name' => _( 'Maha Sarakham' ) ),
			'49' => array( 'name' => _( 'Mukdahan' ) ),
			'26' => array( 'name' => _( 'Nakhon Nayok' ) ),
			'73' => array( 'name' => _( 'Nakhon Pathom' ) ),
			'48' => array( 'name' => _( 'Nakhon Phanom' ) ),
			'30' => array( 'name' => _( 'Nakhon Ratchasima' ) ),
			'60' => array( 'name' => _( 'Nakhon Sawan' ) ),
			'80' => array( 'name' => _( 'Nakhon Si Thammarat' ) ),
			'55' => array( 'name' => _( 'Nan' ) ),
			'96' => array( 'name' => _( 'Narathiwat' ) ),
			'39' => array( 'name' => _( 'Nong Bua Lam Phu' ) ),
			'43' => array( 'name' => _( 'Nong Khai' ) ),
			'12' => array( 'name' => _( 'Nonthaburi' ) ),
			'13' => array( 'name' => _( 'Pathum Thani' ) ),
			'94' => array( 'name' => _( 'Pattani' ) ),
			'82' => array( 'name' => _( 'Phangnga' ) ),
			'93' => array( 'name' => _( 'Phatthalung' ) ),
			'56' => array( 'name' => _( 'Phayao' ) ),
			'67' => array( 'name' => _( 'Phetchabun' ) ),
			'76' => array( 'name' => _( 'Phetchaburi' ) ),
			'66' => array( 'name' => _( 'Phichit' ) ),
			'65' => array( 'name' => _( 'Phitsanulok' ) ),
			'54' => array( 'name' => _( 'Phrae' ) ),
			'14' => array( 'name' => _( 'Phra Nakhon Si Ayutthaya' ) ),
			'83' => array( 'name' => _( 'Phuket' ) ),
			'25' => array( 'name' => _( 'Prachin Buri' ) ),
			'77' => array( 'name' => _( 'Prachuap Khiri Khan' ) ),
			'85' => array( 'name' => _( 'Ranong' ) ),
			'70' => array( 'name' => _( 'Ratchaburi' ) ),
			'21' => array( 'name' => _( 'Rayong' ) ),
			'45' => array( 'name' => _( 'Roi Et' ) ),
			'27' => array( 'name' => _( 'Sa Kaeo' ) ),
			'47' => array( 'name' => _( 'Sakon Nakhon' ) ),
			'11' => array( 'name' => _( 'Samut Prakan' ) ),
			'74' => array( 'name' => _( 'Samut Sakhon' ) ),
			'75' => array( 'name' => _( 'Samut Songkhram' ) ),
			'19' => array( 'name' => _( 'Saraburi' ) ),
			'91' => array( 'name' => _( 'Satun' ) ),
			'17' => array( 'name' => _( 'Sing Buri' ) ),
			'33' => array( 'name' => _( 'Si Sa Ket' ) ),
			'90' => array( 'name' => _( 'Songkhla' ) ),
			'64' => array( 'name' => _( 'Sukhothai' ) ),
			'72' => array( 'name' => _( 'Suphan Buri' ) ),
			'84' => array( 'name' => _( 'Surat Thani' ) ),
			'32' => array( 'name' => _( 'Surin' ) ),
			'63' => array( 'name' => _( 'Tak' ) ),
			'92' => array( 'name' => _( 'Trang' ) ),
			'23' => array( 'name' => _( 'Trat' ) ),
			'34' => array( 'name' => _( 'Ubon Ratchathani' ) ),
			'41' => array( 'name' => _( 'Udon Thani' ) ),
			'61' => array( 'name' => _( 'Uthai Thani' ) ),
			'53' => array( 'name' => _( 'Uttaradit' ) ),
			'95' => array( 'name' => _( 'Yala' ) ),
			'35' => array( 'name' => _( 'Yasothon' ) )
		) );
			break;
		case 'TJ':
			return array(
		'regions_label' => _( 'Autonomous region' ),
		'subregions_label' => _( 'Region' ),
		'regions' => array(
			'GB' => array( 'name' => _( 'Gorno-Badakhshan' ) ),
			'KT' => array( 'name' => _( 'Khatlon' ) ),
			'SU' => array( 'name' => _( 'Sughd' ) )
		) );
			break;
		case 'TL':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'AL' => array( 'name' => _( 'Aileu' ) ),
			'AN' => array( 'name' => _( 'Ainaro' ) ),
			'BA' => array( 'name' => _( 'Baucau' ) ),
			'BO' => array( 'name' => _( 'Bobonaro' ) ),
			'CO' => array( 'name' => _( 'Cova Lima' ) ),
			'DI' => array( 'name' => _( 'Dili' ) ),
			'ER' => array( 'name' => _( 'Ermera' ) ),
			'LA' => array( 'name' => _( 'Lautem' ) ),
			'LI' => array( 'name' => _( 'Liquiça' ) ),
			'MT' => array( 'name' => _( 'Manatuto' ) ),
			'MF' => array( 'name' => _( 'Manufahi' ) ),
			'OE' => array( 'name' => _( 'Oecussi' ) ),
			'VI' => array( 'name' => _( 'Viqueque' ) )
		) );
			break;
		case 'TM':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'A' => array( 'name' => _( 'Ahal' ) ),
			'B' => array( 'name' => _( 'Balkan' ) ),
			'D' => array( 'name' => _( 'Daşoguz' ) ),
			'L' => array( 'name' => _( 'Lebap' ) ),
			'M' => array( 'name' => _( 'Mary' ) ),
			'S' => array( 'name' => _( 'Aşgabat' ) )
		) );
			break;
		case 'TN':
			return array(
		'regions_label' => _( 'Governorate' ),
		'regions' => array(
			'31' => array( 'name' => _( 'Béja' ) ),
			'13' => array( 'name' => _( 'Ben Arous' ) ),
			'23' => array( 'name' => _( 'Bizerte' ) ),
			'81' => array( 'name' => _( 'Gabès' ) ),
			'71' => array( 'name' => _( 'Gafsa' ) ),
			'32' => array( 'name' => _( 'Jendouba' ) ),
			'41' => array( 'name' => _( 'Kairouan' ) ),
			'42' => array( 'name' => _( 'Kasserine' ) ),
			'73' => array( 'name' => _( 'Kebili' ) ),
			'12' => array( 'name' => _( 'L\'Ariana' ) ),
			'33' => array( 'name' => _( 'Le Kef' ) ),
			'53' => array( 'name' => _( 'Mahdia' ) ),
			'14' => array( 'name' => _( 'La Manouba' ) ),
			'82' => array( 'name' => _( 'Medenine' ) ),
			'52' => array( 'name' => _( 'Monastir' ) ),
			'21' => array( 'name' => _( 'Nabeul' ) ),
			'61' => array( 'name' => _( 'Sfax' ) ),
			'43' => array( 'name' => _( 'Sidi Bouzid' ) ),
			'34' => array( 'name' => _( 'Siliana' ) ),
			'51' => array( 'name' => _( 'Sousse' ) ),
			'83' => array( 'name' => _( 'Tataouine' ) ),
			'72' => array( 'name' => _( 'Tozeur' ) ),
			'11' => array( 'name' => _( 'Tunis' ) ),
			'22' => array( 'name' => _( 'Zaghouan' ) )
		) );
			break;
		case 'TO':
			return array(
		'regions_label' => _( 'Division' ),
		'regions' => array(
			'01' => array( 'name' => _( '\'Eua' ) ),
			'02' => array( 'name' => _( 'Ha\'apai' ) ),
			'03' => array( 'name' => _( 'Niuas' ) ),
			'04' => array( 'name' => _( 'Tongatapu' ) ),
			'05' => array( 'name' => _( 'Vava\'u' ) )
		) );
			break;
		case 'TR':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Adana' ) ),
			'02' => array( 'name' => _( 'Adıyaman' ) ),
			'03' => array( 'name' => _( 'Afyon' ) ),
			'04' => array( 'name' => _( 'Ağrı' ) ),
			'68' => array( 'name' => _( 'Aksaray' ) ),
			'05' => array( 'name' => _( 'Amasya' ) ),
			'06' => array( 'name' => _( 'Ankara' ) ),
			'07' => array( 'name' => _( 'Antalya' ) ),
			'75' => array( 'name' => _( 'Ardahan' ) ),
			'08' => array( 'name' => _( 'Artvin' ) ),
			'09' => array( 'name' => _( 'Aydın' ) ),
			'10' => array( 'name' => _( 'Balıkesir' ) ),
			'74' => array( 'name' => _( 'Bartın' ) ),
			'72' => array( 'name' => _( 'Batman' ) ),
			'69' => array( 'name' => _( 'Bayburt' ) ),
			'11' => array( 'name' => _( 'Bilecik' ) ),
			'12' => array( 'name' => _( 'Bingöl' ) ),
			'13' => array( 'name' => _( 'Bitlis' ) ),
			'14' => array( 'name' => _( 'Bolu' ) ),
			'15' => array( 'name' => _( 'Burdur' ) ),
			'16' => array( 'name' => _( 'Bursa' ) ),
			'17' => array( 'name' => _( 'Çanakkale' ) ),
			'18' => array( 'name' => _( 'Çankırı' ) ),
			'19' => array( 'name' => _( 'Çorum' ) ),
			'20' => array( 'name' => _( 'Denizli' ) ),
			'21' => array( 'name' => _( 'Diyarbakır' ) ),
			'81' => array( 'name' => _( 'Düzce' ) ),
			'22' => array( 'name' => _( 'Edirne' ) ),
			'23' => array( 'name' => _( 'Elazığ' ) ),
			'24' => array( 'name' => _( 'Erzincan' ) ),
			'25' => array( 'name' => _( 'Erzurum' ) ),
			'26' => array( 'name' => _( 'Eskişehir' ) ),
			'27' => array( 'name' => _( 'Gaziantep' ) ),
			'28' => array( 'name' => _( 'Giresun' ) ),
			'29' => array( 'name' => _( 'Gümüşhane' ) ),
			'30' => array( 'name' => _( 'Hakkâri' ) ),
			'31' => array( 'name' => _( 'Hatay' ) ),
			'76' => array( 'name' => _( 'Iğdır' ) ),
			'32' => array( 'name' => _( 'Isparta' ) ),
			'33' => array( 'name' => _( 'İçel' ) ),
			'34' => array( 'name' => _( 'İstanbul' ) ),
			'35' => array( 'name' => _( 'İzmir' ) ),
			'46' => array( 'name' => _( 'Kahramanmaraş' ) ),
			'78' => array( 'name' => _( 'Karabük' ) ),
			'70' => array( 'name' => _( 'Karaman' ) ),
			'36' => array( 'name' => _( 'Kars' ) ),
			'37' => array( 'name' => _( 'Kastamonu' ) ),
			'38' => array( 'name' => _( 'Kayseri' ) ),
			'71' => array( 'name' => _( 'Kırıkkale' ) ),
			'39' => array( 'name' => _( 'Kırklareli' ) ),
			'40' => array( 'name' => _( 'Kırşehir' ) ),
			'79' => array( 'name' => _( 'Kilis' ) ),
			'41' => array( 'name' => _( 'Kocaeli' ) ),
			'42' => array( 'name' => _( 'Konya' ) ),
			'43' => array( 'name' => _( 'Kütahya' ) ),
			'44' => array( 'name' => _( 'Malatya' ) ),
			'45' => array( 'name' => _( 'Manisa' ) ),
			'47' => array( 'name' => _( 'Mardin' ) ),
			'48' => array( 'name' => _( 'Muğla' ) ),
			'49' => array( 'name' => _( 'Muş' ) ),
			'50' => array( 'name' => _( 'Nevşehir' ) ),
			'51' => array( 'name' => _( 'Niğde' ) ),
			'52' => array( 'name' => _( 'Ordu' ) ),
			'80' => array( 'name' => _( 'Osmaniye' ) ),
			'53' => array( 'name' => _( 'Rize' ) ),
			'54' => array( 'name' => _( 'Sakarya' ) ),
			'55' => array( 'name' => _( 'Samsun' ) ),
			'56' => array( 'name' => _( 'Siirt' ) ),
			'57' => array( 'name' => _( 'Sinop' ) ),
			'58' => array( 'name' => _( 'Sivas' ) ),
			'63' => array( 'name' => _( 'Şanlıurfa' ) ),
			'73' => array( 'name' => _( 'Şırnak' ) ),
			'59' => array( 'name' => _( 'Tekirdağ' ) ),
			'60' => array( 'name' => _( 'Tokat' ) ),
			'61' => array( 'name' => _( 'Trabzon' ) ),
			'62' => array( 'name' => _( 'Tunceli' ) ),
			'64' => array( 'name' => _( 'Uşak' ) ),
			'65' => array( 'name' => _( 'Van' ) ),
			'77' => array( 'name' => _( 'Yalova' ) ),
			'66' => array( 'name' => _( 'Yozgat' ) ),
			'67' => array( 'name' => _( 'Zonguldak' ) )
		) );
			break;
		case 'TT':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'CTT' => array( 'name' => _( 'Couva-Tabaquite-Talparo' ) ),
			'DMN' => array( 'name' => _( 'Diego Martin' ) ),
			'ETO' => array( 'name' => _( 'Eastern Tobago' ) ),
			'PED' => array( 'name' => _( 'Penal-Debe' ) ),
			'PRT' => array( 'name' => _( 'Princes Town' ) ),
			'RCM' => array( 'name' => _( 'Rio Claro-Mayaro' ) ),
			'SGE' => array( 'name' => _( 'Sangre Grande' ) ),
			'SJL' => array( 'name' => _( 'San Juan-Laventille' ) ),
			'SIP' => array( 'name' => _( 'Siparia' ) ),
			'TUP' => array( 'name' => _( 'Tunapuna-Piarco' ) ),
			'WTO' => array( 'name' => _( 'Western Tobago' ) ),
			'ARI' => array( 'name' => _( 'Arima' ) ),
			'CHA' => array( 'name' => _( 'Chaguanas' ) ),
			'PTF' => array( 'name' => _( 'Point Fortin' ) ),
			'POS' => array( 'name' => _( 'Port of Spain' ) ),
			'SFO' => array( 'name' => _( 'San Fernando' ) )
		) );
			break;
		case 'TV':
			return array(
		'regions_label' => _( 'Island council' ),
		'regions' => array(
			'FUN' => array( 'name' => _( 'Funafuti' ) ),
			'NMG' => array( 'name' => _( 'Nanumanga' ) ),
			'NMA' => array( 'name' => _( 'Nanumea' ) ),
			'NIT' => array( 'name' => _( 'Niutao' ) ),
			'NIU' => array( 'name' => _( 'Nui' ) ),
			'NKF' => array( 'name' => _( 'Nukufetau' ) ),
			'NKL' => array( 'name' => _( 'Nukulaelae' ) ),
			'VAI' => array( 'name' => _( 'Vaitupu' ) )
		) );
			break;
		case 'TW':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'CHA' => array( 'name' => _( 'Changhua' ) ),
			'CYQ' => array( 'name' => _( 'Chiayi' ) ),
			'HSQ' => array( 'name' => _( 'Hsinchu' ) ),
			'HUA' => array( 'name' => _( 'Hualien' ) ),
			'ILA' => array( 'name' => _( 'Ilan' ) ),
			'KHQ' => array( 'name' => _( 'Kaohsiung' ) ),
			'MIA' => array( 'name' => _( 'Miaoli' ) ),
			'NAN' => array( 'name' => _( 'Nantou' ) ),
			'PEN' => array( 'name' => _( 'Penghu' ) ),
			'PIF' => array( 'name' => _( 'Pingtung' ) ),
			'TXQ' => array( 'name' => _( 'Taichung' ) ),
			'TNQ' => array( 'name' => _( 'Tainan' ) ),
			'TPQ' => array( 'name' => _( 'Taipei' ) ),
			'TTT' => array( 'name' => _( 'Taitung' ) ),
			'TAO' => array( 'name' => _( 'Taoyuan' ) ),
			'YUN' => array( 'name' => _( 'Yunlin' ) ),
			'CYI' => array( 'name' => _( 'Chiay City' ) ),
			'HSZ' => array( 'name' => _( 'Hsinchui City' ) ),
			'KEE' => array( 'name' => _( 'Keelung City' ) ),
			'TXG' => array( 'name' => _( 'Taichung City' ) ),
			'TNN' => array( 'name' => _( 'Tainan City' ) ),
			'KHH' => array( 'name' => _( 'Kaohsiung City' ) ),
			'TPE' => array( 'name' => _( 'Taipei City' ) )
		) );
			break;
		case 'TZ':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Arusha' ) ),
			'02' => array( 'name' => _( 'Dar-es-Salaam' ) ),
			'03' => array( 'name' => _( 'Dodoma' ) ),
			'04' => array( 'name' => _( 'Iringa' ) ),
			'05' => array( 'name' => _( 'Kagera' ) ),
			'06' => array( 'name' => _( 'Kaskazini Pemba' ) ),
			'07' => array( 'name' => _( 'Kaskazini Unguja' ) ),
			'08' => array( 'name' => _( 'Kigoma' ) ),
			'09' => array( 'name' => _( 'Kilimanjaro' ) ),
			'10' => array( 'name' => _( 'Kusini Pemba' ) ),
			'11' => array( 'name' => _( 'Kusini Unguja' ) ),
			'12' => array( 'name' => _( 'Lindi' ) ),
			'26' => array( 'name' => _( 'Manyara' ) ),
			'13' => array( 'name' => _( 'Mara' ) ),
			'14' => array( 'name' => _( 'Mbeya' ) ),
			'15' => array( 'name' => _( 'Mjini Magharibi' ) ),
			'16' => array( 'name' => _( 'Morogoro' ) ),
			'17' => array( 'name' => _( 'Mtwara' ) ),
			'18' => array( 'name' => _( 'Mwanza' ) ),
			'19' => array( 'name' => _( 'Pwani' ) ),
			'20' => array( 'name' => _( 'Rukwa' ) ),
			'21' => array( 'name' => _( 'Ruvuma' ) ),
			'22' => array( 'name' => _( 'Shinyanga' ) ),
			'23' => array( 'name' => _( 'Singida' ) ),
			'24' => array( 'name' => _( 'Tabora' ) ),
			'25' => array( 'name' => _( 'Tanga' ) )
		) );
			break;
		case 'UA':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'71' => array( 'name' => _( 'Cherkas\'ka Oblast\'' ) ),
			'74' => array( 'name' => _( 'Chernihivs\'ka Oblast\'' ) ),
			'77' => array( 'name' => _( 'Chernivets\'ka Oblast\'' ) ),
			'12' => array( 'name' => _( 'Dnipropetrovs\'ka Oblast\'' ) ),
			'14' => array( 'name' => _( 'Donets\'ka Oblast\'' ) ),
			'26' => array( 'name' => _( 'Ivano-Frankivs\'ka Oblast\'' ) ),
			'63' => array( 'name' => _( 'Kharkivs\'ka Oblast\'' ) ),
			'65' => array( 'name' => _( 'Khersons\'ka Oblast\'' ) ),
			'68' => array( 'name' => _( 'Khmel\'nyts\'ka Oblast\'' ) ),
			'35' => array( 'name' => _( 'Kirovohrads\'ka Oblast\'' ) ),
			'32' => array( 'name' => _( 'Kyïvs\'ka Oblast\'' ) ),
			'09' => array( 'name' => _( 'Luhans\'ka Oblast\'' ) ),
			'46' => array( 'name' => _( 'L\'vivs\'ka Oblast\'' ) ),
			'48' => array( 'name' => _( 'Mykolaïvs\'ka Oblast\'' ) ),
			'51' => array( 'name' => _( 'Odes\'ka Oblast\'' ) ),
			'53' => array( 'name' => _( 'Poltavs\'ka Oblast\'' ) ),
			'56' => array( 'name' => _( 'Rivnens\'ka Oblast\'' ) ),
			'59' => array( 'name' => _( 'Sums \'ka Oblast\'' ) ),
			'61' => array( 'name' => _( 'Ternopil\'s\'ka Oblast\'' ) ),
			'05' => array( 'name' => _( 'Vinnyts\'ka Oblast\'' ) ),
			'07' => array( 'name' => _( 'Volyns\'ka Oblast\'' ) ),
			'21' => array( 'name' => _( 'Zakarpats\'ka Oblast\'' ) ),
			'23' => array( 'name' => _( 'Zaporiz\'ka Oblast\'' ) ),
			'18' => array( 'name' => _( 'Zhytomyrs\'ka Oblast\'' ) ),
			'43' => array( 'name' => _( 'Respublika Krym' ) ),
			'30' => array( 'name' => _( 'Kyïvs\'ka mis\'ka rada' ) ),
			'40' => array( 'name' => _( 'Sevastopol' ) )
		) );
			break;
		case 'UG':
			return array(
		'regions_label' => _( 'Geographical region' ),
		'subregions_label' => _( 'District' ),
		'regions' => array(
			'C' => array(
				'name' => _( 'Central' ),
				'subregions' => array(
					'101' => array( 'name' => _( 'Kalangala' ) ),
					'102' => array( 'name' => _( 'Kampala' ) ),
					'112' => array( 'name' => _( 'Kayunga' ) ),
					'103' => array( 'name' => _( 'Kiboga' ) ),
					'104' => array( 'name' => _( 'Luwero' ) ),
					'116' => array( 'name' => _( 'Lyantonde' ) ),
					'105' => array( 'name' => _( 'Masaka' ) ),
					'114' => array( 'name' => _( 'Mityana' ) ),
					'106' => array( 'name' => _( 'Mpigi' ) ),
					'107' => array( 'name' => _( 'Mubende' ) ),
					'108' => array( 'name' => _( 'Mukono' ) ),
					'115' => array( 'name' => _( 'Nakaseke' ) ),
					'109' => array( 'name' => _( 'Nakasongola' ) ),
					'110' => array( 'name' => _( 'Rakai' ) ),
					'111' => array( 'name' => _( 'Sembabule' ) ),
					'113' => array( 'name' => _( 'Wakiso' ) )
			) ),
			'E' => array(
				'name' => _( 'Eastern' ),
				'subregions' => array(
					'216' => array( 'name' => _( 'Amuria' ) ),
					'217' => array( 'name' => _( 'Budaka' ) ),
					'223' => array( 'name' => _( 'Bududa' ) ),
					'201' => array( 'name' => _( 'Bugiri' ) ),
					'224' => array( 'name' => _( 'Bukedea' ) ),
					'218' => array( 'name' => _( 'Bukwa' ) ),
					'202' => array( 'name' => _( 'Busia' ) ),
					'219' => array( 'name' => _( 'Butaleja' ) ),
					'203' => array( 'name' => _( 'Iganga' ) ),
					'204' => array( 'name' => _( 'Jinja' ) ),
					'213' => array( 'name' => _( 'Kaberamaido' ) ),
					'220' => array( 'name' => _( 'Kaliro' ) ),
					'205' => array( 'name' => _( 'Kamuli' ) ),
					'206' => array( 'name' => _( 'Kapchorwa' ) ),
					'207' => array( 'name' => _( 'Katakwi' ) ),
					'208' => array( 'name' => _( 'Kumi' ) ),
					'221' => array( 'name' => _( 'Manafwa' ) ),
					'214' => array( 'name' => _( 'Mayuge' ) ),
					'209' => array( 'name' => _( 'Mbale' ) ),
					'222' => array( 'name' => _( 'Namutumba' ) ),
					'210' => array( 'name' => _( 'Pallisa' ) ),
					'215' => array( 'name' => _( 'Sironko' ) ),
					'211' => array( 'name' => _( 'Soroti' ) ),
					'212' => array( 'name' => _( 'Tororo' ) )
				) ),
				'N' => array( 
					'name' => _( 'Northern' ),
					'subregions' => array(
						'317' => array( 'name' => _( 'Abim' ) ),
						'301' => array( 'name' => _( 'Adjumani' ) ),
						'314' => array( 'name' => _( 'Amolatar' ) ),
						'319' => array( 'name' => _( 'Amuru' ) ),
						'302' => array( 'name' => _( 'Apac' ) ),
						'303' => array( 'name' => _( 'Arua' ) ),
						'318' => array( 'name' => _( 'Dokolo' ) ),
						'304' => array( 'name' => _( 'Gulu' ) ),
						'315' => array( 'name' => _( 'Kaabong' ) ),
						'305' => array( 'name' => _( 'Kitgum' ) ),
						'316' => array( 'name' => _( 'Koboko' ) ),
						'306' => array( 'name' => _( 'Kotido' ) ),
						'307' => array( 'name' => _( 'Lira' ) ),
						'320' => array( 'name' => _( 'Maracha' ) ),
						'308' => array( 'name' => _( 'Moroto' ) ),
						'309' => array( 'name' => _( 'Moyo' ) ),
						'311' => array( 'name' => _( 'Nakapiripirit' ) ),
						'310' => array( 'name' => _( 'Nebbi' ) ),
						'321' => array( 'name' => _( 'Oyam' ) ),
						'312' => array( 'name' => _( 'Pader' ) ),
						'313' => array( 'name' => _( 'Yumbe' ) )
				) ),
				'W' => array(
					'name' => _( 'Western' ),
					'subregions' => array(
						'419' => array( 'name' => _( 'Buliisa' ) ),
						'401' => array( 'name' => _( 'Bundibugyo' ) ),
						'402' => array( 'name' => _( 'Bushenyi' ) ),
						'403' => array( 'name' => _( 'Hoima' ) ),
						'416' => array( 'name' => _( 'Ibanda' ) ),
						'417' => array( 'name' => _( 'Isingiro' ) ),
						'404' => array( 'name' => _( 'Kabale' ) ),
						'405' => array( 'name' => _( 'Kabarole' ) ),
						'413' => array( 'name' => _( 'Kamwenge' ) ),
						'414' => array( 'name' => _( 'Kanungu' ) ),
						'406' => array( 'name' => _( 'Kasese' ) ),
						'407' => array( 'name' => _( 'Kibaale' ) ),
						'418' => array( 'name' => _( 'Kiruhura' ) ),
						'408' => array( 'name' => _( 'Kisoro' ) ),
						'415' => array( 'name' => _( 'Kyenjojo' ) ),
						'409' => array( 'name' => _( 'Masindi' ) ),
						'410' => array( 'name' => _( 'Mbarara' ) ),
						'411' => array( 'name' => _( 'Ntungamo' ) ),
						'412' => array( 'name' => _( 'Rukungiri' ) )
				) ),
		) );
			break;
		case 'UM':
			return array(
		'regions_label' => _( 'Territory' ),
		'regions' => array(
				81 => array( 'name' => _( 'Baker Island' ) ),
				84 => array( 'name' => _( 'Howland Island' ) ),
				86 => array( 'name' => _( 'Jarvis Island' ) ),
				67 => array( 'name' => _( 'Johnston Atoll' ) ),
				89 => array( 'name' => _( 'Kingman Reef' ) ),
				71 => array( 'name' => _( 'Midway Islands' ) ),
				76 => array( 'name' => _( 'Navassa Island' ) ),
				95 => array( 'name' => _( 'Palmyra Atoll' ) ),
				79 => array( 'name' => _( 'Wake Island' ) )
		) );
			break;
		case 'US':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'AL' => array( 'name' => _( 'Alabama' ) ),
			'AK' => array( 'name' => _( 'Alaska' ) ),
			'AZ' => array( 'name' => _( 'Arizona' ) ),
			'AR' => array( 'name' => _( 'Arkansas' ) ),
			'CA' => array( 'name' => _( 'California' ) ),
			'CO' => array( 'name' => _( 'Colorado' ) ),
			'CT' => array( 'name' => _( 'Connecticut' ) ),
			'DE' => array( 'name' => _( 'Delaware' ) ),
			'FL' => array( 'name' => _( 'Florida' ) ),
			'GA' => array( 'name' => _( 'Georgia' ) ),
			'HI' => array( 'name' => _( 'Hawaii' ) ),
			'ID' => array( 'name' => _( 'Idaho' ) ),
			'IL' => array( 'name' => _( 'Illinois' ) ),
			'IN' => array( 'name' => _( 'Indiana' ) ),
			'IA' => array( 'name' => _( 'Iowa' ) ),
			'KS' => array( 'name' => _( 'Kansas' ) ),
			'KY' => array( 'name' => _( 'Kentucky' ) ),
			'LA' => array( 'name' => _( 'Louisiana' ) ),
			'ME' => array( 'name' => _( 'Maine' ) ),
			'MD' => array( 'name' => _( 'Maryland' ) ),
			'MA' => array( 'name' => _( 'Massachusetts' ) ),
			'MI' => array( 'name' => _( 'Michigan' ) ),
			'MN' => array( 'name' => _( 'Minnesota' ) ),
			'MS' => array( 'name' => _( 'Mississippi' ) ),
			'MO' => array( 'name' => _( 'Missouri' ) ),
			'MT' => array( 'name' => _( 'Montana' ) ),
			'NE' => array( 'name' => _( 'Nebraska' ) ),
			'NV' => array( 'name' => _( 'Nevada' ) ),
			'NH' => array( 'name' => _( 'New Hampshire' ) ),
			'NJ' => array( 'name' => _( 'New Jersey' ) ),
			'NM' => array( 'name' => _( 'New Mexico' ) ),
			'NY' => array( 'name' => _( 'New York' ) ),
			'NC' => array( 'name' => _( 'North Carolina' ) ),
			'ND' => array( 'name' => _( 'North Dakota' ) ),
			'OH' => array( 'name' => _( 'Ohio' ) ),
			'OK' => array( 'name' => _( 'Oklahoma' ) ),
			'OR' => array( 'name' => _( 'Oregon' ) ),
			'PA' => array( 'name' => _( 'Pennsylvania' ) ),
			'RI' => array( 'name' => _( 'Rhode Island' ) ),
			'SC' => array( 'name' => _( 'South Carolina' ) ),
			'SD' => array( 'name' => _( 'South Dakota' ) ),
			'TN' => array( 'name' => _( 'Tennessee' ) ),
			'TX' => array( 'name' => _( 'Texas' ) ),
			'UT' => array( 'name' => _( 'Utah' ) ),
			'VT' => array( 'name' => _( 'Vermont' ) ),
			'VA' => array( 'name' => _( 'Virginia' ) ),
			'WA' => array( 'name' => _( 'Washington' ) ),
			'WV' => array( 'name' => _( 'West Virginia' ) ),
			'WI' => array( 'name' => _( 'Wisconsin' ) ),
			'WY' => array( 'name' => _( 'Wyoming' ) ),
			'DC' => array( 'name' => _( 'District of Columbia' ) ),
			'AS' => array( 'name' => _( 'American Samoa' ) ),
			'GU' => array( 'name' => _( 'Guam' ) ),
			'MP' => array( 'name' => _( 'Northern Mariana Islands' ) ),
			'PR' => array( 'name' => _( 'Puerto Rico' ) ),
			'UM' => array( 'name' => _( 'United States Minor Outlying Islands' ) ),
			'VI' => array( 'name' => _( 'Virgin Islands' ) )
		) );
			break;
		case 'UY':
			return array(
		'regions_label' => _( 'Department' ),
		'regions' => array(
			'AR' => array( 'name' => _( 'Artigas' ) ),
			'CA' => array( 'name' => _( 'Canelones' ) ),
			'CL' => array( 'name' => _( 'Cerro Largo' ) ),
			'CO' => array( 'name' => _( 'Colonia' ) ),
			'DU' => array( 'name' => _( 'Durazno' ) ),
			'FS' => array( 'name' => _( 'Flores' ) ),
			'FD' => array( 'name' => _( 'Florida' ) ),
			'LA' => array( 'name' => _( 'Lavalleja' ) ),
			'MA' => array( 'name' => _( 'Maldonado' ) ),
			'MO' => array( 'name' => _( 'Montevideo' ) ),
			'PA' => array( 'name' => _( 'Paysandú' ) ),
			'RN' => array( 'name' => _( 'Río Negro' ) ),
			'RV' => array( 'name' => _( 'Rivera' ) ),
			'RO' => array( 'name' => _( 'Rocha' ) ),
			'SA' => array( 'name' => _( 'Salto' ) ),
			'SJ' => array( 'name' => _( 'San José' ) ),
			'SO' => array( 'name' => _( 'Soriano' ) ),
			'TA' => array( 'name' => _( 'Tacuarembó' ) ),
			'TT' => array( 'name' => _( 'Treinta y Tres' ) )
		) );
			break;
		case 'UZ':
			return array(
		'regions_label' => _( 'Region' ),
		'regions' => array(
			'TK' => array( 'name' => _( 'Toshkent' ) ),
			'AN' => array( 'name' => _( 'Andijon' ) ),
			'BU' => array( 'name' => _( 'Buxoro' ) ),
			'FA' => array( 'name' => _( 'Farg\'ona' ) ),
			'JI' => array( 'name' => _( 'Jizzax' ) ),
			'NG' => array( 'name' => _( 'Namangan' ) ),
			'NW' => array( 'name' => _( 'Navoiy' ) ),
			'QA' => array( 'name' => _( 'Qashqadaryo' ) ),
			'SA' => array( 'name' => _( 'Samarqand' ) ),
			'SI' => array( 'name' => _( 'Sirdaryo' ) ),
			'SU' => array( 'name' => _( 'Surxondaryo' ) ),
			'TO' => array( 'name' => _( 'Toshkent' ) ),
			'XO' => array( 'name' => _( 'Xorazm' ) ),
			'QR' => array( 'name' => _( 'Qoraqalpog\'iston Respublikasi' ) )
		) );
			break;
		case 'VC':
			return array(
		'regions_label' => _( 'Parish' ),
		'regions' => array(
			'01' => array( 'name' => _( 'Charlotte' ) ),
			'06' => array( 'name' => _( 'Grenadines' ) ),
			'02' => array( 'name' => _( 'Saint Andrew' ) ),
			'03' => array( 'name' => _( 'Saint David' ) ),
			'04' => array( 'name' => _( 'Saint George' ) ),
			'05' => array( 'name' => _( 'Saint Patrick' ) )
		) );
			break;
		case 'VE':
			return array(
		'regions_label' => _( 'State' ),
		'regions' => array(
			'W' => array( 'name' => _( 'Dependencias Federales' ) ),
			'A' => array( 'name' => _( 'Distrito Federal' ) ),
			'Z' => array( 'name' => _( 'Amazonas' ) ),
			'B' => array( 'name' => _( 'Anzoátegui' ) ),
			'C' => array( 'name' => _( 'Apure' ) ),
			'D' => array( 'name' => _( 'Aragua' ) ),
			'E' => array( 'name' => _( 'Barinas' ) ),
			'F' => array( 'name' => _( 'Bolívar' ) ),
			'G' => array( 'name' => _( 'Carabobo' ) ),
			'H' => array( 'name' => _( 'Cojedes' ) ),
			'Y' => array( 'name' => _( 'Delta Amacuro' ) ),
			'I' => array( 'name' => _( 'Falcón' ) ),
			'J' => array( 'name' => _( 'Guárico' ) ),
			'K' => array( 'name' => _( 'Lara' ) ),
			'L' => array( 'name' => _( 'Mérida' ) ),
			'M' => array( 'name' => _( 'Miranda' ) ),
			'N' => array( 'name' => _( 'Monagas' ) ),
			'O' => array( 'name' => _( 'Nueva Esparta' ) ),
			'P' => array( 'name' => _( 'Portuguesa' ) ),
			'R' => array( 'name' => _( 'Sucre' ) ),
			'S' => array( 'name' => _( 'Táchira' ) ),
			'T' => array( 'name' => _( 'Trujillo' ) ),
			'X' => array( 'name' => _( 'Vargas' ) ),
			'U' => array( 'name' => _( 'Yaracuy' ) ),
			'V' => array( 'name' => _( 'Zulia' ) )
		) );
			break;
		case 'VN':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'44' => array( 'name' => _( 'An Giang' ) ),
			'43' => array( 'name' => _( 'Bà Rịa - Vũng Tàu' ) ),
			'53' => array( 'name' => _( 'Bắc Kạn' ) ),
			'54' => array( 'name' => _( 'Bắc Giang' ) ),
			'55' => array( 'name' => _( 'Bạc Liêu' ) ),
			'56' => array( 'name' => _( 'Bắc Ninh' ) ),
			'50' => array( 'name' => _( 'Bến Tre' ) ),
			'31' => array( 'name' => _( 'Bình Định' ) ),
			'57' => array( 'name' => _( 'Bình Dương' ) ),
			'58' => array( 'name' => _( 'Bình Phước' ) ),
			'40' => array( 'name' => _( 'Bình Thuận' ) ),
			'59' => array( 'name' => _( 'Cà Mau' ) ),
			'48' => array( 'name' => _( 'Cần Thơ' ) ),
			'04' => array( 'name' => _( 'Cao Bằng' ) ),
			'60' => array( 'name' => _( 'Đà Nẵng, thành phố' ) ),
			'33' => array( 'name' => _( 'Đắc Lắk' ) ),
			'72' => array( 'name' => _( 'Đắk Nông' ) ),
			'71' => array( 'name' => _( 'Điện Biên' ) ),
			'39' => array( 'name' => _( 'Đồng Nai' ) ),
			'45' => array( 'name' => _( 'Đồng Tháp' ) ),
			'30' => array( 'name' => _( 'Gia Lai' ) ),
			'03' => array( 'name' => _( 'Hà Giang' ) ),
			'63' => array( 'name' => _( 'Hà Nam' ) ),
			'64' => array( 'name' => _( 'Hà Nội, thủ đô' ) ),
			'15' => array( 'name' => _( 'Hà Tây' ) ),
			'23' => array( 'name' => _( 'Hà Tỉnh' ) ),
			'61' => array( 'name' => _( 'Hải Duong' ) ),
			'62' => array( 'name' => _( 'Hải Phòng, thành phố' ) ),
			'73' => array( 'name' => _( 'Hậu Giang' ) ),
			'14' => array( 'name' => _( 'Hoà Bình' ) ),
			'65' => array( 'name' => _( 'Hồ Chí Minh, thành phố [Sài Gòn]' ) ),
			'66' => array( 'name' => _( 'Hưng Yên' ) ),
			'34' => array( 'name' => _( 'Khánh Hòa' ) ),
			'47' => array( 'name' => _( 'Kiên Giang' ) ),
			'28' => array( 'name' => _( 'Kon Tum' ) ),
			'01' => array( 'name' => _( 'Lai Châu' ) ),
			'35' => array( 'name' => _( 'Lâm Đồng' ) ),
			'09' => array( 'name' => _( 'Lạng Sơn' ) ),
			'02' => array( 'name' => _( 'Lào Cai' ) ),
			'41' => array( 'name' => _( 'Long An' ) ),
			'67' => array( 'name' => _( 'Nam Định' ) ),
			'22' => array( 'name' => _( 'Nghệ An' ) ),
			'18' => array( 'name' => _( 'Ninh Bình' ) ),
			'36' => array( 'name' => _( 'Ninh Thuận' ) ),
			'68' => array( 'name' => _( 'Phú Thọ' ) ),
			'32' => array( 'name' => _( 'Phú Yên' ) ),
			'24' => array( 'name' => _( 'Quảng Bình' ) ),
			'27' => array( 'name' => _( 'Quảng Nam' ) ),
			'29' => array( 'name' => _( 'Quảng Ngãi' ) ),
			'13' => array( 'name' => _( 'Quảng Ninh' ) ),
			'25' => array( 'name' => _( 'Quảng Trị' ) ),
			'52' => array( 'name' => _( 'Sóc Trăng' ) ),
			'05' => array( 'name' => _( 'Sơn La' ) ),
			'37' => array( 'name' => _( 'Tây Ninh' ) ),
			'20' => array( 'name' => _( 'Thái Bình' ) ),
			'69' => array( 'name' => _( 'Thái Nguyên' ) ),
			'21' => array( 'name' => _( 'Thanh Hóa' ) ),
			'26' => array( 'name' => _( 'Thừa Thiên-Huế' ) ),
			'46' => array( 'name' => _( 'Tiền Giang' ) ),
			'51' => array( 'name' => _( 'Trà Vinh' ) ),
			'07' => array( 'name' => _( 'Tuyên Quang' ) ),
			'49' => array( 'name' => _( 'Vĩnh Long' ) ),
			'70' => array( 'name' => _( 'Vĩnh Phúc' ) ),
			'06' => array( 'name' => _( 'Yên Bái' ) )
		) );
			break;
		case 'VU':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'MAP' => array( 'name' => _( 'Malampa' ) ),
			'PAM' => array( 'name' => _( 'Pénama' ) ),
			'SAM' => array( 'name' => _( 'Sanma' ) ),
			'SEE' => array( 'name' => _( 'Shéfa' ) ),
			'TAE' => array( 'name' => _( 'Taféa' ) ),
			'TOB' => array( 'name' => _( 'Torba' ) )
		) );
			break;
		case 'WS':
			return array(
		'regions_label' => _( 'District' ),
		'regions' => array(
			'AA' => array( 'name' => _( 'A\'ana' ) ),
			'AL' => array( 'name' => _( 'Aiga-i-le-Tai' ) ),
			'AT' => array( 'name' => _( 'Atua' ) ),
			'FA' => array( 'name' => _( 'Fa\'asaleleaga' ) ),
			'GE' => array( 'name' => _( 'Gaga\'emauga' ) ),
			'GI' => array( 'name' => _( 'Gagaifomauga' ) ),
			'PA' => array( 'name' => _( 'Palauli' ) ),
			'SA' => array( 'name' => _( 'Satupa\'itea' ) ),
			'TU' => array( 'name' => _( 'Tuamasaga' ) ),
			'VF' => array( 'name' => _( 'Va\'a-o-Fonoti' ) ),
			'VS' => array( 'name' => _( 'Vaisigano' ) )
		) );
			break;
		case 'YE':
			return array(
		'regions_label' => _( 'Governorate' ),
		'regions' => array(
			'AB' => array( 'name' => _( 'Abyān' ) ),
			'AD' => array( 'name' => _( '\'Adan' ) ),
			'DA' => array( 'name' => _( 'Aḑ Ḑāli‘' ) ),
			'BA' => array( 'name' => _( 'Al Bayḑā\'' ) ),
			'MU' => array( 'name' => _( 'Al Ḩudaydah' ) ),
			'JA' => array( 'name' => _( 'Al Jawf' ) ),
			'MR' => array( 'name' => _( 'Al Mahrah' ) ),
			'MW' => array( 'name' => _( 'Al Maḩwīt' ) ),
			'AM' => array( 'name' => _( '\'Amrān' ) ),
			'DH' => array( 'name' => _( 'Dhamār' ) ),
			'HD' => array( 'name' => _( 'Ḩaḑramawt' ) ),
			'HJ' => array( 'name' => _( 'Ḩajjah' ) ),
			'IB' => array( 'name' => _( 'Ibb' ) ),
			'LA' => array( 'name' => _( 'Laḩij' ) ),
			'MA' => array( 'name' => _( 'Ma\'rib' ) ),
			'RA' => array( 'name' => _( 'Raymah' ) ),
			'SD' => array( 'name' => _( 'Şa\'dah' ) ),
			'SN' => array( 'name' => _( 'Şan\'ā\'' ) ),
			'SH' => array( 'name' => _( 'Shabwah' ) ),
			'TA' => array( 'name' => _( 'Tā\'izz' ) )
		) );
			break;
		case 'ZA':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'EC' => array( 'name' => _( 'Eastern Cape' ) ),
			'FS' => array( 'name' => _( 'Free State' ) ),
			'GT' => array( 'name' => _( 'Gauteng' ) ),
			'NL' => array( 'name' => _( 'Kwazulu-Natal' ) ),
			'LP' => array( 'name' => _( 'Limpopo' ) ),
			'MP' => array( 'name' => _( 'Mpumalanga' ) ),
			'NC' => array( 'name' => _( 'Northern Cape' ) ),
			'NW' => array( 'name' => _( 'North-West (South Africa)' ) ),
			'WC' => array( 'name' => _( 'Western Cape' ) )
		) );
			break;
		case 'ZM':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'02' => array( 'name' => _( 'Central' ) ),
			'08' => array( 'name' => _( 'Copperbelt' ) ),
			'03' => array( 'name' => _( 'Eastern' ) ),
			'04' => array( 'name' => _( 'Luapula' ) ),
			'09' => array( 'name' => _( 'Lusaka' ) ),
			'05' => array( 'name' => _( 'Northern' ) ),
			'06' => array( 'name' => _( 'North-Western' ) ),
			'07' => array( 'name' => _( 'Southern (Zambia)' ) ),
			'01' => array( 'name' => _( 'Western' ) )
		) );
			break;
		case 'ZW':
			return array(
		'regions_label' => _( 'Province' ),
		'regions' => array(
			'BU' => array( 'name' => _( 'Bulawayo' ) ),
			'HA' => array( 'name' => _( 'Harare' ) ),
			'MA' => array( 'name' => _( 'Manicaland' ) ),
			'MC' => array( 'name' => _( 'Mashonaland Central' ) ),
			'ME' => array( 'name' => _( 'Mashonaland East' ) ),
			'MW' => array( 'name' => _( 'Mashonaland West' ) ),
			'MV' => array( 'name' => _( 'Masvingo' ) ),
			'MN' => array( 'name' => _( 'Matabeleland North' ) ),
			'MS' => array( 'name' => _( 'Matabeleland South' ) ),
			'MI' => array( 'name' => _( 'Midlands' ) )
		) );
			break;
	}
	return;
}
}
?>
