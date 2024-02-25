@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="row ">
                                <div class="col-lg-12">

                                    <div class="breadcrumb-main">
                                        <h4 class="text-capitalize breadcrumb-title"> </h4>
                                        <div class="breadcrumb-action justify-content-center flex-wrap">
                        
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- ends: .row -->
                            <div class="row">
                                <div class="col-xxl-4">
                                    <div class="row">
                                        <div class="col-xxl-12 col-md-6">
                                            <!-- Card 2 End  -->
                                            <div class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                                                <div>





                                                    <div class="overview-content overview-content3">
                                                        <div class="d-flex">
                                                            <div class="revenue-chart-box__Icon mr-20 order-bg-opacity-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="35.012" height="18.235" viewBox="0 0 35.012 18.235" class="svg replaced-svg">
  <g id="user" transform="translate(-8 -12.583)">
    <g id="Group_1111" data-name="Group 1111" transform="translate(8 14.773)">
      <circle id="Ellipse_46" data-name="Ellipse 46" cx="2.917" cy="2.917" r="2.917" transform="translate(2.919)" opacity="0.5"></circle>
      <path id="Path_1020" data-name="Path 1020" d="M17.731,17.5A6.115,6.115,0,0,0,15.3,22.386v.365h-6.2A1.1,1.1,0,0,1,8,21.657v-.729a4.009,4.009,0,0,1,4.011-4.011h3.648A4,4,0,0,1,17.731,17.5Z" transform="translate(-8 -9.623)" opacity="0.5"></path>
      <circle id="Ellipse_47" data-name="Ellipse 47" cx="2.917" cy="2.917" r="2.917" transform="translate(26.259)" opacity="0.5"></circle>
      <path id="Path_1021" data-name="Path 1021" d="M29.283,20.929v.729a1.1,1.1,0,0,1-1.094,1.094h-6.2v-.365A6.112,6.112,0,0,0,19.554,17.5a3.978,3.978,0,0,1,2.072-.584h3.648A4.012,4.012,0,0,1,29.283,20.929Z" transform="translate(5.729 -9.625)" opacity="0.5"></path>
    </g>
    <circle id="Ellipse_48" data-name="Ellipse 48" cx="4" cy="4" r="4" transform="translate(21 12.583)"></circle>
    <path id="Path_1022" data-name="Path 1022" d="M24.369,17.583H16.344a4.015,4.015,0,0,0-4.011,4.011v2.188a1.1,1.1,0,0,0,1.094,1.094H27.286a1.1,1.1,0,0,0,1.094-1.094V21.594A4.015,4.015,0,0,0,24.369,17.583Z" transform="translate(5.149 5.941)"></path>
  </g>
</svg>
                                                            </div>
                                                            <div>
                                                                <!-- <h2>7,461</h2> -->
                                                                <p class="mb-3 mt-1">Clients</p>
                                                                <div class="ap-po-details-time">
                                                                    <!-- <span class="color-success"><i class="las la-arrow-up"></i> -->
                                                                        <!-- <strong>25%</strong></span> -->
                                                                    <h2> {{ $totalClients }}</h2>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Card 2 End  -->
                                        </div>
                                        <div class="col-xxl-12 col-md-6">
                                            <!-- Card 1 -->
                                            <div class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                                                <div>





                                                    <div class="overview-content overview-content3">
                                                        <div class="d-flex">
                                                            <div class="revenue-chart-box__Icon mr-20 order-bg-opacity-secondary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="30.665" viewBox="0 0 32 30.665" class="svg replaced-svg">
  <g id="graph" transform="translate(-8 -8.835)">
    <g id="bold_1_" transform="translate(8 8.835)">
      <g id="Group_1113" data-name="Group 1113" transform="translate(0 0)">
        <path id="Union_7" data-name="Union 7" d="M.39,12.942a1.336,1.336,0,0,1,0-1.886L8.347,3.1,6.957,1.708A1,1,0,0,1,7.666,0h4.665a1,1,0,0,1,1,1V5.666a1,1,0,0,1-1.708.707l-1.39-1.39L2.276,12.942a1.336,1.336,0,0,1-1.886,0Z" transform="translate(2.669 0)" fill="#ff69a5" opacity="0.5"></path>
        <g id="Group_1112" data-name="Group 1112" transform="translate(1.334 6.665)">
          <path id="Path_1026" data-name="Path 1026" d="M16.667,19.166v7.666h-8V19.166A1.666,1.666,0,0,1,10.333,17.5H15A1.668,1.668,0,0,1,16.667,19.166Z" transform="translate(-8.667 -6.834)" fill="#ff69a5"></path>
          <path id="Path_1027" data-name="Path 1027" d="M22,16.5v13H14v-13a1.666,1.666,0,0,1,1.666-1.666h4.666A1.665,1.665,0,0,1,22,16.5Z" transform="translate(-3.334 -9.5)" fill="#ff69a5"></path>
          <path id="Path_1028" data-name="Path 1028" d="M27.333,13.833V32.167h-8V13.833A1.666,1.666,0,0,1,21,12.167h4.668A1.666,1.666,0,0,1,27.333,13.833Z" transform="translate(1.999 -12.167)" fill="#ff69a5"></path>
        </g>
        <path id="Path_1029" data-name="Path 1029" d="M39,25.167H9a1,1,0,0,1,0-2H39a1,1,0,1,1,0,2Z" transform="translate(-8 5.498)" fill="#ff69a5" opacity="0.5"></path>
      </g>
    </g>
  </g>
