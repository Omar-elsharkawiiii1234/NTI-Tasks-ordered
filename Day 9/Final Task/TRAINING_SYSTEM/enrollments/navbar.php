<?php
  session_start();
  if(!isset( $_SESSION["loginstate"])||$_SESSION["loginstate"]==0){
    $path="../login.php";
    header("Location:$path");
  }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Training Ex</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../students/student.php">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../courses/course.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="enrollment.php">Enrollments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active btn btn-danger" aria-current="page" href="../logout.php">Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>