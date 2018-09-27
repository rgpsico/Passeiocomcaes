<?php get_header(); ?>

  

<?php get_template_part('slider'); ?>





	  <!-- SVG Curve Up -->
      <svg id="curveUp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff">
         <path d="M0 100 C 20 0 50 0 100 100 Z"/>
      </svg>    
      <!-- Section Services-index -->
      <section id="services-index" class="bg-pattern"  data-bottom-top="background-position: 0px 70%,99% 70%;"
            data-top-bottom="background-position: 0px -50%,99% -50%;">
         <!-- container -->
         <div class="container">
            <div class="section-heading">
               <h2>Nossos Serviços</h2>
            </div>
			<!-- /section-heading-->
            <div class="col-md-10 col-md-offset-1 text-center">
               <p>Nossa empresa nasceu pra suprir a necessidade que muitos donos de cães tinham. A falta de tempo para seu cão .Por causa dessa necessidade nos criamos a Passeiocomcaes percebemos que muitos cães adoeciam por causa do estresse de não passear  e se relacionar com outros cães , pensando em ajudar os cães e seus donos  nisso  criamos a passeio com cães para que todos os donos que não tem tempo pra passear e cuidar do  seu bichinho possa ainda sim ter um cão feliz e saudável.</p>
            </div>
			<!-- /col-md-10-->
         </div>
         <!-- /container-->
         



         <div class="container-fluid margin1">
               <div class="col-md-10 col-md-offset-1">
			   <!-- Services -->
                  <div id="owl-services" class="owl-carousel">
                     <!-- Feature Box 1  -->
                   

  <?php 

                  /**
                   * Variáveis para divs das notícias e arquivo de conteúdo
                   *
                   * Sugestão Gilberto Medeiros
                   * @see https://www.udemy.com/criando-temas-customizados-com-wordpress/learn/v4/questions/1968272
                   *
                   */

                  $tamanho = 'col-md-12';
                        $op_content = 'destaque';

                                 // Quais categorias serão inclusas na nossa listagem?
                  $itens = get_categories(array('include' => '1,2,3'));

                  // echo '<pre>';
                  // print_r($itens);
                  // echo '</pre>';

                  // Para cada categoria encontrada, buscamos um só item dessa categoria
                  foreach($itens as $item):

                     // Pegamos cada item dentro do loop para compor nossa consulta
                     $args = array(
                        'category__in' => $item->cat_ID,
                        'posts_per_page' => 6
                     );

                     // Criação do objeto da classe WP_Query
                     $consulta = new WP_Query($args);

                     // O loop WordPress (consulta padrão modificada)
                     if($consulta->have_posts()):
                        while($consulta->have_posts()):
                           $consulta->the_post();

                     // Abaixo, usamos as variáveis $tamanho e $op_content
                     // Na primeira repetição do loop, elas têm o valor indicado acima. Na segunda e terceira, mudam de valor
                     ?>
                
  

                     <div class="col-xs-12">
                        <div class="box_icon">
                           <div class="icon">
                              <!-- icon -->
                              <div class="image">
                                 <?php the_post_thumbnail(array(400,500)); ?>
                              </div>
                              <div class="info">
                                 <h4><?php the_title(); ?></h4>
                                 <p><?php the_excerpt(); ?></p>
                                 <!-- Button-->
                                 <a class="btn" href="<?php the_permalink(); ?>">Leia Mais</a>
                              </div>
                           </div>
                        </div>
                        <!-- /box_icon -->
                     </div>

                     <?php 

                        $tamanho = 'col-md-6';
                                       $op_content = 'secundaria';

                        endwhile;
                        // Reseta a consulta a cada passo do loop
                        wp_reset_postdata();

                     endif;

                  // Fim do loop foreach
                  endforeach;

                      ?>
         
                     <!-- /col-xs-12 ends -->
                     <!-- Feature Box 2 -->
                   
                     <!-- /col-xs-12 ends -->
             

                     <!-- Feature Box 3  -->
                   
                     <!-- /col-xs-12 ends -->
                     <!-- Feature Box 4  -->
             


                    
                     <!-- /col-xs-12 ends -->
             

                     <!-- Feature Box 5  -->
                 
                     <!-- /col-xs-12 ends -->
                  </div>
                  <!-- /owl-services -->
               </div>
               <!-- /col-md-9 -->
           </div>
		 <!-- /container-fluid-->
      </section>
      <!-- Section About-index -->
      <section id="about-index" class="bg-lightcolor1" >
         <div class="container">
            <div class="section-heading text-center">
               <h2>Sobre nós</h2>
            </div>
            <!-- row -->
            <div class="row">
               <div class="col-md-6 col-lg-7 text-center">
                  <h3>Para Seu melhor amigo.</h3>
                  <p>
                     Era uma manhã de  segunda feira eu tinha acabado de ficar desempregado e pra  descontrair fui corre na orla da praia de Copacabana junto com meu Labrador  Black.</p>
