<?php

   #@title Construction class v0.1
   #@author Johan Maurel
   #@desc Content formatting and loading class.

  class page {

    private $head;
    private $page;

    public function loadHead($head) { $this->head = $head; }

    public function sendPage() {
      echo "<!DOCTYPE Html>\n"
          . $this->head->generateHead()."\n"
          . "<html>\n"
          ."<body><h1>le MouLy</h1></body>"
          . "</html>";
    }

  } ?>
