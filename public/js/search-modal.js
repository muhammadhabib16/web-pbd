document.addEventListener('DOMContentLoaded', () => {
    const searchOverlay = document.getElementById('searchOverlay');
    const triggerSearchBtns = document.querySelectorAll('.trigger-search');
    const btnCloseSearch = document.getElementById('btnCloseSearch');
    const searchInput = document.getElementById('searchInput');

    // Fungsi buka pencarian
    const openSearch = () => {
        searchOverlay.classList.remove('hidden');
        searchOverlay.classList.add('flex');
        // Otomatis fokus ke kolom ketik setelah animasi selesai
        setTimeout(() => searchInput.focus(), 100);
    };

    // Fungsi tutup pencarian
    const closeSearch = () => {
        searchOverlay.classList.add('hidden');
        searchOverlay.classList.remove('flex');
    };

    // Deteksi klik pada ikon pencarian (bisa lebih dari 1 jika ada menu mobile)
    triggerSearchBtns.forEach(btn => {
        btn.addEventListener('click', openSearch);
    });

    // Deteksi tombol close
    if(btnCloseSearch) btnCloseSearch.addEventListener('click', closeSearch);

    // Tutup jika mengeklik area gelap di luar konten
    if(searchOverlay) {
        searchOverlay.addEventListener('click', function(e) {
            if (e.target === this) closeSearch();
        });
    }

    // Tutup jika menekan tombol Escape di keyboard
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !searchOverlay.classList.contains('hidden')) {
            closeSearch();
        }
    });
});