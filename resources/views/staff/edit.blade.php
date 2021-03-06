@extends('main')
@section('content')
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> {{ __("Staff")}}</h1>
        <!-- <p>A free and open source Bootstrap 4 admin template</p> -->
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{route('staff.index')}}">{{ __("Staff")}}</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title d-inline-block">Staff Edit Form</h3>
          
          <form action="{{route('staff.update',$staff->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="oldpassword" value="{{$staff->user->password}}">
           <div class="form-group">
              <label for="InputCityName">{{ __("Name")}}:</label>
              <input class="form-control" id="InputCityName" type="text" placeholder="Enter name" name="name" value="{{$staff->user->name}}">
              <div class="form-control-feedback text-danger"> {{$errors->first('name') }} </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">{{ __("Email address")}}</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email"value="{{$staff->user->email}}">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              <div class="form-control-feedback text-danger"> {{$errors->first('email') }} </div>
            </div>

            <div class="form-group">
              <input type="checkbox" class="mychangepsw" id="cpassw">
              <label for="cpassw">{{ __("Change Password")}}</label>
            </div>

            <div class="form-group psw">
              <label for="exampleInputPassword1">{{ __("Password")}}</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter Password">
              <div class="form-control-feedback text-danger"> {{$errors->first('password') }} </div>
            </div>

            <div class="form-group cpsw">
              <label for="password-confirm">{{ __("Confirm Password")}}</label>
               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
              
            </div>

            <div class="form-group">
              <label for="phone">{{ __("Phone No")}}:</label>
              <input class="form-control" id="phone" type="text" placeholder="Enter Phone No" name="phone" value="{{$staff->phone_no}}">
              <div class="form-control-feedback text-danger"> {{$errors->first('phone') }} </div>
            </div>

            <div class="form-group">
              <label for="address">{{ __("Address")}}:</label>
              <input class="form-control" id="address" type="text" placeholder="Enter Address" name="address" value="{{$staff->address}}">
              <div class="form-control-feedback text-danger"> {{$errors->first('address') }} </div>
            </div>

            <div class="form-group">
              <label for="date">{{ __("Joined Date")}}:</label>
              <input class="form-control" id="date" type="date" name="date" value="{{$staff->joined_date}}">
              <div class="form-control-feedback text-danger"> {{$errors->first('date') }} </div>
            </div>

            <div class="form-group">
              <label for="designation">{{ __("Designation")}}:</label>
              <input class="form-control" id="designation" type="text" placeholder="Enter designation" name="designation" value="{{$staff->designation}}">
              <div class="form-control-feedback text-danger"> {{$errors->first('designation') }} </div>
            </div>

            <div class="form-group">
              <button class="btn btn-primary" type="submit">{{ __("Save")}}</button>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </main>
@endsection 
@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $(".psw").hide();
    $(".cpsw").hide();
    $(".mychangepsw").click(function(){
      if(this.checked){
    $(".psw").show();
    $(".cpsw").show();
      }else{
      $(".psw").hide();
    $(".cpsw").hide();
      }
    })
  })
</script>
@endsection