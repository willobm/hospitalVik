<x-app-layout>
    <div class="container py-8 bg-red-500">
        <div class="grid grid-cols-3 gap-6">

            @foreach ($personas as $persona)
                <article class="w-full h-80 bg-cover bg-center">
                    {{$persona->name}}
                    <h1> - </h1>
                    {{$persona->fechanac}}
                </article>
            @endforeach
        </div>
    </div>
</x-app-layout>