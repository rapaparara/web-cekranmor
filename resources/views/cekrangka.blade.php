@extends('layouts.index')
@section('content')

<div class="w-full p-4 mb-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cek Rangka Motor</h5>
      <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
      
      <form>
      <div class="grid gap-6 mb-6 md:grid-cols-2">
    
      <div class="mb-3">
          <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Rangka</label>
          <input type="no_rangka" id="no_rangka" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123ABC456" required />
      </div> 
      <button type="submit" class="text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Cek Rangka</button>
      </form>
      </div>
    </div>
      
@endsection