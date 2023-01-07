<?PHP
$sender = 'someone@somedomain.tld';
$recipient = 'you@yourdomain.tld';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Funkcja PHP mail() jest obsługiwana";
}
else
{
    echo "Błąd: funkcja PHP mail() nie jest obsługiwana";
}
?>