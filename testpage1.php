<?php
/**
 * INTER-Mediator
 * Copyright (c) INTER-Mediator Directive Committee (http://inter-mediator.org)
 * This project started at the end of 2009 by Masayuki Nii msyk@msyk.net.
 *
 * INTER-Mediator is supplied under MIT License.
 * Please see the full license for details:
 * https://github.com/INTER-Mediator/INTER-Mediator/blob/master/dist-docs/License.txt
 *
 * @copyright     Copyright (c) INTER-Mediator Directive Committee (http://inter-mediator.org)
 * @link          https://inter-mediator.com/
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

require_once './vendor/inter-mediator/inter-mediator/INTER-Mediator.php';

IM_Entry(
    [
        [
            'name' => 'userlist',
            'view' => 'authuser',
            'table' => 'dummy',
            'key' => 'id',
            'records' => 1,
            'maxrecords' => 1,
            'authentication' => [
                'all' => [
                    'target' => 'field-user',
                    'field' => 'username',
                ],
            ],
        ],
        [
            'name' => 'sendmail',
            'view' => 'authuser',
            'table' => 'dummy',
            'key' => 'id',
            'records' => 1,
            'maxrecords' => 1,
            'authentication' => [
                'all' => [
                    'target' => 'field-user',
                    'field' => 'username',
                ],
            ],
            'send-mail' => [
                'read' => ['template-context' => 'mailtemplate@id=1301'],
            ],
        ],
        [
            'name' => 'mailtemplate',
            'table' => 'dummy',
            'key' => 'id',
            'records' => 1,
            'maxrecords' => 1,
        ],
    ],
    [
        'media-root-dir' => '/tmp',
        'authentication' => [
            'authexpired' => '60000', // Set as seconds.
            'storing' => 'credential',
        ],
        'smtp' => [
            'protocol' => 'smtp',
            'server' => 'msyk.sakura.ne.jp',
            'port' => 587,
            'username' => 'user1@msyk.net',
            'password' => 'Profile|IM|IMTesting_Messaging|SakuraPassword',
        ],
    ],
    ['db-class' => 'PDO',],
    2
);
