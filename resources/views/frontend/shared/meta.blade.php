{{-- Meta Tag Component --}}

@php
  // Defaults
  $defaultLocale         = 'es_MX';
  $defaultURL            = ''.Request::url();
  $defaultAuthor         = '@';

  $defaultTitle          = '';
  $defaultDescription    = '';

  $defaultOpenGraphType  = 'website';
  $defaultOpenGraphImage = 'http://via.placeholder.com/1200x630'.uniqid();

  $defaultTwitterType    = 'summary_large_image';
  $defaultTwitterImage   = 'http://via.placeholder.com/1200x628'.uniqid();

  // Sets
  $title                 = (isset($meta_title) && $meta_title != '')       ? $meta_title : $defaultTitle;
  $description           = (isset($meta_desc) && $meta_desc != '')         ? $meta_desc : $defaultDescription;

  $openGraphType         = (isset($meta_og_type) && $meta_og_type != '')   ? $meta_og_type : $defaultOpenGraphType;
  $openGraphImage        = (isset($meta_og_image) && $meta_og_image != '') ? $meta_og_image : $defaultOpenGraphImage;

  $twitterType           = (isset($meta_tw_type) && $meta_tw_type != '')   ? $meta_tw_type : $defaultTwitterType;
  $twitterImage          = (isset($meta_tw_image) && $meta_tw_image != '') ? $meta_tw_image : $defaultTwitterImage;
@endphp

{{-- Basic --}}

<title>{{ $title }}</title>
<meta name="description"              content="{{ $description }}" />
<meta name="author"                   content="{{ $defaultAuthor }}" />

{{-- Open Graph --}}

<meta property="og:locale"            content="{{ $defaultLocale }}" />
<meta property="og:url"               content="{{ $defaultURL }}" />
<meta property="og:type"              content="{{ $openGraphType}}" />

<meta property="og:title"             content="{{ $title }}" />
<meta property="og:site_name"         content="{{ $title }}" />
<meta property="og:description"       content="{{ $description }}" />

<meta property="og:image"             content="{{ $openGraphImage }}" />
<meta property="og:image:secure_url"  content="{{ $openGraphImage }}" />

{{-- Twitter Card --}}

<meta name="twitter:card"             content="{{ $twitterType }}" />
<meta name="twitter:site"             content="{{ $defaultAuthor }}" />
<meta name="twitter:creator"          content="{{ $defaultAuthor }}" />
<meta name="twitter:title"            content="{{ $title }}" />
<meta name="twitter:description"      content="{{ $description }}" />
<meta name="twitter:image"            content="{{ $twitterImage }}" />

{{-- Geo Data [Disabled] --}}

{{--
<meta name="geo.region"               content="MX-DIF" />
<meta name="geo.placename"            content="Ciudad de M&eacute;xico" />
<meta name="geo.position"             content="19.429129;-99.179324" />
<meta name="ICBM"                     content="19.429129, -99.179324" />
--}}

{{-- Favicons --}}

<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/img/favicons/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/favicons/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/favicons/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('/img/favicons/manifest.json') }}">
<link rel="mask-icon" href="{{ asset('/img/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
<link rel="shortcut icon" href="{{ asset('/img/favicons/favicon.ico') }}">
<meta name="msapplication-config" content="{{ asset('/img/favicons/browserconfig.xml') }}">
<meta name="theme-color" content="#ffffff">

{{-- Other --}}

<meta name="robots"                   content="index, follow" />
<meta name="csrf-token"               content="{{ csrf_token() }}" />

{{-- / --}}
