@extends('layouts.app')

@section('title')
    Table 
@endsection


@section('content')

   <div class="content-area">
	    <section class="dashboard-chart section-padding">
	        <div class="container-fluid">
	            <div class="row">
	               <div class="col-lg-6">
	                  <div class="card">
	                      <div class="card-header">
	                          <strong class="card-title">Thông tin khách đã đặt bàn</strong>
	                      </div>
	                      <div class="card-body">                          
	                         <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Sđt</th>
                                            <th>Trạng thái</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">1</td>
                                            <td> Nguyễn Văn Tính </td>
                                            <td>  <span class="name">hellooo@gmail.com</span> </td>
                                            <td> <span class="product">0378797979</span> </td>
											<td>
                                                <span class="badge badge-complete">Đã duyệt</span>
                                            </td>
                                            <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>
                                       
                                            
                                            

                                        </tr>
										<tr>
                                            <td class="serial">2</td>
                                            <td>Công Quyền</td>
                                            <td>  <span class="name">hellfdsfdsooo@gmail.com</span> </td>
                                            <td> <span class="product">0378797979</span> </td>
											<td>
                                                <span class="badge badge-complete">Đã duyệt</span>
                                            </td>
                                            <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>

                                        </tr>
										<tr>
                                            <td class="serial">3</td>
                                            <td> Đỗ Ngọc Toàn </td>
                                            <td>  <span class="name">hellofdsfdsfdsoo@gmail.com</span> </td>
                                            <td> <span class="product">0378797979</span> </td>
											<td>
                                                <span class="badge badge-complete">Đã duyệt</span>
                                            </td>
                                            <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>

                                        </tr>
										<tr>
                                            <td class="serial">4</td>
                                            <td> Nguyễn Văn A </td>
                                            <td>  <span class="name">hellofdsfdsoo@gmail.com</span> </td>
                                            <td> <span class="product">0378797979</span> </td>
											<td>
                                                <span class="badge badge-complete">Đã duyệt</span>
                                            </td>
                                            <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>

                                        </tr>
										<tr>
                                            <td class="serial">5</td>
                                            <td> Nguyễn Thị B </td>
                                            <td>  <span class="name">hellooo@gmail.com</span> </td>
                                            <td> <span class="product">0378797979</span> </td>
											<td>
                                                <span class="badge badge-complete">Chưa duyệt</span>
                                            </td>
                                            <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>

                                        </tr>
										

                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
	                    </div>

	                  </div>
	                </div>
	                <div class="col-lg-6">
	                  <div class="card">
	                      <div class="card-header">
	                          <strong class="card-title">Ý kiến khách hàng phản hồi</strong>
	                      </div>
	                      <div class="card-body">   
	                          <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Tên</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Nội dung</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
									<td class="serial">1</td>
                                        <td>Nguyễn Văn A</td>
                                        <td>abcdexyz@gmail.com</td>
                                        <td>Đồ ăn ngon mà bán giá chát quá</td>
                                        <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>

                                    </tr>
									<tr>
									<td class="serial">2</td>
                                        <td>Nguyễn Văn B</td>
                                        <td>abcdexfdsfdsyz@gmail.com</td>
                                        <td>Đến ăn có ngàn lần mà chán rồi</td>
                                        <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>

                                    </tr>
                                    <tr>
									<td class="serial">3</td>
									<td>Nguyễn Văn C</td>
									<td>abcdexfdsfdfdsfdssyz@gmail.com</td>
									<td>Nhân viên phục vụ chạy bàn rất tốt, đã thế lại còn xinh gái nữa chứ. Nice</td>
                                    <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>

                                    </tr>

									<td class="serial">4</td>
									<td>Nguyễn Văn D</td>
									<td>abcdexfdsfdsfdsyz@gmail.com</td>
									<td>Ăn ngon thật sự, sẽ đến đây nhiều lần</td>

                                    <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>

                                    </tr>
									<td class="serial">5</td>
									<td>Nguyễn Văn E</td>
									<td>abcdexfdsfdsfdsdsfdsyz@gmail.com</td>
									<td>Hôm nọ team mình tổ chức party đến đây ăn, phải nói là rất tuyệt.</td>
                                    <td><i class='far fa-trash-alt' style='font-size:16px;color:red'></i><i class='fas fa-pen' style='font-size:16px;color:blue'></i></td>

                                    </tr>
                                </tbody>
                            </table>
	                      </div>

	                  </div>
	                </div>
	              </div> 
	            
	              </div>
	        </div>
	    </section>
    </div>
  
@endsection
