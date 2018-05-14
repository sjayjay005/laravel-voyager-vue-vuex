@extends('frontend.shared.main')

@section('meta')
  @include('frontend.shared.meta', [
  'meta_title'    => 'Listing',
  'meta_desc'     => 'ListingH Description',
  'meta_og_type'  => 'website',
  'meta_og_image' => '',
  'meta_tw_type'  => 'summary_large_image',
  'meta_tw_image' => ''
  ])

  {{-- Extra Metadata for this view only --}}
@endsection

@section('window-scripts')
  <script type="text/javascript">
    // window.vuebnb_server_data = "{!! addslashes(json_encode($data)) !!}"
    // window.csrf_token = "{{ csrf_token() }}"
  </script>
@endsection
