@csrf
<div class="form-body">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="first-name-vertical">Name</label>
                <input type="text" id="first-name-vertical" class="form-control " name="name" placeholder="First Name" value="{{ $position->name }}{{ old('name') }} ">
                @if($errors->has('name'))
                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <i class="feather icon-info mr-1 align-middle"></i>
                  <span> {{ $errors->first('name') }}</span>
                </div>
                @endif

            </div>

        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">{{ $buttonText }}</button>
        </div>
    </div>
<div>
