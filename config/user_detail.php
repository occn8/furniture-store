<?php
$uid = $_SESSION['id'];
$querryuser = "SELECT * FROM users WHERE id='$uid'";
$results = mysqli_query($connect, $querryuser);
$row = mysqli_fetch_assoc($results);
$username = $row['username'];
$email = $row['email'];
$address = $row['address'];
$country = $row['country'];
$district = $row['district'];
$zip = $row['zip'];

