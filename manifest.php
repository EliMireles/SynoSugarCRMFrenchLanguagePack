<?php
 
// manifest file for information regarding application of new code
$manifest = array(

    // only install on the following sugar versions (if empty, no check)
    array (
        'exact_matches' => array (
        ),
        'regex_matches' => array (
            0 => '6\.5'
        ),
    ),

    // Version for which this langpack can work
    'acceptable_sugar_flavors' => array (
        0 => 'CE',
    ),

    // Name of the Pack
    'name' => 'SYNOLIA - Traduction FR',

    'id'=> 'SYNOLIA_FR',

    'lang_file_suffix' => 'fr_FR',

    // Description of new code
    'description' => 'Traduction compatible pour les versions 6.5.x par SYNOLIA',

    // Author of new code
    'author' => 'Synolia.com',

    // Date published
    'published_date' => '2014/06/26',

    // Version of code
    'version' => '6517-140626',

    // Type of code (valid choices are: full, langpack, module, patch, theme )
    'type' => 'langpack',

    // Icon for displaying in UI (path to graphic contained within zip package)
    'icon' => '',

    // Uninstall is allowed 
    'is_uninstallable' => true,
);
