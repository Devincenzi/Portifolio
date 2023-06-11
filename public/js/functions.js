export function formatTime(hourToFormat){
    const hour = hourToFormat.getHours();
    const minutes = hourToFormat.getMinutes();
    const seconds = hourToFormat.getSeconds();

    return `${hour}:${minutes}:${seconds}`;
}

export function formatDate(dateToFormat){
    const year = dateToFormat.getFullYear();
    const month = dateToFormat.getMonth();
    const day = dateToFormat.getDate();

    return `${day}/${month}/${year}`;
}