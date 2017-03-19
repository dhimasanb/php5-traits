<?php
include 'SocialThing.php';
include 'Shareable.php';

class Photo extends SocialThing {
  use Shareable;
}

$photo = new Photo ("Kangen.jpg");
$photo->share();

?>
