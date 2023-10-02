<?php

namespace App\View\Composer\Sidebar;


class SidebarContent
{

    public static function hasActiveChild($menus)
    {
        foreach ($menus as $menu) {
            if (request()->routeIs($menu['route']) || (isset($menu['menus']) && static::hasActiveChild($menu['menus']))) {
                return true;
            }
        }
        return false;
    }

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
                        'title' => 'Custom Color',
                        'route' => 'documentation.color',
                        'icon' => @svg('heroicon-o-swatch'),
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
                        'icon' => @svg('heroicon-o-credit-card'),
                        'menus' => [
                            [
                                'title' => 'alert',
                                'route' => 'documentation.alert',
                                'icon' => null,
                            ],
                            [
                                'title' => 'badge',
                                'route' => 'documentation.badge',
                                'icon' => null,
                            ],
                            [
                                'title' => 'button',
                                'route' => 'documentation.button',
                                'icon' => null,
                            ],
                            [
                                'title' => 'Card',
                                'route' => 'documentation.card',
                                'icon' => null,
                            ],
                            [
                                'title' => 'collapse',
                                'route' => 'documentation.collapse',
                                'icon' => null,
                            ],
                            [
                                'title' => 'modal',
                                'route' => 'documentation.modal',
                                'icon' => null,
                            ],
                            [
                                'title' => 'tooltip',
                                'route' => 'documentation.tooltip',
                                'icon' => null,
                            ],
                            [
                                'title' => 'input float-label',
                                'route' => 'documentation.input-float',
                                'icon' => null,
                            ],
                        ],
                    ],
                    [
                        'title' => 'Component (Splade)',
                        'route' => null,
                        'icon' => @svg('heroicon-o-list-bullet'),
                        'menus' => [
                            [
                                'title' => 'flash',
                                'route' => 'documentation.flash',
                                'icon' => null,
                            ],
                            [
                                'title' => 'toast',
                                'route' => 'documentation.toast',
                                'icon' => null,
                            ],
                            [
                                'title' => 'form',
                                'route' => 'documentation.form',
                                'icon' => null,
                            ],
                            [
                                'title' => 'link',
                                'route' => 'documentation.link',
                                'icon' => null,
                            ],
                            [
                                'title' => 'script',
                                'route' => 'documentation.script',
                                'icon' => null,
                            ],
                            [
                                'title' => 'toggle',
                                'route' => 'documentation.toggle',
                                'icon' => null,
                            ],
                            [
                                'title' => 'transition',
                                'route' => 'documentation.transition',
                                'icon' => null,
                            ],
                            [
                                'title' => 'teleport',
                                'route' => 'documentation.teleport',
                                'icon' => null,
                            ],
                        ]
                    ],
                    [
                        'title' => 'Input Component (Splade)',
                        'route' => null,
                        'icon' => @svg('heroicon-o-window'),
                        'menus' => [
                            [
                                'title' => 'input-overview',
                                'route' => 'documentation.input-overview',
                                'icon' => null,
                            ],
                            [
                                'title' => 'Input',
                                'title' => 'input',
                                'route' => 'documentation.input',
                                'icon' => null,
                            ],
                            [
                                'title' => 'textarea',
                                'route' => 'documentation.textarea',
                                'icon' => null,
                            ],
                            [
                                'title' => 'select',
                                'route' => 'documentation.select',
                                'icon' => null,
                            ],
                            [
                                'title' => 'checkbox',
                                'route' => 'documentation.checkbox',
                                'icon' => null,
                            ],
                            [
                                'title' => 'radio',
                                'route' => 'documentation.radio',
                                'icon' => null,
                            ],
                            [
                                'title' => 'file',
                                'route' => 'documentation.file',
                                'icon' => null,
                            ],
                            [
                                'title' => 'group',
                                'route' => 'documentation.group',
                                'icon' => null,
                            ],
                            [
                                'title' => 'submit',
                                'route' => 'documentation.submit',
                                'icon' => null,
                            ],
                            [
                                'title' => 'wysiwyg',
                                'route' => 'documentation.wysiwyg',
                                'icon' => null,
                            ],
                            [
                                'title' => 'model-binding',
                                'route' => 'documentation.model-binding',
                                'icon' => null,
                            ],
                        ]
                    ],
                    [
                        'title' => 'Table Component (Splade)',
                        'route' => null,
                        'icon' => @svg('heroicon-o-table-cells'),
                        'menus' => [
                            [
                                'title' => 'table-overview',
                                'route' => 'documentation.table-overview',
                                'icon' => null,
                            ],
                            [
                                'title' => 'table-query-builder',
                                'route' => 'documentation.table-query-builder',
                                'icon' => null,
                            ],
                            [
                                'title' => 'table-bulk-action',
                                'route' => 'documentation.table-bulk-action',
                                'icon' => null,
                            ],
                            [
                                'title' => 'table-export',
                                'route' => 'documentation.table-export',
                                'icon' => null,
                            ],
                            [
                                'title' => 'table-spatie-query-builder',
                                'route' => 'documentation.table-spatie-query-builder',
                                'icon' => null,
                            ],
                        ]
                    ],
                ],
            ]
        ];
    }
}
