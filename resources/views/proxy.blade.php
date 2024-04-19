<x-filament-page-with-sidebar::page>
    @if (method_exists($this, 'getIncludedSidebarView'))
        @include($this->getIncludedSidebarView())
    @endif
</x-filament-page-with-sidebar::page>
