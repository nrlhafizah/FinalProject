<html>
    <head>

<style>

body{
    background:#748B82  ;
}
    
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: absolute;
  height: 370px;
  width: 500px;
  bottom: 0px;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 15;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  padding: 10px;

  position: center;
  margin: 50px -300px 50px 50px;
  
  
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: auto;
  
  border: none;
  cursor: pointer;
  width: 100%;
  width: 100px;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

</style>
</head>

<body>


  <form action="/action" method="post" class="form-container">

  <b>Project Name</b><br>
    <input type="text" value="{{$data->project_name}}"  name="pname" readonly><br>
      @csrf
  <label for="members"><b> Team Member</b></label><br><br>
  <select name="member" width=100 style="width: 460px">
  @foreach($userdata as $d)
  @if ($d->usertype=='0')
  <option value="{{$d->id}}">{{$d->name}}</option>
  @endif
  @endforeach


</select>
    </select><br><br>

    <b>Start Date</b><br>
    <input type="date" placeholder="Enter Email" name="sdate" required><br><br>

    <b>End Date</b><br>
    <input type="date" placeholder="Enter Password" name="edate" required><br><br>

    <b>Duration</b>
    <input type="text" placeholder="Enter Duration" name="duration" required>

    <label for="psw"><b>Cost</b></label>
    <input type="text" placeholder="Enter Cost" name="cost" required>

    <label for="psw"><b>Client</b></label>
    <input type="text" placeholder="Enter Client" name="client" required>

    <b>Project Stage</b><br>
									<select width=200 style="width: 200px " name="stage" id="stage">
    								<option value="Inception">Inception</option>
  									<option value="Milestone 1">Milestone 1</option>
  									<option value="Milestone 2">Milestone 2</option>
  									<option value="Final Report">Final Report</option>
									  <option value="Closing">Closing</option>
									</select><br><br>
  <b>Project Progress</b><br>						
									  <select width=200 style="width: 200px" name="progress" id="progress">
    								<option value="On track">On track</option>
  									<option value="Delayed">Delayed</option>
  									<option value="Extended">Extended</option>
  									<option value="Completed">Completed</option>
									</select><br><br>
			

    <button type="submit">UPDATE</button>
    
  </form>
</div>
</div>

</body>
</html>