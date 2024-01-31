<?php if ( ashe_options('header_image_label') === true ) : ?>
    <!-- Début de la section d'en-tête -->

    <div class="entry-header">
        <div class="cv-outer">
        <div class="cv-inner">
            <div class="header-logo">

                <?php if ( has_custom_logo() ) : 
                // Vérifie si un logo personnalisé est défini

                $custom_logo_id = get_theme_mod( 'custom_logo' );
                // Obtient l'ID du logo personnalisé

                $custom_logo    = wp_get_attachment_image_src( $custom_logo_id , 'medium' );
                // Obtient l'image du logo personnalisé

                ?>

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( bloginfo('name') ); ?>" class="logo-img">
                        <!-- Lien du logo -->
                        <?php esc_attr( bloginfo('name') ); ?>
                        <!-- Affiche le nom du site pour l'attribut alt du logo -->
                    </a>

                <?php else : 
                // S'il n'y a pas de logo personnalisé

                ?>

                    <!-- Utilisation d'un lien simple pour le titre, pas dans un h1 -->
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo-a"><?php echo bloginfo( 'title' ); ?></a>
                    <!-- Lien vers la page d'accueil avec le titre du site -->

                <?php endif; ?>

                <!-- Changement du paragraphe en h1 pour la description du site -->
                <h1 class="site-description"><?php echo bloginfo( 'description' ); ?></h1>
                <!-- Affiche la description du site dans un h1 pour le SEO -->

            </div>
        </div>
        </div>
    </div>

<?php endif; ?>
<!-- Fin de la section d'en-tête -->
