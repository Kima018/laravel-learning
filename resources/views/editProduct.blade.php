@extends('layout')

@section('editProduct')

    <section class="py-20 w-full px-2 ">
        @if($errors->any())
            <div class="text-red-900">
                <p><strong>Opps Something went wrong</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="min-h-[500px] relative overflow-x-auto shadow-md sm:rounded-lg" method="POST" action="{{route('updateProduct')}}">
            {{csrf_field()}}
            <table class="w-full flex  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr class="flex flex-col">
                    <th scope="col" class=" h-16 px-6 py-5 bg-gray-50 dark:bg-gray-800 ">
                        Product name
                    </th>
                    <th scope="col" class=" h-16 px-6 py-5">
                        Description
                    </th>
                    <th scope="col" class=" h-16 px-6 py-5 bg-gray-50 dark:bg-gray-800">
                        Amount
                    </th>
                    <th scope="col" class=" h-16 px-6 py-5">
                        Price
                    </th>
                    <th scope="col" class=" h-16 px-6 py-5 bg-gray-50 dark:bg-gray-800">
                        Image
                    </th>
                    <th scope="col" class=" h-16 px-6 py-5  ">
                        <button type="submit"
                                class="text-green-400 hover:text-white border border-green-400 hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                            ADD PRODUCT
                        </button>
                    </th>
                </tr>
                </thead>
                <tbody class="w-full">
                <tr class=" flex flex-col">
                    <td scope="row" class="h-16 px-6 py-4 bg-gray-50">
                        <input name="product_name" type="text" id="small-input"
                               value="{{$currentProduct->name}}"
                               class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </td>
                    <td class="h-16 px-6 py-5">
                        <input name="description" type="text" id="small-input"
                               value="{{$currentProduct->description}}"
                               class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </td>
                    <td class="h-16 px-6 py-5 bg-gray-50 dark:bg-gray-800">
                        <input name="amount" type="text" id="small-input"
                               value="{{$currentProduct->amount}}"
                               class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </td>
                    <td class="h-16 px-6 py-5">
                        <input name="price" type="text" id="small-input"
                               value="{{$currentProduct->price}}"
                               class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                    </td>
                    <td class="h-16 px-6 py-5 bg-gray-50 dark:bg-gray-800 flex">
                        <input name="image" type="file" class="self-center" disabled/>
                        <input type="hidden" name="product_id" value="{{$currentProduct->id}}">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </section>

@endsection
