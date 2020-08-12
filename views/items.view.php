<?php require_once "views/partials/header.php"; ?>
<div class="container">
    <div class="container" style="min-height: 100vh;">
        <div class="row mt-4 mb-3">
            <div class="col-12 text-center">
                <a href="/items/create" class="btn btn-primary">New item</a>
            </div>
        </div>
        <div class="row">
            <?php foreach ($items as $item): ?>
                <div class="col-lg-4 col-md-12 col-sm-12 p-3"> <!-- how to align to center when it becomes mobile ?? -->
                    <div class="card m-auto" style="width: 18rem"> <!-- for each here -->
                        <div style="height:192px; overflow: hidden; display: flex; align-items: center;">
                            <img src="<?= $item->img?>" alt="" style="width: 18rem">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->size ?> <?= $item->title ?> - <?= $item->price ?>&#163;</h5>
                            <p class="card-text">Extras: <?= $item->extras ?></p>
                            <a href="/items/edit?id=<?= $item->id?>" class="btn btn-success">Edit</a>
                            <a href="/items/destroy?id=<?= $item->id?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require_once "views/partials/footer.php"; ?>