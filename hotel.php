
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        ] ;

        $userRating = $_GET['rating'];
        $userParking = $_GET['parking'];

    ?>
    <title>Hotel</title>
</head>
<body>
    <!-- Form container -->
        <div class="container my-5">
            <div class="row">
                <form>
                    <div class="col-12">
                        <label for="rating">Valutazione</label>
                        <select name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for="parking">Parcheggio</label>
                        <input name="parking" type="radio" value="no">
                        <label for="no">No</label>
                        <input name="parking" type="radio" value="yes">
                        <label for="yes">Yes</label>
                        <button type="submit" class="btn btn-primary mx-3">Cerca</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Hotel lists</h1>
                    <table class="table caption-top">
                      <thead>
                        <tr>
                          <th scope="col">Hotel Name</th>
                          <th scope="col">Description</th>
                          <th scope="col">Parking</th>
                          <th scope="col">Vote</th>
                          <th scope="col">Distance to center (Km)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($hotels as $index => $hotel){
                            if(($userParking === null
                            || ($userParking === 'yes' && $hotel['parking'])
                            || ($userParking === 'no' && !$hotel['parking']))
                            && $userRating <= $hotel['vote']){
                        ?>       

                             <tr>
                                <td> <?php echo $hotel['name'] ?> </td>
                                <td> <?php echo $hotel['description'] ?> </td>
                                <td class='text-center'> <?php echo $hotel['parking'] ? "yes" : "no" ?> </td>
                                <td class='text-center'> <?php echo $hotel['vote'] ?> /5</td>
                                <td class='text-center'> <?php echo $hotel['distance_to_center'] ?> km</td>
                            </tr>
                        <?php

                        }
                    }
                        ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>
