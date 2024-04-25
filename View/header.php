<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<?php
session_start();
?>
<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
    &nbsp;&nbsp;
    <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button> &nbsp;&nbsp;
    <a class="navbar-brand mr-1" href="index.php"><img class="img-fluid" alt="" src="img/logo.png"></a>
    <!-- Navbar Search -->
    <form class="mobile-search" action="searchResult.php" method="get">
        <div class="input-group">
            <input type="text" name="query" placeholder="Search for..." class="form-control">
            <div class="input-group-append">
                <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
        <li class="nav-item mx-1">
            <a class="nav-link" href="upload.php">
                <i class="fas fa-plus-circle fa-fw"></i>
                Upload Video
            </a>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">

              
               <?php
                $db=new DataBase();
                $no = $db->getNotificationsForCurrentUser();
                //var_dump($no);

                if (count($no) > 0) {
                    foreach ($no as $notification) {
                
                        echo "<i class='fas fa-fw fa-bell'></i> {$notification['content']}<br>";

                        
                    }
                  } else {
                    echo "<a class='dropdown-item' href='#'><i class='fas fa-fw fa-bell'></i> No new notifications</a>";
                  }

                ?>

                <!--  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a> -->

            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img alt="Avatar" src="img/user.png">
                Osahan
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="account.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                <a class="dropdown-item" href="subscriptions.php"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
            </div>
        </li>
    </ul>
</nav>
=======
<style>
    .my-dropdown-menu.show {
    background-color: #C8E7FF;
    border: 1px solid black;
    border-radius: 5px;
}
    .my-dropdown-menu {
        width: 315px;
        max-height: 450px;
        overflow-y: auto;
    }
    
    .my-dropdown-item {
        font-size: 16px;
        font-family: sans-serif; 
        font-weight:200; 
        margin: 10px;
        border-bottom: 2px solid #ff6161;
        transition: all 0.2s ease-in-out; 

    }

    
    .my-dropdown-item:last-child {
        border-bottom: none; 
    }
    
    .my-dropdown-item:hover {
        background-color: #8093F1;
        border-radius: 5px;
        border-bottom: 3px solid gray;
        padding: 5px;
        cursor: pointer;
    }
    
</style>

<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
    &nbsp;&nbsp;
    <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button> &nbsp;&nbsp;
    <a class="navbar-brand mr-1" href="index.php"><img class="img-fluid" alt="" src="img/logo.png"></a>
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
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
        <li class="nav-item mx-1">
            <a class="nav-link" href="upload.php">
                <i class="fas fa-plus-circle fa-fw"></i>
                Upload Video
            </a>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>

            <?php
            //    session_start();
               require_once '../Controller/Database.php';
                $db = new Database ;
               $select = $db->select_where('notification','UserID',$_SESSION["userID"]);
               $_SESSION['count'] = 0 ;
            ?>

            <div class="dropdown-menu dropdown-menu-right my-dropdown-menu">
                <div">
                <?php foreach($select as $see_noti){

                    $_SESSION['count'] ++ ;
                    if($see_noti['n_type'] == 1){
                        $content1 = $see_noti['from_channel_name'].' has subscribed to your channel'. '</br>' ;
                        ?> <div onclick="goTo()" aria-labelledby="alertsDropdown">
                        <?php echo "<a class='my-dropdown-item'> {$content1} </a>"; ?>
                        </div> 
                        <?php
                    }
                    else if ($see_noti['n_type'] == 2){
                        $content2 = $see_noti['from_channel_name'].' commented on '. $see_noti['video_name'];
                        ?> <div onclick="goToVideoPage('<?php echo $_SESSION['videoID']; ?>', '<?php echo $_SESSION['channelID']; ?>')" aria-labelledby="alertsDropdown">
                        <?php echo "<a class='my-dropdown-item' > {$content2} </a>";  ?>       
                        </div> 
                        <?php        
                    }

                }
                ?>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img alt="Avatar" src="img/user.png">
                Osahan
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="account.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                <a class="dropdown-item" href="subscriptions.php"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
            </div>
        </li>
    </ul>
</nav>


<script>
                 function goToVideoPage(videoId, userId) {
                     window.location.href = 'video-page.php?video_id=' + videoId + '&user_id=' + userId;
                 }
                 function goTo() {
                     window.location.href = $_SERVER['PHP_SELF'];
                 }
</script>
>>>>>>> Stashed changes
=======
<?php 
require_once '../Controller/Database.php';
$db = new Database ;
?>

