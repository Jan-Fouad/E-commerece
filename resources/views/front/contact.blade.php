@extends('front.master')
@section('content')
@section('contact-nav','current-list-item')
@section('pagename','Contact us')
<body>
	
	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div id="form_status"></div>
					<div class="contact-form">
						@if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
						@if (session('success'))
							<div class="alert alert-success">{{ session('success') }}</div>
						@endif
						<form method="POST" action="{{ route('admin.messages.store') }}">
							@csrf
							<p>
								<input type="text" placeholder="Name" name="name" id="name" required>
								<input type="email" placeholder="Email" name="email" id="email" required>
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone" required>
								<input type="text" placeholder="Subject" name="subject" id="subject" required>
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Submit"></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> 
	
	@endsection
