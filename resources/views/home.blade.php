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
                <div class='mt-10 flex'>
                    <a href='https://wa.me/5553999106606' title="Entre em contato pelo whatsapp!" class='mr-2 transition-transform hover:scale-125 hover:-translate-y-1 duration-200'><img class='w-8 sm:w-10' src='/images/whatsapp.png'/></a>
                    <a href='https://github.com/Devincenzi' title="Meu Github" class='bg-gradient-to-br from-stone-200 to-stone-300 rounded-xl mx-2 transition-transform hover:scale-125 hover:-translate-y-1 duration-200'><img class='w-8 sm:w-10' src='/images/github.png'/></a>
                    <a href='https://linkedin.com/in/andré-devincenzi-14b68b163/' title='Meu Linkedin' class="mx-2 transition-transform hover:scale-125 hover:-translate-y-1 duration-200"><img src='/images/linkedin.png' class='w-8 sm:w-10'/></a>
                </div>
            </div>
            <div class='flex justify-end'>
                <img class='max-w-[10rem] sm:max-w-xs' src='/images/avatar.png'/>
            </div>
        </div>
        <div>
            <div class='text-slate-100 font-bold text-xl py-8'>
                Projetos <x-highlight-text>recentes</x-highlight-text>
            </div>

            <a href='/projetos/portfolio'>
                <div class='flex w-full hover:cursor-pointer my-5 py-4 sm:py-6 bg-slate-800 hover:ring-4 hover:-translate-y-2 ring-sky-500 rounded-xl transition-all duration-150 ease-in'>
                    <div class='flex items-center w-1/6 ml-3 sm:ml-5'>
                        <img src='/images/avatar.png'/>
                    </div>
                    <div class='w-3/5 ml-1 sm:ml-2'>
                        <div class='flex'>
                            <div class='text-slate-100 font-semibold mr-2 text-xl'>Portfolio</div>
                            <div class='bg-gradient-to-r from-rose-400 to-red-400 text-slate-800 rounded-lg text-sm mx-1 font-semibold px-1 flex justify-center items-center'>Laravel</div>
                            <div class='bg-gradient-to-r from-emerald-400 to-green-400 text-slate-800 rounded-lg text-sm mx-1 font-semibold px-1 flex justify-center items-center'>Vue</div>
                            <div class='bg-gradient-to-r from-sky-400 to-cyan-400 text-slate-800 rounded-lg text-sm mx-1 font-semibold px-1 flex justify-center items-center'>Tailwindcss</div>
                        </div>
                        <div class='text-slate-400 my-1 sm:ml-4 text-lg'>
                            Este é meu portfolio onde vou colocar meus contatos, projetos, 
                            e comentar um pouco sobre eles.
                        </div>
                    </div>
                </div>
            </a>

            <a href='/projetos/cobra'>
                <div class='flex w-full hover:cursor-pointer py-4 sm:py-6 my-5 bg-slate-800 hover:ring-4 hover:-translate-y-2 ring-sky-500 rounded-xl transition-all duration-150 ease-in'>
                    <div class='flex items-center w-1/6 ml-5'>
                        <img src='/images/snakeLogo.png'/>
                    </div>
                    <div class='w-3/5 ml-2'>
                        <div class='flex'>
                            <div class='text-slate-100 font-semibold mr-2 text-xl'>Cobra</div>
                            <div class='bg-gradient-to-r from-emerald-400 to-green-400 text-slate-800 rounded-lg text-sm mx-1 font-semibold px-1 flex justify-center items-center'>Vue</div>
                        </div>
                        <div class='text-slate-400 my-1 sm:my-4 text-lg'>
                            Uma reprodução do clássico jogo da cobra, construído em Vue.
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
@endsection