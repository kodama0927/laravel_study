
  $(function () {

    var scoreArray = [];
    scoreArray[0] = $('#value_1').prop("value");
    scoreArray[1] = $('#value_2').prop("value");
    scoreArray[2] = $('#value_3').prop("value");
    scoreArray[3] = $('#value_4').prop("value");
    scoreArray[4] = $('#value_5').prop("value");
    scoreArray[5] = $('#value_6').prop("value");

    // ---------------------rangeSlider----------------------
    var $rangeSlider = $(".js-range-slider");

    $rangeSlider.ionRangeSlider({
        min: 0,
        max: 5,
        grid: true,
        hide_min_max: true,
        grid: false
    });

    var $rangeSlider = $(".js-range-slider-block");

    $rangeSlider.ionRangeSlider({
        min: 0,
        max: 5,
        grid: true,
        hide_min_max: true,
        block: true,
        dragging: false
    });

    $rangeSlider.on("change",function(){
      // スライダーの値が変更されたとき各スライダーの値を取得
      // 値をそれぞれ配列に格納
      var $inp = $(this);
      var from = $inp.prop("value");
      console.log(from);

      var scoreArray = [];
      scoreArray[0] = $('#value_1').prop("value");
      scoreArray[1] = $('#value_2').prop("value");
      scoreArray[2] = $('#value_3').prop("value");
      scoreArray[3] = $('#value_4').prop("value");
      scoreArray[4] = $('#value_5').prop("value");
      scoreArray[5] = $('#value_6').prop("value");


      updateDatasets(myChart, scoreArray, 0);
      // データを更新
    });

    /* ChartJS ---- ionrangeSlider
     * -------
     */
    var ctx = document.getElementById("raderChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'radar',
        data: {
        labels: ["聞き取りやすさ", "文章力", "文法", "表現力", "内容理解度", "語彙力"],
        datasets: [{
            data: scoreArray,
            pointRadius: 0,     //点を非表示
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
      legend: {       //凡例を非表示
                display: false
          },
      scale: {
            yAxes: [{        //左右の線を非表示
                display: false
            }],
            ticks: {        //目盛りを非表示
              display: false,
              stepSize: 1, //目盛り値の幅を1に設定
              min: 0,
              max: 5
            },
            gridLines: {
              display: true,
              color: 'rgba(255,255,255,1)'
            },
            pointLabels: {
              fontColor: 'rgba(255,255,255,1)'
            }
          }
        }
    });

    function updateDatasets(chart, data, datasetIndex) {
    // datasetsのインデックス指定して代入
     chart.data.datasets[datasetIndex].data = data;
    // 最後にチャートの更新を呼ぶ
     chart.update();
    }

  });


// -----------------------audiojs----------------------------------
//
// audiojs.events.ready(function() {
//    audiojs.createAll();
// });


// ----------------------------評価文章入力テンプレート------------------------------------

$('.template').change(function(){
  var hyouka = $('.template:checked').map(function(){
    return $(this).val();
  }).get();
  $('.template_text').val(hyouka);
});
