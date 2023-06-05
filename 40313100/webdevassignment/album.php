<?php 
session_start();
include ("navbar/trial.php");
include ("function/functionalbum.php");
include ("function/functionalbumownedfav.php");
include("function/commentsfunction.php");
include("function/insertreviews.php");
$albid =  $_GET['id'];           
$track= $_GET['track'];
$userid = $_SESSION["userid"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="style.css">

    <title>Top 500 Albums</title>
</head>

<body>
<?php
             $privledge=$_SESSION["adminpriv"];
    
             $nav= setnav($privledge);
             echo $nav;
         
            ?>
    <div class="container">
    <h1>Album</h1>
  <div class="row">
    <div class="col">
    <?php
                
                $album=showalbum ($albid);                
            
                echo $album;
                
                ?>
    </div>
    <div class="col">
    <?php    
             echo'
            <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
            <div id="player"></div>
              <script>
                  // 2. This code loads the IFrame Player API code asynchronously.
                  var tag = document.createElement("script");
            
                  tag.src = "https://www.youtube.com/iframe_api";
                  var firstScriptTag = document.getElementsByTagName("script")[0];
                  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            
                  // 3. This function creates an <iframe> (and YouTube player)
                  //    after the API code downloads.
                  var player;
                  function onYouTubeIframeAPIReady() {
                    player = new YT.Player("player", {
                      height: "390",
                      width: "640",
                      videoId: "'.$track.'",
                      playerVars: {
                        "playsinline": 1
                      },
                      events: {
                        "onReady": onPlayerReady,
                        "onStateChange": onPlayerStateChange
                      }
                    });
                  }
            
                  // 4. The API will call this function when the video player is ready.
                  function onPlayerReady(event) {
                    event.target.playVideo();
                  }
            
                  // 5. The API calls this function when the players state changes.
                  //    The function indicates that when playing a video (state=1),
                  //    the player should play for six seconds and then stop.
                  var done = false;
                  function onPlayerStateChange(event) {
                    if (event.data == YT.PlayerState.PLAYING && !done) {
                      setTimeout(stopVideo, 0);
                      done = true;
                    }
                  }
                  function stopVideo() {
                    player.stopVideo();
                  }
                </script>';
?>
    </div>
  </div>
  <div class="row">
    <div class="col">
     
    </div>
    <div class="col">
    <?php
            if($_SESSION["userid"]){
            if (isset($_POST['owned'])){
              albumsowned($userid,$albid);
              
            }}else {header("Location: login.php");}
            ?>
            <form method="POST">
            <button class="btn btn-primary" name="owned" type="submit">Album Owned</button></form>
            <?php
            if($_SESSION["userid"]){
            if (isset($_POST['fav'])){
              albumsfav($userid,$albid);
              
            }}else {header("Location: login.php");}
            ?>
            <form method="POST">
            <button class="btn btn-primary" name="fav" type="submit">Fav album</button></form>
            <?php
            if($_SESSION["userid"]){
              if (isset($_POST['review'])){
            review($albid,$userid);
              }}
           echo'
              
              <form class="row g-3" action="function/insertreviews.php?ud='.$userid.'&ad='.$albid.'" method="POST" >
              <div class="form-group" name = "comment" style="width: 18rem;">
             <label for="comment box"></label>
             <textarea class="form-control" id="Comment box" rows="5" name="comment"></textarea>
         
         <label for="Range" class="form-label">Review & Rating</label>
                 <input type="range" class="form-range" min="0" max="5" id="myRange" name="rating">
             <p>Rating:<span id="value"  name="rating"> </span></p>
             <button type="button" class="btn btn-primary btn-sm" name= "review">Submit</button> </div>  
             </form>';
            
          ?>
    <div class="col">
      
    </div>
  </div>
</div>
       



</body>
<script src="jscript/main.js"></script>
</html>