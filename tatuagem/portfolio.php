<?php include('page_parts/header.php'); ?>

	<main class="portfolio">
		<h1>Portfólio de Tatuagens</h1>
		<div class="galeria">
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
			<img src="img/tattoo1.jpg" alt="Tatuagem 1" onclick="abrirLightbox(this.src)" />
		</div>
		
		<div id="lightbox" class="lightbox" onclick="fecharLightbox()">
			<img id="lightbox-img" src="" alt="Imagem em destaque" />
		</div>
	</main>
	
	<script>
		const btn = document.querySelector('.menu-toggle');
		const menu = document.querySelector('.menu');
		btn.addEventListener('click', () => {
			menu.classList.toggle('aberto');
		});
		
		function abrirLightbox(src) {
			const lightbox = document.getElementById('lightbox');
			const img = document.getElementById('lightbox-img');
			img.src = src;
			lightbox.classList.add('ativo');
		}
		
		function fecharLightbox() {
			document.getElementById('lightbox').classList.remove('ativo');
		}
	</script>

<?php include('page_parts/footer.php'); ?>