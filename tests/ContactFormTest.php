<?php

// 1. Name should not be empty
function test_name_required() {
    $name = "";
    return !empty($name);
}

// 2. Name should pass when valid
function test_valid_name() {
    $name = "Ayesha";
    return !empty($name);
}

// 3. Valid email check
function test_valid_email() {
    $email = "test@example.com";
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// 4. Invalid email should fail
function test_invalid_email() {
    $email = "wrong-email";
    return filter_var($email, FILTER_VALIDATE_EMAIL) === false;
}

// 5. Message required
function test_message_required() {
    $message = "Hello QuickPOS";
    return !empty($message);
}

// RUN TESTS
echo "Test 1 (Name Required): " . (test_name_required() ? "PASS" : "FAIL") . "\n";
echo "Test 2 (Valid Name): " . (test_valid_name() ? "PASS" : "FAIL") . "\n";
echo "Test 3 (Valid Email): " . (test_valid_email() ? "PASS" : "FAIL") . "\n";
echo "Test 4 (Invalid Email): " . (test_invalid_email() ? "PASS" : "FAIL") . "\n";
echo "Test 5 (Message Required): " . (test_message_required() ? "PASS" : "FAIL") . "\n";

?>