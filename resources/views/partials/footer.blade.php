<footer class="inupress-footer">
    <div class="inupress-container">
        {{-- The blocks the admin edits under Widgets; nothing at all without inupress/widgets. --}}
        @includeIf('inupress-widgets::area', ['name' => 'footer', 'class' => 'inupress-widgets'])

        <div class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
            <span>&copy; {{ date('Y') }} {{ config('app.name') }}</span>
            <span class="inupress-muted">Powered by Inupress</span>
        </div>
    </div>
</footer>
