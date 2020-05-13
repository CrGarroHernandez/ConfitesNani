@extends('layout/layout')

@section('title', 'Contáctanos')

@section('content')
<div class="container">
<!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contáctanos
      <small></small>
    </h1>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Form -->
        <h4>Envíanos un mensaje</h4>
        <br>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group form-group">
            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Phone Number:</label>
              <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Enviar</button>
          </div>
        </form>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h4>Más información</h4>
        <br>
        <!--<p>
          3481 Melrose Place
          <br>Beverly Hills, CA 90210
          <br>
        </p>-->
        <p>
        <i class="fas fa-mobile-alt"></i>  9 49 73 2907
        </p>
        <p>
        <i class="fab fa-whatsapp"></i> +56 9 49 73 2907
        </p>
        <p>
          <i class="far fa-envelope"></i>
          <a href="mailto: hernan.ibacache.15@gmail.com"> confitesnani@gmail.com
          </a>
        </p>
        <p>
        <i class="fab fa-instagram"></i><a href="https://www.instagram.com/confites_nani/" target="_blank"> confites_nani</a>
        </p>
      </div>
    </div>
    <!-- /.row -->
</div>
@endsection