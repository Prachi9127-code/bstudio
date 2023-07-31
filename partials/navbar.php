<?php require 'partials/dbconnect.php' ?>
<?php
session_start();
$loggedin = true;
if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){
    $loggedin = true;
}else{
  $loggedin = false;
}
   echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/discuss.php">iDiscuss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="/discuss.php">Home</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Notes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/discuss.php">Discuss</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about.php">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Top Categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
              $sql = "SELECT category_name, category_id FROM `categories` LIMIT 3";
              $result = mysqli_query($conn, $sql); 
              while($row = mysqli_fetch_assoc($result)){
                echo '<a class="dropdown-item" href="threads.php?catid='. $row['category_id']. '">' . $row['category_name']. '</a>'; 
              }
              echo '</ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact.php">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex" role="search" method="get" action="search.php">
            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success me-2" type="submit">Search</button>';
            if(!$loggedin){
            echo '<a class="btn btn-outline-primary me-2" type="submit" href="/login.php">Login</a>
            <a class="btn btn-outline-primary me-2" type="submit" href="/signup.php">Signup</a>';
            }
            if($loggedin){
            echo '<a class="btn btn-outline-primary me-2" type="submit" href="/logout.php">Logout</a>';
            }
          echo '</form>
        </div>
      </div>
    </nav>';
    ?>
