<?php
function langCode($langCode) {
  switch ($langCode) {
  	case 'sv':
      return 'Svenska';
      break;
    default:
      return 'English';
      break;
  }
}