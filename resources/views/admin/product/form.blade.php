<div class="control-group">
  <div class="controls">
    @if ($status == "edit")
        <center>
          <img id="productpic" src="{{ asset('pic_product') }}" alt="">
        </center>
    @endif
    <img id="productpic" src="" alt="">
  </div>
</div>
<div class="form-group has-feedback{{ $errors->has('pic_product') ? ' has-error' : '' }}">
  {{ Form::label('pic_product', 'Product Picture') }}
  {{ Form::file('pic_product', ['id'=>'pic_product']) }}
    @if ($errors->has('pic_product'))
        <span class="help-block text-red">
            <strong>{{ $errors->first('pic_product') }}</strong>
        </span>
    @endif
</div>

<div class="col-md-6">
  <div class="form-group has-feedback{{ $errors->has('name_product') ? ' has-error' : '' }}">
    {{ Form::label('name_product', 'Product Name') }} <span class="required">*</span>
    {{ Form::text('name_product', null, ['class'=>'form-control', 'placeholder'=>'Product Name']) }}
      @if ($errors->has('name_product'))
          <span class="help-block text-red">
              <strong>{{ $errors->first('name_product') }}</strong>
          </span>
      @endif
  </div>
  <div class="form-group has-feedback{{ $errors->has('price') ? ' has-error' : '' }}">
    {{ Form::label('price', 'Price') }} <span class="required">*</span>
    {{ Form::number('price', null, ['class'=>'form-control', 'placeholder'=>'Price']) }}
      @if ($errors->has('price'))
          <span class="help-block text-red">
              <strong>{{ $errors->first('price') }}</strong>
          </span>
      @endif
  </div>
</div>
<div class="col-md-6">
  <div class="form-group has-feedback{{ $errors->has('id_category') ? ' has-error' : '' }}">
    {{ Form::label('id_categori', 'Category') }} <span class="required">*</span>
    {{ Form::select('id_categori', App\Categori::CategoriList(), 'm', ['class'=>'form-control']) }}
      @if ($errors->has('id_categori'))
          <span class="help-block text-red">
              <strong>{{ $errors->first('id_categori') }}</strong>
          </span>
      @endif
  </div>
  @if ($status == "edit")
   <!--  <div class="form-group has-feedback{{ $errors->has('quantity') ? ' has-error' : '' }}">
      {{ Form::label('quantity', 'Quantity') }} <span class="required">*</span>
      {{ Form::number('quantity', null, ['class'=>'form-control', 'placeholder'=>'Quantity']) }}
        @if ($errors->has('quantity'))
            <span class="help-block text-red">
                <strong>{{ $errors->first('quantity') }}</strong>
            </span>
        @endif
    </div>  -->   
  @endif
</div>