<div class='container'>
    <h2 class='titulo'>{{ $nomeContato }} enviou uma mensagem!</h2>
    <p class='mensagem'>
        {{ $mensagem }}
    </p>
</div>

<style>
    .container{
        width: 100%;
        background-color: #0f172a;
        border: 1px #475569 solid;
    }

    .titulo{
        color: #f1f5f9;
        width: 100%;
        text-align: center;
        border: 1px #475569 solid;
    }

    .mensagem{
        color: #f1f5f9;
    }

    .mensagem::first-letter{
        text-transform: uppercase;
    }
</style>