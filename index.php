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
                                
                                <div class="text-center" style="width: 300px;">
                                    <!-- a href="#" title="Click for video" -->
                                    <a href="./details.php?id=<?= $being['id'] ?>" title="<?= $being['name'] ?>">
                                        <img src="<?= $being['imageurl'] ?>" class="rounded-lg mx-auto d-block"  
                                            style="height:190px;width:240px; padding:15px;">
                                    </a>
                                    <p>
                                        <a class="btn btn-outline-secondary btn-sm park"
                                             data-url="<?php echo $being['imageurl']; ?>"  data-name="<?php echo $being['name']; ?>"
                                            data-desc= "<?php echo $being['description']; ?>" >
                                            Details
                                        </a>
                                    </p>
                                    
                                </div>  <!-- class="text-center" -->

                            </div>  <!-- class="product font-rale" -->

                        </div> <!-- class="item py-2" -->
                    <?php } // closing inner foreach function ?>

                </div> <!-- class="owl-carousel owl-theme" -->
            <?php } // closing outer foreach function ?>
            
            <hr style="height: 2px; background-color: rgb(192, 133, 90); border: none;">

        <hr />

        <!-- Modal Section -->
        <div class="bg-modal py-20">

            <!-- the box that will sit over the black background -->
            <div class="modal-content">
                <div class="container">
                    <!-- show the iFrame that will display the God selected -->
                    <div class="h_iframe">
                        <div class="close-modal">+</div>
                        <embed id="frame" class="embed-responsive-item" width="800" height="800" scrolling="yes" />
                    </div>
                </div>   <!-- class="container" -->
            </div> <!-- class="modal-content" -->

        </div> <!-- class="bg-modal" -->
        
    </div>  <!-- class="container py-5" -->

</section> <!-- id="top-sale" -->

<?php
    // include footer.php file
    include ("footer.php");
?>
