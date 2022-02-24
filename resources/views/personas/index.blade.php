<x-app-layout>
    <div class="container bg-red-500">
        <div class="grid grid-cols-3 gap-6">

            @foreach ($personas as $persona)
                <article>
                    {{$persona->name}}
                    {{$persona->fechanac}}
                </article>
            @endforeach
        </div>
    </div>
</x-app-layout>