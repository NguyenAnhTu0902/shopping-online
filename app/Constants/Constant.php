<?php

// Optional
const INPUT_PAGE = 'page';
const INPUT_PAGE_SIZE = 'page_size';
const DEFAULT_LIMIT_PAGE = 10;
const UNLIMITED_PAGE = 9999;
const PAGE_DEFAULT = 1;

// Query constant
const SELECT_ALL = ['*'];
const ORDER_ASC = 'asc';
const ORDER_DESC = 'desc';

// Operator
const OPERATOR_LIKE = 'like';
const OPERATOR_EQUAL = '=';
const OPERATOR_NOT_EQUAL = '!=';

// Field
const ID = 'id';
const CREATED_AT = 'created_at';
const UPDATED_AT = 'updated_at';

// Key condition
const KEYWORD = 'keyword';
const KEY_LIMIT = 'limit';
const KEY_JOIN = 'join';
const KEY_LEFT_JOIN = 'left';
const KEY_INNER_JOIN = 'inner';
const KEY_TABLE = 'table_name';
const KEY_FOREIGN_KEY = 'foreign_key';
const KEY_PRIMARY_KEY = 'primary_key';
const KEY_SORT = 'sort';
const KEY_PAGINATE = 'paginates';
const KEY_RELATE = 'relate';
const KEY_FILTER = 'filter';
const KEY_RELATIONSHIP_NAME = 'relationship_name';
const KEY_RELATIONSHIP_SELECT = 'relationship_select';
const KEY_OPERATOR = 'operator';
const KEY_OR_WHERE_IN = 'or_where_in';
const KEY_VALUE = 'value';
const KEY_COLUMN = 'column';
const KEY_TYPE_JOIN = 'type';
const KEY_OR_WHERE_NOT_IN = 'or_where_not_in';
const KEY_OR_WHERE_BETWEEN = 'or_where_between';
const KEY_OR_WHERE_NOT_BETWEEN = 'or_where_not_between';
const KEY_OR_WHERE_NULL = 'or_where_null';
const KEY_OR_WHERE_NOT_NULL = 'or_where_not_null';
const KEY_OR_WHERE = 'or_where';
const KEY_WHERE_IN = 'where_in';
const KEY_WHERE_NOT_IN = 'where_not_in';
const KEY_WHERE_BETWEEN = 'where_between';
const KEY_WHERE_NOT_BETWEEN = 'where_not_between';
const KEY_WHERE_NULL = 'where_null';
const KEY_WHERE_NOT_NULL = 'where_not_null';
const KEY_WHERE_DATE = 'where_date';
const KEY_WHERE_HAS = 'where_has';
const KEY_WHERE_IN_VALUE_AND_NULL = 'where_in_column_or_null';
const KEY_WHERE_IN_VALUE_AND_NOT_NULL = 'where_in_column_and_not_null';
const KEY_LIKE_OR_WHERE = 'where_like_or_where';
const KEY_WHERE_HAS_LIKE = 'where_has_like';
const KEY_LIKE_WHERE = 'where_like';
const KEY_WHERE_HAS_BETWEEN = 'where_has_like_between';

// Api
const CREATE = 'create';
const UPDATE = 'update';
const DESTROY = 'delete';