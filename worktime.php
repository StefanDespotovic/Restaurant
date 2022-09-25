<?php
$storeSchedule = [
  'Sun' => ['00:00 AM' => '00:01 AM'],
  'Mon' => ['09:00 AM' => '10:00 PM'],
  'Tue' => ['09:00 AM' => '10:00 PM'],
  'Wed' => ['09:00 AM' => '10:00 PM'],
  'Thu' => ['09:00 AM' => '10:00 PM'],
  'Fri' => ['09:00 AM' => '11:00 PM'],
  'Sat' => ['12:00 AM' => '11:00 PM']
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