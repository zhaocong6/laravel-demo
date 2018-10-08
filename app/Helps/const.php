<?php

/*
 * http code
|--------------------------------------------------------------------------
| 200 成功
| 201 创建成功
| 202 异步投递成功
| 204 资源删除成功
|
| 303 重定向
|
| 400 客户端数据请求错误
| 401 未登录
| 403 禁止(没权限)
| 404 请求的资源不存在
| 429 客户端的请求次数超过限额
|
| 500 服务器内部错误
|
 * */
define('SUCCESS_CODE', 200);
define('CREATED_CODE', 201);
define('ACCEPTED_CODE', 202);
define('DELETED_CODE', 204);

define('SEE_OTHER_CODE', 303);

define('FAIL_CODE', 400);
define('UNAUTHORIZED_CODE', 401);
define('NO_PERMISSION_CODE', 403);
define('NOT_FOUND_CODE', 404);
define('TOO_MANY_REQUESTS_CODE', 429);

define('SERVER_ERROR_CODE', 500);

/*
 * 状态代码返回信息
 * */
define('RESPONSE_RETURN_MES', [
    200 =>  'Success',
    400 =>  'Invalid Payload',
    401 =>  'Unauthorized',
    403 =>  'No Permission',
    404 =>  'Not Found',
    429 =>  'Too Many Requests',
    500 =>  'Server Error'
]);

/*
 * 响应错误类型
|--------------------------------------------------------------------------
| FAIL_STATUS                   失败(业务逻辑错误, 代码逻辑错误, 等不直接返回错误信息给用户)
| INVALID_DATA_STATUS           无效参数
| ALREADY_EXISTS_STATUS         已经存在
| NOT_EXIST_STATUS              不存在
|
 * */
define('FAIL_STATUS', 'FAIL');
define('INVALID_DATA_STATUS', 'INVALID_DATA');
define('ALREADY_EXISTS_STATUS', 'ALREADY_EXISTS');
define('NOT_EXIST_STATUS', 'NOT_EXIST');
