export const openModalMessage = {
    install(app, options) {
            app.config.globalProperties.$showMessage = (message) => {
            const modal = document.getElementById('flashMessageModal');
            modal.getElementsByTagName('h1')[0].innerHTML = message;

            modal.classList.remove('hidden');
        }
      }
}

export const closeModalMessage = {
    install(app, options) {
        app.config.globalProperties.$hideMessage = () => {
            const modal = document.getElementById('flashMessageModal').classList;

            modal.add('hidden');
        }
      }
}