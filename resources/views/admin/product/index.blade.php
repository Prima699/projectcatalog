@extends('admin.adminlayout')

@section('css')
  <style>
  table.table .actions {
      width: 100px;
      text-align: center;
  }
  </style>
@stop

@section('page-header')
    All <small>Products</small>
@stop

@section('content')

	<div class="row">
	  <div class="col-xs-12">
      <div class="box" style="border:1px solid #d2d6de;" >

	      <!-- /.box-header -->
	      <div class="box-body table-responsive no-padding">
	        <table id="tbl" class="table data-tables table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Categori</th>
                        <th>Price</th>
                        <th class='bool text-center'>Created By</th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="actions"></th>
                    </tr>
                </tfoot>

                <tbody>
        					@foreach ($items as $item)

          						<tr>
                          <td>{{ $item->name_product }}</td>
                          <td>{{ $item->categori->categori }}</td>
                          <td>Rp. {{ number_format($item->price,2) }}</td>
                          <td>{{ $item->user->name }}</td>
                          <td class="actions">
                            <ul class="list-inline" style="margin-bottom:0px;">
                              <li>
                                <a href="{{ url('admin\productedit', $item->id_product) }}" title="Detail Product" class="btn btn-primary btn-xs"><i class="fa fa-info "></i></a></li>
                              </li>
                            </ul>
                          </td>
        						  </tr>

        					@endforeach
                  </tbody>


            </table>
	      </div>
	      <!-- /.box-body -->
	    </div>
	    <!-- /.box -->
	  </div>
	</div>
@stop

@section('js')
  <script>
    (function($) {

      var table = $('.data-tables').DataTable({
        "columnDefs": [{
           "targets": 'no-sort',
           "orderable": false,
         }],
      });
      //replace bool column to checkbox
      renderBoolColumn('#tbl','bool');
    })(jQuery);
  </script>
@stop
