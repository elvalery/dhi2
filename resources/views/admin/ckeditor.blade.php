<div class="form-group {!! !$errors->has($errorKey) ?: 'has-error' !!}">
  
  <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>
  
  <div class="col-sm-6">
    
    @include('admin::form.error')
    
    <textarea class="form-control {{$class}}" id="{{$id}}" name="{{$name}}" placeholder="{{ $placeholder }}" {!! $attributes !!} >{{ old($column, $value) }}</textarea>
    
    @include('admin::form.help-block')
  
    <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
      };
    </script>
    
  </div>
</div>