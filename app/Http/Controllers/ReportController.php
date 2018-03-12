<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReportRequest;
use App\Http\Requests\UpdateReportRequest;
use Illuminate\Http\Request;
use App\Models\Report;
use Carbon\Carbon;
use Auth;
use App\Models\User;
use App\Models\Department;
use App\Models\UserRole;
use function redirect;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = Auth::user()->id;
        $users = User::all();
        $departments = Department::all();
        $user_roles = UserRole::where('user_id', $user_id)->get();
        $reportTimes = Report::orderBy('created_at', 'DESC')->get()->groupBy(function ($date) {
            return Carbon::parse($date->created_at)->format('d-m-Y');
        });
        $data = [
            'reportTimes' => $reportTimes,
            'users' => $users,
            'departments' => $departments,
            'user_roles' => $user_roles,
        ];
        return view('reports.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateReportRequest $request)
    {
        Report::create($request->all());
        return redirect()->route('reports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = Auth::user()->id;
        $users = User::all();
        $departments = Department::all();
        $user_roles = UserRole::where('user_id', $user_id)->get();
        $report = Report::findOrFail($id);
        $data = [
            'report' => $report,
            'users' => $users,
            'departments' => $departments,
            'user_roles' => $user_roles,
        ];
        return view('reports.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->id;
        $users = User::all();
        $departments = Department::all();
        $user_roles = UserRole::where('user_id', $user_id)->get();
        $report = Report::findOrFail($id);
        $data = [
            'report' => $report,
            'users' => $users,
            'departments' => $departments,
            'user_roles' => $user_roles,
        ];
        return view('reports.edit', $data);
    }


    public function update(UpdateReportRequest $request, $id)
    {
        $report = Report::findOrFail($id);
        $report->update([
            'today_do' => $request->today_do,
            'tomorrow_do' => $request->tomorrow_do,
            'problems' => $request->problems,
        ]);
        return redirect()->route('reports.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();
        return redirect()->route('reports.index');
    }
}
