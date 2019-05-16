<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    public function index()
    {
        $data = [
            'status' => 'success',
            'status_code' => '200',
            'data' => [
                [
                    'parent_number' => 0,
                    'number' => 1,
                    'disk_type' => 'cloud',
                    'is_history' => 0,
                    'name' => '1.txt',
                    'type' => 'file',
                    'size' => '1312k',
                    "file_type" => "doucument",
                    "file_ext" => "txt",
                    "bytes" => 54541,
                    "hash" => "121234",
                    "transcode_status" => "progess",
                    "is_lock" => false,
                    "lock_reason" => "",
                    "is_star" => true,
                    "share_count" => 124,
                    "last_update_date" => Carbon::now()->toDateTimeString(),

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
                    'parent_number' => 0,
                    'number' => 2,
                    'disk_type' => 'cloud',
                    'is_history' => 0,
                    'name' => '2.txt',
                    'type' => 'file',
                    'size' => '1312k',
                    "file_type" => "doucument",
                    "file_ext" => "txt",
                    "bytes" => 54541,
                    "hash" => "121234",
                    "transcode_status" => "progess",
                    "is_lock" => false,
                    "lock_reason" => "",
                    "is_star" => false,
                    "share_count" => 124,
                    "last_update_date" => Carbon::now()->toDateTimeString(),

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
                    'parent_number' => 0,
                    'number' => 3,
                    'disk_type' => 'cloud',
                    'is_history' => 0,
                    'name' => '3.txt',
                    'type' => 'file',
                    'size' => '1312k',
                    "file_type" => "doucument",
                    "file_ext" => "txt",
                    "bytes" => 54541,
                    "hash" => "121234",
                    "transcode_status" => "progess",
                    "is_lock" => false,
                    "lock_reason" => "",
                    "is_star" => true,
                    "share_count" => 124,
                    "last_update_date" => Carbon::now()->toDateTimeString(),

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
                    'parent_number' => 0,
                    'number' => 4,
                    'disk_type' => 'cloud',
                    'is_history' => 0,
                    'name' => '4.txt',
                    'type' => 'file',
                    'size' => '1312k',
                    "file_type" => "doucument",
                    "file_ext" => "txt",
                    "bytes" => 54541,
                    "hash" => "121234",
                    "transcode_status" => "progess",
                    "is_lock" => false,
                    "lock_reason" => "",
                    "is_star" => true,
                    "share_count" => 124,
                    "last_update_date" => Carbon::now()->toDateTimeString(),

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
                    'parent_number' => 0,
                    'number' => 5,
                    'disk_type' => 'cloud',
                    'is_history' => 0,
                    'name' => '5.txt',
                    'type' => 'file',
                    'size' => '1312k',
                    "file_type" => "doucument",
                    "file_ext" => "txt",
                    "bytes" => 54541,
                    "hash" => "121234",
                    "transcode_status" => "progess",
                    "is_lock" => false,
                    "lock_reason" => "",
                    "is_star" => true,
                    "share_count" => 124,
                    "last_update_date" => Carbon::now()->toDateTimeString(),

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
                    'parent_number' => 0,
                    'number' => 6,
                    'disk_type' => 'cloud',
                    'is_history' => 0,
                    'name' => '6.txt',
                    'type' => 'file',
                    'size' => '1312k',
                    "file_type" => "doucument",
                    "file_ext" => "txt",
                    "bytes" => 54541,
                    "hash" => "121234",
                    "transcode_status" => "progess",
                    "is_lock" => false,
                    "lock_reason" => "",
                    "is_star" => true,
                    "share_count" => 124,
                    "last_update_date" => Carbon::now()->toDateTimeString(),

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
                    'parent_number' => 0,
                    'number' => 7,
                    'disk_type' => 'cloud',
                    'is_history' => 0,
                    'name' => '7.txt',
                    'type' => 'file',
                    'size' => '1312k',
                    "file_type" => "doucument",
                    "file_ext" => "txt",
                    "bytes" => 54541,
                    "hash" => "121234",
                    "transcode_status" => "progess",
                    "is_lock" => false,
                    "lock_reason" => "",
                    "is_star" => true,
                    "share_count" => 124,
                    "last_update_date" => Carbon::now()->toDateTimeString(),

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
                    'parent_number' => 0,
                    'number' => 8,
                    'disk_type' => 'cloud',
                    'is_history' => 0,
                    'name' => '8.txt',
                    'type' => 'file',
                    'size' => '1312k',
                    "file_type" => "doucument",
                    "file_ext" => "txt",
                    "bytes" => 54541,
                    "hash" => "121234",
                    "transcode_status" => "progess",
                    "is_lock" => false,
                    "lock_reason" => "",
                    "is_star" => true,
                    "share_count" => 124,
                    "last_update_date" => Carbon::now()->toDateTimeString(),

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
            ]
        ];
        return response($data);
    }
    public function getTrees()
    {
        $tree = [
            [
                'id' => "cloud",
                'pid' => -1,
                'title' => "我的云盘",
                'children' => [
                    [
                        'id' => "11111111111111111111",
                        'pid' => 'cloud',
                        'title' => "二级 1-1",
                        'children' => [
                            [
                                'id' => "2222222222222222222",
                                'pid' => '11111111111111111111',
                                'title' => "三级 1-1-1",
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id' => "backup",
                'pid' => -1,
                'title' => "备份盘",
                'children' => [
                    [
                        'id' => "cab15000-6c38-1e9-a943-bd08cf0bba41",
                        'pid' =>'backup',
                        'title' => "三级 1-1-1",
                        'children' => [
                            [
                                'id' => "cab15000-6c3e9-a943-bd0cf0bba41",
                                'pid' => "cab15000-6c38-1e9-a943-bd08cf0bba41",
                                'title' => "三级 2-1-1",
                            ]
                        ]
                    ],
                    [
                        'id' => "cab15000-6c38-943-bd08cf0bba4",
                        'pid' => "cab15000-6c3e9-a943-bd0cf0bba41",
                        'title' => "二级 2-2",
                        'children' => [
                            [
                                'id' => "cab1500-638-1e9-a943-bd0f0bba41",
                                'pid' => "cab15000-6c38-943-bd08cf0bba4",
                                'title' => "三级 2-2-1",
                            ]
                        ]
                    ]
                ]
            ]
        ];
        $data = [
            'status' => 'success',
            'status_code' => '200',
            'data' => $tree
        ];
        return response($data);
    }

    public function store(Request $request)
    {
        return response('success');
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

    public function toggleStar(Request $request)
    {
        return response($request->all());
    }
    public function destroy($id)
    {
        return response('success');
    }
    public function update(Request $request, $id)
    {
        return response($request->all());
    }
    public function operationFileOrFolder(Request $request){
        return response($request->all());
    }
    public function rename(Request $request){
        return response($request->all());
    }


}
