
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<body>  
<div class="container mt-4">
<form method="post">  
   <div class="row">
  <section>
  <div class="card">
        <div class="card-body">
            <div class="from-group">
            <P>Name:</P>
            <input type="text" name="name" >
            </div>
            <div class="from-group">
            <P> Gender: </P>
            <input type="text" name="gender" >
            </div>
            <div class="from-group">
            <P>Province:</P>
            <input type="text" name="province" >
            </div>
            <div class="from-group">
            <P>Email:</P>
            <input type="text" name="eamil" >
            </div><br>
                <input class="btn btn-info" type="submit"  name="submit">
               
        </div>
  </section>
  <section>
      <div class="card-body">
          <div class="card-header">This is the result:</div>
          <div class="card-body">
          <?php include_once "getValue.php";?>
              <p>Name: <?php echo $name;?></p>
              <p>Gender: <?php echo $gender;?></p>
              <p>Province: <?php echo $province;?></p>
              <p>Email: <?php echo $email;?></p>
        </div>
        </div>
  </section>
    </div>    
   </div>   
</form>
</div>  

</body>  
</html>