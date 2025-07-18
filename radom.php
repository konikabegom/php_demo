<?php
function isPalindrome(string $str): bool {
    // 去除非字母数字字符，并转为小写
    $cleaned = strtolower(preg_replace("/[^A-Za-z0-9]/", '', $str));
    // 判断是否等于其反转
    return $cleaned === strrev($cleaned);
}

// 测试用例
$tests = [
    "A man, a plan, a canal: Panama",
    "Racecar",
    "Hello World",
    "上海自来水来自海上",
];

foreach ($tests as $text) {
    echo "\"$text\" 是回文吗？ " . (isPalindrome($text) ? "✅ 是" : "❌ 否") . PHP_EOL;
}
?>
