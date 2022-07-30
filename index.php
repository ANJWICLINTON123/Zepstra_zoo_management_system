<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"  href="index.css">
    <script src="Homepage.js"></script>
</head>
<body>
  
   <!-- ########################## MAIN MANU ################################### -->
   <?php include 'Header.php';?>

<!-- ########################## Welcome image after main manu ################################### -->
<div class="background_image">
  <span class="text_on_image">
    <h1>Welcome To SAN DIEGO Zoo Site</h1>
    <p>Our Zoo is found in san diego and we have variety of<br>  activitiesfor 
    tourist. Our tickets are always avialable <br> and very affortable to buy.</p>
  </span>
</div>

<div class="body_homepage">
  <div class="row">
    <div class="col-md-6">
      <H1>Welcome To <span class="green">SAN DIEGO Zoo Site</span></H1>
      <p>A zoo (short for zoological garden; also called an animal park or menagerie) is a facility 
        in which animals are housed within enclosures, cared for, displayed to the public,
         and in some cases bred for conservation purposes.
        The term zoological garden refers to zoology,
         the study of animals. The term is derived from the Greek zoon, 
         'animal', and the suffix , -logia, 'study of'. The abbreviation 
         zoo was first used of the London Zoological Gardens, 
         which was opened for scientific study in 1828 and to the public 
         in 1847. In the United States alone,
         zoos are visited by over 181 million people annually.</p>
         <button class="gallery_button">view Gallery</button>
    </div>
    <div class="col-md-3">
      <div class="col3image">
        <img class="zooimage" src="image/zoo1.jpg" alt="animal"><br><br>
        <b>American antelope</b>
        <p class="animal_description">
          Pronghorns (aka antelope, speed goat, and Antilocapra americana) 
          are the only living species in the family Antilocapridae
           and found solely in North America</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="col3image">
        <img class="zooimage" src="image/zoo2.jpg" alt="animal"><br><br>
        <b>Bili The tiger</b>
        <p class="animal_description">
          tiger, (Panthera tigris), largest member of the cat family (Felidae),
           rivaled only by the lion (Panthera leo) in strength and ferocit</p>
      </div>
    </div>
  </div>
</div>
<div class="container_sponsors">
  <h1 class="sponsors_header">Our sponsores</h1>
  <div class="row">
    <div class="col-md-4">
      <img class="sponsors_image" src="image/sponsor1-removebg-preview.png" alt="">
      <div class="divspons">
         <h3>Marry Group</h3>
         <p>Located in marryland and provide us with meat for the lions</p>
      </div>
    </div>
    <div class="col-md-4">
      <img class="sponsors_image" src="image/sponsor2-removebg-preview.png" alt="">
      <div class="divspons">
         <h3>Marry Group</h3>
         <p>Located in marryland and provide us with meat for the lions</p>
      </div>
    </div>
    <div class="col-md-4">
      <img class="sponsors_image" src="image/sponsor3.png" alt="">
      <div class="divspons">
         <h3>Marry Group</h3>
         <p>Located in marryland and provide us with meat for the lions</p>
      </div>
    </div>
  </div>
</div>

<div class="Myna_animal">
  <div class="row">
    <div class="col-2"></div>
    <div class="col-md-4">
      <h3>This Week's features Animals<i class="fa fa-hand-o-up" style="font-size:24px;color:red"></i> </h3>
      <img class="mynabird" src="image/myna.jpg" alt="myna bird">
  </div>
  <div class="col-md-4 mynadetails">
    <h2>Myna Bird</h2>
    <p>species Name: <b>Common myna</b></p>
    <p>Date of birth: <b>2011-03-23</b></p>
    <p>Gender: <b>Male</b></p>
    <p>Description <b class="description">Mynah birds are known for their excessive chatter. 
      They are the most capable birds of mimicking noises and voices. Sometimes, 
      they also develop extensive 
      vocabularies and often sound more like humans than other talking birds.</b></p>
  </div>
</div>

<div class="zoo_map">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-md-4">
       <h1>sandiego zoo map</h1>
    <img class="map" src="image/sandiego_zoo_map.webp" alt="zoo_map">
  </div>
  <div class="col-sm-1"></div>
  <div class="col-md-6">
    <h1>Visit to the zoo</h1>
    <img class="zoopic" src="image/san-diego-zoo-tips.jpg" alt="">
  </div>
  </div>
</div>

<!-- #################### footer ###################### -->
<?php include 'Footer.php';?>
</body>
</html>