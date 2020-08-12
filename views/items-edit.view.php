<?php require_once "views/partials/header.php"; ?>

<div class="container">
    <form action="/items/edit" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $item->id ?>">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="<?= $item->title ?>">
        </div>
        <div>
            <img src="<?= $item->img ?>" alt="" width="300px; margin:0 auto;">
        </div>
        <div class="form-group">
            <label for="img">Image update (optional)</label>
            <div>
                <input type="file" name="img" id="img">
            </div>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" id="price" name="price" class="form-control" value="<?= $item->price ?>">
        </div>

        <div class="form-group">
            <label for="extras">Extras</label>
            <input type="text" id="extras" name="extras" class="form-control" value="<?= $item->extras ?>">
        </div>

        <div class="form-group">
            <label for="description">Body</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?= $item->description ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

<?php require_once "views/partials/footer.php"; ?>
