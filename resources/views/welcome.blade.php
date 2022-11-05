<x-guest-layout>
    <div class="h-full flex flex-col items-stretch lg:flex-row">
        <div class="center-middle bg-[#6eb9a8]">
            <h1 class="text-[45px] text-[#0F6048]">Hello Friend!</h1>
            <p class="w-[350px] text-[28px] text-white text-center">
                Enter your personal details and start journey with us!
            </p>
        </div>
        <div class="center-middle bg-white">
            <h1 class="text-[#58AF9B] text-[45px] font-medium">Add a User</h1>
            <p class="text-[#4B4F4E] text-[18px] font-medium">Type in your info</p>
            <x-user-form />
        </div>
    </div>
</x-guest-layout>
