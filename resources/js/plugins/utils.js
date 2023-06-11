export const timestampToDate = {
    install(app, options) {
        app.config.globalProperties.$timestampToDate = (dateToFormat) => {
            const newDate = new Date(dateToFormat);
            const year = newDate.getFullYear().toString().substring(2, 4);
            const month = newDate.getMonth() + 1;
            const day = newDate.getDate();

            return `${day}/${month}/${year}`;
        }
    }
}

export const limitText = {
    install(app, options){
        app.config.globalProperties.$limitText = (textToLimit, maxLength = 100) => {
            let limitedText = textToLimit.substring(0, maxLength-3);

            limitedText += '...';

            return limitedText;
        }
    }
}

export const sortearNumero = {
    install(app, options){
        app.config.globalProperties.$sortearNumero = (min = 1, max = 100) => {
            let sorteado = Math.floor((min) + Math.random()*(max - (min) + 1));

            return sorteado;
        }
    }
}
