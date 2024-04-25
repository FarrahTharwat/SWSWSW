
<!DOCTYPE html>
<html lang="en">

<?php
include_once '../Controller/ManageVideo.php';
include_once '../Controller/ManageHistory.php';
?>

<style>
.form-container {
  display: flex;
  flex-direction: column;
}

.form-container textarea {
  padding: 10px;
  font-size: 16px;
  border: 2px solid #ccc;
  border-radius: 5px;
  min-height: 100px;
  width: 80%; 
  height: 80px;
  display: inline-block; 
  vertical-align: top; 
}

.form-container input[type="submit"] {
  margin-top: 10px;
  padding: 10px 20px;
  font-size: 16px;
  background-color: #ff6161;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  display: inline-block; 
  vertical-align: top; 
}

.form-container input[type="submit"]:hover {
  background-color: #2c3e50;
}

.form-container input[type="submit"]:active {
  background-color: #ff6161;
  transform: translateY(2px);
}

<<<<<<< Updated upstream
=======
    

>>>>>>> Stashed changes
</style>

<?php
session_start();
<<<<<<< Updated upstream
=======
if(isset($_SESSION['userID'])){
    $watcher = $_SESSION['userID'];
}
else{
    $watcher = 1;
}
>>>>>>> Stashed changes

?>

<style>
.form-container {
  display: flex;
  flex-direction: column;
}

.form-container textarea {
  padding: 10px;
  font-size: 16px;
  border: 2px solid #ccc;
  border-radius: 5px;
  min-height: 100px;
  width: 80%; 
  height: 80px;
  display: inline-block; 
  vertical-align: top; 
}

.form-container input[type="submit"] {
  margin-top: 10px;
  padding: 10px 20px;
  font-size: 16px;
  background-color: #ff6161;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
  display: inline-block; 
  vertical-align: top; 
}

.form-container input[type="submit"]:hover {
  background-color: #2c3e50;
}

.form-container input[type="submit"]:active {
  background-color: #ff6161;
  transform: translateY(2px);
}

</style>
<?php

include_once '../Controller/ManageVideo.php';

?>

<?php

require_once '../Controller/Database.php';
// Retrieve the video ID and user ID from the URL query parameters
$videoId = $_GET['video_id'];
<<<<<<< Updated upstream
$userId = $_GET['user_id'];
=======


$theHistory = new ManageHistory();
$theHistory->updateH($videoId, $watcher);

