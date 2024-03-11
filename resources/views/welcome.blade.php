@extends('layouts.app')

@section('content')
    <div class="container mx-5">
        <div class="row justify-content-center">
            <div>
<!-- Side navigation -->
 <div class="sidenav">
    <a href="#">Dashboard</a>
    <a href="#">Inventory</a>
    <a href="#">Suppliers</a>
    <a href="#">Contact</a>
  </div>

  <!-- Page content -->
  <div class="main">



                <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                    <div class="col">
                        <div class="card border-success mb-3" style="max-width: 25rem;">
                            <div class="card-header">Product Details</div>
                            <div class="card-body text-success">
                              <h5 class="card-title">Inventory Summary</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-success mb-3" style="max-width: 25rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body text-success">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-success mb-3" style="max-width: 25rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body text-success">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                       </div>
                   </div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
                    <div class="col">
                        <div class="card border-success mb-3" style="max-width: 25rem;">
                            <div class="card-header">Product Details</div>
                            <div class="card-body text-success">
                              <h5 class="card-title">Inventory Summary</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-success mb-3" style="max-width: 25rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body text-success">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-success mb-3" style="max-width: 25rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body text-success">
                              <h5 class="card-title">Success card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                       </div>
                   </div>
                </div>

            </div>
        </div>
    </div>
@endsection
