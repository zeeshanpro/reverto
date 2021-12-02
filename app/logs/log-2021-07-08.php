<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-08 11:22:04 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 11:22:04 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 11:22:04 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 11:26:31 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:26:31 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:30:49 --> Could not find the language line "Customer"
ERROR - 2021-07-08 11:30:49 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:30:49 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:31:24 --> Could not find the language line "Customer"
ERROR - 2021-07-08 11:31:24 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:31:24 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:31:29 --> Could not find the language line "Customer"
ERROR - 2021-07-08 11:31:29 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:31:29 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:31:50 --> Could not find the language line "Customer"
ERROR - 2021-07-08 11:31:50 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:31:50 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:31:53 --> Could not find the language line "Customer"
ERROR - 2021-07-08 11:31:53 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:31:53 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:32:15 --> Could not find the language line "Customer"
ERROR - 2021-07-08 11:32:15 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:32:15 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:32:20 --> Query error: Unknown column 'company' in 'field list' - Invalid query: SELECT `id`, `company`, `email`, `name`, `phone`
FROM `sma_products`
WHERE   (
`name` LIKE '%co%' ESCAPE '!'
OR  `company` LIKE '%co%' ESCAPE '!'
OR  `phone` LIKE '%co%' ESCAPE '!'
 )
 LIMIT 10
