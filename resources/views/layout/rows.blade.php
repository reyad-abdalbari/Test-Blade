<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                            <tr>
                                <th>Row Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Registered at</th>
                            </tr>
                        </thead>
                        <tbody>
                             @php
                                $u = 1;
                            @endphp
                             @if ($users->count())
                                 @foreach ($users as $user)
                                    <tr @if($loop->even) class="bg-red-100"@endif>
                                        <td>{{ $u }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td @if($loop->first)class="font-bold"@endif>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                    </tr>
                                    @php
                                        $u++;
                                    @endphp
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">No content.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
