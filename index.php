<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hotels</title>
    </head>
    <body>
         <?php foreach ($hotels as $hotel) { ?>
            
           <div class="container d-flex justify-content-center align-content-between">
                <div class="h_title">
                    <h1>
                        <?php echo $hotel['name'];?>
                    </h1>
                </div>
                <div class="h_description">
                    <h2>
                        <?php echo $hotel['description'];?>
                    </h2>
                </div>
                <div class="addictional">
                    <span>
                        <?php echo $hotel['parking'];?>
                    </span>
                    <span>
                        <?php echo $hotel['vote'];?>
                    </span>
                    <span>
                        <?php echo $hotel['distance_to_center'];?>
                    </span>
                </div>
           </div> 
        <?php } ?>
    </body>
</html>

                