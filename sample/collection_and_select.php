<?php

$collection = ...;

$select = $collection->getSelect();
$stmt = $select->query();

while ($row = $stmt->fetch()) {
   // process $row 
}

