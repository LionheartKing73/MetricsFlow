Vue.component('chart', {
    props: ['user'],

    ready() {
        this.$http.get('/data').then(response=> {this.msg = response.data;})
    },

    data: function() {
        return{
            msg: {}
        }
    },

    template: `
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Example Table</h3>
        </div>
        <div class="box-body">
            <table>
                <thead>
                    <tr>
                        <th>Browser</th>
                        <th>Frequency</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="entry in msg.browser">
                        <td>{{ entry.Var1 }}</td>
                        <td>{{ entry.Freq }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    `
});

//<tr v-for:'msg[\'browser\'][\'Var1\']


