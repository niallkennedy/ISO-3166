<?php
/**
 * Helpers for generating HTML markup from ISO 3166 arrays.
 *
 * @package ISO-3166
 * @author Niall Kennedy <niall@niallkennedy.com>
 * @version 1.0
 * @copyright Public Domain
 */

if ( !function_exists('_') ):
function _( $text, $domain='' ) {
	return $text;
}
endif;

/**
 * Generate a HTML5 section, label, and select element for an array of countries or territories.
 *
 * @param array $countries ISO 3166-1 alpha-2 countries with name and official_name mappings.
 * @param String $default pre-selected ISO 3166-1 alpha-2 country code.
 * @return String HTML5 section with label and select.
 */
function country_form_builder( array $countries, $default='' ) {
	if ( strlen($default)!==2 )
		$default = '';
	$s = sprintf( '<section id="country-section"><header><label for="countries">%s</label></header>', _('Country') );
	$s .= '<select id="countries" name="country"><option value="">&nbsp;</option>';
	foreach ( $countries as $code=>$country ) {
		if ( empty( $country ) || !isset($country['name']) )
			continue;
		$s .= '<option value="' . $code . '"';
		if ( $code === $default )
			$s .= ' selected="selected"';
		if ( isset( $country['official_name'] ) )
			$s .= ' label="' . htmlspecialchars( $country['official_name'] ) . '"';
		$s .= '>' . htmlspecialchars( $country['name'] ) . '</option>';
	}
	$s .= '</select></section>';
	return $s;
}

/**
 * Simplify building a single option
 *
 * @param String $code region code
 * @param String $name region name
 * @param String $default region code of the default selection
 * @return String HTML option element
 */
function single_region_option( $code, $name, $default ) {
	$s = '<option value="' . $code . '"';
	if ( $code == $default )
		$s .= ' selected="selected"';
	$s .= '>' . htmlspecialchars( $name ) . '</option>';
	return $s;
}

/**
 * Generate a HTML5 section, header, label, and select element for region selection.
 *
 * @param array $regions list of regions and region label
 * @param String default selected region code
 * @return String HTML5 section markup
 */
function region_form_builder( array $regions, $region_default=null ) {
	$s = '<section id="region-section">';
	$label = '<header><label id="region-label" for="region">%s</label></header>';
	if ( isset( $regions['regions_label'] ) )
		$s .= sprintf( $label, htmlspecialchars( $regions['regions_label'] ) );
	else
		$s .= sprintf( $label, 'Region' );
	unset( $label );
	$s .= '<select id="region" name="region">';
	$s .= '<option value=""';
	if ( empty( $region_default ) )
		$s .= ' selected="selected"';
	$s .= '>&nbsp;</option>';
	foreach ( $regions['regions'] as $region_code=>$region ) {
		if ( isset( $regions['subregions'] ) ) {
			$s .= '<optgroup label="' . htmlspecialchars( $region['name'] ) . '">';
			foreach ( $region['subregions'] as $subregion_code=>$subregion ) {
				$s .= single_region_option( $subregion_code, $subregion['name'], $region_default );
			}
			$s .= '</optgroup>';
		} else {
			$s .= single_region_option( $region_code, $region['name'], $region_default );
		}
	}
	$s .= '</select></section>';
	return $s;
}
?>
