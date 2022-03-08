<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php wp_head(); ?>  <!-- tag de estrutura padrão -->
    <title>Pinker Theme</title>
</head>
<body>
    <h1><?php bloginfo('name'); ?> </h1> <!-- a função bloginfo() pega alguma informação do banco de dados, dentro do parenteses é aceitado o parametro especifico a ser coletado pela função, nesse caso é o parametro 'name' -->
    <h2><?php bloginfo('description'); ?> </h2>
    <?php  
        if (have_posts() ):   
            while (have_posts() ):
                the_post();
                ?>
                <h3><?php the_title(); ?></h3>
                <div>
                    <?php the_content(); ?>
                </div>
    
                <?php
                endwhile;
            else: 
            ?> 
           
            <h3>Post not found!</h3>
            <?php
            endif;
    
    
    
    ?>
    <!-- as funções não foram declaradas por mim, elas são chamadas atraves do wordpress-->

    <?php wp_footer(); ?>  <!-- tag de estrutura padrão -->
</body>
</html>