<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Feedback Form</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="../CSS/main.css">

</head>

<body>
  <!---header -->
  <div class="logodiv">
    <?phpecho '<a href="home.php"><img class="logo" src="../image/logo.png" alt="Logo"/></a>';?>
  </div>

  <div>
    <?php include '../pages/links.php'; ?>
  </div>

  <!---Feedback Form-->
  <form action="feedback.php" method="POST">
    <div class="form" id="feedaback">

      <h1>Feedback Form</h1>
      <div class="content">
        <!---fisrt fieldset-->
        <fieldset>
          <legend>Personal Information</legend>
          <div class="input-field" id="formFiled">
            <input type="text" placeholder="Full Name" autocomplete="nope" name="fullName" required>
          </div>
          <div class="input-field" id="formFiled">
            <input type="email" placeholder="Email"
            name="email" id="contac-email" onkeyup="ValidateEmail()">
            <span id="Email-error"></span>
          </div>
          <div class="options">
            <label for="Major">*Choose Your Major:</label>
            <select name="Major" id="Major" name="Major" required>
              <option value="CS">CS</option>
              <option value="IT">IT</option>
              <option value="IS">IS</option>
            </select>
          </div>

        </fieldset>
        <!---Secound fieldset-->
        <fieldset>
          <legend>Evaluation</legend>
          <div class="options">
            <h3>How was your experience on this site? </h3>
              <input type="radio" id="VGood" name="rate" value="VGood" required>
              <label for="VGood">Very Good</label>
              <input type="radio" id="Good" name="rate" value="Good">
              <label for="Good">Good</label>
              <input type="radio" id="Bad" name="rate" value="Bad">
              <label for="Bad">Bad</label>
              <input type="radio" id="VBad" name="rate" value="VBad">
              <label for="VBad">Very Bad</label>
          </div>
          <div class="options">
            <h3 id="h3form">Came to know about us from: </h3>
              <input type="checkbox" id="Friends" name="Know_us" value="Friends" required>
              <label for="Friends">Friends</label>
              <input type="checkbox" id="Socielmedia" name="Know_us" value="Socielmedia">
              <label for="Good">Sociel media</label>
              <input type="checkbox" id="Other" name="Know_us" value="Other">
              <label for="Bad">Other</label>
          </div>

          <div class="input-field" id="formFiled">
            <input type="textarea" placeholder="Your Massage " autocomplete="nope" name="massage">
          </div>
        </fieldset>
      </div>
      <div class="action">
        <input type="submit" value="Submit" name="Submit">
      </div>
  </form>
  </div>


  <!--footer--------------------------------------------->
  <div>
    <?php include "../pages/footer.php"; ?>
  </div>

  <script src="../JS/valedation.js"></script>

</html>