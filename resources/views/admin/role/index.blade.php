@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">role</h4>

        <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">


            <div class="flex items-center gap-2">

                <a href="{{ route('admin.dashboard') }}"
                    class="text-sm font-medium text-slate-700 dark:text-slate-400">Dashboard</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="{{ route('role') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                    aria-current="page">role</a>
            </div>
        </div>
    </div>


    <div class="mt-6">
        <div class="card">
            <div class="flex flex-wrap justify-between items-center gap-2 p-6 ">



                <div class="flex flex-wrap gap-4 ">
                    <a href="javascript:void(0);"
                        class="btn bg-success/20 text-sm font-medium text-success hover:text-white hover:bg-success"
                        data-fc-type="modal"><i class="mgc_add_circle_line me-3"></i> Create
                        Role</a>




                    <div
                        class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 fc-modal hidden overflow-auto bg-white ">
                        <div
                            class="fc-modal-open:opacity-100 duration-500 h-screen w-screen opacity-0 ease-out transition-all flex flex-col bg-white p-8 dark:bg-slate-800 dark:border-gray-700">
                            <div class="flex justify-between items-center">
                                <h3 class="font-medium text-gray-800 dark:text-white text-2xl">
                                    Create Role
                                </h3>
                                <button
                                    class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200"
                                    data-fc-dismiss="" type="button">
                                    <span class="material-symbols-rounded">close</span>
                                </button>
                            </div>
                            @if ($errors->any())
                                <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form id="createblog" action="{{ route('create-role') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf <main class="flex-grow p-6 ">



                                    <div class="grid lg:grid-cols-12 gap-6">
                                        {{-- <div class="col-span-1 flex flex-col gap-6">
                                            <div class="card p-6">
                                                <div class="flex justify-between items-center mb-4">
                                                    <h4 class="card-title">Add Blog Thumbline</h4>

                                                    <div
                                                        class="inline-flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-700 w-9 h-9">

                                                        <i class="mgc_add_line"></i>
                                                    </div>
                                                </div>



                                                <div class="">
                                                    <input onchange="BlogImage(event)" class="form-control" type="file"
                                                        name="blog_image" value="{{ old('blog_image') }}" required>
                                                    <img id="blog_imagePreview" src="#" alt="Preview"
                                                        style="display:none; max-width: 100%; max-height: 100px;">
                                                    @error('blog_image')
                                                        <div class=" text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div> --}}

                                        <div class="lg:col-span-3 space-y-6">
                                            <div class="card p-6">
                                                <div class="flex flex-col gap-3">
                                                    <div class="mb-3">
                                                        <label for="name"
                                                            class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
                                                        <input type="text" class="form-input" value="{{ old('name') }}"
                                                            name="name" id="name" placeholder="Enter Name">
                                                        @error('name')
                                                            <div class=" text-danger">{{ $message }}</div>
                                                        @enderror

                                                    </div>
                                                </div>

                                            </div>


                                            <div class="grid md:grid-cols-2 gap-6">






                                                <div class="flex  gap-3">
                                                    @foreach ($permissions as $permission)
                                                        <div>
                                                            <input name="permissions[]"
                                                                class="form-checkbox rounded-full text-primary"
                                                                type="checkbox" id="checkBox10"
                                                                value="{{ $permission->id }}">
                                                            <label class="ms-1.5"
                                                                for="checkBox10">{{ $permission->name }}</label>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>

                                        <div class="lg:col-span-4 mt-5">
                                            <div class="flex justify-end gap-3">
                                                <button
                                                    class="btn dark:text-gray-200 border border-slate-200 dark:border-slate-700 hover:bg-slate-100 hover:dark:bg-slate-700 transition-all"
                                                    data-fc-dismiss="" type="button">
                                                    Cancle
                                                </button>
                                                <button type="submit"
                                                    class="inline-flex items-center rounded-md border border-transparent bg-green-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </main>
                            </form>


                        </div>
                    </div>
                </div>




            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                    <thead
                        class="bg-slate-300 bg-opacity-20 border-t dark:bg-slate-800 divide-gray-300 dark:border-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-4 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">ID
                            </th>
                            <th scope="col"
                                class="pe-3  py-4 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                Name</th>

                            <th scope="col"
                                class="px-3 py-4 text-center text-sm font-semibold text-gray-900 dark:text-gray-200">
                                Action</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
                        @isset($roles)
                            @foreach ($roles as $item)
                                <tr>
                                    <td
                                        class="whitespace-nowrap py-4 ps-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">
                                        <b>#{{ $item->id }}</b>
                                    </td>
                                    <td
                                        class="whitespace-nowrap py-4 pe-3 text-sm  font-medium text-gray-900 dark:text-gray-200">
                                        {{ $item->name }}
                                    </td>

                                    <td class="whitespace-nowrap py-4 px-3 flex justify-center text-sm font-medium">


                                        <div class="flex gap-2">

                                            <a href="{{ route('edit-role', $item->id) }}" data-fc-type="modal">
                                                <i class="mgc_edit_fill text-xl text-primary"></i>
                                            </a>



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
                                                        <a href="{{ route('delete-role', $item->id) }}" type="submit"
                                                            class="btn bg-primary text-white ">Submit</a>
                                                    </div>

                                                </div>
                                            </div>
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
