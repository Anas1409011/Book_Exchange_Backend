@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  @include('navbar')
@stop

@section('content')

      <!-- start: Meta -->
  <meta charset="utf-8">
  <title>Index</title>
  <meta name="description" content="Metro Admin Template.">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <!-- end: Meta -->
  
  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- end: Mobile Specific -->
  
  <!-- start: CSS -->
  <link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
  <link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
  <link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

  <!-- start: Favicon -->
  <link rel="shortcut icon" href="{{asset('backend/img/favicon.ico')}}">
  <!-- end: Favicon -->
  

  
      <!-- start: Content -->
      <div id="content" class="span10">
      
      <h2 style="font-size:25px; text-align: center; padding: 10px">List of All Products</h2>
      
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  <th style="text-align: center;">Product ID</th>
                  <th style="text-align: center;">Product Name</th>
                  <th style="text-align: center;">Product Price (Tk.)</th>
                  <th style="text-align: center;">Edit Product</th>

                </tr>
              </thead>   
              <tbody>
        @foreach($all_products as $products)

              <tr>
                <td style="text-align: center;">{{$products->book_id}}</td>
                <td style="text-align: center;">{{$products->book_name}}</td>
                <td style="text-align: center;">{{$products->book_price}}</td>
                <td style="text-align: center;">

                  <!--/ Edit Button -->
                  <a class="btn btn-info" href="{{URL::to('/edit_product/'.$products->book_id)}}">Edit
                    <i class="halflings-icon white edit"></i>                                            
                  </a>
                  <!--/ Delete Button -->
                  <a class="btn btn-danger" href="{{URL::to('/delete_product/'.$products->book_id)}}">Delete
                    <i class="halflings-icon white trash"></i> 
                  </a>
                </td>
              </tr>

      @endforeach
              </tbody>
            </table>

            <div class="pagination {{-- pagination-centered --}} row inline">
              <ul>
              
              <li><a href="{{URL::to('/admin/allproducts/page1')}}">Page 1</a></li>
              <li><a href="{{URL::to('/admin/allproducts/page2')}}">Page 2</a></li>
              <li><a href="{{URL::to('/admin/allproducts/page3')}}">Page 3</a></li>
              <li><a href="{{URL::to('/admin/allproducts/page4')}}">Page 4</a></li>
              <li><a href="{{URL::to('/admin/allproducts/page4')}}">Last page</a></li>
              </ul>
            </div>

  
      <!-- end: Content -->
      </div><!--/#content.span10-->
    </div><!--/fluid-row-->

  
  <footer>

    <p>
      <span style="text-align:left;float:left">&copy; 2019 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
      <span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
    </p>

  </footer>

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


  
