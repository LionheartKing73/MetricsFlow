import { Bar } from 'vue-chartjs'

export default Bar.extend({
  //props: ['dataset'],
  
  ready () {
    // Overwriting base render method with actual data.
    //var data_labels, data_values = cleanAndSplit(this.dataset);

    this.render({
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [
        {
          label: 'GitHub Commits',
          backgroundColor: '#f87979',
          data: [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11]
        }
      ]
    })
  },

})

function cleanAndSplit(dataset){
  var labels = []
  var values = []
  for (var i = 1; i <= dataset[0].length; i++){
    labels.push(dataset[0][i]);
    values.push(dataset[1][i]);
  }
  return labels, values;
}