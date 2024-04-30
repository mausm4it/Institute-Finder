@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Institute List </h4>

        <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">


            <div class="flex items-center gap-2">

                <a href="{{ route('admin.dashboard') }}"
                    class="text-sm font-medium text-slate-700 dark:text-slate-400">Dashboard</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="{{ route('college') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                    aria-current="page">Institute</a>
            </div>
        </div>
    </div>


    <div class="mt-6">
        <div class="card">
            @can('create institute')
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <a href="{{ route('create-college') }}"
                        class="btn bg-success/20 text-sm font-medium text-success hover:text-white hover:bg-success"><i
                            class="mgc_add_circle_line me-3"></i> Add
                        Institute Info</a>








                </div>
            @endcan
            <div class="relative overflow-x-auto">
                <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                    <thead
                        class="bg-slate-300 bg-opacity-20 border-t dark:bg-slate-800 divide-gray-300 dark:border-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                Thumbline
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                Name</th>
                            @can('publish institute')
                                <th scope="col"
                                    class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                    Publish Status</th>
                            @endcan

                            @if (auth()->user()->can('update institute') or auth()->user()->can('delete institute'))
                                <th scope="col"
                                    class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900 dark:text-gray-200">
                                    Action</th>
                            @endif
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
                        @isset($colleges)
                            @foreach ($colleges as $item)
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                        <img width="70" src="{{ asset('storage/app/' . $item->thumbline) }}"
                                            alt="{{ $item->name }}">
                                    </td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                        {{ $item->name }}
                                    </td>

                                    @can('publish institute')
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">

                                            <div class="card p-6">

                                                <form action="{{ route('publish-college', $item->id) }}" method="POST">
                                                    @csrf
                                                    <div class="flex items-center ">
                                                        <input type="checkbox" id="publish" name="publish"
                                                            class="form-switch square text-success" required
                                                            @if ($item->publish == 1) checked @endif
                                                            onchange="this.form.submit()">
                                                        <label for="publish" class="ms-2">Publish</label>
                                                    </div>

                                                    @error('publish')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror
                                                </form>

                                            </div>

                                        </td>
                                    @endcan



                                    <td class="whitespace-nowrap py-4 px-3 text-center flex justify-center text-sm font-medium">


                                        <div class="flex gap-2">
                                            @can('update institute')
                                                <a href="{{ route('edit-apply', $item->id) }}">
                                                    <i class="mgc_edit_fill text-xl text-primary"></i>
                                                </a>
                                            @endcan


                                            @can('delete institute')
                                                <button data-fc-type="modal">
                                                    <i class="mgc_delete_fill text-xl text-danger"></i>
                                                </button>

                                                <div
                                                    class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 fc-modal hidden">
                                                    <div
                                                        class="mt-5 fc-modal-open:scale-100 duration-300 scale-90 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto  bg-white border shadow-sm rounded-md dark:bg-slate-800 dark:border-gray-700">
                                                        <div
                                                            class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">

                                                            <button
                                                                class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                                                data-fc-dismiss="" type="button">
                                                                <span class="material-symbols-rounded">close</span>
                                                            </button>
                                                        </div>
                                                        <div class="px-4 py-8 overflow-y-auto text-center">
                                                            <h3 class="font-medium text-danger text-lg">
                                                                Are You Sure Detele

                                                            </h3>
                                                            <i class="mgc_delete_2_fill text-7xl text-danger"></i>
                                                        </div>
                                                        <div class="flex justify-end items-center gap-4 p-4 ">
                                                            <button
                                                                class="py-2 px-5 inline-flex justify-center items-center gap-2 rounded dark:text-gray-200 border dark:border-slate-700 font-medium hover:bg-slate-100 hover:dark:bg-slate-700 transition-all"
                                                                data-fc-dismiss type="button">Close
                                                            </button>
                                                            <a href="{{ route('delete-college', $item->id) }}" type="submit"
                                                                class="btn bg-primary text-white ">Submit</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endcan
                                        </div>

                                        {{-- <button data-fc-target="default-modal" data-fc-type="modal" type="button">
                                            <i class="mgc_delete_2_fill text-xl text-danger"></i>
                                        </button> --}}






                                    </td>
                                </tr>
                            @endforeach
                        @endisset




                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
