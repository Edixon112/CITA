$(function(){
    var d={
        chart:{
            type:"bar",
            height:50,
            fontFamily:"IBM Plex Sans, sans-serif",
            foreColor:"#6780B1",sparkline:{enabled:true}},
            plotOptions:{bar:{columnWidth:"25%"}},
            series:[{data:[25,66,41,89,63,25,44,12,36,9,54,25,66,41,89,63,25,44,12,36,9,54,25,66,41,89,63,25,44,12,36,9,54,25,66,41,89,63,25,44,12,36,9,54]}],
            labels:[1,2,3,4,5,6,7,8,9,10,11,1,2,3,4,5,6,7,8,9,10,11,1,2,3,4,5,6,7,8,9,10,11,1,2,3,4,5,6,7,8,9,10,11],
            xaxis:{
                crosshairs:{width:1},},
            colors:["#F73127"],
            tooltip:{
                fixed:{enabled:false},
                x:{show:false},
                y:{
                    title:{
                    formatter:function(f){return""}}},
                    marker:{show:false}}};
                    
                    new ApexCharts(document.querySelector("#countChart1"),d).render();
                    
                    var b={
                        chart:{
                            type:"bar",
                            height:50,
                            fontFamily:"IBM Plex Sans, sans-serif",
                            foreColor:"#6780B1",
                            sparkline:{
                                enabled:true}},
                                plotOptions:{
                                    bar:{
                                        columnWidth:"25%"}},
                                        series:[{
                                            data:[25,66,41,89,63,25,44,12,36,9,54,25,66,41,89,63,25,44,12,36,9,54,25,66,41,89,63,25,44,12,36,9,54,25,66,41,89,63,25,44,12,36,9,54]}],
                                            labels:[1,2,3,4,5,6,7,8,9,10,11,1,2,3,4,5,6,7,8,9,10,11,1,2,3,4,5,6,7,8,9,10,11,1,2,3,4,5,6,7,8,9,10,11],
                                            xaxis:{
                                                crosshairs:{width:1},},
                                                colors:["#63CF72"],
                                                tooltip:{
                                                    fixed:{enabled:false},
                                                    x:{show:false},
                                                    y:{title:{formatter:function(f){return""}}},
                                                    marker:{show:false}}};
                                                    new ApexCharts(document.querySelector("#countChart2"),b).render();
                                                    var a={
                                                        chart:{
                                                            type:"bar",
                                                            height:50,
                                                            fontFamily:"IBM Plex Sans, sans-serif",
                                                            foreColor:"#6780B1",
                                                            sparkline:{enabled:true}},
                                                            plotOptions:{
                                                                bar:{columnWidth:"25%"}},
                                                                series:[{
                                                                    data:[25,66,41,89,63,25,44,12,36,9,54,25,66,41,89,63,25,44,12,36,9,54,25,66,41,89,63,25,44,12,36,9,54,25,66,41,89,63,25,44,12,36,9,54]}],
                                                                    labels:[1,2,3,4,5,6,7,8,9,10,11,1,2,3,4,5,6,7,8,9,10,11,1,2,3,4,5,6,7,8,9,10,11,1,2,3,4,5,6,7,8,9,10,11],
                                                                    xaxis:{crosshairs:{width:1},},
                                                                    colors:["#5D78FF"],
                                                                    tooltip:{fixed:{enabled:false},
                                                                    x:{show:false},
                                                                    y:{title:{formatter:function(f){return""}}},marker:{show:false}}};

                                                                    new ApexCharts(document.querySelector("#countChart3"),a).render();

                                                                    var c={
                                                                        chart:{
                                                                            height:350,
                                                                            type:"line",
                                                                            stacked:false,
                                                                            fontFamily:"IBM Plex Sans, sans-serif",
                                                                            foreColor:"#6780B1",},
                                                                            stroke:{width:[1,2,3,5],
                                                                                curve:"smooth"},
                                                                                plotOptions:{
                                                                                    bar:{columnWidth:"50%"}},
                                                                                    colors:["#65e0e0","#e4eaff","#66a4fb","#f49917"],
                                                                                    series:[
                                                                                    {name:"New Order",type:"column",data:[23,11,22,27,13,22,37,21,44,22,30]},
                                                                                    {name:"Total Orders",type:"area",data:[44,55,41,67,22,43,21,41,56,27,43]},
                                                                                    {name:"Total Sale",type:"bar",data:[44,55,41,67,22,43,21,41,56,27,43]},
                                                                                    {name:"Total Income",type:"line",data:[30,25,36,30,45,35,44,22,29,16,19]}],
                                                                                    fill:{opacity:[0.85,0.25,1],
                                                                                        gradient:{
                                                                                            inverseColors:false,
                                                                                            shade:"light",
                                                                                            type:"vertical",
                                                                                            opacityFrom:0.85,
                                                                                            opacityTo:0.55,
                                                                                            stops:[0,100,100,100]}},
                                                                                            labels:["01/01/2003","02/01/2003","03/01/2003","04/01/2003","05/01/2003","06/01/2003","07/01/2003","08/01/2003","09/01/2003","10/01/2003","11/01/2003"],
                                                                                            markers:{size:0},
                                                                                            xaxis:{type:"datetime"},
                                                                                            yaxis:{min:0},
                                                                                            tooltip:{
                                                                                                shared:true,
                                                                                                intersect:false,
                                                                                                y:{formatter:function(f){if(typeof f!=="undefined"){return f.toFixed(0)+""}return f}}},
                                                                                                legend:{labels:{useSeriesColors:true},}};
                                                                                                var e=new ApexCharts(document.querySelector("#supportTicketchart"),c);
                                                                                                e.render()});