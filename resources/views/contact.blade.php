@extends('layout')

@section('content')
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
<div class="content">
    
    <div class="container">
      <div class="row">
        <div class="col-md-5 mr-auto">
          <h2>Contact Us</h2>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quaerat autem corrupti asperiores accusantium et fuga! Facere excepturi, quo eos, nobis doloremque dolor labore expedita illum iusto, aut repellat fuga!</p>

          <ul class="list-unstyled pl-md-5 mb-5">
            <li class="d-flex text-black mb-2">
              <span class="mr-3"><span class="icon-map"></span></span> 34 Street Name, City Name Here, <br> United States
            </li>
            <li class="d-flex text-black mb-2"><span class="mr-3"><span class="icon-phone"></span></span> +1 (222) 345 6789</li>
            <li class="d-flex text-black"><span class="mr-3"><span class="icon-envelope-o"></span></span> info@mywebsite.com </li>
          </ul>
        </div>

        <div class="col-md-6">
          <form class="mb-5" method="POST" id="contactForm" name="contactForm">
            <div class="row">
              
              <div class="col-md-12 form-group">
                <label for="name" class="col-form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email" class="col-form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message" class="col-form-label">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="submit" value="{{ $button_label ?? 'Send Message' }}" class="btn btn-primary rounded-0 py-2 px-4">
                <span class="submitting"></span>
              </div>
            </div>
          </form>

          <div id="form-message-warning mt-4"></div> 
          
        </div>
      </div>

      
     
  </div>
@endsection
