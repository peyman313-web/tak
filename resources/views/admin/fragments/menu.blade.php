@if(Auth::check())

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{asset(Auth::user()->image)  }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="جستجو">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>
            <li class="active">
                <a href="{{url("app/cms/admin/")}}">
                    <i class="fa fa-dashboard"></i> <span>داشبرد</span>

                </a>

            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>منو</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/menus')}}"><i class="fa fa-circle-o"></i>مشاهده منو ها</a></li>
                    <li><a href="{{url('app/cms/admin/menus/create')}}"><i class="fa fa-circle-o"></i>ایجاد منو </a></li>


                </ul>
            </li>

            <li><a href="{{url('app/cms/admin/sliders')}}"><i class="fa fa-circle-o"></i>مشاهده اسلایدر</a></li>
            <li><a href="{{url('app/cms/admin/fonts')}}"><i class="fa fa-circle-o"></i>آیکون ها</a></li>
            <li><a href="{{url('app/cms/admin/about_us')}}"><i class="fa fa-circle-o"></i>درباره ما</a></li>
            <li><a href="{{url('app/cms/admin/feature')}}"><i class="fa fa-circle-o"></i>ویژگی ها</a></li>
            <li><a href="{{url('app/cms/admin/make_dream/1/edit')}}"><i class="fa fa-circle-o"></i> ویرایش midd</a></li>
            <li><a href="{{url('app/cms/admin/circle_counter')}}"><i class="fa fa-circle-o"></i> پیشرفت کار</a></li>
            <li><a href="{{url('app/cms/admin/video/1/edit')}}"><i class="fa fa-circle-o"></i>ویدئو</a></li>
            <li><a href="{{url('app/cms/admin/landing/1/edit')}}"><i class="fa fa-circle-o"></i>لندینگ پیج</a></li>
            <li><a href="{{url('app/cms/admin/contact/1/edit')}}"><i class="fa fa-circle-o"></i>تماس با ما</a></li>
            <li><a href="{{url('app/cms/admin/logo/1/edit')}}"><i class="fa fa-circle-o"></i>لوگو ها</a></li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>پروژه ها</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/projects')}}"><i class="fa fa-circle-o"></i>مشاهده پروژه ها</a></li>
                    <li><a href="{{url('app/cms/admin/projects/create')}}"><i class="fa fa-circle-o"></i>ایجاد پروژه </a></li>


                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>تب ها</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/tabs')}}"><i class="fa fa-circle-o"></i>مشاهده تب ها</a></li>
                    <li><a href="{{url('app/cms/admin/tabs/create')}}"><i class="fa fa-circle-o"></i>ایجاد تب </a></li>


                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>نظرات مشتریان</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/testimonials')}}"><i class="fa fa-circle-o"></i>مشاهده نظرات </a></li>
                    <li><a href="{{url('app/cms/admin/testimonials/create')}}"><i class="fa fa-circle-o"></i>ایجاد نظر </a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>ویژگی های 2</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/features_2')}}"><i class="fa fa-circle-o"></i>مشاهده ویژگی دوم </a></li>
                    <li><a href="{{url('app/cms/admin/features_2/create')}}"><i class="fa fa-circle-o"></i>ایجاد ویژگی 2 </a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>پلن ها</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/plans')}}"><i class="fa fa-circle-o"></i>مشاهده پلن ها </a></li>
                    <li><a href="{{url('app/cms/admin/plans/create')}}"><i class="fa fa-circle-o"></i>ایجاد پلن </a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>مشتریان ما</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/clients')}}"><i class="fa fa-circle-o"></i>مشاهد همشتریان </a></li>
                    <li><a href="{{url('app/cms/admin/clients/create')}}"><i class="fa fa-circle-o"></i>ایجاد مشتری </a></li>


                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>تیم ما </span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('app/cms/admin/team')}}"><i class="fa fa-circle-o"></i>مشاهده اعضا</a></li>
                    <li><a href="{{url('app/cms/admin/team/create')}}"><i class="fa fa-circle-o"></i>ایجاد شخص جدید </a></li>


                </ul>
            </li>





        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@else
    <script>window.location = "/login";</script>
@endif
