@extends('admin.adminlayout')

@section('page-header')
  Product <small>update</small>
@stop

@section('content')
<?php $status = "edit"; ?>
<div class="row">
  <div class="col-sm-12">
    <div class="box" style="border:1px solid #d2d6de;">
        {!! Form::model($item, [
                'action' => ['ProductController@update', $item->id_product],
                'method' => 'put',
                'files' => true
            ])
        !!}
        <div class="box-body" style="margin:10px;">
          @include('admin.product.form')
        </div>

        <div class="box-footer" style="background-color:#f5f5f5;border-top:1px solid #d2d6de;">
      	  <button type="submit" class="btn btn-info" style="width:100px;">{{ trans('app.update_button') }}</button>
          <a class="btn btn-warning " href="{{ route(ADMIN.'.product.index') }}" style="width:100px;"><i class="fa fa-btn fa-back"></i>Cancel</a>
      	</div>

      {!! Form::close() !!}
    </div>
  </div>
</div>
@stop
