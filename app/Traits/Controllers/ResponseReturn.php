<?php

namespace App\Traits\Controllers;
use Symfony\Component\HttpFoundation\Response as FoundationResponse;

trait ResponseReturn
{

    /**
     * 请求成功返回
     *
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function success($data = [])
    {
        return response()->json($data, SUCCESS_CODE);
    }

    /**
     * 请求失败返回
     *
     * @param string $status
     * @param string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function fail($status = FAIL_STATUS, $message = '', $code = FAIL_CODE)
    {
        if ($code === FAIL_CODE){
            $json['status'] = $status;
        }

        $json['message'] = empty($message) ? RESPONSE_RETURN_MES[$code] : $message;

        return response()->json($json, $code);
    }
}
