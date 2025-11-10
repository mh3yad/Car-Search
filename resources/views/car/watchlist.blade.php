<x-app-layout title="watchlist">
    <section>
        <div class="container">
            <h2>My Favourite Cars</h2>
            <div class="car-items-listing">
                @php
                //TODO remove headers
                @endphp
            @forelse($cars as $car)
               <x-card-item :$car/>
            @empty
                    <div class="car-item card">
                        <p>No cars yet </p>
                    </div>
            @endforelse
            </div>
            <div>{{$cars->onEachSide(1)->links()}}</div>
        </div>
    </section>
</x-app-layout>