<x-layouts.app :title="__('Dashboard')">
<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <h2>Number of users</h2>
                {{$uzytkownicy->count()}}
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <h2>Last added user</h2>
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
                <h2>Users added last week</h2>
                {{$users_last_week}}

            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>EMAIL</th>
                        <th>CREATED_AT</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($uzytkownicy as $uzytkownik)
                        <tr>    
                            <td>
                                {{$uzytkownik->id}}
                            </td>
                            <th>
                                {{$uzytkownik->name}}
                            </th>
                            <td>
                                {{$uzytkownik->email}}
                            </td> 
                            <td>
                                {{$uzytkownik->created_at}}
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
