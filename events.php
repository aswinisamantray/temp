<!doctype html>
<html lang="en">

<head>
    <title>Events</title>
    <?php include 'components/header.php'; ?>
</head>

<!-- <style>
    body { 
  background-image: url('http://localhost:8080/static/images/new_logo.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: 32rem;
  background-blend-mode: normal;
  /* width:100rem;  */
 }
</style> -->
<body>
    <?php include 'components/navbar.php'; ?>


    <!-- <h2 class="events_heading text-center display-4">UPCOMING EVENTS</h2> -->

    <!-- events -->
    <div class="page-container">
        <div class="events-container module" >
            <h2 class="events_heading text-center display-4" style="color:#DE5935;">Upcoming Events</h2>
            <div class="subtitle my-3" style="font-size: larger;">NSS</div>
            <?php
            $upcoming_events = array(
                array(
                    "name" => "SEJBAHAR SURVEY",
                    "date" => "SAT, 4th or 5th January 2020",
                    "description" => "We will be conducting sejbahar's survey to get an idea about the problems in this village and also will
                    try to solve them."
                ),
                array(
                    "name" => "TINKERING LAB VISIT",
                    "date" => "SAT, 11th or 12th January 2020",
                    "description" => "We will be visiting schools in bhilai having tinkering lab and will motivate the students for new projects."
                ),
                array(
                    "name" => "SAFETY EVENTS",
                    "date" => "SAT, 18th or 19th January 2020",
                    "description" => "It includes fire fighting and first-aid training."
                ),
                array(
                    "name" => "PLANTATION AND WATERING",
                    "date" => "Regular Activity",
                    "description" => "Will plant on every birthday."
                ),
                array(
                    "name" => "TEACHING CELL",
                    "date" => "Regular Activity",
                    "description" => "To teach childrens of Sejbahar."
                ),
                array(
                    "name" => "MEDICAL CHECKUP IN SEJBAHAR",
                    "date" => "After 1st Tierce",
                    "description" => "In collaboration with NSS AIIMS Raipur, this camp will be organised in Sejabahar."
                ),
                array(
                    "name" => "BLOOD DONATION",
                    "date" => "After 1st Tierce",
                    "description" => "Self-explanatory."
                ),
                array(
                    "name" => "SELF DEFENCE TRAINING",
                    "date" => "Regular Activity",
                    "description" => "Self-explanatory."
                ),
                array(
                    "name" => "TRAFFIC MANAGEMENT.",
                    "date" => "Regular Activity",
                    "description" => "Will help officers to maintain the traffic."
                ),
                array(
                    "name" => "OTHER ACTIVITIES.",
                    "date" => "Will decide that later.",
                    "description" => "It includes cleanliness drivess, poster making and may be paper bag making."
                ),
                // Fill this please
            )
            ?>
            <!-- <ul class="events-list row d-flex justify-content-around"> -->

                
         <!-- </div> -->
 <div class="row my-2" style="display:flex; column-gap:9rem; flex-wrap: wrap; position:relative;">
 <!-- width:1000px; -->
     <?php foreach ($upcoming_events as $event) : ?>
        <div class="col-md-4">
                <div class="card my-2" style="width:15rem; background:#F7F7F7; filter: drop-shadow(2px 2px 6px gray);">
                <!-- #e6e6e6 -->
         <span class="position-absolute top-0 translate-middle badge rounded-pill bg-success" style="left:90%; zIndex:1; word-wrap: break-word;">
         <?= $event['date']; ?>
            </span>
        <img src="http://localhost:8080/static/images/new_logo.png" class="card-img-top" alt="..." style="width:15rem;"/>
        <div class="card-body" style="background:#F7F7F7;">
          <h5 class="card-title">
          <?= $event['name']; ?>
          </h5>
          <p class="card-text" style="font-family:cursive;"><?= $event['description']; ?></p>
        </div>
    </div>

  </div>
 <?php endforeach; ?>
 </div>
</div>
</div>
<!-- </ul> -->

    <!-- footer -->
    <?php include 'components/footer.php'; ?>


    <!-- jQuery-->
    <?php include 'components/scripts.php'; ?>

</body>

</html>