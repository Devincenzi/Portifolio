<section>
    <div class='w-full flex flex-col md:flex-row items-center justify-around text-slate-100 p-3 border-t border-slate-800'>
        <span class='font-bold text-2xl'>Entre em <x-highlight-text>Contato</x-highlight-text></span>
        <form action='/sendemail' method='POST' class='w-3/4 md:w-1/2 grid grid-cols-6'>
            @csrf
            <div class='col-span-6 md:col-span-3 input-group'>
                <label>Nome</label>
                <input name='nome' value='' type='text' class='rounded-md' placeholder="José da Silva"/>
            </div>

            <div class='col-span-6 md:col-span-3 input-group'>
                <label>Email</label>
                <input name='nome' value='' type='email' class='rounded-md' placeholder="nome.sobrenome@gmail.com"/>
            </div>
            
            <div class='col-span-6 input-group'>
                <label>Mensagem</label>
                <textarea name='mensagem' value='' rowspan='3' class='rounded-md' placeholder="Que site bacana, desejo conversar para fazer o meu! Pago muito bem!"></textarea>
            </div>
        </form>
    </div>
    <div class='h-10 flex justify-center items-center text-sm text-slate-100'>© Copyright 2022 by Astro boilerplate.</div>
</section>