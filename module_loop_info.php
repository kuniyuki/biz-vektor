<?php $taxo_catelist = get_the_term_list( $post->ID,'info-cat','','',''); ?>
<li>
<span class="infoDate"><?php echo esc_html( get_the_date() ); ?></span>
<span class="infoCate"><?php echo $taxo_catelist; ?></span>
<?php if ( is_user_logged_in() == TRUE ) : edit_post_link(__('Edit', 'biz-vektor'), '<span class="edit-link edit-item">[ ', ' ]</span>');endif ?>
<span class="infoTxt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
</li>