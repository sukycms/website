    <meta property="og:site_name" content="SukyCMS" />
    <meta name="twitter:image" content="{{ asset('images/sukycms_card_twitter.jpg') }}">
    <meta name="twitter:site" content="@sukycms">
    <meta name="twitter:creator" content="@jaimesares">
    <meta property="og:image" content="{{ asset('images/sukycms_card_facebook.jpg') }}" />

@section('meta')
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ __('page.title') }}" />
    <meta property="og:description" content="{{ __('page.description') }}" />
    <meta property="og:url" content="{{ url('') }}" />

    <meta name="twitter:title" content="{{ __('page.title') }}">
    <meta name="twitter:description" content="{{ __('page.description') }}">
@show
