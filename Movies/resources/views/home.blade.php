@extends('layouts.app')

@section('content')

    <script>

        $.getJSON("https://tv-v2.api-fetch.website/shows/1").then(function(response){
            for(var i = 0; i < response.length; i++)
            {
                console.log(response[i]);

                $("#maincontainer").append(
                    $('<div class="card-deck" style="bottom-margin: 10px;">' +
                        '<div class="card text-center"><div class="card-block">' +
                            '<h4 class="card-title">' + response[i].title + '</h4>' +
                            '<p class="card-text"><img style="width: 200px; height: 300px;" src="' + response[i].images.banner + '"> </p>' +
                        '</div>' +
                        '<div class="card-footer">test</div>')
                );
            }
        });


        // $("#maincontainer").append(
        //     $('<div class="card-deck">').append(
        //         $('<div class="card text-center">').append(
        //             $('<div class="card-block"><h4 class="card-title">' + response[i].title + '</h4><p class="card-text"><img style="width: 200px; height: 300px;" src="' + response[i].images.banner + '"> </p></div>').append(
        //                 $('<div class="card-footer">test</div>')
        //             )
        //         )
        //     )
        // );

    </script>

<div id="maincontainer" class="container">

    <div class="card-deck">
        <div class="card text-center">
            <div class="card-block">
                <h4 class="card-title">Permits</h4>
                <p class="card-text">
                    smaller text
                </p>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection
