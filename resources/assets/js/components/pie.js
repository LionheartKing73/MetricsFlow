import { Pie } from 'vue-chartjs'

export default Pie.extend({
  props: ['dataset'],

  data: function() {
    return{
      msg: {}
    }
  },

  ready () {
    // Overwriting base render method with actual data.
    //var data_labels, data_values = cleanAndSplit(this.dataset);
    Vue.http.get('/data').then(response=>{
      this.msg = response.data;
      console.log(this.msg.browser);
      this.render({
        // labels: ['One', 'Two', 'Three', 'Four', 'Five'],
        labels: this.msg.browser.Var1,
        datasets: [
          {
            // data: [30, 45, 60, 50, 40],
            data: this.msg.browser.Freq,
            backgroundColor: [
                  "#FF5354",
                  "#36A2EB",
                  "#FFCE56",
                  "#62E840",
                  "#AF34AF",
                  "#FF5354",
                  "#36A2EB",
                  "#FFCE56",
                  "#62E840",
                  "#AF34AF",
              ],
          }
        ]
      });
    }); 
    // {this.msg = response.data;});
    //console.log(this.msg);
    
  },

})
