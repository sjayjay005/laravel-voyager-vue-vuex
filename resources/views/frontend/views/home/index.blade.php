@extends('frontend.shared.main')

@section('meta')
  @include('frontend.shared.meta', [
  'meta_title'    => 'Home',
  'meta_desc'     => 'Home Description',
  'meta_og_type'  => 'website',
  'meta_og_image' => '',
  'meta_tw_type'  => 'summary_large_image',
  'meta_tw_image' => ''
  ])

  {{-- Extra Metadata for this view only --}}
@endsection

@section('window-scripts')
  <script>
    window.laravelDataLayer = String("{!! addslashes(json_encode($data)) !!}");
  </script>
@endsection
