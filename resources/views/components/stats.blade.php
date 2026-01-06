

<section class="relative -mt-16 z-10">
    <div class="max-w-6xl mx-auto bg-white rounded-xl shadow grid grid-cols-2 md:grid-cols-4 px-6 py-6 text-center">
        @foreach ($stats as $stat)
            
        
        <div>
            <h3 class="text-blue-600 text-2xl font-bold">{{ $stat->key }}</h3>
            <p class="text-xs text-slate-500">{{ $stat->value }}</p>
        </div>
        @endforeach
        {{-- <div>
            <h3 class="text-emerald-600 text-2xl font-bold">120</h3>
            <p class="text-xs text-slate-500">Projects Done</p>
        </div>
        <div>
            <h3 class="text-blue-600 text-2xl font-bold">800+</h3>
            <p class="text-xs text-slate-500">Volunteers</p>
        </div>
        <div>
            <h3 class="text-emerald-600 text-2xl font-bold">15</h3>
            <p class="text-xs text-slate-500">Years Active</p>
        </div> --}}
    </div>
</section>