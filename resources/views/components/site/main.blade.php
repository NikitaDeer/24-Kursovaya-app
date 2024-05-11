    <section id="components-section" class="bg-white">
      <div class="mx-auto max-w-screen-xl items-center gap-16 py-8 px-10 lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
        <div class="font-light text-gray-500 sm:text-lg">
          @if ($page)
            <h2 class="mb-4 text-4xl font-extrabold text-gray-900">{{ $page->ThirdTitle }}</h2>
            <p class="mb-4">{!! $page->about_content !!}</p>
            <p>{!! $page->about_second_content !!}</p>
          @endif
        </div>
        @if ($page)
          <div class="mt-8 grid grid-cols-2 gap-4">
            <img class="w-full rounded-lg" src="storage/{{ $page->first_photo_path }}" alt="Тут Доктор">
            <img class="mt-4 w-full rounded-lg lg:mt-10" src="storage/{{ $page->second_photo_path }}" alt="Тут Доктор">
          </div>
        @endif
      </div>

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

      @if ($page)
        <div class="mx-auto max-w-screen-xl py-8 px-10 lg:py-16 lg:px-6">
          <div class="max-w-screen-lg text-gray-500 sm:text-lg">
            <h2 class="mb-4 text-4xl font-bold text-gray-900">{{ $page->FourthTitle }}</h2>
            <p class="mb-4 font-light">{!! $page->footer_content !!}</p>
            <p class="mb-4 font-medium">{!! $page->footer_second_content !!}</p>
          </div>
        </div>
      @endif
    </section>
