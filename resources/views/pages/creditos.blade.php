@extends('layout.app')

@section('content')

<div class='text-xl font-semibold text-slate-100'>
    Esta página é dedicada aos créditos de todos autores cujos itens utilizei neste projeto.
</div>

<section>
    <ul class='list-bullet-gradient'>
        <li class="flex my-4">
            <ul class='list-bullet-gradient'><span class="text-lg font-semibold">Ícones</span>
                <li class='flex items-center my-2'><img src="/images/whatsapp.png" class="w-8 mx-2"/> <a href="https://www.flaticon.com/free-icons/whatsapp" title="whatsapp icons">Whatsapp icons created by <x-highlight-text>Ruslan Babkin</x-highlight-text> - Flaticon</a></li>
                <li class='flex items-center my-2'><img src="/images/linkedin.png" class="w-8 mx-2"/> <a href="https://www.flaticon.com/free-icons/linkedin" title="linkedin icons">Linkedin icons created by <x-highlight-text>Ruslan Babkin</x-highlight-text> - Flaticon</a></li>
                <li class='flex items-center my-2'><img src="/images/github.png" class="w-8 mx-2"/> <a href="https://www.flaticon.com/free-icons/github" title="github icons">Github icons created by <x-highlight-text>Laisa Islam</x-highlight-text> Ani - Flaticon</a></li>
                <li class='flex items-center my-2'><img src="/images/snake/UI/wasd.png" class="w-8 mx-2"/> <a href="https://www.flaticon.com/free-icons/wasd" title="wasd icons">Wasd icons created by <x-highlight-text>manshagraphics</x-highlight-text> - Flaticon</a></li>
                <li class='flex items-center my-2'><img src="/images/snake/UI/arrows.png" class="w-8 mx-2"/> <a href="https://www.flaticon.com/free-icons/keyboard" title="keyboard icons">Keyboard icons created by <x-highlight-text>deemakdaksina</x-highlight-text> - Flaticon</a></li>
                <li class='flex items-center my-2'>
                    <img src="/images/snake/UI/arrow-left.png" class="w-8 mx-1"/> 
                    <img src="/images/snake/UI/arrow-up.png" class="w-8 mx-1"/> 
                    <img src="/images/snake/UI/arrow-down.png" class="w-8 mx-1"/> 
                    <img src="/images/snake/UI/arrow-right.png" class="w-8 mx-1"/> 
                    <a href="https://www.flaticon.com/free-icons/right-arrow" title="arrow icons">Arrow icons created by <x-highlight-text>Freepik</x-highlight-text> - Flaticon</a>
                </li>
            </ul>
        </li>
    <li class="flex my-4">
            <ul class='list-bullet-gradient'><span class="text-lg font-semibold">Imagens</span>
                <li class='flex items-center my-2'>Sprites do jogo da cobra: <a href='https://rembound.com/articles/creating-a-snake-game-tutorial-with-html5' class='mx-1'><x-highlight-text>rembound.com/articles</x-highlight-text></a></li>
                <li class='flex items-center my-2'><img class='w-8 mx-2' src="/images/milhao.png"/> milho dos desenhos animados by <a href='https://www.pngwing.com/pt/free-png-dxhmt' class='mx-1'><x-highlight-text>pngwing</x-highlight-text></a></li>
                <li class='flex items-center my-2'><img class='w-8 mx-2' src="/images/battleship.png"/> warship battleship boat ship created by <a href='https://www.shutterstock.com/image-illustration/illustration-warship-battleship-boat-ship-big-101858635' class='mx-1'><x-highlight-text>patrimonio designs ltd - shutterstock</x-highlight-text></a></li>
            </ul>
        </li>
    </ul>
</section>

@endsection