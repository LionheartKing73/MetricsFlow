 <!-- Name -->
    <div class="form-group clearfix" :class="{'has-error': registerForm.errors.has('name')}">
        <label class="col-md-4 control-label">Name</label>

        <div class="col-md-6">
            <input type="name" class="form-control" name="name" v-model="registerForm.name" autofocus>
            {!! csrf_field() !!}
            <span class="help-block" v-show="registerForm.errors.has('name')">
                @{{ registerForm.errors.get('name') }}
            </span>
            <span>
                {!! $errors->first('name') !!}
            </span>
        </div>
    </div>

    <!-- E-Mail Address -->
    <div class="form-group clearfix" :class="{'has-error': registerForm.errors.has('email')}">
        <label class="col-md-4 control-label">E-Mail Address</label>

        <div class="col-md-6">
            <input type="email" class="form-control" name="email" v-model="registerForm.email">

            <span class="help-block" v-show="registerForm.errors.has('email')">
                @{{ registerForm.errors.get('email') }}
            </span>
            <span>
                {!! $errors->first('email') !!}
            </span>
        </div>
    </div>
    <div class="form-group clearfix">
        <label class="col-md-4 control-label">User Role</label>

        <div class="col-md-6">
            <select name="role"  class="form-control">
                @foreach($types as $type)
                    <option value="{!! $type->id !!}"> {!! $type->name !!}</option>
                @endforeach
            </select>
            <span class="help-block" v-show="registerForm.errors.has('email')">
                @{{ registerForm.errors.get('type') }}
            </span>
            <span>
                {!! $errors->first('role') !!}
            </span>
        </div>
    </div>
    <div class="form-group clearfix">
        <label class="col-md-4 control-label"> </label>
        <div class="col-md-6">
            <input type="submit" class="btn btn-info" name="submit" value="Submit">
        </div>
    </div>