<?php

$temp_task = [];
$task = Yii::$app->authManager->getPermissionsByUser(Yii::$app->user->getId());
foreach ($task as $key => $value) {
    $temp_task[] = $key;
}

$troles = [];
$user_roles = Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId());
foreach ($user_roles as $key => $value) {
    $troles[] = $key;
}
$temp_roles = array_merge($troles, $temp_task);

return[
    '<li class="header">MAIN NAVIGATION</li>',
        ['label' => 'Home', 'icon' => 'home', 'url' => ['site/index'],
        'visible' => !Yii::$app->user->isGuest
    ],
        ['label' => 'Category', 'icon' => 'folder', 'url' => ['/category'],
        'visible' => !Yii::$app->user->isGuest
    ],
        ['label' => 'Post', 'icon' => 'book',
        'items' => [
                ['label' => 'CREATE', 'icon' => 'pencil', 'url' => ['/post/create']],
                ['label' => 'VIEW', 'icon' => 'eye', 'url' => ['/post/']],
        ],
        'visible' => !Yii::$app->user->isGuest
    ],
        ['label' => 'Upload File', 'icon' => 'book',
        'items' => [
                ['label' => 'CREATE', 'icon' => 'pencil', 'url' => ['/uploaded-file/create']],
                ['label' => 'VIEW', 'icon' => 'eye', 'url' => ['/uploaded-file/']],
        ],
        'visible' => !Yii::$app->user->isGuest
    ],
        ['label' => 'RBAC', 'icon' => 'book text-blue',
        'items' => [
                ['label' => 'Admin', 'icon' => 'user', 'url' => ['admin']],
                ['label' => 'Routes', 'icon' => 'check', 'url' => ['/admin/route']],
                ['label' => 'Rules', 'icon' => 'check', 'url' => ['/admin/rule']],
                ['label' => 'Permissions', 'icon' => 'check', 'url' => ['/admin/permission']],
                ['label' => 'Roles', 'icon' => 'check', 'url' => ['/admin/role']],
                ['label' => 'Assignment', 'icon' => 'check', 'url' => ['/admin']],
        ],
        'visible' => !Yii::$app->user->isGuest
    ],
//    ['label' => 'Thoughts', 'icon' => 'glyphicon glyphicon-comment', 'url' => ['glyphicon glyphicon-comment/thoughts'],
//        
//        'visible' => !Yii::$app->user->isGuest
//    ], 
//    ['label' => 'Travel', 'icon' => 'fa-send', 'url' => ['fa-send/Travel'],
//        
//        'visible' => !Yii::$app->user->isGuest
//    ],
//    ['label' => 'Category', 'icon' => 'user-secret', 'url' => ['/Category'],
//        'items' => [
//            ['label' => 'Change Profile', 'icon' => 'user', 'iconOptions' => ['class' => 'text-green'], 'url' => ['/master/snode/asprofile'], 'visible' => in_array('/master/snode/asprofile', $temp_roles)],
//            ['label' => 'Change Password', 'icon' => 'key', 'iconOptions' => ['class' => 'text-yellow'], 'url' => ['/admin/user/change-password']],
//            ['label' => 'Logout', 'icon' => 'sign-out', 'linkOptions' => ['data-method' => 'post'], 'iconOptions' => ['class' => 'text-red'], 'url' => ['/site/logout']],
//        ],
//        'visible' => !Yii::$app->user->isGuest
//    ],
//    ['label' => 'POST', 'icon' => 'user-secret', 'iconOptions' => ['class' => 'text-blue'],
//        'items' => [
//            ['label' => 'Change Profile', 'icon' => 'user', 'iconOptions' => ['class' => 'text-green'], 'url' => ['/master/snode/asprofile'], 'visible' => in_array('/master/snode/asprofile', $temp_roles)],
//            ['label' => 'Change Password', 'icon' => 'key', 'iconOptions' => ['class' => 'text-yellow'], 'url' => ['/admin/user/change-password']],
//            ['label' => 'Logout', 'icon' => 'sign-out', 'linkOptions' => ['data-method' => 'post'], 'iconOptions' => ['class' => 'text-red'], 'url' => ['/site/logout']],
//        ],
//        'visible' => !Yii::$app->user->isGuest
//    ],
//    ['label' => 'RBAC', 'icon' => 'user-secret', 'iconOptions' => ['class' => 'text-blue'],
//        'items' => [
//            ['label' => 'Change Profile', 'icon' => 'user', 'iconOptions' => ['class' => 'text-green'], 'url' => ['/master/snode/asprofile'], 'visible' => in_array('/master/snode/asprofile', $temp_roles)],
//            ['label' => 'Change Password', 'icon' => 'key', 'iconOptions' => ['class' => 'text-yellow'], 'url' => ['/admin/user/change-password']],
//            ['label' => 'Logout', 'icon' => 'sign-out', 'linkOptions' => ['data-method' => 'post'], 'iconOptions' => ['class' => 'text-red'], 'url' => ['/site/logout']],
//        ],
//        'visible' => !Yii::$app->user->isGuest
//    ],
//    
//    '<li class="header">ADMIN MENU</li>',
//    ['label' => 'Setting', 'icon' => 'gear', 'iconOptions' => ['class' => 'text-orange'], 'visible' => in_array('sys.admin', $temp_roles),
//        'items' => [
//            ['label' => 'Users', 'icon' => 'user-o',
//                'items' => [
//                    ['label' => 'Users', 'icon' => 'user', 'url' => ['/user']],
//                    ['label' => 'Generate Token', 'icon' => 'key', 'url' => ['/user/create-token']],
//                    
//                ],
//            ],
//            ['label' => 'RBAC', 'icon' => 'unlock-alt',
//                'items' => [
//                    ['label' => 'Routes', 'icon' => 'check', 'url' => ['/admin/route']],
//                    ['label' => 'Rules', 'icon' => 'check', 'url' => ['/admin/rule']],
//                    ['label' => 'Permissions', 'icon' => 'check', 'url' => ['/admin/permission']],
//                    ['label' => 'Roles', 'icon' => 'check', 'url' => ['/admin/role']],
//                    ['label' => 'Assignment', 'icon' => 'check', 'url' => ['/admin']],
//                ],
//            ],
//            //['label' => 'Manual Book', 'icon' => 'book', 'url' => ['/panduan/manual-book']],
//        ],
//        'visible' => in_array('admin.pusat', $temp_roles),
//    ],
//    
//    ['label' => 'Login', 'icon' => 'sign-in', 'iconOptions' => ['class' => 'text-green'], 'url' => ['/site/login'],
//        'visible' => Yii::$app->user->isGuest],
//    
];
