import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteButtons = document.querySelectorAll('.delete-comic-btn[type="button"]');

deleteButtons.forEach((button) => {
    button.addEventListener('click', function (event) {

        // EVITIAMO CHE VENGA CANCELLATO SUBITO IL RECORD DAL DB
        event.preventDefault();

        //RECUPERO IL NOME DEL COMIC
        const comicTitle = button.getAttribute('data-title');

        //RECUPERO LA MODALE
        const modal = document.getElementById('delete-comic-modal');

        //CREO UNA NUOVA MODALE CON I METODI DI BOOTSRAP UGUALE A QUELLA COPIATA
        const bootstrapModal = new bootstrap.Modal(modal);

        //MOSTRO LA MODALE
        bootstrapModal.show();
        
        const modalContent = modal.querySelector('#modal-item-title');
        modalContent.textContent = comicTitle;

        //RECUPERO IL PULASNTE DI DELETE
        const deleteButton = modal.querySelector('#confirm-delete');

        //METTO IN ASCOLTO IL PULSANTE CONFIRM DELETE
        deleteButton.addEventListener('click', () => {
            button.parentElement.submit();
        })
    })
});