<?php
include '/backend/providers/stub/base/header_stub.php';

class header {

  public function generateHeader() {
    $dao = new header_provider();
    return "<header>\n"
          ."<img src=\"$dao->getImage()\">\n"
          ."</header>";
  }

} ?>
