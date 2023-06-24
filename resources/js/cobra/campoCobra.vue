<template>
    <div class="flex justify-center items-center">
        <div v-if="!isPlaying || gameOver" :style="{'width': fieldWidth, 'height': fieldHeight}" 
            class="startGame flex flex-col items-center absolute">
            <span class="hidden sm:block text-lg text-slate-200 text-center my-10">
                UTILIZE AS TECLAS 
                <span class="flex justify-center my-5">
                    <img src="/images/snake/UI/wasd.png" class="w-14 mx-2"/> 
                    OU
                    <img src="/images/snake/UI/arrows.png" class="w-14 mx-2"/>
                </span>
                PARA CONTROLAR A COBRA!
            </span>

            <span class="sm:hidden text-lg text-slate-200 w-1/2 break-normal font-bold text-center my-10">
                TOQUE NOS ÍCONES DE TECLAS PARA MOVER A COBRA À DIREÇÃO CORRESPONDENTE!
            </span>

            <button @click="startGame()" class="p-5 bg-sky-500 text-slate-100 rounded-md font-semibold">INICIAR JOGO</button>
            <div v-if="gameOver">
                <div class="text-slate-100 font-bold py-2">PONTUAÇÃO: {{score}}</div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center mt-5">

            <div class="flex border-8 rounded-lg border-emerald-800">
                <div v-for="row in grid" :key="row.id">
                    <img v-for="col in row" :key="col.id" class='cell' 
                        v-bind:src="col.image" :ref="`cell-${col.row}-${col.col}`"/>
                </div>
            </div>
            
            <div class="text-slate-100 font-bold" v-if="!gameOver">{{ score }}</div>
        </div>
    </div>
    <div v-if="popup.show" :style="{ left: `${popup.x}px`, top: `${popup.y}px` }" 
        class="text-slate-100 font-bold absolute slide-top">+1
    </div>

    <div class="fixed right-10 bottom-6 grid grid-cols-3 sm:hidden">
        <img @touchstart="handleKeyDown('ArrowUp', true)" src="/images/snake/UI/arrow-up.png" class="w-12 col-span-1 col-start-2 cursor-pointer"/>
        <img @touchstart="handleKeyDown('ArrowLeft', true)" src="/images/snake/UI/arrow-left.png" class="w-12 col-span-1 col-start-1 cursor-pointer"/>
        <img @touchstart="handleKeyDown('ArrowDown', true)" src="/images/snake/UI/arrow-down.png" class="w-12 col-span-1 cursor-pointer"/>
        <img @touchstart="handleKeyDown('ArrowRight', true)" src="/images/snake/UI/arrow-right.png" class="w-12 col-span-1 cursor-pointer"/>
    </div>
</template>
  
