<?php require_once "views/partials/header.php"; ?>
<div class="mb-3">
    <a href="/users/create" class="btn btn-info">Add new Post</a>
</div>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><a href="/users/show?id=<?= $user->id ?>" class="btn btn-info">Show</a> <a href="/users/edit?id=<?=
                $user->id ?>" class="btn btn-warning">Edit</a> <a href="/users/destroy?id=<?=
                $user->id ?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>


<?php require_once "views/partials/footer.php"; ?>
