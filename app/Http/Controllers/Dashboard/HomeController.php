<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\file;
use App\Models\report;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController extends Controller
{
    public function welcome()
    {
        $reports = report::orderBy('id', 'DESC')->paginate(3);
        return view('dashboard.community.analysis', compact('reports'));
    }

    public function dashboard()
    {
        $reports = report::orderBy('id', 'DESC')->paginate(3);
        return view('dashboard.community.analysis', compact('reports'));
    }
    public function index()
    {
        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);
        return view('dashboard.community.index', compact('chart1'));
    }
    public function analysis()
    {
        $reports = report::orderBy('id', 'DESC')->paginate(6);
        return view('oraby', compact('reports'));
    }
    public function file()
    {
        $reports = file::orderBy('id', 'DESC')->paginate(6);
        return view('oraby2', compact('reports'));
    }
    public function show($id)
    {
        $reports = report::findOrFail($id);
        return view('show',compact('reports')
        );
    }
    public function report()
    {
        return view('dashboard.community.report');
    }
    public function profile()
    {
        return view('dashboard.community.profile');
    }

}
