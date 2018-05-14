@extends('frontend.shared.main')

@section('meta')
  @include('frontend.shared.meta', [
  'meta_title'    => $post->title,
  'meta_desc'     => 'Home Description',
  'meta_og_type'  => 'website',
  'meta_og_image' => '',
  'meta_tw_type'  => 'summary_large_image',
  'meta_tw_image' => ''
  ])

  {{-- Extra Metadata for this view only --}}
@endsection

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<h1>{{ $post->title }}</h1>
				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				<p>{!! $post->body !!}</p>

			</div>
		</div>
	</div>

@endsection

@section('window-scripts')
{{--
  <script type="text/javascript">
    window.vuebnb_server_data = "{!! addslashes(json_encode($data)) !!}"
    window.csrf_token = "{{ csrf_token() }}"
  </script>
--}}
@endsection
