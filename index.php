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

// $choose = $_GET['parking'];

// $ranking = intval($_GET['ranking']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Php-Hotel</title>
</head>

<body>

    <!-- <form action="" method="get">
            <select name="parking" id="parking">
                <option value="si/no"></option>
                <option value="si">si</option>
                <option value="no">no</option>
            </select>
            

            <select name="ranking" id="ranking">
                <option value="none"></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <button>invia</button>
    </form> -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance</th>

            </tr>
        </thead>

        <?php
        for ($i = 0; $i < count($hotels); $i++) {
            $hotel = $hotels[$i];
            $name = $hotel['name'];
            $description = $hotel['description'];
            $parking = $hotel['parking'];
            $vote = $hotel['vote'];
            $distance = $hotel['distance_to_center']



        ?>

            <tbody>
                <!-- <tr class="
                <?php if($choose === 'si' && $parking === true && $ranking === $vote){
                    echo 'd-none';
                }else{
                    echo '';
                }

                if($choose === 'no' && $parking === false && $ranking === $vote){
                    echo '';
                }else{
                    echo 'd-none';
                }

                if($choose === 'si/no'){
                    echo 'd-block';
                }
                ?>"> -->
                <tr>
                    <th scope="row"><?php echo $name; ?></th>
                    <td><?php echo $description; ?></td>

                    <td>
                        <?php if ($parking === true) {
                            echo 'Si';
                        } else {
                            echo 'No';
                        }
                        ?>
                    </td>

                    <td><?php echo $vote; ?></td>
                    <td><?php echo $distance; ?></td>
                </tr>

            </tbody>

        <?php
        }
        ?>

    </table>


</body>

</html>