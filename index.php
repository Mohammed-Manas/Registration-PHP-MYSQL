<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Course Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <form method="post" action="main.php">
        <h1>Login Here...</h1>
        <p>Please Fill The Below Details To Register</p>

        <div class="input">
          <label for="fname">CustomerID<span>*</span></label>
          <input
            type="text"
            name="id"
            placeholder="Enter Your FirstName"
            required
          />
        </div>
        <div class="input">
          <label for="lname">CustomerName<span>*</span></label>
          <input
            type="text"
            name="name"
            placeholder="Enter Your LastName"
            required
          />
        </div>

        <div class="input">
          <label for="mail">Age<span>*</span></label>
          <input
            type="number"
            name="age"
            placeholder="Enter Your Email"
            required
          />
        </div>

        <div class="input">
          <label for="number">Mobile No<span>*</span></label>
          <input
            type="number"
            name="contact"
            placeholder="Enter Your MobileNo"
            required
          />
        </div>

        

        <div class="btn">
          <input type="submit" value="Save" name="action"   />
          <input type="submit" value="Update" name="action" />
          <input type="submit" value="Delete" name="action" />
        </div>

      </form>
    </div>
  </body>
</html>
