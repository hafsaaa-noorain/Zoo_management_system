<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
  input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color:lightseagreen;
  padding: 120px;
 
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="container">
  <form action="ticketsdisplay.php">
  <div class="row">
    <div class="col-25">
      <label for="vis_date">DATE(YYYY-MM-DD)</label>
    </div>
    <div class="col-75">
      <input type="text" id="enter" name="vis_date" placeholder="Enter the date(YYYY-MM-DD)">
    </div>
  </div>

    <div class="row">
      <div class="col-25">
        <label for="RIDE">SELECT RIDE TYPE</label>
      </div>
      <div class="col-75">
        <select id="RIDE" name="RIDE">
          <option value="safari">SAFARI</option>
          <option value="self">SELF</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">

        <label for="CATEGORY">SELECT AGE</label>
      </div>
      <div class="col-75">
        <select id="CATEGORY" name="CATEGORY">
          <option value="normalchild">NORMAL CHILD</option>
          <option value="normaladult">NORMAL ADULT</option>
          <option value="foreignchild">FOREIGN CHILD</option>
          <option value="foreignadult">FOREIGN ADULT</option>
        </select>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>

