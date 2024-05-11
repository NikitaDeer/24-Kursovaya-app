{{-- <section class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl py-8 px-10 sm:py-16 lg:px-6">
    <div class="space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 lg:grid-cols-3">
      @forelse ($components as $component)
        <div>
          <div
            class="mb-4 flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 font-bold text-blue-600 lg:h-12 lg:w-12">
            {{ $loop->iteration }}
          </div>
          <h3 class="mb-2 text-xl font-bold">{{ $component->name }}</h3>
          <h4 class="mb-2 text-xs font-bold">{{ $component->price }} &#8381;</h4>
          <p class="text-gray-500">{!! $component->description !!}</p>
        </div>
      @empty
        <x-site.no-items />
      @endforelse
    </div>
  </div>
</section> --}}

<section class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl py-8 px-10 sm:py-16 lg:px-6">
    <div class="space-y-8 md:space-y-0 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6 lg:gap-8">
      @forelse ($components as $component)
        <div class="flex flex-col justify-between overflow-hidden rounded-lg shadow-lg bg-white h-full">
          <div>
            <img class="w-full h-56 object-cover object-center" src="storage/{{ $component->image_path }}" alt="Product image">
            <div class="p-6">
              <h3 class="mb-4 text-2xl font-bold leading-none tracking-tighter text-black">{{ $component->name }}</h3>
              <h3 class="mb-4 text-1xl font-bold leading-none tracking-tighter text-gray-700">{{ $component->type }}, {{ $component->manufacturer }}</h3>
              <p class="text-base text-gray-700">{!! Str::limit($component->description, 100) !!}</p>
            </div>
          </div>
          <div class="px-6 pb-6">
            <a href="{{ asset('storage/' . $component->zip_path) }}" download
              class="block w-full rounded bg-blue-500 px-6 py-3 text-center text-sm font-medium leading-none text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300" id="download-button-{{ $component->id }}">
              Скачать
           </a>
          </div>
        </div>
      @empty
        <x-site.no-items />
      @endforelse
    </div>
  </div>
</section>
