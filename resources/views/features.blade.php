@extends('layouts.master')

@section('title','Login')

@section('header')
	@include('layouts.menubar')
@endsection

@section('content')
      <div class="features-section">
  			<div class="features-section-head text-center">
  				<h3><span>F</span>eatures </h3>
  				<p>“We provide you features for parking”</p>
  			</div>
  			<div class="features-section-grids">
  				<div class="features-section-grid">
  					<img src="images/girl.png" alt="">
  					<div class="girl-info">
  						<div class="lonovo">
  							<div class="dress">
                    <h4>Parking Guidance Systems (PGS)  </h4>
  							</div>
  							<div class="clearfix"></div>
  						</div>
  					</div>
  				</div>
  			</div>
        <div class="features-section-head text-center">
        <h3>Parking Guidance Systems (PGS)  </h3>
        <p>A system created to guide drivers to the closest available parking space. Real time information is used to improve and increase the effectiveness of the system.</p>
  		</div>
      <div class="features-section-grids">
        <div class="features-section-grid">
          <img src="images/girl.png" alt="">
          <div class="girl-info">
            <div class="lonovo">
              <div class="dress">
                  <h4>Security   </h4>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="features-section-head text-center">
      <h3>Security </h3>
      <p>The security analyses of the situation are vital before recommending a solution, for example how sensitive is the parking facility and these questions will determine the devices and software solutions that can be integrated in creating a strong and secured parking solution. The access control can be implemented with both smart card readers and biometric readers and similarly the surveillance can be upgraded with Automated Number Plate Recognition Readers (ANPR) systems.</p>
    </div>
    </div>
@endsection

@section('scripts')
@endsection
@section('footer')
	@include('layouts.footer')
@endsection