</svg>
                                                            </div>
                                                            <div>
                                                                <p class="mb-3 mt-1"> Vendors</p>
                                                                <div class="ap-po-details-time">
                                                                    <h2> {{ $totalVendors }}</h2>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Card 1 End -->
                                        </div>
                                        <div class="col-xxl-12 col-md-6">
                                            <!-- Card 3 -->
                                            <div class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                                                <div>





                                                    <div class="overview-content overview-content3">
                                                        <div class="d-flex">
                                                            <div class="revenue-chart-box__Icon mr-20 order-bg-opacity-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="31.996" height="26.985" viewBox="0 0 31.996 26.985" class="svg replaced-svg">
  <g id="Group_1641" data-name="Group 1641" transform="translate(0.003 -40.092)">
    <path id="Path_1032" data-name="Path 1032" d="M27.95,40.379c-7.364,3.59-16.356,4-18.951,4.038H2.815A2.819,2.819,0,0,0,0,47.233C0,63.434-.015,62.5.032,62.705a1.32,1.32,0,0,0,.432.714h0a42.008,42.008,0,0,0,8.59.309,55.153,55.153,0,0,0,7.127-.574A43.054,43.054,0,0,0,29.366,59.3a13.8,13.8,0,0,0,2.628-1.272V42.913A2.814,2.814,0,0,0,27.95,40.379Zm1.415,15.943a39.344,39.344,0,0,1-13.555,4.231c-4.688.667-7.368.564-13.184.551V47.233a.188.188,0,0,1,.188-.187H8.057c6.692.106,15.072-1.395,21.045-4.306a.185.185,0,0,1,.264.171Z" transform="translate(0 0)" fill="#20c997"></path>
    <path id="Path_1033" data-name="Path 1033" d="M186.243,193.368a4.651,4.651,0,1,0-4.651-4.651A4.656,4.656,0,0,0,186.243,193.368Zm0-6.674a2.023,2.023,0,1,1-2.023,2.023,2.025,2.025,0,0,1,2.023-2.023Z" transform="translate(-170.246 -134.976)" fill="#20c997"></path>
    <path id="Path_1034" data-name="Path 1034" d="M375.136,133.958c.287,0,.222,0,2.418-.735a1.314,1.314,0,0,0-.831-2.493l-2,.667a1.314,1.314,0,0,0,.415,2.561Z" transform="translate(-350.463 -84.909)" fill="#20c997" opacity="0.5"></path>
    <path id="Path_1035" data-name="Path 1035" d="M65.429,314.851h2a1.314,1.314,0,0,0,0-2.628h-2a1.314,1.314,0,0,0,0,2.628Z" transform="translate(-60.111 -255.125)" fill="#20c997" opacity="0.5"></path>
    <path id="Path_1036" data-name="Path 1036" d="M39.008,327.06v3.522a2.817,2.817,0,0,1-1.483,2.48c-4.157,2.245-9.31,3.05-14.09,3.05-9.914,0-15.552-3.393-15.795-3.541a1.236,1.236,0,0,1-.161-.117,42,42,0,0,0,8.59.309c6.267,1.27,14.589,1.021,20.207-2.013a.193.193,0,0,0,.1-.168v-2.25A13.8,13.8,0,0,0,39.008,327.06Z" transform="translate(-7.015 -269.034)" fill="#20c997" opacity="0.5"></path>
  </g>
</svg>
                                                            </div>
                                                            <div>
                                                                <p class="mb-3 mt-1">Client Data</p>
                                                                <div class="ap-po-details-time">
                                                                    <!-- <span class="color-danger"><i class="las la-arrow-down"></i> -->

                                                                    <small>{{ $totalClientData }}</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Card 3 End -->
                                        </div>
                                    </div>
                                </div>
                                
                                
                                

                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection
