<?php 
// output all html markup before <body>
class BeginPage {
	private $doctype = "<!doctype html>\n";
	private $lang = "no";
	private $title = "Default title";
	private $depth = 0;
	private $cssbasepath = "style/style.css";
	private $csspath = "";
	private $script;
	private $pageStartString;

	private function buildPageStartString(){
		$this->pageStartString = <<<EOT
<!doctype html>
<html lang="$this->lang">
   <head>
      <title>$this->title</title>
      <meta charset="utf-8"/> 
      <link rel="stylesheet" href="$this->csspath"/>
      $this->script
   </head>
   <body>

EOT;
	}

	public function display(){
		if ($this->level > 0) {
			for($i=0; $i < $this->level; $i++){
				$this->csspath .= "../";
			}
			$this->csspath .= $this->cssbasepath;
		} else {
			$this->csspath = $this->cssbasepath;
		}
		$this->buildPageStartString();
		return $this->pageStartString;
	}
}