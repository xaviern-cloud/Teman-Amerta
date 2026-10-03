
const setModalVisibility = (modal, isVisible) => {
    modal.classList.toggle('hidden', !isVisible);
    modal.classList.toggle('flex', isVisible);
    document.body.classList.toggle('overflow-hidden', isVisible);
};

document.addEventListener('click', (event) => {
    const opener = event.target.closest('[data-modal-open]');

    if (opener) {
        const modal = document.getElementById(opener.dataset.modalOpen);

        if (modal) {
            setModalVisibility(modal, true);
        }

        return;
    }

    const closer = event.target.closest('[data-modal-close]');

    if (closer) {
        const modal = closer.closest('[data-modal]');

        if (modal) {
            setModalVisibility(modal, false);
        }
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key !== 'Escape') {
        return;
    }

    const modal = document.querySelector('[data-modal]:not(.hidden)');

    if (modal) {
        setModalVisibility(modal, false);
    }
});

document.querySelectorAll('[data-prototype-form]').forEach((form) => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const status = form.querySelector('[data-form-status]');

        if (status) {
            status.textContent = 'Prototype frontend berhasil dijalankan. Data belum dikirim ke backend.';
            status.classList.remove('hidden');
        }
    });
});
