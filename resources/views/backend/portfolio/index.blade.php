@extends('backend')

@section('popup')
<div class="popup-overlay">
    <div class="popup-box" id="popup-edit">
        <div class="popup-header">
            Form Edit Data
        </div>
        <div class="popup-body">
            <form id="form-popup-edit" class="form-horizontal" action="{{{ action('Backend\controller_portfolio@editPortfolio') }}}" method="post" role="form">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="_type" id="_type" value="" />
                <input type="hidden" name="portfolio_id" id="edit_key" value="" />
                <div class="form-group">
                    <label class="control-label col-sm-2">Name : </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="portfolio_name" id="name" placeholder="Enter name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Description : </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="portfolio_description" id="description" placeholder="Enter description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="upload">Upload images :</label>
                    <div class="col-sm-10">
                        <input type="file" name="upload" id="upload" />
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
            <form id="form-popup-delete" class="form-horizontal" action="{{{ action('Backend\controller_portfolio@editPortfolio') }}}" method="post" role="form">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="_type" value="3" />
                <input type="hidden" name="portfolio_id" id="delete_key" value="" />
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
                    <div class="btn-group fr" onclick="closePopup()" style="margin-right: 10px;">
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
                                onclick='popupEdit(
                                    "{{{ $portfolio['portfolio_id'] }}}",
                                    "{{{ $portfolio['portfolio_name'] }}}",
                                    "{{{ $portfolio['portfolio_description'] }}}"
                                    )'>
                                    <button type="button" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                        <span class="hidden-xs" style="margin-left: 6px;">Edit</span>
                                    </button>
                                </div>
                                <div class="btn-group" style="margin-left: 5px;" onclick='popupDelete("{{{ $portfolio['portfolio_id'] }}}")'>
                                    <button type="button" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                        <span class="hidden-xs" style="margin-left: 5px;">Delete</span>
                                    </button>
                                </div>
                            </td>
                            <td>{!! $portfolio['portfolio_name'] !!}</td>
                            <td>{!! $portfolio['portfolio_description'] !!}</td>
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

        #dtcustom
        {
            display: inline-block;
        }
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
                '<div onclick="popupSave()" class="btn-group" style="margin-left:10px;"><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span>&nbsp; New Data</button></div>'
            );
        } );

        function popupEdit(id, name, description)
        {
            $('.popup-header').html('Form Edit Data');
            $("#_type").val('2');
            $("#edit_key").val(id);
            $("#name").val(name);
            $("#description").val(description);
            openPopup("popup-edit");
        }

        function popupSave()
        {
            $('.popup-header').html('Form New Data');
            $("#edit_key").val("");
            $("#_type").val('1');
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