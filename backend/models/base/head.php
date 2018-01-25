<?php
# @title HEAD Construction class v0.1
# @author Johan Maurel
# @desc Explicit Content formatting and loading head class.

class head {

  const CHARSET = "UTF-8";

  private $metas;
  private $cssfiles;
  private $jsfiles;

  private $title;
  private $favicon;


  public function addCSSfile($link = null) {
    if(isset($link)) $this->cssfiles .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"$link\">\n";
  }

  public function addJSfile($link = null) {
    if(isset($link)) {
      $this->jsfiles .= "<script type=\"text/javascript\" charset=\"".self::CHARSET."\" src=\"$link\"></script>\n";
    }
  }

  public function addMetaDataTags($name  = null,$content = null) {
    if(isset($name, $content)) $this->metas .= "<meta name=\"$name\" content=\"$content\">\n";
  }

  public function setFavicon($link  = null) { $this->favicon = "<link rel=\"icon\" type=\"image/png\" href=\"$link\" />\n"; }

  public function generateHead() {
    return "<head>\n"
           . $this->title
           . "<meta charset=\"".self::CHARSET."\">\n"
           . $this->favicon
           . $this->metas
           . $this->cssfiles
           . $this->jsfiles
           . "</head>";
  }

  public function setTitle($title = null) { $this->title = "<title>$title</title>\n"; }

} ?>