ERROR - 2021-07-08 11:33:25 --> Could not find the language line "Customer"
ERROR - 2021-07-08 11:33:25 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:33:25 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:33:40 --> Could not find the language line "Customer"
ERROR - 2021-07-08 11:33:40 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:33:40 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:34:24 --> Could not find the language line "Customer"
ERROR - 2021-07-08 11:34:24 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:34:24 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:40:35 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:40:35 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:41:18 --> Could not find the language line "search_customer"
ERROR - 2021-07-08 11:51:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`companies`.`id`
WHERE   (
`name` LIKE '%w%' ESCAPE '!'
OR  `company` LIKE '%w%'' at line 3 - Invalid query: SELECT `sma_users`.`name` as `name`, `sma_users`.`id`, `company`, `sma_users`.`email`, `sma_customers`.`name` as `cname`, `phone`
FROM `sma_users`
LEFT JOIN `sma_companies` ON `sma_users`.`company_id` =`=` `companies`.`id`
WHERE   (
`name` LIKE '%w%' ESCAPE '!'
OR  `company` LIKE '%w%' ESCAPE '!'
OR  `phone` LIKE '%w%' ESCAPE '!'
 )
AND `sma_users`.`group_id` = 3
 LIMIT 10
ERROR - 2021-07-08 11:52:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`companies`.`id`
WHERE   (
`sma_users`.`name` LIKE '%w%' ESCAPE '!'
OR  `sma_com' at line 3 - Invalid query: SELECT `sma_users`.`name` as `name`, `sma_users`.`id`, `company`, `sma_users`.`email`, `sma_companies`.`name` as `cname`, `sma_users`.`phone`
FROM `sma_users`
LEFT JOIN `sma_companies` ON `sma_users`.`company_id` =`=` `companies`.`id`
WHERE   (
`sma_users`.`name` LIKE '%w%' ESCAPE '!'
OR  `sma_companies`.`company` LIKE '%w%' ESCAPE '!'
OR  `sma_companies`.`name` LIKE '%w%' ESCAPE '!'
 )
AND `sma_users`.`group_id` = 3
 LIMIT 10
ERROR - 2021-07-08 11:54:17 --> Query error: Column 'company' in field list is ambiguous - Invalid query: SELECT `first_name`, `last_name`, `sma_users`.`id`, `company`, `sma_users`.`email`, `sma_companies`.`name` as `cname`, `sma_users`.`phone`
FROM `sma_users`
LEFT JOIN `sma_companies` ON `sma_users`.`company_id` = `sma_companies`.`id`
WHERE   (
`sma_users`.`name` LIKE '%w%' ESCAPE '!'
OR  `sma_companies`.`company` LIKE '%w%' ESCAPE '!'
OR  `sma_companies`.`name` LIKE '%w%' ESCAPE '!'
 )
AND `sma_users`.`group_id` = 3
 LIMIT 10
ERROR - 2021-07-08 11:54:30 --> Query error: Unknown column 'sma_users.name' in 'where clause' - Invalid query: SELECT `first_name`, `last_name`, `sma_users`.`id`, `sma_companies`.`company`, `sma_users`.`email`, `sma_companies`.`name` as `cname`, `sma_users`.`phone`
FROM `sma_users`
LEFT JOIN `sma_companies` ON `sma_users`.`company_id` = `sma_companies`.`id`
WHERE   (
`sma_users`.`name` LIKE '%w%' ESCAPE '!'
OR  `sma_companies`.`company` LIKE '%w%' ESCAPE '!'
OR  `sma_companies`.`name` LIKE '%w%' ESCAPE '!'
 )
AND `sma_users`.`group_id` = 3
 LIMIT 10
ERROR - 2021-07-08 12:08:20 --> Severity: error --> Exception: syntax error, unexpected single-quoted string "}", expecting "," or ";" /Users/saleem/Sites/sma/themes/default/shop/views/subscriptions/create.php 34
ERROR - 2021-07-08 12:17:52 --> Severity: Warning --> Undefined variable $user /Users/saleem/Sites/sma/themes/default/shop/views/subscriptions/create.php 76
ERROR - 2021-07-08 12:31:31 --> Query error: Unknown column 'companies.name' in 'field list' - Invalid query: SELECT `first_name`, `last_name`, `sma_users`.`id`, `sma_companies`.`company`, `sma_companies`.`name` as `customer`, CONCAT(first_name, `last_name`, `sma_users`.`id`, `sma_companies`.`company`, companies.name) as search
FROM `sma_users`
LEFT JOIN `sma_companies` ON `sma_users`.`company_id` = `sma_companies`.`id`
WHERE   (
`sma_users`.`first_name` LIKE '%w%' ESCAPE '!'
OR  `sma_users`.`last_name` LIKE '%w%' ESCAPE '!'
OR  `sma_companies`.`company` LIKE '%w%' ESCAPE '!'
OR  `sma_companies`.`name` LIKE '%w%' ESCAPE '!'
 )
AND `sma_users`.`group_id` = 3
 LIMIT 10
ERROR - 2021-07-08 12:32:51 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::db_prefix() /Users/saleem/Sites/sma/app/controllers/shop/Subscriptions.php 90
ERROR - 2021-07-08 12:41:51 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /Users/saleem/Sites/sma/themes/default/shop/views/subscriptions/create.php 35
ERROR - 2021-07-08 12:56:42 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 12:56:42 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 12:56:42 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 12:57:03 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 12:57:03 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 12:57:03 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 12:57:06 --> Severity: Warning --> Undefined property: Subscriptions::$shop_model /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 84
ERROR - 2021-07-08 12:57:06 --> Severity: error --> Exception: Call to a member function getAddresses() on null /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 84
ERROR - 2021-07-08 13:00:23 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 13:00:23 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 13:00:23 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 13:00:28 --> Severity: Warning --> Undefined property: Subscriptions::$shop_model /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 84
ERROR - 2021-07-08 13:00:28 --> Severity: error --> Exception: Call to a member function getAddresses() on null /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 84
ERROR - 2021-07-08 13:01:56 --> Severity: error --> Exception: Call to undefined method Subscription_model::getSpecialPrice() /Users/saleem/Sites/sma/app/models/shop/Subscription_model.php 44
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$customer /Users/saleem/Sites/sma/system/core/Model.php 73
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$warehouse /Users/saleem/Sites/sma/system/core/Model.php 73
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined array key "Owner" /Users/saleem/Sites/sma/app/core/MY_Controller.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined array key "Admin" /Users/saleem/Sites/sma/app/core/MY_Controller.php 116
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined array key "Supplier" /Users/saleem/Sites/sma/app/core/MY_Controller.php 117
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined array key "Customer" /Users/saleem/Sites/sma/app/core/MY_Controller.php 118
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined array key "Settings" /Users/saleem/Sites/sma/app/core/MY_Controller.php 119
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined array key "dateFormats" /Users/saleem/Sites/sma/app/core/MY_Controller.php 120
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined array key "assets" /Users/saleem/Sites/sma/app/core/MY_Controller.php 121
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined array key "GP" /Users/saleem/Sites/sma/app/core/MY_Controller.php 122
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 7
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 18
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 47
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "user_language" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 226
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 245
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $bc /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> foreach() argument must be of type array|object, null given /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1457
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:06 --> Could not find the language line "paypal"
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:03:06 --> Severity: Warning --> Attempt to read property "version" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:03:44 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 13:03:44 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 13:03:44 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$customer /Users/saleem/Sites/sma/system/core/Model.php 73
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$warehouse /Users/saleem/Sites/sma/system/core/Model.php 73
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined array key "Owner" /Users/saleem/Sites/sma/app/core/MY_Controller.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined array key "Admin" /Users/saleem/Sites/sma/app/core/MY_Controller.php 116
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined array key "Supplier" /Users/saleem/Sites/sma/app/core/MY_Controller.php 117
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined array key "Customer" /Users/saleem/Sites/sma/app/core/MY_Controller.php 118
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined array key "Settings" /Users/saleem/Sites/sma/app/core/MY_Controller.php 119
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined array key "dateFormats" /Users/saleem/Sites/sma/app/core/MY_Controller.php 120
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined array key "assets" /Users/saleem/Sites/sma/app/core/MY_Controller.php 121
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined array key "GP" /Users/saleem/Sites/sma/app/core/MY_Controller.php 122
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 7
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 18
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 47
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "user_language" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 226
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 245
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $bc /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> foreach() argument must be of type array|object, null given /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1457
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:03:47 --> Could not find the language line "paypal"
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:03:47 --> Severity: Warning --> Attempt to read property "version" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$warehouse /Users/saleem/Sites/sma/system/core/Model.php 73
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined array key "Owner" /Users/saleem/Sites/sma/app/core/MY_Controller.php 116
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined array key "Admin" /Users/saleem/Sites/sma/app/core/MY_Controller.php 117
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined array key "Supplier" /Users/saleem/Sites/sma/app/core/MY_Controller.php 118
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined array key "Customer" /Users/saleem/Sites/sma/app/core/MY_Controller.php 119
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined array key "Settings" /Users/saleem/Sites/sma/app/core/MY_Controller.php 120
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined array key "dateFormats" /Users/saleem/Sites/sma/app/core/MY_Controller.php 121
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined array key "assets" /Users/saleem/Sites/sma/app/core/MY_Controller.php 122
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined array key "GP" /Users/saleem/Sites/sma/app/core/MY_Controller.php 123
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 7
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 18
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 47
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "user_language" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 226
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 245
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $bc /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> foreach() argument must be of type array|object, null given /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1457
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:20 --> Could not find the language line "paypal"
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:06:20 --> Severity: Warning --> Attempt to read property "version" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined array key "Owner" /Users/saleem/Sites/sma/app/core/MY_Controller.php 117
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined array key "Admin" /Users/saleem/Sites/sma/app/core/MY_Controller.php 118
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined array key "Supplier" /Users/saleem/Sites/sma/app/core/MY_Controller.php 119
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined array key "Customer" /Users/saleem/Sites/sma/app/core/MY_Controller.php 120
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined array key "Settings" /Users/saleem/Sites/sma/app/core/MY_Controller.php 121
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined array key "dateFormats" /Users/saleem/Sites/sma/app/core/MY_Controller.php 122
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined array key "assets" /Users/saleem/Sites/sma/app/core/MY_Controller.php 123
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined array key "GP" /Users/saleem/Sites/sma/app/core/MY_Controller.php 124
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 7
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 18
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 47
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "user_language" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 226
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 245
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $bc /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> foreach() argument must be of type array|object, null given /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1457
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:06:30 --> Could not find the language line "paypal"
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:06:30 --> Severity: Warning --> Attempt to read property "version" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined array key "Owner" /Users/saleem/Sites/sma/app/core/MY_Controller.php 117
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined array key "Admin" /Users/saleem/Sites/sma/app/core/MY_Controller.php 118
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined array key "Supplier" /Users/saleem/Sites/sma/app/core/MY_Controller.php 119
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined array key "Customer" /Users/saleem/Sites/sma/app/core/MY_Controller.php 120
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined array key "Settings" /Users/saleem/Sites/sma/app/core/MY_Controller.php 121
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined array key "dateFormats" /Users/saleem/Sites/sma/app/core/MY_Controller.php 122
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined array key "assets" /Users/saleem/Sites/sma/app/core/MY_Controller.php 123
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined array key "GP" /Users/saleem/Sites/sma/app/core/MY_Controller.php 124
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 7
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 18
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 47
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "user_language" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 226
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 245
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined variable $bc /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> foreach() argument must be of type array|object, null given /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1457
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:01 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:08:02 --> Could not find the language line "paypal"
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:08:02 --> Severity: Warning --> Attempt to read property "version" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined array key "Owner" /Users/saleem/Sites/sma/app/core/MY_Controller.php 117
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined array key "Admin" /Users/saleem/Sites/sma/app/core/MY_Controller.php 118
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined array key "Supplier" /Users/saleem/Sites/sma/app/core/MY_Controller.php 119
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined array key "Customer" /Users/saleem/Sites/sma/app/core/MY_Controller.php 120
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined array key "Settings" /Users/saleem/Sites/sma/app/core/MY_Controller.php 121
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined array key "dateFormats" /Users/saleem/Sites/sma/app/core/MY_Controller.php 122
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined array key "assets" /Users/saleem/Sites/sma/app/core/MY_Controller.php 123
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined array key "GP" /Users/saleem/Sites/sma/app/core/MY_Controller.php 124
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 7
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 18
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 47
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Attempt to read property "user_language" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 226
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 245
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined variable $bc /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> foreach() argument must be of type array|object, null given /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1457
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Attempt to read property "indian_gst" on null /Users/saleem/Sites/sma/themes/default/admin/views/suppliers/add.php 61
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Undefined variable $modal_js /Users/saleem/Sites/sma/themes/default/admin/views/suppliers/add.php 118
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:08:42 --> Severity: Warning --> Attempt to read property "version" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined array key "Owner" /Users/saleem/Sites/sma/app/core/MY_Controller.php 117
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined array key "Admin" /Users/saleem/Sites/sma/app/core/MY_Controller.php 118
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined array key "Supplier" /Users/saleem/Sites/sma/app/core/MY_Controller.php 119
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined array key "Customer" /Users/saleem/Sites/sma/app/core/MY_Controller.php 120
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined array key "Settings" /Users/saleem/Sites/sma/app/core/MY_Controller.php 121
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined array key "dateFormats" /Users/saleem/Sites/sma/app/core/MY_Controller.php 122
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined array key "assets" /Users/saleem/Sites/sma/app/core/MY_Controller.php 123
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined array key "GP" /Users/saleem/Sites/sma/app/core/MY_Controller.php 124
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 7
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 18
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 47
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "user_language" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 226
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 245
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $bc /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> foreach() argument must be of type array|object, null given /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1457
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:10:05 --> Could not find the language line "paypal"
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:10:05 --> Severity: Warning --> Attempt to read property "version" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined array key "Owner" /Users/saleem/Sites/sma/app/core/MY_Controller.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined array key "Admin" /Users/saleem/Sites/sma/app/core/MY_Controller.php 116
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined array key "Supplier" /Users/saleem/Sites/sma/app/core/MY_Controller.php 117
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined array key "Customer" /Users/saleem/Sites/sma/app/core/MY_Controller.php 118
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined array key "Settings" /Users/saleem/Sites/sma/app/core/MY_Controller.php 119
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined array key "dateFormats" /Users/saleem/Sites/sma/app/core/MY_Controller.php 120
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined array key "assets" /Users/saleem/Sites/sma/app/core/MY_Controller.php 121
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined array key "GP" /Users/saleem/Sites/sma/app/core/MY_Controller.php 122
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 7
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 18
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 47
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "user_language" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 226
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 245
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $bc /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> foreach() argument must be of type array|object, null given /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1457
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:14:28 --> Could not find the language line "paypal"
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:28 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 536
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:14:29 --> Severity: Warning --> Attempt to read property "version" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 13:15:20 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 13:15:20 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 13:15:20 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 13:16:30 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 13:16:30 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 13:16:30 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined variable $shop_settings /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "hide_price" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 341
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: stdClass::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "rate" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 113
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Undefined property: Subscriptions::$selected_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 22
ERROR - 2021-07-08 13:16:38 --> Severity: Warning --> Attempt to read property "symbol" on null /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2021-07-08 13:16:38 --> Could not find the language line "paypal"
ERROR - 2021-07-08 13:17:53 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 13:17:53 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 13:17:53 --> Could not find the language line "paypal"
ERROR - 2021-07-08 13:18:13 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 13:18:13 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 13:18:13 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:07:16 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:07:16 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:07:16 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:08:07 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:08:07 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:08:07 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:08:19 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:08:19 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:08:19 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:08:42 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:08:42 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:08:42 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:09:05 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:09:05 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:09:05 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:09:14 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:09:14 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:09:14 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:09:37 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:09:37 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:09:37 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:09:45 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:09:45 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:09:45 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:10:31 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:10:31 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:10:31 --> Could not find the language line "paypal"
ERROR - 2021-07-08 14:11:17 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:11:17 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:12:14 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:12:14 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:12:56 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:12:56 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:13:22 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:13:22 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:13:51 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:13:51 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:14:08 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:14:08 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:14:36 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:14:36 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:15:16 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:15:16 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:16:29 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:16:29 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 43
ERROR - 2021-07-08 14:18:19 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 42
ERROR - 2021-07-08 14:18:19 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 42
ERROR - 2021-07-08 14:18:55 --> Severity: Warning --> Undefined array key 0 /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 42
ERROR - 2021-07-08 14:18:55 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 42
ERROR - 2021-07-08 14:38:04 --> Severity: Warning --> Attempt to read property "id" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 40
ERROR - 2021-07-08 14:38:04 --> Severity: Warning --> Attempt to read property "address" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 379
ERROR - 2021-07-08 14:38:04 --> Severity: Warning --> Attempt to read property "city" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 380
ERROR - 2021-07-08 14:38:04 --> Severity: Warning --> Attempt to read property "state" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 381
ERROR - 2021-07-08 14:38:04 --> Severity: Warning --> Attempt to read property "postal_code" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 382
ERROR - 2021-07-08 14:38:04 --> Severity: Warning --> Attempt to read property "country" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 382
ERROR - 2021-07-08 14:38:04 --> Severity: Warning --> Attempt to read property "phone" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 383
ERROR - 2021-07-08 14:42:40 --> Severity: Warning --> Attempt to read property "id" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 40
ERROR - 2021-07-08 14:42:54 --> Severity: Warning --> Attempt to read property "id" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 40
ERROR - 2021-07-08 14:50:31 --> Severity: Warning --> Attempt to read property "id" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 378
ERROR - 2021-07-08 14:50:31 --> Severity: Warning --> Attempt to read property "id" on array /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 379
ERROR - 2021-07-08 14:59:32 --> Severity: Warning --> Undefined property: Subscriptions::$shop_model /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 190
ERROR - 2021-07-08 14:59:32 --> Severity: error --> Exception: Call to a member function getAddresses() on null /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 190
ERROR - 2021-07-08 15:00:33 --> Severity: Warning --> Undefined property: Subscriptions::$shop_model /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 190
ERROR - 2021-07-08 15:00:33 --> Severity: error --> Exception: Call to a member function getAddresses() on null /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 190
ERROR - 2021-07-08 15:17:24 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 34
ERROR - 2021-07-08 15:18:01 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 34
ERROR - 2021-07-08 15:20:19 --> Severity: error --> Exception: Cannot use object of type stdClass as array /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 86
ERROR - 2021-07-08 15:20:39 --> Severity: error --> Exception: syntax error, unexpected token ";" /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 34
ERROR - 2021-07-08 15:23:01 --> Severity: error --> Exception: json_decode(): Argument #1 ($json) must be of type string, stdClass given /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 36
ERROR - 2021-07-08 15:23:20 --> Severity: error --> Exception: json_decode(): Argument #1 ($json) must be of type string, stdClass given /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 36
ERROR - 2021-07-08 15:25:21 --> Severity: error --> Exception: json_decode(): Argument #1 ($json) must be of type string, array given /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/add.php 35
ERROR - 2021-07-08 15:42:15 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 15:42:15 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 15:42:15 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 15:46:12 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 15:46:12 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 15:46:12 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 15:46:16 --> Severity: Warning --> Undefined property: Subscriptions::$shop_model /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 165
ERROR - 2021-07-08 15:46:16 --> Severity: error --> Exception: Call to a member function getAddresses() on null /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 165
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Undefined array key "Owner" /Users/saleem/Sites/sma/app/core/MY_Controller.php 115
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Undefined array key "Admin" /Users/saleem/Sites/sma/app/core/MY_Controller.php 116
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Undefined array key "Supplier" /Users/saleem/Sites/sma/app/core/MY_Controller.php 117
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Undefined array key "Customer" /Users/saleem/Sites/sma/app/core/MY_Controller.php 118
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Undefined array key "Settings" /Users/saleem/Sites/sma/app/core/MY_Controller.php 119
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Undefined array key "dateFormats" /Users/saleem/Sites/sma/app/core/MY_Controller.php 120
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Undefined array key "assets" /Users/saleem/Sites/sma/app/core/MY_Controller.php 121
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Undefined array key "GP" /Users/saleem/Sites/sma/app/core/MY_Controller.php 122
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 7
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 18
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 47
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Attempt to read property "user_language" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 226
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Attempt to read property "user_rtl" on null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 245
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 259
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 966
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1034
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1089
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1117
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1160
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1188
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1216
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1266
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Undefined variable $bc /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> foreach() argument must be of type array|object, null given /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1448
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/header.php 1457
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Trying to access array offset on value of type null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 458
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Attempt to read property "site_name" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 15:48:57 --> Severity: Warning --> Attempt to read property "version" on null /Users/saleem/Sites/sma/themes/default/admin/views/footer.php 10
ERROR - 2021-07-08 16:02:13 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 16:02:13 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:02:13 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:15:03 --> Severity: Warning --> Undefined property: Subscriptions::$subscriptions_model /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 114
ERROR - 2021-07-08 16:15:03 --> Severity: error --> Exception: Call to a member function deleteSubscription() on null /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 114
ERROR - 2021-07-08 16:15:34 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 16:15:34 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:15:34 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:15:46 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 16:15:46 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:15:46 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:17:17 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 16:17:17 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:17:17 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:17:17 --> Could not find the language line "create_sale"
ERROR - 2021-07-08 16:18:59 --> Severity: error --> Exception: syntax error, unexpected token "<" /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 209
ERROR - 2021-07-08 16:19:56 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 16:19:56 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:19:56 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:21:38 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 16:21:38 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:21:38 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:39:25 --> Severity: Warning --> Undefined property: stdClass::$product_unit_id /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 352
ERROR - 2021-07-08 16:39:25 --> Severity: Warning --> Undefined variable $c /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 381
ERROR - 2021-07-08 16:39:25 --> Severity: Warning --> Undefined variable $c /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 383
ERROR - 2021-07-08 16:39:25 --> Severity: Warning --> Undefined variable $options /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 384
ERROR - 2021-07-08 16:39:25 --> Severity: Warning --> Undefined variable $c /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 385
ERROR - 2021-07-08 16:39:25 --> Severity: Warning --> Undefined property: stdClass::$product_unit_id /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 352
ERROR - 2021-07-08 16:39:25 --> Severity: Warning --> Undefined variable $options /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 384
ERROR - 2021-07-08 16:39:25 --> Severity: Warning --> Undefined property: stdClass::$product_unit_id /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 352
ERROR - 2021-07-08 16:39:25 --> Severity: Warning --> Undefined variable $options /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 384
ERROR - 2021-07-08 16:40:09 --> Severity: Warning --> Undefined variable $c /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 381
ERROR - 2021-07-08 16:40:09 --> Severity: Warning --> Undefined variable $c /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 383
ERROR - 2021-07-08 16:40:09 --> Severity: Warning --> Undefined variable $options /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 384
ERROR - 2021-07-08 16:40:09 --> Severity: Warning --> Undefined variable $c /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 385
ERROR - 2021-07-08 16:40:09 --> Severity: Warning --> Undefined variable $options /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 384
ERROR - 2021-07-08 16:40:09 --> Severity: Warning --> Undefined variable $options /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 384
ERROR - 2021-07-08 16:40:43 --> Severity: Warning --> Undefined variable $options /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 385
ERROR - 2021-07-08 16:40:43 --> Severity: Warning --> Undefined variable $options /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 385
ERROR - 2021-07-08 16:40:43 --> Severity: Warning --> Undefined variable $options /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 385
ERROR - 2021-07-08 16:43:21 --> Severity: error --> Exception: Call to undefined method Sales::print_arrays() /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 393
ERROR - 2021-07-08 16:49:39 --> Query error: Unknown column 'last_sale_id' in 'field list' - Invalid query: UPDATE `sma_subscriptions` SET `last_sale_id` = 8
WHERE `id` = '2'
ERROR - 2021-07-08 16:50:44 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 16:50:44 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:50:44 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:51:32 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 16:51:32 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:51:32 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 16:57:56 --> Severity: Compile Error --> Unparenthesized `a ? b : c ? d : e` is not supported. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 39
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "user_id" on null /Users/saleem/Sites/sma/app/controllers/admin/Subscriptions.php 183
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "id" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 30
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "replacement" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 37
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "payment_method" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 38
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "pay_with_credit" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 39
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "billing_address" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 40
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "delivery" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 41
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "delivery_address" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 42
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "week" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 43
ERROR - 2021-07-08 17:01:18 --> Severity: Warning --> Attempt to read property "name" on null /Users/saleem/Sites/sma/themes/default/admin/views/subscriptions/edit.php 327
ERROR - 2021-07-08 17:05:49 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 17:05:49 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 17:05:49 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 17:45:06 --> Could not find the language line "monday"
ERROR - 2021-07-08 17:45:06 --> Could not find the language line "tuesday"
ERROR - 2021-07-08 17:45:06 --> Could not find the language line "wednesday"
ERROR - 2021-07-08 17:45:06 --> Could not find the language line "thursday"
ERROR - 2021-07-08 17:45:06 --> Could not find the language line "friday"
ERROR - 2021-07-08 17:45:06 --> Could not find the language line "saturday"
ERROR - 2021-07-08 17:45:06 --> Could not find the language line "sunday"
ERROR - 2021-07-08 17:45:33 --> Could not find the language line "monday"
ERROR - 2021-07-08 17:45:33 --> Could not find the language line "tuesday"
ERROR - 2021-07-08 17:45:33 --> Could not find the language line "wednesday"
ERROR - 2021-07-08 17:45:33 --> Could not find the language line "thursday"
ERROR - 2021-07-08 17:45:33 --> Could not find the language line "friday"
ERROR - 2021-07-08 17:45:33 --> Could not find the language line "saturday"
ERROR - 2021-07-08 17:45:33 --> Could not find the language line "sunday"
ERROR - 2021-07-08 17:46:13 --> Could not find the language line "monday"
ERROR - 2021-07-08 17:46:13 --> Could not find the language line "tuesday"
ERROR - 2021-07-08 17:46:13 --> Could not find the language line "wednesday"
ERROR - 2021-07-08 17:46:13 --> Could not find the language line "thursday"
ERROR - 2021-07-08 17:46:13 --> Could not find the language line "friday"
ERROR - 2021-07-08 17:46:13 --> Could not find the language line "saturday"
ERROR - 2021-07-08 17:46:13 --> Could not find the language line "sunday"
ERROR - 2021-07-08 17:46:23 --> Could not find the language line "monday"
ERROR - 2021-07-08 17:46:23 --> Could not find the language line "tuesday"
ERROR - 2021-07-08 17:46:23 --> Could not find the language line "wednesday"
ERROR - 2021-07-08 17:46:23 --> Could not find the language line "thursday"
ERROR - 2021-07-08 17:46:23 --> Could not find the language line "friday"
ERROR - 2021-07-08 17:46:23 --> Could not find the language line "saturday"
ERROR - 2021-07-08 17:46:23 --> Could not find the language line "sunday"
ERROR - 2021-07-08 17:46:29 --> Could not find the language line "monday"
ERROR - 2021-07-08 17:46:29 --> Could not find the language line "tuesday"
ERROR - 2021-07-08 17:46:29 --> Could not find the language line "wednesday"
ERROR - 2021-07-08 17:46:29 --> Could not find the language line "thursday"
ERROR - 2021-07-08 17:46:29 --> Could not find the language line "friday"
ERROR - 2021-07-08 17:46:30 --> Could not find the language line "saturday"
ERROR - 2021-07-08 17:46:30 --> Could not find the language line "sunday"
ERROR - 2021-07-08 17:46:33 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 17:46:33 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 17:46:33 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 17:59:16 --> Could not find the language line "import_by_csv"
ERROR - 2021-07-08 17:59:16 --> Could not find the language line "delete_subscriptions"
ERROR - 2021-07-08 17:59:16 --> Could not find the language line "delete_subscriptions"
