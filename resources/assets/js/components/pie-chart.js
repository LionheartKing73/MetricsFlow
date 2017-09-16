import PieChart from './pie'

Vue.component('pie', {
    template: `
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Example Pie Chart</h3>
        </div>
        <div class="box-body">
            <pie-chart></pie-chart>
        </div>
    </div>
    `,
    components: { PieChart }
});