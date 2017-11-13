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
 * @copyright 2013-2016 Fernando Acedo, http://3-bits.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Process CSS
 **/

defined('MOODLE_INTERNAL') || die();

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

    // Set menu text color.
    if (!empty($theme->settings->menutextcolor)) {
        $menutextcolor = $theme->settings->menutextcolor;
    } else {
        $menutextcolor = null;
    }
    $css = joomdlebs_set_menutextcolor($css, $menutextcolor);

    // Set block background color.
    if (!empty($theme->settings->blockbackgroundcolor)) {
        $blockbackgroundcolor = $theme->settings->blockbackgroundcolor;
    } else {
        $blockbackgroundcolor = null;
    }
    $css = joomdlebs_set_blockbackgroundcolor($css, $blockbackgroundcolor);

    // Set block border color.
    if (!empty($theme->settings->blockbordercolor)) {
        $blockbordercolor = $theme->settings->blockbordercolor;
    } else {
        $blockbordercolor = null;
    }
    $css = joomdlebs_set_blockbordercolor($css, $blockbordercolor);

    // Set block border size.
    if (!empty($theme->settings->blockbordersize)) {
        $blockbordersize = $theme->settings->blockbordersize;
    } else {
        $blockbordersize = null;
    }
    $css = joomdlebs_set_blockbordersize($css, $blockbordersize);

    // Set block border radius.
    if (!empty($theme->settings->blockborderradius)) {
        $blockborderradius = $theme->settings->blockborderradius;
    } else {
        $blockborderradius = null;
    }
    $css = joomdlebs_set_blockborderradius($css, $blockborderradius);

    // Set main font.
    if (!empty($theme->settings->fontname)) {
        $fontname = $theme->settings->fontname;
    } else {
        $fontname = null;
    }
    $css = joomdlebs_set_fontname($css, $fontname);

    // Set main font weight.
    if (!empty($theme->settings->fontweight)) {
        $fontweight = $theme->settings->fontweight;
    } else {
        $fontweight = null;
    }
    $css = joomdlebs_set_fontweight($css, $fontweight);

    // Set main font color.
    if (!empty($theme->settings->fontcolor)) {
        $fontcolor = $theme->settings->fontcolor;
    } else {
        $fontcolor = null;
    }
    $css = joomdlebs_set_fontcolor($css, $fontcolor);

    // Set header font name.
    if (!empty($theme->settings->fontheadername)) {
        $fontheadername = $theme->settings->fontheadername;
    } else {
        $fontheadername = null;
    }
    $css = joomdlebs_set_fontheadername($css, $fontheadername);

    // Set header font weight.
    if (!empty($theme->settings->fontheaderweight)) {
        $fontheaderweight = $theme->settings->fontheaderweight;
    } else {
        $fontheaderweight = null;
    }
    $css = joomdlebs_set_fontheaderweight($css, $fontheaderweight);

    // Set header font color.
    if (!empty($theme->settings->fontheadercolor)) {
        $fontheadercolor = $theme->settings->fontheadercolor;
    } else {
        $fontheadercolor = null;
    }
    $css = joomdlebs_set_fontheadercolor($css, $fontheadercolor);

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
 * Set Menu BG Color
 **/

function joomdlebs_set_menutextcolor($css, $menutextcolor) {
    $tag = '[[setting:menutextcolor]]';
    $css = str_replace($tag, $menutextcolor, $css);
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
 * Set Main Font Weight
 **/

function joomdlebs_set_fontweight($css, $fontweight) {
    $tag = '[[setting:fontweight]]';
    $css = str_replace($tag, $fontweight, $css);
    return $css;
}


/**
 * Set Main Font Color
 **/

function joomdlebs_set_fontcolor($css, $fontcolor) {
    $tag = '[[setting:fontcolor]]';
    $css = str_replace($tag, $fontcolor, $css);
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
 * Set Header Font Weight
 **/

function joomdlebs_set_fontheaderweight($css, $fontheaderweight) {
    $tag = '[[setting:fontheaderweight]]';
    $css = str_replace($tag, $fontheaderweight, $css);
    return $css;
}


/**
 * Set Header Font Color
 **/

function joomdlebs_set_fontheadercolor($css, $fontheadercolor) {
    $tag = '[[setting:fontheadercolor]]';
    $css = str_replace($tag, $fontheadercolor, $css);
    return $css;
}




/**
 * Set Block Background Color
 **/

function joomdlebs_set_blockbackgroundcolor($css, $blockbackgroundcolor) {
    $tag = '[[setting:blockbackgroundcolor]]';
    $css = str_replace($tag, $blockbackgroundcolor, $css);
    return $css;
}

/**
 * Set Block Border Color
 **/

function joomdlebs_set_blockbordercolor($css, $blockbordercolor) {
    $tag = '[[setting:blockbordercolor]]';
    $css = str_replace($tag, $blockbordercolor, $css);
    return $css;
}

/**
 * Set Block Border Size
 **/

function joomdlebs_set_blockbordersize($css, $blockbordersize) {
    $tag = '[[setting:blockbordersize]]';
    $css = str_replace($tag, $blockbordersize, $css);
    return $css;
}

/**
 * Set Block Border Radius
 **/

function joomdlebs_set_blockborderradius($css, $blockborderradius) {
    $tag = '[[setting:blockborderradius]]';
    $css = str_replace($tag, $blockborderradius, $css);
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
