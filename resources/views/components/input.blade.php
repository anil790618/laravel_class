<div class="mb-3">
    <label for=" " class="form-label">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" id=" "  > 
    <span class="text-danger"> 
        {{$demo}}
      {{-- @error('name')
      {{$message}}
      @enderror --}}
    </span>
  </div>