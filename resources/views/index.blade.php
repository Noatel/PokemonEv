@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row input-pokemon">
            <div class="col-md-11 ">
                <div class="form-group">
                    <input type="text" name="pokemon" class="form-control" id="input-pokemon">
                </div>
            </div>
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
        <div class="row ">
            <div id="store-pokemon">

            </div>
        </div>
    </div>
    <script>

        $("#input-pokemon").on('input', function (e) {
            e.preventDefault();
            var data = $(this).val();  //Get pokemon

            if (data.length > 2) {



                $.ajax({
                    type: "POST",
                    url: "/search/" + data,
                    data: {
                        data: data,
                        _token: '{{csrf_token()}}'
                    },

                    success
            :
            function (data) {
                $('#store-pokemon').empty();
                for (var i = 0; i < data.length; i++) {
                    if( data[i].number == '029' ) {
                        $('#store-pokemon').append(
                                '<div class="col-md-2 pokemon">' +
                                '<img src="http://www.pokestadium.com/sprites/black-white/nidoranf.png" alt="Nidoran female">' +
                                '<div class="header-wrapper"><h4> #' + data[i].number + '<div>' + data[i].name + '</div></h4></div> ' +
                                '<canvas id="pokechart-' + data[i].number + '" width="400" height="400"></canvas> </div>'
                        );
                    }
                    else if( data[i].number == '032'){
                        $('#store-pokemon').append(
                                '<div class="col-md-2 pokemon">' +
                                '<img src="http://www.pokestadium.com/sprites/black-white/nidoranm.png" alt="Nidoran male">' +
                                '<div class="header-wrapper"><h4> #' + data[i].number + '<div>' + data[i].name + '</div></h4></div> ' +
                                '<canvas id="pokechart-' + data[i].number + '" width="400" height="400"></canvas> </div>'
                        );
                    } else {
                            $('#store-pokemon').append(
                                    '<div class="col-md-2 pokemon">' +

                                    '<img src="http://www.pokestadium.com/sprites/black-white/' + data[i].name.toLowerCase() + '.png" alt="' + data[i].name + '">' +
                                    '<div class="header-wrapper"><h4> #' + data[i].number + '<div>' + data[i].name + '</div></h4></div> ' +
                                    '<canvas id="pokechart-' + data[i].number + '" width="400" height="400"></canvas> </div>'
                            );
                    }
                    createPokeChart(data[i].number, data[i].hp, data[i].attack, data[i].defense, data[i].sp_attack, data[i].sp_defense, data[i].speed);


                }

            }

        })
        } else
        {
            $("#store-pokemon").empty();
        }

        })
        ;

        function createPokeChart(pokeData, hitpoints, attack, defense, special_attack, special_defense, speed) {
            $(function () {
                options = {
                    legend: {
                        display: false
                    },
                    tooltips: {
                        enabled: false
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps:1,
                                stepValue:1,
                                max:3
                            }
                        }]},
                    title: {
                        display: true,
                        text: 'Pokemon EV:'
                    },
                    scaleShowLabelBackdrop: true,
                    scaleBackdropColor: "rgba(255, 99, 132, 0.2)",
                    scaleBeginAtZero: true,
                    scaleBackdropPaddingY: 1,
                    scaleBackdropPaddingX: 1,
                    scaleSteps: 1,
                    scaleStartValue: 0,
                    scaleStepWidth: 25,
                    scaleShowLine: true,
                    segmentShowStroke: true,
                    segmentStrokeColor: "#fff",
                    segmentStrokeWidth: 1,
                    animationSteps: 50,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,

                };
                var ctx = $("#pokechart-" + pokeData);
                var data = {

                    labels: ["Hitpoints", "Attack", "Defense", "Sp Attack", "Sp Defense", "Speed"],
                    datasets: [
                        {
                            label: '',

                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],

                            borderWidth: 1,

                            data: [hitpoints, attack, defense, special_attack, special_defense, speed]
                        }
                    ]
                };
                var pokeBar = new Chart(ctx, {
                    type: 'horizontalBar',
                    data: data,
                    options: options
                });

            });
        }


    </script>

@endsection