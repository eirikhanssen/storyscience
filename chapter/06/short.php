<?php 
include '../../include/xslt2.inc.php';
$xml ="../../locale/no/locale.xml";
$xsl ="../../xsl/keys.xsl";

//echo $xml;
//echo $xsl;
echo xslt2($xml,$xsl);
?>