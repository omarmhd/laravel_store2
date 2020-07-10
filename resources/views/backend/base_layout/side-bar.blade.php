  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('Dashboard.index') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">لوحة التحكم</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://secure.gravatar.com/avatar/5ffa2a1ffeb767c60ab7e1052e385d5c?s=52&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
             <a href="#" class="d-block">{{auth()->user()->name}}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

                 <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                      <i class="fa fa-product-hunt"></i>
                    <p>
                      {{ __('dashboard.attributes.prodcuts') }}
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">

                          <li class="nav-item">
                          <a href="{{ route('product.index') }}" class="nav-link">
                              <i class="fa fa-product-hunt"></i>
                           <p>{{ __('dashboard.attributes.show') }} {{ __('dashboard.attributes.prodcuts') }}</p>
                          </a>
                        </li>


                  </ul>
                </li>
  
                  @can('access_to_controll_panel_as_a_seller')
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-product-hunt"></i>
                      <p>
                        {{ __('dashboard.attributes.orders') }}
                        <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">

                            <li class="nav-item">
                            <a href="{{ route('user.order') }}" class="nav-link">
                                <i class="fa fa-product-hunt"></i>
                             <p>{{ __('dashboard.attributes.show') }} {{ __('dashboard.attributes.orders') }}</p>
                            </a>
                          </li>


                    </ul>
                  </li> 
                  @endcan
             
{{-- 
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link">
                        <i class="fa fa-cog"></i>
                      <p>
                        {{ __('dashboard.attributes.setting') }}
                        {{-- <i class="right fa fa-angle-left"></i> --}}
                      {{-- </p>
                    </a>
                 </li>  --}}
                 
                 @can('admin')
                 <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                      <i class="fa fa-product-hunt"></i>
                    <p>
                      {{ __('dashboard.attributes.categories') }}
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>

                 <ul class="nav nav-treeview">

                      <li class="nav-item">
                      <a href="{{ route('category.index') }}" class="nav-link">
                          <i class="fa fa-product-hunt"></i>
                      <p>{{ __('dashboard.attributes.show') }} {{ __('dashboard.attributes.categories') }}</p>
                      </a>
                  </li>


              </ul>
          </li>
          <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                      <i class="fa fa-product-hunt"></i>
                    <p>
                      {{ __('dashboard.attributes.orders') }}
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>

                <ul class="nav nav-treeview">

                      <li class="nav-item">
                      <a href="{{ route('orders.roles') }}" class="nav-link">
                          <i class="fa fa-product-hunt"></i>
                      <p>{{ __('dashboard.attributes.show') }} {{ __('dashboard.attributes.orders') }}</p>
                      </a>
                  </li>


              </ul>
          </li>
                 <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                      <i class="fa fa-users"></i>
                    <p>
                      {{ __('dashboard.attributes.users') }}
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>

                 <ul class="nav nav-treeview">

                      <li class="nav-item">
                      <a href="{{ route('user.index') }}" class="nav-link">
                          <i class="fa fa-users"></i>
                      <p>{{ __('dashboard.attributes.show') }} {{ __('dashboard.attributes.users') }}</p>
                      </a>
                  </li>


              </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-inbox"></i>
              <p>
                {{ __('dashboard.attributes.messages') }}
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

           <ul class="nav nav-treeview">

                <li class="nav-item">
                <a href="{{ route('message.index') }}" class="nav-link">
                    <i class="fa fa-inbox"></i>
                <p>{{ __('dashboard.attributes.show') }} {{ __('dashboard.attributes.messages') }}</p>
                </a>
            </li>


        </ul>
    </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="fa fa-user-tag"></i>
              <p>
                {{ __('dashboard.attributes.roles') }}
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>

           <ul class="nav nav-treeview">

                <li class="nav-item">
                <a href="{{ route('role.index') }}" class="nav-link">
                    <i class="fa fa-user-tag"></i>
                <p>{{ __('dashboard.attributes.show') }} {{ __('dashboard.attributes.roles') }}</p>
                </a>
            </li>


        </ul>
    </li>
               
                 <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="fa fa-file-word"></i>
                    <p>
                      {{ __('dashboard.attributes.pages') }}
                      <i class="right fa fa-angle-left"></i>
                    </p>
                  </a>

                 <ul class="nav nav-treeview">

                      <li class="nav-item">
                      <a href="{{ route('contact.edit') }}" class="nav-link">
                        <i class="fa fa-address-book"></i>
                      <p>اتصل بنا</p>
                      </a>
                  </li>


              </ul>
              <ul class="nav nav-treeview">

                <li class="nav-item">
                <a href="{{ route('about.edit') }}" class="nav-link">
                  <i class="fa fa-address-card"></i>
                <p>من نحن </p>
                </a>
            </li>


        </ul>
          </li>
                 @endcan

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>
