
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
        label
        {
            display: inline_block;
            width: 200px;
        }
    </style>    


   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
              <!-- partial -->

            <div class="container-fluid page-body-wrapper">  
                
            
                <div class="container" align="center" style="padding-top: 100px;">

                @if(session()->has('message'))
            <div class="alert alert-success">

                <buttontype="button" class="close" data-dismiss="alert">
                    
                </button>
                {{session()->get('message')}}
            </div>    
            @endif
                    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                        <div style="padding:15px;">
                            <label>Doctor Name </label>
                            <input type="text" style="color:black;" name="name" placeholder="write the name" required="">
                        </div>  

                        <div style="padding:15px;">
                            <label>Phone  </label>
                            <input type="number" style="color:black;" name="number" placeholder="write the number" required="">
                        </div>

                        <div style="padding:15px;">
                            <label>Speciality </label>
                            <select name="speciality" style="color: black; width: 200px" required="">
                                <option>--Select--</option>
                                <option value="Skin">Skin </option>
                                <option value="Heart">Heart</option>
                                <option value="Eye">Eye</option>
                                <option value="Nose">Nose</option>
                            </select>    
                        </div>

                        <div style="padding:15px;">
                            <label>Room No  </label>
                            <input type="text" style="color:black;" name="room" placeholder="write the room number" required="">
                        </div>  

                        <div style="padding:15px;">
                            <label>Doctor Image  </label>
                           <input type="file" name="file" required="">
                        </div>

                        <div style="padding:15px;">
                           
                           <input type="submit" class="btn btn-success">
                        </div>

                    </form>        
            </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>