@extends('admin.layout.master')
@section('content')
<!-- Earnings (Monthly) Card Example -->
		 <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-Black text-uppercase mb-1">Berita</div>
                    </div>
                    <div class="col-auto">
                    <i class="far fa-newspaper fa-3x text-Black"></i>
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                  <div class="stats">
					<button type="button" class="btn btn-primary btn-sm">Tambah</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-Black text-uppercase mb-1">Social Media</div>
                     
                    </div>
                    <div class="col-auto">
						<i class="fab fa-instagram fa-3x text-danger"></i>
                    </div>
                  </div>
                </div>
                 <div class="card-footer">
                  <div class="stats">
					<button type="button" class="btn btn-primary btn-sm">Tambah</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-Black text-uppercase mb-1">FAQ</div>
                     
                    </div>
                    <div class="col-auto">
                		  <i class="fas fa-question fa-3x text-primary"></i>
                    </div>
                  </div>
                </div>
                 <div class="card-footer">
                  <div class="stats">
					<button type="button" class="btn btn-primary btn-sm">Tambah</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-Black text-uppercase mb-1">LOMBA</div>
                   
                    </div>
                    <div class="col-auto">
              			<i class="fas fa-medal fa-3x text-warning"></i>
                    </div>
                  </div>
                </div>
                  <div class="card-footer">
                  <div class="stats">
					<button type="button" class="btn btn-primary btn-sm">Tambah</button>
                  </div>
                </div>
              </div>
            </div>

        </div> 

@endsection