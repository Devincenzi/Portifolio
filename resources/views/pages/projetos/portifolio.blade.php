@extends('layout.app')

@section('content')
    <div class="px-5 md:px-0 h-fit w-full text-center">
        <x-highlight-text class="font-bold text-4xl sm:text-6xl my-3">PORTFÓLIO</x-highlight-text>
        <div class='font-semibold my-8 text-lg text-justify'>
            Este é meu portfólio onde vou colocar meus contatos, projetos, e comentar um pouco sobre eles. 
            Sempre gostei muito de jogar e mais recentemente de desenvolver jogos, 
            então resolvi adicionar alguns clássicos no projeto, por serem projetos concisos e 
            onde podem ser exploradas várias ferramentas do frontend.
            <br/>
            <br/>
            O código completo pode ser explorado em 
            <x-highlight-text class='font-bold'><a href='github.com/Devincenzi/Portifolio'>github.com/Devincenzi</a></x-highlight-text>.
        </div>
    </div>
    <div id='tecnologias' class='text-slate-100 min-h-screen w-full mb-5 md:mb-0 py-5 px-10 flex justify-around items-center'>
        <div class='px-5 md:px-0 md:w-3/5'>
            <span class='font-semibold text-2xl sm:text-4xl text-center block mb-16'>TECNOLOGIAS</span>
            <ul class="mb-2 list-inside list-bullet-gradient text-justify sm:text-lg">
                <li class='my-8'><span class='text-xl'>Back-end: </span>
                    <x-highlight-text class='font-semibold'><a href='laravel.com/docs/9.x/'>Laravel v9.4</a></x-highlight-text>, um framework PHP robusto e confiável, que estava estudando no momento
                </li>
                <li class='my-8'><span class='text-xl'>Front-end: </span>
                    <x-highlight-text class='font-semibold'><a href='https://vuejs.org/'>Vue v3.2</a></x-highlight-text>, uma biblioteca JS que me permitiu criar uma interface interativa e dinâmica, e tem uma sinergia excelente com o Laravel.
                </li>
                <li class='my-8'><span class='text-xl'>Para estilizar a página: </span>
                    <x-highlight-text class='font-semibold'><a href='https://tailwindcss.com/'>Tailwindcss v3.2</a></x-highlight-text>, um framework CSS que me proporcionou agilidade e flexibilidade no desenvolvimento do layout.
                </li>
                <li class='my-8'><span class='text-xl'>Editor de texto: </span>
                    <x-highlight-text class='font-semibold'><a href='https://code.visualstudio.com/'>VS Code</a></x-highlite-text>, um editor simples de trabalhar, que me trouxe muita facilidade no desenvolvimento com suas extensões, principalmente do tailwind e vue, além, é claro, do git incorporado ao editor.
                </li>
            </ul>
        </div>
    </div>

    <x-divider/>

    <div id='design' class='h-screen w-full flex flex-col justify-around'>
        <span class='font-semibold text-2xl sm:text-4xl text-center block'>DESING</span>
        <div class='py-5 px-10 flex flex-col md:flex-row justify-around items-center'>
            <clickable-image :size='"{{"w-3/4 md:w-2/4"}}"' class='my-5 md:my-0 rounded-md' :imagepath='"{{"/images/projetos/template.png"}}"'></clickable-image>
            <span class='w-4/5 md:w-2/5 text-justify text-lg'>
                Para este projeto utilizei como base o template 
                <x-highlight-text class='font-bold text-xl'>
                    <a href='https://creativedesignsguru.com/demo/astro-boilerplate/' title="template">Astro Boilerplate</a>
                </x-highlight-text> 
                do Tailwind. A escolha de cores e as artes com estética cartunesca descontraída condizem perfeitamente
                com o design que eu procurava.
            </span>
        </div>
    </div>

    <x-divider/>

    <div id='conteudo' class='min-h-screen w-full flex flex-col justify-around'>
        <div class='w-full text-center font-bold text-2xl sm:text-4xl block'>CONTEÚDO</div>
        <div class='w-full flex flex-col md:flex-row justify-around items-center'>
            <div class="sm:w-3/4 px-5 md:px-0 md:w-2/5 text-justify">
                <span class='font-semibold md:text-lg'>O texto de apresentação foi gerado pelo ChatGPT 3, em resposta ao seguinte prompt: </span>
                <br/>
                "<i class='font-light'>eu sou um desenvolvedor web fullstack com conhecimento em PHP, JS, MySQL, Laravel, React e Vue, gosto de jogos, crie um texto curto de apresentação para minha página pessoal</i>"
            </div>
            <clickable-image :size='"{{"w-3/4 my-4 sm:w-2/4 md:my-0 md:w-2/5"}}"' :imagepath='"{{"/images/projetos/apresentacao.png"}}"'></clickable-image>
        </div>

        <div class='w-full flex flex-col-reverse md:flex-row justify-around items-center'>
            <div class='flex w-3/4 my-4 px-5 md:w-2/5 md:my-0 md:px-0'>
                <div class='w-2/4'>
                    <span class='font-semibold text-center block w-full'>Original</span>
                    <clickable-image :imagepath='"{{"/images/avatar_original.png"}}"'></clickable-image>
                </div>
                <div class='w-2/4'>
                    <span class='font-semibold text-center block w-full'>Refinada</span>
                    <clickable-image :imagepath='"{{"/images/avatar.png"}}"'></clickable-image>
                </div>
            </div>
            <div class='sm:w-3/4 px-5 text-justify md:w-2/5'>
                <span class='font-semibold md:text-lg'>Para o avatar, dei ao BlueWillow o prompt:</span>
                <br/>
                "<i class='font-light'>adventure time style, vibrant colors, well colored, portrait, young brazilian guy, dark curly long hair, dark short beard, deep blue glasses, wearing a red and black flannel plaid shirt, nice and kind face with a big smile</i>".
                <br/>
                <span class='font-semibold md:text-lg'>Pedi para gerar novamente até encontrar um resultado satisfatório, que depois foi refinado pelo </span>
                    <x-highlight-text class='font-semibold text-lg'><a href='https://instagram.com/vitrucianos?igshid=ZWIzMWE5ZmU3Zg=='>@vitrucianos</a></x-highlight-text>
            </div>
        </div>
    </div>

    <x-divider/>

    <div id='estaporvir' class='h-screen w-full flex flex-col justify-around px-5'>
        <span class='w-full text-center font-bold text-2xl sm:text-4xl block'>O QUE ESTÁ POR VIR</span>
        <div class='flex flex-col justify-start h-2/3'>
            <span class='font-semibold text-lg md:text-xl'>Como a prioridade era ter uma página online, por enquanto é apenas conteúdo estático.</span>
            <div class='w-full font-semibold'>
                <br/>
                <ul class='mb-2 list-inside list-bullet-gradient text-justify md:text-lg'>
                    <span class='text-lg md:text-xl'>Os <x-highlight-text>próximos passos</x-highlight-text> são:</span>
                    <li class='my-6 ml-6'>Criar uma área administrativa com CRUD para manter o conteúdo do site.</li>
                    <li class='my-6 ml-6'>Construir os jogos "Show do Milhão", "Tap-ganso" e "Batalha Naval"</li>
                </ul>
            </div>
        </div>
    </div>
@endsection