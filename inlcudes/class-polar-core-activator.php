<?php

/**
 * Fired during activation
 * 
 */


 class Polar_Core_Activator {


    public static function activate() {

        flush_rewrite_rules(); 
    }

 }