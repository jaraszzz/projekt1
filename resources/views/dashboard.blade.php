<x-layouts.app :title="__('Dashboard')">
<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <h2 class="text-center">Number of users</h2>
                {{$uzytkownicy->count()}}
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <h2 class="text-center">Last added user</h2>
                <table>
                    <tbody>
                            <tr>
                                <th>
                                    {{$uzytkownik1->name}}  
                                </th>
                                <td>
                                    {{$uzytkownik1->email}}
                                </td>
                            </tr>
                    </tbody>
                </table>

            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <h2 class="text-center">Users added last week</h2>
                {{$users_last_week}}

            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <h1 class="text-center text-6xl font-bold text-blue-500">Uzytkownicy</h1>
            
            <div class="overflow-y-auto max-h-96">
                <table class="table-auto w-full">
                    <thead>
                        <tr class="border-b border-neutral-300 dark:border-neutral-600">
                            <th class="text-left py-2">ID</th>
                            <th class="text-left py-2">Name</th>
                            <th class="text-left py-2">EMAIL</th>
                            <th class="text-left py-2">CREATED_AT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($uzytkownicy as $uzytkownik)
                            <tr class="border-b border-neutral-200 dark:border-neutral-700">    
                                <td class="py-4">
                                    {{$uzytkownik->id}}
                                </td>
                                <td class="py-4 font-semibold">
                                    {{$uzytkownik->name}}
                                </td>
                                <td class="py-4">
                                    {{$uzytkownik->email}}
                                </td> 
                                <td class="py-4">
                                    {{$uzytkownik->created_at}}
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <h1 class="text-center text-6xl font-bold text-blue-500 ">Rejestr wejsc i wyjsc</h1>
            <table class="table-auto w-full">
                <thead>
                    <tr class="border-b border-neutral-300 dark:border-neutral-600">
                        <th class="text-left py-2">
                            ID
                        </th>
                        <th class="text-left py-2">
                            IMIĘ I NAZWISKO
                        </th>
                        <th class="text-left py-2">
                            WEJŚCIE
                        </th>
                        <th class="text-left py-2">
                            PODMIOT
                        </th>
                        <th class="text-left py-2">
                            CEL WIZYTY
                        </th>
                        <th class="text-left py-2">
                            PRACOWNIK
                        </th>
                        <th class="text-left py-2">
                            WEJŚCIE
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rejestr as $rejestrr)
                        <tr class="border-b border-neutral-200 dark:border-neutral-700">
                            <td class="py-4">
                                {{$rejestrr->id}}
                            </td>
                            <td class="py-4 font-semibold">
                                {{$rejestrr->imie_i_nazwisko}}
                            </td>
                            <td class="py-4">
                                {{$rejestrr->wejscie}}
                            </td> 
                            <td class="py-4">
                                {{$rejestrr->nazwa_podmiotu}}
                            </td> 
                            <td class="py-4">
                                {{$rejestrr->cel_wizyty}}
                            </td> 
                            <td class="py-4 font-semibold">
                                {{$rejestrr->imie_i_nazwisko_pracownik}}
                            </td>
                            <td class="py-4">
                                {{$rejestrr->ent}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</x-layouts.app>
