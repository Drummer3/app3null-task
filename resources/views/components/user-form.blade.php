<form action="/user" method="POST" class="w-[330px] mt-[24px]">
    @csrf
    <x-input name="name" type="text" placeholder="Name" />
    <x-input name="email" type="email" placeholder="Email" />
    <x-input name="password" type="password" placeholder="Password" />
    <x-input name="country" type="select" placeholder="Country" :options="['Georgia', 'England']" />
    <x-input name="birthday" type="date" placeholder="Date of Birth" />
    <button class="form-submit" type="submit">SAVE</button>
</form>
