<?php

function test_empty_name() {
    $name = "";
    return $name !== "";
}

function test_valid_email() {
    $email = "test@example.com";
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function test_invalid_email() {
    $email = "invalid-email";
    return filter_var($email, FILTER_VALIDATE_EMAIL) === false;
}

// Run tests
echo "Test Empty Name: " . (test_empty_name() ? "PASS" : "FAIL") . "\n";
echo "Test Valid Email: " . (test_valid_email() ? "PASS" : "FAIL") . "\n";
echo "Test Invalid Email: " . (test_invalid_email() ? "PASS" : "FAIL") . "\n";

?>
