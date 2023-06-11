@extends('layout.app')

@section('content')
    <div class="w-full">
        <x-highlight-text class="font-bold text-6xl my-3">PORTFÓLIO</x-highlight-text>
        <div class='font-semibold my-8 w-4/5 text-justify text-lg'>
            Este é meu portfólio onde vou colocar meus contatos, projetos, e comentar um pouco sobre eles. 
            Sempre gostei muito de jogar e mais recentemente de desenvolver jogos, 
            então resolvi adicionar alguns clássicos no projeto, por serem projetos concisos e 
            onde podem ser exploradas várias ferramentas do frontend.
            <br/>
            <br/>
            O código completo pode ser explorado em 
            <x-highlight-text class='font-bold text-xl'><a class='highlight-underline' href='github.com/Devincenzi/Portifolio'>github.com/Devincenzi</a></x-highlight-text>.
        </div>
        
        <div class='bg-slate-700 text-slate-50 h-screen w-full rounded-t-xl py-5 px-10 flex justify-around items-center'>
            <div class='w-3/5'>
                <span class='font-semibold text-2xl text-center block'>TECNOLOGIAS</span>
                <ul class="mb-2 list-inside list-bullet-gradient text-justify text-xl">
                    <li class='my-8'>Back-end: 
                        <x-highlight-text class='font-semibold'><a href='laravel.com/docs/9.x/'>Laravel v9.4</a></x-highlight-text>, um framework PHP robusto e confiável, que estava estudando no momento
                    </li>
                    <li class='my-8'>Front-end: 
                        <x-highlight-text class='font-semibold'><a href='https://vuejs.org/'>Vue v3.2</a></x-highlight-text>, uma biblioteca JS que me permitiu criar uma interface interativa e dinâmica, e tem uma sinergia excelente com o Laravel.
                    </li>
                    <li class='my-8'>Para estilizar a página: 
                        <x-highlight-text class='font-semibold'><a href='https://tailwindcss.com/'>Tailwindcss v3.2</a></x-highlight-text>, um framework CSS que me proporcionou agilidade e flexibilidade no desenvolvimento do layout.
                    </li>
                </ul>
            </div>
        </div>
        <div class='bg-slate-800 h-screen w-full py-5 px-10 flex justify-around items-center'>
            <img class='w-2/4 rounded-md border border-slate-600' src='/images/projetos/template.png'/>
            <span class='w-2/5 text-justify text-lg'>
                Para este projeto utilizei como base o template 
                <x-highlight-text class='font-bold text-xl'>
                    <a href='https://creativedesignsguru.com/demo/astro-boilerplate/' title="template">Astro Boilerplate</a>
                </x-highlight-text> 
                do Tailwind. A escolha de cores e as artes com estética cartunesca descontraída condizem perfeitamente
                com o design que eu procurava.
            </span>
        </div>

         <div class='bg-slate-700 h-screen w-full py-10 px-10 flex flex-col justify-around'>
            <div class='w-full flex justify-around items-center'>
                <div class="w-2/5 text-justify">
                    <span class='font-semibold text-lg'>O texto de apresentação foi gerado pelo ChatGPT 3, em resposta ao seguinte prompt: </span>
                    <br/>
                    "<i class='font-light'>eu sou um desenvolvedor web fullstack com conhecimento em PHP, JS, MySQL, Laravel, React e Vue, gosto de jogos, crie um texto curto de apresentação para minha página pessoal</i>"
                </div>
                <img class='w-2/5 rounded-md border border-slate-600' src='/images/projetos/apresentacao.png'/>
            </div>

            <div class='w-full flex justify-around items-center'>
                <div class='flex w-2/5'>
                    <div class='w-2/4'>
                        <span class='font-semibold text-center block w-full'>Original</span>
                        <img class='rounded-md border border-slate-600' src='/images/avatar_original.png'/>
                    </div>
                    <div class='w-2/4'>
                        <span class='font-semibold text-center block w-full'>Refinada</span>
                        <img class='rounded-md border border-slate-600' src='/images/avatar.png'/>
                    </div>
                </div>
                <div class='w-2/5 text-justify'>
                    <span class='font-semibold text-lg'>Para o avatar, dei ao BlueWillow o prompt:</span>
                    <br/>
                    "<i class='font-light'>adventure time style, vibrant colors, well colored, portrait, young brazilian guy, dark curly long hair, dark short beard, deep blue glasses, wearing a red and black flannel plaid shirt, nice and kind face with a big smile</i>".
                    <br/>
                    <span class='font-semibold text-lg'>Pedi para gerar novamente até encontrar um resultado satisfatório, que depois foi refinado pelo </span>
                        <x-highlight-text class='font-semibold text-lg'><a href='https://instagram.com/vitrucianos?igshid=ZWIzMWE5ZmU3Zg=='>@vitrucianos</a></x-highlight-text>
                </div>
            </div>
         </div>
    </div>
@endsection