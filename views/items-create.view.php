<?php require_once "views/partials/header.php"; ?>

<div class="container" style="min-height: 100vh;">
    <div class="row mt-4">
        <div class="col-xl-4 col-lg-5 col-md-8 col-sm-9 col-10 m-auto">
            <form action="/items/create" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" class="form-control" id="size" name="size">
                </div>
                <div class="form-group">
                    <label for="img">Image</label>
                    <div>
                        <input type="file" id="img" name="img">
                    </div>
                </div>
                <div class="form-group">
                    <label for="price">Price (£)</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                    <label for="extras">Extras (separate with commas)</label>
                    <input type="text" class="form-control" id="extras" name="extras">
                    <small>Correct: salt, pepper</small><br>
                    <small>Incorrect: <strike>salt,pepper</strike></small>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "views/partials/header.php"; ?>
