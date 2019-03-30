<?php
/**
 * This script handles registration and payment
 *
 * PHP version 7.2
 *
 * @category Registration_And_Payment
 * @package  Registration_And_Payment
 * @author   Benson Imoh,ST <benson@stbensonimoh.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://stbensonimoh.com
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

// echo json_encode($_POST);
//pull in the database
require '../config.php';
require './Paystack.php';
require './DB.php';

// Capture Post Data that is coming from the form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$referringChannel = $_POST['referringChannel'];
$ticketQty = $_POST['ticketQty'];

$currency = "NGN";
$amount = (5000 * 100) * $ticketQty;

$details = array(
    "firstName" => $firstName,
    "lastName" => $lastName,
    "email" => $email,
    "phone" => $phone,
    "location" => $location,
    "referringChannel" => $referringChannel,
    "ticketQty" => $ticketQty,
    "amount" => $amount
);

$db = new DB($host, $db, $username, $password);

// Insert the user into the database
if ($db->insertUser("awlcrwandavirtual", $details)) {
    $paystack = new Paystack($paystackKey);
    // throw an exception if there was a problem completing the request,
    // else returns an object created from the json response
    $trx = $paystack->transaction->initialize(
        [
        'amount'=> $amount, /* 20 naira */
        'email'=> $email,
        'currency' => $currency,
        'callback_url' => 'https://proudafricanroots.com/storytheatre/scripts/verify.php',
        'metadata' => json_encode(
            [
            'custom_fields'=> [
                [
                'display_name'=> "First Name",
                'variable_name'=> "first_name",
                'value'=> $firstName
                ],
                [
                'display_name'=> "Last Name",
                'variable_name'=> "last_name",
                'value'=> $lastName
                ],
                [
                'display_name'=> "Mobile Number",
                'variable_name'=> "mobile_number",
                'value'=> $phone
                ]
            ]
            ]
        )
        ]
    );

    echo json_encode($trx->data->authorization_url);
}
