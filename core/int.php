<?php
session_start();

spl_autoload_register(function($class) {
  require_once 'classes/' . $class . '.php';
});

require 'vendor/autoload.php';
require_once 'functions/escape.php';
require_once 'functions/randomString.php';
require_once 'functions/langCode.php';
require_once 'core/config.php';

$languages = ['sv', 'en'];