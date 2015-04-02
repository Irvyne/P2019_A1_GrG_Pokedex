<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokedex</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header></header>
        <main>
            <?php foreach ($pokemons as $pokemon) { ?>
                <article>
                    <h1><?php echo $pokemon['name']; ?></h1>
                    <p>HP: <?php echo $pokemon['hp']; ?>hp</p>
                    <p>Level <?php echo $pokemon['level']; ?></p>
                </article>
            <?php } ?>

            <?php
            foreach ($pokemons as $pokemon) {
                echo '<article>';
                echo '<h1>'.$pokemon['name'].'</h1>';
                echo '<p>HP: '.$pokemon['hp'].'</p>';
                echo '<p>Level: '.$pokemon['level'].'</p>';
                echo '</article>';
            }
            ?>
        </main>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>