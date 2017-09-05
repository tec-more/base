<?php namespace Tukecx\Base\Core\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapModuleServiceProvider extends ServiceProvider
{
    protected $module = 'Tukecx\Base\Core';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->booted(function () {
            $this->booted();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    private function booted()
    {
        $this->registerMenu();

        $this->generalSettings();
        $this->socialNetworks();
    }

    private function registerMenu()
    {
        /**
         * Register to dashboard menu
         */
        \DashboardMenu::registerItem([
            'id' => 'tukecx-dashboard',
            'priority' => -999,
            'parent_id' => null,
            'heading' => '面板',
            'title' => '控制台',
            'font_icon' => 'icon-pie-chart',
            'link' => route('admin::dashboard.index.get'),
            'css_class' => null,
        ]);

        \DashboardMenu::registerItem([
            'id' => 'tukecx-configuration',
            'priority' => 999,
            'parent_id' => null,
            'heading' => '高级',
            'title' => '配置',
            'font_icon' => 'icon-settings',
            'link' => route('admin::settings.index.get'),
            'css_class' => null,
        ]);
    }

    private function generalSettings()
    {
        cms_settings()
            ->addSettingField('site_title', [
                'group' => 'basic',
                'type' => 'text',
                'priority' => 5,
                'label' => '站点标题',
                'helper' => '我们的站点标题'
            ], function () {
                return [
                    'site_title',
                    get_settings('site_title'),
                    ['class' => 'form-control']
                ];
            })
            ->addSettingField('site_logo', [
                'group' => 'basic',
                'type' => 'selectImageBox',
                'priority' => 5,
                'label' => '站点Logo',
                'helper' => '我们的站点logo'
            ], function () {
                return [
                    'site_logo',
                    get_settings('site_logo'),
                ];
            })
            ->addSettingField('favicon', [
                'group' => 'basic',
                'type' => 'selectImageBox',
                'priority' => 5,
                'label' => 'Favicon',
                'helper' => '16x16, support png, gif, ico, jpg'
            ], function () {
                return [
                    'favicon',
                    get_settings('favicon'),
                ];
            })
            ->addSettingField('construction_mode', [
                'group' => 'advanced',
                'type' => 'customCheckbox',
                'priority' => 5,
                'label' => null,
                'helper' => '标记这个网站上的维护模式。刚刚登录管理员可以访问前面的网站.',
            ], function () {
                return [
                    [['construction_mode', '1', 'On construction mode', get_settings('construction_mode'),]],
                ];
            })
            ->addSettingField('show_admin_bar', [
                'group' => 'advanced',
                'type' => 'customCheckbox',
                'priority' => 5,
                'label' => null,
                'helper' => '当管理员登录时，仍然显示前网站的管理栏.'
            ], function () {
                return [
                    [['show_admin_bar', '1', 'Show admin bar', get_settings('show_admin_bar')]],
                ];
            });
    }

    private function socialNetworks()
    {
        cms_settings()->addGroup('socials', '社交网络');

        $socials = [
            'facebook' => [
                'label' => 'Facebook',
            ],
            'youtube' => [
                'label' => 'Youtube',
            ],
            'twitter' => [
                'label' => 'Twitter',
            ]
        ];
        foreach ($socials as $key => $row) {
            cms_settings()->addSettingField($key, [
                'group' => 'socials',
                'type' => 'text',
                'priority' => 1,
                'label' => $row['label'],
                'helper' => null
            ], function () use ($key) {
                return [
                    $key,
                    get_settings($key),
                    [
                        'class' => 'form-control',
                        'placeholder' => 'https://',
                        'autocomplete' => 'off'
                    ]
                ];
            });
        }
    }
}
