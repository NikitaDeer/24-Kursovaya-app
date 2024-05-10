{{-- @props(['advantages']) --}}

<section class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl py-8 px-10 sm:py-16 lg:px-6">
    {{-- <div class="mb-8 max-w-screen-md lg:mb-16">
      <h2 class="mb-4 text-4xl font-extrabold text-gray-900">{{ $page->SecondTitle }}
      </h2>
        <p class="text-gray-500 sm:text-xl">{!! $page->main_content !!}</p>
    </div> --}}

    @if ($page)
      <div class="mb-8 max-w-screen-md lg:mb-16">
        <h2 class="mb-4 text-4xl font-extrabold text-gray-900">{{ $page->SecondTitle }}</h2>
        <p class="text-gray-500 sm:text-xl">{!! $page->main_content !!}</p>
      </div>
      {{-- @else
      <x-site.no-content /> --}}
    @endif

    <div class="space-y-8 md:space-y-0 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6 lg:gap-8">
      @forelse ($builds as $build)
        <div class="flex flex-col justify-between overflow-hidden rounded-lg shadow-lg bg-white h-full">
          <div>
            <img class="w-full h-56 object-cover object-center" src="storage/{{ $build->image_path }}" alt="Product image">
            <div class="p-6">
              <h3 class="mb-4 text-2xl font-bold leading-none tracking-tighter text-black">{{ $build->name }}</h3>
              <p class="text-base text-gray-700">{!! Str::limit($build->description, 100) !!}</p>
            </div>
          </div>
          <div class="px-6 pb-6">
            <a href="{{ asset('storage/' . $build->zip_path) }}" download
              class="block w-full rounded bg-blue-500 px-6 py-3 text-sm font-medium leading-none text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300" id="download-button-{{ $build->id }}">
              Скачать
            </a>
          </div>
        </div>
      @empty
        <x-site.no-items />
      @endforelse
    </div>

    {{-- <div class="space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0 lg:grid-cols-3">
      @forelse ($builds as $build)
        <div>
          <div class = pb-3>
            <img class="rounded-full" src="storage/{{ $build->image_path }}" alt="Тут фото">
            <h3 class="mb-2 text-xl font-bold">{{ $build->name }}</h3>
            <p class="text-gray-500">{!! $build->description !!}</p>
          </div>

          <div>
            <!-- Button will always be displayed for debugging purposes -->
            <a href="{{ asset('storage/' . $build->zip_path) }}" download
              class="mr-2 mb-2 inline-block rounded-lg bg-blue-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none" id="download-button-{{ $build->id }}">
            Скачать
            </a>
          </div>
        </div>
      @empty
        <x-site.no-items />
      @endforelse
    </div> --}}
  </div>
</section>
