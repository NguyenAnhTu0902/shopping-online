<?php

namespace App\Constants;

class CommonConstants
{

    const KEYWORD = 'keyword';
    const KEY_LIMIT = 'limit';
    const INPUT_PAGE = 'page';
    const INPUT_PAGE_SIZE = 'page_size';
    const DEFAULT_LIMIT_PAGE = 10;

    // Query constant
    const SELECT_ALL = ['*'];
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';
    const PAGE_DEFAULT = 1;

    // Operator
    const OPERATOR_LIKE = 'like';
    const OPERATOR_EQUAL = '=';
    const OPERATOR_NOT_EQUAL = '!=';
    const OPERATOR_GREATER_THAN = '>';
    const OPERATOR_LESS_THAN = '<';
    const OPERATOR_GREATER_THAN_EQUAL = '>=';
    const OPERATOR_LESS_THAN_EQUAL = '<=';

    // common field
    const ID = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    // sort
    const KEY_SORT_COLUMN = 'sort_column';
    const KEY_SORT_TYPE = 'sort_type';
    const SORT_TYPE_DEFAULT = 'sorting_asc';

    // Validate
    const RULE_VALIDATE_PRICE = ['bail', 'nullable', 'numeric', 'digits_between:1,10', 'regex:/^[0-9]+$/'];

    //Price
    const PRICE_DEFAULT = 0;
    const order_status_ReceiveOrders = 1;
    const order_status_Unconfirmed = 2;
    const order_status_Confirmed = 3;
    const order_status_Paid = 4;
    const order_status_Processing = 5;
    const order_status_Shipping = 6;
    const order_status_Finish = 7;
    const order_status_Cancel = 0;
    public static $order_status = [
        self::order_status_ReceiveOrders => "Receive Orders",
        self::order_status_Unconfirmed => "Unconfirmed",
        self::order_status_Confirmed => "Confirmed",
        self::order_status_Paid => "Paid",
        self::order_status_Processing => "Processing",
        self::order_status_Shipping => "Shipping",
        self::order_status_Finish => "Finish",
        self::order_status_Cancel => "Cancel",

    ];
    // Regex
    public const RULES_PHONE = 'bail|nullable|numeric|min_digits:10|max_digits:11|regex:/^[0-9]+$/';

    public const PRODUCT_IMAGE = 'products' . DIRECTORY_SEPARATOR . 'images';
    //User
    const not_activated = 0;
    const role_host = 1;
    const role_admin = 2;
    const role_client = 3;
    public static $user_level = [
        self::role_host =>'Host',
        self::role_admin => 'Admin',
        self::role_client => 'Client',
        self::not_activated => 'Not activated',
    ];

}