>>>>>>> Stashed changes
$video = ManageVideo::getInstance();
// $VideoAttribute=$video->RetriveForVideoPage($videoId,$userId);
//$title= $VideoAttribute->getTitle();
//$title= $VideoAttribute->getTitle();
//$description=$VideoAttribute->getDescription();
//$date=$VideoAttribute->getDate();
//$view=$VideoAttribute->getViews();
//$category=$VideoAttribute->getCategory();
<<<<<<< Updated upstream
//$video1=$VideoAttribute->getUrl();
if(isset($_POST['addcomment']))
{
   $db = new Database ;
   $fields["UserID"] = $userId ;
   $username = $db->select("Select * from user where ID = $userId");
   foreach($username as $val){
      $fields["to_channel_name"] = $val['Name'] ;
   }  

=======
$userId= $VideoAttribute->getUserID();
$video1 = $VideoAttribute->getUrl();
$userId =$VideoAttribute->getUserID();
$video1 = pathinfo($video1, PATHINFO_FILENAME);
$video1 = "../View/Videos/" . $video1 . "/" . $video1 . "_360.mp4";


if(isset($_POST['addcomment']))
{
   $db = new Database ;

   $comm['Content'] = $_POST['comment_content'];
   
   $db->insert_2("comment",$comm);
   
   //    SELECT * FROM comment ORDER BY ID DESC LIMIT 1;
   
   $comment = $db->select("Select * from comment ORDER BY ID DESC LIMIT 1");
   foreach($comment as $val4){
       $usercomm['CommentID'] = $val4['ID'] ;
    } 
    
    $usercomm['UserID'] = $_SESSION['userID'];
    $usercomm['VideoID'] = $videoId;
    
    $db->insert_2("usercomment",$usercomm);
    

   $fields["UserID"] = $userId ;
   $username = $db->select("Select * from user where ID = $userId");
   foreach($username as $val){
      $fields["to_channel_name"] = $val['Name'] ;
   }  

>>>>>>> Stashed changes
   $fields["from_channel_id"] = $_SESSION['userID'] ;
   $fields["from_channel_name"] = $_SESSION['userName'] ;
   $fields["video_id"] = $videoId ;
   // $fields["Content"] ;
   // $fields["Seen"] ;
   // $fields["CreatedAt"] ;
   $_SESSION["videoID"] = $videoId ;
   $_SESSION["channelID"] = $userId ;
   
   $svideo = $db->select("Select * from video where ID = $videoId");
   foreach($svideo as $vall){
      $fields["video_name"] = $vall['Title'] ;
   }
   
   $fields["n_type"] = 2 ;

   // echo $fields["to_channel_id"];
   // echo $fields["to_channel_name"];
   // echo $fields["from_channel_id"];
   // echo $fields["from_channel_name"];
   // echo $fields["video_id"];
   // echo $fields["Content"];
   // echo $fields["Seen"];
   // echo $fields["CreatedAt"];
   // echo $fields["video_name"];
   // echo $fields["n_type"];
   
   // $dbb = new Database ;
   $db->insert_2("notification",$fields);
   // $dbb->insert("INSERT INTO `video_sharing`.`notification` (`to_channel_id`, `from_channel_id`, `from_channel_name`, `video_id`, `video_name`, `n_type`) VALUES ('1', '5', 'Kiroloss', '1', 'PHP', '2')");

}
?>

<?php
// Retrieve the video ID and user ID from the URL query parameters
$videoId = $_GET['video_id'];
<<<<<<< Updated upstream
$userId = $_GET['user_id'];
=======


$theHistory = new ManageHistory();
$theHistory->updateH($videoId, $watcher);

>>>>>>> Stashed changes
$video = ManageVideo::getInstance();
$VideoAttribute = $video->RetriveForVideoPage($videoId, $userId);
//$title= $VideoAttribute->getTitle();
//$title= $VideoAttribute->getTitle();
//$description=$VideoAttribute->getDescription();
//$date=$VideoAttribute->getDate();
//$view=$VideoAttribute->getViews();
//$category=$VideoAttribute->getCategory();
$userId= $VideoAttribute->getUserID();
$video1 = $VideoAttribute->getUrl();
$video1 = pathinfo($video1, PATHINFO_FILENAME);
$video1 = "../View/Videos/" . $video1 . "/" . $video1 . "_360.mp4";
<<<<<<< Updated upstream
echo $video1;
$h = new ManageHistory();
$h->updateH($videoId,$userId);
=======


if(isset($_POST['addcomment']))
{
   $db = new Database ;

   $comm['Content'] = $_POST['comment_content'];
   
   $db->insert_2("comment",$comm);
   
   //    SELECT * FROM comment ORDER BY ID DESC LIMIT 1;
   
   $comment = $db->select("Select * from comment ORDER BY ID DESC LIMIT 1");
   foreach($comment as $val4){
       $usercomm['CommentID'] = $val4['ID'] ;
    } 
    
    $usercomm['UserID'] = $_SESSION['userID'];
    $usercomm['VideoID'] = $videoId;
    
    $db->insert_2("usercomment",$usercomm);
    

   $fields["UserID"] = $userId ;
   $username = $db->select("Select * from user where ID = $userId");
   foreach($username as $val){
      $fields["to_channel_name"] = $val['Name'] ;
   }  

   $fields["from_channel_id"] = $_SESSION['userID'] ;
   $fields["from_channel_name"] = $_SESSION['userName'] ;
   $fields["video_id"] = $videoId ;
   // $fields["Content"] ;
   // $fields["Seen"] ;
   // $fields["CreatedAt"] ;
   $_SESSION["videoID"] = $videoId ;
   $_SESSION["channelID"] = $userId ;
   
   $svideo = $db->select("Select * from video where ID = $videoId");
   foreach($svideo as $vall){
      $fields["video_name"] = $vall['Title'] ;
   }
   
   $fields["n_type"] = 2 ;

   // echo $fields["to_channel_id"];
   // echo $fields["to_channel_name"];
   // echo $fields["from_channel_id"];
   // echo $fields["from_channel_name"];
   // echo $fields["video_id"];
   // echo $fields["Content"];
   // echo $fields["Seen"];
   // echo $fields["CreatedAt"];
   // echo $fields["video_name"];
   // echo $fields["n_type"];
   
   // $dbb = new Database ;
   $db->insert_2("notification",$fields);
   // $dbb->insert("INSERT INTO `video_sharing`.`notification` (`to_channel_id`, `from_channel_id`, `from_channel_name`, `video_id`, `video_name`, `n_type`) VALUES ('1', '5', 'Kiroloss', '1', 'PHP', '2')");

}
>>>>>>> Stashed changes
?>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Askbootstrap">
   <meta name="author" content="Askbootstrap">
   <title>VIDOE - Video Streaming Website HTML Template</title>
   <!-- Favicon Icon -->
   <link rel="icon" type="image/png" href="img/favicon.png">
   <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <!-- Custom styles for this template-->
   <link href="css/osahan.css" rel="stylesheet">
   <!-- Owl Carousel -->
   <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
   <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
</head>

<body id="page-top">
   <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
      &nbsp;&nbsp;
      <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
      </button> &nbsp;&nbsp;
      <a class="navbar-brand mr-1" href="index.html"><img class="img-fluid" alt="" src="img/logo.png"></a>
      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
         <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <div class="input-group-append">
               <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i>
               </button>
            </div>
         </div>
<<<<<<< Updated upstream
      </form>
      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
         <li class="nav-item mx-1">
            <a class="nav-link" href="upload.html">
               <i class="fas fa-plus-circle fa-fw"></i>
               Upload Video
            </a>
         </li>
         <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bell fa-fw"></i>
               <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
               <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
               <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
            </div>
         </li>
         <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-envelope fa-fw"></i>
               <span class="badge badge-success">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
               <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
               <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
            </div>
         </li>
         <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
            <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img alt="Avatar" src="img/user.png">
               Osahan
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
               <a class="dropdown-item" href="account.html"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My
                  Account</a>
               <a class="dropdown-item" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp;
                  Subscriptions</a>
               <a class="dropdown-item" href="settings.html"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i
                     class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
            </div>
         </li>
      </ul>
   </nav>
   <div id="wrapper">
      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
         <li class="nav-item active">
            <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-home"></i>
               <span>Home</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="channels.html">
               <i class="fas fa-fw fa-users"></i>
               <span>Channels</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="single-channel.html">
               <i class="fas fa-fw fa-user-alt"></i>
               <span>Single Channel</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="video-page.html">
               <i class="fas fa-fw fa-video"></i>
               <span>Video Page</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="upload-video.html">
               <i class="fas fa-fw fa-cloud-upload-alt"></i>
               <span>Upload Video</span>
            </a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
               <i class="fas fa-fw fa-folder"></i>
               <span>Pages</span>
            </a>
            <div class="dropdown-menu">
               <h6 class="dropdown-header">Login Screens:</h6>
               <a class="dropdown-item" href="login.html">Login</a>
               <a class="dropdown-item" href="register.html">Register</a>
               <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
               <div class="dropdown-divider"></div>
               <h6 class="dropdown-header">Other Pages:</h6>
               <a class="dropdown-item" href="404.html">404 Page</a>
               <a class="dropdown-item" href="blank.html">Blank Page</a>
            </div>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="history-page.html">
               <i class="fas fa-fw fa-history"></i>
               <span>History Page</span>
            </a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Categories</span>
            </a>
            <div class="dropdown-menu">
               <a class="dropdown-item" href="categories.html">Movie</a>
               <a class="dropdown-item" href="categories.html">Music</a>
               <a class="dropdown-item" href="categories.html">Television</a>
            </div>
         </li>
         <li class="nav-item channel-sidebar-list">
            <h6>SUBSCRIPTIONS</h6>
            <ul>
               <li>
                  <a href="subscriptions.html">
                     <img class="img-fluid" alt="" src="img/s1.png"> Your Life
                  </a>
               </li>
               <li>
                  <a href="subscriptions.html">
                     <img class="img-fluid" alt="" src="img/s2.png"> Unboxing <span class="badge badge-warning">2</span>
                  </a>
               </li>
               <li>
                  <a href="subscriptions.html">
                     <img class="img-fluid" alt="" src="img/s3.png"> Product / Service
                  </a>
               </li>
            </ul>
         </li>
      </ul>
      <div id="content-wrapper">
         <div class="container-fluid pb-0">
            <div class="video-block section-padding">
=======

         <div class="form-container">
              <form method="post">
               <textarea name="comment_content"></textarea>
                 <input type="submit" name="addcomment" value="Add Comment">
              </form>
         </div>

         <div class="col-md-4">
            <div class="single-video-right">
>>>>>>> Stashed changes
               <div class="row">
                  <div class="col-md-8">
                     <div class="single-video-left">
                        <div class="video-player">
                           <video src="img/v1.mp4" class="video"></video>

                           <div class="player-controls">
                              <div class="video-progress">
                                 <div class="video-progress-filled"></div>
                              </div>

                              <div class="inner-player-controls">
                                 <button class="play-button" title="Play">►</button>

                                 <button class="mute control-button">
                                    <div class="mute muted slash"></div>
                                    <img src="img/volume.png"></img>
                                 </button>
                                 <input type="range" class="volume" min="0" max="1" step="0.01" value="1" />

                                 <div class="timee">
                                    <span class="current">0:00</span> / <span class="duration">0:00</span>
                                 </div>

                                 <button id="fullscreen-button" class="control-button" onclick="toggleFullscreen()"
                                    style="margin-left:215px">
                                    <img src="img/expand.png" style="background-color: transparent;"></img>
                                 </button>

                                 <button class="control-button">
                                    <img src="img/settings.png" style="margin-top:5px ;">
                                    <select class="control-button" style="color: white;">
                                       <option value="auto" style="color: black;">auto</option>
                                       <option value="720p" style="color: black;">720p</option>
                                       <option value="480p" style="color: black;">480p</option>
                                       <option value="360p" style="color: black;">360p</option>
                                       </img>
                                    </select>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <a href="#" title="Play video" class="play"></a>
                        <span class="headline"></span>
                        <a href="https://twitter.com/stevenfabre" title="Follow me on twitter"
                           class="social">@stevenfabre</a>
                        <a href="http://stevenfabre.com" title="Read my blog" class="social">stevenfabre.com</a>
                     </div>
                     <div class="single-video-title boxx mb-3;" style="margin-bottom:-10%;">
                        <h2><a href="#">Contrary to popular belief, Lorem Ipsum (2019) is not.</a></h2>
                        <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>

                        <div class="wrrapper">
                           <div class="like">
                              <i onclick="like()" id="li" id="wi" class="fas fa-thumbs-up fa-2xl"></i>
                           </div>
                           <p style="color: white; font-size: 27px; margin-top: -5px; ">|</p>
                           <div class="dislike">
                              <i onclick="dislike()" id="di" class="fas fa-thumbs-down"></i>
                           </div>
                        </div>
<<<<<<< Updated upstream
                        <div class="wrraapper" style="margin-bottom: 10%; margin-left: 23%; margin-top:-5%;">
                           <p style="font-size: large; color: white; font-weight: 400;">+Save</p>
                           </select>
                        </div>
                     </div>
                     <div class="single-video-title boxx mb-3">
                        <div class="single-video-author boxx mb-3" style="margin-bottom:-50%;">
                           <div class="float-right"><button class="btn btn-danger" type="button">Subscribe
                                 <strong>1.4M</strong></button> <button class="btn btn btn-outline-danger"
                                 type="button"><i class="fas fa-bell"></i></button></div>
                           <img class="img-fluid" src="img/s4.png" alt="">
                           <p><a href="#"><strong>Osahan Channel</strong></a> <span title="" data-placement="top"
                                 data-toggle="tooltip" data-original-title="Verified"><i
                                    class="fas fa-check-circle text-success"></i></span></p>
                           <small>Published on Aug 10, 2018</small>
=======
                        <div class="single-video-title boxx mb-3">
                            <div class="single-video-author boxx mb-3" style="margin-bottom:-50%;">
                                <div class="float-right">
                                    <button onclick="triggerSubscribeFunction('<?= $watcher;?>','<?= $userId?>')" id="subscribeBtn" class="btn btn-danger" type="button"><span>Subscribe </span><strong>1.4M</strong></button>
                                    <button class="btn btn btn-outline-danger" type="button" onclick="triggerBellFunction('<?= $watcher;?>','<?= $userId?>')">
                                        <i class="fas fa-bell"></i>
                                    </button>
                                </div>

                                <?php
                                    $select = $db->select_where('user','ID',$userId);
                                    foreach($select as $see_noti){
                                        $ownername = $see_noti['Name'];
                                    }
                                ?>

                                <img class="img-fluid" src="img/acc.png" alt="">
                                <p><a href="#"><strong> <?php echo $ownername ?> </strong></a> <span title="" data-placement="top"
                                                                                         data-toggle="tooltip" data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></span></p>
                                <small>Published on Aug <?php echo $VideoAttribute->getDate(); ?> </small>
                            </div>
                            <div class="single-video-info-content box" style="box-sizing: 20%;">
                                <h6>Category :</h6>
                                <p><?php echo $VideoAttribute->getCategory(); ?> </p>
                                <h6>Description :</h6>
                                <p><?php echo $VideoAttribute->getDescription(); ?>  </p>

                            </div>
                            
                        </div>
                                      
                        <!-- Add Comment -->
                        <div class="form-container">
                        <form method="post">
                        <textarea name="comment_content"></textarea>
                            <input type="submit" name="addcomment" value="Add Comment">
                        </form>
                        </div>

<<<<<<< Updated upstream
=======
                        <br>

>>>>>>> Stashed changes
                        <div>
                        <!-- Retreive Comments -->
                        <?php 
                            $comment = $db->select("Select * from usercomment where VideoID = $videoId");
<<<<<<< Updated upstream
=======
                            ?>
                            <div class="single-video-info-content box" style="box-sizing: 20%;">
                                <h6>Comments :</h6>
                                <p><?php
>>>>>>> Stashed changes
                            foreach($comment as $val){
                                $commentid = $val['CommentID'];
                                $comment2 = $db->select("Select * from comment where ID = $commentid");
                                foreach($comment2 as $val2){
<<<<<<< Updated upstream
                                    echo $val2['Content'];
                                }
                            }
                        ?>
=======
                                    ?> <div class="my-dropdown-item2">
                                            <?php echo $val2['Content'];
                                    ?> </div> <?php
                                }
                            }
                        ?> </p>

                            </div>
                            
