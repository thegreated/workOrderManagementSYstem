@csrf
<div class="form-body">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="first-name-vertical">First Name</label>
                <input type="text" id="first-name-vertical" class="form-control " name="firstname" placeholder="First Name" value="{{ $user->firstname }}{{ old('firstname') }} ">
                @if($errors->has('firstname'))
                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <i class="feather icon-info mr-1 align-middle"></i>
                  <span> {{ $errors->first('firstname') }}</span>
                </div>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="first-name-vertical">Last Name</label>
                <input type="text" id="first-name-vertical" class="form-control" name="lastname" placeholder="First Name" value="{{ $user->lastname }}{{ old('lastname') }}">
                @if($errors->has('lastname'))
                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <i class="feather icon-info mr-1 align-middle"></i>
                  <span> {{ $errors->first('lastname') }}</span>
                </div>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="email-id-vertical">Email</label>
                <input type="email" id="email-id-vertical" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}{{ old('email') }}">
                @if($errors->has('email'))
                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <i class="feather icon-info mr-1 align-middle"></i>
                  <span> {{ $errors->first('email') }}</span>
                </div>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="contact-info-vertical">Mobile</label>
                <input type="number" id="contact-info-vertical" class="form-control" name="contact" placeholder="Mobile" value="{{ $user->contact }}{{ old('contact') }}">
                @if($errors->has('contact'))
                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <i class="feather icon-info mr-1 align-middle"></i>
                  <span> {{ $errors->first('contact') }}</span>
                </div>
                @endif
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="contact-info-vertical">Position</label>

                <select id="contact-info-vertical" class="form-control" name="position_id" required>
                  <option value=""> </option>
                  @foreach($userData as $data)
                  <option value="{{ $data->id }}"> {{ $data->name}} </option>

                  @endforeach
                </select>
                @if($errors->has('position_id'))
                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <i class="feather icon-info mr-1 align-middle"></i>
                  <span> {{ $errors->first('position_id') }}</span>
                </div>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="password-vertical">Password</label>
                <input type="password" id="password-vertical" class="form-control" name="password" placeholder="Password" required>
                @if($errors->has('password'))
                <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
                  <i class="feather icon-info mr-1 align-middle"></i>
                  <span> {{ $errors->first('password') }}</span>
                </div>
                @endif
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="password-vertical">Confirm Password</label>
                <input type="password" id="password-vertical" class="form-control" name="confirm_password" placeholder="Password" required>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">{{ $buttonText }}</button>
        </div>
    </div>
</div>
