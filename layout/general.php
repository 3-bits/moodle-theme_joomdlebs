<?php
// This file is part of the Joomdlebs theme for Moodle - http://moodle.org/
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
 * Moodle's Joomdlebs theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * Layout file for Joomdlebs theme
 *
 * @package   Joomdlebs theme
 * @copyright 2013-2015 Fernando Acedo, http://3-bits.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hasheader = (empty($PAGE->layout_options['noheader']));

$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));

$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$courseheader = $coursecontentheader = $coursecontentfooter = $coursefooter = '';

$fontname = str_replace(" ", "+", $PAGE->theme->settings->fontname);
$fontheadername = str_replace(" ", "+", $PAGE->theme->settings->fontheadername);

if (empty($PAGE->layout_options['nocourseheaderfooter'])) {
    $courseheader = $OUTPUT->course_header();
    $coursecontentheader = $OUTPUT->course_content_header();
    if (empty($PAGE->layout_options['nocoursefooter'])) {
        $coursecontentfooter = $OUTPUT->course_content_footer();
        $coursefooter = $OUTPUT->course_footer();
    }
}

$layout = 'pre-and-post';
if ($showsidepre && !$showsidepost) {
    if (!right_to_left()) {
        $layout = 'side-pre-only';
    } else {
        $layout = 'side-post-only';
    }
} else if ($showsidepost && !$showsidepre) {
    if (!right_to_left()) {
        $layout = 'side-post-only';
    } else {
        $layout = 'side-pre-only';
    }
} else if (!$showsidepost && !$showsidepre) {
    $layout = 'content-only';
}

$bodyclasses[] = $layout;

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />

    <?php if (!empty($fontname)) { ?>
        <link href='http://fonts.googleapis.com/css?family=<?php echo $fontname; ?>' rel='stylesheet' type='text/css'><?php 
} ?>

    <?php if (!empty($fontheadername)) { ?>
        <link href='http://fonts.googleapis.com/css?family=<?php echo $fontheadername; ?>' rel='stylesheet' type='text/css'><?php 
} ?>

    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join($bodyclasses)) ?>">

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page" class="container-fluid">
    <?php if ($hasnavbar) { ?>
        <nav class="breadcrumb-button"><?php echo $PAGE->button; ?></nav>
        <?php echo $OUTPUT->navbar();
} else { ?>
        <div style="height: 20px;"><?php
} ?>

        <div id="page-content" class="row-fluid">

       <?php if ($layout === 'pre-and-post') { ?>
            <div id="region-bs-main-and-pre" class="span9">
            <div class="row-fluid">
            <section id="region-bs-main" class="span8 pull-right">
        <?php
} else if ($layout === 'side-post-only') {
        ?>
            <section id="region-bs-main" class="span9">
        <?php
} else if ($layout === 'side-pre-only') {
        ?>
            <section id="region-bs-main" class="span9 pull-right">
        <?php
} else if ($layout === 'content-only') { ?>
            <section id="region-bs-main" class="span12">
        <?php
}
        ?>

        <?php echo $coursecontentheader; ?>
        <?php echo $OUTPUT->main_content() ?>
        <?php echo $coursecontentfooter; ?>
        </section>

        <?php if ($layout !== 'content-only') {
    if ($layout === 'pre-and-post') { ?>
                <aside id="region-pre" class="span4 block-region desktop-first-column region-content">
        <?php
    } else if ($layout === 'side-pre-only') { ?>
        <aside id="region-pre" class="span3 block-region desktop-first-column region-content">
    <?php
    }
    ?>

<?php
    if (!right_to_left()) {
        echo $OUTPUT->blocks_for_region('side-pre');
    } else if ($hassidepost) {
        echo $OUTPUT->blocks_for_region('side-post');
    }
?>
    </aside>
<?php
    if ($layout === 'pre-and-post') {
?>
    </div>
</div>

<?php
    }

    if ($layout === 'side-post-only' OR $layout === 'pre-and-post') { ?>
    <aside id="region-post" class="span3 block-region region-content">
<?php
        if (!right_to_left()) {
            echo $OUTPUT->blocks_for_region('side-post');
        } else {
            echo $OUTPUT->blocks_for_region('side-pre');
        }
?>
    </aside>
<?php
    }
}
?>

</div>

<footer id="page-footer">
    <?php echo $OUTPUT->standard_footer_html(); ?>
</footer>

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</div>
</body>
</html>
