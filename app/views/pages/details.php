<form action ="<?php echo URLROOT.'pages/save' ?>" method="post" enctype="multipart/form-data">

<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style1.css">

<h1>Employee Details</h1>
<div class="container">
<div class="container1">

    <!-- <p>Id</p>
      <input type="text"  name="id"> -->
    <p>First Name</p>
      <input type="text"  name="firstname" required>
    <p>Last Name</p>
      <input type="text"  name="lastname" required>
    <p>Email</p>
      <input type="email" name="email" required>
    <p>Phone Number</p>
      <input type="tel" maxlength="10" minlength="10" name="phoneno" required>
      </div>
      
      <div class="container2">
    <p>Street </p>
      <input type="text" name="street" required>
    <p>City</p>
      <input type="text" name="city" required>
    <p>State</p>
      <input type="text" name="state" required>
    <p>Country<p>
      <input type ="text" name="country" required>
    <p>Pincode</p>
      <input type="tel" minlength="6" maxlength="6" name="pincode" required>
      <br><br>
      <input type="file" accept="image/jpg, image/jpeg, image/png" name="photo" required>
      <br><br>
<button >Submit</button>
</div>
</div>
</form>



