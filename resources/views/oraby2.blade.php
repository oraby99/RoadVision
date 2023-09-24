<!DOCTYPE html>
<html lang="en" dir="">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Road Vision</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('aassets/vendors/css/vendor.bundle.base.css')}}">

    <!-- endinject -->
    <!-- Plugin css for this page -->
    {{-- <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" /> --}}
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">


    <link rel="stylesheet" href="{{asset('assets/vendors/datatables/datatables.min.css')}}">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
    @yield('css')
  </head>
  <body>
<div class="">



    <div class="row">

      <nav class="sidebar vh-100 " style="color: white; ">
        @include('layouts.sidebar')
      </nav>
        <div class="w-75">
            <div class="card  shadow ">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">Report Number</th>
                                    <th class="border-0">address</th>
                                    <!--<th class="border-0">lat</th>-->
                                    <!--<th class="border-0">long</th>-->
                                    <th class="border-0">severity Level</th>
                                    <th class="border-0">State</th>
                                    <th class="border-0">date</th>
                                    <th class="border-0">Image</th>
                                    <th class="border-0 rounded-end">video</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $report )


                                <tr>

                                    <td> <a href="{{ route('show', $report->id) }}">{{$report->id}}</a></td>

                                    <td>{{$report->address}}</td>
                                    {{-- <td>{{$report->lat}}</td>
                                    <td>{{$report->long}}</td> --}}
                                    <td>{{$report->sevirity['name']}}</td>
                                    <td>{{$report->request['name']}}</td>
                                    <td>{{$report->date}}</td>
                                    <td><img src="{{ $report->imageDetected }}" /></td>

                                    <td>
                                        <video width="77" height="55" controls>
                                            <source src="{{ $report->video }}" type="video/mp4">
                                            <source src="{{ $report->video }}" type="video/ogg">
                                          Your browser does not support the video tag.
                                        </video>
                                    </td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                {!! $reports->links() !!}
            </div>
            {{-- @foreach ($reports as $report )
            {{$report->lat}}
            @endforeach --}}

            {{-- <iframe src="https://maps.google.com/maps?q=24.774265,46.738586&hl=es;z=14&amp;output=embed"
                    style="height:300px; width: 100%;"
                   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe> --}}


      </div>
    </div>
</div>


    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{asset('assets/vendors/jquery-circle-progress/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}} "></script>
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables/datatables.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/js/dashboard.js') }}"></script>
    @yield('js')
  </body>
</html>



