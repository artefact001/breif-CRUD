 <?php include('header.php');?>
<?php require('dbcon.php');?>

      <div class="box1"> 
        <h2> ALL STUDENTS</h2>
        <button class="btn btn-primary"data-toggle="modal" data-target="#exampleModal">
            ADD STUDENTS
        </button>    
      </div>
    <table class="table table-hover table-bordered table-striped">
    <thead>
       <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
       </tr> 
    </thead>
    <tbody>
        <?php   
        $query = "select * from students";
        $result = mysqli_query($connection, $query);
        if (!$result){
            die("query failed" .$connection->connect_error);
        }
        else{ 
       while($row = mysqli_fetch_assoc($result)){
     ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['laste_name']; ?></td>
            <td><?php echo $row['age']; ?></td>
         </tr> 
 <?php
 }
  }
  ?>
<?php
        ?>
        </tbody>
    </Table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form>
        <div class="form-group">
        <label for="f_name">First Name </label>
        <input type="text"name="f_name" class="form-control"> </div>

        <div class="form-group">
        <label for="l_name">last Name </label>
        <input type="text"name="l_name" class="form-control"> </div>

        <div class="form-group">
        <label for="age">age </label>
        <input type="text"name="age" class="form-control"> </div>
 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">ADD</button>
      </div>
    </div>
  </div>
</div>

</form>

</div>
<script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>

    <?php include('footer.php');?>
  