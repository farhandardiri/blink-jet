<x-app-layout>
    <x-slot name="slot">

        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                  <h1 class="m-0 text-dark">Insert Infromation</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v2</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>


          <section class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Give Infromation</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('store.information') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">

                              <div class="form-group col-md-5">
                                  <lavel>Name</lavel>
                                <input type="text" class="form-control" name="name" placeholder="name">
                              </div>
                              <div class="form-group col-md-5">
                                  <lavel>Address</lavel>
                                <input type="text" class="form-control" name="address" placeholder="Address">
                              </div>

                              <div class="form-group col-md-4">
                                  <lavel>Image</lavel>
                                <input type="file" name="image" class="form-control" id="image">
                              </div>
                              <div class="form-group col-md-4">
                                  <img src="" id="showImage" alt="" style="width: 150px; height: 160px; border:1px solid #000;">
                              </div>

                            </div>
                            <button type="submit" class="btn btn-primary"> Submit </button>
                          </form>
                    </div>

                </div>

          </section>


          </div>
    </x-slot>

</x-app-layout>
