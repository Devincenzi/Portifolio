<footer>
    <div class='w-full flex flex-col md:flex-row items-center justify-around text-slate-100 p-3 border-t border-slate-800'>
        <span class='font-bold text-2xl'>Entre em <x-highlight-text>Contato</x-highlight-text></span>
        <form action='/api/sendemail' method='POST' class='w-3/4 md:w-1/2 grid grid-cols-6'>
            @csrf
            <div class='col-span-6 md:col-span-3 input-group'>
                <label>Nome</label>
                <input name='nome' value='' type='text' class='rounded-md' placeholder="José da Silva"/>
            </div>

            <div class='col-span-6 md:col-span-3 input-group'>
                <label>Assunto</label>
                <input name='assunto' value='' type='text' class='rounded-md' placeholder="Serviço"/>
            </div>

            <div class='col-span-6 input-group'>
                <label>Email</label>
                <input name='email' value='' type='email' class='rounded-md' placeholder="nome.sobrenome@gmail.com"/>
            </div>
            
            <div class='col-span-6 input-group'>
                <label>Mensagem</label>
                <textarea name='mensagem' value='' rowspan='3' class='rounded-md' placeholder="Que site bacana, desejo conversar para fazer o meu! Pago muito bem!"></textarea>
            </div>

            <div class='col-span-6 flex justify-end pr-3 pl-4'>
                <button type="submit" class="text-center text-slate-200 w-full sm:w-auto bg-gradient-to-r from-sky-500 to-cyan-400 font-semibold text-sm sm:text-base p-2 rounded-md transition-colors ease-in duration-300 hover:from-sky-600 hover:to-cyan-500">ENVIAR</button>
            </div>
        </form>
    </div>
    <div class='h-10 flex justify-center items-center text-sm text-slate-100'>© Copyright 2022 by Astro boilerplate.</div>
</footer>