<style>
    .my-dropdown-menu.show {
    background-color: #C8E7FF;
    border: 1px solid black;
    border-radius: 5px;
}
    .my-dropdown-menu {
        width: 330px;
        max-height: 450px;
        overflow-y: auto;
    }
    
    .my-dropdown-item {
        font-size: 16px;
        font-family: sans-serif; 
        font-weight:200; 
        margin: 10px;
        border-bottom: 2px solid #ff6161;
        transition: all 0.2s ease-in-out; 

    }

    
    .my-dropdown-item:last-child {
        border-bottom: none; 
    }
    
    .my-dropdown-item:hover {
        background-color: #8093F1;
        border-radius: 5px;
        border-bottom: 3px solid gray;
        padding: 5px;
        cursor: pointer;
    }
    
</style>


<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
    &nbsp;&nbsp;
    <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button> &nbsp;&nbsp;
    <a class="navbar-brand mr-1" href="index.php"><img class="img-fluid" alt="" src="img/logo.png"></a>
    <!-- Navbar Search -->
    <form class="mobile-search" action="searchResult.php" method="get">
        <div class="input-group">
            <input type="text" name="query" placeholder="Search for..." class="form-control">
            <div class="input-group-append">
                <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
        <li class="nav-item mx-1">
            <a class="nav-link" href="upload.php">
                <i class="fas fa-plus-circle fa-fw"></i>
                Upload Video
            </a>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>

            <?php
            //    session_start();
            if(isset($_SESSION['userID'])){
               $select = $db->select_where('notification','UserID',$_SESSION["userID"]);
               $_SESSION['count'] = 0 ;
            }
            ?>

            <div class="dropdown-menu dropdown-menu-right my-dropdown-menu" aria-labelledby="alertsDropdown">

            <div">
                <?php 
                if(isset($_SESSION['userID'])){
                    foreach($select as $see_noti){

                        $_SESSION['count'] ++ ;
                        if($see_noti['n_type'] == 1){
                            $content1 = $see_noti['from_channel_name'].' has subscribed to your channel'. '</br>' ;
                            ?> <div onclick="goTo()" aria-labelledby="alertsDropdown">
                            <?php echo "<a class='my-dropdown-item'> {$content1} </a>"; ?>
                            </div> 
                            <?php
                        }
                        else if ($see_noti['n_type'] == 2){
                            $content2 = $see_noti['from_channel_name'].' commented on '. $see_noti['video_name'];
                            ?> <div onclick="goToVideoPage('<?php echo $see_noti['video_id']; ?>')" aria-labelledby="alertsDropdown">
                            <?php echo "<a class='my-dropdown-item' > {$content2} </a>";  ?>       
                            </div> 
                            <?php        
                        }
                  }

                }

                if(isset($_SESSION['userID'])){
                    $db=new DataBase();
                    $no = $db->getNotificationsForCurrentUser();
                    $no = array_reverse($no); // reverse the order of the notifications array

                    if (count($no) > 0) {
                        foreach ($no as $notification) {
                            echo "<i class='fas fa-fw fa-bell'></i> {$notification['content']}<br>";
                        }
                    } else {
                        echo "<a class='dropdown-item' href='#'><i class='fas fa-fw fa-bell'></i> No new notifications</a>";
                    }
                }
            

                ?>
                </div>


                <!--  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a> -->

            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img alt="Avatar" src="img/acc.png">
                <?php 
                    if(isset($_SESSION['userID'])){
                        echo $_SESSION["userName"];
                        ?>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="account.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                                <a class="dropdown-item" href="subscriptions.php"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                                <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
                            </div>
                        <?php
                    }else {
                        echo "Account";
                        ?>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="login.php"><i class="fas fa-fw fa-sign-in-alt"></i> &nbsp; Login</a>
                                <!-- <a class="dropdown-item" href="account.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                                <a class="dropdown-item" href="subscriptions.php"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                                <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a> -->
                                <!-- <div class="dropdown-divider"></div> -->
                            </div>
                        <?php
                    } 
                ?>
            </a>
            <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="account.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                <a class="dropdown-item" href="subscriptions.php"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
            </div> -->
        </li>
    </ul>
</nav>


<script>
                 function goToVideoPage(videoId) {
                     window.location.href = 'video-page.php?video_id=' + videoId;
                 }
                 function goTo() {
                     window.location.href = $_SERVER['PHP_SELF'];
                 }
</script>
>>>>>>> Stashed changes
=======
<?php 
require_once '../Controller/Database.php';
$db = new Database ;
?>

