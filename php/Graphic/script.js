var a =0;
var b=1;
var interval;

$(function() {
    $('#sub_btn').bind('click', function(){
        $('.chart-container').hide();
        $('#sub_btn').hide();
        $('#send-sub').show();
        clearInterval(interval);
    }); 
    $('.sub').bind('submit',function(e){
        e.preventDefault();
        $('.chart-container').show();
        $('#sub_btn').show();
        $('#send-sub').hide();
        var txt = $('.sub').serialize();
             interval = setInterval(function(){
                $.ajax({
                type:'POST',
                url:'subscribe.php',
                data:txt,
                success:function(retorno){
                    a = parseInt(retorno);
                    $('#h3').html(a);
                    b= 100-a;
                    var ctx = document.getElementById('Graphc').getContext('2d');
                    var chart = new Chart(ctx, {
                        // The type of chart we want to create
                        type: 'doughnut',

                        // The data for our dataset
                        data: {
                            labels: ["Temperatura"," "],
                            datasets: [{
                                label: "My First dataset",
                                backgroundColor: ['rgb(255, 99, 132)', 'rgb(255,255,255)'],
                                // borderColor: 'rgb(0,0,0)',
                                data: [a,b],
                            }]

                        },

                        // Configuration options go here
                        options: {
                            animation: {
                                animateRotate: false,
                                animateScale: false
                            }

                        }
                    });
                },
                error:function(){
                    alert("erro");
                }
            });
        }, 500);
        
        


    });

});