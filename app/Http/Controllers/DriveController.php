<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if(request('tag')){
//            return response([]);
//        }
        $data = [
            'status' => 'success',
            'status_code' => '200',
            'data' => [
                [
                    'id' => 1,
                    'name' => '1.txt',
                    'type' => 'file',
                    'size' => '1312k',
                    'createUser' => 'lucy',
                    'createdAt' => Carbon::now()->toDateTimeString(),
                    'updateAt' => Carbon::now()->toDateTimeString(),
                    'shareAt' => Carbon::now()->toDateTimeString(),
                    'shareTimes' => 200,
                    'shareFormUser' => '张三',
                    'shareToUser' => '小三',
                    'isStar' => true,
                    'tags' => [
                        '风景', '人物', '事件'
                    ]

                ],
                [
                    'id' => 2,
                    'name' => '2.txt',
                    'type' => 'folder',
                    'size' => '1312k',
                    'createUser' => 'lily',
                    'createdAt' => Carbon::now()->toDateTimeString(),
                    'updateAt' => Carbon::now()->toDateTimeString(),
                    'shareAt' => Carbon::now()->toDateTimeString(),
                    'shareTimes' => 200,
                    'shareFormUser' => '张三',
                    'shareToUser' => '小三',
                    'isStar' => false,
                    'tags' => [
                        '风景', '人物', '事件'
                    ]

                ]
            ]
        ];
        return response($data);
    }

    public function store(Request $request)
    {
        //
    }

    public function getTags()
    {
        $data = [
            'status' => '成功',
            'status_code' => '200',
            'data' => [
                [ 'id' => 1, 'name' => '人物' ],
                [ 'id' => 2, 'name' => '风景' ],
                [ 'id' => 3, 'name' => '事件' ],
                [ 'id' => 4, 'name' => '学校' ],
                [ 'id' => 5, 'name' => '食堂' ],
            ]
        ];
        return response($data);
    }

    public function toggleStar($id)
    {
        return response('success');
    }


}
