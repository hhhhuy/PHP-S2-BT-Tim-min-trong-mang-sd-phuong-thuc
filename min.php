<?php
$array = [23, 32, 5, 43, 1, 321, 312, 352];
$min = null;
$index = null;
for ($i = 0; $i < count($array); $i++) {
    if ($min == null) {
        $min = $array[$i];
        $index = $i;
    } else {
        if ($array[$i] < $min) {
            $min = $array[$i];
            $index = $i;
        }
    }
}
echo "Giá trị nhỏ nhất là $min, nằm tại vị trí $index";
?>