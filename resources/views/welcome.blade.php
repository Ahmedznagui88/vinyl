<x-layout>
    @if (session("vinylCreated"))
        <div class="alert alert-success text-center">
            {{ session("vinylCreated") }}
        </div>
    @endif
</x-layout>