<x-guest-layout>
    <div class="h-full flex flex-col center-middle bg-white items-stretch">
        <h1 class="text-[#58AF9B] text-[45px] font-medium mb-[100px] text-center">User Data Table</h1>
        <div class="flex flex-col w-full lg:max-w-[1000px] max-w-[500px] lg:p-0 p-4 gap-4">
            <div class="table-header">
                <div class="content-start">Name</div>
                <div class="content-center">Country</div>
                <div class="content-end">Date of Birth</div>
            </div>
            @foreach ($users as $user)
                <div class="table-row__container">
                    <div class="content-start">{{ $user->name }}</div>
                    <div class="content-center">{{ $user->country }}</div>
                    <div class="content-end">{{ $user->birthday }}</div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
