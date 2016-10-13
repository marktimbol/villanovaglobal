@extends('layouts.home')

@section('content')

{{-- <div class="homepage-hero-module">
    <div class="video-container">
        <div class="filter"></div>
        <video autoplay loop class="fillWidth" muted>
            <source src="/videos/villanova.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
        </video>
        <div class="poster hidden">
            <img src="/images/slides/slide1.jpg" alt="Slide 1" title="Slide 1" />
        </div>
    </div>
</div> --}}

	<div class="Slideshow">
		<div class="Slides">
			<div class="Slide">
				<div class="Inquiry col-md-4 col-xs-12">
					<h3 class="Inquiry__title">Interested?</h3>
					<form method="POST" action="{{ route('inquiries.store') }}">
						{{ csrf_field() }}
						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							<label for="name">Name *</label>
							<input type="text" name="name" class="form-control"  />
							@if( $errors->has('name') )
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							<label for="name">eMail *</label>
							<input type="email" name="email" id="email" class="form-control"  />
							@if( $errors->has('email') )
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
							<label for="phone">Phone *</label>
							<input type="text" name="phone" id="phone" class="form-control"  />
							@if( $errors->has('phone') )
								<span class="help-block">
									<strong>{{ $errors->first('phone') }}</strong>
								</span>
							@endif
						</div>
						<div class="form-group">
							<label for="passport">Passport No.</label>
							<input type="text" name="passport" id="passport" class="form-control"  />
						</div>
						<div class="form-group">
							<label for="message">Message</label>
							<textarea name="message" id="message" class="form-control" ></textarea>
						</div>
						<p>&nbsp;</p>
						<div class="form-group">
							<button type="submit" class="btn btn-block btn-primary">Submit Form</button>
						</div>
					</form>
				</div>			
			</div>
		</div>
	</div>
@endsection