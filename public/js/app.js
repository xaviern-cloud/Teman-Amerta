document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('password_confirmation');
    const strengthBar = document.getElementById('strength-bar');
    const strengthText = document.getElementById('strength-text');
    const matchText = document.getElementById('match-text');

    if (!passwordInput) return;

    // Elemen kriteria
    const cLength = document.getElementById('c-length');
    const cLower = document.getElementById('c-lower');
    const cUpper = document.getElementById('c-upper');
    const cNumber = document.getElementById('c-number');
    const cSymbol = document.getElementById('c-symbol');

    // --- 1. Fungsi Analisis Kekuatan Password ---
    passwordInput.addEventListener('input', function () {
        const val = passwordInput.value;
        let score = 0;

        // Cek kesamaan password juga saat password utama diubah
        checkPasswordMatch();

        if (val.length === 0) {
            strengthBar.style.width = '0%';
            strengthText.textContent = '';
            resetCriteria();
            return;
        }

        // Cek Kriteria
        const isMinLength = val.length >= 8;
        updateCriterion(cLength, isMinLength);
        if (isMinLength) score++;

        const hasLower = /[a-z]/.test(val);
        updateCriterion(cLower, hasLower);
        if (hasLower) score++;

        const hasUpper = /[A-Z]/.test(val);
        updateCriterion(cUpper, hasUpper);
        if (hasUpper) score++;

        const hasNumber = /[0-9]/.test(val);
        updateCriterion(cNumber, hasNumber);
        if (hasNumber) score++;

        const hasSymbol = /[^A-Za-z0-9]/.test(val);
        updateCriterion(cSymbol, hasSymbol);
        if (hasSymbol) score++;

        // Status Indicator Bar
        switch (score) {
            case 1:
            case 2:
                strengthBar.style.width = '20%';
                strengthBar.style.backgroundColor = '#d32f2f';
                strengthText.style.color = '#d32f2f';
                strengthText.textContent = 'Sangat Lemah';
                break;
            case 3:
                strengthBar.style.width = '50%';
                strengthBar.style.backgroundColor = '#f57c00';
                strengthText.style.color = '#f57c00';
                strengthText.textContent = 'Lemah';
                break;
            case 4:
                strengthBar.style.width = '75%';
                strengthBar.style.backgroundColor = '#fbc02d';
                strengthText.style.color = '#fbc02d';
                strengthText.textContent = 'Sedang';
                break;
            case 5:
                strengthBar.style.width = '100%';
                strengthBar.style.backgroundColor = '#388e3c';
                strengthText.style.color = '#388e3c';
                strengthText.textContent = 'Sangat Kuat (Sesuai Syarat)';
                break;
        }
    });

    // --- 2. Fungsi Pengecekan Kesamaan Password ---
    if (confirmInput) {
        confirmInput.addEventListener('input', checkPasswordMatch);
    }

    function checkPasswordMatch() {
        if (!confirmInput || !matchText) return;

        const passVal = passwordInput.value;
        const confirmVal = confirmInput.value;

        if (confirmVal.length === 0) {
            matchText.textContent = '';
            matchText.className = 'match-text';
            return;
        }

        if (passVal === confirmVal) {
            matchText.textContent = '✓ Password cocok';
            matchText.className = 'match-text valid';
        } else {
            matchText.textContent = '✕ Password belum sama';
            matchText.className = 'match-text invalid';
        }
    }

    function updateCriterion(element, isValid) {
        if (!element) return;
        if (isValid) {
            element.classList.add('valid');
            element.textContent = '✓ ' + element.textContent.replace(/^✓\s*/, '');
        } else {
            element.classList.remove('valid');
            element.textContent = element.textContent.replace(/^✓\s*/, '');
        }
    }

    function resetCriteria() {
        [cLength, cLower, cUpper, cNumber, cSymbol].forEach(el => {
            if (el) {
                el.classList.remove('valid');
                el.textContent = el.textContent.replace(/^✓\s*/, '');
            }
        });
    }
});
