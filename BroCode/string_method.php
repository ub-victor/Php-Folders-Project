<?php

$text = "Hello World";
echo

// 1. String length
echo "Length: " . strlen($text) . "<br>";

// 2. Convert to uppercase
echo "Uppercase: " . strtoupper($text) . "<br>";

// 3. Convert to lowercase
echo "Lowercase: " . strtolower($text) . "<br>";

// 4. Replace text
echo "Replace: " . str_replace("World", "Victoire", $text) . "<br>";

// 5. Find position
echo "Position of 'World': " . strpos($text, "World") . "<br>";

// 6. Substring
echo "Substring: " . substr($text, 0, 5) . "<br>";

// 7. Reverse string
echo "Reverse: " . strrev($text) . "<br>";

// 8. Trim spaces
$spaceText = "   Hello   ";
echo "Trimmed: '" . trim($spaceText) . "'<br>";

// 9. Compare strings
echo "Compare: " . strcmp("Hello", "hello") . "<br>";

// 10. Repeat string
echo "Repeat: " . str_repeat("Hi ", 3) . "<br>";

?>