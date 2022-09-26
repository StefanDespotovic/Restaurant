<?php
$storeSchedule = [
  //'Sun' => ['Closed'],
  'Mon' => ['08:00 AM' => '09:00 PM'],
  'Tue' => ['08:00 AM' => '09:00 PM'],
  'Wed' => ['08:00 AM' => '09:00 PM'],
  'Thu' => ['08:00 AM' => '09:00 PM'],
  'Fri' => ['08:00 AM' => '10:00 PM'],
  'Sat' => ['11:00 AM' => '10:00 PM']
];
$timestamp = time();

$status = '&bull; Closed';
$currentTime = (new DateTime())->setTimestamp($timestamp);
foreach ($storeSchedule[date('D', $timestamp)] as $startTime => $endTime) {
    $startTime = DateTime::createFromFormat('h:i A', $startTime);
    $endTime   = DateTime::createFromFormat('h:i A', $endTime);
    if (($startTime < $currentTime) && ($currentTime < $endTime)) {
        $status = '&bull; Open';
        break;
    }
}


?>