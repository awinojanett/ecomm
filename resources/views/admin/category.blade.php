<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

    input[type='text']
    {
        width: 300px;
        height: 40px;
    }

        .page-header {
      text-align: center; /* Centers the text "Add Category" */
    }

    .design {
      display: flex;
      justify-content: center;  /* Centers the form horizontally */
      align-items: center;      /* Centers the form vertically if necessary */
      flex-direction: column;   /* Ensures form elements stack vertically */
    }

    .tb-design
    {
      padding-top: 50px;
      padding-bottom: 50px;
      padding-left: 100px;
      padding-right: 100px;
    }

    .tb-design thead th {
      background-color: white;
      color: black;
    }

        .tb-design table {
      border-collapse: collapse;  /* Ensures borders between columns appear correctly */
    }

  

    .smaller-swal {
    width: 300px !important;  /* Adjust width */
    height: auto;  /* Auto height */
    padding: 10px; /* Adjust padding */
    }


    </style>
    
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1 style="color: white">Add Category</h1>

            <div class="design">
                
            <form action="{{url('add_category')}}" method="POST">
                @csrf
                <div>
                    <input type="text" name="category">
                    <input class="btn btn-primary" type="submit" value="Add Category">
                </div>
            </form>
            </div>  
            
            <div class="tb-design">
                    <table class="table table-striped table-dark">
                      <thead>
                        <tr>
                          <th scope="col">Category Name</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      

                  @foreach ($data as $data)
                    <tr>
                        <td>{{$data->category_name}}</td>
                        <td>
                          <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
          </div>
      </div>
    </div>
    <!-- JavaScript files-->

    <script type="text/javascript">
      function confirmation(ev) {
          ev.preventDefault(); // Prevent the default action
          var urlToRedirect = ev.currentTarget.getAttribute('href'); // Get the href attribute value
          console.log(urlToRedirect); // Log the URL to ensure it’s correct
  
          // Use SweetAlert to show confirmation dialog
          swal({
              title: "Are you sure you want to delete this?",
              text: "Once deleted, you will not be able to recover this item!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
              customClass: {
                popup: 'smaller-swal',  // Custom class for smaller size
              }
          }).then((willDelete) => {
              if (willDelete) {
                  window.location.href = urlToRedirect; // Redirect if confirmed
              }
          });
      }
  </script>
  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>