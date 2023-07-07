@extends('admin.layout.layout')

@section('contents')

<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row profile-content">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="iq-card">
                    <div class="iq-card-body profile-page">
                        <div class="profile-header">
                            <div class="cover-container text-center">
                                <img src="{{ asset('/images/user/admin1.png') }}" alt="profile-bg" class="rounded-circle img-fluid">
                                <div class="profile-detail mt-3">
                                    <h3>Pham Ngoc Hai</h3>
                                </div>
                                <div class="iq-social d-inline-block align-items-center">
                                    <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                        <li>
                                            <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                        <div class="iq-header-title">
                            <h4 class="card-title mb-0">Personal Details</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <ul class="list-inline p-0 mb-0">

                            <li>
                                <div class="row align-items-center justify-content-between mb-3">
                                    <div class="col-sm-6">
                                        <h6>Address</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0">Cach Mang Thang 8
                                            Ward 11, District 3, Ho Chi Minh City</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-center justify-content-between mb-3">
                                    <div class="col-sm-6">
                                        <h6>Phone</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0">(010)987 543 201</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-center justify-content-between mb-3">
                                    <div class="col-sm-6">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0">hai@gmail.com</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row align-items-center justify-content-between mb-3">
                                    <div class="col-sm-6">
                                        <h6>Facebook</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="mb-0">@Ngoc_Hai</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-12 col-lg-8">
            </div>
        </div>
    </div>
</div>
@endsection