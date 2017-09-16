<spark-create-team inline-template>
    <div class="panel panel-default">
        <div class="panel-heading">Create Portfolio</div>

        <div class="panel-body">
            <form class="form-horizontal" role="form">
                <div class="form-group" :class="{'has-error': form.errors.has('name')}">
                    <label class="col-md-4 control-label">Portfolio Name</label>
                    <div class="col-md-6">
                        <input type="text" id="create-team-name" class="form-control" name="name" v-model="form.name">
                        <span class="help-block" v-show="form.errors.has('name')">
                            @{{ form.errors.get('name') }}
                        </span>
                    </div>
                </div>
                {{--<div class="form-group" :class="{'has-error': form.errors.has('description')}">--}}
                    {{--<label class="col-md-4 control-label">Description</label>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<input type="text" id="team-description" class="form-control" name="description" v-model="form.description">--}}
                        {{--<span class="help-block" v-show="form.errors.has('description')">--}}
                            {{--@{{ form.errors.get('description') }}--}}
                        {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group" :class="{'has-error': form.errors.has('url')}">--}}
                    {{--<label class="col-md-4 control-label">URL</label>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<input type="text" id="team-url" class="form-control" name="url" v-model="form.url">--}}
                        {{--<span class="help-block" v-show="form.errors.has('url')">--}}
                            {{--@{{ form.errors.get('url') }}--}}
                        {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- Create Button -->
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-6">
                        <button type="submit" class="btn btn-primary"
                                @click.prevent="create"
                                :disabled="form.busy">

                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</spark-create-team>
