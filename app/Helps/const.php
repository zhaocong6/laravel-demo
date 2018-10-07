<?php


/*
|--------------------------------------------------------------------------
| HTTP Status
| 200 ()
| 400 （错误请求）
| 401 （未登录）
| 403 （禁止）
| 404 （未找到）
| 500 （服务器内部错误）
|
*/
//响应状态码
define('SUCCESS_CODE', 200);
define('FAIL_CODE', 400);
define('UNAUTHORIZED_CODE', 401);
define('NO_PERMISSION_CODE', 403);
define('NOT_FOUND_CODE', 404);
define('SERVER_ERROR_CODE', 500);

//状态代码返回信息
define('RESPONSE_RETURN_MES', [
    400 =>  'Request Failed',
    401 =>  'unauthorized',
    403 =>  'No Permission',
    404 =>  'Not Found',
    500 =>  'Server Error'
]);

//响应错误类型
define('FAIL_STATUS', 'FAIL');//失败(业务逻辑错误, 代码逻辑错误, 等不直接返回给用户的错误)
define('INVALID_DATA_STATUS', 'INVALID_DATA');//无效参数
define('ALREADY_EXISTS_STATUS', 'ALREADY_EXISTS');//已经存在
define('NOT_EXIST_STATUS', 'NOT_EXIST');//不存在
