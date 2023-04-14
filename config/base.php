<?php

/* --- System group user */
if (!defined('GROUP_ADMIN')) {define('GROUP_ADMIN', 1);}
if (!defined('GROUP_USER')) {define('GROUP_USER', 2);}

/* --- System active */
if (!defined('ACTIVE_TRUE')) {define('ACTIVE_TRUE', 1);}
if (!defined('ACTIVE_FALSE')) {define('ACTIVE_FALSE', 0);}
if (!defined('EMAIL_TEMPLATE_FORGOT_PASSWORD')) {define('EMAIL_TEMPLATE_FORGOT_PASSWORD', 1);}

if (!defined('FIRST')) {define('FIRST', 1);}
if (!defined('BUSINESS')) {define('BUSINESS', 2);}
if (!defined('ECONOMY')) {define('ECONOMY', 3);}


if (!defined('WAITING')) {define('WAITING', 1);}
if (!defined('FINISH')) {define('FINISH', 2);}



if (!defined('SESSION_EXPIRED')) {define('SESSION_EXPIRED', 180);} // Expired in 30 minutes

return [
    'type_of_class' => [
        1 => 'Hạng nhất',
        2 => 'Doanh nhân',
        3 => 'Phổ thông',
    ],

    'type_of_bill' => [
        1 => 'Chờ thanh toán',
        2 => 'Đã thanh toán',
    ],

    'roles' => [
        1 => 'Admin',
        2 => 'User'
    ],

    'active' => [
        1 => 'Hoạt động',
        0 => 'Khóa'
    ],

    'trang_thai_chuyen_bay' => [
        0 => 'Hoạt động',
        1 => 'Hủy bỏ'
    ],

    'seats' => [
        1 => [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5,
            6 => 6,
            7 => 7,
            8 => 8,
            9 => 9,
            10 => 10,
        ],
        2 => [
            11 => 11,
            12 => 12,
            13 => 13,
            14 => 14,
            15 => 15,
            16 => 16,
            17 => 17,
            18 => 18,
            19 => 19,
            20 => 20,
        ],
        3 => [
            21 => 21,
            22 => 22,
            23 => 23,
            24 => 24,
            25 => 25,
            26 => 26,
            27 => 27,
            28 => 28,
            29 => 29,
            30 => 30,
        ]
    ],


];

