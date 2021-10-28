<?php

/* Block three Template */

$data = get_field('kafelek');
$naglowek_accordion = get_field('naglowek_accordion');
?>
<section style="z-index:5">
        <div class="container-fluid" >
            <div class="row d-flex justify-content-center">
                <div class=" col-sm-11 col-md-8 col-lg-7 col-xl-4 text-center px-3 p-md-0">
                    <h1 class="mb-5"><?php echo $naglowek_accordion ?></h2>
                    <?php 
                    foreach($data as $item){
                    ?>
                    <div class="accordion-container">
                        <button class="accordion"><?php echo $item['naglowek'] ?></button>
                        <div class="panel">
                            <p>
                                <?php echo $item['paragraf'] ?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </section>