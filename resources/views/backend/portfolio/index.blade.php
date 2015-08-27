@extends('backend')


@section('popup-header')
    Form Edit Data
@endsection

@section('popup-body')
    <form id="form-popup" class="form-horizontal" action="{{{ action('Backend\controller_compro@editCompro') }}}" method="post" role="form" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="_type" id="_type" value="" />
        <input type="hidden" name="id" id="id" value="" />
    	<div class="form-group">
    		<label class="control-label col-sm-2" for="info_key">Name : </label>
    		<div class="col-sm-10">
    		    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your information key">
    		</div>
    	</div>
    	<div class="form-group">
    		<label class="control-label col-sm-2" for="info_value">Description : </label>
    		<div class="col-sm-10">
    		    <textarea class="form-control" name="description" id="description" placeholder="Enter your description"></textarea>
    		</div>
    	</div>
    	<div class="form-group">
    	    <label class="control-label col-sm-2" for="upload">Upload images :</label>
    	    <div class="col-sm-10">
    	        <input type="file" name="upload" id="upload" />
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
    {{--<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>
                Portfolio
                <form method="post" action="portfolio/testing" enctype="multipart/form-data">
                    <input name="_token" type="hidden" value="{{{ csrf_token() }}}"/>
                    <input type="file" name="files[]" id="files[]"/>
                    <input type="submit" />
                </form>
            </h3>
        </div>
    </div>--}}
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table id="table_portfolio" style="width:100%" class="table table-striped table-bordered dataTable table-hover no-footer">
                <thead>
                    <tr>
                        <th style="width: 112px;">Action</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($model_portfolio as $portfolio)
                        <tr>
                            {{--<td></td>--}}
                            <td>
                                <div class="btn-group"
                                onclick='popupFormEdit(
                                    "{{{ $portfolio['id'] }}}",
                                    "{{{ $portfolio['name'] }}}",
                                    "{{{ $portfolio['description'] }}}"
                                    )'>
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
                            <td>{!! $portfolio['name'] !!}</td>
                            <td>{!! $portfolio['description'] !!}</td>
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
		}

		table.dataTable tr.selected td:first-child:before {
			content: "\f046"; *//* fa-check-square-o *//*
		}

		table.dataTable tr td.dataTables_empty:first-child:before {
			content: "";
		}*/

	</style>

	<script type="text/javascript">
        $(document).ready(function()
        {
            $("#table_portfolio").dataTable(
                {
                "bAutoWidth":false,
                "dom": 'l<"#dtcustom">frtip'
                }
            );
            $( "div#dtcustom" ).html(
                '<div onclick="popupFormSave()" class="btn-group" style="margin-left:10px;"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span>&nbsp; New Data</button></div>'
            );
        } );

        function popupFormEdit(id, name, description)
        {
            $('.popup-header').html('Form Edit Data');
            $("#_type").val('2');
            $("#name").val(name);
            $("#description").val(description);
            openPopup();
        }

        function popupFormSave()
        {
            $('.popup-header').html('Form New Data');
            $("#_type").val('1');
            openPopup();
        }
	</script>
@endsection