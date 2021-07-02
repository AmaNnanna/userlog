<?php


define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/userlog/', function () {

    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title", "userlog");

    $Template->render("home");
}, 'GET');
//Home page//



$Route->add('/userlog/registrationform', function () {
    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $data = $Core->post($_POST);

    $fullName = $data->fullName;
    $emailAddress = $data->emailAddress;
    $phoneNumber = $data->phoneNumber;
    $loginPassword = $data->loginPassword;
    //$confirmPassword = $data->confrimPassword;
    $gender = $data->gender;
    $id = (int)$Core->CreateAccount($fullName, $emailAddress, $phoneNumber, $loginPassword, $gender);
    if ($id) {
        $Template->setError("Registration Successful", "success", "/userlog/login");
        $Template->redirect("/userlog/login");
    }
    //$Template->debug($data);



    $Template->setError("Registration Failed!, Email or Phone Number already in use", "warning", "/userlog/");
    $Template->redirect("/userlog/");

    //'$', '$', '$confirmPassword', `$

    // > Ama Nnanna [emailAddress] => email@mail.com [phoneNumber] => 123344568776 [loginPassword] => poiuytrewertyui [confirmPassword] => jsdfghjkl;\';lkjhgfd [gender] => on [agree] => on )

    //$Template->debug($data);

}, 'POST');



$Route->add('/userlog/login', function () {

    $Template = new Apps\Template;
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title", "userlog");

    $Template->render("login");
}, 'GET');


$Route->add("/userlog/forms/login", function () {
    $Template = new Apps\Template;
    $Core = new Apps\Core;

    $data = $Core->data;
    $email = $data->email;
    $password = $data->password;

    $User = $Core->UserLogin($email, $password);

    if ($User->id) {
        $Template->authorize($User->id);
        $Template->redirect("/userlog/profile");
    }
}, 'POST');

$Route->add('/userlog/profile', function () {

    $Template = new Apps\Template('/userlog/login');
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("title", "userlog");
    $Template->render("profile");
}, 'GET');



//Logout Sessions//
$Route->add(
    '/userlog/logout',
    function () {
        $Template = new Apps\Template;
        $Template->expire();
        $Template->cleanAll(session_delete_timout);
        $Template->redirect(auth_url);
    },
    'GET'
);
//Logout Sessions//



$Route->run('/');
