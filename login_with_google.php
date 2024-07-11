<?php
require_once 'db_connection.php';
require_once '../htdocs/vendor/autoload.php';

$clientID = '342778935837-f6e6b2aml5l69vv6bvo6v7ndon4f6i3k.apps.googleusercontent.com';
$clientSecret = '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';
$redirectURI = 'http://tudominio.com/login_with_google.php'; 

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectURI);
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    $email = $google_account_info->getEmail();
    $name = $google_account_info->getName();

    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
    } else {
        $sql_insert = "INSERT INTO usuarios (nombre, email) VALUES ('$name', '$email')";
        if ($conn->query($sql_insert) === TRUE) {
            $_SESSION['email'] = $email;
            header("location: dashboard.php");
        } else {
            echo "Error al registrar usuario: " . $conn->error;
        }
    }
} else {
    $auth_url = $client->createAuthUrl();
    header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
}
?>