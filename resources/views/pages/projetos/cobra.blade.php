@extends('layout.app')

@section('content')
    <div class="py-10 px-5 md:px-0 w-full text-center">
        <x-highlight-text class="font-bold text-4xl sm:text-6xl my-3">COBRA</x-highlight-text>
        <div class='font-semibold my-8 text-lg text-justify'>
            Os jogos foram o motivo de eu ter adicionado o Vue ao projeto. Já havia feito antes esse mesmo
            jogo utilizando apenas HTML e JavaScript, porém era um tanto quanto trabalhoso mudar a cada frame a parte lógica E a parte visual.
            A estrutura reativa do Vue, que permite mudar apenas a parte lógica, caiu como uma luva. 
            Aqui vamos dar uma olhada no fluxo do código, cujo em parte também foi gerado pelo chatGPT, mas precisou passar por diversas alterações.
            <br/>
            <br/>
            O código completo pode ser explorado em <x-highlight-text class='font-bold'><a href='https://github.com/Devincenzi/Portifolio/blob/main/resources/js/cobra/campoCobra.vue'>github.com/Devincenzi</a></x-highlight-text>
        </div>
    </div>
    <div class="text-slate-100 min-h-screen w-full flex flex-col justify-around">
        <span class='font-semibold text-2xl sm:text-4xl text-center block'>PARAMETROS</span>
        <div class='py-5 px-2 sm:px-10 flex flex-col sm:flex-row justify-around items-center'>

            <clickable-image :size='"{{ "w-full sm:w-3/5" }}"' :imagepath='"{{ "/images/projetos/cobra/variaveis.png" }}"'></clickable-image>

            <div class='w-full sm:w-2/3 px-4 font-semibold'>
                <ul class='mb-1 list-inside list-bullet-gradient text-justify'>Primeiro definimos os parametros do nosso jogo
                    <li>Os números de linhas e colunas <span class='text-sm font-thin'>(numRows, numCols)</span>, que depois vão ser multiplicados pelas dimensões de cada célula do campo <span class='text-sm font-thin'>(32px)</span> para definir o tamanho da div de inicio e fim de jogo</li>
                    <li>A matriz que vai guardar as informações lógicas do campo <span class='text-sm font-thin'>(grid)</span></li>
                    <li>A matriz que vai guardar as posições e a imagem de cada "pedaço" da cobra <span class='text-sm font-thin'>(snake)</span></li>
                    <li>A velocidade com que cada atualização ocorre <span class='text-sm font-thin'>(speed)</span></li>
                    <li>O objeto que vai guardar a posição da maçã (row, col) <span class='text-sm font-thin'>(food)</span></li>
                    <li>A pontuação <span class='text-sm font-thin'>(score)</span></li>
                    <li>As variáveis para controle se o jogo foi iniciado ou o jogador perdeu <span class='text-sm font-thin'>(isPlaying, gameOver)</span></li>
                    <li>O objeto que guarda a posição do efeito de quando uma maçã é comida e se ele deve ser mostrado <span class='text-sm font-thin'>(popup)</span></li>
                </ul>
            </div>
        </div>
    </div>
    
    <x-divider/>

    <div class="text-slate-100 min-h-screen w-full flex flex-col justify-around">
        <span class='font-semibold text-2xl sm:text-4xl text-center block'>ESTRUTURA</span>
        <div class='py-5 px-2 sm:px-10 flex flex-col md:flex-row justify-around items-center'>
            <div class='w-full sm:w-2/3 px-4'>
                <ul class='list-inside font-medium list-bullet-gradient mb-1 text-justify'><span class="font-semibold">Em seguida podemos montar a estrutura HTML e CSS</span>
                    <li>Aplicamos na div que contém o campo, as propriedades css para definir o alinhamento e a disposição de cada célula <span class='text-sm font-thin'>(imgs com a classe "cell", linha 14/15)</span></li>
                    <li>Em seguida a div que contém o botão de iniciar e as informações de fim de jogo, que sobrepõe o campo, condicionado às variáveis que vimos antes <span class='text-sm font-thin'>(isPlaying, gameOver)</span></li>
                    <li>Então, o mais importante, nosso campo, 
                        vamos iterar as linhas criadas dentro da variável grid pelo método que veremos a seguir <span class='text-sm font-thin'>(generateGrid, linha 76)</span> 
                        e então dentro de cada linha, iterar as colunas, criando assim, neste caso, 15 colunas em cada linha.
                    </li>
                    <li>Abaixo temos a pontuação que mostrada apenas enquanto o jogo está acontecendo</li>
                    <li>E finalmente o efeito que é disparado quando uma maçã é comida, condicionado a variável que vimos anteriormente <span class='text-sm font-thin'>(popup, linha 44)</span></li>
                </ul>
            </div>
            <clickable-image :size='"{{ "w-full sm:w-2/5" }}"' :imagepath='"{{ "/images/projetos/cobra/template.png" }}"'></clickable-image>
        </div>
    </div>

    <x-divider/>

    <lazy-component :wrapper-tag="section" :treshold='0.25'>
        <section class="text-slate-100 min-h-screen w-full flex flex-col items-center justify-around">
            <span class="font-semibold text-2xl sm:text-4xl text-center block">MÉTODOS</span>
            <carousel class="w-full sm:w-3/5 px-2 sm:px-0 sm:max-h-96" :imagesandtexts="{{json_encode([
                ['index'=>'0','imagepath'=>'/images/projetos/cobra/mounted.png', 'text'=>'Primeiro geramos nosso grid. Logo depois impedimos que a tela seja rolada caso o usuário esteja jogando.'],
                ['index'=>'1','imagepath'=>'/images/projetos/cobra/start_game.png', 'text'=>'Este método se trata apenas de definir os valores de volta ao padrão caso não seja a primeira run, colocar a maçã e cobra no grid, e dar movimento.'],
                ['index'=>'2','imagepath'=>'/images/projetos/cobra/generate_grid.png', 'text'=>'Para gerar o grid, vamos criar um loop sobre a variável numRows, e dentro dele outro loop para numCols, cada iteração do loop aninhado vai criar nossa célula do grid e adicioná-la ao array row. A cada iteração do loop externo o array é adicionado ao grid, que se torna uma matriz bidimensional.'],
                ['index'=>'3','imagepath'=>'/images/projetos/cobra/generate_snake.png', 'text'=>'Aqui nossa cobra é gerada da esquerda para a direita, sendo a cauda, o primeiro elemento gerado, mas como cada elemento é inserido no início do array Cobra, ao final do loop ela será o último elemento, e a cabeça o primeiro. Em seguida faz-se um loop para definir as informações lógicas de cada célula do grid ocupada pela cobra, e sua imagem.'],
                ['index'=>'4','imagepath'=>'/images/projetos/cobra/generate_food.png', 'text'=>'Geramos valores aleatórios dentro do número de linhas e colunas do grid enquanto o par ordenado gerado não for uma célula ocupada pela cobra e então mudamos sua imagem para a da maçã.'],
                ['index'=>'5','imagepath'=>'/images/projetos/cobra/move_snake.png', 'text'=>'Antes de realizar o movimento, checamos se ocorreu uma colisão com algo. Em seguida pegamos as posições da cabeça atual e da cauda, que são as únicas células que serão movidas, assim podemos remover a cauda, e adicionar um novo par ordenado ao array da cobra baseado na direção que estamos seguindo.'],
                ['index'=>'6','imagepath'=>'/images/projetos/cobra/colisoes.png', 'text'=>'O primeiro teste é para as paredes, o segundo para o corpo da cobra e o terceiro para maçã. Se uma maçã foi comida, adicionamos uma nova célula à cobra, mostramos o efeito popup e geramos uma nova maçã.'],
                ['index'=>'7','imagepath'=>'/images/projetos/cobra/set_image.png', 'text'=>'Este método define a imagem da célula baseado na posição do array Cobra, na direção que estamos seguindo e na direção marcada na célula do grid.'],
                ['index'=>'8','imagepath'=>'/images/projetos/cobra/show_popup.png', 'text'=>'Usamos o ref da célula da maçã que foi comida para definir a posição que o efeito deve estar, e colocamos um timeout (que deve ser igual ao tempo da animação) para o efeito sumir.'],
                ['index'=>'9','imagepath'=>'/images/projetos/cobra/checks.png', 'text'=>'Estes são os métodos para checar se a célula, dado o par ordenado, contém corpo da cobra ou comida.'],
                ['index'=>'10','imagepath'=>'/images/projetos/cobra/handle_key_down.png', 'text'=>'Primeiro checamos se um movimento já foi neste ciclo, em seguida alteramos nossas variáveis dependendo da tecla pressionada pelo usuário, para mover nossa cobra de acordo.'],
                ['index'=>'11','imagepath'=>'/images/projetos/cobra/end_reset_game.png', 'text'=>'Finalmente nossos métodos que lidam com o final do jogo, e recomeço.'],
                ])}}"></carousel>
        </section>
    </lazy-component>
@endsection