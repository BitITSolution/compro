@extends('backend')



@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table id="table_cmpInfo" style="width:100%" class="table table-striped table-bordered dataTable table-hover no-footer">
			<thead>
				<tr>
					<th style="width:10px;"></th>
					<th style="width: 110px;">Action</th>
					<th>Info Key</th>
					<th>Info Value
					</th>
				</tr>
			</thead>
			{{--<tbody>
				@foreach($model_cmpInfo as $cmpInfo)
					<tr>
						<td>{!! $cmpInfo['info_key'] !!}</td>
						<td>{!! $cmpInfo['info_value'] !!}</td>
					</tr>
				@endforeach
			</tbody>--}}
		</table>
	</div>
</div>

@endsection


@section('page-script')

	<style type="text/css" class="init">

		table.dataTable tr td:first-child {
			text-align: center;
		}

		table.dataTable tr td:first-child:before {
			content: "\f096"; /* fa-square-o */
			font-family: FontAwesome;
		}

		table.dataTable tr.selected td:first-child:before {
			content: "\f046"; /* fa-check-square-o */
		}

		table.dataTable tr td.dataTables_empty:first-child:before {
			content: "";
		}

	</style>

	<script type="text/javascript">

		var editor; // use a global for the submit and return data rendering in the examples

		$(document).ready(function() {
			editor = new $.fn.dataTable.Editor( {
				"ajax": {
                            type: "POST",
                            data: { '_token' : '{{{ csrf_token() }}}' },
                            url : "compro/getEditorData"
                         },
				table: "#table_cmpInfo",
				fields: [
					{
						label: "Info Key:",
						name: "info_key"
					},
					{
						label: "Info Value:",
						name: "info_value"
					}
				]
			} );

			editor
				.on( 'open', function ( e, type ) {
					if ( type === 'inline' ) {
						// Listen for a tab key event when inline editing
						$(document).on( 'keydown.editor', function ( e ) {
							if ( e.keyCode === 9 ) {
								e.preventDefault();

								// Find the cell that is currently being edited
								var cell = $('div.DTE').parent();

								if ( e.shiftKey && cell.prev().length && cell.prev().index() !== 0 ) {
									// One cell to the left (skipping the first column)
									cell.prev().click();
								}
								else if ( e.shiftKey ) {
									// Up to the previous row
									cell.parent().prev().children().last(0).click();
								}
								else if ( cell.next().length ) {
									// One cell to the right
									cell.next().click();
								}
								else {
									// Down to the next row
									cell.parent().next().children().eq(2).click();
								}
							}
						} );
					}
				} )
				.on( 'close', function () {
					$(document).off( 'keydown.editor' );
				} );

			$('#table_cmpInfo').on( 'click', 'tbody td:nth-child(n+3)', function (e) {
				editor.inline( this, {
					submitOnBlur: true
				} );
			} );

            $('#table_cmpInfo').on('click', 'a.editor_edit', function (e) {
                e.preventDefault();

                editor.edit( $(this).closest('tr'), {
                    title: 'Edit record',
                    buttons: 'Update'
                } );
            } );

            //region Delete record
            $('#table_cmpInfo').on('click', 'a.editor_remove', function (e) {
                e.preventDefault();

                editor.remove( $(this).closest('tr'), {
                    title: 'Delete record',
                    message: 'Are you sure you wish to remove this record?',
                    buttons: 'Delete'
                } );
            } );
            //endregion

			var table = $('#table_cmpInfo').DataTable( {
				dom: "Tfrtip",
				"ajax": {
                            type: "POST",
                            data: { '_token' : '{{{ csrf_token() }}}' },
                            url : "compro/getEditorData"
                         },
				"aaSorting": [],
				columns: [
					{
						data            : null,
						defaultContent  : '',
						orderable       : false
					},
					{
						data            : null,
						defaultContent  : '<a href="" class="editor_edit"><div class="btn-group"><button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span><span class="hidden-xs" style="margin-left: 6px;">Edit</span></button></div></a>' +
						                  '<a href="" class="editor_remove"><div class="btn-group" style="margin-left: 5px;"><button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span><span class="hidden-xs" style="margin-left: 5px;">Delete</span></button></div></a>',
						orderable       : false
					},
					{ data              : "info_key" },
					{ data              : "info_value" }
				],
				tableTools: {
					sRowSelect: "os",
					sRowSelector: 'td:first-child',
					aButtons: [
						{ sExtends: "editor_create", editor: editor },
						{ sExtends: "editor_edit",   editor: editor },
						{ sExtends: "editor_remove", editor: editor }
					]
				}
			} );
		} );
	</script>
@endsection