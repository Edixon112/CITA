$(function(){
    var b={
        chart:{
            height:350,
            type:"line",
            fontFamily:"IBM Plex Sans, sans-serif",
            foreColor:"#6780B1",},
            plotOptions:{
                bar:{
                    horizontal:false,
                    columnWidth:"50%"},},
                    dataLabels:{enabled:true},
                    stroke:{show:true,
                        width:1,
                        colors:["transparent"]},
                        series:[{
                            name:"Tickets Sold",
                            data:[44,55,57,56,61,58,63,60,66]},{
                                name:"Tickets Available",
                                data:[76,85,10,98,87,10,91,14,94]},{
                                    name:"Net Revenue",
                                    data:[35,41,36,26,45,48,52,53,41]}],
                                    colors:["#5D78FF","#C9D5FA","#63CF72"],
                                    markers:{
                                        size:5,
                                        strokeColor:"#fff",
                                        strokeWidth:3,
                                        strokeOpacity:1,
                                        fillOpacity:1,
                                        hover:{size:6}},
                                        xaxis:{
                                            categories:["Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct"],},
                                            yaxis:{
                                                title:{text:"K"}},
                                                fill:{opacity:1},
                                                tooltip:{
                                                    y:{formatter:function(e){
                                                        return""+e+"K"}}}};
                                                        
                                var d=new ApexCharts(document.querySelector("#audienceOverviewBar"),b);
                                d.render();
                                
                                var a=[{
                                    label:"Male",
                                    fontFamily:"IBM Plex Sans, sans-serif",
                                    foreColor:"#6780B1",
                                    data:[[1,95]],
                                    color:"#66a4fb"},{
                                        label:"Female",
                                        data:[[1,75]],
                                        color:"#e4eaff"},{
                                            label:"VIP",
                                            data:[[1,60]],
                                            color:"#65e0e0"},{
                                                label:"Others",
                                                data:[[1,50]],
                                                color:"#EE8CE5"}];
                                    $.plot("#sessionsDeviceDonut",a,{
                                        series:{
                                            pie:{
                                                show:true,
                                                radius:1,
                                                label:{
                                                    show:true,
                                                    radius:2/3,formatter:c,
                                                    threshold:0.1}}},
                                                    grid:{
                                                        hoverable:true,
                                                        clickable:true}});
                                                        function c(e,f){
                                                            return"<div style='font-size:7pt; text-align:center; padding:2px; color:white;'>"+e+"<br/>"+Math.round(f.percent)+"%</div>"}});