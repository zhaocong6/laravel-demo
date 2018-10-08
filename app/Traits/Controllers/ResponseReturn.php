<?php

namespace App\Traits\Controllers;

trait ResponseReturn
{
    /**
     * 响应创建
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseCreated($data = null)
    {
        if ($data == null){
            $data = $this->setMessage($data);
        }

        return response()->json($data, CREATED_CODE);
    }

    /**
     * 响应更新
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseDeleted($data = null)
    {
        if ($data == null){
            $data = $this->setMessage($data);
        }

        return response()->json($data, DELETED_CODE);
    }

    /**
     * 响应异步
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseAccepted($data = null)
    {
        if ($data == null){
            $data = $this->setMessage($data);
        }

        return response()->json($data, ACCEPTED_CODE);
    }

    /**
     * 响应成功
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseSucceed($data = null)
    {
        if ($data == null){
            $data = $this->setMessage($data);
        }

        return response()->json($data, SUCCESS_CODE);
    }

    /**
     * 响应not found
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseNotFound()
    {
        $data = $this->setMessage([], NOT_FOUND_CODE);

        return response()->json($data, NOT_FOUND_CODE);
    }

    /**
     * 响应server error
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseServerError()
    {
        $data = $this->setMessage([], SERVER_ERROR_CODE);

        return response()->json($data, SERVER_ERROR_CODE);
    }

    /**
     * 响应失败
     *
     * @param string $message
     * @param string $status
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseFailed($message = '', $status = FAIL_STATUS, $code = FAIL_CODE)
    {
        if (empty($message)){
            $data = $this->setMessage([], $code);
        }else{
            $data['message'] = $message;
        }

        if ($code === FAIL_CODE){
            $data['status'] = $status;
        }

        return response()->json($data, $code);
    }

    /**
     * 响应重定向
     *
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseRedirect($data)
    {
        return response()->json($data, SEE_OTHER_CODE);
    }

    /**
     * 设置默认返回信息
     *
     * @param $data
     * @param $code
     * @return mixed
     */
    private function setMessage($data, $code = SUCCESS_CODE)
    {
        $data = empty($data) ? [] : $data;

        $data['message'] = RESPONSE_RETURN_MES[$code];

        return $data;
    }

}