<script>
export default {
    data() {
        return {
            // define as propriedades do jogo
            grid: [], // grade do jogo
            numRows: 15, // número de linhas da grade
            numCols: 15, // número de colunas da grade
            snake: [], // array de objetos representando a cobra
            snakeSize: 2, //conta a partir de 0
            startRow: 1,
            startCol: 1,
            food: {}, // objeto representando a comida
            direction: 'Right', // direção inicial da cobra
            oldDirection: 'Right',
            axis: { row: 1, col: 0},
            hasMoved: false,
            popup: {show: false, x: 0, y:0 },
            score: 0, // pontuação do jogador
            isPlaying: false,
            gameOver: false,
            timeout: {},
            speed: 300, // velocidade do jogo, quanto menor mais rápido
            windowWidth: window.innerWidth
        };
    },
    mounted(){
        this.generateGrid();

        window.addEventListener('scroll', (e) => {
            if(this.isPlaying)
                e.preventDefault();
        });

        window.addEventListener('keydown', (e) => {
            const preventKeyCodes = ['ArrowUp', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'PageUp', 'PageDown', 'Home', 'End',
             'Numpad1', 'Numpad2', 'Numpad3', 'Numpad7', 'Numpad8', 'Numpad9'];
        
            if(this.isPlaying && preventKeyCodes.includes(e.code))
                e.preventDefault();
                
            this.handleKeyDown(e);
        });
    },
    methods: {
        // inicia o jogo
        async startGame() {
            if(this.gameOver){
                this.resetGame();
            }
            
            this.generateSnake();
            this.generateFood();
            this.isPlaying = true;

            //executa o runGame() uma vez a cada 300ms
            //diminui o intervalo cada vez que uma comida é comida
            setTimeout(() => {
                this.runGame();
            }, this.speed);
        },
        // gera a grade do jogo
        generateGrid() {
            for (let i = 0; i < this.numRows; i++) {
                let row = [];
                for (let j = 0; j < this.numCols; j++) {
                    row.push({
                        row: i,
                        col: j,
                        image: '/images/snake/field.png',
                        from: '',
                        to: ''
                    });
                }
                this.grid.push(row);
            }
        },
        // gera a cobra
        generateSnake() {
            // gera a cobra com três células
            const finalRow = this.snakeSize + this.startRow + 1;
            for (let i = this.startRow; i < finalRow; i++) {
                this.snake.unshift({
                    row: i,
                    col: this.startCol,
                });
            }

            this.snake.forEach((cell, index) => {
                this.grid[cell.row][cell.col].from = this.direction;
                this.grid[cell.row][cell.col].to = this.direction;
                this.setImage(cell.row, cell.col, index);
            });
        },
        // gera a comida
        generateFood() {
            let foodRow = null;
            let foodCol = null;
            
            // gera a comida em uma célula aleatória que não está ocupada pela cobra
            do {
                foodRow = Math.floor(Math.random() * this.numRows);
                foodCol = Math.floor(Math.random() * this.numCols);
            } while(this.isSnakeCell(foodRow, foodCol));

            this.food = {
                row: foodRow,
                col: foodCol,
            };

            // marca a célula da comida como ativa na grade
            this.grid[foodRow][foodCol].image = '/images/snake/food.png';
        },

        // Move the snake in the current direction
        moveSnake() {
            // Check for collisions
            if(this.checkCollisions())
                return;
            
            // Get the head and tail of the snake
            const head = this.snake[0];
            this.grid[head.row][head.col].from = this.oldDirection;
            this.grid[head.row][head.col].to = this.direction;
            this.setImage(head.row, head.col, 1);
            
            const tail = this.proxyToJSON(this.snake.pop());

            this.grid[tail.row][tail.col].image = '/images/snake/field.png';
            
            const newTail = this.proxyToJSON(this.snake[this.snakeSize-1]);
            this.setImage(newTail.row, newTail.col, this.snakeSize);

            // Move the tail to the head position
            tail.row = head.row + this.axis.row;
            tail.col = head.col + this.axis.col;

            // Add the tail to the front of the snake
            this.snake.unshift(tail);
            this.setImage(tail.row, tail.col, 0);

            this.oldDirection = this.direction;
            this.hasMoved = false;
        },
 
        setImage(row, col, index){
            let from = this.grid[row][col].from;
            let to = this.grid[row][col].to;

            if(index == 0){
                this.grid[row][col].image = `/images/snake/${this.direction}/head.png`;
                return;
            }

            if(index == this.snakeSize){
                this.grid[row][col].image = `/images/snake/${to}/tail.png`;
                return;
            }

            if(from == this.direction)
                this.grid[row][col].image = `/images/snake/${this.direction}/body.png`;
            else
                this.grid[row][col].image = `/images/snake/${from}/body${this.direction}.png`;
        },

        // Check for collisions
        checkCollisions() {
            // Get the head of the snake
            const head = this.snake[0];
            const newHeadRow = head.row + this.axis.row;
            const newHeadCol = head.col + this.axis.col;

            // Check if the snake has collided with a wall
            if (newHeadRow < 0 || newHeadRow >= this.numRows || newHeadCol < 0 || newHeadCol >= this.numCols) {
                this.endGame();
                return true;
            }

            // Check if the snake has collided with itself
            if(this.isSnakeCell(newHeadRow, newHeadCol)){
                this.endGame();
                return true;
            }

            // Check if the snake has collided with the food
            if (this.isFoodCell(head.row, head.col)) {
                // Eat the food and generate a new one
                this.snake.push(this.snake[this.snakeSize]);
                this.snakeSize++;
                this.score += 1;
                this.speed = Math.max(150, (this.speed - 10));
                this.showPopup(head.row, head.col);
                this.generateFood();
            }
            return false;
        },
        
        showPopup(row, col){
            const food = this.$refs[`cell-${row}-${col}`][0] ;
            this.popup.x = food.offsetLeft;
            this.popup.y = food.offsetTop;
            this.popup.show = true;
            setTimeout(() => { this.popup.show = false }, 1500);
        },
        //
        runGame(){
            clearTimeout(this.timeout);
            //A recursividade gera o mesmo efeito do setInterval,
            //Com a diferença de que a cada vez que é executado,
            //O timer é atualizado conforme a velocidade
            this.moveSnake();
            this.timeout = setTimeout(() => {
                this.runGame();
            }, this.speed);
        },
        // End the game
        endGame() {
            this.isPlaying = false;
            this.gameOver = true;
        },
        //reinicia o jogo
        resetGame(){
            this.gameOver = false;
            this.score = 0;
            this.snakeSize = 2;
            this.speed = 300;
            this.direction = 'Right';
            this.oldDirection = 'Right'
            this.hasMoved = false;
            this.snake = [];
            this.axis= {row: 1, col: 0}
            this.clearGrid();
        },
        //limpa a grade do jogo
        clearGrid(){
            this.grid.forEach(row => {
                row.forEach(cell => {
                    cell.image = '/images/snake/field.png';
                    cell.from = '';
                    cell.to = '';
                });
            });
        },
        isSnakeCell(row, col) {
            return this.snake.some((cell) => cell.row === row && cell.col === col);
        },
        isFoodCell(row, col) {
            return this.food.row === row && this.food.col === col;
        },
        proxyToJSON(toConvert){
            return JSON.parse(JSON.stringify(toConvert));
        },
        handleKeyDown(event, isMobile = false){
            console.log(event);

            //permite trocar a direção apenas uma vez por movimento
            if(this.hasMoved) return;
            
            this.hasMoved = true;

            let key = '';

            if(isMobile)
                key = event;
            else
                key = event.key;

            switch (key) {
                case "ArrowUp":
                    if (this.direction !== "Down") {
                        this.oldDirection = this.direction;
                        this.direction = "Up";
                        this.axis = { row: 0, col: -1}
                    }
                break;
                case "ArrowDown":
                    if (this.direction !== "Up") {
                        this.oldDirection = this.direction;
                        this.direction = "Down";
                        this.axis = { row: 0, col: 1}
                    }
                break;
                case "ArrowLeft":
                    if(this.direction !== "Right"){
                        this.oldDirection = this.direction;
                        this.direction = "Left";
                        this.axis = { row: -1, col: 0}
                    }
                break;
                case "ArrowRight":
                    if(this.direction !== "Left"){
                        this.oldDirection = this.direction;
                        this.direction = "Right";
                        this.axis = { row: 1, col: 0}
                    }
                break;
            }
        }
    },
    computed: {
        fieldWidth(){ 
            return Math.min(this.windowWidth, (this.numCols * 32)) + "px"; 
        },
        fieldHeight(){ 
            return this.numRows * 32 + "px"; 
        },
    }
}
    
</script>
  
<style scoped>
.startGame{
    backdrop-filter: blur(2px) saturate(127%);
    -webkit-backdrop-filter: blur(2px) saturate(127%);
    background-color: #2f30312b;
}
.cell {
    width: 32px;
    height: 32px;
    background-size: 32px;
}
.slide-top {
    animation: slide-top 1.5s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
}
.fade-out{
    animation: fade-out 1.5s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
}
/* ----------------------------------------------
 * Generated by Animista on 2023-4-29 20:21:26
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation slide-top
 * ----------------------------------------
 */
  @keyframes slide-top {
    0% {
        transform: translateY(0);
        opacity: 1;
    }
    100% {
        transform: translateY(-2rem);
        opacity: 0.2;
        text-shadow: none;
    }
  }
</style>