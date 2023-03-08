<?php include "add/header.php"; ?>


<?php 
$sql= 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
   
    <h2>Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="leadd mt3"> No feeds</p>
    <?php endif; ?>

<?php foreach ($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <?php echo $item['body']; ?>
       <div class="text_secondary mt2">
        By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
       </div>
     </div>
   </div>
<?php endforeach; ?>

 
   <?php include "add/footer.php"; ?>
