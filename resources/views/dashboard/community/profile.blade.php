<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="margin-left: 17%;">


    <div class="navbar-menu-wrapper d-flex align-items-stretch" >
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="">
            @section('dashboard')
              profile
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
<div>

    <div class="row">
        <div class="col-12 col-xl-12">

            <div class="card card-body border-0 shadow mb-4">
               <div style="margin-left: 22%">
                <h6 class="">Overview</h6>
                <h6 style="" class="">profile</h6>
               </div>
               <br>
               <br>
               <br>
               <div class="row">
                <span style="margin-left: 2%">general</span>
               <span style="margin-left: 2%">Notification</span>
               </div>
               <hr>

                <span style="margin-left: 1%" class="d-flex align-items-center">
                    <img src="../assets/img/team/profile-picture-1.jpg" style="width: 30px ; height: 30px;" class="avatar rounded-circle me-3"
                        alt="Avatar">
                    <div style="margin-left: 1%" class="d-block">
                        <span class="fw-bold">Admin</span>
                        <div class="small text-gray">admin@volt.com</div>
                    </div>
                </span>

               <hr>
                <form wire:submit.prevent="save" action="#" method="POST" style="margin-top: 4%">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="first_name">First Name</label>
                                <input wire:model="user.first_name" class="form-control" id="first_name" type="text"
                                    placeholder="Enter your first name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="last_name">Last Name</label>
                                <input wire:model="user.last_name" class="form-control" id="last_name" type="text"
                                    placeholder="Also your last name">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">position</label>
                                <input wire:model="user.email" class="form-control" id="email" type="email"
                                    placeholder="position" >
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input wire:model="user.email" class="form-control" id="email" type="email"
                                    placeholder="name@company.com" disabled>
                            </div>
                        </div>

                    </div>

                    <div class="mt-3">
                        <button type="submit" style="opacity: 0.5" class="btn btn-primary mt-2 animate-up-2">Save </button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

@endsection
@section('js')

@endsection
