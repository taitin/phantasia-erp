<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Admin;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $user = Admin::user();

        if ($user->inRoles('administrator') || $user->inRoles('accounting')) {

            admin_js([asset('js/fullcalendar-5.10.1/lib/main.min.js'), asset('js/fullcalendar-5.10.1/lib/locales-all.min.js')]);
            admin_css(asset('js/fullcalendar-5.10.1/lib/main.min.css'));

            return $content
                ->header('行事曆')
                ->description('應收應付表')
                ->body(view('calender'));
        }
        return $content
            // ->title('主控版面')
            // ->description('歡迎使用UGO後臺管理系統')
            ->row(view('title'));
    }
}
