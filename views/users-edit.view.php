<?php require_once "views/partials/header.php"; ?>

<form action="/users/edit" method="post">
    <input type="hidden" name="id" value="<?= $user->id ?>">

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" value="<?= $user->name ?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control" value="<?= $user->email ?>">
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
</form>

<?php require_once "views/partials/header.php"; ?>
