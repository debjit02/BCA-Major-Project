<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-an-Appointment</title>
</head>
<body>
<style>
      body {
        background: linear-gradient(
          to right,
          #78a7ba 0%,
          #385d6c 50%,
          #78a7ba 99%
        );
      }

      .signup-form {
        font-family: sans-serif;
        width: 650px;
        margin: 30px auto;
        background: linear-gradient(
          to right,
          #ffffff 0%,
          #fafafa 50%,
          #ffffff 99%
        );
        border-radius: 10px;
      }

      .form-header {
        background-color: #eff0f1;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
      }

      .form-header h1 {
        font-size: 30px;
        text-align: center;
        color: #666;
        padding: 20px 0;
        border-bottom: 1px solid #cccccc;
      }

      .form-body {
        padding: 10px 40px;
        color: #666;
      }

      .form-group {
        margin-bottom: 20px;
      }

      .form-body .label-title {
        color: #1bba93;
        font-size: 17px;
        font-weight: bold;
      }

      .form-body .form-input {
        font-size: 17px;
        box-sizing: border-box;
        width: 100%;
        height: 34px;
        padding-left: 10px;
        padding-right: 10px;
        color: #333333;
        text-align: left;
        border: 1px solid #d6d6d6;
        border-radius: 4px;
        background: white;
        outline: none;
      }

      .horizontal-group .left {
        float: left;
        width: 49%;
      }

      .horizontal-group .right {
        float: right;
        width: 49%;
      }

      input[type="file"] {
        outline: none;
        cursor: pointer;
        font-size: 17px;
      }

      #range-label {
        width: 15%;
        padding: 5px;
        background-color: #1bba93;
        color: white;
        border-radius: 5px;
        font-size: 17px;
        position: relative;
        top: -8px;
      }

      ::-webkit-input-placeholder {
        color: #d9d9d9;
      }

      .signup-form .form-footer {
        background-color: #eff0f1;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        padding: 10px 40px;
        text-align: right;
        border-top: 1px solid #cccccc;
        clear: both;
      }

      .form-footer span {
        float: left;
        margin-top: 10px;
        color: #999;
        font-style: italic;
        font-weight: thin;
      }

      .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #1bba93;
        font-size: 17px;
        border: none;
        border-radius: 5px;
        color: #bcf5e7;
        cursor: pointer;
      }

      .btn:hover {
        background-color: #169c7b;
        color: white;
      }
    </style>
  </head>
  <body>
    <form class="signup-form" action="/register" method="post">
      <!-- form header -->
      <div class="form-header">
        <h1>Patient Information</h1>
      </div>

      <!-- form body -->
      <div class="form-body">
        <!-- Fullname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="Fullname" class="label-title">Full Name*</label>
            <input
              type="text"
              id="Fullname"
              class="form-input"
              placeholder="Enter your full name"
              required="required"
            />
          </div>
   	<!-- Phone Number-->
          <div class="form-group right">
            <label for="phnum" class="label-title">Phone Number</label>
            <input
              type="number"
              id="phnum"
              class="form-input"
              placeholder="Enter your Phone number"
            />
          </div>
        </div>
         

        <!-- Birthdate-->
        <div class="">
        <p>
	<label>Pickup Birthdate
	<input type="datetime-local" name="pickup_time" required>
	</label>
	</p>
        </div>

        <!-- Visit -->
        <div class="horizontal-group">
          <legend>Is this your first visit</legend>
		<p><label> <input type="radio" name="taxi" required value="car"> YES </label></p>
		<p><label> <input type="radio" name="taxi" required value="van"> NO </label></p>
          </div>
	  <body>
   	 <form class="signup-form" action="/register" method="post">
      	<!-- form header -->
      	<div class="form-header">
        <h1>Appointment Information</h1>
      	</div>


        <!-- date&time -->
        <div class="horizontal-group">
          <p>
	<label>Pickup Date/Time
	<input type="datetime-local" name="pickup_time" required>
	</label>
	</p>
            </div>
          </div>
        <!-- Doctorlist -->
        <div class="form-group"					>
          <fieldset>
	<legend>Preferred Physician</legend>
	<p><label> <input type="radio" name="taxi" required value="car"> Dr. Priti Das</label></p>
	<p><label> <input type="radio" name="taxi" required value="van"> Dr. Ankita Dan</label></p>
	<p><label> <input type="radio" name="taxi" required value="tuktuk"> Dr. Debjit Sinha </label></p>
	</fieldset>
  
	 <fieldset>
	<legend>Preferred Orthopedic</legend>
	<p><label> <input type="radio" name="taxi" required value="car"> Dr. Priti Das</label></p>
	<p><label> <input type="radio" name="taxi" required value="van"> Dr. Ankita Dan</label></p>
	<p><label> <input type="radio" name="taxi" required value="tuktuk"> Dr. Debjit Sinha </label></p>
	</fieldset>
        </div>
      	</div>

      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" class="btn">Submit</button>
      </div>
    </form>
     
</body>
</html>