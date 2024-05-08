     <!-- Sidenav Menu -->
     <div class="app-menu">

         <!-- Sidenav Brand Logo -->
         <a href="{{ route('admin.dashboard') }}" class="logo-box">
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
                     <a href="{{ route('admin.dashboard') }}" class="menu-link">
                         <span class="menu-icon"><i class="mgc_home_3_line"></i></span>
                         <span class="menu-text"> Dashboard </span>
                     </a>
                 </li>
                 @if (auth()->user()->can('view apply') or auth()->user()->can('update apply') or auth()->user()->can('delete apply'))
                     <li class="menu-item">
                         <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                             <span class="menu-icon"><i class="mgc_school_fill"></i></span>
                             <span class="menu-text"> Apply List </span>
                             <span class="menu-arrow"></span>
                         </a>

                         <ul class="sub-menu hidden">
                             @can('view apply')
                                 <li class="menu-item">
                                     <a href="{{ route('apply_list') }}" class="menu-link">
                                         <span class="menu-text">List</span>
                                     </a>
                                 </li>
                             @endcan

                         </ul>
                     </li>
                 @endif



                 <li class="menu-title">Component</li>
                 @if (auth()->user()->can('control category') or
                         auth()->user()->can('control sub category') or
                         auth()->user()->can('control campus area') or
                         auth()->user()->can('control course duration') or
                         auth()->user()->can('control course') or
                         auth()->user()->can('control type of institute'))
                     <li class="menu-item">
                         <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                             <span class="menu-icon"><i class="mgc_bling_fill"></i></span>
                             <span class="menu-text"> Elements </span>
                             <span class="menu-arrow"></span>
                         </a>

                         <ul class="sub-menu hidden">
                             @can('control category')
                                 <li class="menu-item">
                                     <a href="{{ route('category') }}" class="menu-link">
                                         <span class="menu-text">Category</span>
                                     </a>
                                 </li>
                             @endcan
                             @can('control sub category')
                                 <li class="menu-item">
                                     <a href="{{ route('sub-category') }}" class="menu-link">
                                         <span class="menu-text">Sub Category</span>
                                     </a>
                                 </li>
                             @endcan

                             @can('control campus area')
                                 <li class="menu-item">
                                     <a href="{{ route('campus') }}" class="menu-link">
                                         <span class="menu-text">Campus Area</span>
                                     </a>
                                 </li>
                             @endcan

                             @can('control course duration')
                                 <li class="menu-item">
                                     <a href="{{ route('course-duration') }}" class="menu-link">
                                         <span class="menu-text">Course Duration</span>
                                     </a>
                                 </li>
                             @endcan

                             @can('control course')
                                 <li class="menu-item">
                                     <a href="{{ route('course') }}" class="menu-link">
                                         <span class="menu-text">Course</span>
                                     </a>
                                 </li>
                             @endcan



                             @can('control type of institute')
                                 <li class="menu-item">
                                     <a href="{{ route('type-of-college') }}" class="menu-link">
                                         <span class="menu-text">Type Of College</span>
                                     </a>
                                 </li>
                             @endcan





                         </ul>
                     </li>
                 @endif
                 @if (auth()->user()->can('view institute') or
                         auth()->user()->can('create institute') or
                         auth()->user()->can('update institute') or
                         auth()->user()->can('delete institute'))
                     <li class="menu-item">
                         <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                             <span class="menu-icon"><i class="mgc_school_fill"></i></span>
                             <span class="menu-text"> Institute </span>
                             <span class="menu-arrow"></span>
                         </a>

                         <ul class="sub-menu hidden">
                             @can('view institute')
                                 <li class="menu-item">
                                     <a href="{{ route('college') }}" class="menu-link">
                                         <span class="menu-text">List</span>
                                     </a>
                                 </li>
                             @endcan


                             @can('create institute')
                                 <li class="menu-item">
                                     <a href="{{ route('create-college') }}" class="menu-link">
                                         <span class="menu-text">Create</span>
                                     </a>
                                 </li>
                             @endcan

                             @can('control course fee')
                                 <li class="menu-item">
                                     <a href="{{ route('course_fee') }}" class="menu-link">
                                         <span class="menu-text">Institute Course Fee</span>
                                     </a>
                                 </li>
                             @endcan


                         </ul>
                     </li>
                 @endif


                 @if (auth()->user()->can('view article') or
                         auth()->user()->can('control blog category') or
                         auth()->user()->can('create article') or
                         auth()->user()->can('update article') or
                         auth()->user()->can('delete article'))
                     <li class="menu-item">
                         <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                             <span class="menu-icon"><i class="mgc_task_2_line"></i></span>
                             <span class="menu-text"> Blogs </span>
                             <span class="menu-arrow"></span>
                         </a>

                         <ul class="sub-menu hidden">

                             @can('view article')
                                 <li class="menu-item">
                                     <a href="{{ route('blogs') }}" class="menu-link">
                                         <span class="menu-text">List</span>
                                     </a>
                                 </li>
                             @endcan


                             @can('control blog category')
                                 <li class="menu-item">
                                     <a href="{{ route('blog-category') }}" class="menu-link">
                                         <span class="menu-text">Blog Category</span>
                                     </a>
                                 </li>
                             @endcan


                         </ul>
                     </li>
                 @endif


                 @can('control settings')
                     <li class="menu-item">
                         <a href="{{ route('settings') }}" class="menu-link">

                             <span class="flex items-center justify-center animate-spin">
                                 <i class="mgc_settings_4_line text-2xl"></i>
                             </span>

                             <span class="menu-text">Settings</span>
                         </a>
                     </li>
                 @endcan
                 @if (auth()->user()->can('control role') or auth()->user()->can('control user'))
                     <li class="menu-item">
                         <a href="javascript:void(0)" data-fc-type="collapse" class="menu-link">
                             <span class="menu-icon"><i class="mgc_contacts_fill"></i></span>
                             <span class="menu-text"> Users Role</span>
                             <span class="menu-arrow"></span>
                         </a>

                         <ul class="sub-menu hidden">
                             @can('control user')
                                 <li class="menu-item">
                                     <a href="{{ route('users') }}" class="menu-link">
                                         <span class="menu-text">Users</span>
                                     </a>
                                 </li>
                             @endcan

                             @can('control role')
                                 <li class="menu-item">
                                     <a href="{{ route('role') }}" class="menu-link">
                                         <span class="menu-text">Roles</span>
                                     </a>
                                 </li>
                             @endcan



                         </ul>
                     </li>
                 @endif

                 @can('control page')
                     <li class="menu-item">
                         <a href="{{ route('pages') }}" class="menu-link">

                             <span class="menu-icon"><i class="mgc_task_2_line"></i></span>

                             <span class="menu-text">Web Pages</span>
                         </a>
                     </li>
                 @endcan



                 @can('control user contact')
                     <li class="menu-item">
                         <a href="{{ route('user_contact') }}" class="menu-link">

                             <span class="menu-icon"><i class="mgc_user_2_fill"></i></span>

                             <span class="menu-text">User Contact</span>
                         </a>
                     </li>
                 @endcan



                 @can('control subscriber')
                     <li class="menu-item">
                         <a href="{{ route('subscriber_list') }}" class="menu-link">

                             <span class="menu-icon"><i class="mgc_certificate_fill"></i></span>

                             <span class="menu-text">Subscriber</span>
                         </a>
                     </li>
                 @endcan

                 @can('control mail settings')
                     <li class="menu-item">
                         <a href="{{ route('mail-control') }}" class="menu-link">

                             <span class="menu-icon"><i class="mgc_mail_fill"></i></span>

                             <span class="menu-text">SMTP Mail Settings</span>
                         </a>
                     </li>
                 @endcan


                 @can('control ads')
                     <li class="menu-item">
                         <a href="{{ route('mail-control') }}" class="menu-link">

                             <span class="menu-icon"><i class="mgc_announcement_fill"></i></span>

                             <span class="menu-text">Ads</span>
                         </a>
                     </li>
                 @endcan


                 @can('control social login')
                     <li class="menu-item">
                         <a href="{{ route('social-login') }}" class="menu-link">

                             <span class="menu-icon"><i class="mgc_target_fill"></i></span>

                             <span class="menu-text">Social Login Settings</span>
                         </a>
                     </li>
                 @endcan






             </ul>
             </li>


         </div>
     </div>
     <!-- Sidenav Menu End  -->
