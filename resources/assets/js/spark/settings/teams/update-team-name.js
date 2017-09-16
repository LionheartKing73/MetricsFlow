module.exports = {
    props: ['user', 'team'],

    /**
     * The component's data.
     */
    data() {
        return {
            form: new SparkForm({
                name: '',
                description: '',
                url: ''
            })
        };
    },


    /**
     * Prepare the component.
     */
    ready() {
        this.form.name = this.team.name;
        this.form.description = this.team.description;
        this.form.url = this.team.url;
    },


    methods: {
        /**
         * Update the team name.
         */
        update() {
            Spark.put(`/settings/teams/${this.team.id}/name`, this.form)
                .then(() => {
                    this.$dispatch('updateTeam');
                    this.$dispatch('updateTeams');
                });
        }
    }
};
