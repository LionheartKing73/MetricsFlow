var base = require('settings/teams/update-team-name');

Vue.component('spark-update-team-name', {
    mixins: [base],

    props: ['user', 'team'],
    data() {
        return {
            form: new SparkForm({
                name: '',
                description: '',
                url: ''
            })
        };
    },

    ready() {
        this.form.name = this.team.name;
        this.form.description = this.team.description;
        this.form.url = this.team.url;
    },

    methods: {
        update: function () {
            //console.log('My Custom Method!');
            //console.log('{{user}} {{team}} ${this.team.id}');
            //console.log(this.team.id);
            //console.log(this.team.name);
            //console.log('team id');

            Spark.put(`/settings/teams/${this.team.id}/name`, this.form)
            .then(() => {
                this.$dispatch('updateTeam');
                this.$dispatch('updateTeams');
            });

        }
    }
});


//module.exports = {
//    props: ['user', 'team'],
//
//    /**
//     * The component's data.
//     */
//    data() {
//    return {
//        form: new SparkForm({
//            name: ''
//        })
//    };
//},
//
//
///**
// * Prepare the component.
// */
//ready() {
//    this.form.name = this.team.name;
//},
//
//
//methods: {
//    /**
//     * Update the team name.
//     */
//    update() {
//        Spark.put(`/settings/teams/${this.team.id}/name`, this.form)
//    .then(() => {
//            this.$dispatch('updateTeam');
//        this.$dispatch('updateTeams');
//    });
//}
//}
//};
