<x-layouts.app :title="__('Add User')">
    <div class="relative h-full flex-1 p-10 m-10 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
        <form action="{{ url('dodajuser') }}" method="POST" class=" rounded-xl  w-full p-10 max-w-[500px] mx-auto text-white">
            @csrf
            <h1 class="text-center text-xl font-semibold">Stwórz nowego użytkownika:</h1>
            
            <div class="flex flex-col py-1">
                <label for="email" class="mb-1 font-semibold">Email uzytkownika:</label>
                <input type="text" id="email" name="email" 
                       class="@error('email') is-invalid @enderror w-full border border-white bg-transparent rounded-lg p-3 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-white" />
            </div>

            <div class="flex flex-col py-1">
                <label for="name" class="mb-1 font-semibold">Stwórz login:</label>
                <input type="text" id="name" name="name" 
                       class="@error('name') is-invalid @enderror w-full border border-white bg-transparent rounded-lg p-3 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-white" />
            </div>
            
            <div class="flex flex-col py-1">
                <label for="password" class="mb-1 font-semibold">Hasło:</label>
                <input type="password" id="password" name="password" 
                       class="@error('password') is-invalid @enderror w-full border border-white bg-transparent rounded-lg p-3 text-white focus:outline-none focus:ring-2 focus:ring-white" />
            </div>

            <div class="flex flex-col py-1">
                <label for="password_confirm" class="mb-1 font-semibold">Powtórz hasło:</label>
                <input type="password" id="password_confirm" name="password_confirm" 
                       class="@error('password_confirm') is-invalid @enderror w-full border border-white bg-transparent rounded-lg p-3 text-white focus:outline-none focus:ring-2 focus:ring-white" />
            </div>

            <div class="flex flex-col py-2">
                <input type="submit" value="Utwórz" 
                   class="w-full border border-white text-white py-6 rounded-lg hover:bg-white hover:text-black cursor-pointer transition" />
            </div>
            
        </form>
        @error('email')
                    <div class="alert alert-danger w-full text-white">{{ $message }}</div>
        @enderror
        @error('name')
                <div class="alert alert-danger w-full text-white">{{ $message }}</div>
        @enderror
        @error('password')
                <div class="alert alert-danger w-full text-white">{{ $message }}</div>
        @enderror
    </div>
</x-layouts.app>