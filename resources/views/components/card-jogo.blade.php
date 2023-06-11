<a href="{{ $jogoLink ?? ''}}">
    <div class="col-span-1 mx-8 my-2 group/cobra hover:ring-4 hover:-translate-y-1 ring-sky-500 rounded-xl transition-all duration-150 ease-in">
        <div class="bg-slate-700 bg-opacity-60
            group-hover/cobra:bg-opacity-90 rounded-t-xl transition-all duration-150 ease-in">
            <div class="font-extrabold py-1 text-xl text-center bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent group-hover/cobra:from-sky-400 group-hover/cobra:to-cyan-300 group-hover/cobra:drop-shadow-md">
                {{ $titulo }}
            </div>
        </div>
        <div class="bg-slate-800 bg-opacity-50 min-h-[10rem] text-gray-200 rounded-b-xl px-4 py-3 flex flex-col items-center gap-x-8 md:flex-row 
            group-hover/cobra:bg-opacity-80 transition-all duration-150 ease-in">
            <div class="w-1/5">
                {{ $imagem }}
            </div>
            <p class="w-3/5 text-sm break-words">
                {{ $texto }}
            </p>
        </div>
    </div>
</a>