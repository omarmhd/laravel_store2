@extends('backend.layouts.app')

@section('content')


    <div class="content">
        <div class="clearfix"></div>


        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                  <form action="{{ route('show.statistic') }}" method="get" class="col-md-12">
                    <div class="col-md-9">
                      <div class="form-group">
                        <label>الاحصائيات</label>
      
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="far fa-calendar-alt"></i>
                            </span>
                          </div>
                          <input type="text" name="reservation"  class="form-control float-right" id="reservation">
                        </div>
                        <!-- /.input group -->
                      </div>
                      
                    </div>
                    <div class="col-md-2">
                      
                      <div class="form-group">
                        <label>     </label>
                      <input type="submit" value="تطبيق" class="btn btn-block btn-outline-primary">
                      </div>
                     </div>
                  </form>
             
                  @can('admin')
                  <div class="col-md-4">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        @if(Session::has('products'))
                        <h3>{{Session::get('products')}}</h3>
                      @else
                      <h3>{{$count_products}}</h3>
                      @endif
              
                        <p>المنتجات </p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        @if(Session::has('messages'))
                        <h3>{{Session::get('messages')}}</h3>
                      @else
                      <h3>{{$count_messages}}</h3>
                      @endif
              
              
                        <p>الرسائل</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        @if(Session::has('users'))
                        <h3>{{Session::get('users')}}</h3>
                      @else
                      <h3>{{$count_users}}</h3>
                      @endif
              
                        <p>الاعضاء الجدد</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-md-4">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                      <div class="inner">
                        @if(Session::has('categories'))
                        <h3>{{Session::get('categories')}}</h3>
                      @else
                      <h3>{{$count_category}}</h3>
                      @endif
              
                        <p>الاقسام</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                      </div>
                      <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  @endcan
                @can('access_to_controll_panel_as_a_seller')
                <div class="col-md-4">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      @if(Session::has('products'))
                      <h3>{{Session::get('products')}}</h3>
                    @else
                    <h3>{{$count_products}}</h3>
                    @endif
            
                      <p>المنتجات </p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                @endcan
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      @if(Session::has('orders'))
                      <h3>{{Session::get('orders')}}</h3>
                    @else
                    <h3>{{$count_orders}}</h3>
                    @endif
            
                      <p>الطلبات</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      @if(Session::has('totalBalance'))
                          <h3>{{Session::get('totalBalance')}}</h3>
                        @else
                        <h3>₪{{$totalBalance}}</h3>
                      @endif

                      <p>الارباح</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                    <!-- ./col -->
                {{-- <div class="col-md-6" >
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
                    </div> --}}
                  </div>
                
                
                
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>

@push('js')
<script>
  (function($) {
	$.datepicker.regional['ar'] = {
    monthNames: ['يناير', 'فبراير', 'مارس', 'إبريل', 'مايو', 'يونية',
    'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'نوفمبر', 'ديسمبر'],
    monthNamesShort: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
    dayNames:  ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
    dayNamesShort: ['أحد', 'اثنين', 'ثلاثاء', 'أربعاء', 'خميس', 'جمعة', 'سبت'],
    dayNamesMin: ['أحد', 'اثنين', 'ثلاثاء', 'أربعاء', 'خميس', 'جمعة', 'سبت'],
    dateFormat: 'dd/mm/yyyy', firstDay: 6,
    renderer: $.datepicker.defaultRenderer,
    prevText: '&#x3c;السابق', prevStatus: 'عرض الشهر السابق',
    prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
    nextText: 'التالي&#x3e;', nextStatus: 'عرض الشهر القادم',
    nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: '',
    currentText: 'اليوم', currentStatus: 'عرض الشهر الحالي',
    todayText: 'اليوم', todayStatus: 'عرض الشهر الحالي',
    clearText: 'مسح', clearStatus: 'امسح التاريخ الحالي',
    closeText: 'إغلاق', closeStatus: 'إغلاق بدون حفظ',
    yearStatus: 'عرض سنة آخرى', monthStatus: 'عرض شهر آخر',
    weekText: 'أسبوع', weekStatus: 'أسبوع السنة',
    dayStatus: 'اختر D, M d', defaultStatus: 'اختر يوم',
    isRTL: true
  };
  $.datepicker.setDefaults($.datepicker.regional['ar']);

})(jQuery);
  $(function () {


    // moment.locale('ar');
    //Date range picker
    $('#reservation').daterangepicker({
      timePicker: false,
      timePickerIncrement: 365,
      locale: {
        format:"YYYY-MM-DD",
        "separator": " / ",
        "applyLabel": "تنفيذ",
        "cancelLabel": "الغاء",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        language:'ar',
        "daysOfWeek": [
            "الاحد",
            "الاثنين",
            "الثلاثاء",
            "الاربعاء",
            "الخميس",
            "الجمعة",
            "السبت"
        ],
        "monthNames": [
            "كانون الثاني",
            "شباط",
            "اذار",
            "نيسان",
            "أيار",
            "حزيران",
            "تموز",
            "آب",
            "أيلول",
            "تشرين الأول",
            "تشرين الثاني",
            "كانون الاول"
        ],
        "firstDay": 1
      }
    })
    //Date range picker with time picker
    // $('#reservationtime').daterangepicker({
    //   timePicker: false,
    //   timePickerIncrement: 365,
    //   locale: {
    //     format:"yyyy-mm-dd",
    //     "separator": " - ",
    //     "applyLabel": "Apply",
    //     "cancelLabel": "Cancel",
    //     "fromLabel": "From",
    //     "toLabel": "To",
    //     "customRangeLabel": "Custom",
    //     language:'ar',
    //     "daysOfWeek": [
    //         "الاحد",
    //         "الاثنين",
    //         "الثلاثاء",
    //         "الاربعاء",
    //         "الخميس",
    //         "الجمعة",
    //         "السبت"
    //     ],
    //     "monthNames": [
    //         "كانون الثاني",
    //         "شباط",
    //         "اذار",
    //         "نيسان",
    //         "أيار",
    //         "حزيران",
    //         "تموز",
    //         "آب",
    //         "أيلول",
    //         "تشرين الأول",
    //         "تشرين الثاني",
    //         "كانون الاول"
    //     ],
    //     "firstDay": 1
    //   }
    // })
 


  })

</script>
@endpush
@endsection

