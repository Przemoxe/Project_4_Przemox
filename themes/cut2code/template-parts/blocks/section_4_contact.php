<?php

/* Block four Template */

$name = get_field('all_right_services_text') ?: 'all_right_services_text';


?>


<section class="contact d-none d-md-flex" >
    <div class="container-fluid shade d-flex flex-column justify-content-end " >
        <div class="row d-flex justify-content-center ">
            <div class="col-md-5 col-lg-4 col-xl-3   contact-us d-flex flex-column justify-content-between" >
                <p >Contact <span>Us</span></p>
                <div>
                    <a href="" class="btn-download-contact-us">Download</a>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-3   d-flex justify-content-center contact-form-hight" >
                <?php echo do_shortcode('[contact-form-7 id="34" title="Formularz 1" html_id="contact-form-1234" html_class="form contact-form"]'); ?>
                
            </div>
            
        </div>
        <div class="row all-right" >
            <div class="col d-flex justify-content-center align-items-center all-right-text">
                <?php echo $name ?>
              
            </div>
        </div>

    </div>
    
</section>



<section class="contact d-md-none">
    <div class="container-fluid shade d-flex flex-column justify-content-end " >
        <div class="row d-flex justify-content-center">
            <div class="col-12 contact-us-mobile d-flex flex-column justify-content-between align-items-center" >
                <p>Contact <span>Us</span></p>
                <div>
                    <a href="" class="btn-download-contact-us">Download</a>
                </div>
            </div>
            <div class="col d-flex justify-content-center " >
                <?php echo do_shortcode('[contact-form-7 id="34" title="Formularz 1" html_id="contact-form-1234" html_class="form contact-form"]'); ?>
                
            </div>  
        </div>
        <div class="row all-right" >
            <div class="col d-flex justify-content-center align-items-center all-right-text" >
                2019 All Rights Reserved. Free website Templates
            </div>
        </div>

        
    </div>
    
        
    </div>
</section>
