# BP Last Active Force Update
When importing user data to a BuddyPress site from a non-BuddyPress site, users will not display as no last activity is recorded. This forces every user to have a last activity to prevent this issue. 

How to use:

1) Insert this PHP code into a PHP file.
2) Upload to webserver via FTP (or some other upload function).
3) Execute PHP code.
4) DELTE the PHP file.

```
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

```
