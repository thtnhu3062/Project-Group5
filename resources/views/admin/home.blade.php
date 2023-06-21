@extends('admin.layout.layout')

@section('contents')

<div id="content-page" class="content-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="row">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12  col-lg-4">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-header d-flex align-items-center justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Categories</h4>
            </div>
          </div>
          <div class="iq-card-body p-0">
            <div id="view-chart-03"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
          <div class="iq-card-header d-flex align-items-center justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Top Category</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center seasons">
              <div class="iq-custom-select d-inline-block sea-epi s-margin">
                <select name="cars" class="form-control season-select">
                  <option value="season1">Today</option>
                  <option value="season2">This Week</option>
                  <option value="season2">This Month</option>
                </select>
              </div>
            </div>
          </div>
          <div class="iq-card-body row align-items-center">
            <div class="col-lg-7">
              <div class="row list-unstyled mb-0 pb-0">
                <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                  <div class="iq-progress-bar progress-bar-vertical iq-bg-primary">
                    <span class="bg-primary" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 40%;"></span>
                  </div>
                  <div class="media align-items-center">
                    <div class="iq-icon-box-view rounded mr-3 iq-bg-primary"><i class="fa-sharp fa-regular fa-badge font-size-32"></i></div>
                    <div class="media-body text-white">
                      <h6 class="mb-0 font-size-14 line-height">Actions</h6>
                      <small class="text-primary mb-0">+34%</small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                  <div class="iq-progress-bar progress-bar-vertical iq-bg-secondary">
                    <span class="bg-secondary" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 70%;"></span>
                  </div>
                  <div class="media align-items-center">
                    <div class="iq-icon-box-view rounded mr-3 iq-bg-secondary"><i class="las la-laugh-squint font-size-32"></i></div>
                    <div class="media-body text-white">
                      <p class="mb-0 font-size-14 line-height">Comedy</p>
                      <small class="text-secondary mb-0">+44%</small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                  <div class="iq-progress-bar progress-bar-vertical iq-bg-info">
                    <span class="bg-info" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 40%;"></span>
                  </div>
                  <div class="media align-items-center">
                    <div class="iq-icon-box-view rounded mr-3 iq-bg-info"><i class="las la-skull-crossbones font-size-32"></i></div>
                    <div class="media-body text-white">
                      <p class="mb-0 font-size-14 line-height">Horror</p>
                      <small class="text-info mb-0">+56%</small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                  <div class="iq-progress-bar progress-bar-vertical iq-bg-warning">
                    <span class="bg-warning" data-percent="100" style="transition: height 2s ease 0s; width: 40%; height: 40%;"></span>
                  </div>
                  <div class="media align-items-center">
                    <div class="iq-icon-box-view rounded mr-3 iq-bg-warning"><i class="las la-theater-masks font-size-32"></i></div>
                    <div class="media-body text-white">
                      <p class="mb-0 font-size-14 line-height">Drama</p>
                      <small class="text-warning mb-0">+65%</small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6 mb-lg-0 mb-3">
                  <div class="iq-progress-bar progress-bar-vertical iq-bg-success">
                    <span class="bg-success" data-percent="100" style="transition: height 2s ease 0s; width: 60%; height: 60%;"></span>
                  </div>
                  <div class="media align-items-center mb-lg-0 mb-3">
                    <div class="iq-icon-box-view rounded mr-3 iq-bg-success"><i class="las la-child font-size-32"></i></div>
                    <div class="media-body text-white">
                      <p class="mb-0 font-size-14 line-height">Kids</p>
                      <small class="text-success mb-0">+74%</small>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-6  mb-lg-0 mb-3">
                  <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                    <span class="bg-danger" data-percent="100" style="transition: height 2s ease 0s; width: 80%; height: 80%;"></span>
                  </div>
                  <div class="media align-items-center">
                    <div class="iq-icon-box-view rounded mr-3 iq-bg-danger"><i class="las la-grin-beam font-size-32"></i></div>
                    <div class="media-body text-white">
                      <p class="mb-0 font-size-14 line-height">Thrilled</p>
                      <small class="text-danger mb-0">+40%</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div id="view-chart-02" class="view-cahrt-02"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Recently Viewed Items</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center seasons">
              <div class="iq-custom-select d-inline-block sea-epi s-margin">
                <select name="cars" class="form-control season-select">
                  <option value="season1">Most Likely</option>
                  <option value="season2">Unlikely</option>
                </select>
              </div>
            </div>
          </div>
          <div class="iq-card-body">
            <div class="table-responsive">
              <table class="data-tables table movie_table" style="width:100%">
                <thead>
                  <tr>
                    <th style="width:20%;">Brand</th>
                    <th style="width:10%;">Rating</th>
                    <th style="width:20%;">Category</th>
                    <th style="width:10%;">Views</th>
                    <th style="width:10%;">User</th>
                    <th style="width:20%;">Date</th>
                    <th style="width:10%;"><i class="lar la-heart"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="media align-items-center">
                        <div class="iq-movie">
                          <a href="javascript:void(0);"><img src="{{ asset('/images/show-thumb/01.png') }}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                        </div>
                        <div class="media-body text-white text-left ml-3">
                          <p class="mb-0">Blue DE Chanel</p>
                        </div>
                      </div>
                    </td>
                    <td><i class="lar la-star mr-2"></i>8.9</td>
                    <td>Chanel</td>
                    <td>
                      <i class="lar la-eye "></i>
                    </td>
                    <td>subcriber</td>
                    <td>12 June,2023</td>
                    <td><i class="las la-heart text-primary"></i></td>
                  </tr>

                  <tr>
                    <td>
                      <div class="media align-items-center">
                        <div class="iq-movie">
                          <a href="javascript:void(0);"><img src="{{ asset('/images/show-thumb/2.png') }}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                        </div>
                        <div class="media-body text-white text-left ml-3">
                          <p class="mb-0">Dior Sauvage EDP</p>
                        </div>
                      </div>
                    </td>
                    <td><i class="lar la-star mr-2"></i>10.0</td>
                    <td>Dior</td>
                    <td>
                      <i class="lar la-eye "></i>
                    </td>
                    <td>subcriber</td>
                    <td>12 June,2023</td>
                    <td><i class="las la-heart text-primary"></i></td>
                  </tr>

                  <tr>
                    <td>
                      <div class="media align-items-center">
                        <div class="iq-movie">
                          <a href="javascript:void(0);"><img src="{{ asset('/images/show-thumb/03.png') }}" class="img-border-radius avatar-40 img-fluid" alt=""></a>
                        </div>
                        <div class="media-body text-white text-left ml-3">
                          <p class="mb-0">My Burberry Black for Women</p>
                        </div>
                      </div>
                    </td>
                    <td><i class="lar la-star mr-2"></i>7.0</td>
                    <td>Burberry</td>
                    <td>
                      <i class="lar la-eye "></i>
                    </td>
                    <td>subcriber</td>
                    <td>12 June,2023</td>
                    <td><i class="las la-heart text-primary"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection