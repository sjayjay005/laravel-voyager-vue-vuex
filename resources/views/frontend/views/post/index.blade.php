@extends('frontend.shared.main')

@section('meta')
  @include('frontend.shared.meta', [
  'meta_title'    => 'Post',
  'meta_desc'     => 'Home Description',
  'meta_og_type'  => 'website',
  'meta_og_image' => '',
  'meta_tw_type'  => 'summary_large_image',
  'meta_tw_image' => ''
  ])

  {{-- Extra Metadata for this view only --}}
@endsection

@section('nocntent')

{{-- 	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<h1>{{ $post->title }}</h1>
				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				<p>{!! $post->body !!}</p>

			</div>
		</div>
	</div> --}}

@endsection

@section('window-scripts')
  <script>
    window.laravelDataLayer = String("{!! addslashes(json_encode($data)) !!}");
  </script>
@endsection