<style>
    .my-dropdown-menu.show {
    background-color: #C8E7FF;
    border: 1px solid black;
    border-radius: 5px;
}
    .my-dropdown-menu {
        width: 330px;
        max-height: 450px;
        overflow-y: auto;
    }
    
    .my-dropdown-item {
        font-size: 16px;
        font-family: sans-serif; 
        font-weight:200; 
        margin: 10px;
        border-bottom: 2px solid #ff6161;
        transition: all 0.2s ease-in-out; 

    }

    .my-dropdown-item:last-child {
        border-bottom: none; 
    }
    
    .my-dropdown-item:hover {
        background-color: #8093F1;
        border-radius: 5px;
        border-bottom: 3px solid gray;
        padding: 5px;
        cursor: pointer;
    }



    .my-dropdown-item2 {
        font-size: 16px;
        font-family: sans-serif; 
        font-weight:200; 
        margin: 10px;
        transition: all 0.5s ease-in-out;

    }

    .my-dropdown-item2:last-child {
        border-bottom: none; 
    }
    
    .my-dropdown-item2:hover {
        background-color: #8093F1;
        border-radius: 5px;
        border-bottom: 3px solid gray;
        padding: 5px;
        cursor: default;
    }
    
</style>


<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
    &nbsp;&nbsp;
    <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button> &nbsp;&nbsp;
    <a class="navbar-brand mr-1" href="index.php"><img class="img-fluid" alt="" src="img/logo.png"></a>
    <!-- Navbar Search -->
    <form class="mobile-search" action="searchResult.php" method="get">
        <div class="input-group">
            <input type="text" name="query" placeholder="Search for..." class="form-control">
            <div class="input-group-append">
                <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
        <li class="nav-item mx-1">
            <a class="nav-link" href="upload.php">
                <i class="fas fa-plus-circle fa-fw"></i>
                Upload Video
            </a>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>

            <?php
            //    session_start();
            if(isset($_SESSION['userID'])){
               $select = $db->select_where('notification','UserID',$_SESSION["userID"]);
               $_SESSION['count'] = 0 ;
            }
            ?>

            <div class="dropdown-menu dropdown-menu-right my-dropdown-menu" aria-labelledby="alertsDropdown">

            <div">
                <?php 
                if(isset($_SESSION['userID'])){
                    foreach($select as $see_noti){

                        $_SESSION['count'] ++ ;
                        if($see_noti['n_type'] == 1){
                            $content1 = $see_noti['from_channel_name'].' has subscribed to your channel'. '</br>' ;
                            ?> <div onclick="goTo()" aria-labelledby="alertsDropdown">
                            <?php echo "<a class='my-dropdown-item'> {$content1} </a>"; ?>
                            </div> 
                            <?php
                        }
                        else if ($see_noti['n_type'] == 2){
                            $content2 = $see_noti['from_channel_name'].' commented on '. $see_noti['video_name'];
                            ?> <div onclick="goToVideoPage('<?php echo $see_noti['video_id']; ?>')" aria-labelledby="alertsDropdown">
                            <?php echo "<a class='my-dropdown-item' > {$content2} </a>";  ?>       
                            </div> 
                            <?php        
                        }
                  }

                }

                if(isset($_SESSION['userID'])){
                    $db=new DataBase();
                    $no = $db->getNotificationsForCurrentUser();
                    $no = array_reverse($no); // reverse the order of the notifications array

                    if (count($no) > 0) {
                        foreach ($no as $notification) {
                            echo "<i class='fas fa-fw fa-bell'></i> {$notification['content']}<br>";
                        }
                    } else {
                        echo "<a class='dropdown-item' href='#'><i class='fas fa-fw fa-bell'></i> No new notifications</a>";
                    }
                }
            

                ?>
                </div>


                <!--  <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a> -->

            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img alt="Avatar" src="img/acc.png">
                <?php 
                    if(isset($_SESSION['userID'])){
                        echo $_SESSION["userName"];
                        ?>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="account.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                                <a class="dropdown-item" href="subscriptions.php"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                                <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
                            </div>
                        <?php
                    }else {
                        echo "Account";
                        ?>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="login.php"><i class="fas fa-fw fa-sign-in-alt"></i> &nbsp; Login</a>
                                <!-- <a class="dropdown-item" href="account.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                                <a class="dropdown-item" href="subscriptions.php"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                                <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a> -->
                                <!-- <div class="dropdown-divider"></div> -->
                            </div>
                        <?php
                    } 
                ?>
            </a>
            <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="account.php"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                <a class="dropdown-item" href="subscriptions.php"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                <a class="dropdown-item" href="settings.php"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
            </div> -->
        </li>
    </ul>
</nav>


<script>
                 function goToVideoPage(videoId) {
                     window.location.href = 'video-page.php?video_id=' + videoId;
                 }
                 function goTo() {
                     window.location.href = $_SERVER['PHP_SELF'];
                 }
</script>
>>>>>>> Stashed changes
