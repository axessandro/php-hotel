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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoHotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- header -->
    <header>
        <h1>BoHotel</h1>
    </header>
    <!-- /header -->

    <!-- main -->
    <main>
        <table class="table table-dark">

            <thead>
                <tr class="text-center">
                    <th scope="col">Nome hotel</th>
                    <th scope="col">Descrizione hotel</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>

            <tbody>
                <!-- row -->
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <td><?php echo $hotel["name"]; ?></td>
                        <td><?php echo $hotel["description"]; ?></td>
                        <td class="text-center">
                            <?php
                            if ($hotel["parking"] === true) {
                                $park_icon = "check";
                            } else {
                                $park_icon = "xmark";
                            }
                            ?>
                            <i class='fa-solid fa-square-<?php echo $park_icon; ?>'></i>

                        </td>
                        <td class="text-center">
                            <?php for ($i = 0; $i < $hotel["vote"]; $i++) { ?>
                                <i class="fa-solid fa-star"></i>
                            <?php } ?>
                        </td>
                        <td><?php echo $hotel["distance_to_center"]; ?> km</td>
                    </tr>
                <?php } ?>
                <!-- /row -->

            </tbody>

        </table>
    </main>
    <!-- /main -->
</body>

</html>