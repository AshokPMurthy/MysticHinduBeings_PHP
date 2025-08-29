<?php
    ob_start();
    // include header.php file
    include ("header.php");
?>


<section id="top-sale">
    <div class="container py-5">

        <p class="font-size-25" style="text-align: center; color: rgb(192, 133, 90);"><strong><em>Mystic Hindu Beings</em></strong></p>

        <?php 
            // get all the names of the Mystic hindu beings
            $names = get_unique_names();
            //var_dump($names);
            foreach ($names as $row) {  ?>

                <hr style="height: 2px; background-color: rgb(192, 133, 90); border: none;">

                <p style="text-align: center; color: rgb(192, 133, 90); font-size: 18px;"><strong><em><?=$row['name'] ?></em></strong></p>
                
                <!-- Owl Carousel -->
                <div class="owl-carousel owl-theme">

                    <?php 
                        $beings = get_beings_by_name($row['name']);
                        foreach ($beings as $being) {  ?>
                            <div class="item ">
                                <div class="product font-rale">
                                    
                                    <div class="text-center" style="width: 200px;">
                                        
                                        <p>
                                            <button class="btn btn-main" type="button"
                                                data-url="<?php echo $being['imageurl']; ?>"  
                                                data-name="<?php echo $being['name']; ?>"
                                                data-desc= "<?php echo $being['description']; ?>" 
                                                data-toggle="modal" data-target="#exampleModal" >

                                                <img src="<?= $being['imageurl'] ?>" class="rounded-lg mx-auto d-block"  
                                                    style="height:150px;width:200px; padding:5px;" title="Click for Details">

                                            </button>
                                        </p>
                                        
                                    </div>  <!-- class="text-center" -->

                                </div>  <!-- class="product font-rale" -->

                            </div> <!-- class="item py-2" -->
                        
                        <?php } // closing inner foreach function ?>

                </div> <!-- class="owl-carousel owl-theme" -->

            <?php } // closing outer foreach function ?>
            
        <!-- draw last "hr" -->
        <hr style="height: 2px; background-color: rgb(192, 133, 90); border: none;">

        
<!-- Modal for Owl-Carousel -->
<div class="modal fade" id="exampleModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="width: 845px; height: 655px;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalTitle">Modal title</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="exampleModalImage" src="" height="190" width="240" class="rounded-lg mx-auto d-block" />
                <p>
                    <h5 id="exampleModalDesc" style="text-align: left; padding: 5px;"></h5>
                </p>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

        
    </div>  <!-- class="container py-5" -->

</section> <!-- id="top-sale" -->

<?php
    // include footer.php file
    include ("footer.php");
?>
