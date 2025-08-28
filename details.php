<?php
    ob_start();
    // include header.php file
    include ("header.php");

    // initialize the "id" var which comes in thru request parm..
    $id = "";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = 0; // will give an empty result
    }

    //set god api url for chosen $id
    $god = $tbl_link->getGodDoc($id);

?>

<!-- Display "$temple" data in a table : -->
<div class="container">

    <div class="card mt-3 mx-auto" style="max-width: 540px;">
        
        <div class="row g-0">

            <div class="col-md-12">
                <div class="card-header text-white bg-info">
                    <p class="card-text">
                        <h5 class="card-title text-center">
                            <strong><?php echo $god[0]['name']; ?></strong>
                        </h5>
                    </p>
                </div> <!-- end class="card-header text-white bg-info" -->
            </div> <!-- end class="col-md-12" -->

            <div class="col-md-12">
                <div class="card-body color-lightblue-bg">
                <video width="800" class="img-fluid" controls>
                        <source src="<?php echo $god[0]['mp4_url']; ?>" type="video/mp4">
                </video>
                <p class="card-text text-center" style="font-size:14px; font-family: arial;">
                        <a class="btn btn-primary btn-sm rounded-pill mt-3" title="Back to main page."
                    href="./index.php">Back</a>
                </p>
                </div> <!-- end class="card-body" -->
            </div> <!-- end class="col-md-12" -->

            <div class="col-md-12">
            </div> <!-- end class="col-md-12" -->

            <div class="col-md-12">
            </div> <!-- end class="col-md-12" -->

        </div> <!-- end class="row g-0" -->

    </div>  <!-- end class="card mt-3 mx-auto" style="max-width: 540px;" -->


</div> <!-- end class="container" -->

<?php
    // include footer.php file
    include ("footer.php");
?>
