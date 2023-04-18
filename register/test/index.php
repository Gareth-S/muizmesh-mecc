<!DOCTYPE html>
<html>
  <head>
    <title>New Member Registration</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/styles.css"> 
  </head>
  <body>
    <div class="testbox">
      <form name="form1" action="submit.php" method ="post" enctype="multipart/form-data" >
        <div class="banner">
          <h1>New Member Registration</h1>
        </div>
        <div class="colums">
          <div class="item">
            <label for="name"> First Name<span>*</span></label>
            <input id="name" type="text" name="name" required/>
          </div>
          <div class="item">
            <label for="email"> Email<span>*</span></label>
            <input id="email" type="text" name="email" required/>
          </div>
          <div class="item">
            <label for="message">Message<span>*</span></label>
            <input id="message" type="text"   name="message" required/> 
        </div>
      </div>
    </div>
        <h2>Terms and Conditions</h2>
        <input type="checkbox" name="checkbox1">
        <label>You consent to our guidlines and constitution and will receive communications from us electronically. We will communicate with you by choice in communication. You agree that all agreements, notices, disclosures and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.</label>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>
