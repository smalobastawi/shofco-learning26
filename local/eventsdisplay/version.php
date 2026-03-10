<?php
// This file defines the version of your plugin.
defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2026021301;  // YYYYMMDDHH format (e.g., today's date + unique number)
$plugin->requires  = 2022041900;  // Minimum Moodle version (4.0+; check yours at Site admin → Server → Environment)
$plugin->component = 'local_eventsdisplay';  // Unique name: 'local_' + folder name
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = 'v1.0 for Dynamic Events';
$plugin->dependencies = array();  // No dependencies needed
