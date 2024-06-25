<?php
$nums=array(null);
$nums[1]=45;$nums[0]=12;$nums[3]=25;$nums[2]=10;
$sum=array_sum($nums);
echo "sum is:".$sum."<br>";
echo "avg is:".$sum/count($nums)."<br>";
rsort($nums);
echo "reverted array:-<br>";
$i=0;
foreach($nums as $num)
{ 
    echo "index[$i]: ".$num."<br>";
    $i++;
}
?>