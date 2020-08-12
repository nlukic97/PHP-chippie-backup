<?php require_once "views/partials/header.php"; ?>

<form action="/users" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>

<?php require_once "views/partials/header.php"; ?>
