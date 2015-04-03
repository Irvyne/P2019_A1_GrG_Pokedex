<?php include '_header.php'; ?>

<form xmlns="http://www.w3.org/1999/html">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter a name" required autofocus>
    </div>
    <div class="form-group">
        <label for="hp">Hp</label>
        <input type="number" class="form-control" id="hp" name="hp" placeholder="Enter HP" required>
    </div>
    <div class="form-group">
        <label for="level">Level</label>
        <input type="number" class="form-control" id="level" name="level" placeholder="Enter level" required>
    </div>
    <div class="form-group">
        <label for="evolution">Evolution</label>
        <select class="form-control" id="evolution" name="evolution">
            <option value="1">Salamèche</option>
            <option value="2">Reptincel</option>
            <option value="3">Dracofeu</option>
        </select>
    </div>
    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" id="picture" name="picture">
        <p class="help-block">Define the pokemon's picture</p>
    </div>
    <input type="submit" class="btn btn-default">Create pokemon</input>
</form>

<?php include '_footer.php'; ?>
