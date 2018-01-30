<?php
include 'backend/views/head.php';
include 'backend/models/construct.php';

$frame = new page();
$head = new headView();
$head->setBaseHead();
$frame->loadHead($head);

$frame->sendPage();
?>
