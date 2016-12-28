<form action="create_user" method="post" accept-charset="utf-8">
  <div class="form-group">
    <label for="username">Username</label>
    <input id="username" type="text" name="username" value="" class="form-control" placeholder="Username"/>
    <p class="help-block">You will use this to Login</p>

    <label for="password">Password</label>
    <input type="password" id="password" class="form-control" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="firstname">First Name</label>
    <input id="firstname" type="text" name="firstname" value="" class="form-control" placeholder="First Name"/>

    <label for="lastname">Last Name</label>
    <input id="lastname" type="text" name="lastname" value="" class="form-control" placeholder="Last Name"/>

    <label for="email1">Email address</label>
    <input type="email" name="firstname" class="form-control" id="email" placeholder="Email">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

