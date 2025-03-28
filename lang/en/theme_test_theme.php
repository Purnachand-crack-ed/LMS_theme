<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
                                                                                                                                    
$string['choosereadme'] = 'Theme is a child theme of Boost. It adds the ability to upload background photos and customize the dashboard layout.';                

// The name of our plugin.                                                                                                          
$string['pluginname'] = 'test_theme';                                                                                                    
// We need to include a lang string for each block region.                                                                          
$string['region-side-pre'] = 'Right';
// The name of the second tab in the theme settings.
$string['advancedsettings'] = 'Advanced settings';                                                                                  
// The brand colour setting.                                                                                                        
$string['brandcolor'] = 'Brand colour';                                                                                             
$string['brandcolor_desc'] = 'The accent colour used for branding throughout the theme.';                                                                             

// Name of the settings pages.                                                                                                      
$string['configtitle'] = 'test_theme settings';                                                                                          
// Name of the first settings tab.                                                                                                  
$string['generalsettings'] = 'General settings';                                                                                    
// Preset files setting.                                                                                                            
$string['presetfiles'] = 'Additional theme preset files';                                                                           
$string['presetfiles_desc'] = 'Preset files can be used to dramatically alter the appearance of the theme. See <a href=https://docs.moodle.org/dev/Boost_Presets>Boost presets</a> for information on creating and sharing your own preset files, and see the <a href=http://moodle.net/boost>Presets repository</a> for presets that others have shared. You can upload your own SCSS files here.'; 

// Preset setting.                                                                                                                  
$string['preset'] = 'Theme preset';                                                                                                 
// Preset help text.                                                                                                                
$string['preset_desc'] = 'Pick a preset to broadly change the look of the theme.';                                                  
// Raw SCSS setting.                                                                                                                
$string['rawscss'] = 'Raw SCSS';                                                                                                    
// Raw SCSS setting help text.                                                                                                      
$string['rawscss_desc'] = 'Use this field to provide SCSS or CSS code which will be injected at the end of the style sheet.';       
// Raw initial SCSS setting.                                                                                                        
$string['rawscsspre'] = 'Raw initial SCSS';                                                                                         
// Raw initial SCSS setting help text.                                                                                              
$string['rawscsspre_desc'] = 'In this field you can provide initialising SCSS code, it will be injected before everything else. Most of the time you will use this setting to define variables.';