>>>>>>> Stashed changes

                        </div>

                    </div>


                    <div class="col-md-4">
                        <div class="single-video-right">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="main-title">
                                        <div class="btn-group float-right right-action">
                                            <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                    Rated</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                    Viewed</a>
                                                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                    &nbsp;
                                                    Close</a>
                                            </div>
                                        </div>
                                        <h6>Up Next</h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="video-cardd video-card-list">
                                        <div class="deo-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                        Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                        Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                        &nbsp;
                                                        Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Here are many variati of passages of Lorem</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                                             data-original-title="Verified"><i
                                                            class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                        Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                        Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                        &nbsp;
                                                        Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                                             data-original-title="Verified"><i
                                                            class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                        Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                        Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                        &nbsp;
                                                        Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Culpa qui officia deserunt mollit anim</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                                             data-original-title="Verified"><i
                                                            class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                        Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                        Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                        &nbsp;
                                                        Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Deserunt mollit anim id est laborum.</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                                             data-original-title="Verified"><i
                                                            class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                        Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                        Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                        &nbsp;
                                                        Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Exercitation ullamco laboris nisi ut.</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                                             data-original-title="Verified"><i
                                                            class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                        Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                        Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                        &nbsp;
                                                        Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">There are many variations of passages of Lorem</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                                             data-original-title="Verified"><i
                                                            class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                    <div class="video-card video-card-list">
                                        <div class="video-card-image">
                                            <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                            <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                            <div class="time">3:50</div>
                                        </div>
                                        <div class="video-card-body">
                                            <div class="btn-group float-right right-action">
                                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                                   aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                                        Rated</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                                        Viewed</a>
                                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                                        &nbsp;
                                                        Close</a>
                                                </div>
                                            </div>
                                            <div class="video-title">
                                                <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                            </div>
                                            <div class="video-page text-success">
                                                Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                                             data-original-title="Verified"><i
                                                            class="fas fa-check-circle text-success"></i></a>
                                            </div>
                                            <div class="video-view">
                                                1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
