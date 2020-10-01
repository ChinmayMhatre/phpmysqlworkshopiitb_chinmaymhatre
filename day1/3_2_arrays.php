<html>

<?php 

$a = Array( '0'=>Array('0'=>10 , '1'=>2 ),'1'=>Array('0'=>30 , '1'=>4 ) );
$b = Array( '0'=>Array('0'=>3 , '1'=>4 ),'1'=>Array('0'=>5 , '1'=>6 ) );

$result = array() ;

for($i=0 ; $i<=1 ; $i++)
{
    for($j=0 ; $j<=1 ; $j++)
    {
        $result[$i][$j] = $a[$i][$j] + $b[$i][$j];
    }
}
echo "<pre>";
print_r($result);
?>



</html>