<script src="https://kit.fontawesome.com/887e44e44e.js" crossorigin="anonymous"></script>   

<div class="sideBar">
    <div class="sideBar-content">
<?php 
      if(!isset($_SESSION["uid"])){
	echo'<a href="login.php">Log in</a>';
      }else{
        echo'<a href="profile.php">Profile</a>';
      }?>
    </div>
</div>

<style>

    .sidebar-content{
        margin-left: 3vh;
        margin-top: 10px;
    }

    .sidebar{
        position: -webkit-sticky;
        position:sticky;
        top 0;
        left: 0;
        background-color: black;
        width: 10vh;
        height: 100dvh;
        padding: 0;
        margin: 0;
        float: left;
        transition: 0.5s;
        color: black;
        font-size: 0px;
    }
    .sidebar:hover{
        font-size:35px;
        color: white;
        transition: 0.5s;
        width: 30dvh;
    }

    i{
        color: white !important;
        font-size: 35px !important;
    }

    a{
	text-decoration: none;
	color: white;
}

</style>
