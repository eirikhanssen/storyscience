<?php 
global $proc;
$proc = new SaxonProcessor();
function xslt2($xmlfile, $xslfile) {
	$proc = $GLOBALS['proc'];
	$proc->setSourceFile($xmlfile);
	$proc->setStyleSheetFile($xslfile);
	$result = $proc->transformToString();
	$proc->clearParameters();
	$proc->clearProperties();
	if($result != null) {
		return $result;
	} else {
		return "Result of transformation is null!";
	}
}
?>
