-<!DOCTYPE html>
<html>

<head>
  <title>Add Activity</title>
  <h1>Add an Activity</h1>
</head>

<link href="./css/bootstrap.css" rel="stylesheet">


<body>

  <form action = "./Controller/activity-controller.php" method="post">

    <div class="form-group">
      <label for="activity_name">Activity Name</label>
      <input type="text" class="form-control" id="activity_name"  name="activity_name" placeholder="Enter Activity Name" required>
    </div>

    <div class="form-group">
      <label for="activity_city">Activity City</label>
      <input type="text" class="form-control" id="activity_city"  name="activity_city" placeholder="Enter the City Where Activity Takes Place" required autocomplete>
    </div>

    <div class="form-group">
        <label for="activity_category">Activity Category</label>
        <select class="form-control" id="activity_category" name = "activity_category" placeholder="Choose Activity Category" required>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
    </div>

    <div class="form-group">
      <label for="activity_date">Activity Date</label>
      <input type="date" class="form-control" id="activity_date" name="activity_date"  required >
    </div>

    <div class="form-group">
      <label for="activity_start_time">Activity Start Time</label>
      <input type="time" class="form-control" id="activity_start_time" name="activity_start_time" required >
    </div>

    <div class="form-group">
      <label for="activity_end_time">Activity End Time</label>
      <input type="time" class="form-control" id="activity_end_time" name="activity_end_time" required>
    </div>

    <div class="form-group">
      <label for="activity-price">Activity Price in €</label>
      <input type="number" class="form-control" id="activity-price" name="activity_price" placeholder="Enter Assumed Price"   required>
    </div>

    <div class="form-group">
      <label for="activity-address">Activity Address</label>
      <textarea class="form-control" id="activity-address"  rows="4" name="activity_address" placeholder="Enter Activity Address" >

      </textarea>
    </div>


    <div class="form-group">
      <label for="activity-url" >Activity Official Website</label>
      <input type="url" class="form-control" id="activity-url"  name="activity_url" placeholder="Enter Activity Website To Get More Information " >
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


</body>
</html>
