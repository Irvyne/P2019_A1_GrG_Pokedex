<?php include '_header.php'; ?>

<?php foreach ($pokemons as $pokemon) { ?>
    <article class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <h1><a href="pokemon.php?id=<?php echo $pokemon['id']; ?>"><?php echo $pokemon['name']; ?></a></h1>
        <p>HP: <?php echo $pokemon['hp']; ?>hp</p>
        <p>Level <?php echo $pokemon['level']; ?></p>
    </article>
<?php } ?>

<?php include '_footer.php'; ?>