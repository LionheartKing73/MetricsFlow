<spark-update-team-name :user="user" :team="team" inline-template>
    <div class="panel panel-default">
        <div class="panel-heading">Update Portfolio Name  </div>

        <div class="panel-body">
            <!-- Success Message -->
            <div class="alert alert-success" v-if="form.successful">
                Your team name has been updated!
            </div>

            <form class="form-horizontal" role="form">
                <!-- Name -->
                <div class="form-group" :class="{'has-error': form.errors.has('name')}">
                    <label class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" v-model="form.name">

                        <span class="help-block" v-show="form.errors.has('name')">
                            @{{ form.errors.get('name') }}
                        </span>
                    </div>
                </div>
                <div class="form-group" :class="{'has-error': form.errors.has('description')}">
                    <label class="col-md-4 control-label">Description</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="description" v-model="form.description">

                        <span class="help-block" v-show="form.errors.has('description')">
                            @{{ form.errors.get('description') }}
                        </span>
                    </div>
                </div> <!-- Name -->
                <div class="form-group" :class="{'has-error': form.errors.has('url')}">
                    <label class="col-md-4 control-label">URL</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="url" v-model="form.url">

                        <span class="help-block" v-show="form.errors.has('url')">
                            @{{ form.errors.get('url') }}
                        </span>
                    </div>
                </div>
                <!-- Update Button -->
                <div class="form-group">
                    <div class="col-md-offset-4 col-md-6">
                        <button type="submit" class="btn btn-primary"
                                @click.prevent="update"
                                :disabled="form.busy">

                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</spark-update-team-name>
