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

    foreach ($hotels as $hotel) {
        echo "$hotel[name] $hotel[description] $hotel[parking] $hotel[vote] $hotel[distance_to_center]";
    }

    foreach ($hotels as $key) {
        echo "<h3> $key[0] </h3>";
    }
    ?>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">1</th>
                <th scope="col">2</th>
                <th scope="col">3</th>
                <th scope="col">4</th>
                <th scope="col">5</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Name</th>

                <?php foreach ($hotels as $hotel) : ?>
                    <td><?php echo $hotel['name'] ?> </td>
                <?php endforeach; ?>

            </tr>
            <tr>
                <th scope="row">Description</th>
                <?php foreach ($hotels as $hotel) : ?>
                    <td><?php echo $hotel['description'] ?> </td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th scope="row">Parking</th>
                <?php foreach ($hotels as $hotel) : ?>
                    <td><?php if ($hotel['parking'] == true) {
                            echo 'Yes';
                        } else {
                            echo 'No';
                        } ?> </td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th scope="row">Vote</th>
                <?php foreach ($hotels as $hotel) : ?>
                    <td><?php echo $hotel['vote'] ?> </td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th scope="row">Distance to center</th>
                <?php foreach ($hotels as $hotel) : ?>
                    <td><?php echo $hotel['distance_to_center'] ?> </td>
                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>



</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>