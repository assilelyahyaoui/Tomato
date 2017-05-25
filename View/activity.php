<!DOCTYPE html>
<html>
<head>
  <?php //require_once( '../View/navBar.php'); ?>

<link rel="stylesheet" type="text/css" href="../view/activity.css">
<link href="../View/css/bootstrap.css" rel="stylesheet">
<!-- jquery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../View/css/jquery-ui.min.css">
<script src="../View/css/jquery-ui.min.js"></script>
<script type="text/javascript" src="../View/js/activity.js"></script>

<title>Activity synopsis</title>
</head>
<body>

<div class="container">

<div class="row">
    <h2>
        <?php echo $activity_name; ?>
    </h2>

    <div class="col-md-1">
        <br>
        <p class="calendar">
            15<em>March</em>
        </p>
    </div><!--./col-md-->

    <div class="col-md-6">
        <h3>
            <?php echo $activity_city; ?>
        </h3>
        <p>
            Sample of date display with sample layout. Note image changes color on mouse over and is responsive.
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque ultricies libero, in lacinia lacus mattis eget. Donec in libero quis ligula dictum lobortis. Donec hendrerit, enim ut pulvinar dapibus, tortor dui blandit nunc, non varius lorem mi at augue. Nam dictum tellus porta metus laoreet, fermentum facilisis nunc suscipit. Phasellus pharetra nibh at tortor congue porttitor.
        </p>
        <h4>
            Category
        </h4>
        <ul class="list-group text-center">
            <li class="list-group-item"><?php echo $activity_category; ?> </li>

        </ul>

        <div class="v-wrap" style="display:none">
             <div class="vote-options">
               <form action = "../Controller/activity-Vote-Controller.php" method="post">
                <div class="btn-group" role="group" aria-label="Enter Your Vote">
                    <button type="radio" name="Vote" class="btn btn-danger" value="1">1</button>
                    <button type="radio" name="Vote" class="btn btn-danger" value="2">2</button>
                    <button type="radio" name="Vote" class="btn btn-danger" value="3">3</button>
                    <button type="radio" name="Vote" class="btn btn-danger" value="4">4</button>
                    <button type="radio" name="Vote" class="btn btn-danger" value="5">5</button>
                    <button type="radio" name="Vote" class="btn btn-danger" value="6">6</button>
                    <button type="radio" name="Vote" class="btn btn-danger" value="7">7</button>
                    <button type="radio" name="Vote" class="btn btn-danger" value="8">8</button>
                    <button type="radio" name="Vote" class="btn btn-danger" value="9">9</button>
                    <button type="radio" name="Vote" class="btn btn-danger" value="10">10</button>
                </div>
            </div>

        </div>

        <p>  <div class="col-md-6 vote-content">
              <a class="btn btn-primary" class="votenow" href="javascription:void(0)" role="button">Vote »</a>
            </div>

        </p>

    </div><!--/. col-md -->
    <!--<div class="pr-wrap">
         <div class="pass-reset">
            <label>  Enter the email you signed up with</label>
            <input type="email" placeholder="Email" id="signInReset-email" />
            <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" id="signInReset-password"/>
        </div>
    </div>-->
    <div class="col-md-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2948.2793897849465!2d-71.0596334!3d42.3578847!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1394254234525" width="400" height="400" style="border:0"></iframe>
    </div><!--/span-->
</div><!--/row-->


<div class="row">
    <div class="col-md-12">
        <hr>
        <div >
            <a href=<?php echo $activity_url ;?> style="display: block;" target="_blank">
                <object type="text/html" data=<?php echo $activity_url ;?>  width="800px"  class="img-responsive img-rounded center-block grayscale" alt="" style="pointer-events: none;"/ >
            </a>
        </object>
        </div>
    </div><!--/span-->
</div><!--/row-->
<hr>
<!--Mr.M. logo -->
<!--
<p>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAADqUlEQVR4nO2aTYgURxTHGzREQ1hEw7KoGMiKIouZ7nqtQ+9013srunGmu+vVGhoRFMVAPi5CLiEHnZshl5wCibDgQchx8eDJi2cvggcJogiBRSWgAQ0q+NU5rCPrOP01LGSnu//wTjP86PebrqpXMIbjROtN0mYVy3Gi9YZJ2gTkuIplkjZrAbWAWkAtoBbwfz9ILaAWULyE5D8B+RTQnCtIHQTkrpDqn6oImDfa7Q+NvuxsHdgMnrpaagECw+sAX3/Q33wvu/Z1PgWpHpVWgO2GR5Ka78Xy9K+lFbDH/fKzLAEm6ROlFSBIbc98A1z/ZJkFHM0SABj+VloBgOrGoBPgbfP72pMC+d8SC+DYQr4AEH7U3/zSCaCv5eWMrABAjgWq2zbqH/YQ7wfS2kL9E0j1uAhjpAWsRNUCVoUAqZ4I5L+KFiC/fJ+nngnJr0ZKgEn6RNaxNnC3J/65nyVIHZyi6OPP0fdsj78HyX8IqW+tXgEyvENEa4cRQETrljdnIV8Y9D2T9IZVK8By/ZPDNN/LbtmRQqrXQvLfe/fObRoxAeqFRcFpIP4xT1muPjaoQfDU70IGh5MkrWIBxUqguj2ww5SpsFQCANWztEYrIIBjoPCTSgswSZuVFiAwCCstADz1XaUF2B6frbSApGmvMgJAqiuVFpA4DKUEnM7u0ggAyU8LNY/+DEh+WB4ByHHSpac/tgy/AVQv0lgjKSDPMNSY8b/Iw7LcoDFyAho0F2S/+nwqt8xRE2BR8G2mAE//kltAkw5ttYjPjUrBjO9nr3/9VR5Wkw5tzWLVqVOnTp06hmE0m+0xcMNtK8mcnJ4dn5yeHV9JJrjhtmazPbYisCmiCUCeB1Q3hVSv3wwQD0DyZbsVdIZhWm7QsKVeAOTFZUPJoi31guUGjWGYdivogOTLgPwAkOOlZ1U3AXl+imhiGKYhSB1Nu0kBcmxjeD6v7SiK1gByFyQ/T2QufdaNomhNHmaz2R6zMTyfOvFJfpjnbzXvxGr5qsB4ejEPE5C7BZjdnMyLuUfolq9yNe840UZAdb/QjC7V8TSm5QaN1F9+wJuQtRxAquPF7hHqvuNEG7OtevpM0QuKkOpuGvPNmi/EtKVeSGMKqe4WZYKnz2QKEBheKgxGjnc4wZZEqe9ueHlrMYm3wwm2DPOMAsNLmQJA8r1h4ElrbHJ6dnwYHiDHSUdkwT1q+dK6VwvISr0Eqr4JVv4YNIyKD0K9VHoU7qXSl6H+lPU6/B+3ehOjykS6TAAAAABJRU5ErkJggg==" alt="by Mr.M." title="by Mr. M.">
-->


<div>

 </div>
<hr>
</div><!--./container -->


</body>
</html>
