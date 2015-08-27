@extends('backend')

@section('popup')
<div class="popup-overlay">
    <div class="popup-box" id="popup-edit">
        <div class="popup-header">
            Form Edit Data
        </div>
        <div class="popup-body">
            <form id="form-popup-edit" class="form-horizontal" action="{{{ action('Backend\controller_compro@editCompro') }}}" method="post" role="form">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="_type" id="_type" value="" />
                <input type="hidden" name="info_firstKey" id="edit_key" value="" />
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
                <div class="popup-buttons">
                    <div class="btn-group fr" onclick="$('#form-popup-edit').submit()">
                        <button type="submit" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span class="hidden-sm" style="margin-left: 6px;">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="cb"></div>
        </div>
    </div>

    <div class="popup-box" id="popup-delete">
        <div class="popup-header"></div>
        <div class="popup-body">
            <form id="form-popup-delete" class="form-horizontal" action="{{{ action('Backend\controller_compro@editCompro') }}}" method="post" role="form">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="_type" value="3" />
                <input type="hidden" name="info_firstKey" id="delete_key" value="" />
                <div class="form-group">
                    <div class="col-sm-12">
                        Are you sure wants to delete this item?
                    </div>
                </div>
                <div class="popup-buttons">
                    <div class="btn-group fr" onclick="$('#form-popup-delete').submit()">
                        <button type="submit" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span class="hidden-sm" style="margin-left: 6px;">OK</span>
                        </button>
                    </div>
                    <div class="btn-group fr" style="margin-right: 10px;">
                        <button type="button" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove"></span>
                            <span class="hidden-sm" style="margin-left: 6px;">Cancel</span>
                        </button>
                    </div>
                </div>
            </form>
            <div class="cb"></div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h3>Company Profile</h3>
        @if($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{{ $err }}}</li>
                @endforeach
            </ul>
        </div>
        @endif
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
                            <div class="btn-group" onclick='popupEdit("{{{ $cmpInfo['info_key'] }}}","{{{ $cmpInfo['info_value'] }}}")'>
                                <button type="button" class="btn btn-primary btn-xs">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    <span class="hidden-xs" style="margin-left: 6px;">Edit</span>
                                </button>
                            </div>
                            <div class="btn-group" style="margin-left: 5px;" onclick='popupDelete("{{{ $cmpInfo['info_key'] }}}")'>
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

		$(document).ready(function() {
		    $("#table_cmpInfo").dataTable(
		        {
                "bAutoWidth":false,
                "dom": 'l<"#dtcustom">frtip'
		        }
		    );
            $( "div#dtcustom" ).html(
                '<div onclick="popupSave()" class="btn-group" style="margin-left:10px;"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span>&nbsp; New Data</button></div>'
            );
		} );

		function popupEdit(key,value)
		{
		    $('.popup-header').html('Form Edit Data');
		    $("#_type").val('2');
		    $("#edit_key").val(key);
		    $("#info_key").val(key);
		    $("#info_value").val(value);
		    openPopup("popup-edit");
		}

		function popupSave()
		{
		    $('.popup-header').html('Form New Data');
		    $("#_type").val('1');
		    $("#edit_key").val();
		    $("#info_key").val();
		    $("#info_value").val();
		    openPopup("popup-edit");
		}

		function popupDelete(key)
		{
		    $('.popup-header').html('Form Delete Data');
		    $("#delete_key").val(key);
		    openPopup("popup-delete");
		}
	</script>
@endsection