<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Product &raquo; Create
    </h2>
  </x-slot>

  <x-slot name="style">
    <style>
      .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 200px;
      }
    </style>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      @if ($errors->any())
        <div class="mb-5" role="alert">
          <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            There's something wrong!
          </div>
          <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif
      <form action="{{ route('dashboard.product.store') }}" method="post" class="w-full" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3 mb-5">
            <label class="block uppercase tracking-wide text-grey-700 text-xs font-bold mb-2">Name</label>
            <input type="text" name="name" id="name" placeholder="Product Name" value="{{ old('name') }}"
              class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
          </div>
          <div class="w-full px-3 mb-5">
            <label class="block uppercase tracking-wide text-grey-700 text-xs font-bold mb-2">Description</label>
            <textarea name="description" id="description"
              class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{!! old('description') !!}</textarea>
          </div>
          <div class="w-full px-3 mb-5">
            <label class="block uppercase tracking-wide text-grey-700 text-xs font-bold mb-2">Price</label>
            <input type="number" name="price" id="price" placeholder="Product Price" value="{{ old('price') }}"
              class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
          </div>
          <div class="w-full flex justify-end px-3 mt-5">
            <button type="submit"
              class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-lg">
              Save Product
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <x-slot name="script">
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>

    <script>
      ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
          console.error(error);
        });
    </script>
  </x-slot>
</x-app-layout>
