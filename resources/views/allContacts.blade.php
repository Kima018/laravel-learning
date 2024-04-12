@extends('layout')
@section('allContacts')

    <section class="w-full py-20">
        <div class="relative px-2 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Subject
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Message
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Created at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($allContacts as $contact)
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$contact->email}}
                        </th>
                        <td class="px-6 py-4 max-w-[500px]">
                            {{$contact->subject}}
                        </td>
                        <td class="px-6 py-4">
                            {{$contact->message}}
                        </td>
                        <td class="px-6 py-4">
                            {{$contact->created_at}}
                        </td>
                        <td class="px-6 py-4 flex justify-start gap-2 flex-wrap md:flex-nowrap">
                            <a href="{{route('deleteContact',['contact'=>$contact->id])}}" class="px-2 py-2 rounded bg-red-800 text-white">Delete</a>
                            <a href="{{route('contact.single',['contact'=>$contact->id])}}" class="px-2 py-2 rounded bg-blue-800 text-white">Edit</a>
                        </td>
                    </tr>


                @endforeach








                </tbody>
            </table>
        </div>
    </section>

@endsection
