<?php
    foreach ($_POST as $key=>$val){
        echo "Key: {$key} = {$val} <br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel in Chaing Mai</title>

    <!-- jQurey -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
   <!-- Bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Leaflet Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

</head>

<body>

    <nav>
        <div class="container">
            <div class="nav-flex">

            <div class="logo">
                    <h1><a href="index.html">TICM</a><i class="fas fa-map-marked-alt" style="color: white;"></i></h1> 
                </div>

                <ul class="menu">
                    <li>
                        <form action="">
                            <input type="text" name="search" placeholder="Find great place..." required>
                            <button type="submit" name="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="map.php">Map</a></li>
                    <li><a href="tours.html">Tours</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div id="mymap" style="height:100vh"></div>

    <section id="map">
       <div class="container">
            <script>

                // Create Map Object
                var map = L.map('mymap');
                map.setView([18.783887, 99.0021492], 13);

                //Loading BaseMap
                var OpenStreetMap_France = L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    maxZoom: 20,
                    attribution: '&copy; OpenStreetMap France | &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);
    
                var basemap ={"France":OpenStreetMap_France};

            </script>
       </div>
   </section>

</body>
</html>