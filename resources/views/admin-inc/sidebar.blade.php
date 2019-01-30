<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ asset('img/sidebar-1.jpg') }}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="http://www.facebook.com/misview" class="simple-text logo-mini">
            MIS
        </a>
        <a href="http://www.facebook.com/misview" class="simple-text logo-normal">
            MIS Community
        </a>
    </div>
    <div class="sidebar-wrapper">
        @if(!Auth::guest())
        <div class="user">
            <div class="photo">
                <img src="<?php 
                
                    echo asset('img/default-avatar.png');
                
                 ?>" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{ auth()->user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        {{--  <li>
                            <a href="#">
                                <span class="sidebar-mini">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini">EP</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>  --}}
                        <li>
                            <a href="/admin/change-password">
                                <span class="sidebar-mini">CP</span>
                                <span class="sidebar-normal">Change Password</span>
                            </a>
                        </li>
                        <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" style="text-decoration:none;">
                                    <span class="sidebar-mini">L</span>
                                    <span class="sidebar-normal">Log out</span>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                </a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
        @endif
        @if (!Auth::guest())
        <ul class="nav">
            <li class="{{  Request::url() == url('/admin/dashboard') ? 'active' : '' }}">
                <a href=" /admin/dashboard ">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{  Request::url() == url('/admin/manage-site') ? 'active' : '' }}">
                <a href="/admin/manage-site">
                    <i class="material-icons">verified_user</i>
                    <p>Manage Site</p>
                </a>
            </li>
            <li class="{{  Request::url() == url('/admin/add-new-category') ? 'active' : '' }} {{  Request::url() == url('/admin/manage-categories') ? 'active' : '' }}">
                <a data-toggle="collapse" href="#company">
                    <i class="material-icons">widgets</i>
                    <p>Category
                        <b class="caret"></b>
                    </p>
                </a>
              
                <div class="collapse" id="company">
                        <ul class="nav">
                                <li class="{{  Request::url() == url('/admin/add-new-category') ? 'active' : '' }}">
                                    <a href="/admin/add-new-category">
                                        <span class="sidebar-mini">AN</span>
                                        <span class="sidebar-normal">Add New</span>
                                    </a>
                                </li>
                            <li class="{{  Request::url() == url('/admin/manage-categories') ? 'active' : '' }}">
                                <a href="/admin/manage-categories">
                                    <span class="sidebar-mini">MA</span>
                                    <span class="sidebar-normal">Manage All</span>
                                </a>
                            </li>
                          
                        </ul>
                    </div>

            </li>

            <li class="{{  Request::url() == url('/admin/add-new-subcategory') ? 'active' : '' }} {{  Request::url() == url('/admin/manage-subcategories') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#news">
                        <i class="material-icons">apps</i>
                        <p>SubCategory
                            <b class="caret"></b>
                        </p>
                    </a>
                  
                    <div class="collapse" id="news">
                            <ul class="nav">
                                <li class="{{  Request::url() == url('/admin/add-new-subcategory') ? 'active' : '' }}">
                                    <a href="/admin/add-new-subcategory">
                                        <span class="sidebar-mini">AN</span>
                                        <span class="sidebar-normal">Add New</span>
                                    </a>
                                </li>
                                <li class="{{  Request::url() == url('/admin/manage-subcategories') ? 'active' : '' }}">
                                        <a href="/admin/manage-subcategories">
                                            <span class="sidebar-mini">M</span>
                                            <span class="sidebar-normal">Manage All</span>
                                        </a>
                                    </li>
                                
                            </ul>
                        </div>
    
                </li>

            <li class="{{  Request::url() == url('/admin/add-new-product') ? 'active' : '' }} {{  Request::url() == url('/admin/manage-products') ? 'active' : '' }}">               
                        <a data-toggle="collapse" href="#jobs">
                            <i class="material-icons">place</i>
                            <p>Product
                                <b class="caret"></b>
                            </p>
                        </a>
                      
                        <div class="collapse" id="jobs">
                                <ul class="nav">
                                    <li class="{{  Request::url() == url('/admin/add-new-product') ? 'active' : '' }}">
                                        <a href="/admin/add-new-product">
                                            <span class="sidebar-mini">AN</span>
                                            <span class="sidebar-normal">Add New</span>
                                        </a>
                                    </li>
                                    <li class="{{  Request::url() == url('/admin/manage-products') ? 'active' : '' }}">
                                        <a href="/admin/manage-products">
                                            <span class="sidebar-mini">M</span>
                                            <span class="sidebar-normal">Manage All</span>
                                        </a>
                                    </li>
                                </ul>             
                            </div>
        
                </li>
            <li class="{{  Request::url() == url('/admin/add-new-topbanner') ? 'active' : '' }} {{  Request::url() == url('/admin/manage-banners') ? 'active' : '' }}">               
                        <a data-toggle="collapse" href="#gallery">
                            <i class="material-icons">image</i>
                            <p>Top Banner
                                <b class="caret"></b>
                            </p>
                        </a>
                      
                        <div class="collapse" id="gallery">
                                <ul class="nav">
                                    <li class="{{  Request::url() == url('/admin/add-new-topbanner') ? 'active' : '' }}">
                                        <a href="/admin/add-new-topbanner">
                                            <span class="sidebar-mini">AN</span>
                                            <span class="sidebar-normal">Add New</span>
                                        </a>
                                    </li>
                                    <li class="{{  Request::url() == url('/admin/manage-banners') ? 'active' : '' }}">
                                        <a href="/admin/manage-topbanners">
                                            <span class="sidebar-mini">M</span>
                                            <span class="sidebar-normal">Manage All</span>
                                        </a>
                                    </li>
                                </ul>             
                            </div>
        
                </li>

                <li class="{{  Request::url() == url('/admin/manage-ads') ? 'active' : '' }}">
                    <a href=" /admin/manage-ads ">
                        <i class="material-icons">adjust</i>
                        <p>Manage Ads</p>
                    </a>
                </li>

        </ul>
        @endif
    </div>
</div>