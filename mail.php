<?php

$a = $conn->real_escape_string($_POST['name']);
$b = $conn->real_escape_string($_POST['email']);
$c = $conn->real_escape_string($_POST['message']);

$sql="INSERT INTO contact_form (contact_name, contact_email, contact_message) VALUES ($a, $b, $c)";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Message";
}

?>