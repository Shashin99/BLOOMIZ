
var xValues = ["Week 01", "Week 02", "Week 03"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green", "blue"];

new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,
        }
    }
});
