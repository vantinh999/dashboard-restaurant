@extends('layouts.app')


@section('title')
    Dashboard 
@endsection

@section('content')
  <div class="content-area">
     <section class="dashboard-counts section-padding">
          <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                  <div class="rad-info-box rad-txt-success card">
                  <i class="fa fa-users"></i>
                    <span class="heading">Khách hàng</span>
                    <span class="value"><span>99</span></span>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="rad-info-box rad-txt-primary card">
                  <i class="fa fa-money"></i>
                    <span class="heading">Bàn đã đặt</span>
                    <span class="value"><span>30</span></span>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="rad-info-box rad-txt-danger card">
                  <i class="fa fa-bandcamp"></i>
                    <span class="heading">Ý kiến phản hồi</span>
                    <span class="value"><span>15</span></span>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="rad-info-box card">
                  <i class="fa fa-shopping-bag"></i>
                    <span class="heading">Đang chờ duyệt</span>
                    <span class="value"><span>15</span></span>
                  </div>
                </div>
            </div>
             
          </div>
        </section>
        <!-- Header Section-->
        <section class="dashboard-header section-padding">
          <div class="container">
            <div class="row d-flex align-items-md-stretch">
              
              <!-- Pie Chart-->
              <div class="col-lg-6 col-md-6 ">
                <div class="card project-progress">
                  <h2 class="display h4">Biểu đồ hình thức tiếp cận khách hàng</h2>
                  <div class="pie-chart">
                    <canvas id="pieChart" width="300" height="300"> </canvas>
                  </div>
                </div>
              </div>
              <!-- Line Chart -->
              <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
                <div class="card sales-report">
                  <h2 class="display h4">Biểu đồ tăng trưởng theo tháng</h2>
                  
                  <div class="line-chart">
                    <canvas id="lineCahrt"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Statistics Section-->
        <section class="statistics">
          <div class="container-fluid">
            <div class="row d-flex">
              <div class="col-lg-4">
                <!-- Income-->
                <div class="card income text-center">
                  <div class="icon"><i class="icon-line-chart"></i></div>
                  <div class="number">15.000.000 VNĐ</div><strong class="text-primary">Tổng thu hôm nay</strong>
                  
                </div>
              </div>
              <div class="col-lg-4">
                <!-- Monthly Usage-->
                <div class="card data-usage">
                  <h2 class="display h4">Phần trăm tăng trưởng</h2>
                  <div class="row d-flex align-items-center">
                    <div class="col-sm-6">
                      <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
                    </div>
                    <div class="col-sm-6"><strong class="text-primary">Tăng trưởng tốt</strong><small></small><span></span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <!-- User Actibity-->
                <div class="card user-activity">
                  <h2 class="display h4">Tổng người onsite tuần này</h2>
                  <div class="number">5179</div>
                  <h3 class="h4 display">người</h3>
                  <div class="progress">
                    <div role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
                  </div>
                  <div class="page-statistics d-flex justify-content-between">
                    <div class="page-statistics-left"><span>Hôm nay</span><strong>999</strong></div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
       
      </div>
@endsection
