
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    ?>
    <title>Hotel</title>
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Hotel lists</h1>
                    <table class="table caption-top">
                      <thead>
                        <tr>
                          <th scope="col">Index</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>
