<?php
include 'header.php';
?>

<div class="title-header" id="title-head">
    <h1 class="text-center text-light"><b>Browse House</b></h1>
</div>
<?php include "details.php" ?>
<div class="container-class">
    <div class="row container-fluid">
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        include_once 'php/config.php';
        $sql = mysqli_query($conn, "SELECT * from content WHERE type='House' AND available='yes'");
        while ($row = mysqli_fetch_assoc($sql)) {
            echo '
        <div class="col mb-4"  style="max-width: 390px; height: 400px">
            <div class="card">
            <img src="/content/' . $row["image"] . '" class="card-img-top product-image">
            <div class="card-body">
                <h2 class="card-title mt-1 fw-bold">' . $row["name"] . '</h2
                <h6 class="my-2  card-text fw-bold">BDT ' . $row["price"] . '/month</h6><br>
                <button class="mt-4 btn btn-primary stretched-link detailbutton" data-bs-toggle="modal" data-bs-target="#detail-moda" data-image="' . $row["image"] . '" data-name="' . $row["name"] . '" data-details="' . $row["description"] . '" data-price="' . $row["price"] . '"  data-id="' . $row["id"] . '">Rent This</button>
            </div>
            </div>
        </div>';
        }
        ?>
    </div>
</div>
<script src="/js/product.js"></script>
<?php
include 'footer.php';
?>