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
                        <form>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="First name">
                              </div>
                              <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="Last name">
                              </div>

                              <div class="form-group col-md-6">
                                <input type="file" class="form-control" placeholder="Last name">
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
