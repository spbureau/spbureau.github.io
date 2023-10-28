<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form has been submitted using POST method

    if (isset($_POST["email"])) {
        // Check if the "email" field has been set in the POST data

        $email = $_POST["email"];
        // Retrieve the value of the "email" field

        // You can now process or use the $email variable as needed.
        // For this example, we will simply display the email address.
        echo "You have submitted the following email address: " . $email;
    }
}
?>

<html>
<body>


</body>
</html>