<?php
    $title = 'About us';
    $heroImage = 'images/img_4.jpg';

    $authors = require 'data.php';

//    echo '<pre>';
//    print_r($authors);
//    echo '</pre>';

require 'components/header.php'; ?>

<?php require 'components/hero-image-section.php'; ?>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-md-2">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 mr-auto order-md-1">
            <h2>We Love To Explore</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea voluptate odit corrupti vitae cupiditate explicabo, soluta quibusdam necessitatibus, provident reprehenderit, dolorem saepe non eligendi possimus autem repellendus nesciunt, est deleniti libero recusandae officiis. Voluptatibus quisquam voluptatum expedita recusandae architecto quibusdam.</p>
            <ul class="ul-check list-unstyled success">
              <li>Onsectetur adipisicing elit</li>
              <li>Dolorem saepe non eligendi possimus</li>
              <li>Voluptate odit corrupti vitae</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-5 text-center">
            <h2>Meet The Team</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus commodi blanditiis, soluta magnam atque laborum ex qui recusandae</p>
          </div>
        </div>
        <div class="row">

            <?php foreach($authors as $author): ?>
                <div class="col-md-6 col-lg-4 mb-5 text-center">
                    <img src="<?=$author['avatar']?>" alt="<?=$author['firstName']?> <?=$author['lastName']?>" class="img-fluid w-50 rounded-circle mb-4">
                    <h2 class="mb-3 h5"><?=$author['firstName']?> <?=$author['lastName']?></h2>
                    <p><?=$author['about']?></p>

                    <p class="mt-5">
                      <a href="#" class="p-3"><span class="icon-facebook"></span></a>
                      <a href="#" class="p-3"><span class="icon-instagram"></span></a>
                      <a href="#" class="p-3"><span class="icon-twitter"></span></a>
                    </p>
                </div>
            <?php endforeach; ?>

        </div>
      </div>
    </div>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto">
            <h2>Learn From Us</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea voluptate odit corrupti vitae cupiditate explicabo, soluta quibusdam necessitatibus, provident reprehenderit, dolorem saepe non eligendi possimus autem repellendus nesciunt, est deleniti libero recusandae officiis. Voluptatibus quisquam voluptatum expedita recusandae architecto quibusdam.</p>
            
            <ul class="ul-check list-unstyled success">
              <li>Onsectetur adipisicing elit</li>
              <li>Dolorem saepe non eligendi possimus</li>
              <li>Voluptate odit corrupti vitae</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


<?php require 'components/subscribe.php'; ?>

<?php require 'components/footer.php'; ?>