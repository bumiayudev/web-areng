<!-- Footer -->
<footer class="py-5">
    <div class="container">
        <div class="row">
            <!-- Sitemap -->
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Sitemap</h5>
                <ul class="list-unstyled">
                <li><a href="#home" class="text-decoration-none text-light">Home</a></li>
                <li><a href="#produk" class="text-decoration-none text-light">Produk</a></li>
                <li><a href="#keunggulan" class="text-decoration-none text-light">Keunggulan</a></li>
                <li><a href="#kontak" class="text-decoration-none text-light">Kontak</a></li>
                <li><a href="{{ route('blog') }}" class="text-decoration-none text-light">Blog</a></li>
                </ul>
            </div>


            <!-- Sosial Media -->
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Sosial Media</h5>
                <ul class="list-unstyled">
                <li>📘 <a href="#" class="text-decoration-none text-light">Facebook</a></li>
                <li>📸 <a href="#" class="text-decoration-none text-light">Instagram</a></li>
                <li>🎥 <a href="#" class="text-decoration-none text-light">YouTube</a></li>
                <li>💬 <a href="https://wa.me/6281466863157" target="_blank" class="text-decoration-none text-light">WhatsApp</a></li>
                <li>📧 <a href="mailto:admin@bumiayuareng.com" class="text-decoration-none text-light">Email</a></li>
                </ul>
            </div>


            <!-- Alamat Produksi -->
            <div class="col-md-4 mb-3">
                <h5 class="fw-bold">Alamat Produksi</h5>
                <p class="mb-1">CV Arang Kelapa Bumiayu</p>
                <p class="mb-1">Desa Sumur Batu, Kec. Bantar Gebang</p>
                <p class="mb-1">Kota Bekasi</p>
                <p class="mb-1">Jawa Barat, Indonesia</p>
            </div>
        </div>
    <hr class="border-light">
    <p class="text-center mb-0">© 2026 Arang Tempurung Kelapa | Indonesia</p>
    </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/6281466863157?text=Halo%20saya%20tertarik%20dengan%20produk%20Anda.Bolehkah%20saya%tahu%20lebih%20lanjut%20tentang%20produk%20Anda?Terima%20kasih."
   class="wa-float" target="_blank" aria-label="Chat WhatsApp">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="55">
</a>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
{{-- <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "CV Arang Kelapa Bumiayu",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('images/briket.jpeg') }}",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Kota Bekasi",
    "addressRegion": "Jawa Barat",
    "addressCountry": "ID"
  }
}
</script> --}}
<script>
    // Typing effect
    class TypingEffect {
        constructor(el) {
            this.el = el;
            this.html = el.innerHTML.trim();
            this.text = this.html.replace(/<[^>]+>/g, '');
            this.speed = Number(el.dataset.speed || 60);
            this.delay = Number(el.dataset.delay || 1500);
            this.index = 0;
            this.isDeleting = false;
            this.cursor = document.createElement('span');
            this.cursor.className = 'cursor';
            el.innerHTML = '';
            el.appendChild(this.cursor);
            this.loop();
        }

        loop() {
            if (!this.isDeleting) {
                this.index++;
            } else {
                this.index--;
            }

            let visibleText = this.text.substring(0, this.index);
            this.el.innerHTML = visibleText;
            this.el.appendChild(this.cursor);

            if (!this.isDeleting && this.index === this.text.length) {
                setTimeout(() => this.isDeleting = true, this.delay);
            }

            if (this.isDeleting && this.index === 0) {
                this.isDeleting = false;
            }

            setTimeout(() => this.loop(),
                this.isDeleting ? this.speed / 2 : this.speed
            );
        }
    }
  document.addEventListener('DOMContentLoaded', function() {
    // const typingElements = document.querySelectorAll('.typing-text');
    // typingElements.forEach(el => {
    //   const texts = el.getAttribute('data-text').split('|');
    //   let index = 0;
    //   let charIndex = 0;
    //   let currentText = '';
    //   let isDeleting = false;

    //   function type() {
    //     if (index >= texts.length) index = 0;
    //     currentText = texts[index];

    //     if (isDeleting) {
    //       el.textContent = currentText.substring(0, charIndex--);
    //       if (charIndex < 0) {
    //         isDeleting = false;
    //         index++;
    //         setTimeout(type, 500);
    //       } else {
    //         setTimeout(type, 50);
    //       }
    //     } else {
    //       el.textContent = currentText.substring(0, charIndex++);
    //       if (charIndex > currentText.length) {
    //         isDeleting = true;
    //         setTimeout(type, 2000);
    //       } else {
    //         setTimeout(type, 100);
    //       }
    //     }
    //   }
    //   type();
    // });
 document.querySelectorAll('.typing').forEach(el => {
        new TypingEffect(el);
    });
});
  function showAlert(produk) {
    alert('Anda memilih produk: ' + produk + '\nSilakan hubungi kami untuk pemesanan.');
  }

  function sendMessage(e) {
    e.preventDefault();
    const nama = document.getElementById('nama').value;
    alert('Terima kasih ' + nama + ', pesan Anda telah dikirim!');
    e.target.reset();
  }
</script>
@stack('scripts')
</body>
</html>
