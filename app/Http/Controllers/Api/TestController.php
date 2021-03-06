<?php

namespace App\Http\Controllers\Api;

use App\Traits\Controllers\ResponseReturn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class TestController extends Controller
{
    use ResponseReturn;

    public function index()
    {
        $list = [
            [
                'name'=>'tom',
            ],
            [
                'name'=>'jack',
            ]
        ];
        echo 'hello world!';
        echo 'hello world!';
        return $this->responseSucceed(compact('list'));
    }

    public function store()
    {
        return $this->responseCreated();
    }

    public function update()
    {
        return $this->responseSucceed();
    }

    public function destroy()
    {
        return $this->responseDeleted();
    }

    public function fail()
    {
        return $this->responseFailed();
    }

    public function notFound()
    {
        return $this->responseNotFound();
    }

    public function serverError()
    {
        return $this->responseServerError();
    }

    public function redirect()
    {
        return $this->responseRedirect([
            'uri'=>'http://www.baidu.com'
        ]);
    }
}
