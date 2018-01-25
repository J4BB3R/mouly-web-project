<?php
# @title HEAD View Construction class v0.1
# @author Johan Maurel
# @desc Content formatting and loading head view class.

include 'backend/models/base/head.php';

class headView extends head {

  public function setBaseHead() {
    self::setTitle("le paradis des riders");
    parent::setFavicon("contents/pictures/favicon.png");
    self::addCSSfile("base");
    parent::addMetaDataTags("viewport","width=device-width, initial-scale=1.0");
    parent::addMetaDataTags("title",$this->title);
    parent::addMetaDataTags("description","La meilleure station de ski du monde.");
  }

  public function setTitle(/*string*/ $desc = null) { parent::setTitle("Le Mouly : ".$desc); }

  public function addCSSfile(/*string*/ $name = null) { parent::addCSSfile("CSS/".$name.".css"); }

  public function addJSfile(/*string*/ $name = null) { parent::addJSfile("scripts/".$name."js"); }

} ?>
