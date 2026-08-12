<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $data = "-----------------------------\n";
    $data .= "New Portfolio Message\n";
    $data .= "Name: " . $name . "\n";
    $data .= "Email: " . $email . "\n";
    $data .= "Subject: " . $subject . "\n";
    $data .= "Message: " . $message . "\n";
    $data .= "Date: " . date("Y-m-d H:i:s") . "\n";
    $data .= "-----------------------------\n\n";

    file_put_contents("messages.txt", $data, FILE_APPEND);


    echo "
    <h1>Thank You! 💗</h1>
    <p>Your message has been sent successfully.</p>
    <a href='index.html'>Go Back</a>
    ";

}
    echo "
    <!DOCTYPE html>

    <html>

    <head>

        <title>Message Sent</title>

        <style>

            body {
                font-family: Arial;
                text-align: center;
                padding-top: 100px;
                background: #fff1f7;
            }

            h1 {
                color: #c85b8c;
            }

            a {
                display: inline-block;
                margin-top: 20px;
                padding: 12px 25px;
                background: #c85b8c;
                color: white;
                text-decoration: none;
                border-radius: 25px;
            }

        </style>

    </head>

    <body>

        <h1>Thank You! 💗</h1>

        <p>Your message has been received successfully.</p>

        <a href='index.html'>Go Back</a>

    </body>

    </html>
    ";

}

?>