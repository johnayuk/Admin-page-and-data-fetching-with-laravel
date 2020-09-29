@extends('layouts.master')


@section('title')
Registered Roles
@endsection


@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles</h4>
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>phone</th>
                      <th>usertype</th>
                      <th>email</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    <thead class=" text-primary">
                     
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                       <tr>
                
                       <td>{{$user->name}}</td>
                       <td>{{$user->phone}}</td>
                       <td>{{$user->user_type}}</td>
                       <td>{{$user->email}}</td>
                    <td>
                    <a href="/role-edit/{{$user->id}}" class="btn btn-success">Edit</a>

                    </td>
                    <td>
                       <form action="" method="get">
                           <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                     </td>
                
                       </tr>
                       @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('script')
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
@endsection



