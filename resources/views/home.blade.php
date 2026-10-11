<x-inupress::layout>
    <section class="inupress-card inupress-hero">
        <p class="inupress-eyebrow">Inupress</p>

        <h1 class="inupress-display">{{ config('app.name') }}</h1>

        <p class="inupress-lead">
            This site runs on Inupress, a small CMS where everything beyond the core is a plugin.
            This page is the theme's own <code>home.blade.php</code> — change it, or make a child
            theme and leave this one alone.
        </p>

        <div class="inupress-actions">
            <a class="inupress-btn" href="{{ url('admin') }}">Open the admin panel</a>
        </div>
    </section>
</x-inupress::layout>
