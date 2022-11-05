<form action="/user" method="POST" class="w-[330px] mt-[24px]">
    <x-input name="username" type="text" placeholder="Username" />
    <x-input name="email" type="email" placeholder="Email" />
    <x-input name="password" type="password" placeholder="Password" />
    <x-input name="country" type="select" placeholder="Country" :options="['Georgia', 'English']" />
    <x-input name="birthday" type="date" placeholder="Date of Birth" />
    <button class="form-submit" type="submit">SAVE</button>
</form>
