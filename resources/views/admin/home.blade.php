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
      
      
      <div class="col-sm-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
              <h4 class="card-title">Recently Viewed Items</h4>
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