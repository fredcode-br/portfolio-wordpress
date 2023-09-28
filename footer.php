<footer class="text-center text-lg-start">
    <div class="container">
        <div class="container d-flex justify-content-center py-5">
            <ul class="icons-social d-flex gap-3 list-unstyled p-0">
                <li class="d-flex justify-content-center align-items-center">
                     <a href="https://www.instagram.com/fred_drufino/">
                        <img src="<?= get_template_directory_uri() . '/assets/icons/instagram.svg' ?>" alt="">
                    </a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                    <a href="https://www.linkedin.com/in/frederico-rufino/">
                        <img src="<?= get_template_directory_uri() . '/assets/icons/linkedin.svg' ?>" alt="">
                    </a>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                    <a href="https://github.com/fredcode-br">
                        <img src="<?= get_template_directory_uri() . '/assets/icons/github.svg' ?>" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <div class="text-center text-white p-3">
        &copy; <?= date("Y") ?> - Todos os direitos reservados a 
        <a class="text-white" href="https://fredcode.com.br/">fredcode.com.br</a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
<?php wp_footer(); ?>
</html>