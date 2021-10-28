<?php

/* Block Two Template */

$kolor_kwadratu = get_field('kolor_kwadratu') ?: 'kolor_kwadratu';
$obraz = get_field('obraz') ?: 'obraz';
$naglowek_1 = get_field('naglowek_1') ?: 'naglowek_1';
$paragraf = get_field('paragraf') ?: 'paragraf';
$naglowek_2 = get_field('naglowek_2') ?: 'naglowek_2';
$one_nagłowek_1 = get_field('one_nagłowek_1') ?: 'one_nagłowek_1';
$slider = get_field('slider');

?>


<section class="about">

<div class="container-fluid">
    <div class="row d-flex justify-content-start align-items-center">
        <div class="col-8 col-sm-9 col-md-10 col-lg-6 pb-5 p-lg-0 mb-5 m-lg-0 ">
            <div class="row d-flex justify-content-end">
                <div class="col-md-12 col-lg-10 col-xl-9 fotka" style="background-color:<?php echo $kolor_kwadratu?>;">
                    <img src="<?php  echo $obraz['url']?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xl-3 photo_description">
            <div class=" p-3 d-flex flex-column align-items-center justify-content-center">
                <h3 class="pb-3"><?php echo $naglowek_1 ?></h3>
                <p><?php echo $paragraf ?></p>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-end row-header">
        <div class="col d-flex justify-content-center px-3">
            <p><?php echo $naglowek_2 ?></p>
        </div>
    </div>
</div>

</section>

<section class="slider_section">
<div class="container-fluid">
    <div class="row d-flex flex-column align-content-center " >
        <div class="col-sm-11 col-md-10 col-xl-6 " >
           
            <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade"  data-bs-ride="carousel">
                
                <div class="carousel-inner  text-dark">
                    <?php 
                        $counter = 0;
                        foreach($slider as $slide){
                            $counter++;
                            ?>
                                <div class="carousel-item <?php if($counter == 1){echo "active";} ?>  text-dark" data-bs-interval="2000">
                                    <img src="<?php echo $slide['image']['url'] ?>" alt="...">
                                    <div class="margin-from-image" >
                                        <div class="carousel-caption d-none d-md-block " >
                                            <p><?php echo $slide['text'] ?></p>
                                        </div>
                                    </div>
                                </div>
                    <?php }
                    ?>          
                </div>
                <div class="carousel-indicators d-none d-md-flex">
                    <?php 
                        $counter = 0;
                        foreach($slider as $slide){
                            $counter++;
                            ?>
                                <button   type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo ($counter -1)?>" class="btn-slider <?php if($counter ==1){echo "active";} ?>" aria-current="<?php if($counter ==1){echo "true";}?>" aria-label="Slide <?php echo $counter ?>"></button>
                    <?php   }
                    ?>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
</section>