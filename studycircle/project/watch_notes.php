<?php

include '../project/components/connect.php'; // Adjust the path if necessary

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
   header('location:login.php');
   exit(); // Stop further execution
}

if(isset($_GET['get_id'])){
   $get_id = $_GET['get_id'];
} else {
   $get_id = '';
   header('location:contents.php');
   exit(); // Stop further execution
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Notes</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../project/css/style.css">

</head>
<body>

<?php include '../project/components/user_header.php'; // Adjust the path if necessary ?>

<section class="view-content">

<?php
      $select_content = $conn->prepare("SELECT * FROM `content2` WHERE id = ? AND tutor_id = ?");
      $select_content->execute([$get_id, $user_id]);
      if($select_content->rowCount() > 0){
         while($fetch_content = $select_content->fetch(PDO::FETCH_ASSOC)){
            $notes_id = $fetch_content['id'];
   ?>
   <div class="container">
      <div class="notes-preview">
         <object data="../project/uploaded_files2/<?= $fetch_content['notes']; ?>" type="application/pdf" width="100%" height="500">
            <p>Your browser does not support PDFs. You can <a href="../project/uploaded_files2/<?= $fetch_content['notes']; ?>">download the PDF</a> instead.</p>
         </object>
      </div>
   </div>
   <?php
         }
      } else {
         echo '<p class="empty">No notes added yet! <a href="add_notes.php" class="btn" style="margin-top: 1.5rem;">Add Notes</a></p>';
      }
   ?>


</section>

<?php include '../project/components/footer.php'; // Adjust the path if necessary ?>

<script src="../js/admin_script.js"></script>

</body>
</html>
