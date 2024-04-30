@extends('layouts.app')
@section('content')
    <h2 class="bg-primary text-white p-3 text-center text-lg">Edit Role </h2>
    @if ($errors->any())
        <div class="bg-danger/25 text-danger  text-sm rounded-md p-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form id="createblog" action="{{ route('update-role', $role->id) }}" method="post" enctype="multipart/form-data">
        @csrf <main class="flex-grow p-6 ">



            <div class="grid lg:grid-cols-12 gap-6">


                <div class="lg:col-span-3 space-y-6">
                    <div class="card p-6">
                        <div class="flex flex-col gap-3">
                            <div class="mb-3">
                                <label for="name"
                                    class="text-gray-800 text-sm font-medium inline-block mb-2">Name</label>
                                <input type="text" class="form-input" value="{{ old('name', $role->name) }}"
                                    name="name" id="name" placeholder="Enter Name">
                                @error('name')
                                    <div class=" text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                    </div>


                    <div class="grid md:grid-cols-2 gap-6">






                        <div class="gap-3">
                            @foreach ($permissions as $permission)
                                <div class="text-xl m-2">
                                    <input name="permissions[]" class="form-checkbox rounded-full text-primary "
                                        type="checkbox" id="checkBox10" value="{{ $permission->id }}"
                                        @if (in_array($permission->id, $data)) checked @endif>
                                    <label class="ms-1.5" for="checkBox10">{{ $permission->name }}</label>
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


@endsection
