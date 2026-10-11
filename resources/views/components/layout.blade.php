@props([
    'title' => null,
    'description' => null,
])

{{--
    The shell of the public site. A child theme usually starts by copying this file and editing it.
    See docs/decisions/0010-themes.md and the theme guide in the Inupress docs.
--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('app.name') }}</title>

    @if ($description)
        <meta name="description" content="{{ $description }}">
    @endif

    {{-- The optional tags of inupress/seo: canonical, Open Graph, Twitter. --}}
    @includeIf('inupress-seo::head', ['title' => $title ?? null, 'description' => $description ?? null])

    @inupressStyles
    @stack('head')
    @stack('styles')
</head>
<body class="flex h-full flex-col bg-white text-slate-900 antialiased">
    <header class="inupress-header">
        <div class="inupress-container flex items-center justify-between gap-6 py-4">
            <a href="{{ url('/') }}" class="inupress-brand">{{ config('app.name') }}</a>

            {{-- The menu the admin edits under Menus; nothing at all without inupress/menus. --}}
            @includeIf('inupress-menus::nav', ['name' => 'primary', 'class' => 'inupress-nav'])
        </div>
    </header>

    <main class="inupress-main flex-1">
        {{ $slot }}
    </main>

    @include('inupress::partials.footer')

    @stack('scripts')
    @inupressScripts
</body>
</html>
