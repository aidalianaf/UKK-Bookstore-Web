<?php
if($_POST["submit"]=="query") 
{
    $recipient="aidalianafebiansyah@gmail.com";
    $subject="Query from bookstore";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $resSub = "Confirmation of receiving your query";
    $resBody= "Dear ". $sender ."\n\nTerima kasih telah menghubungi kami.\nPesan ini untuk memberi tahu Anda jika pesan yg Anda kirimkan telah kami terima. We will get back to you asap.";
    $note="\n\nNote : This is an auto-generated mail do not reply to this.\nFrom: http://bookstoreproject.16mb.com/";
    $resBody=$resBody . $note;
    mail($senderEmail , $resSub , $resBody);   
    header("location: index.php?response="."Pesan Anda telah terkirim! Customer Service kami akan membalas dengan segera."); 
}
?>	