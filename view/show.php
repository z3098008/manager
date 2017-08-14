<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ECharts</title>
    <script src="<?=ROOT;?>/github/manager/public/js/echarts.js"></script>
</head>
<body>
<div id="drawing1" style="width:100%;height:400px;"></div>
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('drawing1'));
    option = {
        title: {
            text: '最大努力分析图'
        },
        tooltip: {
            trigger: 'axis'
        },
        legend: {
            data:['6点起床','11点睡觉','锻炼身体','看书']
        },
        grid: {
            left: '2%',
            right: '2%',
            bottom: '2%',
            containLabel: true
        },
        toolbox: {
            feature: {
                saveAsImage: {}
            }
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: ['周一','周二','周三','周四','周五','周六','周日']
        },
        yAxis: {
            type: 'value'
        },
        series: [
            {
                name:'6点起床',
                type:'line',
                stack: '总量',
                data:[1, 2, 3, 4, 5, 6, 7]
            },
            {
                name:'11点睡觉',
                type:'line',
                stack: '总量',
                data:[1, 2, 3, 4, 5, 6, 7]
            },
            {
                name:'锻炼身体',
                type:'line',
                stack: '总量',
                data:[1, 2, 3, 4, 5, 6, 7]
            },
            {
                name:'看书',
                type:'line',
                stack: '总量',
                data:[1, 2, 3, 4, 5, 6, 7]
            },
        ]
    };

    myChart.setOption(option);
</script>
</body>
</html>