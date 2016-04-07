 <!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="./vendor/bs/css/bootstrap.min.css">
<style>
body {
    background-image: url("1.jpg");
}
</style>
</head>
<body style="background:indigo">
  <div style="margin:20px">
    <center>
      <form  action="insert1.php" method="post" style="width:50%;background:hotpink;padding:20px">
        <div  class="form-group">
          <label for="ip" class="form-control" style="border-radius:0">INFO</label> 
          <input id='ip' type="text" name="name" placeholder="Name" autofocus required>
        </div>

        <div>
          <label for="usn"></label>
          <input id='usn' type="text" name="usn" placeholder="USN NUMBER" required>
        </div>
  
        <div style="margin:20px">
          <label for="sem">sem:</label>
          <select id='sem' name="semester" required>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
           <option value="6">6</option>
           <option value="7">7</option>
           <option value="8">8</option>
        </select>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Submit">
      </form>
    </center>
  </div> 
</body>
</html>
