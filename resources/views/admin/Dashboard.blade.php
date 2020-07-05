


@extends('admin/master_layout')


@section('content')


<div class="row">
    <div class="col-md-4">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{$count_products}}</h3>

          <p>New product</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{$count_messages}}</h3>

          <p>Messages</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{$count_users}}</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-md-4">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{$count_category}}</h3>

          <p>Categories</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
<div class="col-md-6" >
    <div class="card bg-gradient-success">
        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

          <h3 class="card-title">
            <i class="far fa-calendar-alt"></i>
            Calendar
          </h3>
          <!-- tools card -->
          <div class="card-tools">
            <!-- button with a dropdown -->
            <div class="btn-group">
              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                <i class="fas fa-bars"></i></button>
              <div class="dropdown-menu" role="menu">
                <a href="#" class="dropdown-item">Add new event</a>
                <a href="#" class="dropdown-item">Clear events</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">View calendar</a>
              </div>
            </div>
            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pt-0">
          <!--The calendar -->
          <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">June 2020</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="05/31/2020" class="day old weekend">31</td><td data-action="selectDay" data-day="06/01/2020" class="day">1</td><td data-action="selectDay" data-day="06/02/2020" class="day">2</td><td data-action="selectDay" data-day="06/03/2020" class="day">3</td><td data-action="selectDay" data-day="06/04/2020" class="day">4</td><td data-action="selectDay" data-day="06/05/2020" class="day">5</td><td data-action="selectDay" data-day="06/06/2020" class="day weekend">6</td></tr><tr><td data-action="selectDay" data-day="06/07/2020" class="day weekend">7</td><td data-action="selectDay" data-day="06/08/2020" class="day">8</td><td data-action="selectDay" data-day="06/09/2020" class="day">9</td><td data-action="selectDay" data-day="06/10/2020" class="day">10</td><td data-action="selectDay" data-day="06/11/2020" class="day">11</td><td data-action="selectDay" data-day="06/12/2020" class="day">12</td><td data-action="selectDay" data-day="06/13/2020" class="day active today weekend">13</td></tr><tr><td data-action="selectDay" data-day="06/14/2020" class="day weekend">14</td><td data-action="selectDay" data-day="06/15/2020" class="day">15</td><td data-action="selectDay" data-day="06/16/2020" class="day">16</td><td data-action="selectDay" data-day="06/17/2020" class="day">17</td><td data-action="selectDay" data-day="06/18/2020" class="day">18</td><td data-action="selectDay" data-day="06/19/2020" class="day">19</td><td data-action="selectDay" data-day="06/20/2020" class="day weekend">20</td></tr><tr><td data-action="selectDay" data-day="06/21/2020" class="day weekend">21</td><td data-action="selectDay" data-day="06/22/2020" class="day">22</td><td data-action="selectDay" data-day="06/23/2020" class="day">23</td><td data-action="selectDay" data-day="06/24/2020" class="day">24</td><td data-action="selectDay" data-day="06/25/2020" class="day">25</td><td data-action="selectDay" data-day="06/26/2020" class="day">26</td><td data-action="selectDay" data-day="06/27/2020" class="day weekend">27</td></tr><tr><td data-action="selectDay" data-day="06/28/2020" class="day weekend">28</td><td data-action="selectDay" data-day="06/29/2020" class="day">29</td><td data-action="selectDay" data-day="06/30/2020" class="day">30</td><td data-action="selectDay" data-day="07/01/2020" class="day new">1</td><td data-action="selectDay" data-day="07/02/2020" class="day new">2</td><td data-action="selectDay" data-day="07/03/2020" class="day new">3</td><td data-action="selectDay" data-day="07/04/2020" class="day new weekend">4</td></tr><tr><td data-action="selectDay" data-day="07/05/2020" class="day new weekend">5</td><td data-action="selectDay" data-day="07/06/2020" class="day new">6</td><td data-action="selectDay" data-day="07/07/2020" class="day new">7</td><td data-action="selectDay" data-day="07/08/2020" class="day new">8</td><td data-action="selectDay" data-day="07/09/2020" class="day new">9</td><td data-action="selectDay" data-day="07/10/2020" class="day new">10</td><td data-action="selectDay" data-day="07/11/2020" class="day new weekend">11</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2020</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month active">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year active">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade active" data-selection="2016">2010</span><span data-action="selectDecade" class="decade" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>



  @endsection
