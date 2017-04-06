<html>

<head>
<title>Change Password</title>
  <link rel="stylesheet" type="text/css" href="<? echo base_url()."css/materialize.css"; ?>">

</head>

<body>
  <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>
      <h5 class="indigo-text">Change Your Password</h5>
      <div class="section"></div>

      <div class="container">
        <div class=" teal lighten-5 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

			<div class='row'>
				<span class="block input-icon input-icon-right">
					<input type="password" class="form-control" placeholder="New Password" />
				</span>
            </div>
            <div class='row'>
				<span class="block input-icon input-icon-right">
					<input type="password" class="form-control" placeholder="Repeat password" />
				</span>
            </div>
            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Send</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="welcome.php">Home</a>
    </center>

   
  </main>

</body>

</html>