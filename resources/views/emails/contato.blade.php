<div class='container'>
    <h1 class='titulo'>{{ $nomeContato }} enviou uma mensagem!</h1>
    <p class='mensagem'>
        {{ $mensagem }}
    </p>
</div>

<style>
    .container{
        width: 100%;
        background-color: #0f172a;
        border: 2px #475569 solid;
        border-radius: 10px;
    }

    .titulo{
        color: #f1f5f9;
        width: 100%;
        text-align: center;
        border-bottom: 1px #475569 solid;
        padding: 1rem 0;
    }

    .mensagem{
        color: #f1f5f9;
        font-size: large;
        padding: 1rem;
        line-height: 1.25rem;
        text-align: justify;
    }

    .mensagem::first-letter{
        text-transform: uppercase;
    }
</style>