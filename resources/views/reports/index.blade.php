@extends('layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Report
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Report</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <ul class="timeline">
                        @foreach($reports as $report)
                        <!-- timeline time label -->
                        <li class="time-label">
                          <span class="bg-red">
                            {{$report->created_at->diffForHumans()}}
                          </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-envelope bg-blue"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                <h3 class="timeline-header"><a href="#">{{$report->user->name}}</a></h3>

                                <div class="timeline-body">
                                    <strong>1. Today</strong>
                                    {{$report->today_do}}
                                    <strong>2. Tomorrow</strong>
                                    {{$report->tomorrow_do}}
                                    <strong>3. Problems</strong>
                                    {{$report->problems}}

                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Detail</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                            @endforeach
                     </ul>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
