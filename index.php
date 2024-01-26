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

    $fltHotels = $hotels;

    if(isset($_GET['parking']) && $_GET['parking'] != ''){
        $parking = $_GET['parking'];
        $fltParking = [];

        foreach($fltHotels as $hotel){
            if($hotel['parking'] == $parking){
                $fltParking [] = $hotel;
            }
        }

        $fltHotels = $fltParking;     
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
    <?php include __DIR__.'/header.php' ?>
    <main class="my-5">
        <div class="container">
            <form action="" method="get">
                <div class="row my-4">
                    <div class="col-auto">
                        <select name="parking" id="parking" class="form-select">
                            <option value="">Parking: Yes / No</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-warning">Go</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Parking</th>
                                <th>Vote</th>
                                <th>Distance to center</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($fltHotels as $hotel) { ?>
                                <tr>
                                    <td><?php echo $hotel['name'] ?></td>
                                    <td><?php echo $hotel['description'] ?></td>
                                    <td><?php echo $hotel['parking'] ? 'Yes' : 'No' ?></td>
                                    <td><?php echo $hotel['vote'] ?></td>
                                    <td><?php echo $hotel['distance_to_center'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__.'/footer.php' ?>
</body>
</html>