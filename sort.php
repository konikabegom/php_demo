<?php
function quickSort(array $arr): array {
    if (count($arr) < 2) {
        return $arr; // 基线条件：空数组或只有一个元素的数组是“有序”的
    }

    $pivot = $arr[0]; // 选择基准值
    $left = [];  // 小于基准值的元素
    $right = []; // 大于或等于基准值的元素

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }

    // 递归排序左右部分并合并结果
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

// 测试用例
$unsorted = [33, 10, 55, 71, 29, 3, 18];
$sorted = quickSort($unsorted);

echo "排序前: " . implode(', ', $unsorted) . PHP_EOL;
echo "排序后: " . implode(', ', $sorted) . PHP_EOL;
?>
