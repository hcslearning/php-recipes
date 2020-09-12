<?php
ob_start();
echo "Hello World";?>
 <strong>Holi Holi lorem ipsum dolor </strong>
<?php
$out = ob_get_clean();
echo $out;
