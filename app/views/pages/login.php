<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style1.css">
<div class="login">
  <form action ="<?php echo URLROOT."pages/login1" ?>" method="post" >
  <p>Email address</p>
  <input type="email" name="email" required>
  <p>Password</p>
  <input type="password" name="password" required><br><br>

  <input type="submit" value="login">
  <br><br>
  <!-- <?php
if(isset($_SESSION['err']))
{
  echo $_SESSION['err'];
}
  ?> -->

</div>
</form>

<!-- <script>
  // $(document).ready(function()
  // {
    window.addEventListener('load', (event) => {

});
  // });
</script> -->