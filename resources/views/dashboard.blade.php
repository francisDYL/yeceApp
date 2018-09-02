@extends('layouts.dashboardBase')

@section('content')
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.dashboard">@lang('dashboard.dashboard')</a>
            </li>
            <li class="breadcrumb-item active">/</li>
        </ol>

        <!-- Page Content -->
        <h1>@lang('dashboard.applicantregistered')</h1>
        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card text-center">
                    <div class="card-header bg-primary py-4 text-light">@lang('apply.student')</div>
                    <!--Card content-->
                    <div class="card-body">

                        <!-- Table  -->
                        <table class="table table-hover table-responsive" id="dataTable1">
                            <!-- Table head -->
                            <thead class="blue-grey lighten-4">
                            @php
                                $countryList=new \Monarobase\CountryList\CountryList();
                            @endphp
                            <tr>
                                <th>ID</th>
                                <th>@lang('apply.firstname')</th>
                                <th>@lang('apply.lastname')</th>
                                <th>@lang('apply.email')</th>
                                <th>@lang('apply.university')</th>
                                <th>@lang('apply.school_level_and_last_diploma')</th>
                                <th>@lang('apply.reasonforjoin')</th>
                                <th>@lang('apply.phone')</th>
                                <th>@lang('apply.nationality')</th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            @foreach($applicants as $applicant)
                                @if($applicant->type=='student')
                                    <tr>
                                        <td>{{$applicant->id}}</td>
                                        <td>{{$applicant->first_name}}</td>
                                        <td>{{$applicant->last_name}}</td>
                                        <td>{{$applicant->email}}</td>
                                        <td>{{$applicant->university}}</td>
                                        <td>{{$applicant->level_study_and_last_diploma}}</td>
                                        <td>{{$applicant->reason_for_join}}</td>
                                        <td>{{$applicant->phone}}</td>
                                        <td>{{$countryList->getOne($applicant->nationality,'fr')}}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                            <!-- Table body -->
                        </table>
                        <!-- Table  -->

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!--Card-->
                <div class="card text-center">
                    <div class="card-header bg-success py-4 text-light">@lang('apply.professional')</div>
                    <!--Card content-->
                    <div class="card-body">

                        <!-- Table  -->
                        <table class="table table-hover table-responsive" id="dataTable2">
                            <!-- Table head -->
                            <thead class="blue lighten-4">
                            <tr>
                                <th>ID</th>
                                <th>@lang('apply.firstname')</th>
                                <th>@lang('apply.lastname')</th>
                                <th>@lang('apply.email')</th>
                                <th>@lang('apply.company')</th>
                                <th>@lang('apply.function')</th>
                                <th>@lang('apply.reasonforjoin')</th>
                                <th>@lang('apply.phone')</th>
                                <th>@lang('apply.nationality')</th>
                            </tr>
                            </thead>
                            <!-- Table head -->

                            <!-- Table body -->
                            <tbody>
                            @foreach($applicants as $applicant)
                                @if($applicant->type=='professional')
                                    <tr>
                                        <td>{{$applicant->id}}</td>
                                        <td>{{$applicant->first_name}}</td>
                                        <td>{{$applicant->last_name}}</td>
                                        <td>{{$applicant->email}}</td>
                                        <td>{{$applicant->company}}</td>
                                        <td>{{$applicant->function}}</td>
                                        <td>{{$applicant->reason_for_join}}</td>
                                        <td>{{$applicant->phone}}</td>
                                        <td>{{$countryList->getOne($applicant->nationality,'fr')}}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                            <!-- Table body -->
                        </table>
                        <!-- Table  -->

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
    <!-- /.container-fluid -->
    <!-- Initializations -->

@endsection
