<?php // Template Name: Contactos ?>

<?php get_header(); ?>

<main class="contato">
  <div class="ctt-wrapper">
    <h1 class="contacto-header">CONTACTOS </br> <b>LIGHT DESIGN PORTUGAL</b></h1>
    <p class="contacto-sub-titulo" data-aos="fade">
      Se sua empresa necessita de um projeto profissional de iluminação, entre em
      contato conosco e em breve nosso setor comercial retornará sua mensagem.
    </p>
    <div class="contacto-linha"></div>
    <?php echo do_shortcode('[contact-form-7 id="48" title="Formulário de contato"]'); ?>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113.8312981225677!2d-9.230412185161306!3d38.69871926623667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ecb7bd3a1697f%3A0x2f03b56ec5b34eb3!2sR.%20Maj.%20Afonso%20Palla%2023h%2C%201495-001%20Alg%C3%A9s%2C%20Portugal!5e0!3m2!1spt-BR!2sbr!4v1666717533578!5m2!1spt-BR!2sbr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</main>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    window.addEventListener('load', function() {
        AOS.init({
            once: true,
            duration: 1000
        });
    });
</script>

<?php get_footer(); ?>

<!-- CÓDIGO DO CF7 - FORMULARIO DE CONTATO
  
<div id="wrapper-teste"><div id="form-wrapper-left"><label>Nome
[text* your-name]</label>
<label> E-mail
[email* email]</label>
<label> Telefone
[tel* tel]</label>
<label> Departamento
[text departamento]</label></div>

<div id="form-wrapper-right"><label> Mensagem (opcional)
[textarea message]</label>
<div id="contact-btn-wrapper">[checkbox checkbox-aceite use_label_element "Desejo receber a Newsletter"]
[submit "Enviar" id="btn-submit"]</div></div></div>

FIM DO CÓDIGO DO CF7 - FORMULARIO DE CONTATO-->