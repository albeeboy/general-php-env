<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form stuff</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <section id="main-container" class="form-stuff-page">
    <h2>Experimental Form</h2>
    <form id="experimental-form" action="#" method="post">

      <div class="form-group">
        <label class="form-group-label" for="fname">First name</label>
        <input class="form-control" type="text" name="fname" id="fname">
      </div>

      <div class="form-group">
        <label class="form-group-label" for="lname">Last name</label>
        <input class="form-control" type="text" name="lname" id="lname">
      </div>

      <div class="form-group">
        <label class="form-group-label" for="lname">Email</label>
        <input class="form-control" type="text" name="email" id="email">
      </div>

      <div class="form-group">
        <label class="form-group-label" for="phone">Phone</label>
        <input class="form-control" type="tel" name="phone" id="phone">
      </div>

      <div class="form-group">
        <label class="form-group-label" for="state">State</label>
        <select class="form-control custom-select" name="us_state" id="us_state">
          <option value="">Select a state</option>
          <option value="AL">Alabama</option>
          <option value="AK">Alaska</option>
          <option value="AZ">Arizona</option>
          <option value="AR">Arkansas</option>
          <option value="CA">California</option>
          <option value="CO">Colorado</option>
          <option value="CT">Connecticut</option>
          <option value="DE">Delaware</option>
          <option value="DC">District of Columbia</option>
          <option value="FL">Florida</option>
          <option value="GA">Georgia</option>
          <option value="HI">Hawaii</option>
          <option value="ID">Idaho</option>
          <option value="IL">Illinois</option>
          <option value="IN">Indiana</option>
          <option value="IA">Iowa</option>
          <option value="KS">Kansas</option>
          <option value="KY">Kentucky</option>
          <option value="LA">Louisiana</option>
          <option value="ME">Maine</option>
          <option value="MD">Maryland</option>
          <option value="MA">Massachussets</option>
          <option value="MI">Michigan</option>
          <option value="MN">Minnesota</option>
          <option value="MS">Mississippi</option>
          <option value="MO">Missouri</option>
          <option value="MT">Montana</option>
          <option value="NE">Nebraska</option>
          <option value="NV">Nevada</option>
          <option value="NH">New Hampshire</option>
          <option value="NJ">New Jersey</option>
          <option value="NM">New Mexico</option>
          <option value="NY">New York</option>
          <option value="NC">North Carolina</option>
          <option value="ND">North Dakota</option>
          <option value="OH">Ohio</option>
          <option value="OK">Oklahoma</option>
          <option value="OR">Oregon</option>
          <option value="PA">Pennsylvania</option>
          <option value="RI">Rhode Island</option>
          <option value="SC">South Carolina</option>
          <option value="SD">South Dakota</option>
          <option value="TN">Tennessee</option>
          <option value="TX">Texas</option>
          <option value="UT">Utah</option>
          <option value="VT">Vermont</option>
          <option value="VA">Virginia</option>
          <option value="WA">Washington</option>
          <option value="WV">West Virginia</option>
          <option value="WI">Wisconsin</option>
          <option value="WY">Wyoming</option>
        </select>
      </div>

      <div class="form-group">
        <p class="checkbox-group-title">Interests</p>
        <div class="checkbox-item">
          <input class="form-control" type="checkbox" name="interest" id="archery" value="archery">
          <label class="form-group-label form-group-label--checkbox" for="archery">Archery</label>
        </div>
        <div class="checkbox-item">
          <input class="form-control" type="checkbox" name="interest" id="skeet" value="skeet">
          <label class="form-group-label form-group-label--checkbox" for="skeet">Skeet shooting</label>
        </div>
        <div class="checkbox-item">
          <input class="form-control" type="checkbox" name="interest" id="biathlon" value="biathlon">
          <label class="form-group-label form-group-label--checkbox" for="biathlon">Biathlon</label>
        </div>
      </div>

      <button type="submit" class="button button--blue" name="submit">Submit</button>

    </form>
  </section>
</body>
<script>
  $(document).ready(function() {
    const formMethod =$("#experimental-form").attr("method");
    console.log("formMethod: ", formMethod);
  });
</script>
</html>