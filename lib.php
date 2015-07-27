<?php
// This file is part of the JoomdleBS theme for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Joomdle bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * Lib file for JoomdleBS theme
 *
 * @package   Joomdlebs theme
 * @copyright 2013-2015 Fernando Acedo, http://3-bits.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Process CSS
 **/

function joomdlebs_process_css($css, $theme) {

    // Set body background color.
    if (!empty($theme->settings->bodybgcolor)) {
        $bodybgcolor = $theme->settings->bodybgcolor;
    } else {
        $bodybgcolor = null;
    }
    $css = joomdlebs_set_bodybgcolor($css, $bodybgcolor);

    // Set link color.
    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = joomdlebs_set_linkcolor($css, $linkcolor);

    // Set link hover colour.
    if (!empty($theme->settings->linkcolor)) {
        $linkcolor = $theme->settings->linkcolor;
    } else {
        $linkcolor = null;
    }
    $css = joomdlebs_set_linkcolor($css, $linkcolor);

    // Set link hover color.
    if (!empty($theme->settings->linkhovercolor)) {
        $linkhovercolor = $theme->settings->linkhovercolor;
    } else {
        $linkhovercolor = null;
    }
    $css = joomdlebs_set_linkhovercolor($css, $linkhovercolor);

    // Set menu background color.
    if (!empty($theme->settings->menubgcolor)) {
        $menubgcolor = $theme->settings->menubgcolor;
    } else {
        $menubgcolor = null;
    }
    $css = joomdlebs_set_menubgcolor($css, $menubgcolor);

    // Set main font.
    if (!empty($theme->settings->fontname)) {
        $fontname = $theme->settings->fontname;
    } else {
        $fontname = null;
    }
    $css = joomdlebs_set_fontname($css, $fontname);

    // Set block headers name.
    if (!empty($theme->settings->fontheadername)) {
        $fontheadername = $theme->settings->fontheadername;
    } else {
        $fontheadername = null;
    }
    $css = joomdlebs_set_fontheadername($css, $fontheadername);

    // Set top margin.
    if (!empty($theme->settings->topmargin)) {
        $topmargin = $theme->settings->topmargin;
    } else {
        $topmargin = null;
    }
    $css = joomdlebs_set_topmargin($css, $topmargin);

    // Set Custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = joomdlebs_set_customcss($css, $customcss);

    return $css;
}

/**
 * Set Body BG Color
 **/

function joomdlebs_set_bodybgcolor($css, $bodybgcolor) {
    $tag = '[[setting:bodybgcolor]]';
    $css = str_replace($tag, $bodybgcolor, $css);
    return $css;
}

/**
 * Set Link Color
 **/

function joomdlebs_set_linkcolor($css, $linkcolor) {
    $tag = '[[setting:linkcolor]]';
    $css = str_replace($tag, $linkcolor, $css);
    return $css;
}

/**
 * Set Link Hover Color
 **/

function joomdlebs_set_linkhovercolor($css, $linkhovercolor) {
    $tag = '[[setting:linkhovercolor]]';
    $css = str_replace($tag, $linkhovercolor, $css);
    return $css;
}

/**
 * Set Menu BG Color
 **/

function joomdlebs_set_menubgcolor($css, $menubgcolor) {
    $tag = '[[setting:menubgcolor]]';
    $css = str_replace($tag, $menubgcolor, $css);
    return $css;
}


/**
 * Set Main Font
 **/

function joomdlebs_set_fontname($css, $fontname) {
    $tag = '[[setting:fontname]]';
    $css = str_replace($tag, $fontname, $css);
    return $css;
}


/**
 * Set Header Font
 **/

function joomdlebs_set_fontheadername($css, $fontheadername) {
    $tag = '[[setting:fontheadername]]';
    $css = str_replace($tag, $fontheadername, $css);
    return $css;
}


/**
 * Set top Margin
 **/

function joomdlebs_set_topmargin($css, $topmargin) {
    $tag = '[[setting:topmargin]]';
    $css = str_replace($tag, $topmargin, $css);
    return $css;
}

/**
 * Set Custom CSS
 **/

function joomdlebs_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Load JQuery and plugins libraries.
 **/

function theme_joomdle_page_init(moodle_page $page) {
    $page->requires->jquery();
}
