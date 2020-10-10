@extends('admin.layout.master')
@section('css-custom')
<!-- Core Stylesheet -->
<!-- <link href="{{ asset('user/style.css') }}" rel="stylesheet"> -->

<!-- Responsive CSS -->
<link href="{{ asset('user/css/material-dashboard.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="content">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-8">
                                  <div class="card">
                                    <div class="card-header card-header-primary">
                                      <h4 class="card-title">Edit Akun</h4>
                                      <p class="card-category">Lengkapi Akunmu</p>
                                    </div>
                                    <div class="card-body">
                                      <form>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating">Email address</label> -->
                                              <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating">Fist Name</label>/ -->
                                              <input type="text" class="form-control" placeholder="Nama">
                                            </div>
                                          </div>
                                          
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating" >Adress</label> -->
                                              <input type="text" class="form-control" placeholder="Password Lama">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating" >Adress</label> -->
                                              <input type="text" class="form-control" placeholder="Password Baru">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group bmd-form-group">
                                              <!-- <label class="bmd-label-floating" >Adress</label> -->
                                              <input type="text" class="form-control" placeholder="re-enter Password">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group">
                                              <label>Ubah Foto</label>
                                              <div class="form-group bmd-form-group">
                                                <div class="custom-upload">
                                                    <label class="btn btn-primary btn-round" for="file" data-element="custom-upload-button">Upload Files </label>
                                                    <input class="custom-upload__input" id="file" type="file" data-behaviour="custom-upload-input" value="" multiple />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card card-profile">
                                    <div class="card-avatar">
                                      <a href="javascript:;">
                                        <img class="img" src="{{ asset('user/img/blog-img/6.jpg') }}">
                                      </a>
                                    </div>
                                    <div class="card-body">
                                      <h4 class="card-title">Parasekas</h4>
                                      <p class="card-description">
                                        VOKASI UNIVERSITAS BRAWIJAYA MALANG
                                      </p>
                                      <!-- <a href="javascript:;" class="btn btn-primary btn-round">Follow</a> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
@endsection