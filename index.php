<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
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

    $isPressed = isset($_GET['parking']) ? true : false;
    $ratingPressed = isset($_GET['rating']) ? true : false;



    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";

    $hotelFiltered = []

    ?>
    <?php foreach ($hotels as $hotel) {
        if ($isPressed) {
            //se premuto filtra 

            if ($hotel['parking'] == true) {
                $hotelFiltered[] = $hotel;
            }
        } else {
            //se non premuto ho tutti gli hotel
            $hotelFiltered[] = $hotel;
        }
    }
    ?>

    <h2 class="text-center p-4">Hotel list</h2>
    <div class="container">

        <form action="" method="get">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="parking" id="parking">
                <label class="form-check-label" for="parcheggio">
                    Hotel con parcheggio
                </label>
                <button type="submit">Submit</button>
            </div>

        </form>

        <form action="" method="get">
            <select class="form-select" name="rating" aria-label="Default select example">
                <option selected>Filter by rating</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <button type="submit">Submit</button>
        </form>


        <table class="table table-bordered">
            <thead>
                <tr>

                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to center</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotelFiltered as $hotel) : ?>
                    <tr>
                        <th scope="row"> <?php echo $hotel['name'] ?></th>
                        <td><?php echo $hotel['description'] ?></td>
                        <td><?php if ($hotel['parking'] == true) {
                                echo 'Yes';
                            } else {
                                echo 'No';
                            } ?> </td>
                        <td><?php echo $hotel['vote'] ?> </td>
                        <td><?php echo $hotel['distance_to_center'] . " Km" ?> </td>
                    <?php endforeach; ?>


            </tbody>
        </table>

    </div>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>