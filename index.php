<?php include "header.php" ?>
 <br>
 <br>
  <div class="container" id="form1">
  <br>
  <br>
   <form action="process.php" method="post">
    <div class="form-group">
     <label for="Name">Name:</label>
     <input type="text" class="form-control" id="text" name="name">
    </div>
    <div class="form-group">
     <label for="email">Email address:</label>
     <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
     <label for="Phone">Phone No:</label>
     <input type="text" class="form-control" id="phone" name="phone">
    </div>
   <div class="form-check">
   </div>
   <button type="submit" class="btn btn-primary" style="background-color:#26a69a;" name="submit" value="submit">Submit</button>
</form>
<br>
<br>
</div>
<?php include "footer.php" ?>