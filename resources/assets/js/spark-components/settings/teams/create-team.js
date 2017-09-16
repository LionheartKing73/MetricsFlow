var base = require('settings/teams/create-team');

Vue.component('spark-create-team', {
    mixins: [base],
    data() {
        return {
            form: new SparkForm({
                name: '',
                description: '',
                url: ''
            })
        };
    },
    events: {
        /**
         * Handle the "activatedTab" event.
         */
        activatedTab(tab) {
            if (tab === 'teams') {
                Vue.nextTick(() => {
                    $('#create-team-name').focus();
                    $('#team-description').focus();
                    $('#team-url').focus();
            });
        }

        return true;
        }
    },


    methods: {
        /**
         * Create a new team.
         */
        create: function() {
            console.log(this.form);
            console.log(this.form.name);
            console.log(this.form.description);
            console.log(this.form.url);
            Spark.post('/settings/teams', this.form)
                .then(() => {
                this.form.name = '';
                this.form.description = '';
                this.form.url = '';

                this.$dispatch('updateUser');
                this.$dispatch('updateTeams');
            });
        }
    }
});
