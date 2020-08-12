<?php require_once "views/partials/header.php"; ?>
<form action="/login" method="post">



    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>



    <button type="submit" class="btn btn-primary">Login</button>
</form>

<?php require_once "views/partials/footer.php"; ?>
