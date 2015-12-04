<?php
require_once "xslt2.inc.php";
class Settings {
	private $default_lang = "no";
	private $lang = "";
	
	function getLang() {
		return $this->lang;
	}
	function __construct(){
		// set language to default language or language in get string
		if(isset($_GET["lang"]) && $_GET["lang"] != "") {
			$this->lang = $_GET["lang"];
		} else {
			$this->lang = $this->default_lang;
		}
	}

}
global $settings;
$settings = new Settings;

//$lang = htmlspecialchars($_GET["lang"]) || $default_lang;

function rootPath($n) {
	$rootPath="";
	if ($n > 0) {
			for($i=0; $i < $n; $i++){
				$rootPath .= "../";
			}
			return $rootPath;
		} else {
			return "";
		}
}

function chapmenu($depth){
	$lang = $GLOBALS["settings"]->getLang();
	$chapmenu_xml=rootPath($depth) . "locale/$lang/locale.xml" ;
	$chapmenu_xsl=rootPath($depth) . "xsl/chapmenu.xsl";
	return xslt2($chapmenu_xml,$chapmenu_xsl);
}


// output all html markup before <body>
class BeginPage {
	private $doctype = "<!doctype html>\n";
	private $lang = "";
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

	function __construct(){
		$this->lang = $GLOBALS["settings"]->getLang();
	}

	public function display(){
		if ($this->depth > 0) {
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
?>