
@extends('layouts.app')
@extends('menu')
<body class="btn-danger">
<div height="600px"><img src="../Img/blood-cells.jpg" style="margin-top:0%; height:90%;width:60%">

  		

    <div class=" container" style="width:35%;background-color:white; margin-left:61.4%;top:90px;color:black;
    position:absolute;">
    <div class="card-body" style="20%">
  				
  					<form  action="{{route('projects.store')}}" method="post">
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" name="username" class="form-control">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password"  name="password" class="form-control">
  						</div>
  						<button class="btn-sm btn-block btn-wave col-md-4 btn-primary" style=" margin-left:10%;width:60px">Login</button>
                          
                      </form>
                      <a class=" btn btn-info" style=" margin-left:30%;"href="{{ route('projects.index') }}" title="Go back">Reset</a>
  			</div></div>
  			</div>
  		</div>
          </div>
          

   

  </main>
  </div>
  
  </body>
