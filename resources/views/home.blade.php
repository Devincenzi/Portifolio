@extends('layout.app')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

@section('content')
    <section class='px-3 mx-auto md:px-6 lg:px-8 max-w-7xl'>
        <div class="flex justify-around relative items-center w-full">
            <div>
                <div class='text-slate-100 font-bold text-2xl sm:text-xl'>
                    Seja bem-vindo, eu sou <x-highlight-text>André</x-highlight-text>👋
                </div>
                <div class="text-slate-100 pt-2 text-sm font-medium sm:text-base sm:pt-5 sm:!leading-8">
                    Sou um desenvolvedor <x-highlight-text>web fullstack</x-highlight-text> com habilidades em diversas linguagens e frameworks, 
                    como <x-highlight-text>PHP,</x-highlight-text> <x-highlight-text>C#,</x-highlight-text> <x-highlight-text>JavaScript,</x-highlight-text> <x-highlight-text>Laravel,</x-highlight-text> <x-highlight-text>React</x-highlight-text> e <x-highlight-text>Vue</x-highlight-text>. 
                    Além disso, sou um grande fã de jogos e sempre busco incluir elementos lúdicos e divertidos 
                    em meus projetos. 
                    Aqui você encontrará mais informações sobre mim, meu trabalho e projetos em que estou envolvido.
                    Sinta-se à vontade para explorar e entrar em contato para conversarmos sobre possíveis projetos juntos!
                </div>
                <!-- <div class="text-slate-100 pt-5 font-medium">
                    Sou um desenvolvedor <x-highlight-text>web fullstack</x-highlight-text> com habilidades em 
                    <x-highlight-text>PHP,</x-highlight-text> <x-highlight-text>JS,</x-highlight-text> 
                    <x-highlight-text>MySQL,</x-highlight-text> <x-highlight-text>Laravel,</x-highlight-text> 
                    <x-highlight-text>React</x-highlight-text> e <x-highlight-text>Vue,</x-highlight-text> e apaixonado por jogos. 
                    Em minha página pessoal, você encontrará exemplos do meu trabalho em projetos web e jogos. 
                    <x-highlight-text>Entre em contato</x-highlight-text> para discutir oportunidades de colaboração
                </div> -->
            </div>
            <div class='flex justify-end'>
                <img class='max-w-[10rem] sm:max-w-xs' src='/images/avatar.png'/>
            </div>
        </div>
        <div>
            <div class='text-slate-100 font-bold text-xl py-8'>
                Projetos <x-highlight-text>recentes</x-highlight-text>
            </div>

            <a href='/projetos/portifolio'>
                <div class='flex w-full hover:cursor-pointer my-5 py-3 sm:py-6 bg-slate-800 hover:ring-4 hover:-translate-y-2 ring-sky-500 rounded-xl transition-all duration-150 ease-in'>
                    <div class='flex items-center w-1/6 ml-3 sm:ml-5'>
                        <img src='/images/avatar.png'/>
                    </div>
                    <div class='w-3/5 ml-1 sm:ml-2'>
                        <div class='flex'>
                            <div class='text-slate-100 font-semibold mr-2 text-xl'>Portifolio</div>
                            <div class='bg-gradient-to-r from-rose-400 to-red-400 text-slate-800 rounded-lg text-sm mx-1 font-semibold px-1 flex justify-center items-center'>Laravel</div>
                            <div class='bg-gradient-to-r from-emerald-400 to-green-400 text-slate-800 rounded-lg text-sm mx-1 font-semibold px-1 flex justify-center items-center'>Vue</div>
                            <div class='bg-gradient-to-r from-sky-400 to-cyan-400 text-slate-800 rounded-lg text-sm mx-1 font-semibold px-1 flex justify-center items-center'>Tailwindcss</div>
                        </div>
                        <div class='text-slate-400 my-4 text-lg'>
                            Este é meu portifolio onde vou colocar meus contatos, projetos, 
                            e comentar um pouco sobre eles.
                        </div>
                    </div>
                </div>
            </a>

            <a href='/projetos/cobra'>
                <div class='flex w-full hover:cursor-pointer py-3 sm:py-6 my-5 bg-slate-800 hover:ring-4 hover:-translate-y-2 ring-sky-500 rounded-xl transition-all duration-150 ease-in'>
                    <div class='flex items-center w-1/6 ml-5'>
                        <img src='/images/snakeLogo.png'/>
                    </div>
                    <div class='w-3/5 ml-2'>
                        <div class='flex'>
                            <div class='text-slate-100 font-semibold mr-2 text-xl'>Cobra</div>
                            <div class='bg-gradient-to-r from-emerald-400 to-green-400 text-slate-800 rounded-lg text-sm mx-1 font-semibold px-1 flex justify-center items-center'>Vue</div>
                        </div>
                        <div class='text-slate-400 my-4 text-lg'>
                            Uma reprodução do clássico jogo da cobra, construído em Vue.
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
@endsection