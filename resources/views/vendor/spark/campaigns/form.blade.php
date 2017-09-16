 <!-- Name -->
    <div class="form-group clearfix" :class="{'has-error': registerForm.errors.has('name')}">
        <label class="col-md-4 control-label">Name</label>

        <div class="col-md-6">
            <input type="hidden" name="team_id" value="{!! $id !!}">
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
    <div class="form-group clearfix" :class="{'has-error': registerForm.errors.has('subject')}">
        <label class="col-md-4 control-label">Subject</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="subject" v-model="registerForm.subject">
                <span class="help-block" v-show="registerForm.errors.has('subject')">
                    @{{ registerForm.errors.get('subject') }}
                </span>
                <span>
                    {!! $errors->first('subject') !!}
                </span>
        </div>
    </div>
    <div class="form-group clearfix" :class="{'has-error': registerForm.errors.has('body')}">
        <label class="col-md-4 control-label">Body</label>

        <div class="col-md-6">
            {{--<input type="text" class="form-control" name="body">--}}
            <textarea name="body" class="form-control"  rows="5" v-model="registerForm.body"></textarea>
            <span class="help-block" v-show="registerForm.errors.has('body')">
                @{{ registerForm.errors.get('body') }}
            </span>
            <span>
                {!! $errors->first('body') !!}
            </span>
        </div>
    </div>


    <div class="form-group clearfix">
        <label class="col-md-4 control-label"> </label>
        <div class="col-md-6">
            <input type="submit" class="btn btn-info" name="submit" value="Submit">
        </div>
    </div>