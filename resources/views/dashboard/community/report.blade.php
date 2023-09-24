<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="margin-left: 17%;">


    <div class="navbar-menu-wrapper d-flex align-items-stretch" >
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="">
            @section('dashboard')
              report
            @endsection
       </span>
      </button>
      <div class="search-field d-none d-xl-block" style="margin-left: 50%">
        <form class="d-flex align-items-center h-100" action="#" style="margin-left: 15%">
          <div class="input-group" style="border-radius: 10px">
            <div class="input-group-prepend bg-transparent">
              <i class="input-group-text border-0 mdi mdi-magnify"></i>
            </div>
            <input type="text" style="border-radius: 10px" class="form-control bg-transparent border-0" placeholder="Search ">
          </div>
        </form>
      </div>
      <ul class="navbar-nav ">

        {{-- <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="nav-profile-img">
              <img src="assets/images/faces/face28.png" alt="image">
            </div>
            <div class="nav-profile-text">
              <p class="mb-1 text-black">Henry Klein</p>
            </div>
          </a>
          <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
            <div class="p-3 text-center bg-primary">
                <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
            </div>
            <div class="p-2">
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                <span>Profile</span>
                <span class="p-0">
                  <i class="mdi mdi-account-outline ml-1"></i>
                </span>
              </a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                <span>Log Out</span>
                <i class="mdi mdi-logout ml-1"></i>
              </a>
            </div>
          </div>
        </li> --}}
        <li class="nav-item dropdown" style="margin-left: 80%">
          <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="mdi mdi-email-outline"></i>
            <span class="count-symbol bg-success"></span>
          </a>
          {{-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="assets/images/faces/face4.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                <p class="text-gray mb-0"> 1 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                <p class="text-gray mb-0"> 15 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                <p class="text-gray mb-0"> 18 Minutes ago </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">4 new messages</h6>
          </div> --}}
        </li>
        <li class="nav-item dropdown" style="margin-left: 15%">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count-symbol bg-danger"></span>
          </a>
          {{-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                  <i class="mdi mdi-calendar"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                  <i class="mdi mdi-settings"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                  <i class="mdi mdi-link-variant"></i>
                </div>
              </div>
              <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
          </div> --}}
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
@extends('dashboard')
@section('content')
<br>
<br>
<br>
<div class="card  shadow mt-5">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">Report Number</th>
                        <th class="border-0">Name</th>
                        <th class="border-0">City</th>
                        <th class="border-0">Address</th>
                        <th class="border-0">Date</th>
                        <th class="border-0">Damage type </th>
                        <th class="border-0 rounded-end">Severity level</th>
                        <th class="border-0">Image</th>
                        <th class="border-0 rounded-end">State</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td  class="">#3333673</td>
                        <td class="">Fahad </td>
                        <td  class="">Jeddah</td>
                        <td class="">Al-Nakhail </td>
                        <td  class="">12/2/2023</td>
                        <td class="">pothole </td>
                        <td  class="">High</td>
                        <td class="">Processing </td>
                        <td class="">Processing </td>
                    </tr>
                    <tr>
                        <td  class="">#3333673</td>
                        <td class="">Fahad </td>
                        <td  class="">Jeddah</td>
                        <td class="">Al-Nakhail </td>
                        <td  class="">12/2/2023</td>
                        <td class="">pothole </td>
                        <td  class="">High</td>
                        <td class="">Processing </td>
                        <td class="">Processing </td>
                    </tr>
                    <tr>
                        <td  class="">#3333673</td>
                        <td class="">Fahad </td>
                        <td  class="">Jeddah</td>
                        <td class="">Al-Nakhail </td>
                        <td  class="">12/2/2023</td>
                        <td class="">pothole </td>
                        <td  class="">High</td>
                        <td class="">Processing </td>
                        <td class="">Processing </td>
                    </tr>
                    <tr>
                        <td  class="">#3333673</td>
                        <td class="">Fahad </td>
                        <td  class="">Jeddah</td>
                        <td class="">Al-Nakhail </td>
                        <td  class="">12/2/2023</td>
                        <td class="">pothole </td>
                        <td  class="">High</td>
                        <td class="">Processing </td>
                        <td class="">Processing </td>
                    </tr>
                    <tr>
                        <td  class="">#3333673</td>
                        <td class="">Fahad </td>
                        <td  class="">Jeddah</td>
                        <td class="">Al-Nakhail </td>
                        <td  class="">12/2/2023</td>
                        <td class="">pothole </td>
                        <td  class="">High</td>
                        <td class="">Processing </td>
                        <td class="">Processing </td>
                    </tr>
                    <tr>
                        <td  class="">#3333673</td>
                        <td class="">Fahad </td>
                        <td  class="">Jeddah</td>
                        <td class="">Al-Nakhail </td>
                        <td  class="">12/2/2023</td>
                        <td class="">pothole </td>
                        <td  class="">High</td>
                        <td class="">Processing </td>
                        <td class="">Processing </td>
                    </tr>
                    <tr>
                        <td  class="">#3333673</td>
                        <td class="">Fahad </td>
                        <td  class="">Jeddah</td>
                        <td class="">Al-Nakhail </td>
                        <td  class="">12/2/2023</td>
                        <td class="">pothole </td>
                        <td  class="">High</td>
                        <td class="">Processing </td>
                        <td class="">Processing </td>
                    </tr>
                    <tr>
                        <td  class="">#3333673</td>
                        <td class="">Fahad </td>
                        <td  class="">Jeddah</td>
                        <td class="">Al-Nakhail </td>
                        <td  class="">12/2/2023</td>
                        <td class="">pothole </td>
                        <td  class="">High</td>
                        <td class="">Processing </td>
                        <td class="">Processing </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-end">
    <nav aria-label="Page navigation example">
        <ul class="pagination mb-0">
            <li class="page-item">
                <a class="page-link" href="#">Previous</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
    {{-- <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div> --}}
</div>
@endsection
@section('js')

@endsection
