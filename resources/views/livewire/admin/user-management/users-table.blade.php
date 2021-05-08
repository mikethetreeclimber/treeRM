
    <div>
        <h5 class="text-center">Users</h5>
        <div class="flex justify-end">
            <div class="">
                <a href="{{ route('user_management.create') }}">
                    <x-button class="ml-3 bg-indigo-800" type="button">
                        {{ __('Add User') }}
                    </x-button>
                </a>
            </div>
        </div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">View</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $user->name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $user->email }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                        <div class="text-sm text-gray-500">Optimization</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($active ?? '')
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Active
                                            </span>
                                        @else
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Inactive
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        @foreach ($user->getRoles() as $roles)
                                            <p class="">{{ $roles }}</p>
                                        @endforeach
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('user_management.edit', ['user' => $user->id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('user_management.show', ['user' => $user->id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    {!! $users->links() !!}
</div>





        {{-- <div class="mt-2 border-t border-gray-300">
            @foreach ($users as $user)
            <div
            class="px-4 py-6 flex flex-col sm:flex-row items-center justify-between cursor-pointer transition-colors duration-300 ease border-b border-gray-300 hover:bg-gray-200 no-underline"
            >
                <div class="relative rounded-full w-16 h-16">

                </div>
                <div class="mt-2 text-center sm:text-left sm:mt-0 sm:ml-4 flex-1">
                    <p class="font-medium">{{ $user->name }}</p>
                    @foreach ($user->getRoles() as $roles)
                        <p class="">{{ $roles }}</p>
                    @endforeach
                </div>
                <div class="mt-2 text-center sm:text-left sm:mt-0 sm:ml-4 flex-1">
                    <p class="font-medium">{{ $user->email }}</p>
                </div>


                <a href="{{ route('user_management.edit', ['user' => $user->id]) }}">
                    <x-button class="ml-3 bg-pink-800" type="button">
                        {{ __('Edit') }}
                    </x-button>
                </a>
                <a href="{{ route('user_management.show', ['user' => $user->id]) }}">
                    <x-button class="ml-3 bg-purple-800" type="button">
                        {{ __('View') }}
                    </x-button>
                </a>
                <a href="#">
                    <x-button class="ml-3 bg-blue-800" type="button">
                        {{ __('Email') }}
                    </x-button>
                </a>
                <a href="#">
                    <x-button class="ml-3 bg-green-800" type="button">
                        {{ __('Call') }}
                    </x-button>
                </a>
            </div>
        </div> --}}


        {{-- <a href="">
            <svg
            aria-hidden="true"
            focusable="false"
            data-prefix="fas"
            data-icon="chevron-right"
            class="w-4 text-blue-400 hidden sm:inline-block"
            role="img"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 320 512"
            >
            <path
                fill="currentColor"
                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
            ></path>
            </svg>
        </a> --}}
