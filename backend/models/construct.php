<?php

  include 'head.php'

  # @title Construction class v0.1
  # @author Johan Maurel
  # @desc Content formatting and loading class.

  class frame
  {
    private string $frame;

    function loadHead($head) {  }

    function sendPage() {
      $frame = "<!DOCTYPE Html>\n"
               ."<html>\n"
               .""
               ."</html>";
    }
  }


 ?>
