<?php
$rand1 = rand (1, 6);
echo "".$rand1."";

do{
$rand2 = rand (1, 6);
} while ($rand2 == $rand1);
echo "".$rand2."";

do{
$rand3 = rand (1, 6);
} while ($rand3 == $rand1 || $rand3 == $rand2);
echo "".$rand3."";

do{
$rand4 = rand (1, 6);
} while ($rand4 == $rand1 || $rand4 == $rand2 || $rand4 == $rand3);
echo "".$rand4."";

do{
$rand5 = rand (1, 6);
} while ($rand5 == $rand1 || $rand5 == $rand2 || $rand5 == $rand3 || $rand5 == $rand4);
echo "".$rand5."";

do{
$rand6 = rand (1, 6);
} while ($rand6 == $rand1 || $rand6 == $rand2 || $rand6 == $rand3 || $rand6 == $rand4 || $rand6 == $rand5);
echo "".$rand6."";

?>