<?php
include 'SocialThing.php';
include 'Shareable.php';

class Status extends SocialThing {
  use Shareable;
}

$status = new Status ("Ciee yang masih sendirian :P");
$status->share();

?>
