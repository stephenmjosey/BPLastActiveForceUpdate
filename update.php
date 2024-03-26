<?php
// Include WordPress bootstrap file
require_once('wp-load.php');

// Get all users
$users = get_users();

// Set the desired "last seen" date
$last_seen_date = '2024-03-25 00:00:00'; // March 25, 2024

// Loop through each user and update their last seen date
foreach ($users as $user) {
    update_user_meta($user->ID, 'last_activity', $last_seen_date);
}

echo 'All users updated successfully.';
?>
