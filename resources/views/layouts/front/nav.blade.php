<header id="main-header">
    <div class="main-header">
       <div class="container-fluid">
          <div class="row">
             <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                   <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse"
                      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <div class="navbar-toggler-icon" data-toggle="collapse">
                         <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                         <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                         <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                      </div>
                   </a>
                   <a class="navbar-brand" href="index.html"> <img class="img-fluid logo" src="{{ asset('front/assets/images/logo.png')}}" loading="lazy"
                      alt="streamit" /> </a>
                   <div class="mobile-more-menu">
                      <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton"
                         data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                      <i class="ri-more-line"></i>
                      </a>
                      <div class="more-menu" aria-labelledby="dropdownMenuButton">
                         <div class="navbar-right position-relative">
                            <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                               <li>
                                  <a href="#" class="search-toggle">
                                  <i class="ri-search-line"></i>
                                  </a>
                                  <div class="search-box iq-search-bar">
                                     <form action="#" class="searchbox">
                                        <div class="form-group position-relative">
                                           <input type="text" class="text search-input font-size-12"
                                              placeholder="type here to search...">
                                           <i class="search-link ri-search-line"></i>
                                        </div>
                                     </form>
                                  </div>
                               </li>
                               <li class="nav-item nav-icon">
                                  <a href="#" class="search-toggle position-relative">
                                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22"
                                        height="22" class="noti-svg">
                                        <path fill="none" d="M0 0h24v24H0z" />
                                        <path
                                           d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                     </svg>
                                     <span class="bg-danger dots"></span>
                                  </a>
                                  <div class="iq-sub-dropdown">
                                     <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body">
                                           <a href="#" class="iq-sub-card">
                                              <div class="media align-items-center">
                                                 <img src="images/notify/thumb-1.jpg" class="img-fluid mr-3" loading="lazy"
                                                    alt="streamit" />
                                                 <div class="media-body">
                                                    <h6 class="mb-0 ">Boop Bitty</h6>
                                                    <small class="font-size-12"> just now</small>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="#" class="iq-sub-card">
                                              <div class="media align-items-center">
                                                 <img src="images/notify/thumb-2.jpg" class="img-fluid mr-3" loading="lazy"
                                                    alt="streamit" />
                                                 <div class="media-body">
                                                    <h6 class="mb-0 ">The Last Breath</h6>
                                                    <small class="font-size-12">15 minutes ago</small>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="#" class="iq-sub-card">
                                              <div class="media align-items-center">
                                                 <img src="images/notify/thumb-3.jpg" class="img-fluid mr-3" loading="lazy"
                                                    alt="streamit" />
                                                 <div class="media-body">
                                                    <h6 class="mb-0 ">The Hero Camp</h6>
                                                    <small class="font-size-12">1 hour ago</small>
                                                 </div>
                                              </div>
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                  <img src="images/user/user.jpg" class="img-fluid avatar-40 rounded-circle" loading="lazy"
                                     alt="user">
                                  </a>
                                  <div class="iq-sub-dropdown iq-user-dropdown">
                                     <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 pl-3 pr-3">
                                           <a href="manage-profile.html" class="iq-sub-card setting-dropdown">
                                              <div class="media align-items-center">
                                                 <div class="right-icon">
                                                    <i class="ri-file-user-line text-primary"></i>
                                                 </div>
                                                 <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Manage Profile</h6>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="setting.html" class="iq-sub-card setting-dropdown">
                                              <div class="media align-items-center">
                                                 <div class="right-icon">
                                                    <i class="ri-settings-4-line text-primary"></i>
                                                 </div>
                                                 <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Settings</h6>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="pricing-plan-1.html" class="iq-sub-card setting-dropdown">
                                              <div class="media align-items-center">
                                                 <div class="right-icon">
                                                    <i class="ri-settings-4-line text-primary"></i>
                                                 </div>
                                                 <div class="media-body ml-3">
                                                    <h6 class="mb-0 ">Pricing Plan</h6>
                                                 </div>
                                              </div>
                                           </a>
                                           <a href="login.html" class="iq-sub-card setting-dropdown">
                                              <div class="media align-items-center">
                                                 <div class="right-icon">
                                                    <i class="ri-logout-circle-line text-primary"></i>
                                                 </div>
                                                 <div class="media-body ml-3">
                                                    <h6 class="mb-0">Logout</h6>
                                                 </div>
                                              </div>
                                           </a>
                                        </div>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <div class="menu-main-menu-container">
                         <ul id="top-menu" class="navbar-nav ml-auto">
                            <li class="menu-item active">
                               <a href="{{ url('')}}">Home</a>
                            </li>
                            <li class="menu-item">
                               <a href="{{ url('all-film')}}">All Film </a>
                            </li>
                            <li class="menu-item">
                               <a href="{{ url('about-us')}}">About Us</a>
                            </li>
                            <li class="menu-item">
                               <a href="{{ url('contact')}}">Contact</a>
                            </li>
                            <li class="menu-item">
                               <a href="#">Pages</a>
                               <ul class="sub-menu">
                                  <li class="menu-item"><a href="{{ url('faq')}}">FAQ</a></li>
                                  <li class="menu-item"><a href="{{ url('privacy-policy')}}">Privacy Policy</a></li>
                               </ul>
                            </li>
                         </ul>
                      </div>
                   </div>
                   <div class="navbar-right menu-right">
                      <ul class="d-flex align-items-center list-inline m-0">
                         <li class="nav-item nav-icon">
                            <a href="#" class="search-toggle device-search">
                            <i class="ri-search-line"></i>
                            </a>
                            <div class="search-box iq-search-bar d-search">
                               <form action="#" class="searchbox">
                                  <div class="form-group position-relative">
                                     <input type="text" class="text search-input font-size-12"
                                        placeholder="type here to search...">
                                     <i class="search-link ri-search-line"></i>
                                  </div>
                               </form>
                            </div>
                         </li>
                         <li class="nav-item nav-icon">
                            <a href="#" class="search-toggle" data-toggle="search-toggle">
                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22"
                                  class="noti-svg">
                                  <path fill="none" d="M0 0h24v24H0z" />
                                  <path
                                     d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                               </svg>
                               <span class="bg-danger dots"></span>
                            </a>
                            <div class="iq-sub-dropdown">
                               <div class="iq-card shadow-none m-0">
                                  <div class="iq-card-body">
                                     <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                           <img src="images/notify/thumb-1.jpg" class="img-fluid mr-3" loading="lazy"
                                              alt="streamit" />
                                           <div class="media-body">
                                              <h6 class="mb-0 ">Boot Bitty</h6>
                                              <small class="font-size-12"> just now</small>
                                           </div>
                                        </div>
                                     </a>
                                     <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                           <img src="images/notify/thumb-2.jpg" class="img-fluid mr-3" loading="lazy"
                                              alt="streamit" />
                                           <div class="media-body">
                                              <h6 class="mb-0 ">The Last Breath</h6>
                                              <small class="font-size-12">15 minutes ago</small>
                                           </div>
                                        </div>
                                     </a>
                                     <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                           <img src="images/notify/thumb-3.jpg" class="img-fluid mr-3" loading="lazy"
                                              alt="streamit" />
                                           <div class="media-body">
                                              <h6 class="mb-0 ">The Hero Camp</h6>
                                              <small class="font-size-12">1 hour ago</small>
                                           </div>
                                        </div>
                                     </a>
                                  </div>
                               </div>
                            </div>
                         </li>
                         <div class="col-xl-3 col-lg-3">
                            <div class="header-meta d-flex align-items-center justify-content-end">
                               </div>
                               <div class="header-meta__social d-flex align-items-center ml-25">
                                @guest
                                <a class="nav-item nav-link" href="{{url('login')}}" style="color: rgb(255, 255, 255);">Login</a>
                                <a class="nav-item nav-link" href="{{url('register')}}"style="color: rgb(255, 255, 255);;">Register</a>
                            @else
                            <a class="nav-item nav-link" href="{{route('logout')}}" style="color: rgb(255, 255, 255);"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"style="color: black;">
                                @csrf
                            </form>
                            @endguest
                               </div>
                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>
