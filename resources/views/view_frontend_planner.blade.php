@extends('app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h2>Project Planner</h2>
        {!! Form::open(array(
                        'method'    => 'POST',
                        'action'    => 'controller_frontend@submitPlanner'
                        )) !!}
        <div class="panel panel-default">
        	  <div class="panel-heading">
        			<h3 class="panel-title">Your Details</h3>
        	  </div>
        	  <div class="panel-body">
        			<div class="row">
        			    <div class="col-md-4">
        			        {!! Form::input('text','name',null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Name'
                                            ]) !!}
        			    </div>
        			    <div class="col-md-4">
        			        {!! Form::input('text','address',null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Address'
                                            ]) !!}</div>
        			    <div class="col-md-4">
        			        {!! Form::input('email','email',null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Email'
                                            ]) !!}</div>
        			</div>
        	  </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Project Details</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <label for="ProjectType" class="control-label">Project Type :</label>
                                </td>
                                <td>
                                    <select name="projectType_id" id="projectType_id" class="form-control">
                                        @foreach($modelProjectType as $projectType)
                                            <option value="{{$projectType['id']}}">{{$projectType['name']}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Description" class="control-label">Description :</label>
                                </td>
                                <td>
                                    <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="start_date" class="control-label">Start Date :</label>
                                </td>
                                <td>
                                    {!! Form::selectMonth('month',Carbon\Carbon::now()->month,['name' => 'start_month']) !!}
                                    {!! Form::selectYear('year', Carbon\Carbon::now()->year, Carbon\Carbon::now()->addYear(3)->year,Carbon\Carbon::now()->year,['name'=>'start_year']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="end_date" class="control-label">End Date :</label>
                                </td>
                                <td>
                                    {!! Form::selectMonth('month',Carbon\Carbon::now()->month,['name' => 'end_month']) !!}
                                    {!! Form::selectYear('year', Carbon\Carbon::now()->year, Carbon\Carbon::now()->addYear(3)->year,Carbon\Carbon::now()->year,['name'=>'end_year']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="end_date" class="control-label">Budget :</label>
                                </td>
                                <td>
                                    <select name="budget" id="budget" class="form-control">
                                    	<option value="0 - 1 Juta">0 - 1 Juta</option>
                                    	<option value="1 - 5 Juta">1 - 5 Juta</option>
                                    	<option value="Lebih dari 5 Juta">Lebih dari 5 Juta</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        </div>
    </div>
@endsection