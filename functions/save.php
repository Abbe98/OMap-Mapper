<?php
function save($save) {
  $database = Database::getInstanse();

  $database->query("INSERT INTO `locations` (`location`, `date`, `name`, `map`) VALUES (:location, :mdate, :name, :map)");
  $database->bind(':location', $save['location']);
  $database->bind(':mdate', $save['date']);
  $database->bind(':name', $save['name']);
  $database->bind(':map', $save['map']);

  $database->execute();
}
?>