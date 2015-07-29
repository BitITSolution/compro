@extends('backend')

@section('popup-header')
    Form Edit Data
@endsection

@section('popup-body')
    <form id="form-popup" class="form-horizontal" action="{{{ action('Backend\controller_compro@editCompro') }}}" method="post" role="form">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="_type" id="_type" value="" />
        <input type="hidden" name="info_firstKey" id="info_firstKey" value="" />
    	<div class="form-group">
    		<label class="control-label col-sm-2" for="info_key">Info Key : </label>
    		<div class="col-sm-10">
    		    <input type="text" class="form-control" name="info_key" id="info_key" placeholder="Enter your information key">
    		</div>
    	</div>
    	<div class="form-group">
    		<label class="control-label col-sm-2" for="info_value">Info Value : </label>
    		<div class="col-sm-10">
    		    <input type="text" class="form-control" name="info_value" id="info_value" placeholder="Enter your information value">
    		</div>
    	</div>
@endsection

@section('popup-buttons')
        <div class="btn-group fr" onclick="$('#form-popup').submit()">
            <button type="submit" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-ok"></span>
                <span class="hidden-sm" style="margin-left: 6px;">Submit</span>
            </button>
        </div>
    </form>
@endsection

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h3>Company Profile</h3>
    </div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table id="table_cmpInfo" style="width:100%" class="table table-striped table-bordered dataTable table-hover no-footer">
			<thead>
				<tr>
					{{--<th style="width:10px;"></th>--}}
					<th style="width: 115px;">Action</th>
					<th>Info Key</th>
					<th>Info Value
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach($model_cmpInfo as $cmpInfo)
					<tr>
					    {{--<td></td>--}}
					    <td>
                            <div class="btn-group" onclick='popupFormEdit("{{{ $cmpInfo['info_key'] }}}","{{{ $cmpInfo['info_value'] }}}")'>
                                <button type="button" class="btn btn-primary btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    <span class="hidden-xs" style="margin-left: 6px;">Edit</span>
                                </button>
                            </div>
                            <div class="btn-group" style="margin-left: 5px;">
                                <button type="button" class="btn btn-danger btn-xs">
                                    <span class="glyphicon glyphicon-trash"></span>
                                    <span class="hidden-xs" style="margin-left: 5px;">Delete</span>
                                </button>
                            </div>
					    </td>
						<td>{!! $cmpInfo['info_key'] !!}</td>
						<td>{!! $cmpInfo['info_value'] !!}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection


@section('page-script')

	<style type="text/css" class="init">

		/*table.dataTable tr td:first-child {
			text-align: center;
		}

		table.dataTable tr td:first-child:before {
			content: "\f096"; *//* fa-square-o *//*
			font-family: FontAwesome;
			cursor: pointer;
		}

		table.dataTable tr.selected td:first-child:before {
			content: "\f046"; *//* fa-check-square-o *//*
			cursor: pointer;
		}

		table.dataTable tr td.dataTables_empty:first-child:before {
			content: "";
		}*/

        #dtcustom
        {
            display: inline-block;
        }
	</style>

	<script type="text/javascript">
		//var editor; // use a global for the submit and return data rendering in the examples
        var $model_cmpInfo = JSON.parse( '{!! (json_encode($model_cmpInfo)) !!}' );
        $(".process_status").html("<button>Test</button>");
		$(document).ready(function() {
		    $("#table_cmpInfo").dataTable(
		        {
                "sPaginationType": "full_numbers",
                "bAutoWidth":false,
                "dom": 'l<"#dtcustom">frtip'
		        }
		    );
            $( "div#dtcustom" ).html(
                '<div onclick="popupFormSave()" class="btn-group" style="margin-left:10px;"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span>&nbsp; New Data</button></div>'
            );
		} );

		function popupFormEdit(key,value)
		{
		    $('.popup-header').html('Form Edit Data');
		    $("#_type").val('2');
		    $("#info_firstKey").val(key);
		    $("#info_key").val(key);
		    $("#info_value").val(value);
		    openPopup();
		}

		function popupFormSave()
		{
		    $('.popup-header').html('Form New Data');
		    $("#_type").val('1');
		    $("#info_firstKey").val();
		    $("#info_key").val();
		    $("#info_value").val();
		    openPopup();
		}
	</script>
@endsection