 <!-- Carousel Start -->
 <div class="container-fluid p-0 mb-5">
 
     <div class="owl-carousel header-carousel position-relative">
     <?php
     foreach ($result as $row) {
    ?>
         <div class="owl-carousel-item position-relative">
             <img class="img-fluid" src="<?= base_url() ?>assets/img/notice-crousal.png" alt="">
             <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                 <div class="container">
                     <div class="row justify-content-start">
                         <div class="col-10 col-lg-8">
                             
                                 <h1 class="display-2 text-white animated slideInDown mb-4"><?= $row->NoticeTitle ?></h1>
                                 <p class="fs-5 fw-medium text-white mb-4 pb-2"><?= $row->NoticeMessage ?></p>

                             
                             <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a>
                             <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div> 
         <?php
                                };
                                ?>       
     </div>
 </div>
 <!-- Carousel End -->