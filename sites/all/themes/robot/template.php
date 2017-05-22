<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// implements theme_preprocess()
function robot_preprocess($vars, $hook){
    //kpr($vars);
    
}
// implements theme_preprocess_hook()
function robot_preprocess_page(&$variables){
   
    $slogons = array(
        t('Test1'),
        t('Test2'),
        t('Test3'),
        t('Test4'),
        t('Test5'),
        
    );
    
    $slogon = $slogons[array_rand($slogons)];
    //kpr($variables['user']->name);
    $variables['site_slogan'] = $slogon;
    //add new variable
    if($variables['logged_in']){
      $variables['footer_message']  = t('Welcome- @username', array('@username'=>$variables['user']->name));
    }else {
      $variables['footer_message']  = t('Logged Out');  
    }
    
    
    //kpr($variables);
}