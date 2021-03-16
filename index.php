<?php
$url = 'https://www.canalti.com.br/api/pokemons.json';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);
curl_close($ch);

$result = json_decode($result, true);


?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    <div class="container-fluid">
        <div class="grid">
            <?php foreach ($result['pokemon'] as $pokemon) : ?>
                <div class="card <?php echo $pokemon['type'][0] ?>">
                    <img class="card-img-top" src="<?php echo $pokemon['img'] ?>" alt="" style="width: 200px; height: 200px; margin: auto">
                    <div class="card-body">
                        <h4 class="card-title h3 mt-3 text-center"><?php echo $pokemon['name'] ?></h4>
                        <p class="card-text mt-5 font-weight-light">Tipo: <?php echo $pokemon['type'][0] ?>/ <?php echo $pokemon['type'][0] ?></p>
                        <hr>

                        <p class="card-text font-weight-light">Largura: <?php echo $pokemon['weight'] ?></p>
                        <p class="card-text font-weight-light">Altura: <?php echo $pokemon['height'] ?></p>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>