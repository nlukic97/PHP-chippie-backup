<?php require_once "views/partials/header.php";?>
    <div class="container" style="min-height: 100vh;">
        <?php foreach($orders as $order):?>
        <div class="row p-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Monday - <?= $order->date; ?> - <?= $order->time?></h5>
                        <p class="card-text">Name: <?= $order->name?></p>
                        <p class="card-text">Address: <?= $order->address?></p>
                        <p class="card-text">Email: <?= $order->email?></p>
                        <p class="card-text">Phone: <?= $order->phone?></p>
                        <div>
                            <p class="card-text">Order:</p> <!-- This needs to be gotten from the item_order table. So id is this one, so we want id of those orders to be gotten -->
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text">E</p>
                                </div>
                            </div>
                        </div>
                        <p class="card-text">Price: <?= $order->total?>&#163;</p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php require_once "views/partials/footer.php"; ?>