@extends('layouts.admin')

@section('header')
@endsection

@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Customer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form id="brand_form">
              <div class="box-body">


                <div class="form-group">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" name="name" class="form-control" value="{{$customer->name}}" id="exampleInputPassword1" placeholder="Enter Email">
                </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" name="email" class="form-control" value="{{$customer->email}}" id="exampleInputPassword1" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Phone</label>
                      <input type="text" name="phone" class="form-control" value="{{$customer->phone}}" id="exampleInputPassword1" placeholder="Enter Email">
                  </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
			  <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <input type="hidden" name="cust_id" value="{{$customer->id}}">

                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

    </div>
@endsection

@section('footer')
    <script>
	 $(document).ready(function(){
       $("#brand_form").validate({
                rules: {
                    menu: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Please enter  name ",
                    }
                },
                errorPlacement: function(error, element) {
                    console.log(element.attr('name'));
                    $( error ).insertAfter( element);
                },
                submitHandler: function(form) {

                    // do other things for a valid form
                    var formData = $("#brand_form").serialize();
                    $("#messageModalBody").html("Your formhas been successfully submitting...");
                    $('#messageModal').modal('show');
                    $.ajax({
                        type: 'post',
                        url: "{{ URL::route('editCustomer') }}",
                        data:formData,
                        success: function(data){
                            setInterval(function(){
                                $("#messageModalBody").html("Your form has been successfully submited, you are now being redirected ...");
                                $('#messageModal').modal('show');
                                window.location.href="{{URL::route('Customers')}}";
                            }, 1500);

                        }
                    });
                    return false;
                }
            });
        });
    </script>
@endsection
