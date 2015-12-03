<?php 
include '../../include/xslt2.inc.php';
include '../../include/page.surround.inc.php';
$xml ="../../locale/no/locale.xml";
$xsl ="../../xsl/keys.xsl";
$bp = new BeginPage;
echo $bp->display();
echo xslt2($xml,$xsl);
?>
   </body>
</html>