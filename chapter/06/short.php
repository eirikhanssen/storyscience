<?php 
require_once '../../include/xslt2.inc.php';
require_once '../../include/page.surround.inc.php';
require_once '../../include/common.inc.php';
$depth = 2; // two levels from root
$xml ="../../locale/no/locale.xml";
$xsl ="../../xsl/keys.xsl";
$bp = new BeginPage;
echo $bp->display();
?>
<?php echo chapmenu($depth);?>

<?php echo xslt2($xml,$xsl); ?>


   </body>
</html>