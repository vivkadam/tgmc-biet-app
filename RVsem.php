 <!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="./vendor/bs/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style>
body {
    background-image: url("1.jpg");
}
</style>
</head>
<body style="background:skyblue">
  <div style="margin:20px">
    <center>
      <form  action="insert.php" method="post" style="width:50%;background:darkblue;padding:20px">
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
           <option value=""></option>
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
