@extends('layouts.app')

@section('page-title', 'Help')

@section('content')
    <div id="help_page" class="py-4">

        <section>
            <h2>Come Posso Aiutarti?</h2>
            <p>Benvenuto nella pagina di aiuto! Siamo qui per fornirti assistenza e rispondere alle tue domande. Se hai
                bisogno
                di informazioni su un particolare argomento, consulta le seguenti sezioni:</p>

            <ul>
                <li><a href="#account">Gestione dell'Account</a></li>
                <li><a href="#servizi">Servizi Offerti</a></li>
                <li><a href="#risoluzione">Risoluzione Problemi</a></li>
            </ul>
        </section>

        <section id="account">
            <h2>Gestione dell'Account</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A amet facilis reprehenderit debitis unde delectus quidem tempora, maiores reiciendis itaque minus, perspiciatis laboriosam deserunt explicabo, illum aperiam nulla eos numquam!</p>
        </section>

        <section id="servizi">
            <h2>Servizi Offerti</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, placeat iste. Doloremque sed amet eaque cumque porro quis similique ad explicabo corrupti obcaecati voluptatem vel quidem nulla, repellendus, libero nostrum?</a>.
            </p>
        </section>

        <section id="risoluzione">
            <h2>Risoluzione Problemi</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, assumenda repudiandae. Ut porro dolores explicabo corporis cumque quia illo optio quas atque, sunt saepe expedita aspernatur facere veniam commodi. Odio.</p>
        </section>

    </div>
@endsection
