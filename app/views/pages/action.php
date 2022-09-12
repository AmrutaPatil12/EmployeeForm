<form action ="<?php echo URLROOT.'pages/search' ?>" method="post">
<input type="Search" placeholder="search" name="search">

<input type="submit" value="Search">
</form>

<form action ="<?php echo URLROOT.'pages/logout' ?>" method="post">
<button type="submit" id="l">Logout</button>
</form>

<form action ="<?php echo URLROOT.'pages/view1' ?>" method="post">
<button >View</button>
</form>

<form action ="<?php echo URLROOT.'pages/add' ?>" method="post">
<button>Add Details</button>
</form>

<!-- 
<form action ="<?php echo URLROOT.'pages/del' ?>" method="post">
    <button name="del">Delete</button>
</form> -->
<br>
<br>
<table border="1px">
<tr>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Street</th> 
<th>City</th>
<th>State</th>
<th>Country</th>
<th>Pincode</th>
<th>Photos</th>
<th> Action </th>

<?php
foreach($data['posts']as $post):?>
<tr>
    <td>  <?= $post->id ?>  </td>
    <td>  <?= $post->firstname ?>  </td>
    <td>  <?= $post->lastname?> </td>
    <td>  <?= $post->email ?> </td>
    <td>  <?= $post->phoneno ?> </td>
    <td>  <?= $post->street?> </td> 
    <td>  <?= $post->city?> </td>
    <td>  <?= $post->state?> </td>
    <td>  <?= $post->country?> </td>
    <td>  <?= $post->pincode?> </td>
  
    <td>  
        <img src="<?= $post->photo ?>" width="80px" height="80px">
    </td>
    
    <td>
    <button><a href='http://localhost/mvc/pages/delete/<?= $post->id ?>'>Delete</a></delete><br>
       <button><a href='http://localhost/mvc/pages/edit/<?= $post->id ?>'>Edit</a></button>
        
</td>   
</tr>
 <?php endforeach ?>

</table>
</div>
<br>

<button id="btnExport" onclick="exportReportToExcel(this)">EXPORT</button>
<script>
function exportReportToExcel() {
  let table = document.getElementsByTagName("table"); // you can use document.getElementById('tableId') as well by providing id to the table tag
  TableToExcel.convert(table[0], { // html code may contain multiple tables so here we are refering to 1st table tag
    name: `export.xlsx`, // fileName you could use any name
    sheet: {
      name: 'Sheet 1' // sheetName
    }
  });
 
}
</script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

