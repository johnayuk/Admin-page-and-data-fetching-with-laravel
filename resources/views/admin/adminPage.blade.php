@extends('layouts.master')


@section('title')
Admin
@endsection


@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>country</th>
                      <th>city</th>
                    <thead class=" text-primary">
                     
                    </thead>
                    <tbody>
                       <tr>

                    <td>nig</td>
                    <td>aks</td>
                    <td>wer</td>
                    <td>dd</td>

                       </tr>
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



