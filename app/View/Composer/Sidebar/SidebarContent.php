<?php

namespace App\View\Composer\Sidebar;


class SidebarContent
{
    public static function dashboard()
    {
        return [
            [
                'title' => 'Dashboard',
                'menus' => [
                    [
                        'title' => 'Dashboard',
                        'route' => 'dashboard',
                        'icon' => @svg('heroicon-o-home'),
                        'menus' => [],
                    ],
                ],
            ],
            [
                'title' => 'Documentation',
                'menus' => [
                    [
                        'title' => 'Testing Components',
                        'route' => 'documentation.index',
                        'icon' => @svg('heroicon-o-bug-ant'),
                        'menus' => [],
                    ],
                    [
                        'title' => 'Testing Table',
                        'route' => 'test.table',
                        'icon' => @svg('heroicon-o-table-cells'),
                        'menus' => [],
                    ],
                    [
                        'title' => 'Sidebar',
                        'route' => 'documentation.sidebar',
                        'icon' => @svg('heroicon-o-adjustments-horizontal'),
                        'menus' => [],
                    ],
                    [
                        'title' => 'Helpers',
                        'route' => null,
                        'icon' => @svg('heroicon-o-question-mark-circle'),
                        'menus' => [
                            [
                                'title' => 'Controller helpers',
                                'route' => 'documentation.controller-helper',
                                'icon' => null,
                            ],
                            [
                                'title' => 'Upload file helpers',
                                'route' => 'documentation.upload-file-helper',
                                'icon' => null,
                            ],
                            [
                                'title' => 'Splade helpers',
                                'route' => 'documentation.splade-helper',
                                'icon' => null,
                            ],
                        ],
                    ],
                    [
                        'title' => 'Component',
                        'route' => null,
                        'icon' => @svg('heroicon-o-computer-desktop'),
                        'menus' => [
                            [
                                'title' => 'Card',
                                'route' => 'documentation.card',
                                'icon' => null,
                            ],
                            [
                                'title' => 'Button',
                                'route' => 'documentation.button',
                                'icon' => null,
                            ],
                            [
                                'title' => 'Input',
                                'route' => 'documentation.input',
                                'icon' => null,
                            ],
                        ],
                    ],
                ],
            ]
        ];
    }
}
