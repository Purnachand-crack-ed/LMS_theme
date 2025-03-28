<?php

// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();

// We will add callbacks here as we add features to our theme.

function theme_test_theme_get_main_scss_content($theme) {                                                                                
    global $CFG;                                                                                                                    
    // Ensure the SCSS files are correctly retrieved based on the selected preset.
    global $CFG;                                                                                                                    
                                                                                                                                    
    $scss = '';                                                                                                                     
    // Initialize SCSS content based on the selected preset.

    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;                                                 
    $fs = get_file_storage();                                                                                                       
                                                                                                                                    
    $context = context_system::instance();                                                                                          
    if ($filename == 'default.scss') {                                                                                              
        // Load the default preset files directly from the boost theme.

        // We still load the default preset files directly from the boost theme. No sense in duplicating them.                      
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');                                        
    } else if ($filename == 'plain.scss') {                                                                                         
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.                      
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/plain.scss');                                          
                                                                                                                                    
    } else if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_test_theme', 'preset', 0, '/', $filename))) {
        // Fetch the preset file from the theme's file area.

        // This preset file was fetched from the file area for theme_ and test_theme not theme_boost (see the line above).                
        $scss .= $presetfile->get_content();                                                                                        
    } else {                                                                                                                        
        // Safety fallback - maybe new installs etc.                                                                                
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/default.scss');                                        
    }                                                                                                                                       
    // Pre CSS - this is loaded AFTER any prescss from the setting but before the main scss.                                        
    $pre = file_get_contents($CFG->dirroot . '/theme/test_theme/scss/pre.scss');                                                         
    // Post CSS - this is loaded AFTER the main scss but before the extra scss from the setting.                                    
    $post = file_get_contents($CFG->dirroot . '/theme/test_theme/scss/post.scss');                                                       
                                                                                                                                                                                             
    // Combine them together.                                                                                                       
    return $pre . "\n" . $scss . "\n" . $post;                                                                                                                  
}
