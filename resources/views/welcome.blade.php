@extends('layouts.app')

@section('content')

<body>

    <main class="text-center bg-light py-5">
       <h1>Laravel Comics</h1>
       <ul>
            <li>/comics -> per vedere la lista dei fumetti</li>
            <li>/comics/idfumetto -> per vedere la lista dei fumetti</li>
            <li>/comics/create -> per aggiungere un fumetto</li>
       </ul>
    </main>

</body>

@endsection

@section('page-title','Home')