<p> 
Durante a corrida, encontrei  um amigo esse amigo falou que tinha um cão e que havia um tempo que não levava pra passear porque não tinha tempo , falei que levaria o cão dele pra passear, como eu estava desempregado iria correr sempre na praia e com isso levaria o meu cão e  o dele.
</p>
<p> 
Com alguns dias desempregado e correndo na praia ,logo percebi,  que nas varandas dos apartamentos haviam  muitos cães  que não passeavam  e por causa disso eram cães estressados que tinham os mesmos problema que o cachorro do meu amigo. Foi daí, que comecei a oferecer meus serviço pras pessoas. Isso já tem 10 anos.
</p>
<p>   
Nossa missão e fazer com que os cães tenham uma vida feliz e saudável e assim não criar problemas para seus donos e melhor pode compartilha da sua alegria com ele. 

</p>
                     




                  <!-- Accordion -->
                  <div class="panel-group" id="accordion">
                     <!-- Question 1 -->
                     <div class="panel">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Responsabilidade Social</a>
                           </h5>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                           <div class="panel-body">
                              <p>Criamos adubos com o cocozinho dos cães e com isso criamos hortas em vários lugares.  alem disso espalhamos varios portas bolsas para  donos não deixarem o coco do cão na rua , pra uma sociedade melhor queremos cães e pessoas felizes e por ultimo e nao menos pior ruas limpas.</p>
                           </div>
                        </div>
                     </div>
                     <!-- Question 2 -->
                     <div class="panel">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Nossa Missão:</a>
                           </h5>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p>Nossa principal missão é melhorar a vida do seu cão não só a saúde física mas também e principalmente a saúde mental e com isso eliminar qualquer tipo de estresse ou preocupação que os donos tem. <i>  Queremos cães felizes e pessoas felizes .</i> 
                              </p>
                           </div>
                        </div>
                     </div>
                     <!-- Question 3 -->
                     <div class="panel">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Conseqüências dos nossos serviços:</a>
                           </h5>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                           <div class="panel-body">
                              <p>Alem de ajudar os cães e conseqüentemente seus donos nos geramos empregos  , qualificamos profissionais , e com isso, geramos muitas oportunidade para mudar  vidas não só dos nossos cliente como também de muito dos nossos colaboradores .
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- /.accordion -->
               </div>
			   <!-- /col-md-7-->
               <!-- Parallax object -->
               <div class="parallax-object1 hidden-sm hidden-xs"  data-100-start="right: 0%;" 
                  data-center-bottom="right:30%;"  >
                  <!-- Image -->
                  <img src="<?php echo get_template_directory_uri(); ?>/img/illustrations/petbowl.png" alt="">
               </div>
			   <!-- /parallax-object1-->
               <div class="col-md-6 col-lg-5" >
                  <img src="<?php echo get_template_directory_uri(); ?>/img/about-index.png" class="img-responsive" alt="">
               </div>
               <!-- /col-md-5-->
            </div>
            <!-- /row -->
            <div class="row margin1 text-center">
               <!-- item 1 -->
               <div class="features col-lg-3 col-sm-6 col-xs-12">
                  <div class="col-xs-12 big-icon">
                     <!-- icon -->
                     <i class="flaticon-dog-and-pets-house"></i>
                  </div>
                  <div class="col-xs-12">
                     <h5>Primeiro Passo</h5>
                     <p>Vamos a sua residência para avaliar  e saber o que fazer de melhor pra seu cão.</p>
                  </div>
               </div>
               <!-- /col-md-3 -->
               <!-- item 2 -->
               <div class="features col-lg-3 col-sm-6 col-xs-12">
                  <div class="col-xs-12 big-icon">
                     <!-- icon -->
                     <i class="flaticon-dog-in-front-of-a-man"></i>
                  </div>
                  <div class="col-xs-12">
                     <h5>Adestramento e Passeio</h5>
                     <p>Temos os melhores profissionais da área de passeio e  adestramento mas antes temos que avaliar seu cão pra saber qual o melhor a fazer.</p>
                  </div>
               </div>
               <!-- /col-md-3 -->
               <!-- item 3 -->
               <div class="features col-lg-3 col-sm-6 col-xs-12">
                  <div class="col-xs-12 big-icon">
                     <!-- icon -->
                     <i class="flaticon-veterinarian-hospital"></i>
                  </div>
                  <div class="col-xs-12">
                     <h5>Veterinário:</h5>
                     <p>Temos contatos de muitos profissionais , caso esteja procurando um veterinário, podemos ajudar.</p>
                  </div>
               </div>
               <!-- /col-md-3 -->
               <!-- item 1 -->
               <div class="features col-lg-3 col-sm-6 col-xs-12">
                  <div class="col-xs-12 big-icon">
                     <!-- icon -->
                     <i class="flaticon-animals-3"></i>
                  </div>
                  <div class="col-xs-12">
                     <h5>Banho e tosa</h5>
                     <p>Muitos profissionais que trabalham 24 horas por dia para te atender da melhor forma com banho e tosa..</p>
                  </div>
               </div>
               <!-- /col-md-3 -->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </section>
      <!-- /section ends -->
     

      <!-- Section Reviews -->
      <section id="reviews">
         <div class="container">
            <div class="section-heading text-center">
               <h2>Depoimentos</h2>
            </div>
            <!-- Parallax object -->
            <div class="parallax-object2 hidden-sm hidden-xs hidden-md" 
               data-100-start="transform:rotate(-0deg); left:20%;" 
               data-top-bottom="transform:rotate(-370deg);">
               <!-- Image -->
               <img src="img/illustrations/toy.png" alt="">
            </div>
            <!-- /col-md-3 -->
            <div class="col-md-9 col-md-offset-3">
               <!-- Reviews -->
            <div id="owl-reviews" class="owl-carousel margin1">
               <!-- review 1 -->
               <div class="review">
                  <div class="col-xs-12">
                     <!-- caption -->
                     <div class="review-caption">
                        <h5>Kelly Regina</h5>
                        <div class="small-heading">
                          Amamos Cães
                        </div>
                        <blockquote>
                           Meu cão puxava muito graças a vocês meu cão hoje anda sem coleira e ao meu lado .Kelly Regina. 
                        </blockquote>
                     </div>
                     <!-- Profile image -->
                     <div class="review-profile-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review1.jpg" alt=""/>
                     </div>
                     <!--/review profile image -->
                  </div>
                  <!-- /col-xs-12 ends -->
               </div>
               <!-- /review-->
               <!-- review 2 -->
               <div class="review">
                  <div class="col-xs-12">
                     <!-- caption -->
                     <div class="review-caption">
                        <h5>Andrá Souza</h5>
                        <div class="small-heading">
                          Passeio
                        </div>
                        <blockquote>
                           Antes de conhecer vocês minha cadela Talita sempre comia tudo dentro de casa graças ao trabalho do Rogerio parou com isso gratidão eterna por conhecer vocês.
                        </blockquote>
                     </div>
                     <!-- Profile image -->
                     <div class="review-profile-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review2.jpg" alt=""/>                      
                     </div>
                     <!--/review profile image -->
                  </div>
                  <!-- /col-xs-12 ends -->
               </div>
               <!-- /review-->
               <!-- review 3 -->
               <div class="review">
                  <div class="col-xs-12">
                     <!-- caption -->
                     <div class="review-caption">
                        <h5>Maria Silva</h5>
                        <div class="small-heading">
                           Adestramento
                        </div>
                        <blockquote>
                           Minha filha  tinha mania de comer tudo no meio da Rua isso parou agora estamos tentando fazer ele andar ao lado se Deus quiser iremos conseguir..
                        </blockquote>
                     </div>
                     <!-- Profile image -->
                     <div class="review-profile-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review3.jpg" alt=""/>                       
                     </div>
                     <!--/review profile image -->
                  </div>
                  <!-- /col-xs-12 ends -->
               </div>
               <!-- /review-->
               <!-- review 4 -->
               <div class="review">
                  <div class="col-xs-12">
                     <!-- caption -->
                     <div class="review-caption">
                        <h5>Luiza Nunes</h5>
                        <div class="small-heading">
                          Serviços
                        </div>
                        <blockquote>
                           A tempo minha cadela precisava de um bom veterinario e graças a PasseioComCães conseguimos um e está comigo a mais de 5 anos.
                        </blockquote>
                     </div>
                     <!-- Profile image -->
                     <div class="review-profile-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review4.jpg" alt=""/>                       
                     </div>
                     <!--/review profile image -->
                  </div>
                  <!-- /col-xs-12 ends -->
               </div>
               <!-- /review-->
               <!-- review 4 -->
               <div class="review">
                  <div class="col-xs-12">
                     <!-- caption -->
                     <div class="review-caption">
                        <h5>Rodrigo Silva</h5>
                        <div class="small-heading">
                          Banho e tosa
                        </div>
                        <blockquote>
                           Eu nunca conseguia levar minha filha pro banho e com a ajuda de Vocês hoje só pedir pro Diego pegar que eleleva.
                        </blockquote>
                     </div>
                     <!-- Profile image -->
                     <div class="review-profile-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review5.jpg" alt=""/>                       
                     </div>
                     <!--/review profile image -->
                  </div>
                  <!-- /col-xs-12 ends -->
               </div>
               <!-- /review-->
            </div>
            <!-- /owl-carousel -->
            </div>
            <!-- /col-md-10 -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /Section ends -->
      <!-- callout-->	



      <section class="callout container-fluid no-padding">
	    <!-- row-fluid -->
         <div class="row-fluid">
            <div class="col-lg-8 col-md-12 no-padding" data-start="right: 20%;" 
               data-center="right:0%;">
               <!-- image  -->
               <img src="<?php echo get_template_directory_uri(); ?>/img/call1.jpg" class="img-responsive img-rounded" alt="">
            </div>
            <!-- text box  -->
            <div class="callout-box col-lg-6 col-lg-offset-6 bg-darkcolor"  data-start="left: 20%;" 
               data-center="left:0%;">
               <h3>Pelo Bem estar do Seu Cão</h3>
               <p>Nossa empresa nasceu pra suprir a necessidade que muitos donos de cães tinham. A falta de tempo para seu cão .Por causa dessa necessidade nos criamos a Passeiocomcaes percebemos que muitos cães adoeciam por causa do estresse de não passear  e se relacionar com outros cães , pensando em ajudar os cães e seus donos  nisso  criamos a passeio com cães para que todos os donos que não tem tempo pra passear e cuidar do  seu bichinho possa ainda sim ter um cão feliz e saudável</p>
               <a href="https://passeiocomcaes.000webhostapp.com/contato" class="btn">Contato</a>
            </div>
            <!-- /callout-box  -->
         </div>
         <!-- /row-fluid -->
      </section>
      <!-- /callout -->
      <!-- Section Stats --
      <section id="stats" class="bg-lightcolor2">
         <div class="section-heading text-center">
               <h2>Our Stats</h2>
            </div>
         <div class="container">
            <div class="col-lg-9 col-md-8 col-sm-8">
               <div class="text-center">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <!-- Number 1 --
                     <div class="numscroller" data-slno='1' data-min='0' data-max='180' data-delay='20' data-increment="19">0</div>
                     <h5>Customers</h5>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <!-- Number 2 --
                     <div class="numscroller" data-slno='1' data-min='0' data-max='16' data-delay='10' data-increment="9">0</div>
                     <h5>Professionals</h5>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <!-- Number 3 --
                     <div class="numscroller" data-slno='1' data-min='0' data-max='67' data-delay='20' data-increment="19">0</div>
                     <h5>Pets Hosted</h5>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <!-- Number 4 --
                     <div class="numscroller" data-slno='1' data-min='0' data-max='50' data-delay='10' data-increment="9">0</div>
                     <h5>Products</h5>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Section Ends-->
    
      <!-- Section Contact  -->
      <section id="contact-index">
         <div class="container">
            <div class="section-heading">
               <h2>Contato</h2>
            </div>
            <div class="col-lg-7 col-lg-offset-5 col-md-8 col-md-offset-2">
               <!-- contact info -->
               <h4>Information </h4>
               <ul class="list-inline">
                        <li><i class="fa fa-envelope"></i><a href="mailto:Passeiocomcaes10@gmail.com">Passeiocomcaes10@gmail.com</a></li>
                        <li><i class="fa fa-phone margin-icon"></i>Cel: 21 990271287</li>
                        <li><i class="fa fa-map-marker margin-icon"></i>Roger Neves</li>
                     </ul>
               <!-- address info -->
               <p>QUalquer sujeitão , duvida so entrar em contato com a gente ficaremos muito feliz em responde-los.                     </p>
               <h4 class="margin1">Envie uma Mensagem:</h4>
               <!-- Form Starts -->
               <div id="contact_form">
                  <div class="form-group">
                      <?php echo do_shortcode('[contact-form-7 class="form-control input-field"
       id="108" 
       title="Formulário de contato 1"]'); ?>
               </div>
               <!-- Contact results -->
               <div id="contact_results"></div>
            </div>
            <!-- Contact -->
            <!-- /col-lg-5-->
         </div>
         <!-- /container -->
      </section>
      <!-- /Section ends -->	
      <div class="container-fluid">
         <!-- map-->
        
<?php include('mapa.php'); ?>

      </div>
      <!-- Footer -->		
     <?php get_footer(); ?>