>>>>>>> Stashed changes
                        </div>
                        <div class="single-video-info-content box" style="box-sizing: 20%;">
                           <h6>Cast:</h6>
                           <p>Nathan Drake , Victor Sullivan , Sam Drake , Elena Fisher</p>
                           <h6>Category :</h6>
                           <p>Gaming , PS4 Exclusive , Gameplay , 1080p</p>
                           <h6>About :</h6>
                           <p>It is a long established fact that a reader will be distracted by the readable content of
                              a page
                              when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                              normal
                              distribution of letters, as opposed to using 'Content here, content here', making it look
                              like
                              readable English. Many desktop publishing packages and web page editors now use Lorem
                              Ipsum as
                              their default model text, and a search for 'lorem ipsum' will uncover many web sites still
                              in
                              their infancy. Various versions have evolved overVarious versions have evolved over the
                              years,
                              sometimes </p>
                           <h6>Tags :</h6>
                           <p class="tags mb-0">
                              <span><a href="#">Uncharted 4</a></span>
                              <span><a href="#">Playstation 4</a></span>
                              <span><a href="#">Gameplay</a></span>
                              <span><a href="#">1080P</a></span>
                              <span><a href="#">ps4Share</a></span>
                              <span><a href="#">+ 6</a></span>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="single-video-right">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="main-title">
                                 <div class="btn-group float-right right-action">
                                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                       Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                          Rated</a>
                                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                          Viewed</a>
                                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                          &nbsp;
                                          Close</a>
                                    </div>
                                 </div>
                                 <h6>Up Next</h6>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="video-cardd video-card-list">
                                 <div class="deo-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                                    <div class="time">3:50</div>
                                 </div>
                                 <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                             Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                             Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                             &nbsp;
                                             Close</a>
                                       </div>
                                    </div>
                                    <div class="video-title">
                                       <a href="#">Here are many variati of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                       Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                          data-original-title="Verified"><i
                                             class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                       1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                 </div>
                              </div>
                              <div class="video-card video-card-list">
                                 <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                    <div class="time">3:50</div>
                                 </div>
                                 <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                             Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                             Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                             &nbsp;
                                             Close</a>
                                       </div>
                                    </div>
                                    <div class="video-title">
                                       <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                    </div>
                                    <div class="video-page text-success">
                                       Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                          data-original-title="Verified"><i
                                             class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                       1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                 </div>
                              </div>
                              <div class="video-card video-card-list">
                                 <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
                                    <div class="time">3:50</div>
                                 </div>
                                 <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                             Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                             Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                             &nbsp;
                                             Close</a>
                                       </div>
                                    </div>
                                    <div class="video-title">
                                       <a href="#">Culpa qui officia deserunt mollit anim</a>
                                    </div>
                                    <div class="video-page text-success">
                                       Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                          data-original-title="Verified"><i
                                             class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                       1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                 </div>
                              </div>
                              <div class="video-card video-card-list">
                                 <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
                                    <div class="time">3:50</div>
                                 </div>
                                 <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                             Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                             Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                             &nbsp;
                                             Close</a>
                                       </div>
                                    </div>
                                    <div class="video-title">
                                       <a href="#">Deserunt mollit anim id est laborum.</a>
                                    </div>
                                    <div class="video-page text-success">
                                       Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                          data-original-title="Verified"><i
                                             class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                       1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                 </div>
                              </div>
                              <div class="video-card video-card-list">
                                 <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
                                    <div class="time">3:50</div>
                                 </div>
                                 <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                             Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                             Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                             &nbsp;
                                             Close</a>
                                       </div>
                                    </div>
                                    <div class="video-title">
                                       <a href="#">Exercitation ullamco laboris nisi ut.</a>
                                    </div>
                                    <div class="video-page text-success">
                                       Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                          data-original-title="Verified"><i
                                             class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                       1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                 </div>
                              </div>
                              <div class="video-card video-card-list">
                                 <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                    <div class="time">3:50</div>
                                 </div>
                                 <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                             Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                             Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                             &nbsp;
                                             Close</a>
                                       </div>
                                    </div>
                                    <div class="video-title">
                                       <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                       Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                          data-original-title="Verified"><i
                                             class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                       1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                 </div>
                              </div>
                              <div class="video-card video-card-list">
                                 <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                    <div class="time">3:50</div>
                                 </div>
                                 <div class="video-card-body">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top
                                             Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp;
                                             Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i>
                                             &nbsp;
                                             Close</a>
                                       </div>
                                    </div>
                                    <div class="video-title">
                                       <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                    </div>
                                    <div class="video-page text-success">
                                       Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                          data-original-title="Verified"><i
                                             class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                       1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.container-fluid -->
         <!-- Sticky Footer -->
         <footer class="sticky-footer">
            <div class="container">
               <div class="row no-gutters">
                  <div class="col-lg-6 col-sm-6">
                     <p class="mt-1 mb-0"><strong class="text-dark">Vidoe</strong>.
                        <small class="mt-0 mb-0"><a class="text-primary" target="_blank"
                              href="https://templatespoint.net/">TemplatesPoint</a>
                        </small>
                     </p>
                  </div>
                  <div class="col-lg-6 col-sm-6 text-right">
                     <div class="app">
                        <a href="#"><img alt="" src="img/google.png"></a>
                        <a href="#"><img alt="" src="img/apple.png"></a>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <!-- /.content-wrapper -->
   </div>
   <!-- /#wrapper -->
   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>
   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"></span>
               </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
               <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
         </div>
      </div>
   </div>
   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   <!-- Owl Carousel -->
   <script src="vendor/owl-carousel/owl.carousel.js"></script>
   <!-- Custom scripts for all pages-->
   <script src="js/custom.js"></script>
</body>

</html>