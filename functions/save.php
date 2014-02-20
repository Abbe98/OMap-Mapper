<?php
function save($save) {
  $name = $save['name'];
  $location = $save['location'];
  $date = $save['date'];
  $map = $save['map'];

  $database = Database::getInstanse();

  $database->query("INSERT INTO `locations` (`location`, `date`, `name`, `map`) VALUES (:location, :mdate, :name, :map)");
  $database->bind(':location', $location);
  $database->bind(':mdate', $date);
  $database->bind(':name', $name);
  $database->bind(':map', $map);

  $database->execute();
}
?>