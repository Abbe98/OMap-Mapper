<?php
function escape($string) {
  return htmlentities(strip_tags($string));
}