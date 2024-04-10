     <!-- Sidenav Menu -->
     <div class="app-menu">

         <!-- Sidenav Brand Logo -->
         <a href="{{ route('dashboard') }}" class="logo-box">
             <!-- Light Brand Logo -->
             <div class="logo-light">
                 <img src="{{ asset('storage/app/' . $settings->logo) }}" class="logo-lg h-6" alt="Light logo">
                 <img src="{{ asset('storage/app/' . $settings->icon) }}" class="logo-sm" alt="Small logo">
             </div>

             <!-- Dark Brand Logo -->
             <div class="logo-dark">
                 <img src="{{ asset('storage/app/' . $settings->logo) }}" class="logo-lg h-6" alt="Dark logo">
                 <img src="{{ asset('storage/app/' . $settings->icon) }}" class="logo-sm" alt="Small logo">
             </div>
         </a>

         <!-- Sidenav Menu Toggle Button -->
         <button id="button-hover-toggle" class="absolute top-5 end-2 rounded-full p-1.5">
             <span class="sr-only">Menu Toggle Button</span>
             <i class="mgc_round_line text-xl"></i>
         </button>

         <!--- Menu -->
         <div class="srcollbar" data-simplebar>
             <ul class="menu" data-fc-type="accordion">
                 <li class="menu-title">Menu</li>

                 <li class="menu-item">
                     <a href="{{ route('dashboard') }}" class="menu-link">
                         <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                         <span class="menu-text"> Dashboard </span>
                     </a>
                 </li>



                 <li class="menu-item">
                     <a href="{{ route('blogs') }}" class="menu-link">
                         <span class="menu-icon"><i class="mgc_task_2_line"></i></span>
                         <span class="menu-text">Blogs</span>
                     </a>
                 </li>
                 <li class="menu-title">Component</li>
                 <li class="menu-item">
                     <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                         <span class="menu-icon"><i class="mgc_bling_fill"></i></span>
                         <span class="menu-text"> Elements </span>
                         <span class="menu-arrow"></span>
                     </a>

                     <ul class="sub-menu hidden">
                         <li class="menu-item">
                             <a href="{{ route('category') }}" class="menu-link">
                                 <span class="menu-text">Category</span>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('sub-category') }}" class="menu-link">
                                 <span class="menu-text">Sub Category</span>
                             </a>
                         </li>

                         <li class="menu-item">
                             <a href="{{ route('campus') }}" class="menu-link">
                                 <span class="menu-text">Campus Area</span>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('course-duration') }}" class="menu-link">
                                 <span class="menu-text">Course Duration</span>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('course') }}" class="menu-link">
                                 <span class="menu-text">Course</span>
                             </a>
                         </li>


                         <li class="menu-item">
                             <a href="{{ route('type-of-college') }}" class="menu-link">
                                 <span class="menu-text">Type Of College</span>
                             </a>
                         </li>


                     </ul>
                 </li>

                 <li class="menu-item">
                     <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                         <span class="menu-icon"><i class="mgc_school_fill"></i></span>
                         <span class="menu-text"> Institute </span>
                         <span class="menu-arrow"></span>
                     </a>

                     <ul class="sub-menu hidden">
                         <li class="menu-item">
                             <a href="{{ route('college') }}" class="menu-link">
                                 <span class="menu-text">List</span>
                             </a>
                         </li>
                         <li class="menu-item">
                             <a href="{{ route('create-college') }}" class="menu-link">
                                 <span class="menu-text">Create</span>
                             </a>
                         </li>


                     </ul>
                 </li>
                 <li class="menu-item">
                     <a href="{{ route('settings') }}" class="menu-link">
                         <span class="menu-icon"><i class="mgc_settings_5_fill"></i></span>
                         <span class="menu-text">Settings</span>
                     </a>
                 </li>

             </ul>
             </li>


         </div>
     </div>
     <!-- Sidenav Menu End  -->
