<?php
    /*
    Template Name: Uslugi
    */
?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package Agencyup
 */
get_header(); 
?>
<!--==================== ti breadcrumb section ====================-->
<?php get_template_part('index','banner'); ?>
<!--==================== main content section ====================-->
<!-- wp:group -->
<main id="content">
    <div class="container">
      <div class="row">
	  <!-- test ajax -->
	  <div class="sale_buton" data-price = "123">расчитать скидку</div>
	  <div class="results"></div> <!-- здесь будет выводится результат -->
	  
	  <script type="text/javascript"> 
        jQuery(document).ready(function ($) { 
            $('.sale_buton').click(function () { // кликнули на кнопку
                $.ajax({
                    url: '/wp-admin/admin-ajax.php', // сделали запрос 
                    type: "POST", // указали метод
                    data: { // передаем параметры отправляемого запроса
                        action: 'my_ajax_action', // вызываем хук который обработает наш ajax запрос
                        price: $(this).data('price'), // передаем параметры из кнопки 
                    },

                    success: function (data) {// получаем результат в переменной data
                                $('.results').html(data); // выводим результат в новый див 

                    }
                }); 
            });   
        }); 
    </script>
	  
		<!-- Blog Area -->
						<div class="col-md-9">
					
			
<div class="wp-block-group"><div class="wp-block-group__inner-container">
<div class="wp-block-columns">
<div class="wp-block-column" style="flex-basis:50%">
<figure class="wp-block-table"><table class="has-subtle-pale-blue-background-color has-background"><tbody><tr><td>Юрист по ДТП</td></tr><tr><td>Семейные дела</td></tr><tr><td>Наследство</td></tr><tr><td>Пенсионные споры</td></tr><tr><td>Защита прав потребителей</td></tr><tr><td>Арбитраж для бизнеса</td></tr><tr><td>Трудовые споры</td></tr><tr><td>Недвижимость</td></tr><tr><td>Банкротство физических лиц</td></tr></tbody></table></figure>
</div>



<div class="wp-block-column">
<figure class="wp-block-image size-medium is-style-rounded"><img loading="lazy" width="300" height="300" src="http://newsite/wp-content/uploads/2021/02/rus-1-300x300.jpg" alt="" class="wp-image-46" srcset="http://newsite/wp-content/uploads/2021/02/rus-1-300x300.jpg 300w, http://newsite/wp-content/uploads/2021/02/rus-1-150x150.jpg 150w, http://newsite/wp-content/uploads/2021/02/rus-1.jpg 638w" sizes="(max-width: 300px) 100vw, 300px"></figure>
</div>
</div>
</div></div>
				
			</div>
			<!--Sidebar Area-->
			<aside class="col-md-3">
							</aside>
						<!--Sidebar Area-->
			</div>
		</div>
	</main>
<?php
get_footer();

