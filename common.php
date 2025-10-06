<?php
// =============================================
// Common PHP Utility Functions
// =============================================

/**
 * Format a date string into a readable format.
 *
 * @param string $dateStr The input date string.
 * @return string The formatted date (e.g., "2025-10-04 19:30").
 */
function formatDate($dateStr) {
    return date("Y-m-d H:i", strtotime($dateStr));
}

/**
 * Generate a random string of given length.
 *
 * @param int $length The length of the generated string.
 * @return string Randomly generated string.
 */
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

/**
 * Check if an email address is valid.
 *
 * @param string $email The email to check.
 * @return bool True if valid, false otherwise.
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Convert an array to a JSON string (pretty printed).
 *
 * @param array $arr The array to convert.
 * @return string JSON formatted string.
 */
function arrayToJson($arr) {
    return json_encode($arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}

/**
 * Simple debug print function.
 *
 * @param mixed $data The data to print.
 * @return void
 */
function debug($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// =============================================
// Example Usage
// =============================================

// Format date example
echo "Formatted date: " . formatDate("2025-10-04 07:15:00") . "\n";

// Random string example
echo "Random string: " . generateRandomString(12) . "\n";

// Email validation example
$email = "example@test.com";
echo "Is valid email? " . (isValidEmail($email) ? "Yes" : "No") . "\n";

// Array to JSON example
$sample = ["name" => "Jack", "age" => 30, "skills" => ["PHP", "JavaScript", "Web3"]];
echo "JSON output:\n" . arrayToJson($sample) . "\n";
?>
