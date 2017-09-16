import BarChart from './bar'

Vue.component('bar', {
    template: `
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Example Bar Chart</h3>
        </div>
        <div class="box-body">
            <bar-chart></bar-chart>
        </div>
    </div>
    `,
    components: { BarChart }
});
