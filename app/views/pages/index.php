
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="index">
     <h1> USER </h1>
      <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
     <form action="<?php echo URLROOT."pages/login" ?>" method="post">
        <input type="submit"   value="Admin"><br><br>
     </form>
     <form action="<?php echo URLROOT."pages/guest" ?>" method="post">
        <input type="submit"  value="Guest">
     </form>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
