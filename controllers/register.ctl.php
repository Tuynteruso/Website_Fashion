<?php
require_once('../modules/validators.php');
require_once('../modules/db.php');
require_once('../modules/helpers.php');
require_once('../models/user.model.php');

const DUPLICATE = 'duplicate';
const INVALID = 'invalid';

function buildLocationPath(string $msgStatus, string $username, string $email, string $phonenumber, string $address): string
{
    $locPath = 'Location: /cuahangthoitrang/register.php?msg=%s&username=%s&email=%s&phonenumber=%s&address=%s';
    return sprintf($locPath, $msgStatus, $username, $email, $phonenumber, $address);
}

$userModel = new userModel(DB());

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];

// Validate inputs
if (!empties($username, $email, $password, $phonenumber, $address)) {
    $valid = validateStringLength($email, 13, 256) && validateStringLength($phonenumber, 10, 11) 
        && validateEmail($email) && validateStringLength($password, 8, 20);
    
    if ($valid) {
        if ($userModel->exist($email)) {
            header(buildLocationPath(DUPLICATE, $username, $email, $phonenumber, $address));
        } else {
            // Hash the password before storing
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $userModel->insertcustomer($email, $hashedPassword, $username, $phonenumber, $address);
            $userModel->insertfavorite();
            $userModel->insertcart();

            header('Location: /cuahangthoitrang/register.php?msg=done');
        }
    } else {
        header(buildLocationPath(INVALID, $username, $email, $phonenumber, $address));
    }
} else {
    header(buildLocationPath(INVALID, $username, $email, $phonenumber, $address));
}
exit();