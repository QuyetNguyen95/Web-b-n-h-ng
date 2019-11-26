<form action="" method="POST">
			@csrf
		    <div class="form-group">
		      <label for="name">Tên admin:</label>
		      <input type="text" class="form-control"  placeholder="Tên admin..." name="name" value="{{old('name',isset($authenticate->name) ? $authenticate->name : '')}}" required="">
		       @if($errors->has('name'))
        			<span class="error-text">
            		{{$errors->first('name')}}
        			</span>
    			@endif
		    </div>
		    <div class="form-group">
		      <label for="name">Email:</label>
		      <input type="text" class="form-control" id="email" placeholder="Email..." value="{{old('email',isset($authenticate->email) ? $authenticate->email : '')}}" name="email" required="">
		       @if($errors->has('email'))
        			<span class="error-text">
            		{{$errors->first('email')}}
        			</span>
    			@endif
		    </div>
		    <div class="form-group">
		      <label for="name">Phone: </label>
		      <input type="text" class="form-control" id="phone" placeholder="Số điện thoại..." name="phone" value="{{old('phone',isset($authenticate->phone) ? $authenticate->phone : '')}}" required="">
		    </div>
		    <div class="form-group">
		      <label for="name">Password: </label>
		      <input type="password" class="form-control" id="email" placeholder="Password..." name="password" value="{{-- {{old('password',isset($authenticate->password) ? $authenticate->password : '')}} --}}" required="">
		    </div>
		    <button type="submit" class="btn btn-success">Lưu thông tin</button>
  		</form>